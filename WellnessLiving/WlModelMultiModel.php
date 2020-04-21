<?php

namespace WellnessLiving;

final class WlModelMultiModel extends WlModelAbstract
{
  private $a_model = [];
  private $r_multi_curl;

  /**
   * Adds a model to multi Curl request
   *
   * @param WlModelAbstract $o_model
   */
  public function add(WlModelAbstract $o_model)
  {
    $this->a_model[] = $o_model;
  }

  /**
   * This method executes the multi Curl request
   *
   * @param string $s_method
   * @throws WlAssertException
   * @throws WlUserException
   */
  private function requestMulti(string $s_method)
  {
    $a_request_prepare = [];
    $this->r_multi_curl = curl_multi_init();
    foreach($this->a_model as $o_model)
    {
      /** @var WlModelAbstract $o_model */
      $a_request = $o_model->requestPrepare($s_method);
      $a_request['o_model'] = $o_model;
      $a_request_prepare[] = $a_request;
      curl_multi_add_handle($this->r_multi_curl, $a_request['r_curl']);
    }
    do
    {
      $i_status = curl_multi_exec($this->r_multi_curl, $i_active);
      if($i_active)
        curl_multi_select($this->r_multi_curl);
    }
    while($i_active && $i_status == CURLM_OK);

    foreach($a_request_prepare as $a_request)
    {
      $s_response = curl_multi_getcontent($a_request['r_curl']);
      /** @var WlModelAbstract $o_model */
      $a_request['o_model']->requestResult($s_method, $a_request['r_curl'], $a_request['o_request'], $a_request['a_field'], $s_response);

    }
    curl_multi_close($this->r_multi_curl);

  }

  /**
   * Performs multi request with GET method.
   *
   * @throws WlAssertException In a case of an assertion.
   * @throws WlUserException In a case of a user-level error.
   */
  public function getMulti():void
  {
    $this->requestMulti('get');
  }

  /**
   * Performs multi request with POST method.
   *
   * @throws WlAssertException In a case of an assertion.
   * @throws WlUserException In a case of a user-level error.
   */
  public function postMulti():void
  {
    $this->requestMulti('post');
  }

  /**
   * Performs multi request with PUT method.
   *
   * @throws WlAssertException In a case of an assertion.
   * @throws WlUserException In a case of a user-level error.
   */
  public function putMulti():void
  {
    $this->requestMulti('put');
  }

  /**
   * Closes multi curl resource.
   *
   * @param $r_curl
   */
  protected function closeCurl($r_curl):void
  {
    curl_multi_remove_handle($this->r_multi_curl, $r_curl);
  }
}

?>