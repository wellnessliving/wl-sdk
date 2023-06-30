<?php

namespace WellnessLiving\Wl\Classes\Promotion;

use WellnessLiving\WlModelAbstract;

/**
 * Returns a list of promotions that can pay for a business's classes or events.
 */
class ClassPromotionModel extends WlModelAbstract
{
  /**
   * Promotion data with the following structure:<dl>
   *   <dt>string <var>k_promotion</var></dt>
   *   <dd>The promotion key.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>The title of the promotion.</dd>
   *   <dt>int <var>id_program</var></dt>
   *   <dd>One of {@link \WellnessLiving\WlProgramSid} constants.</dd>
   *   <dt>bool <var>is_select</var></dt>
   *   <dd><tt>true</tt> if the promotion is related to the class or event, <tt>false</tt> otherwise.</dd>
   * </dl>.
   *
   * @get result
   * @var array[]
   */
  public $a_promotion = [];

  /**
   * Determines whether the class is an event or not.
   *
   * @get get
   * @var bool
   */
  public $is_event = false;

  /**
   * `true` if login type or group restrictions are ignored and all pricing options will be returned.
   *   This will require staff or admin access level.
   * `false` if api should return only pricing options, which are available for the current user.
   *
   * @get get
   * @var bool
   */
  public $is_login_type_ignore = false;

  /**
   * `true` if promotions should only be returned if they're related to the given class or event.
   * `false` if all promotions should be returned, even if they aren't related to the given class or event.
   *
   * @get get
   * @var bool
   */
  public $is_related_only = false;

  /**
   * The key of the business.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The class key.
   * The class or event with which you want to connect the promotions. <tt>null</tt> or <tt>0</tt> if you need to return a list
   * of promotions for an uncreated class or event.
   *
   * @get get
   * @var string|null
   */
  public $k_class;

  /**
   * Default promotion key.
   * `null` if `k_class` was not provided, or if the class has no default promotion.
   *
   * @get result
   * @var string|null
   */
  public $k_promotion_default;
}

?>