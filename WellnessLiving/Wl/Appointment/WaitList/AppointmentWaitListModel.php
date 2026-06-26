<?php

namespace WellnessLiving\Wl\Appointment\WaitList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Schedule\Page\WlVisitNoteSid;

/**
 * Api for manage wait list for an appointment.
 *
 * @method WlModelRequest get() Gets information about the appointment and wait list.
 */
class AppointmentWaitListModel extends WlModelAbstract
{
  /**
   * Information about the appointment. Has next structure: 
   *
   * <dl>
   *   <dt>int `i_wait_list_limit`</dt>
   *   <dd>Maximum number of clients on wait list for the appointment.</dd>
   * 
   *   <dt>bool `is_service`</dt>
   *   <dd><tt>true</tt> if the appointment is reserved for service, <tt>false</tt> if for asset.</dd>
   * 
   *   <dt>bool `is_wait_list_limit`</dt>
   *   <dd>`true` to use service specific wait list limit, `false` to use the limit from default policies.</dd>
   * 
   *   <dt>string `dtl_session_end`</dt>
   *   <dd>Local end datetime of the appointment.</dd>
   * 
   *   <dt>string `dtl_session_start`</dt>
   *   <dd>Local start datetime of the appointment.</dd>
   * 
   *   <dt>string `text_appointment`</dt>
   *   <dd>Service or asset title</dd>
   * 
   *   <dt>string `text_location`</dt>
   *   <dd>Location title.</dd>
   * 
   *   <dt>string|null `text_staff`</dt>
   *   <dd>Staff name. <tt>null</tt> if the appointment is reserved for asset.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_appointment = [];

  /**
   * List of visits in wait list. Each element has next structure:
   *
   * <dl>
   *   <dt>array `a_addon`</dt>
   *   <dd>
   *     A list of addons. Each element has next structure:
   *     <dl>
   *       <dt>string `k_shop_product_options`</dt>
   *       <dd>Key of the shop product option.</dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Title of the product.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_answer`</dt>
   *   <dd>
   *     List of answers for the appointment question. Each element has next structure:
   *     <dl>
   *       <dt>string `text_answer`</dt>
   *       <dd>Answer.</dd>
   * 
   *       <dt>string `text_question`</dt>
   *       <dd>Question.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_resource`</dt>
   *   <dd>
   *     List of resources for booked service. Each element has next structure:
   *     <dl>
   *       <dt>string `text_resource`</dt>
   *       <dd>Title of the resource.</dd>
   * 
   *       <dt>string `text_resource_type`</dt>
   *       <dd>Title of the resource type.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_note`</dt>
   *   <dd>
   *     Information for visit note (SOAP and QUICK types):
   *     <dl>
   *       <dt>int `id_note`</dt>
   *       <dd>Type of note. One of {@link WlVisitNoteSid} constants.</dd>
   * 
   *       <dt>string `sid_icon`</dt>
   *       <dd>Icon class for a note by note type.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_user`</dt>
   *   <dd>
   *     Information about user:
   *     <dl>
   *       <dt>string `text_mail`</dt>
   *       <dd>User email. Empty string if current user has no access to this information.</dd>
   * 
   *       <dt>string `text_name`</dt>
   *       <dd>User name.</dd>
   * 
   *       <dt>string `text_phone`</dt>
   *       <dd>User phone. Empty string if the user has no phone or current user has not access to this information.</dd>
   * 
   *       <dt>string `uid`</dt>
   *       <dd>User key.</dd>
   * 
   *       <dt>string `url_logo`</dt>
   *       <dd>Link to user logo.</dd>
   * 
   *       <dt>string `url_notify_mail`</dt>
   *       <dd>Link to get form for send mail to user.</dd>
   * 
   *       <dt>string `url_notify_sms`</dt>
   *       <dd>Link to get form for send sms to user.</dd>
   * 
   *       <dt>string `url_profile`</dt>
   *       <dd>Link to user profile.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `dtl_book`</dt>
   *   <dd>Local datetime when the visit was booked (in MySQL format).</dd>
   * 
   *   <dt>bool `is_free`</dt>
   *   <dd>Whether the visit is free. Does not need a pay.</dd>
   * 
   *   <dt>bool `is_paid`</dt>
   *   <dd>Whether the visit is paid.</dd>
   * 
   *   <dt>bool `is_wait_confirm`</dt>
   *   <dd>Whether is awaiting for user confirmation.</dd>
   * 
   *   <dt>string `k_visit`</dt>
   *   <dd>Visit key.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_wait = [];

  /**
   * Whether or not to send email notification.
   *
   * `true` - enable check-in by email;
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_mail;

  /**
   * Whether or not to send push notification.
   *
   * `true` - enable check-in by push;
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_push;

  /**
   * Whether or not to send SMS notification.
   *
   * `true` - enable check-in by sms;
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_sms;

  /**
   * Appointment key.
   *
   * @get get
   * @var string
   */
  public $k_appointment = '';

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>