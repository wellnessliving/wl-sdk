<?php

namespace WellnessLiving\Wl\Mail;

use WellnessLiving\Core\Locale\Language\LocaleLanguageSid;
use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\Thoth\WlPay\PayExceptionSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\AiAgent\Phone\CallOutcomeEnum;
use WellnessLiving\Wl\Business\Account\Subscription\Fitvid\FitvidSubscriptionSid;
use WellnessLiving\Wl\Business\Account\WebsiteSid;
use WellnessLiving\Wl\Mode\ModeSid;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\RsMailCopySid;
use WellnessLiving\Wl\RsMailSid;
use WellnessLiving\Wl\WlServiceSid;

/**
 * Can be used to send email messages.
 *
 * @method WlModelRequest post() Sends email.  Validates the recipient address, business email, subject, and HTML content, then saves the email pattern and dispatches the message to the specified recipient. Rate limiting is applied per hour and per minute.
 */
class SendMailModel extends WlModelAbstract
{
  /**
 * Additional data for the notification.
 *
 * The structure depends on the notification type specified in {@link SendMailModel::$id_mail}.
 *
 * abandoned-checkout (id_mail 220):
 * <dl>
 *   <dt>string `i_id`</dt>
 *   <dd>
 *     Widget analytics event key.
 * 
 * 
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Client user key. </dd>
 * </dl>
 * 
 * ai-link-book (id_mail 206):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>int `id_service`</dt>
 *   <dd>
 *     Optional. Type of the service to book. One of {@link WlServiceSid} constants.
 * If not set, the link leads to the schedule of the business.
 *   </dd>
 * 
 *   <dt>string `k_id`</dt>
 *   <dd>
 *     Optional. Key of the service in the database. Depends on `id_service`.
 * If not set, the link leads to the schedule of the business.
 *   </dd>
 * 
 *   <dt>string `text_url_suffix`</dt>
 *   <dd>Optional. Query string to append to the booking link. If empty or not set, the link is not changed.</dd>
 * </dl>
 * 
 * ai-link-purchase (id_mail 207):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_id`</dt>
 *   <dd>
 *     Optional. Key of the purchase item. If it is not set or empty, the link leads to the catalog
 * of the business.
 *   </dd>
 * 
 *   <dt>int `id_purchase_item`</dt>
 *   <dd>Optional. Type of the purchase item. One of {@link WlPurchaseItemSid} constants.
 * Required if `k_id` is set.</dd>
 * 
 *   <dt>string `text_url_suffix`</dt>
 *   <dd>Optional. Query string to append to the purchase link. If it is not set or empty, the link
 * is not changed.</dd>
 * </dl>
 * 
 * appointment-approve-staff (id_mail 71):
 * <dl>
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit ID.</dd>
 * </dl>
 * 
 * appointment-booked-ai (id_mail 198):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `html_view_conversation_button`</dt>
 *   <dd>Button that staff can click to view the conversation between client and AI Agent.</dd>
 * 
 *   <dt>string `text_client_mail`</dt>
 *   <dd>Client's email address.</dd>
 * 
 *   <dt>string `text_client_name`</dt>
 *   <dd>Client's name.</dd>
 * 
 *   <dt>string `text_client_phone`</dt>
 *   <dd>Client's phone number.</dd>
 * 
 *   <dt>string `text_date_day`</dt>
 *   <dd>Appointment date (display format).</dd>
 * 
 *   <dt>string `text_date_day_sms`</dt>
 *   <dd>Appointment date (SMS format).</dd>
 * 
 *   <dt>string `text_date_time`</dt>
 *   <dd>Appointment time (display format).</dd>
 * 
 *   <dt>string `text_date_time_sms`</dt>
 *   <dd>Appointment time (SMS format).</dd>
 * 
 *   <dt>string `text_location`</dt>
 *   <dd>Appointment location.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Recipient user's key. </dd>
 * 
 *   <dt>string `url_view_conversation_link`</dt>
 *   <dd>URL to view the conversation (for email).</dd>
 * 
 *   <dt>string `url_view_conversation_link_sms`</dt>
 *   <dd>URL to view the conversation (for SMS).</dd>
 * </dl>
 * 
 * appointment-cancel-early-user (id_mail 33):
 * <dl>
 *   <dt>array[] `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit, which must be passed when they are already released (for
 * example, when the visit is canceled). Default is an empty array. Each element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>Primary key of the asset. </dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Key of the business to which the visit belongs.
 *   </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Key of the visit. </dd>
 * </dl>
 * 
 * appointment-cancel-late-user (id_mail 35):
 * <dl>
 *   <dt>array[] `a_asset`</dt>
 *   <dd>
 *     List of assets info. Each element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>Primary key of the asset.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Reservation ID.</dd>
 * </dl>
 * 
 * appointment-cancel-staff (id_mail 32):
 * <dl>
 *   <dt>string `k_appointment`</dt>
 *   <dd>
 *     If you want to send simple cancellation email to appointment staff - pass this parameter only.
 *  In other cases - read further.
 *   </dd>
 * 
 *   <dt>string `k_staff`</dt>
 *   <dd>
 *     If you want to send an appointment cancellation email to some other staff(business owner) - use his
 *  `k_staff` in addition to `k_appointment`
 *   </dd>
 * 
 *   <dt>string `k_staff_old`</dt>
 *   <dd>
 *     In case you want to send an appointment cancellation email to substituted staff - pass his
 *  `k_staff` as `k_staff_old` in addition to `k_appointment`
 *   </dd>
 * </dl>
 * 
 * appointment-cancel-staff-user (id_mail 80):
 * <dl>
 *   <dt>array[] `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit, which must be passed when they are already released (for
 * example, when the visit is canceled). Default is an empty array. Each element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>Primary key of the asset. </dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Key of the business to which the visit belongs.
 *   </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Key of the visit. </dd>
 * </dl>
 * 
 * appointment-change-general-client (id_mail 114):
 * <dl>
 *   <dt>array `a_change`</dt>
 *   <dd>
 *     Array of changes. Keys are names of changed fields (<tt>s_service</tt>, <tt>s_price</tt>, <tt>s_describe</tt>,
 * <tt>s_special</tt>, <tt>i_capacity</tt>), values are the descriptions of changes:
 *     <dl>
 *       <dt>string `field`</dt>
 *       <dd>Title of the changed field.</dd>
 * 
 *       <dt>string `html_new`</dt>
 *       <dd>New value as HTML. Optional.</dd>
 * 
 *       <dt>string `html_old`</dt>
 *       <dd>Old value as HTML. Optional.</dd>
 * 
 *       <dt>mixed `new`</dt>
 *       <dd>
 *         New value. For the price it is an array with keys <tt>i_price</tt>, <tt>k_currency</tt>,
 * <tt>m_offline_max</tt> and <tt>m_offline_min</tt>.
 *       </dd>
 * 
 *       <dt>mixed `old`</dt>
 *       <dd>Old value. It has the same format as <var>new</var>.</dd>
 * 
 *       <dt>string `s_field`</dt>
 *       <dd>Name of the changed field.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>array `a_appointment_future`</dt>
 *   <dd>
 *     List of future appointments of the client. Every element is an array:
 *     <dl>
 *       <dt>string `k_visit`</dt>
 *       <dd>Visit key.</dd>
 * 
 *       <dt>string `s_date_day`</dt>
 *       <dd>Formatted date of the appointment.</dd>
 * 
 *       <dt>string `s_date_time`</dt>
 *       <dd>Formatted time of the appointment.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key.</dd>
 * 
 *   <dt>string `k_service`</dt>
 *   <dd>Service key.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key.</dd>
 * </dl>
 * 
 * appointment-change-general-staff (id_mail 113):
 * <dl>
 *   <dt>array `a_change`</dt>
 *   <dd>
 *     Array of changes. Keys are names of changed fields, values are descriptions of changes:
 *     <dl>
 *       <dt>string `field`</dt>
 *       <dd>Translated title of the changed field.</dd>
 * 
 *       <dt>string `html_new`</dt>
 *       <dd>New value as HTML. Can be absent.</dd>
 * 
 *       <dt>string `html_old`</dt>
 *       <dd>Old value as HTML. Can be absent.</dd>
 * 
 *       <dt>mixed `new`</dt>
 *       <dd>New value of the field.</dd>
 * 
 *       <dt>mixed `old`</dt>
 *       <dd>Old value of the field.</dd>
 * 
 *       <dt>string `s_field`</dt>
 *       <dd>Name of the changed field.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>array `a_appointment_future`</dt>
 *   <dd>
 *     List of future appointments. Every element describes one appointment:
 *     <dl>
 *       <dt>string `s_client`</dt>
 *       <dd>Full name of the client.</dd>
 * 
 *       <dt>string `s_date_day`</dt>
 *       <dd>Date of the appointment.</dd>
 * 
 *       <dt>string `s_date_time`</dt>
 *       <dd>Time of the appointment.</dd>
 * 
 *       <dt>string|null `s_mail`</dt>
 *       <dd>Email of the client.</dd>
 * 
 *       <dt>string|null `s_phone`</dt>
 *       <dd>Cell phone of the client.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key.</dd>
 * 
 *   <dt>string `k_service`</dt>
 *   <dd>Service key.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key.</dd>
 * </dl>
 * 
 * appointment-change-staff (id_mail 36):
 * <dl>
 *   <dt>string `dt_date`</dt>
 *   <dd>Date and time of the appointment in UTC, in the MySQL format.</dd>
 * 
 *   <dt>string `k_appointment`</dt>
 *   <dd>Key of the appointment. </dd>
 * 
 *   <dt>string `k_location`</dt>
 *   <dd>Key of the location of the appointment. </dd>
 * 
 *   <dt>string `k_service`</dt>
 *   <dd>Key of the service of the appointment. </dd>
 * 
 *   <dt>string `k_staff`</dt>
 *   <dd>Key of the staff member who is notified. </dd>
 * </dl>
 * 
 * appointment-change-user (id_mail 37):
 * <dl>
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>Mail pattern live ID.</dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>ID of visit.</dd>
 * </dl>
 * 
 * appointment-create-staff (id_mail 31):
 * <dl>
 *   <dt>array[] `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit. Default is an empty array. Each element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>Primary key of the asset.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `k_appointment`</dt>
 *   <dd>Key of the appointment. </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Key of the business to which the appointment belongs.</dd>
 * 
 *   <dt>string `k_staff`</dt>
 *   <dd>
 *     Optional. Key of the staff member who is notified. 
 * If empty, the staff member assigned to the appointment is used; if there is none, the email is not formed.
 *   </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Optional. Key of the visit. </dd>
 * </dl>
 * 
 * appointment-create-user (id_mail 30):
 * <dl>
 *   <dt>string `k_visit`</dt>
 *   <dd>Book ID.</dd>
 * </dl>
 * 
 * appointment-create-user-multiple (id_mail 211):
 * <dl>
 *   <dt>string[] `a_visit`</dt>
 *   <dd>
 *     Array of visit primary keys that must be included in the same e-mail.
 * 
 * If the array is empty, the e-mail is not built.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business primary key. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Client primary key. </dd>
 * </dl>
 * 
 * appointment-pay-cancel (id_mail 189):
 * <dl>
 *   <dt>string `k_appointment`</dt>
 *   <dd>Appointment booking key. </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * appointment-pay-pay (id_mail 188):
 * <dl>
 *   <dt>string `k_appointment`</dt>
 *   <dd>Appointment booking key. </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * appointment-repeat-cancel-client (id_mail 103):
 * <dl>
 *   <dt>array[] `a_asset`</dt>
 *   <dd>
 *     Optional. List of assets info that is shown in the e-mail. If it is not set, the list is empty.
 * Each element is an array:
 *     <dl>
 *       <dt>int `i_count`</dt>
 *       <dd>Number of sessions.</dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>Asset name.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>array `a_visit`</dt>
 *   <dd>
 *     List of visit IDs for canceling the reservation. If it is empty or not set, the e-mail is not formed and
 * `false` is returned. Each element:
 *     <dl>
 *       <dt>string `k_visit`</dt>
 *       <dd>Visit key. </dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. Required. </dd>
 * </dl>
 * 
 * appointment-repeat-cancel-staff (id_mail 105):
 * <dl>
 *   <dt>array[] `a_visit`</dt>
 *   <dd>
 *     List of visit IDs for canceling the reservation. Optional. If it is empty or not set, the e-mail is not
 * formed and `false` is returned. Each element:
 *     <dl>
 *       <dt>string `k_visit`</dt>
 *       <dd>Visit key. </dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key.  Required.</dd>
 * 
 *   <dt>string `k_staff`</dt>
 *   <dd>
 *     Key of the staff member who receives the e-mail. 
 * Required.
 *   </dd>
 * </dl>
 * 
 * appointment-repeat-cancel-user (id_mail 131):
 * <dl>
 *   <dt>string[] `a_visit`</dt>
 *   <dd>List of visit keys for canceling the reservation.</dd>
 * </dl>
 * 
 * appointment-request-ai (id_mail 200):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `html_view_conversation_button`</dt>
 *   <dd>Button that staff can click to view the conversation between client and AI Agent.</dd>
 * 
 *   <dt>string `text_client_mail`</dt>
 *   <dd>Client's email address.</dd>
 * 
 *   <dt>string `text_client_name`</dt>
 *   <dd>Client's name.</dd>
 * 
 *   <dt>string `text_client_phone`</dt>
 *   <dd>Client's phone number.</dd>
 * 
 *   <dt>string `text_preferred_date_time`</dt>
 *   <dd>The date of the requested service in the format: Thursday, May 15, 2015, 10:00 - 11:00 a.m.</dd>
 * 
 *   <dt>string `text_preferred_date_time_sms`</dt>
 *   <dd>The date of the requested service in the format: Jan 14, 11:00 a.m.</dd>
 * 
 *   <dt>string `text_location`</dt>
 *   <dd>Appointment location.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Recipient user's key. </dd>
 * 
 *   <dt>string `url_view_conversation_link`</dt>
 *   <dd>URL to view the conversation (for email).</dd>
 * 
 *   <dt>string `url_view_conversation_link_sms`</dt>
 *   <dd>URL to view the conversation (for SMS).</dd>
 * </dl>
 * 
 * appointment-request-deny (id_mail 88):
 * <dl>
 *   <dt>string `k_visit`</dt>
 *   <dd>Book ID.</dd>
 * </dl>
 * 
 * appointment-request-staff (id_mail 89):
 * <dl>
 *   <dt>bool `is_send_force`</dt>
 *   <dd>`true` if mail should be sent even if this pattern is disabled on the mails page.</dd>
 * 
 *   <dt>string `k_appointment`</dt>
 *   <dd>Appointment ID.</dd>
 * </dl>
 * 
 * appointment-request-user (id_mail 90):
 * <dl>
 *   <dt>string `k_visit`</dt>
 *   <dd>Book ID.</dd>
 * </dl>
 * 
 * appointment-wait-remove (id_mail 195):
 * <dl>
 *   <dt>bool `is_secondary`</dt>
 *   <dd>
 *     Optional. Whether the e-mail is sent to a secondary e-mail address. If `true`, the cancel button
 * in the e-mail is disabled. If not set, the e-mail is built as for the primary address.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key. </dd>
 * </dl>
 * 
 * billing-related-query (id_mail 204):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `html_view_conversation_button`</dt>
 *   <dd>Button that staff can click to view the conversation between client and AI Agent.</dd>
 * 
 *   <dt>string `text_client_mail`</dt>
 *   <dd>Client's email address.</dd>
 * 
 *   <dt>string `text_client_name`</dt>
 *   <dd>Client's name.</dd>
 * 
 *   <dt>string `text_client_phone`</dt>
 *   <dd>Client's phone number.</dd>
 * 
 *   <dt>string `text_location`</dt>
 *   <dd>The name of the specific location referred to in the email.</dd>
 * 
 *   <dt>string `text_query_note`</dt>
 *   <dd>Any note left by the client for the staff.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Recipient user's key. </dd>
 * 
 *   <dt>string `url_view_conversation_link`</dt>
 *   <dd>URL to view the conversation (for email).</dd>
 * 
 *   <dt>string `url_view_conversation_link_sms`</dt>
 *   <dd>URL to view the conversation (for SMS).</dd>
 * </dl>
 * 
 * book-add-class (id_mail 1):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit. Empty array by default. They are listed in the e-mail without the
 * number of sessions. Each element:
 *     <dl>
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>
 *     Optional. Live mail pattern key.  This method does not
 * read it; it is used when the e-mail is built from its pattern.
 *   </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key (book ID). </dd>
 * </dl>
 * 
 * book-add-staff (id_mail 47):
 * <dl>
 *   <dt>bool `is_secondary`</dt>
 *   <dd>
 *     Optional. Whether the e-mail is sent to a secondary e-mail address. If `true`, the button to start the
 * virtual service is disabled. If not set, the e-mail is built as for the primary address.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_staff`</dt>
 *   <dd>Staff key. </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key (book ID). </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Optional. E-mail address of the staff member. Empty string by default.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Optional. Key of the client user. If empty, the default user settings are used to build the e-mail, and `uid`
 * of the result is an empty string.
 * 
 *   </dd>
 * </dl>
 * 
 * book-cancel (id_mail 210):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>
 *     Key of the business. It is used to open the shard connection and must be the same as the business
 * of the visit. 
 *   </dd>
 * 
 *   <dt>string `i_id`</dt>
 *   <dd>Key of the canceled visit. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Key of the user to whom the e-mail is sent. If the user does not exist, the e-mail is not sent.
 * 
 *   </dd>
 * </dl>
 * 
 * book-cancel-admin-class (id_mail 23):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit. Empty array by default. They are passed to the function that loads
 * the visit, because the assets of a cancelled visit are released already. Each element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>
 *         Resource key.  An asset that is a location is removed
 * from the list and is used as the location of the visit.
 *       </dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title.</dd>
 * 
 *       <dt>int `i_count`</dt>
 *       <dd>Number of sessions. Shown in the e-mail next to the asset title.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>
 *     Optional. Live mail pattern key.  This method does not
 * read it; it is used when the e-mail is built from its pattern.
 *   </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key (book ID). </dd>
 * </dl>
 * 
 * book-cancel-admin-enrollment (id_mail 57):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit. Empty array by default. They are listed in the e-mail without the
 * number of sessions. Each element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>
 *         Resource key.  An asset that is a location is removed
 * from the list and is used as the location of the visit.
 *       </dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>bool `is_calendar_attachment`</dt>
 *   <dd>Optional. `true` to attach an .ics calendar file with the sessions to the e-mail.</dd>
 * 
 *   <dt>bool `is_client_book`</dt>
 *   <dd>
 *     Optional. `true` - only the schedule that is booked by the user `uid` is included in the schedule of the
 * e-mail; `false` or not set - the whole schedule of the event is included.
 *   </dd>
 * 
 *   <dt>bool `is_own`</dt>
 *   <dd>
 *     Optional. `true` - the schedule is derived for the staff member `k_staff` only; `false` or not set - for all
 * staff.
 *   </dd>
 * 
 *   <dt>bool `is_secondary`</dt>
 *   <dd>
 *     Optional. Whether the e-mail is sent to a secondary e-mail address. If `true`, the button to join the virtual
 * session is disabled. If not set, the e-mail is built as for the primary address.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_class`</dt>
 *   <dd>
 *     Optional. Class key.  Required unless it is derived from
 * `k_visit` or `k_enrollment_book`. If the class does not exist, the e-mail is not sent.
 *   </dd>
 * 
 *   <dt>string `k_enrollment_book`</dt>
 *   <dd>
 *     Optional. Enrollment book key.  The class and the user
 * are taken from it when `k_visit` and `k_class` are not set; it also selects the sessions of the enrollment
 * that are listed in the e-mail.
 *   </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>
 *     Optional. Live mail pattern key.  This method does not
 * read it; it is used when the e-mail is built from its pattern.
 *   </dd>
 * 
 *   <dt>string `k_staff`</dt>
 *   <dd>
 *     Optional. Staff key.  Required if `is_own` is set or if `uid` is
 * empty.
 *   </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>
 *     Optional. Visit key (book ID).  When it is set, the class, the
 * user and the location are taken from the visit.
 *   </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Optional. E-mail address of the receiver. Empty string by default.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Optional. Key of the client user. It is derived automatically when `k_visit` or `k_enrollment_book` is set.
 * If it is empty, the e-mail is built for the staff member `k_staff`.
 * 
 *   </dd>
 * </dl>
 * 
 * book-cancel-enrollment-session (id_mail 128):
 * <dl>
 *   <dt>array[] `a_asset`</dt>
 *   <dd>
 *     Optional. Assets of the visit to show in the e-mail.
 * Used when the visit is loaded and when the assets block is rendered. By default, no assets.
 * Each element:
 *     <dl>
 *       <dt>int `i_count`</dt>
 *       <dd>Number of sessions.</dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>
 *         Asset title that consists of the asset title itself concatenated with its index
 * (in case of multiple assets) by `#`.
 *       </dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string[] `a_visit`</dt>
 *   <dd>
 *     List of visit keys of the cancelled sessions. 
 * Either this key or `k_visit` is required, otherwise no e-mail is built.
 * The first element is the main visit of the e-mail.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Key of the business.  Required.</dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>
 *     Optional. Key of the visit. 
 * Used only when `a_visit` is empty. In this case it is the only visit of the e-mail.
 *   </dd>
 * </dl>
 * 
 * book-cancel-free-class (id_mail 3):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit. Empty array by default. Each element:
 *     <dl>
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title.</dd>
 * 
 *       <dt>int `i_count`</dt>
 *       <dd>Number of sessions. Shown in the e-mail next to the asset title.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>
 *     Optional. Live mail pattern key.  This method does not
 * read it; it is used when the e-mail is built from its pattern.
 *   </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key (book ID). </dd>
 * </dl>
 * 
 * book-cancel-free-enrollment (id_mail 58):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit. Empty array by default. They are listed in the e-mail without the
 * number of sessions. Each element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>
 *         Resource key.  An asset that is a location is removed
 * from the list and is used as the location of the visit.
 *       </dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>bool `is_calendar_attachment`</dt>
 *   <dd>Optional. `true` to attach an .ics calendar file with the sessions to the e-mail.</dd>
 * 
 *   <dt>bool `is_client_book`</dt>
 *   <dd>
 *     Optional. `true` - only the schedule that is booked by the user `uid` is included in the schedule of the
 * e-mail; `false` or not set - the whole schedule of the event is included.
 *   </dd>
 * 
 *   <dt>bool `is_own`</dt>
 *   <dd>
 *     Optional. `true` - the schedule is derived for the staff member `k_staff` only; `false` or not set - for all
 * staff.
 *   </dd>
 * 
 *   <dt>bool `is_secondary`</dt>
 *   <dd>
 *     Optional. Whether the e-mail is sent to a secondary e-mail address. If `true`, the button to join the virtual
 * session is disabled. If not set, the e-mail is built as for the primary address.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_class`</dt>
 *   <dd>
 *     Optional. Class key.  Required unless it is derived from
 * `k_visit` or `k_enrollment_book`. If the class does not exist, the e-mail is not sent.
 *   </dd>
 * 
 *   <dt>string `k_enrollment_book`</dt>
 *   <dd>
 *     Optional. Enrollment book key.  The class and the user
 * are taken from it when `k_visit` and `k_class` are not set; it also selects the sessions of the enrollment
 * that are listed in the e-mail.
 *   </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>
 *     Optional. Live mail pattern key.  This method does not
 * read it; it is used when the e-mail is built from its pattern.
 *   </dd>
 * 
 *   <dt>string `k_staff`</dt>
 *   <dd>
 *     Optional. Staff key.  Required if `is_own` is set or if `uid` is
 * empty.
 *   </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>
 *     Optional. Visit key (book ID).  When it is set, the class, the
 * user and the location are taken from the visit.
 *   </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Optional. E-mail address of the receiver. Empty string by default.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Optional. Key of the client user. It is derived automatically when `k_visit` or `k_enrollment_book` is set.
 * If it is empty, the e-mail is built for the staff member `k_staff`.
 * 
 *   </dd>
 * </dl>
 * 
 * book-cancel-penalty-class (id_mail 4):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit. Empty array by default. They are passed to the function that loads
 * the visit, because the assets of a cancelled visit are released already. Each element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>
 *         Resource key.  An asset that is a location is removed
 * from the list and is used as the location of the visit.
 *       </dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title.</dd>
 * 
 *       <dt>int `i_count`</dt>
 *       <dd>Number of sessions. Shown in the e-mail next to the asset title.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>
 *     Optional. Live mail pattern key.  This method does not
 * read it; it is used when the e-mail is built from its pattern.
 *   </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key (book ID). </dd>
 * </dl>
 * 
 * book-cancel-penalty-enrollment (id_mail 59):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit. Empty array by default. They are listed in the e-mail without the
 * number of sessions. Each element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>
 *         Resource key.  An asset that is a location is removed
 * from the list and is used as the location of the visit.
 *       </dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>bool `is_calendar_attachment`</dt>
 *   <dd>Optional. `true` to attach an .ics calendar file with the sessions to the e-mail.</dd>
 * 
 *   <dt>bool `is_client_book`</dt>
 *   <dd>
 *     Optional. `true` - only the schedule that is booked by the user `uid` is included in the schedule of the
 * e-mail; `false` or not set - the whole schedule of the event is included.
 *   </dd>
 * 
 *   <dt>bool `is_own`</dt>
 *   <dd>
 *     Optional. `true` - the schedule is derived for the staff member `k_staff` only; `false` or not set - for all
 * staff.
 *   </dd>
 * 
 *   <dt>bool `is_secondary`</dt>
 *   <dd>
 *     Optional. Whether the e-mail is sent to a secondary e-mail address. If `true`, the button to join the virtual
 * session is disabled. If not set, the e-mail is built as for the primary address.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_class`</dt>
 *   <dd>
 *     Optional. Class key.  Required unless it is derived from
 * `k_visit` or `k_enrollment_book`. If the class does not exist, the e-mail is not sent.
 *   </dd>
 * 
 *   <dt>string `k_enrollment_book`</dt>
 *   <dd>
 *     Optional. Enrollment book key.  The class and the user
 * are taken from it when `k_visit` and `k_class` are not set; it also selects the sessions of the enrollment
 * that are listed in the e-mail.
 *   </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>
 *     Optional. Live mail pattern key.  This method does not
 * read it; it is used when the e-mail is built from its pattern.
 *   </dd>
 * 
 *   <dt>string `k_staff`</dt>
 *   <dd>
 *     Optional. Staff key.  Required if `is_own` is set or if `uid` is
 * empty.
 *   </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>
 *     Optional. Visit key (book ID).  When it is set, the class, the
 * user and the location are taken from the visit.
 *   </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Optional. E-mail address of the receiver. Empty string by default.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Optional. Key of the client user. It is derived automatically when `k_visit` or `k_enrollment_book` is set.
 * If it is empty, the e-mail is built for the staff member `k_staff`.
 * 
 *   </dd>
 * </dl>
 * 
 * book-cancel-staff (id_mail 48):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit. Empty array by default. They are passed to the function that loads
 * the visit, because the assets of a cancelled visit are released already. Each element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>
 *         Resource key.  An asset that is a location is removed
 * from the list and is used as the location of the visit.
 *       </dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_staff`</dt>
 *   <dd>Staff key. </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key (book ID). </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Optional. E-mail address of the staff member. Empty string by default.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Optional. Key of the client user. If empty, the default user settings are used to build the e-mail, and `uid`
 * of the result is an empty string.
 * 
 *   </dd>
 * </dl>
 * 
 * book-enrollment (id_mail 69):
 * <dl>
 *   <dt>string `k_class`</dt>
 *   <dd>Class key.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key.</dd>
 * </dl>
 * 
 * book-enrollment-cancel-staff (id_mail 92):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit. Empty array by default. They are listed in the e-mail without the
 * number of sessions. Each element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>
 *         Resource key.  An asset that is a location is removed
 * from the list and is used as the location of the visit.
 *       </dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>bool `is_calendar_attachment`</dt>
 *   <dd>Optional. `true` to attach an .ics calendar file with the sessions to the e-mail.</dd>
 * 
 *   <dt>bool `is_client_book`</dt>
 *   <dd>
 *     Optional. `true` - only the schedule that is booked by the user `uid` is included in the schedule of the
 * e-mail; `false` or not set - the whole schedule of the event is included.
 *   </dd>
 * 
 *   <dt>bool `is_own`</dt>
 *   <dd>
 *     Optional. `true` - the schedule is derived for the staff member `k_staff` only; `false` or not set - for all
 * staff.
 *   </dd>
 * 
 *   <dt>bool `is_secondary`</dt>
 *   <dd>
 *     Optional. Whether the e-mail is sent to a secondary e-mail address. If `true`, the button to join the virtual
 * session is disabled. If not set, the e-mail is built as for the primary address.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_class`</dt>
 *   <dd>
 *     Optional. Class key.  Required unless it is derived from
 * `k_visit` or `k_enrollment_book`. If the class does not exist, the e-mail is not sent.
 *   </dd>
 * 
 *   <dt>string `k_enrollment_book`</dt>
 *   <dd>
 *     Enrollment book key.  If the record does not exist, the
 * e-mail is not sent. The class and the user are taken from it.
 *   </dd>
 * 
 *   <dt>string `k_staff`</dt>
 *   <dd>
 *     Optional. Staff key.  Required if `is_own` is set or if `uid` is
 * empty.
 *   </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>
 *     Optional. Visit key (book ID).  When it is set, the class, the
 * user and the location are taken from the visit.
 *   </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Optional. E-mail address of the receiver. Empty string by default.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Optional. Key of the client user. It is derived automatically when `k_visit` or `k_enrollment_book` is set.
 * If it is empty, the e-mail is built for the staff member `k_staff`.
 * 
 *   </dd>
 * </dl>
 * 
 * book-enrollment-staff (id_mail 91):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit. Empty array by default. They are listed in the e-mail without the
 * number of sessions. Each element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>
 *         Resource key.  An asset that is a location is removed
 * from the list and is used as the location of the visit.
 *       </dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>bool `is_calendar_attachment`</dt>
 *   <dd>Optional. `true` to attach an .ics calendar file with the sessions to the e-mail.</dd>
 * 
 *   <dt>bool `is_client_book`</dt>
 *   <dd>
 *     Optional. `true` - only the schedule that is booked by the user `uid` is included in the schedule of the
 * e-mail; `false` or not set - the whole schedule of the event is included.
 *   </dd>
 * 
 *   <dt>bool `is_own`</dt>
 *   <dd>
 *     Optional. `true` - the schedule is derived for the staff member `k_staff` only; `false` or not set - for all
 * staff.
 *   </dd>
 * 
 *   <dt>bool `is_secondary`</dt>
 *   <dd>
 *     Optional. Whether the e-mail is sent to a secondary e-mail address. If `true`, the button to join the virtual
 * session is disabled. If not set, the e-mail is built as for the primary address.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_class`</dt>
 *   <dd>
 *     Optional. Class key.  Required unless it is derived from
 * `k_visit` or `k_enrollment_book`. If the class does not exist, the e-mail is not sent.
 *   </dd>
 * 
 *   <dt>string `k_enrollment_book`</dt>
 *   <dd>
 *     Enrollment book key.  If the record does not exist, the
 * e-mail is not sent. The class and the user are taken from it.
 *   </dd>
 * 
 *   <dt>string `k_staff`</dt>
 *   <dd>
 *     Optional. Staff key.  Required if `is_own` is set or if `uid` is
 * empty.
 *   </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>
 *     Optional. Visit key (book ID).  When it is set, the class, the
 * user and the location are taken from the visit.
 *   </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Optional. E-mail address of the receiver. Empty string by default.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Optional. Key of the client user. It is derived automatically when `k_visit` or `k_enrollment_book` is set.
 * If it is empty, the e-mail is built for the staff member `k_staff`.
 * 
 *   </dd>
 * </dl>
 * 
 * book-first (id_mail 73):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     User key. If the user does not exist, the e-mail is not sent.
 * 
 *   </dd>
 * </dl>
 * 
 * book-promote-confirm-appointment (id_mail 169):
 * <dl>
 *   <dt>bool `is_secondary`</dt>
 *   <dd>
 *     Optional. Whether the e-mail is sent to a secondary e-mail address. If `true`, the cancel button
 * in the e-mail is disabled. If not set, the e-mail is built as for the primary address.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key. </dd>
 * </dl>
 * 
 * book-promote-confirm-class (id_mail 53):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit. Empty array by default. They are listed in the e-mail without the
 * number of sessions. Each element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>
 *         Resource key.  An asset that is a location is removed
 * from the list and is used as the location of the visit.
 *       </dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>bool `is_secondary`</dt>
 *   <dd>
 *     Optional. Whether the e-mail is sent to a secondary e-mail address. If `true`, the buttons to cancel the
 * visit and to confirm the promotion are disabled. If not set, the e-mail is built as for the primary address.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>
 *     Optional. Live mail pattern key.  This method does not
 * read it; it is used when the e-mail is built from its pattern.
 *   </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key (book ID). </dd>
 * </dl>
 * 
 * book-promote-confirm-enrollment (id_mail 60):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit. Empty array by default. They are listed in the e-mail without the
 * number of sessions. Each element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>
 *         Resource key.  An asset that is a location is removed
 * from the list and is used as the location of the visit.
 *       </dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>bool `is_secondary`</dt>
 *   <dd>
 *     Optional. Whether the e-mail is sent to a secondary e-mail address. If `true`, the buttons to cancel the
 * visit and to confirm the promotion are disabled. If not set, the e-mail is built as for the primary address.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>
 *     Optional. Live mail pattern key.  This method does not
 * read it; it is used when the e-mail is built from its pattern.
 *   </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key (book ID). </dd>
 * </dl>
 * 
 * book-promote-direct-appointment (id_mail 168):
 * <dl>
 *   <dt>bool `is_secondary`</dt>
 *   <dd>
 *     Optional. Whether the e-mail is sent to a secondary e-mail address. If `true`, the cancel button
 * in the e-mail is disabled. If not set, the e-mail is built as for the primary address.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key. </dd>
 * </dl>
 * 
 * book-promote-direct-class (id_mail 8):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit. Empty array by default. They are listed in the e-mail without the
 * number of sessions. Each element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>
 *         Resource key.  An asset that is a location is removed
 * from the list and is used as the location of the visit.
 *       </dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>bool `is_secondary`</dt>
 *   <dd>
 *     Optional. Whether the e-mail is sent to a secondary e-mail address. If `true`, the buttons to cancel the
 * visit and to confirm the promotion are disabled. If not set, the e-mail is built as for the primary address.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>
 *     Optional. Live mail pattern key.  This method does not
 * read it; it is used when the e-mail is built from its pattern.
 *   </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key (book ID). </dd>
 * 
 *   <dt>string `s_action`</dt>
 *   <dd>
 *     Optional. Name of the action. Known value: `waitinglist-confirm` - the URL to confirm the promotion is built.
 * For any other value the confirmation URL is empty.
 *   </dd>
 * </dl>
 * 
 * book-promote-direct-enrollment (id_mail 61):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit. Empty array by default. They are listed in the e-mail without the
 * number of sessions. Each element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>
 *         Resource key.  An asset that is a location is removed
 * from the list and is used as the location of the visit.
 *       </dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>bool `is_secondary`</dt>
 *   <dd>
 *     Optional. Whether the e-mail is sent to a secondary e-mail address. If `true`, the buttons to cancel the
 * visit and to confirm the promotion are disabled. If not set, the e-mail is built as for the primary address.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>
 *     Optional. Live mail pattern key.  This method does not
 * read it; it is used when the e-mail is built from its pattern.
 *   </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key (book ID). </dd>
 * 
 *   <dt>string `s_action`</dt>
 *   <dd>
 *     Optional. Name of the action. Known value: `waitinglist-confirm` - the URL to confirm the promotion is built.
 * For any other value the confirmation URL is empty.
 *   </dd>
 * </dl>
 * 
 * book-remind-class (id_mail 25):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit. Empty array by default. They are listed in the e-mail without the
 * number of sessions. Each element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>
 *         Resource key.  An asset that is a location is removed
 * from the list and is used as the location of the visit.
 *       </dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `dt_date`</dt>
 *   <dd>
 *     Optional. Date and time of the session in UTC (MySQL format). Together with `k_class_period` and `uid` it is
 * used to find the visit when `k_visit` is not set.
 *   </dd>
 * 
 *   <dt>bool `is_secondary`</dt>
 *   <dd>
 *     Optional. Whether the e-mail is sent to a secondary e-mail address. If `true`, the buttons to cancel the
 * visit and to join the virtual session are disabled. If not set, the e-mail is built as for the primary
 * address.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_class_period`</dt>
 *   <dd>
 *     Optional. Class period key.  Together with `dt_date` and
 * `uid` it is used to find the active visit of the user when `k_visit` is not set. If there is no such visit,
 * the e-mail is not sent.
 *   </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>
 *     Visit key (book ID).  Required if `k_class_period` and `dt_date`
 * are not both set.
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Optional. Key of the client user. It is used only together with `k_class_period` and `dt_date`.
 * 
 *   </dd>
 * </dl>
 * 
 * book-remind-enrollment (id_mail 62):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit. Empty array by default. They are listed in the e-mail without the
 * number of sessions. Each element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>
 *         Resource key.  An asset that is a location is removed
 * from the list and is used as the location of the visit.
 *       </dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `dt_date`</dt>
 *   <dd>
 *     Optional. Date and time of the session in UTC (MySQL format). Together with `k_class_period` and `uid` it is
 * used to find the visit when `k_visit` is not set.
 *   </dd>
 * 
 *   <dt>bool `is_secondary`</dt>
 *   <dd>
 *     Optional. Whether the e-mail is sent to a secondary e-mail address. If `true`, the buttons to cancel the
 * visit and to join the virtual session are disabled. If not set, the e-mail is built as for the primary
 * address.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_class_period`</dt>
 *   <dd>
 *     Optional. Class period key.  Together with `dt_date` and
 * `uid` it is used to find the active visit of the user when `k_visit` is not set. If there is no such visit,
 * the e-mail is not sent.
 *   </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>
 *     Visit key (book ID).  Required if `k_class_period` and `dt_date`
 * are not both set.
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Optional. Key of the client user. It is used only together with `k_class_period` and `dt_date`.
 * 
 *   </dd>
 * </dl>
 * 
 * book-remind-service-staff (id_mail 27):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_staff`</dt>
 *   <dd>Staff key. </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key (book ID). </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Optional. E-mail address of the staff member. Empty string by default.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Optional. Key of the client user. If empty, the default user settings are used to build the e-mail, and `uid`
 * of the result is an empty string.
 * 
 *   </dd>
 * </dl>
 * 
 * book-remind-service-user (id_mail 26):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit. Empty array by default. They are passed to the function that loads
 * the visit only to find the location. The assets listed in the e-mail are loaded from the appointment. Each
 * element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>
 *         Resource key.  An asset that is a location is removed
 * from the list and is used as the location of the visit.
 *       </dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>bool `is_secondary`</dt>
 *   <dd>
 *     Optional. Whether the e-mail is sent to a secondary e-mail address. If `true`, the buttons to cancel the
 * appointment, to confirm it and to join the virtual service are disabled. If not set, the e-mail is built as
 * for the primary address.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key (book ID). </dd>
 * </dl>
 * 
 * book-repeat-add (id_mail 101):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets used for the reservations. Empty array by default. Each element:
 *     <dl>
 *       <dt>int `i_count`</dt>
 *       <dd>Number of sessions.</dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>
 *         Asset title that consists of the asset title itself concatenated with its index
 * (in case of multiple assets) by `#`.
 *       </dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string[] `a_visit`</dt>
 *   <dd>
 *     List of visit IDs for canceling the reservation. Required if `k_visit` is not set: when both are empty,
 * the e-mail is not built and `false` is returned. The first element is used as `k_visit`.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Key of the business. Required. </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>
 *     Optional. Key of a visit. Used only when `a_visit` is empty, then the list of visits consists of this
 * one visit. Required if `a_visit` is not set. 
 *   </dd>
 * </dl>
 * 
 * book-repeat-cancel (id_mail 102):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets used for the reservations. Empty array by default. Each element:
 *     <dl>
 *       <dt>int `i_count`</dt>
 *       <dd>Number of sessions.</dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>
 *         Asset title that consists of the asset title itself concatenated with its index
 * (in case of multiple assets) by `#`.
 *       </dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string[] `a_visit`</dt>
 *   <dd>
 *     List of visit IDs for canceling the reservation. Required if `k_visit` is not set: when both are empty,
 * the e-mail is not built and `false` is returned. The first element is used as `k_visit`.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Key of the business. Required. </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>
 *     Optional. Key of a visit. Used only when `a_visit` is empty, then the list of visits consists of this
 * one visit. Required if `a_visit` is not set. 
 *   </dd>
 * </dl>
 * 
 * book-repeat-wait (id_mail 166):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets used for the reservations. Empty array by default. Each element:
 *     <dl>
 *       <dt>int `i_count`</dt>
 *       <dd>Number of sessions.</dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>
 *         Asset title that consists of the asset title itself concatenated with its index
 * (in case of multiple assets) by `#`.
 *       </dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string[] `a_visit`</dt>
 *   <dd>
 *     List of visit IDs for canceling the reservation. Required if `k_visit` is not set: when both are empty,
 * the e-mail is not built and `false` is returned. The first element is used as `k_visit`.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Key of the business. Required. </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>
 *     Optional. Key of a visit. Used only when `a_visit` is empty, then the list of visits consists of this
 * one visit. Required if `a_visit` is not set. 
 *   </dd>
 * </dl>
 * 
 * book-visit (id_mail 39):
 * <dl>
 *   <dt>string `dt_date`</dt>
 *   <dd>Date and time of the visit in GMT.</dd>
 * 
 *   <dt>string `k_appointment`</dt>
 *   <dd>Appointment identifier, <tt>0</tt> if this is a class visit.</dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key.</dd>
 * 
 *   <dt>string `k_class_period`</dt>
 *   <dd>Class Period ID, <tt>0</tt> if this is a appointment visit.</dd>
 * 
 *   <dt>string `k_location`</dt>
 *   <dd>Location key.</dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit ID.</dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Client's email address.</dd>
 * 
 *   <dt>string `s_realname`</dt>
 *   <dd>Client's realname.</dd>
 * 
 *   <dt>string `s_visit`</dt>
 *   <dd>Title of visit, it can be service title or class title.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key.</dd>
 * </dl>
 * 
 * book-wait-appointment (id_mail 165):
 * <dl>
 *   <dt>bool `is_secondary`</dt>
 *   <dd>
 *     Optional. Whether the e-mail is sent to a secondary e-mail address. If `true`, the cancel button
 * in the e-mail is disabled. If not set, the e-mail is built as for the primary address.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key. </dd>
 * </dl>
 * 
 * book-wait-class (id_mail 2):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets connected to the visit. Empty array by default. Each element:
 *     <dl>
 *       <dt>string `k_resource`</dt>
 *       <dd>
 *         Resource key.  An asset that is a location is removed
 * from the list and is used as the location of the visit.
 *       </dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title.</dd>
 * 
 *       <dt>int `i_count`</dt>
 *       <dd>Number of sessions. Shown in the e-mail next to the asset title.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>bool `is_secondary`</dt>
 *   <dd>
 *     Optional. Whether the e-mail is sent to a secondary e-mail address. If `true`, the button to cancel the visit
 * is disabled. If not set, the e-mail is built as for the primary address.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key.  If it is empty, the e-mail is not sent.</dd>
 * </dl>
 * 
 * book-wait-enrollment (id_mail 63):
 * <dl>
 *   <dt>string `k_class`</dt>
 *   <dd>Event key. </dd>
 * </dl>
 * 
 * business-account-churn (id_mail 154):
 * <dl>
 *   <dt>string `dl_churn`</dt>
 *   <dd>Churn date.</dd>
 * 
 *   <dt>string `k_business_customer`</dt>
 *   <dd>Key of affected business. </dd>
 * 
 *   <dt>string `k_location`</dt>
 *   <dd>(Optional) Key of affected location. </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Email address sent email message.</dd>
 * 
 *   <dt>string `text_churn_note`</dt>
 *   <dd>Churn note.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * business-account-pay-fail (id_mail 82):
 * <dl>
 *   <dt>string `dl_payment`</dt>
 *   <dd>Payment date in MySQL format. Only the month and the year are used in the e-mail.</dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>
 *     Key of the business to which the business account belongs.
 * 
 *   </dd>
 * 
 *   <dt>\RsPayAmount `o_pay_amount`</dt>
 *   <dd>Purchase amount object.</dd>
 * 
 *   <dt>string `s_message`</dt>
 *   <dd>Optional. Error message. If empty or not set, an empty string is used.</dd>
 * 
 *   <dt>string `text_payment`</dt>
 *   <dd>Title of the payment (the account).</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Key of the user who will receive the e-mail. If the user does not exist, the e-mail is skipped.
 * 
 *   </dd>
 * </dl>
 * 
 * business-account-pay-notify (id_mail 83):
 * <dl>
 *   <dt>string `dl_payment`</dt>
 *   <dd>Payment date in MySQL format. Only the month and the year are used in the e-mail.</dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>
 *     Key of the business to which the business account belongs.
 * 
 *   </dd>
 * 
 *   <dt>\RsPayAmount `o_pay_amount`</dt>
 *   <dd>Purchase amount object.</dd>
 * 
 *   <dt>string `text_payment`</dt>
 *   <dd>Title of the payment (the account).</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Key of the user who will receive the e-mail.
 * </dd>
 * </dl>
 * 
 * business-account-pay-ok (id_mail 81):
 * <dl>
 *   <dt>string `dl_payment`</dt>
 *   <dd>Payment date in MySQL format. Only the month and the year are used in the e-mail.</dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>
 *     Key of the business to which the business account belongs.
 * 
 *   </dd>
 * 
 *   <dt>\RsPayAmount `o_pay_amount`</dt>
 *   <dd>Purchase amount object.</dd>
 * 
 *   <dt>string `s_message`</dt>
 *   <dd>Optional. Error message. If empty or not set, an empty string is used.</dd>
 * 
 *   <dt>string `text_payment`</dt>
 *   <dd>Title of the payment (the account).</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Key of the user who will receive the e-mail. If the user does not exist, the e-mail is skipped.
 * 
 *   </dd>
 * </dl>
 * 
 * business-account-postcard-limit (id_mail 155):
 * <dl>
 *   <dt>int `i_limit`</dt>
 *   <dd>Postcard limit that was exceeded.</dd>
 * 
 *   <dt>string `dl_month`</dt>
 *   <dd>Affected month.</dd>
 * 
 *   <dt>string `k_business_customer`</dt>
 *   <dd>Key of affected business. </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Email address sent email message.</dd>
 * </dl>
 * 
 * business-account-subscription-discount (id_mail 158):
 * <dl>
 *   <dt>int `cid_subscription`</dt>
 *   <dd>Subscription CID.</dd>
 * 
 *   <dt>string `k_business_customer`</dt>
 *   <dd>Key of affected business. </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Email address sent email message.</dd>
 * 
 *   <dt>string `text_note`</dt>
 *   <dd>Subscription price override note.</dd>
 * 
 *   <dt>string `text_price`</dt>
 *   <dd>The formatted subscription price.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * business-account-subscription-override (id_mail 151):
 * <dl>
 *   <dt>int `cid_subscription`</dt>
 *   <dd>Subscription CID.</dd>
 * 
 *   <dt>string `k_business_customer`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Email address sent email message.</dd>
 * 
 *   <dt>string `text_periodicity`</dt>
 *   <dd>The payment frequency.</dd>
 * 
 *   <dt>string `text_price_new`</dt>
 *   <dd>The new override value.</dd>
 * 
 *   <dt>string `text_price_plan`</dt>
 *   <dd>The old override value.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * business-account-subscription-payment (id_mail 156):
 * <dl>
 *   <dt>int `cid_subscription`</dt>
 *   <dd>
 *     Subscription CID that was marked as paid.
 *   </dd>
 * 
 *   <dt>string `k_business_customer`</dt>
 *   <dd>Key of affected business. </dd>
 * 
 *   <dt>string `m_amount`</dt>
 *   <dd>Amount that was marked as paid.</dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Email address sent email message.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * business-account-subscription-skip (id_mail 134):
 * <dl>
 *   <dt>int `cid_subscription`</dt>
 *
 * 
 *   <dt>int `i_skip`</dt>
 *   <dd>The number of skipped payments.</dd>
 * 
 *   <dt>string `k_business_customer`</dt>
 *   <dd>Key of affected business. </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Email address sent email message.</dd>
 * 
 *   <dt>string `text_note`</dt>
 *   <dd>The reason to skip payments.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * business-account-subscription-underpaying (id_mail 152):
 * <dl>
 *   <dt>int `cid_subscription`</dt>
 *   <dd>
 *     Subscription CID. One of the CID constants of
 *
 *   </dd>
 * 
 *   <dt>int `i_location`</dt>
 *   <dd>The number of locations in the business.</dd>
 * 
 *   <dt>int `i_location_paying`</dt>
 *   <dd>The number of locations the business is paying for.</dd>
 * 
 *   <dt>string `k_business_customer`</dt>
 *   <dd>Key of affected business. </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Email address sent email message.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * business-account-virtual-signup (id_mail 157):
 * <dl>
 *   <dt>int `i_license`</dt>
 *   <dd>Number of licenses.</dd>
 * 
 *   <dt>string `k_business_customer`</dt>
 *   <dd>Key of affected business. </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Email address sent email message.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * business-account-virtual-upgrade (id_mail 175):
 * <dl>
 *   <dt>int `i_license`</dt>
 *   <dd>Number of licenses.</dd>
 * 
 *   <dt>string `k_business_customer`</dt>
 *   <dd>Key of affected business. </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Email address sent email message.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * business-create (id_mail 192):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `text_first_name`</dt>
 *   <dd>Client's first name.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User's key. </dd>
 * 
 *   <dt>string `url_create_password_page_link`</dt>
 *   <dd>URL to open changing user's password page.</dd>
 * </dl>
 * 
 * business-message-subscribe (id_mail 164):
 * <dl>
 *   <dt>string `k_business_subscribe`</dt>
 *   <dd>Key of affected business. </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Email address sent email message.</dd>
 * 
 *   <dt>string `uid_actor`</dt>
 *   <dd>User key. </dd>
 * 
 *   <dt>string `text_plan_name`</dt>
 *   <dd>Name Of Message Center Plan Chosen.</dd>
 * </dl>
 * 
 * business-partner-banner-customer (id_mail 180):
 * <dl>
 *   <dt>int `id_mail_copy`</dt>
 *   <dd>One of {@link RsMailCopySid} constants.</dd>
 * 
 *   <dt>string `k_business_customer`</dt>
 *   <dd>Key of affected business. </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Receiver email address.</dd>
 * 
 *   <dt>string `s_mail_copy`</dt>
 *   <dd>Copy receiver email address.</dd>
 * </dl>
 * 
 * business-partner-enroll (id_mail 119):
 * <dl>
 *   <dt>string `k_business_enroll`</dt>
 *   <dd>Business key, that joined to Business Partner Program. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key, who is a recipient. </dd>
 * 
 *   <dt>string `uid_enroll`</dt>
 *   <dd>User key, who enabled Business Partner Program. </dd>
 * </dl>
 * 
 * business-partner-referral-mail-new (id_mail 143):
 * <dl>
 *   <dt>string `k_business_partner`</dt>
 *   <dd>Business partner key. </dd>
 * 
 *   <dt>string `text_business_lead`</dt>
 *   <dd>Referral business name.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key, who is a recipient. </dd>
 * </dl>
 * 
 * business-partner-referral-mail-reach-admin-partner (id_mail 145):
 * <dl>
 *   <dt>string `k_business_partner`</dt>
 *   <dd>Business partner key. </dd>
 * 
 *   <dt>string `k_business_referral`</dt>
 *   <dd>Business referral key. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key, who is a recipient. </dd>
 * </dl>
 * 
 * business-partner-referral-mail-reach-admin-referral (id_mail 148):
 * <dl>
 *   <dt>string `k_business_partner`</dt>
 *   <dd>Business partner key. </dd>
 * 
 *   <dt>string `k_business_referral`</dt>
 *   <dd>Business referral key. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key, who is a recipient. </dd>
 * </dl>
 * 
 * business-partner-referral-mail-reach-partner (id_mail 146):
 * <dl>
 *   <dt>string `k_business_partner`</dt>
 *   <dd>Business partner key. </dd>
 * 
 *   <dt>string `k_business_referral`</dt>
 *   <dd>Business referral key. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key, who is a recipient. </dd>
 * </dl>
 * 
 * business-partner-referral-mail-reach-referral (id_mail 147):
 * <dl>
 *   <dt>string `k_business_partner`</dt>
 *   <dd>Business partner key. </dd>
 * 
 *   <dt>string `k_business_referral`</dt>
 *   <dd>Business referral key. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Key of the user who is a recipient. </dd>
 * </dl>
 * 
 * business-partner-referral-mail-subscribe (id_mail 144):
 * <dl>
 *   <dt>string `k_business_partner`</dt>
 *   <dd>Business partner key. </dd>
 * 
 *   <dt>string `k_business_referral`</dt>
 *   <dd>Business referral key. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key, who is a recipient. </dd>
 * </dl>
 * 
 * business-phone (id_mail 139):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key.</dd>
 * 
 *   <dt>string `text_business_phone`</dt>
 *   <dd>Business phone number.</dd>
 * </dl>
 * 
 * business-sms-chat (id_mail 141):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. Required, must not be empty. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Key of the client user. Required, must not be empty. 
 *   </dd>
 * </dl>
 * 
 * cancellation-request-ai (id_mail 202):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `html_view_conversation_button`</dt>
 *   <dd>Button that staff can click to view the conversation between client and AI Agent.</dd>
 * 
 *   <dt>string `text_client_mail`</dt>
 *   <dd>Client's email address.</dd>
 * 
 *   <dt>string `text_client_name`</dt>
 *   <dd>Client's name.</dd>
 * 
 *   <dt>string `text_client_phone`</dt>
 *   <dd>Client's phone number.</dd>
 * 
 *   <dt>string `text_booking_details`</dt>
 *   <dd>The details of booking if provided by client.</dd>
 * 
 *   <dt>string `text_booking_details_sms`</dt>
 *   <dd>The details of booking if provided by client.</dd>
 * 
 *   <dt>string `text_cancel_reason`</dt>
 *   <dd>Any note provided by the client explaining the cancellation request.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Recipient user's key. </dd>
 * 
 *   <dt>string `url_view_conversation_link`</dt>
 *   <dd>URL to view the conversation (for email).</dd>
 * 
 *   <dt>string `url_view_conversation_link_sms`</dt>
 *   <dd>URL to view the conversation (for SMS).</dd>
 * </dl>
 * 
 * class-book-ai (id_mail 201):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `html_view_conversation_button`</dt>
 *   <dd>Button that staff can click to view the conversation between client and AI Agent.</dd>
 * 
 *   <dt>string `text_client_mail`</dt>
 *   <dd>Client's email address.</dd>
 * 
 *   <dt>string `text_client_name`</dt>
 *   <dd>Client's name.</dd>
 * 
 *   <dt>string `text_client_phone`</dt>
 *   <dd>Client's phone number.</dd>
 * 
 *   <dt>string `text_preferred_date_time`</dt>
 *   <dd>The date of the requested service in the format: Thursday, May 15, 2015, 10:00 - 11:00 a.m.</dd>
 * 
 *   <dt>string `text_preferred_date_time_sms`</dt>
 *   <dd>The date of the requested service in the format: Jan 14, 11:00 a.m.</dd>
 * 
 *   <dt>string `text_location`</dt>
 *   <dd>Appointment location.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Recipient user's key. </dd>
 * 
 *   <dt>string `url_view_conversation_link`</dt>
 *   <dd>URL to view the conversation (for email).</dd>
 * 
 *   <dt>string `url_view_conversation_link_sms`</dt>
 *   <dd>URL to view the conversation (for SMS).</dd>
 * </dl>
 * 
 * class-booked-ai (id_mail 199):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `html_view_conversation_button`</dt>
 *   <dd>Button that staff can click to view the conversation between client and AI Agent.</dd>
 * 
 *   <dt>string `text_client_mail`</dt>
 *   <dd>Client's email address.</dd>
 * 
 *   <dt>string `text_client_name`</dt>
 *   <dd>Client's name.</dd>
 * 
 *   <dt>string `text_client_phone`</dt>
 *   <dd>Client's phone number.</dd>
 * 
 *   <dt>string `text_date_day`</dt>
 *   <dd>Class date (display format).</dd>
 * 
 *   <dt>string `text_date_day_sms`</dt>
 *   <dd>Class date (SMS format).</dd>
 * 
 *   <dt>string `text_date_time`</dt>
 *   <dd>Class time (display format).</dd>
 * 
 *   <dt>string `text_date_time_sms`</dt>
 *   <dd>Class time (SMS format).</dd>
 * 
 *   <dt>string `text_duration`</dt>
 *   <dd>The duration of the service.</dd>
 * 
 *   <dt>string `text_location`</dt>
 *   <dd>Class location.</dd>
 * 
 *   <dt>string `text_room`</dt>
 *   <dd>The name of the specific location referred to by the client.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Recipient user's key. </dd>
 * 
 *   <dt>string `url_view_conversation_link`</dt>
 *   <dd>URL to view the conversation (for email).</dd>
 * 
 *   <dt>string `url_view_conversation_link_sms`</dt>
 *   <dd>URL to view the conversation (for SMS).</dd>
 * </dl>
 * 
 * class-edit-class (id_mail 24):
 * <dl>
 *   <dt>string[] `a_visit`</dt>
 *   <dd>List of visit keys. </dd>
 * 
 *   <dt>string `k_class`</dt>
 *   <dd>Class key. </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>Live mail pattern key. </dd>
 * 
 *   <dt>string `text_title_old`</dt>
 *   <dd>Old class title.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * class-edit-enrollment (id_mail 64):
 * <dl>
 *   <dt>string[] `a_visit`</dt>
 *   <dd>List of visit keys. </dd>
 * 
 *   <dt>string `k_class`</dt>
 *   <dd>Class key. </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>Live mail pattern key. </dd>
 * 
 *   <dt>string `text_title_old`</dt>
 *   <dd>Old class title.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * class-period-cancel-class (id_mail 16):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets of the visit to show in the e-mail. Empty by default. Each element:
 *     <dl>
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title with its index (in case of several assets).</dd>
 * 
 *       <dt>int `i_count`</dt>
 *       <dd>Number of sessions.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `dt_date`</dt>
 *   <dd>Date of the class period (MySQL date and time format).</dd>
 * 
 *   <dt>string `dt_time_new`</dt>
 *   <dd>
 *     New time of the class period. If it is not a valid MySQL date and time, `dt_date` is used for the time
 * interval.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business ID. </dd>
 * 
 *   <dt>string `k_class_period`</dt>
 *   <dd>Class period ID. </dd>
 * 
 *   <dt>string `k_location`</dt>
 *   <dd>Location ID. </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>Optional. Live mail pattern ID.
 * </dd>
 * 
 *   <dt>string `s_cancel_list`</dt>
 *   <dd>Optional. Comma-separated list of the cancelled dates. If empty, the date of `dt_date` is used.</dd>
 * 
 *   <dt>string `s_change_html`</dt>
 *   <dd>Changes in html format.</dd>
 * 
 *   <dt>string `s_change_sms`</dt>
 *   <dd>Changes in sms format.</dd>
 * 
 *   <dt>string `s_change_text`</dt>
 *   <dd>Changes in text format.</dd>
 * 
 *   <dt>string `s_class`</dt>
 *   <dd>Class title.</dd>
 * 
 *   <dt>string `s_duration`</dt>
 *   <dd>Duration.</dd>
 * 
 *   <dt>string `s_location`</dt>
 *   <dd>Location title.</dd>
 * 
 *   <dt>string `s_location_address`</dt>
 *   <dd>Location address.</dd>
 * 
 *   <dt>string `s_location_city`</dt>
 *   <dd>City title.</dd>
 * 
 *   <dt>string `s_location_country`</dt>
 *   <dd>Country title.</dd>
 * 
 *   <dt>string `s_location_postalcode`</dt>
 *   <dd>Postalcode.</dd>
 * 
 *   <dt>string `s_location_region`</dt>
 *   <dd>Region title.</dd>
 * 
 *   <dt>string `s_room`</dt>
 *   <dd>Room.</dd>
 * 
 *   <dt>string|null `s_special`</dt>
 *   <dd>Special information.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID. </dd>
 * </dl>
 * 
 * class-period-cancel-enrollment (id_mail 66):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets of the visit to show in the e-mail. Empty by default. Each element:
 *     <dl>
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title with its index (in case of several assets).</dd>
 * 
 *       <dt>int `i_count`</dt>
 *       <dd>Number of sessions.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `dt_date`</dt>
 *   <dd>Date of the class period (MySQL date and time format).</dd>
 * 
 *   <dt>string `dt_time_new`</dt>
 *   <dd>
 *     New time of the class period. If it is not a valid MySQL date and time, `dt_date` is used for the time
 * interval.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business ID. </dd>
 * 
 *   <dt>string `k_class_period`</dt>
 *   <dd>Class period ID. </dd>
 * 
 *   <dt>string `k_location`</dt>
 *   <dd>Location ID. </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>Optional. Live mail pattern ID.
 * </dd>
 * 
 *   <dt>string `s_cancel_list`</dt>
 *   <dd>Optional. Comma-separated list of the cancelled dates. If empty, the date of `dt_date` is used.</dd>
 * 
 *   <dt>string `s_change_html`</dt>
 *   <dd>Changes in html format.</dd>
 * 
 *   <dt>string `s_change_sms`</dt>
 *   <dd>Changes in sms format.</dd>
 * 
 *   <dt>string `s_change_text`</dt>
 *   <dd>Changes in text format.</dd>
 * 
 *   <dt>string `s_class`</dt>
 *   <dd>Class title.</dd>
 * 
 *   <dt>string `s_duration`</dt>
 *   <dd>Duration.</dd>
 * 
 *   <dt>string `s_location`</dt>
 *   <dd>Location title.</dd>
 * 
 *   <dt>string `s_location_address`</dt>
 *   <dd>Location address.</dd>
 * 
 *   <dt>string `s_location_city`</dt>
 *   <dd>City title.</dd>
 * 
 *   <dt>string `s_location_country`</dt>
 *   <dd>Country title.</dd>
 * 
 *   <dt>string `s_location_postalcode`</dt>
 *   <dd>Postalcode.</dd>
 * 
 *   <dt>string `s_location_region`</dt>
 *   <dd>Region title.</dd>
 * 
 *   <dt>string `s_room`</dt>
 *   <dd>Room.</dd>
 * 
 *   <dt>string|null `s_special`</dt>
 *   <dd>Special information.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID. </dd>
 * </dl>
 * 
 * class-period-change-class (id_mail 17):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets of the visit to show in the e-mail. Empty by default. Each element:
 *     <dl>
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title with its index (in case of several assets).</dd>
 * 
 *       <dt>int `i_count`</dt>
 *       <dd>Number of sessions.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `dt_date`</dt>
 *   <dd>Date of the class period (MySQL date and time format).</dd>
 * 
 *   <dt>string `dt_time_new`</dt>
 *   <dd>
 *     New time of the class period. If it is not a valid MySQL date and time, `dt_date` is used for the time
 * interval.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business ID. </dd>
 * 
 *   <dt>string `k_class_period`</dt>
 *   <dd>Class period ID. </dd>
 * 
 *   <dt>string `k_location`</dt>
 *   <dd>Location ID. </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>Optional. Live mail pattern ID.
 * </dd>
 * 
 *   <dt>bool `is_book_cancel`</dt>
 *   <dd>Whether all books of the session are cancelled.</dd>
 * 
 *   <dt>string `s_change_html`</dt>
 *   <dd>Changes in html format.</dd>
 * 
 *   <dt>string `s_change_sms`</dt>
 *   <dd>Changes in sms format.</dd>
 * 
 *   <dt>string `s_change_text`</dt>
 *   <dd>Changes in text format.</dd>
 * 
 *   <dt>string `s_class`</dt>
 *   <dd>Class title.</dd>
 * 
 *   <dt>string `s_day`</dt>
 *   <dd>Day.</dd>
 * 
 *   <dt>string `s_duration`</dt>
 *   <dd>Duration.</dd>
 * 
 *   <dt>string `s_location`</dt>
 *   <dd>Location title.</dd>
 * 
 *   <dt>string `s_location_address`</dt>
 *   <dd>Location address.</dd>
 * 
 *   <dt>string `s_location_city`</dt>
 *   <dd>City title.</dd>
 * 
 *   <dt>string `s_location_country`</dt>
 *   <dd>Country title.</dd>
 * 
 *   <dt>string `s_location_postalcode`</dt>
 *   <dd>Postalcode.</dd>
 * 
 *   <dt>string `s_location_region`</dt>
 *   <dd>Region title.</dd>
 * 
 *   <dt>string `s_room`</dt>
 *   <dd>Room.</dd>
 * 
 *   <dt>string|null `s_special`</dt>
 *   <dd>Special information.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID. </dd>
 * </dl>
 * 
 * class-period-change-enrollment (id_mail 65):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Assets of the visit to show in the e-mail. Empty by default. Each element:
 *     <dl>
 *       <dt>string `text_name`</dt>
 *       <dd>Asset title with its index (in case of several assets).</dd>
 * 
 *       <dt>int `i_count`</dt>
 *       <dd>Number of sessions.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `dt_date`</dt>
 *   <dd>Date of the class period (MySQL date and time format).</dd>
 * 
 *   <dt>string `dt_time_new`</dt>
 *   <dd>
 *     New time of the class period. If it is not a valid MySQL date and time, `dt_date` is used for the time
 * interval.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business ID. </dd>
 * 
 *   <dt>string `k_class_period`</dt>
 *   <dd>Class period ID. </dd>
 * 
 *   <dt>string `k_location`</dt>
 *   <dd>Location ID. </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>Optional. Live mail pattern ID.
 * </dd>
 * 
 *   <dt>bool `is_book_cancel`</dt>
 *   <dd>Whether all books of the session are cancelled.</dd>
 * 
 *   <dt>string `s_change_html`</dt>
 *   <dd>Changes in html format.</dd>
 * 
 *   <dt>string `s_change_sms`</dt>
 *   <dd>Changes in sms format.</dd>
 * 
 *   <dt>string `s_change_text`</dt>
 *   <dd>Changes in text format.</dd>
 * 
 *   <dt>string `s_class`</dt>
 *   <dd>Class title.</dd>
 * 
 *   <dt>string `s_day`</dt>
 *   <dd>Day.</dd>
 * 
 *   <dt>string `s_duration`</dt>
 *   <dd>Duration.</dd>
 * 
 *   <dt>string `s_location`</dt>
 *   <dd>Location title.</dd>
 * 
 *   <dt>string `s_location_address`</dt>
 *   <dd>Location address.</dd>
 * 
 *   <dt>string `s_location_city`</dt>
 *   <dd>City title.</dd>
 * 
 *   <dt>string `s_location_country`</dt>
 *   <dd>Country title.</dd>
 * 
 *   <dt>string `s_location_postalcode`</dt>
 *   <dd>Postalcode.</dd>
 * 
 *   <dt>string `s_location_region`</dt>
 *   <dd>Region title.</dd>
 * 
 *   <dt>string `s_room`</dt>
 *   <dd>Room.</dd>
 * 
 *   <dt>string|null `s_special`</dt>
 *   <dd>Special information.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID. </dd>
 * </dl>
 * 
 * classes-cancel-staff (id_mail 135):
 * <dl>
 *   <dt>string[] `a_class_period`</dt>
 *   <dd>
 *     A list of canceled class period keys. Each value is class period key.
 * 
 *   </dd>
 * 
 *   <dt>string|null `dl_end`</dt>
 *   <dd>End date of range to cancel sessions. <tt>null</tt> when cancelation is ongoing.</dd>
 * 
 *   <dt>string `dl_start`</dt>
 *   <dd>Start date of range to cancel sessions.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Recipient user key. </dd>
 * </dl>
 * 
 * classes-period-change-classes-staff (id_mail 100):
 * <dl>
 *   <dt>string[] `a_class_period`</dt>
 *   <dd>List of keys of the changed class periods. Only the first 10 are used to build the mail identifier.</dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Key of the business. </dd>
 * 
 *   <dt>string `s_change_sms`</dt>
 *   <dd>Short list of the changes of the class period in SMS format. Used as the changes in all formats of the mail.</dd>
 * 
 *   <dt>string `s_class`</dt>
 *   <dd>Class title.</dd>
 * 
 *   <dt>string `s_date_day_sms`</dt>
 *   <dd>Date of the first changed class period in SMS format.</dd>
 * 
 *   <dt>string `s_date_time_sms`</dt>
 *   <dd>Start time of the first changed class period in SMS format.</dd>
 * 
 *   <dt>string `s_schedule_details_html`</dt>
 *   <dd>Details of the changed class periods in HTML format.</dd>
 * 
 *   <dt>string `s_schedule_details_text`</dt>
 *   <dd>Details of the changed class periods in text format.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Key of the staff member (user) who receives the mail. If empty, the mail is not sent.
 * 
 *   </dd>
 * </dl>
 * 
 * classes-promote (id_mail 109):
 * <dl>
 *   <dt>string `dl_visit`</dt>
 *   <dd>Date, when client can visit this class.</dd>
 * 
 *   <dt>string `dt_visit`</dt>
 *   <dd>Date, when client can visit this class. The legacy prefix remains for backward compatibility.</dd>
 * 
 *   <dt>string `k_class_period`</dt>
 *   <dd>Class schedule ID. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * classes-staff-recurrent (id_mail 124):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Keys of the assets used for the reservations. Empty array by default.
 *  Each element:
 *     <dl>
 *       <dt>string `k_asset`</dt>
 *       <dd>Asset key. </dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>array `a_visit`</dt>
 *   <dd>
 *     Keys of the visits of the recurrent booking. The first one identifies the booking.
 * If the list is empty, the e-mail is not sent. Each element:
 *     <dl>
 *       <dt>string `k_visit`</dt>
 *       <dd>Visit key. </dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Key of the business to which the visits belong. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Key of the staff member's user who receives the e-mail. </dd>
 * </dl>
 * 
 * classes-staff-recurrent-cancel (id_mail 125):
 * <dl>
 *   <dt>array `a_asset`</dt>
 *   <dd>
 *     Optional. Keys of the assets used for the reservations. Empty array by default.
 *  Each element:
 *     <dl>
 *       <dt>string `k_asset`</dt>
 *       <dd>Asset key. </dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>array `a_visit`</dt>
 *   <dd>
 *     Keys of the visits of the recurrent booking. The first one identifies the booking.
 * If the list is empty, the e-mail is not sent. Each element:
 *     <dl>
 *       <dt>string `k_visit`</dt>
 *       <dd>Visit key. </dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Key of the business to which the visits belong. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Key of the staff member's user who receives the e-mail. </dd>
 * </dl>
 * 
 * classes-staff-substitution (id_mail 110):
 * <dl>
 *   <dt>string[] `a_class_period`</dt>
 *   <dd>List of class periods ID.</dd>
 * 
 *   <dt>string `dt_start`</dt>
 *   <dd>The start date of the period.</dd>
 * 
 *   <dt>string `dt_time`</dt>
 *   <dd>New time.</dd>
 * 
 *   <dt>string `s_with`</dt>
 *   <dd>List of staff members (without the recipient's mail).</dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key.</dd>
 * 
 *   <dt>string `k_location`</dt>
 *   <dd>Location key.</dd>
 * 
 *   <dt>string `s_class`</dt>
 *   <dd>Class title.</dd>
 * 
 *   <dt>string `s_change_html`</dt>
 *   <dd>Changes in html format.</dd>
 * 
 *   <dt>string `s_change_sms`</dt>
 *   <dd>Changes in sms format.</dd>
 * 
 *   <dt>string `s_change_text`</dt>
 *   <dd>Changes Changes in text format.</dd>
 * 
 *   <dt>string `s_duration`</dt>
 *   <dd>Duration.</dd>
 * 
 *   <dt>string `s_location`</dt>
 *   <dd>Location title.</dd>
 * 
 *   <dt>string `s_location_address`</dt>
 *   <dd>Location address.</dd>
 * 
 *   <dt>string `s_location_city`</dt>
 *   <dd>City title.</dd>
 * 
 *   <dt>string `s_location_country`</dt>
 *   <dd>Country title.</dd>
 * 
 *   <dt>string `s_location_postalcode`</dt>
 *   <dd>Postalcode.</dd>
 * 
 *   <dt>string `s_location_region`</dt>
 *   <dd>Region title.</dd>
 * 
 *   <dt>string `s_room`</dt>
 *   <dd>Room.</dd>
 * 
 *   <dt>string `s_special`</dt>
 *   <dd>Special information.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key.</dd>
 * </dl>
 * 
 * classes-staff-substitution-remind (id_mail 117):
 * <dl>
 *   <dt>string `dt_date`</dt>
 *   <dd>The date and the time of the class session.</dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key.</dd>
 * 
 *   <dt>string `k_class_period`</dt>
 *   <dd>Class period key.</dd>
 * 
 *   <dt>string `k_location`</dt>
 *   <dd>Location key.</dd>
 * 
 *   <dt>string `s_duration`</dt>
 *   <dd>Duration.</dd>
 * 
 *   <dt>string `s_location`</dt>
 *   <dd>Location title.</dd>
 * 
 *   <dt>string `s_location_address`</dt>
 *   <dd>Location address.</dd>
 * 
 *   <dt>string `s_location_city`</dt>
 *   <dd>City title.</dd>
 * 
 *   <dt>string `s_location_country`</dt>
 *   <dd>Country title.</dd>
 * 
 *   <dt>string `s_location_postalcode`</dt>
 *   <dd>Postalcode.</dd>
 * 
 *   <dt>string `s_location_region`</dt>
 *   <dd>Region title.</dd>
 * 
 *   <dt>string `s_room`</dt>
 *   <dd>Room.</dd>
 * 
 *   <dt>string `s_service_name`</dt>
 *   <dd>Class title.</dd>
 * 
 *   <dt>string `s_special`</dt>
 *   <dd>Special information.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key.</dd>
 * </dl>
 * 
 * classes-video-publish (id_mail 161):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_video`</dt>
 *   <dd>Video key. </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Recipient user key. </dd>
 * </dl>
 * 
 * client-birthday (id_mail 221):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>
 *     Business key. Required: if it is empty, the e-mail is not sent.
 * 
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Key of the user (client) who has the birthday. Required: if the user does not exist, the e-mail is not sent.
 * 
 *   </dd>
 * 
 *   <dt>string `s_id`</dt>
 *   <dd>User ID. Not read by this method.</dd>
 * 
 *   <dt>string `s_realname`</dt>
 *   <dd>User real name. Not read by this method.</dd>
 * 
 *   <dt>string `dl_birthday`</dt>
 *   <dd>
 *     Optional. Feb-29-normalized cycle anchor date (business local, no time).
 *  Not set for the legacy non-automation send, which always fires exactly on the client's actual
 * birthday, so the birth date of the client is used instead.
 *   </dd>
 * </dl>
 * 
 * contract-copy (id_mail 98):
 * <dl>
 *   <dt>string `dt_agree`</dt>
 *   <dd>
 *     Date of signing the contract. The contract signed at this date is sent. A zero date or `null` selects
 * the contract that is not signed yet. The key is required: the method reads it without a check.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business ID. </dd>
 * 
 *   <dt>string `k_purchase_item`</dt>
 *   <dd>Purchase item ID. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     User ID.  Optional. If it is empty (the purchase was done
 * for a guest), the mail is not sent.
 *   </dd>
 * </dl>
 * 
 * coupon-purchase (id_mail 84):
 * <dl>
 *   <dt>string `k_login_coupon`</dt>
 *   <dd>Key of the purchased coupon (Gift Card). </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>
 *     Optional. E-mail of the recipient. 
 *   </dd>
 * </dl>
 * 
 * event-book-session-client (id_mail 129):
 * <dl>
 *   <dt>string[] `a_visit`</dt>
 *   <dd>Visit keys. </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key. </dd>
 * </dl>
 * 
 * event-book-session-staff (id_mail 130):
 * <dl>
 *   <dt>string[] `a_visit`</dt>
 *   <dd>Visit keys. </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>Email pattern live key. </dd>
 * 
 *   <dt>string `k_staff`</dt>
 *   <dd>Staff key. </dd>
 * </dl>
 * 
 * event-promote (id_mail 160):
 * <dl>
 *   <dt>string `dl_visit`</dt>
 *   <dd>Date, when client can visit this class.</dd>
 * 
 *   <dt>string `dt_visit`</dt>
 *   <dd>Date, when client can visit this class. The legacy prefix remains for backward compatibility.</dd>
 * 
 *   <dt>string `k_class_period`</dt>
 *   <dd>Class schedule ID. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * event-video-publish (id_mail 162):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_video`</dt>
 *   <dd>Video key. </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Recipient user key. </dd>
 * </dl>
 * 
 * fitbuilder-mail-comment (id_mail 182):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Key of the business to send the e-mail from. </dd>
 * </dl>
 * 
 * fitbuilder-mail-like (id_mail 183):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Key of the business to send the e-mail from. </dd>
 * </dl>
 * 
 * fitbuilder-mail-thumb (id_mail 184):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Key of the business to send the e-mail from. </dd>
 * </dl>
 * 
 * fitbuilder-mail-workout (id_mail 185):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `uid_actor`</dt>
 *   <dd>Recipient id.</dd>
 * 
 *   <dt>string `text_date_day`</dt>
 *   <dd>The date of the Service in the following format: Friday, May 15, 2015.</dd>
 * 
 *   <dt>string `text_duration`</dt>
 *   <dd>The duration of the workout.</dd>
 * 
 *   <dt>string `text_workout_title`</dt>
 *   <dd>The title of the workout.</dd>
 * 
 *   <dt>string `text_fitbuilder_wod_url`</dt>
 *   <dd>The URL of the workout.</dd>
 * </dl>
 * 
 * guest-pass-expired (id_mail 218):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `s_secret`</dt>
 *   <dd>Secret of the guest pass invite.</dd>
 * </dl>
 * 
 * guest-pass-invitation (id_mail 217):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `s_secret`</dt>
 *   <dd>Secret of the guest pass invite.</dd>
 * </dl>
 * 
 * guest-pass-reminder (id_mail 219):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `s_secret`</dt>
 *   <dd>Secret of the guest pass invite.</dd>
 * </dl>
 * 
 * help-popup-email (id_mail 150):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `s_description`</dt>
 *   <dd>The description of the issue or question the user is experiencing.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * integration-autymate-enrollment (id_mail 176):
 * <dl>
 *   <dt>int `i_trial_period`</dt>
 *   <dd>The number of days in the trial period.</dd>
 * 
 *   <dt>string `k_business_customer`</dt>
 *   <dd>Key of affected business. </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Email address sent email message.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * integration-collection-aldous (id_mail 178):
 * <dl>
 *   <dt>string `k_business_actor`</dt>
 *   <dd>Key of affected business. </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Email address sent email message.</dd>
 * 
 *   <dt>string `uid_actor`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * integration-zoom-confirmation (id_mail 138):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key.</dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Recipient email.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * landing-contact (id_mail 97):
 * <dl>
 *   <dt>string `k_business_partner`</dt>
 *   <dd>
 *     Optional. Key of the business partner, if the client came from the partner program. Default is `0`.
 *   
 *   </dd>
 * 
 *   <dt>string `s_business_name`</dt>
 *   <dd>Optional. Business name. Default is an empty string.</dd>
 * 
 *   <dt>string `s_client_mail`</dt>
 *   <dd>Client's email. Required: if it is empty, the email is not sent.</dd>
 * 
 *   <dt>string `s_firstname`</dt>
 *   <dd>Optional. Client's firstname. Default is an empty string.</dd>
 * 
 *   <dt>string `s_fullname`</dt>
 *   <dd>Client's full name. Required. Also used for the field `s_id` of the email.</dd>
 * 
 *   <dt>string `s_industry`</dt>
 *   <dd>Optional. Type of industry of the client business. Default is an empty string.</dd>
 * 
 *   <dt>string `s_lastname`</dt>
 *   <dd>Optional. Client's lastname. Default is an empty string.</dd>
 * 
 *   <dt>string `s_phone`</dt>
 *   <dd>Optional. Client's phone. Default is an empty string.</dd>
 * 
 *   <dt>string `s_promo`</dt>
 *   <dd>Optional. Promo code. Default is an empty string.</dd>
 * 
 *   <dt>string `s_reference`</dt>
 *   <dd>Optional. From where client hear about wellnessliving. Default is an empty string.</dd>
 * 
 *   <dt>string `s_website`</dt>
 *   <dd>Optional. Client's website. Default is an empty string.</dd>
 * 
 *   <dt>string `text_site_page`</dt>
 *   <dd>Optional. Current page title. Default is an empty string.</dd>
 * 
 *   <dt>string `url_current`</dt>
 *   <dd>Optional. Current page url. Default is an empty string.</dd>
 * </dl>
 * 
 * lead-added-staff (id_mail 163):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Key of business. </dd>
 * 
 *   <dt>string|null `k_location`</dt>
 *   <dd>
 *     Key of location. 
 * <tt>null</tt> if form of lead not contains field with location
 *   </dd>
 * 
 *   <dt>string `k_skin`</dt>
 *   <dd>Key of skin. </dd>
 * 
 *   <dt>array `a_lead_info`</dt>
 *   <dd>
 *     The post request from lead form widget.
 * Besides the keys below it has one string value of every form field under the key `field-` followed by the
 * key of the field:
 *     <dl>
 *       <dt>int `i_year`</dt>
 *       <dd>Year of birthday. Used only for the birthday field.</dd>
 * 
 *       <dt>int `i_month`</dt>
 *       <dd>Month of birthday. Used only for the birthday field.</dd>
 * 
 *       <dt>int `i_day`</dt>
 *       <dd>Day of birthday. Used only for the birthday field.</dd>
 * 
 *       <dt>string `uid_referrer`</dt>
 *       <dd>Key of the user who referred the lead. Used only for the referrer field.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Mail of staff.</dd>
 * 
 *   <dt>string `url_view_profile`</dt>
 *   <dd>Url to Lead's client profile.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Staff user key. </dd>
 * 
 *   <dt>string `uid_lead`</dt>
 *   <dd>Lead user key. </dd>
 * </dl>
 * 
 * lead-capture (id_mail 87):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_mail_pattern`</dt>
 *   <dd>Pattern key. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID.</dd>
 * </dl>
 * 
 * lead-capture-ai (id_mail 197):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `html_view_conversation_button`</dt>
 *   <dd>Button that staff can click to view the conversation between client and AI Agent.</dd>
 * 
 *   <dt>string `text_lead_information`</dt>
 *   <dd>The information submitted by a prospective client to the AI agent.</dd>
 * 
 *   <dt>string `text_lead_information_sms`</dt>
 *   <dd>The information submitted by a prospective client to the AI agent (SMS format).</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Recipient user's key. </dd>
 * 
 *   <dt>string `url_view_conversation_link`</dt>
 *   <dd>URL to view the conversation (for email).</dd>
 * 
 *   <dt>string `url_view_conversation_link_sms`</dt>
 *   <dd>URL to view the conversation (for SMS).</dd>
 * </dl>
 * 
 * lead-stage-updated (id_mail 224):
 * <dl>
 *   <dt>string `dtu_date`</dt>
 *   <dd>
 *     Optional. Date and time of the stage change in UTC, in MySQL format. If empty or invalid, the stage change
 * date variable stays empty.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>
 *     Optional. Key of the business.  If empty, no
 * variable is resolved and the data is returned with empty variables.
 *   </dd>
 * 
 *   <dt>string `k_lead_stage`</dt>
 *   <dd>
 *     Optional. Key of the current lead stage.  If empty, the current stage variable stays empty.
 *   </dd>
 * 
 *   <dt>string `k_lead_stage_old`</dt>
 *   <dd>
 *     Optional. Key of the previous lead stage.  If empty, the previous stage variable stays empty.
 *   </dd>
 * </dl>
 * 
 * login-anniversary (id_mail 96):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business ID. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID. </dd>
 * </dl>
 * 
 * login-attendance (id_mail 42):
 * <dl>
 *   <dt>string `dt_date`</dt>
 *   <dd>Date of the attendance in the MySQL date format.</dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `s_class_period_html`</dt>
 *   <dd>Details of the class period in html format.</dd>
 * 
 *   <dt>string `s_class_period_text`</dt>
 *   <dd>Details of the class period in text format.</dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Email address.</dd>
 * 
 *   <dt>string `s_name`</dt>
 *   <dd>User name.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID. </dd>
 * </dl>
 * 
 * login-back (id_mail 79):
 * <dl>
 *   <dt>int `i_id`</dt>
 *   <dd>Optional. ID of the location. Required if `k_location` is not set.</dd>
 * 
 *   <dt>string `k_location`</dt>
 *   <dd>
 *     Optional. Location key. Takes precedence over `i_id`.
 * 
 *   </dd>
 * 
 *   <dt>string `k_mail_pattern`</dt>
 *   <dd>
 *     Mail pattern ID. If empty, the e-mail is not sent.
 * 
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID. If empty, the e-mail is not sent. </dd>
 * </dl>
 * 
 * login-birthday (id_mail 49):
 * <dl>
 *   <dt>string `dl_birthday`</dt>
 *   <dd>
 *     Optional. Feb-29-normalized cycle anchor date (business local, no time), set for automation sends.
 * 
 * Not set for the legacy non-automation send, which always fires exactly on the client's actual birthday,
 * so "today" is used instead.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business ID. If empty, the e-mail is not sent. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID. </dd>
 * </dl>
 * 
 * login-card-expire (id_mail 51):
 * <dl>
 *   <dt>string `k_pay_bank`</dt>
 *   <dd>Payment card ID.  Required.</dd>
 * </dl>
 * 
 * login-mail-confirm (id_mail 123):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Key of the business.</dd>
 * 
 *   <dt>string `text_mail`</dt>
 *   <dd>Email address.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Key of the user.</dd>
 * </dl>
 * 
 * login-message (id_mail 22):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>
 *     Optional. Business key.  If not set, it is determined by
 * `k_mail_pattern_live`.
 *   </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>
 *     Live mail pattern key. Required if `k_business` is not set.
 * 
 *   </dd>
 * 
 *   <dt>string `s_business_name`</dt>
 *   <dd>Optional. Business name. If empty, the title of the business `k_business` is used.</dd>
 * 
 *   <dt>string `s_business_reply`</dt>
 *   <dd>Optional. Reply-to address of the business. Empty by default.</dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Optional if `uid` is set. Email address. If both `s_mail` and `uid` are empty, the e-mail is not sent.</dd>
 * 
 *   <dt>string `s_phone`</dt>
 *   <dd>Optional. Phone number. Empty by default.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Optional if `s_mail` is set. User ID. Empty for a recipient who is not a user.
 * 
 *   </dd>
 * </dl>
 * 
 * login-penalty-appointment (id_mail 72):
 * <dl>
 *   <dt>array `a_action`</dt>
 *   <dd>
 *     Information about the appointment. Used elements:
 *     <dl>
 *       <dt>string `dt_date`</dt>
 *       <dd>Date of the action in the MySQL date format.</dd>
 * 
 *       <dt>string `k_appointment`</dt>
 *       <dd>
 *         Appointment key. Set only for an appointment; when it is empty the action is treated as a class or an
 * enrollment.
 *       </dd>
 * 
 *       <dt>string `k_class_period`</dt>
 *       <dd>Class period key. Used when `k_appointment` is empty.</dd>
 * 
 *       <dt>string `k_location`</dt>
 *       <dd>Location key.</dd>
 * 
 *       <dt>string `k_visit`</dt>
 *       <dd>Visit key. Used when `k_appointment` is set.</dd>
 * 
 *       <dt>string `s_location_postalcode`</dt>
 *       <dd>Optional. Postal code of the location. Empty by default.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>array[] `a_asset`</dt>
 *   <dd>
 *     Optional. List of assets info. Empty list by default. Every element is:
 *     <dl>
 *       <dt>int `i_count`</dt>
 *       <dd>Number of sessions of the asset.</dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>Name of the asset.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID.</dd>
 * </dl>
 * 
 * login-penalty-class (id_mail 15):
 * <dl>
 *   <dt>array `a_action`</dt>
 *   <dd>
 *     Information about the class. Used elements:
 *     <dl>
 *       <dt>string `dt_date`</dt>
 *       <dd>Date of the action in the MySQL date format.</dd>
 * 
 *       <dt>string `k_appointment`</dt>
 *       <dd>
 *         Appointment key. Set only for an appointment; when it is empty the action is treated as a class or an
 * enrollment.
 *       </dd>
 * 
 *       <dt>string `k_class_period`</dt>
 *       <dd>Class period key. Used when `k_appointment` is empty.</dd>
 * 
 *       <dt>string `k_location`</dt>
 *       <dd>Location key.</dd>
 * 
 *       <dt>string `k_visit`</dt>
 *       <dd>Visit key. Used when `k_appointment` is set.</dd>
 * 
 *       <dt>string `s_location_postalcode`</dt>
 *       <dd>Optional. Postal code of the location. Empty by default.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>array[] `a_asset`</dt>
 *   <dd>
 *     Optional. List of assets info. Empty list by default. Every element is:
 *     <dl>
 *       <dt>int `i_count`</dt>
 *       <dd>Number of sessions of the asset.</dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>Name of the asset.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID.</dd>
 * </dl>
 * 
 * login-penalty-enrollment (id_mail 67):
 * <dl>
 *   <dt>array `a_action`</dt>
 *   <dd>
 *     Information about the enrollment. Used elements:
 *     <dl>
 *       <dt>string `dt_date`</dt>
 *       <dd>Date of the action in the MySQL date format.</dd>
 * 
 *       <dt>string `k_appointment`</dt>
 *       <dd>
 *         Appointment key. Set only for an appointment; when it is empty the action is treated as a class or an
 * enrollment.
 *       </dd>
 * 
 *       <dt>string `k_class_period`</dt>
 *       <dd>Class period key. Used when `k_appointment` is empty.</dd>
 * 
 *       <dt>string `k_location`</dt>
 *       <dd>Location key.</dd>
 * 
 *       <dt>string `k_visit`</dt>
 *       <dd>Visit key. Used when `k_appointment` is set.</dd>
 * 
 *       <dt>string `s_location_postalcode`</dt>
 *       <dd>Optional. Postal code of the location. Empty by default.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>array[] `a_asset`</dt>
 *   <dd>
 *     Optional. List of assets info. Empty list by default. Every element is:
 *     <dl>
 *       <dt>int `i_count`</dt>
 *       <dd>Number of sessions of the asset.</dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>Name of the asset.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID.</dd>
 * </dl>
 * 
 * login-purchase-account (id_mail 159):
 * <dl>
 *   <dt>string `dtu_purchase`</dt>
 *   <dd>Purchase date.</dd>
 * 
 *   <dt>string `k_currency`</dt>
 *   <dd>Currency key. </dd>
 * 
 *   <dt>string `k_login_promotion`</dt>
 *   <dd>Login promotion key. </dd>
 * 
 *   <dt>string `k_pay_installment`</dt>
 *   <dd>Installment that purchase belongs to.
 * </dd>
 * 
 *   <dt>string `k_purchase`</dt>
 *   <dd>Purchase key. </dd>
 * 
 *   <dt>string `m_amount`</dt>
 *   <dd>An amount which was debit from a client account.</dd>
 * 
 *   <dt>string `uid_money`</dt>
 *   <dd>
 *     Money owner of the account debit. Used together with <var>k_login_promotion</var> or
 * <var>k_pay_installment</var>: the email is sent to this user. If not set, the email is sent to the payer of
 * the purchase option.
 *   </dd>
 * </dl>
 * 
 * login-retention (id_mail 50):
 * <dl>
 *   <dt>int `i_id`</dt>
 *   <dd>Optional. ID of the location. Required if `k_location` is not set.</dd>
 * 
 *   <dt>string `k_location`</dt>
 *   <dd>Optional. Location key. Takes precedence over `i_id`.</dd>
 * 
 *   <dt>string `k_mail_pattern`</dt>
 *   <dd>Mail pattern ID. If empty, the e-mail is not sent.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID. If empty, the e-mail is not sent.</dd>
 * </dl>
 * 
 * login-statement-new (id_mail 213):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_statement`</dt>
 *   <dd>
 *     Statement key. 
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key of the payer. </dd>
 * </dl>
 * 
 * login-welcome (id_mail 9):
 * <dl>
 *   <dt>bool `is_password`</dt>
 *   <dd>
 *     Optional. `true` to add a new password, `false` to change the existing password. If not set, it is determined
 * from the stored password of the user.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Optional. Business key. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID.</dd>
 * </dl>
 * 
 * marketing-automation-notify-staff (id_mail 223):
 * <dl>
 *   <dt>string `html_message`</dt>
 *   <dd>
 *     Notification message HTML, already resolved for this recipient (bracket tokens already
 * substituted and the WYSIWYG content already filtered).
 * 
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Key of business. </dd>
 * 
 *   <dt>string `text_subject`</dt>
 *   <dd>Notification subject, already resolved for this recipient.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Staff user key who receives this notification. </dd>
 * 
 *   <dt>string|null `uid_client`</dt>
 *   <dd>
 *     User key of the client who triggered the automation.  `null` if the automation has no triggering client.
 *   </dd>
 * </dl>
 * 
 * member-group-user-add (id_mail 214):
 * <dl>
 *   <dt>string `i_id`</dt>
 *   <dd>
 *     Key of the member group the client was added to. 
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>
 *     Key of the business in which the client was added to the member group.
 * 
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Key of the user (client) who was added to the member group.
 * 
 *   </dd>
 * </dl>
 * 
 * member-group-user-remove (id_mail 215):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>int|string `i_id`</dt>
 *   <dd>
 *     Key of the member group the client was removed from.
 * 
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Key of the removed user. If the user does not exist, the e-mail is not sent.</dd>
 * </dl>
 * 
 * membership-query (id_mail 203):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `html_view_conversation_button`</dt>
 *   <dd>Button that staff can click to view the conversation between client and AI Agent.</dd>
 * 
 *   <dt>string `text_client_mail`</dt>
 *   <dd>Client's email address.</dd>
 * 
 *   <dt>string `text_client_name`</dt>
 *   <dd>Client's name.</dd>
 * 
 *   <dt>string `text_client_phone`</dt>
 *   <dd>Client's phone number.</dd>
 * 
 *   <dt>string `text_location`</dt>
 *   <dd>The name of the specific location referred to in the email.</dd>
 * 
 *   <dt>string `text_query_note`</dt>
 *   <dd>Any note left by the client for the staff.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Recipient user's key. </dd>
 * 
 *   <dt>string `url_view_conversation_link`</dt>
 *   <dd>URL to view the conversation (for email).</dd>
 * 
 *   <dt>string `url_view_conversation_link_sms`</dt>
 *   <dd>URL to view the conversation (for SMS).</dd>
 * </dl>
 * 
 * notification-otp (id_mail 191):
 * <dl>
 *   <dt>string `s_otp_code`</dt>
 *   <dd>Otp code integer that was random generated.</dd>
 * </dl>
 * 
 * passport-login-enter (id_mail 187):
 * <dl>
 *   <dt>string `s_otp_code`</dt>
 *   <dd>Otp code integer that was random generated.</dd>
 * </dl>
 * 
 * passport-login-merge (id_mail 205):
 * <dl>
 *   <dt>string `text_business_name`</dt>
 *   <dd>Business name.</dd>
 * 
 *   <dt>string `text_first_name`</dt>
 *   <dd>Client's first name.</dd>
 * 
 *   <dt>string `text_newemail`</dt>
 *   <dd>New email address.</dd>
 * 
 *   <dt>string `text_oldemail`</dt>
 *   <dd>Old email address.</dd>
 * </dl>
 * 
 * pay-account-invoice (id_mail 85):
 * <dl>
 *   <dt>bool `is_print`</dt>
 *   <dd>
 *     Optional. Whether print version of an email is loaded. The button to print the e-mail is added to the
 * e-mail only if the key is set and is `false`; if the key is not set, the button is not added.
 *   </dd>
 * 
 *   <dt>string `k_pay_account`</dt>
 *   <dd>ID of the payment account to send information for.
 * </dd>
 * </dl>
 * 
 * pay-automatic-success (id_mail 116):
 * <dl>
 *   <dt>bool `is_send_force`</dt>
 *   <dd>Optional. Value of the same name in the result. If not set or empty, `false`.</dd>
 * 
 *   <dt>string|int `k_business`</dt>
 *   <dd>
 *     Optional. Key of the business the purchase belongs to. 
 * Used together with `uid` to find the staff member who performed the purchase.
 *   </dd>
 * 
 *   <dt>string `k_purchase`</dt>
 *   <dd>
 *     Key of the purchase.  If empty, the e-mail is not sent.
 *   </dd>
 * 
 *   <dt>string|int `uid`</dt>
 *   <dd>
 *     Optional. Key of the user the purchase was performed for.  Used only when the purchase was made by a business. `0` or not set if there is no such user.
 *   </dd>
 * 
 *   <dt>string `uid_money`</dt>
 *   <dd>
 *     Optional. Money owner of the charge. Used only if the purchase was made by a user: the e-mail is sent to
 * this user. If not set, or the user does not exist, the e-mail is sent to the money owner of the user who
 * made the purchase. 
 *   </dd>
 * </dl>
 * 
 * pay-transaction-fail (id_mail 181):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_pay_transaction`</dt>
 *   <dd>Transaction ID. </dd>
 * 
 *   <dt>string `k_pay_transaction_process`</dt>
 *   <dd>Transaction process ID. </dd>
 * 
 *   <dt>int `id_mode`</dt>
 *   <dd>Mode ID. One of {@link ModeSid} constants.</dd>
 * 
 *   <dt>int `id_pay_exception`</dt>
 *   <dd>Transaction exception ID. One of {@link PayExceptionSid} constants.</dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Email address sent email message.</dd>
 * 
 *   <dt>string `uid_money`</dt>
 *   <dd>Client user key. </dd>
 * </dl>
 * 
 * phone-agent-call-received (id_mail 222):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>int `id_call_outcome`</dt>
 *   <dd>How the call ended. One of {@link CallOutcomeEnum} cases.</dd>
 * 
 *   <dt>string `text_call_summary`</dt>
 *   <dd>Short summary of the call generated by CAASI.</dd>
 * 
 *   <dt>string `text_caller_name`</dt>
 *   <dd>The caller's name, if identified.</dd>
 * 
 *   <dt>string `text_caller_phone`</dt>
 *   <dd>The caller's phone number.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Recipient user's key. </dd>
 * 
 *   <dt>string `url_view_conversation_link`</dt>
 *   <dd>URL to view the conversation (for email).</dd>
 * 
 *   <dt>string `url_view_conversation_link_sms`</dt>
 *   <dd>URL to view the conversation (for SMS).</dd>
 * </dl>
 * 
 * presence-activate (id_mail 137):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key.</dd>
 * 
 *   <dt>int `id_website`</dt>
 *   <dd>ID of the desired subscription plan from {@link WebsiteSid}.</dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Recipient email.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Key of the user, who requested activation.</dd>
 * </dl>
 * 
 * product-purchase (id_mail 127):
 * <dl>
 *   <dt>int `i_id`</dt>
 *   <dd>Purchase item key. Required to find the product.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Uid of the receiver of the email.</dd>
 * </dl>
 * 
 * profile-mail-change (id_mail 93):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>
 *     Optional. Business ID, where procedure has been started.
 * If it is empty or not set, the business name is empty and user data is loaded without a business.
 * 
 *   </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Address to which email must be sent. It is old user email.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID - owner of the email address. </dd>
 * </dl>
 * 
 * profile-mail-confirm (id_mail 86):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>
 *     Optional. Business ID, where procedure has been started.
 * If it is empty or not set, the business name is empty and user data is loaded without a business.
 * 
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID - owner of the email address. </dd>
 * </dl>
 * 
 * profile-password-change (id_mail 111):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key, where procedure has been started.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key.</dd>
 * </dl>
 * 
 * profile-password-reset (id_mail 142):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key, where procedure has been started.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key.</dd>
 * 
 *   <dt>string `url_change_password`</dt>
 *   <dd>The URL at which the user can change their password.</dd>
 * </dl>
 * 
 * promotion-low (id_mail 43):
 * <dl>
 *   <dt>array `a_low`</dt>
 *   <dd>
 *     Location, promotion IDs. If not set, it is built from `k_login_promotion`:
 *     <dl>
 *       <dt>string `k_location`</dt>
 *       <dd>
 *         Location key. If empty, it is detected by the promotion.
 *    
 *       </dd>
 * 
 *       <dt>string `k_login_promotion`</dt>
 *       <dd>
 *         Login promotion key. Used to calculate the remaining visits.
 *    
 *       </dd>
 * 
 *       <dt>string `k_promotion`</dt>
 *       <dd>Promotion key. </dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `k_login_promotion`</dt>
 *   <dd>
 *     Login promotion key. Required if `a_low` is not set.
 *    
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * promotion-membership-cancel (id_mail 153):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Key of the business. </dd>
 * 
 *   <dt>string `k_login_promotion`</dt>
 *   <dd>Login promotion key. </dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>
 *     Customized live mail pattern key. 
 * Empty or <tt>null</tt> when no live mail pattern is used.
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key, receiver of notification. </dd>
 * </dl>
 * 
 * promotion-membership-cancel-staff (id_mail 193):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Key of the business. </dd>
 * 
 *   <dt>string `k_login_promotion`</dt>
 *   <dd>Login promotion key. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Staff user key. </dd>
 * </dl>
 * 
 * promotion-membership-expire (id_mail 77):
 * <dl>
 *   <dt>string[] `a_id`</dt>
 *   <dd>
 *     List of keys of login promotions (legacy automation). If not set, `i_id` is used instead.
 * 
 *   </dd>
 * 
 *   <dt>string `dl_end`</dt>
 *   <dd>
 *     Optional. Local end date for new automation trigger. The new automation is used only when this key
 * and `uid` are both not empty; otherwise the legacy automation is used.
 *   </dd>
 * 
 *   <dt>string `dt_end`</dt>
 *   <dd>End date of the client login promotion. This key is not read by the method.</dd>
 * 
 *   <dt>int `i_delay`</dt>
 *   <dd>
 *     Delay of mail pattern. For new automation it is replaced with the delay of the mail pattern
 * `k_mail_pattern`, if that pattern is an automated one.
 *   </dd>
 * 
 *   <dt>int `i_id`</dt>
 *   <dd>
 *     Id of login promotion. Required when `a_id` is not set: it is used to find the promotion
 * and as the identifier of the mail.
 *   </dd>
 * 
 *   <dt>int `id_duration_delay`</dt>
 *   <dd>Measuring unit of `i_delay`. One of {@link ADurationSid} constants.</dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Optional. Business key. Required for new automation. </dd>
 * 
 *   <dt>string `k_mail_pattern`</dt>
 *   <dd>
 *     Optional. Key of the mail pattern. Used for new automation only to get the actual delay.
 * 
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Optional. User key. Required for new automation. </dd>
 * </dl>
 * 
 * promotion-membership-pay-account (id_mail 106):
 * <dl>
 *   <dt>string `dt_date`</dt>
 *   <dd>Date when payment occur.</dd>
 * 
 *   <dt>float `f_account_amount`</dt>
 *   <dd>Amount of account balance. Always negative otherwise this mail should not be sent.</dd>
 * 
 *   <dt>float `f_pay_amount`</dt>
 *   <dd>Payment amount.</dd>
 * 
 *   <dt>string `k_currency`</dt>
 *   <dd>Currency ID.</dd>
 * 
 *   <dt>string `k_login_promotion`</dt>
 *   <dd>
 *     ID of the purchased membership. If <var>k_pay_installment</var> not specified
 * then this field is required otherwise is should not be specified.
 *   </dd>
 * 
 *   <dt>string `k_pay_installment`</dt>
 *   <dd>
 *     ID of an installment plan to charge for. If <var>k_login_promotion</var> not specified
 * then this field is required otherwise is should not be specified.
 *   </dd>
 * 
 *   <dt>string `uid_money`</dt>
 *   <dd>
 *     Money owner of the charge. The e-mail is sent to this user. If not set, the e-mail is sent to the payer of
 * the purchase option.
 *   </dd>
 * </dl>
 * 
 * promotion-membership-pay-fail (id_mail 55):
 * <dl>
 *   <dt>string `dt_date`</dt>
 *   <dd>Date of the failed payment by UTC.</dd>
 * 
 *   <dt>string `k_login_promotion`</dt>
 *   <dd>
 *     Optional. ID of the purchased membership. If `k_pay_installment` is not specified
 * then this field is required, otherwise it should not be specified.
 * 
 *   </dd>
 * 
 *   <dt>string `k_pay_installment`</dt>
 *   <dd>
 *     Optional. ID of an installment plan to charge for. If `k_login_promotion` is not specified
 * then this field is required, otherwise it should not be specified.
 *   </dd>
 * 
 *   <dt>string|null `k_promotion`</dt>
 *   <dd>
 *     Optional. ID of the purchase option to be converted in, if this is a conversion.
 * `null`, if this is not a conversion. Used only together with `k_login_promotion`.
 * 
 *   </dd>
 * 
 *   <dt>\RsPayAmount `o_pay_amount`</dt>
 *   <dd>Payment amount.</dd>
 * 
 *   <dt>string `s_message`</dt>
 *   <dd>Error messages that occurred while payment.</dd>
 * 
 *   <dt>string `uid_money`</dt>
 *   <dd>
 *     Optional. Money owner of the charge. The e-mail is sent to this user. If not set, the e-mail is sent to the
 * payer of the purchase option.
 *   </dd>
 * </dl>
 * 
 * promotion-membership-pay-ok (id_mail 56):
 * <dl>
 *   <dt>string `dt_date`</dt>
 *   <dd>Due date.</dd>
 * 
 *   <dt>string `k_login_promotion`</dt>
 *   <dd>ID of the purchased membership. </dd>
 * 
 *   <dt>\RsPayAmount `o_pay_amount`</dt>
 *   <dd>Payment amount.</dd>
 * 
 *   <dt>string `uid_money`</dt>
 *   <dd>
 *     Optional. Money owner of the charge. The e-mail is sent to this user. If not set, the e-mail is sent to the
 * payer of the purchase option.
 *   </dd>
 * </dl>
 * 
 * promotion-membership-reactivate (id_mail 75):
 * <dl>
 *   <dt>string `dt_end`</dt>
 *   <dd>Optional. Date of the renewal. If empty or not set, the renewal text of the e-mail is empty.</dd>
 * 
 *   <dt>string `dt_start`</dt>
 *   <dd>Optional. New activation date after renewal. If empty or not set, the start date of the promotion is used.</dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business ID. </dd>
 * 
 *   <dt>string `k_promotion`</dt>
 *   <dd>Promotion ID. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID. </dd>
 * </dl>
 * 
 * promotion-membership-renew (id_mail 78):
 * <dl>
 *   <dt>int `i_delay`</dt>
 *   <dd>Delay of mail pattern.</dd>
 * 
 *   <dt>int `i_id`</dt>
 *   <dd>Login promotion ID. </dd>
 * 
 *   <dt>int `id_duration_delay`</dt>
 *   <dd>Measuring unit of `i_delay`.One of {@link ADurationSid} constants.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>UID of user. </dd>
 * </dl>
 * 
 * promotion-purchase (id_mail 76):
 * <dl>
 *   <dt>int `i_id`</dt>
 *   <dd>
 *     Id of login promotion. The key must be set; pass an empty value to use `k_login_promotion`
 * or `k_promotion` instead.
 *   </dd>
 * 
 *   <dt>string `k_login_promotion`</dt>
 *   <dd>
 *     Optional. Id of login promotion. Used only when `i_id` is empty.
 * 
 *   </dd>
 * 
 *   <dt>string `k_promotion`</dt>
 *   <dd>
 *     Optional. Promotion ID. Used only when `i_id` and `k_login_promotion` are empty.
 * 
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Id of user. </dd>
 * </dl>
 * 
 * promotion-receipt (id_mail 136):
 * <dl>
 *   <dt>bool `is_send_force`</dt>
 *   <dd><tt>true</tt> if mail should be sent even if this pattern is disabled on the mails page.</dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key.</dd>
 * 
 *   <dt>string `k_mail_pattern_live`</dt>
 *   <dd>Key of the custom pattern.</dd>
 * 
 *   <dt>string `k_promotion`</dt>
 *   <dd>Promotion key.</dd>
 * 
 *   <dt>string `k_purchase`</dt>
 *   <dd>Purchase key.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key purchase performed for.</dd>
 * </dl>
 * 
 * promotion-used (id_mail 212):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Key of the business in which the visit was made. </dd>
 * 
 *   <dt>int `i_id`</dt>
 *   <dd>Key of the visit. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Key of the user who attended the service and receives the e-mail.
 * 
 *   </dd>
 * </dl>
 * 
 * purchase-hold (id_mail 194):
 * <dl>
 *   <dt>string `k_promotion_pay_pause`</dt>
 *   <dd>Key of the hold period. </dd>
 * </dl>
 * 
 * purchase-hold-expiring (id_mail 186):
 * <dl>
 *   <dt>string `k_promotion_pay_pause`</dt>
 *   <dd>Key of the hold period. </dd>
 * 
 *   <dt>int `$id_language`</dt>
 *   <dd>Language ID. One of {@link LocaleLanguageSid} constants.</dd>
 * </dl>
 * 
 * purchase-payment (id_mail 52):
 * <dl>
 *   <dt>bool `is_send_force`</dt>
 *   <dd>
 *     Optional. `true` to send the e-mail even if the user has disabled it. When the key is missing or empty,
 * it is treated as `false`. It is passed to the result as is.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>
 *     Optional. Key of the business the purchase belongs to. 
 * Together with `uid` it is used to find out whether the recipient is a staff member of the business;
 * if so, the name of the staff member is used as the name of the sender.
 *   </dd>
 * 
 *   <dt>string `k_purchase`</dt>
 *   <dd>
 *     Key of the purchase. 
 * If it is empty or the purchase does not exist, the e-mail is not sent.
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Optional. Key of the user the e-mail is sent to. Used only if the purchase was made by a business;
 * otherwise the user is taken from the purchase. 
 *   </dd>
 * 
 *   <dt>string `uid_money`</dt>
 *   <dd>
 *     Optional. Money owner of the charge. Used only if the purchase was made by a user: the e-mail is sent to
 * this user. If not set, or the user does not exist, the e-mail is sent to the money owner of the user who
 * made the purchase. 
 *   </dd>
 * </dl>
 * 
 * purchase-payment-account (id_mail 107):
 * <dl>
 *   <dt>bool `is_send_force`</dt>
 *   <dd>
 *     Optional. `true` to send the e-mail even if the user has disabled it. When the key is missing or empty,
 * it is treated as `false`. It is passed to the result as is.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>
 *     Optional. Key of the business the purchase belongs to. 
 * Together with `uid` it is used to find out whether the recipient is a staff member of the business;
 * if so, the name of the staff member is used as the name of the sender.
 *   </dd>
 * 
 *   <dt>string `k_purchase`</dt>
 *   <dd>
 *     Key of the purchase. 
 * If it is empty or the purchase does not exist, the e-mail is not sent.
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Optional. Key of the user the e-mail is sent to. Used only if the purchase was made by a business;
 * otherwise the user is taken from the purchase. 
 *   </dd>
 * </dl>
 * 
 * purchase-payment-pos (id_mail 115):
 * <dl>
 *   <dt>bool `is_send_force`</dt>
 *   <dd>
 *     Optional. `true` to send the e-mail even if the user has disabled it. When the key is missing or empty,
 * it is treated as `false`. It is passed to the result as is.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>
 *     Optional. Key of the business the purchase belongs to. 
 * Together with `uid` it is used to find out whether the recipient is a staff member of the business;
 * if so, the name of the staff member is used as the name of the sender.
 *   </dd>
 * 
 *   <dt>string `k_purchase`</dt>
 *   <dd>
 *     Key of the purchase.  If it is empty or the
 * purchase does not exist, the e-mail is not sent.
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Optional. Key of the user the e-mail is sent to. Used only if the purchase was made by a business;
 * otherwise the user is taken from the purchase. 
 *   </dd>
 * </dl>
 * 
 * purchase-product-inventory (id_mail 95):
 * <dl>
 *   <dt>string `k_location`</dt>
 *   <dd>Location ID. </dd>
 * 
 *   <dt>string `k_shop_product_option`</dt>
 *   <dd>Product option ID. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID. </dd>
 * </dl>
 * 
 * purchase-promotion-introductory (id_mail 74):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_promotion`</dt>
 *   <dd>Promotion key. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * purchase-refund (id_mail 108):
 * <dl>
 *   <dt>string `k_currency`</dt>
 *   <dd>A currency identifier with which the purchase was bought.</dd>
 * 
 *   <dt>string `k_purchase`</dt>
 *   <dd>Purchase ID. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * quiz-form-submittion (id_mail 172):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Key of business. </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Mail of staff.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Staff user key. </dd>
 * </dl>
 * 
 * quiz-index (id_mail 174):
 * <dl>
 *   <dt>string `k_business_subscribe`</dt>
 *   <dd>Key of affected business. </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Email address sent email message.</dd>
 * 
 *   <dt>string `uid_actor`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * quiz-notification (id_mail 171):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Key of business. </dd>
 * 
 *   <dt>string `k_quiz`</dt>
 *   <dd>The quiz key. </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Mail of staff.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Staff user key. </dd>
 * </dl>
 * 
 * quiz-notification-remind (id_mail 173):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Key of business. </dd>
 * 
 *   <dt>string `k_quiz_login`</dt>
 *   <dd>Quiz login key. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Staff user key. </dd>
 * </dl>
 * 
 * report-export (id_mail 177):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key.</dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Recipient email.</dd>
 * 
 *   <dt>string `text_report_name`</dt>
 *   <dd>Name of the report.</dd>
 * </dl>
 * 
 * review-add (id_mail 38):
 * <dl>
 *   <dt>string `k_review`</dt>
 *   <dd>Review key. </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>User email address.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * review-reply (id_mail 45):
 * <dl>
 *   <dt>string `k_review`</dt>
 *   <dd>Review key. </dd>
 * </dl>
 * 
 * review-user-left (id_mail 216):
 * <dl>
 *   <dt>int `i_id`</dt>
 *   <dd>
 *     Key of the review. 
 * It is passed to `rs_review_item()` as the review key.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Key of the business in which the review was left. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Key of the user who left the review and who receives the e-mail.
 * 
 * If the user does not exist, the e-mail is not sent.
 *   </dd>
 * </dl>
 * 
 * reward-prize-client (id_mail 120):
 * <dl>
 *   <dt>string `s_balance`</dt>
 *   <dd>Number of reward points the client currently has on their account.</dd>
 * 
 *   <dt>string `s_points`</dt>
 *   <dd>The number of points that the client used to redeem the reward.</dd>
 * 
 *   <dt>string `s_reward`</dt>
 *   <dd>The item that the client has requested as a reward.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Client ID.</dd>
 * </dl>
 * 
 * reward-prize-staff (id_mail 121):
 * <dl>
 *   <dt>string `s_business_name`</dt>
 *   <dd>Name of business.</dd>
 * 
 *   <dt>string `s_client_full_name`</dt>
 *   <dd>Name and surname of the client, that redeemed reward.</dd>
 * 
 *   <dt>string `s_client_name`</dt>
 *   <dd>Name of the client, that redeemed reward.</dd>
 * 
 *   <dt>string `s_points`</dt>
 *   <dd>The number of points that the client used to redeem the reward.</dd>
 * 
 *   <dt>string `s_reward`</dt>
 *   <dd>The item that the client has requested as a reward.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Staff key.</dd>
 * </dl>
 * 
 * sale-staff (id_mail 126):
 * <dl>
 *   <dt>bool `is_send_force`</dt>
 *   <dd>
 *     Optional. `true` to send the e-mail even if the user has disabled it. When the key is missing or empty,
 * it is treated as `false`. 
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business ID. </dd>
 * 
 *   <dt>string `k_purchase`</dt>
 *   <dd>Purchase ID. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Optional. Key of the staff member the e-mail is sent to.  The receiver in the result is always set to this value,
 * or to `0` if the key is missing. 
 *   </dd>
 * </dl>
 * 
 * service-book (id_mail 208):
 * <dl>
 *   <dt>int `i_id`</dt>
 *   <dd>Key of the visit of the service. </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>
 *     Key of the business to which the visit belongs. It is required.
 * 
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Key of the user who booked the service. The e-mail is not sent if this user does not exist.
 * 
 *   </dd>
 * </dl>
 * 
 * skin-application-connect (id_mail 122):
 * <dl>
 *   <dt>int `i_day`</dt>
 *   <dd>Day of the finished through finished work push certificate.</dd>
 * 
 *   <dt>string `k_spa_application`</dt>
 *   <dd>Application ID.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key.</dd>
 * </dl>
 * 
 * staff-callback-request (id_mail 196):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `html_view_conversation_button`</dt>
 *   <dd>Button that staff can click to view the conversation between client and AI Agent.</dd>
 * 
 *   <dt>string `text_callback_note`</dt>
 *   <dd>Any note left by the client for the staff.</dd>
 * 
 *   <dt>string `text_client_mail`</dt>
 *   <dd>The client's email address.</dd>
 * 
 *   <dt>string `text_client_name`</dt>
 *   <dd>The client's name.</dd>
 * 
 *   <dt>string `text_client_phone`</dt>
 *   <dd>The client's phone.</dd>
 * 
 *   <dt>string `text_location`</dt>
 *   <dd>Appointment location.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Recipient user's key. </dd>
 * 
 *   <dt>string `url_view_conversation_link`</dt>
 *   <dd>URL to view the conversation (for email).</dd>
 * 
 *   <dt>string `url_view_conversation_link_sms`</dt>
 *   <dd>URL to view the conversation (for SMS).</dd>
 * </dl>
 * 
 * task-assign (id_mail 104):
 * <dl>
 *   <dt>string `k_staff`</dt>
 *   <dd>Identifier of the staff assigned to task.</dd>
 * 
 *   <dt>string `k_task`</dt>
 *   <dd>Task ID.</dd>
 * </dl>
 * 
 * term-copy (id_mail 99):
 * <dl>
 *   <dt>string `dt_agree`</dt>
 *   <dd>
 *     Date and time when the user agreed to the contract, in UTC, in MySQL format. It must exactly match the date
 * of an agreement of the user. If it is not set or empty, the current contract text of the business is used
 * and the e-mail is built without an agreement date. If the user has no agreement at exactly this date,
 * nothing is sent.
 *   </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business ID. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User ID. </dd>
 * </dl>
 * 
 * ticket-purchase (id_mail 225):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_ticket_order`</dt>
 *   <dd>Key of the order. </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>
 *     Email to send the message to instead of the email of the buyer. For example, when the tickets are
 * sent once again to another address.
 *   </dd>
 * </dl>
 * 
 * user-campaign (id_mail 112):
 * <dl>
 *   <dt>string `dt_visit`</dt>
 *   <dd>Date, when client can visit this class.</dd>
 * 
 *   <dt>string `k_class_period`</dt>
 *   <dd>Class schedule ID. </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User key. </dd>
 * </dl>
 * 
 * video-subscription-upgrade (id_mail 140):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key.</dd>
 * 
 *   <dt>int `id_plan`</dt>
 *   <dd>
 *     ID of the desired subscription plan from {@link FitvidSubscriptionSid}.
 *   </dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>Recipient email.</dd>
 * 
 *   <dt>string `uid_actor`</dt>
 *   <dd>Key of the user, who requested activation.</dd>
 * </dl>
 * 
 * visit-campaign (id_mail 94):
 * <dl>
 *   <dt>int `i_id`</dt>
 *   <dd>Key of the visit. </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>
 *     Key of the business. 
 * Must match the business of the visit.
 *   </dd>
 * 
 *   <dt>string `k_mail_pattern`</dt>
 *   <dd>
 *     Key of the mail pattern. 
 * Used to check whether the campaign was already sent for the visit.
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>
 *     Key of the user (client) to whom the e-mail is sent.
 * 
 *   </dd>
 * </dl>
 * 
 * visit-noshow (id_mail 209):
 * <dl>
 *   <dt>string `i_id`</dt>
 *   <dd>Key of the visit that was marked as no-show. </dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>
 *     Key of the business to which the visit belongs. 
 * Required: it is used to create the shard connection.
 *   </dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>Key of the user to whom the e-mail is sent. </dd>
 * </dl>
 * 
 * visit-receipt-receipt (id_mail 190):
 * <dl>
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. </dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key. </dd>
 * </dl>
 * 
 * zoom-license-lack (id_mail 149):
 * <dl>
 *   <dt>int `i_license_all`</dt>
 *   <dd>Total number of Zoom licenses.</dd>
 * 
 *   <dt>int `i_license_remain`</dt>
 *   <dd>Number of Zoom licenses that remain unused.</dd>
 * 
 *   <dt>int `i_percent_use`</dt>
 *   <dd>Percent of Zoom licenses that are in use.</dd>
 * 
 *   <dt>string `s_mail`</dt>
 *   <dd>E-mail address of the recipient.</dd>
 * </dl>
 * @post post
 * @var array
 */
  public $a_data = [];

  /**
 * The mail type ID.
 *
 * One of the {@link RsMailSid} constants.
 * If not provided, {@link RsMailSid::LOGIN_MESSAGE} is used.
 *
 * @post post
 * @var int
 */
  public $id_mail = 22;

  /**
 * The business key.
 *
 * @post get
 * @var string
 */
  public $k_business = '0';

  /**
 * The business's mailing address.
 *
 * @post post
 * @var string
 */
  public $s_business_mail = '';

  /**
 * The business name.
 *
 * @post post
 * @var string
 */
  public $s_business_name = '';

  /**
 * The business's reply.
 *
 * @post post
 * @var string
 */
  public $s_business_reply = '';

  /**
 * The campaign name.
 *
 * @post post
 * @var string
 */
  public $s_campaign = '';

  /**
 * The message uncompressed content.
 *
 * @post post
 * @var string
 */
  public $s_html = '';

  /**
 * The message recipient's address.
 *
 * @post post
 * @var string
 */
  public $s_mail = '';

  /**
 * The message's subject line.
 *
 * @post post
 * @var string
 */
  public $s_subject = '';

  /**
 * The receiver user key.
 * `null` if the email should not be linked to a specific user's contact history.
 *
 * @post post
 * @var string|null
 */
  public $uid = null;
}

?>