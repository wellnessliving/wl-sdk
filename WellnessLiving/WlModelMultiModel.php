<?php

namespace WellnessLiving;

/**
 * This class represents service model witch allows to execute multi curl request for the set of other models.
 *
 * You can use this model in case you need to make more than one request with special method to the API.
 * For example, if you have some models, and you need to make "get" requests at parallel (with {@link \curl_multi_exec()}),
 * just create new {@link WlModelMultiModel}, and pass your models to {@link WlModelMultiModel} using method {@link \WlModelMultiModel::add()}.
 * Then call method {@link \WlModelMultiModel::getMulti()} to trigger multi curl request for all your added models.
 *
 * @example WellnessLiving/doc/multi-model.md
 */
final class WlModelMultiModel extends WlModelAbstract
{
  /**
   * List of {@link WlModelAbstract} objects.
   *
   * @var WlModelAbstract[]
   */
  private $a_model = [];

  /**
   * Curl resource.
   *
   * @var resource
   */
  private $r_multi_curl;

  /**
   * Adds a model to multi Curl request.
   *
   * @param WlModelAbstract $o_model Model to be part of multi curl request.
   */
  public function add(WlModelAbstract $o_model)
  {
    $this->a_model[] = $o_model;
  }

  /**
   * This method executes the multi Curl request.
   *
   * @param string $s_method Request method. One of <tt>'get'</tt>, <tt>'post'</tt>, <tt>'put'</tt>, <tt>'delete'</tt>.
   * @throws WlAssertException In a case of an assertion.
   * @throws WlUserException In a case of a user-level error.
   */
  private function requestMulti($s_method)
  {
    $a_request_prepare = [];
    $this->r_multi_curl = curl_multi_init();
    foreach($this->a_model as $o_model)
    {
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
      $o_model=$a_request['o_model'];
      $o_model->requestResult($s_method, $a_request['r_curl'], $a_request['o_request'], $a_request['a_field'], $s_response, $a_request['s_post']);
    }
    curl_multi_close($this->r_multi_curl);
  }

  /**
   * Performs multi request with GET method.
   *
   * @throws WlAssertException In a case of an assertion.
   * @throws WlUserException In a case of a user-level error.
   */
  public function getMulti()
  {
    $this->requestMulti('get');
  }

  /**
   * Performs multi request with POST method.
   *
   * @throws WlAssertException In a case of an assertion.
   * @throws WlUserException In a case of a user-level error.
   */
  public function postMulti()
  {
    $this->requestMulti('post');
  }

  /**
   * Performs multi request with PUT method.
   *
   * @throws WlAssertException In a case of an assertion.
   * @throws WlUserException In a case of a user-level error.
   */
  public function putMulti()
  {
    $this->requestMulti('put');
  }

  /**
   * Closes multi curl resource.
   *
   * @param resource $r_curl Curl resource to be closed.
   */
  protected function closeCurl($r_curl)
  {
    curl_multi_remove_handle($this->r_multi_curl, $r_curl);
  }
}

?>