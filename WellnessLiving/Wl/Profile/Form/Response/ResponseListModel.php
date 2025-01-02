<?php

namespace WellnessLiving\Wl\Profile\Form\Response;

use WellnessLiving\Core\Quiz\ResponseStatusSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Quiz\Response\SourceSid;

/**
 * Retrieves a list of a user's quiz responses.
 */
class ResponseListModel extends WlModelAbstract
{
  /**
   * The list of uncompleted quiz responses. Each element has the next structure: <dl>
   *  <dt>string[] <var>a_visit</var></dt>
   *  <dd>
   *    List of visit keys associated with uncompleted response.
   *    Key is visit key.
   *    Value is date of visit.
   *  </dd>
   *  <dt>string <var>dtl_date</var></dt>
   *  <dd>The date of the request to fill out a quiz form.</dd>
   *  <dt>int <var>id_source</var></dt>
   *  <dd>The place where the request to fill out a quiz form occurred. One of the {@link SourceSid} constants.</dd>
   *  <dt>bool <var>is_private</var></dt>
   *  <dd>
   *    Determines whether the form can be viewed by staff member only after confirmation.
   *    `true` - the form can be viewed only after confirmation.
   *    `false` - the form can always be viewed.
   *  </dd>
   *  <dt>string <var>k_quiz</var></dt>
   *  <dd>The quiz key.</dd>
   *  <dt>string <var>k_quiz_login</var></dt>
   *  <dd>The key of the request.</dd>
   *  <dt>string|null <var>k_quiz_response</var></dt>
   *  <dd>
   *    Key of the response.
   *    Not `null` in case when response in draft status.
   *  </dd>
   *  <dt>string <var>text_title</var></dt>
   *  <dd>The quiz title.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_quiz_login = [];

  /**
   * The list of completed quiz responses. Each element has the next structure: <dl>
   *  <dt>string[] <var>a_visit</var></dt>
   *  <dd>
   *    List of visit keys associated with uncompleted response.
   *    Key is visit key.
   *    Value is date of visit.
   *  </dd>
   *  <dt>string <var>dtl_date</var></dt>
   *  <dd>The date of the request to fill out a quiz form.</dd>
   *  <dt>int <var>id_source</var></dt>
   *  <dd>The place where the request to fill out the quiz form occurred. One of the {@link SourceSid} constants.</dd>
   *  <dt>int <var>id_status</var></dt>
   *  <dd>Status of the response. One of {@link ResponseStatusSid} constants.</dd>
   *  <dt>bool <var>is_private</var></dt>
   *  <dd>
   *    Determines whether the form can be viewed by staff member only after confirmation.
   *    `true` - the form can be viewed only after confirmation.
   *    `false` - the form can always be viewed.
   *  </dd>
   *  <dt>string <var>k_quiz</var></dt>
   *  <dd>The quiz key.</dd>
   *  <dt>string <var>k_quiz_login</var></dt>
   *  <dd>The quiz response key.</dd>
   *  <dt>string|null <var>text_amend_date</var></dt>
   *  <dd>
   *    Date when response amended.
   *    `null` if response was not edited.
   *  </dd>
   *  <dt>string|null <var>text_amend_user</var></dt>
   *  <dd>
   *    Name of the user who amend the response.
   *    `null` if response was not edited.
   *  </dd>
   *  <dt>string <var>text_title</var></dt>
   *  <dd>The quiz title.</dd>
   *  <dt>string <var>text_user</var></dt>
   *  <dd>Name of user who complete response or start a draft.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_quiz_response = [];

  /**
   * Whether response can be amended by current user.
   *
   * @get result
   * @var bool
   */
  public $can_amend;

  /**
   * Whether response can be filled by current user.
   *
   * @get result
   * @var bool
   */
  public $can_fill;

  /**
   * Whether response can be removed by current user.
   *
   * @get result
   * @var bool
   */
  public $can_remove;

  /**
   * Whether response can be viewed by current user.
   *
   * @get result
   * @var bool
   */
  public $can_view;

  /**
   * Defines whether completed forms should not be included in result list of forms.
   *
   * `true` to exclude completed forms from result.
   * `false` to include completed forms to result.
   *
   * @get get
   * @var bool
   */
  public $hide_completed = false;

  /**
   * Defines whether optional uncompleted forms should not be included in result list of forms.
   *
   * `true` to exclude optional uncompleted forms from result.
   * `false` to include optional uncompleted forms to result.
   *
   * @get get
   * @var bool
   */
  public $hide_optional = false;

  /**
   * This will be `true` if the API is being used from the backend. Otherwise, this will be `false`.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * The key of the business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The key of the user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>