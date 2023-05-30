<?php

namespace WellnessLiving\Wl\Profile\Form\Response;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves list of user's quiz responses.
 */
class ResponseListModel extends WlModelAbstract
{
  /**
   * List of uncompleted quiz responses. Each element has the next structure: <dl>
   *  <dt>string <var>dtl_date</var></dt>
   *  <dd>Date of the request to fill out a quiz form.</dd>
   *  <dt>int <var>id_source</var></dt>
   *  <dd>Place where request to fill out a quiz form occurred. One of {@link \WellnessLiving\Wl\Quiz\Response\SourceSid} constants.</dd>
   *  <dt>string <var>k_quiz</var></dt>
   *  <dd>Quiz key.</dd>
   *  <dt>string <var>k_quiz_login</var></dt>
   *  <dd>Key of the request.</dd>
   *  <dt>string <var>text_title</var></dt>
   *  <dd>Title of the quiz.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_quiz_login = [];

  /**
   * List of completed quiz responses. Each element has the next structure: <dl>
   *  <dt>string <var>dtl_date</var></dt>
   *  <dd>Date of a request to fill out a quiz form.</dd>
   *  <dt>int <var>id_source</var></dt>
   *  <dd>Place where request to fill out a quiz form occurred. One of {@link \WellnessLiving\Wl\Quiz\Response\SourceSid} constants.</dd>
   *  <dt>string <var>k_quiz</var></dt>
   *  <dd>Quiz key.</dd>
   *  <dt>string <var>k_quiz_login</var></dt>
   *  <dd>Quiz response key.</dd>
   *  <dt>string <var>text_title</var></dt>
   *  <dd>Title of the quiz.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_quiz_response = [];

  /**
   * Key of a business to show information for.
   *
   * @get get
   * @var string
   */
  public  $k_business = '';

  /**
   * Key of a user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>