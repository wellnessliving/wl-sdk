<?php

namespace WellnessLiving\Wl\Member\Progress\Field;

use WellnessLiving\WlModelAbstract;

/**
 * Performs ajax requests for progress fields edit page.
 */
class StateModel extends WlModelAbstract
{
  /**
   * Field ID.
   *
   * @put result
   * @var int|null
   */
  public $id_field;

  /**
   * Whether field is active and should be displayed on page.
   *
   * @put post,result
   * @var bool|null
   */
  public $is_active;

  /**
   * Whether this field is public. If this field is set to <tt>false</tt>, this field is not visible to clients.
   *
   * @put post,result
   * @var bool|null
   */
  public $is_public;

  /**
   * Whether field value is required for clients.
   *
   * @put post,result
   * @var bool|null
   */
  public $is_require;

  /**
   * Whether field value is required for staffs.
   *
   * @put post,result
   * @var bool|null
   */
  public $is_require_staff;

  /**
   * Business key.
   *
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * Field key.
   *
   * @put get
   * @var string
   */
  public $k_field;

  /**
   * Field title.
   *
   * @put result
   * @var string|null
   */
  public $text_title;
}

?>