<?php

namespace WellnessLiving\Wl\Appointment\Book\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves information about service categories.
 */
class PurchaseModel extends WlModelAbstract
{
  /**
   * An array with information about available Purchase Options.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var array|null
   */
  public $a_purchase = null;

  /**
   * A list of the client`s login promotions that can be applied to a given service.
   * <dl>
   *   <dt>array <var>a_login_promotion_info</var></dt>
   *   <dd>
   *      Information about the Purchase Option. It contains the following information:
   *      <dl>
   *        <dt>int <var>i_limit</var></dt>
   *        <dd>The count of visits that the Purchase Option allows the client to make.</dd>
   *        <dt>int|null <var>i_limit_duration</var></dt>
   *        <dd>The maximum number of minutes that current Purchase Option can be used for.</dd>
   *        <dt>int <var>i_remain</var></dt>
   *        <dd>The count of the remaining visits.</dd>
   *        <dt>int|null <var>i_remain_duration</var></dt>
   *        <dd>The number of minutes left in this Purchase Option.</dd>
   *      </dl>
   *   </dd>
   *   <dt>string[] <var>a_visit_limit</var></dt>
   *   <dd>The list of calendar restrictions of the Purchase Option. For example, four per week.</dd>
   *   <dt>array <var>a_restrict</var></dt>
   *   <dd>Data about the shortest restriction period:
   *     <dl>
   *       <dt>int <var>i_limit</var></dt>
   *       <dd>The limit of visits for the shortest restriction period.</dd>
   *       <dt>int <var>i_remain</var></dt>
   *       <dd>The number of remaining visits for the shortest restriction period.</dd>
   *       <dt>string <var>text_restriction</var></dt>
   *       <dd>The description of the shortest restriction period. For example "this week" or "for a four-day period".</dd>
   *     </dl>
   *   </dd>
   *   <dt>array[] <var>a_restrict_data</var></dt>
   *   <dd>Data about all restriction periods. Given as an array, where each record has the following structure:
   *     <dl>
   *       <dt>int <var>i_book</var></dt>
   *       <dd>The count of future sessions that are paid with this Purchase Option.</dd>
   *       <dt>int <var>i_limit</var></dt>
   *       <dd>The limit of visits for the restriction period.</dd>
   *       <dt>int <var>i_remain</var></dt>
   *       <dd>The number of remaining visits for the restriction period.</dd>
   *       <dt>int <var>i_use</var></dt>
   *       <dd>The usage count of the Purchase Option.</dd>
   *       <dt>int <var>i_visit_past</var></dt>
   *       <dd>
   *         The count of attended sessions before the last renewal.
   *         This will be `0` if no sessions before the last renewal or if the Purchase Option doesn't auto-renew.
   *       </dd>
   *       <dt>string <var>text_restriction</var></dt>
   *       <dd>The description of restriction period. For example, "this week" or "for a four-day period".</dd>
   *     </dl>
   *   </dd>
   *   <dt>int <var>i_limit</var></dt>
   *   <dd>The count of visits that the Purchase Option allows the client to make.</dd>
   *   <dt>int|null <var>i_limit_duration</var></dt>
   *   <dd>The maximum number of minutes that current Purchase Option can be used for.</dd>
   *   <dt>int <var>id_program</var></dt>
   *   <dd>The program ID for promotions. One of the {@link \WellnessLiving\WlProgramSid} constants.</dd>
   *   <dt>string <var>k_login_promotion</var></dt>
   *   <dd>The Purchase Option login key.</dd>
   *   <dt>string <var>s_class_include</var></dt>
   *   <dd>The list of services provided by this Purchase Option.</dd>
   *   <dt>string <var>s_description</var></dt>
   *   <dd>The Purchase Option description.</dd>
   *   <dt>string <var>s_duration</var></dt>
   *   <dd>The Purchase Option duration.</dd>
   *   <dt>string <var>s_title</var></dt>
   *   <dd>The Purchase Option name.</dd>
   *   <dt>string <var>text_package_item</var></dt>
   *   <dd>If this Purchase Option is a package, then this field contains a list of Purchase Options contained in the package.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_login_promotion = [];

  /**
   * The date to use to check for expiration of Purchase Options.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $dt_date = null;

  /**
   * The asset booking duration.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $i_duration = null;

  /**
   * <b>true</b> - get all Purchase Options suitable for appointment.
   *
   * <b>false</b> - get only Purchase Options available for the client.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * The location ID used to select available Purchase Options. Available Purchase Options are ones the client already owns.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The Purchase Option ID used to pay for the appointment.
   *
   * This will be `null` if the client doesn't have a suitable Purchase Option.
   *
   * @get result
   * @var string|null
   */
  public $k_login_promotion = null;

  /**
   * The resource ID.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_resource = null;

  /**
   * The service ID used to select available Purchase Options.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;

  /**
   * The user ID.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>