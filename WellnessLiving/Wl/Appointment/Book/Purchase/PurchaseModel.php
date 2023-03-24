<?php

namespace WellnessLiving\Wl\Appointment\Book\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about service categories.
 */
class PurchaseModel extends WlModelAbstract
{
  /**
   * An array with information about available Purchase Options.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var array
   */
  public $a_purchase = null;

  /**
   * A list of the client`s login promotions which can be applied to a given service.
   * <dl>
   *   <dt>array <var>a_login_promotion_info</var></dt>
   *   <dd>
   *      <dl>
   *        <dt>int <var>i_limit</var></dt>
   *        <dd>The count of visits that purchase option allows to make.</dd>
   *        <dt>int|null <var>i_limit_duration</var></dt>
   *        <dd>The maximum number of minutes that current promotion can be used.</dd>
   *        <dt>int <var>i_remain</var></dt>
   *        <dd>The count of the remaining visits.</dd>
   *        <dt>int|null <var>i_remain_duration</var></dt>
   *        <dd>The number of minutes left in this promotion.</dd>
   *      </dl>
   *   </dd>
   *   <dt>string[] <var>a_visit_limit</var></dt>
   *   <dd>The list of calendar restrictions of the promotion, for example, 4 per week.</dd>
   *   <dt>array <var>a_restrict</var></dt>
   *   <dd>The data about the shortest restriction period:
   *     <dl>
   *       <dt>int <var>i_limit</var></dt>
   *       <dd>The limit of visits for shortest restriction period</dd>
   *       <dt>int <var>i_remain</var></dt>
   *       <dd>The number of remain visits for shortest restriction period</dd>
   *       <dt>string <var>text_restriction</var></dt>
   *       <dd>The description of shortest restriction period, for example "this week" or "for 4 day period"</dd>
   *     </dl>
   *   </dd>
   *   <dt>array[] <var>a_restrict_data</var></dt>
   *   <dd>The data about all restriction periods. Given as an array, where each record has following structure:
   *     <dl>
   *       <dt>int <var>i_book</var></dt>
   *       <dd>The count of future sessions that are paid with this promotion.</dd>
   *       <dt>int <var>i_limit</var></dt>
   *       <dd>The limit of visits for restriction period</dd>
   *       <dt>int <var>i_remain</var></dt>
   *       <dd>The number of remain visits for restriction period</dd>
   *       <dt>int <var>i_use</var></dt>
   *       <dd>The count of usage of the promotion.</dd>
   *       <dt>int <var>i_visit_past</var></dt>
   *       <dd>
   *         The count of attended sessions before the last renewal.
   *         `0` if no sessions before the last renew or the promotion does not auto-renew.
   *       </dd>
   *       <dt>string <var>text_restriction</var></dt>
   *       <dd>The description of restriction period, for example "this week" or "for 4 day period"</dd>
   *     </dl>
   *   </dd>
   *   <dt>int <var>i_limit</var></dt>
   *   <dd>The count of visits that the purchase option allows the client to make.</dd>
   *   <dt>int|null <var>i_limit_duration</var></dt>
   *   <dd>The maximum number of minutes that current promotion can be used.</dd>
   *   <dt>int <var>id_program</var></dt>
   *   <dd>The program ID for promotions, one of the {@link \WellnessLiving\WlProgramSid} constants.</dd>
   *   <dt>string <var>k_login_promotion</var></dt>
   *   <dd>The login promotion key.</dd>
   *   <dt>string <var>s_class_include</var></dt>
   *   <dd>This list of services provided by this promotion.</dd>
   *   <dt>string <var>s_description</var></dt>
   *   <dd>The description of the purchase option.</dd>
   *   <dt>string <var>s_duration</var></dt>
   *   <dd>The duration of the promotion.</dd>
   *   <dt>string <var>s_title</var></dt>
   *   <dd>The name of the purchase option.</dd>
   *   <dt>string <var>text_package_item</var></dt>
   *   <dd>If this promotion is a package, then this field contains a list of promotions contained in the package.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_login_promotion;

  /**
   * The date to use to check for expiration of Purchase Options.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $dt_date = null;

  /**
   * The duration of the asset booking.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $i_duration = null;

  /**
   * <tt>true</tt> - get all promotions suitable for appointment.
   * <tt>false</tt> - get only promotions available for the client.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * The location ID used to select available Purchase Options (Purchase Options the client already owns).
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The promotion ID used to pay for the appointment.
   *
   * <tt>null</tt> if the client doesn't have a suitable promotion.
   *
   * @get result
   * @var string|null
   */
  public $k_login_promotion = null;

  /**
   * The resource ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_resource = null;

  /**
   * The service ID used to select available Purchase Options.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;

  /**
   * The user ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>