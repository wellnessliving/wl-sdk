<?php

namespace WellnessLiving\Wl\Classes\Promotion;

use WellnessLiving\WlModelAbstract;

/**
 * Return list of promotion what can in theory pay for class / event from business.
 */
class ClassPromotionModel extends WlModelAbstract
{
  /**
   * Promotion data with structure:<dl>
   *   <dt>string <var>k_promotion</var></dt>
   *   <dd>Promotion key. Primary key in {@link \RsPromotionSql} table.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>Title of promotion.</dd>
   *   <dt>int <var>id_program</var></dt>
   *   <dd>One of {@link \RsProgramSid} constants.</dd>
   *   <dt>bool <var>is_select</var></dt>
   *   <dd><tt>true</tt> if the promotion is related to the class / event, <tt>false</tt> otherwise.</dd>
   * </dl>.
   *
   * @get result
   * @var array[]
   */
  public $a_promotion = [];

  /**
   * Whether the class is an event or not.
   *
   * @get get
   * @var bool
   */
  public $is_event = false;

  /**
   * `true` if not related to the class or event promotions should not be returned.
   * `false` if all promotions should be returned, even if they are not related to the given class or event.
   *
   * @get get
   * @var bool
   */
  public $is_related_only = false;

  /**
   * The key of the business. Primary key in {@link \RsBusinessSql} table.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Class key. Primary key in {@link \RsClassSql} table.
   *  The class / event with which you want to connect the promotions. <tt>null</tt> or <tt>0</tt> if you need to return a list
   *  of promotions for an uncreated class / event.
   *
   * @get get
   * @var string|null
   */
  public $k_class = null;
}

?>