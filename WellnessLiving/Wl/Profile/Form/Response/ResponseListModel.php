<?php

namespace WellnessLiving\Wl\Profile\Form\Response;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of a user's quiz responses.
 */
class ResponseListModel extends WlModelAbstract
{
  /**
   * The list of uncompleted quiz responses. Each element has the next structure: 
   *
   * @get result
   * @var array[]
   */
  public $a_quiz_login = [];

  /**
   * The list of completed quiz responses. Each element has the next structure: 
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