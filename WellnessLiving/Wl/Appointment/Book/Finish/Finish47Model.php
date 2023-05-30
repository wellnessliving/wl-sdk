<?php

namespace WellnessLiving\Wl\Appointment\Book\Finish;

/**
 * An endpoint that completes an appointment booking.
 */
class Finish47Model extends FinishModel
{
  /**
   * All data from the appointment booking provider model.
   *
   * <dl>
   *   <dt>
   *     array [<var>a_product</var>]
   *   </dt>
   *   <dd>
   *     Add-ons to appointment. Specify for appointment booking only.
   *     Old format: array keys - primary keys in {@link \RsShopProductOptionSql} table.
   *     New format: each element is an array:
   *       <dt>int <var>i_count</var></dt><dd>Add-on count</dd>
   *       <dt>string <var>k_shop_product_option</var></dt><dd>Key of add-on, primary key in {@link \RsShopProductOptionSql} table.</dd>
   *   </dd>
   *   <dt>
   *     array [<var>a_repeat</var>]
   *   </dt>
   *   <dd>
   *     Recurring booking information:
   *     <dl>
   *       <dt>
   *         int[] [<var>a_week</var>]
   *       </dt>
   *       <dd>
   *         Days of week when appointment must repeat. Constants of {@link \ADateWeekSid} class.
   *         Empty if appointment must not repeat weekly.
   *       </dd>
   *       <dt>
   *         string [<var>dl_end</var>]
   *       </dt>
   *       <dd>
   *         Date when appointment repeat must stop. Empty if repeat must not stop at a certain date.
   *       </dd>
   *       <dt>
   *         int [<var>i_occurrence</var>]
   *       </dt>
   *       <dd>
   *         Number of occurrences after that appointment repeat must stop.
   *         Empty if repeat must not stop after a certain number of occurrences.
   *       </dd>
   *       <dt>
   *         int <var>i_period</var>
   *       </dt>
   *       <dd>
   *         Frequency of appointment repeating.
   *       </dd>
   *       <dt>
   *         int <var>id_period</var>
   *       </dt>
   *       <dd>
   *         Measurement unit of <tt>i_period</tt>. One of {@link \ADurationSid} constants.
   *       </dd>
   *       <dt>
   *         bool [<var>is_month</var>]
   *       </dt>
   *       <dd>
   *         <tt>true</tt> if appointment must repeat monthly at the same date.
   *         <tt>false</tt> if appointment must repeat monthly at the same week day.
   *         <tt>null</tt> if appointment must not repeat monthly.
   *       </dd>
   *     </dl>
   *     Empty if appointment must not be booked recurring.
   *   </dd>
   *   <dt>
   *     array [<var>a_resource</var>]
   *   </dt>
   *   <dd>
   *     List of assets for appointment booking.
   *     Keys - asset categories; primary keys in {@link \RsResourceTypeSql} table. Values - arrays with next keys:
   *     <dl>
   *       <dt>int [<var>i_index</var>]</dt>
   *       <dd>Asset index on layout. Specify only if asset category has a layout.</dd>
   *       <dt>string <var>k_resource</var></dt>
   *       <dd>Asset. Primary key in {@link \RsResourceSql} table.</dd>
   *     </dl>
   *     Specify only for appointment booking.
   *   </dd>
   *   <dt>
   *     string <var>dt_date</var>
   *   </dt>
   *   <dd>
   *     Date/time for booking in MySQL format. It location timezone.
   *   </dd>
   *   <dt>
   *     int [<var>i_duration</var>]
   *   </dt>
   *   <dd>
   *     Duration for asset booking in minutes. Specify for separate asset booking only.
   *   </dd>
   *   <dt>
   *     int [<var>i_index</var>]
   *   </dt>
   *   <dd>
   *     Asset index on layout.
   *     Specify for separate asset booking only and for a case when asset category has layout only.
   *   </dd>
   *   <dt>
   *     int <var>id_class_tab</var>
   *   </dt>
   *   <dd>
   *     Kind of booking service. One of {@link \Wellnessliving\Wl\Classes\Tab\TabSid} constants.
   *   </dd>
   *   <dt>
   *     int [<var>id_gender_staff</var>]
   *   </dt>
   *   <dd>
   *     Gender of staff member to conduct appointment. One of {@link \WellnessLiving\Core\a\AGenderSid} constants.
   *     Specify for appointment booking only.
   *   </dd>
   *   <dt>
   *     string [<var>k_login_promotion</var>]
   *   </dt>
   *   <dd>
   *     User's pass (membership, package). Primary key in {@link \RsLoginPromotionSql} table.
   *     Specify if you want to set which user's pass (membership, package) book must be payed by.
   *   </dd>
   *   <dt>
   *     string [<var>k_resource</var>]
   *   </dt>
   *   <dd>
   *     Asset booking. Primary key in {@link \RsResourceSql} table. Specify for separate asset booking only.
   *   </dd>
   *   <dt>
   *     string [<var>k_service</var>]
   *   </dt>
   *   <dd>
   *     Appointment booking. Primary key in {@link \RsServiceSql} table. Specify for appointment booking only.
   *   </dd>
   *   <dt>
   *     string [<var>k_staff</var>]
   *   </dt>
   *   <dd>
   *     Staff member to conduct an appointment. Primary key in {@link \RsStaffSql} table.
   *     Specify for appointment booking only.
   *   </dd>
   *   <dt>
   *     string [<var>k_staff_date</var>]
   *   </dt>
   *   <dd>
   *     Staff member to conduct an appointment.
   *     The difference from the <var>k_staff</var> is that this value must be set only in a case
   *     when you want to add customer to an exists appointment.
   *     Primary key in {@link \RsStaffSql} table.
   *     Specify for appointment booking only.
   *   </dd>
   *   <dt>string [<var>m_tip_appointment</var>]</dt>
   *   <dd>Amount of selected tips.</dd>
   * </dl>
   *
   * @post post
   * @var array
   */
  public $a_book_data = [];
}