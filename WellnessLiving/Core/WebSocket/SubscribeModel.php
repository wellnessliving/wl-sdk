<?php

namespace WellnessLiving\Core\WebSocket;

use WellnessLiving\Thoth\PayProcessor\DirectConnect\Ticket\DirectConnectTicketStatusSid;
use WellnessLiving\Thoth\PayProcessor\Nuvei\Code\CSResponseSid;
use WellnessLiving\Thoth\ReportCore\Generator\ReportGeneratorStatusSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Classes\Tab\TabSid;
use WellnessLiving\Wl\Gender\GenderSid;
use WellnessLiving\Wl\Import\Custom\CustomSid;
use WellnessLiving\Wl\Mail\Domain\DomainTokenTypeSid;
use WellnessLiving\Wl\Mail\Domain\DomainVerifyStatusSid;
use WellnessLiving\Wl\Mail\Verify\MailVerifyStatusSid;
use WellnessLiving\Wl\Report\WlReportSid;
use WellnessLiving\Wl\Task\TaskStatusSid;
use WellnessLiving\Wl\Visit\WlVisitSid;

/**
 * Checks whether a listener can subscribe to specified channel.
 *
 * If yes, subscribes it.
 *
 * @method WlModelRequest post() Checks whether a listener can subscribe to specified channel. Subscribes in a case of positive result.  Called by the WebSocket client immediately after a connection is established, to register interest in a specific channel (identified by CID and key fields). If the current user is not permitted to receive events on that channel, the subscription is rejected. On success, any messages already queued for the channel are returned so the client does not miss events that arrived before the subscription was set up.
 */
class SubscribeModel extends WlModelAbstract
{
  /**
   * Keys of the channel.
   *
   * Key is name of a key field in a channel controller.
   * Value is its value.
   *
   * Subscriber will only receive notifications about events in which all these values equal values specified here.
   *
   * Parameters for `60`:
   * <dl>
   *   <dt>string `k_personnel`</dt>
   *   <dd>Key of a staff member.</dd>
   * 
   *   <dt>string `kip`</dt>
   *   <dd>Key of IP address from which this staff member accesses the system.</dd>
   * </dl>
   * 
   * Parameters for `1921`:
   * <dl>
   *   <dt>int `id_visit`</dt>
   *   <dd>Visit status ID.
   * One of {@link WlVisitSid} constants.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Key of a business.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>Key of the user.</dd>
   * </dl>
   * 
   * Parameters for `1342`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Key of a business.</dd>
   * 
   *   <dt>string `uid_receiver`</dt>
   *   <dd>Key of the user.</dd>
   * </dl>
   * 
   * Parameters for `1583`:
   * <dl>
   *   <dt>string `k_channel`</dt>
   *   <dd>Messenger channel key.</dd>
   * </dl>
   * 
   * Parameters for `688`:
   * <dl>
   *   <dt>string `dtu_class_period`</dt>
   *   <dd>Class schedule session date.</dd>
   * 
   *   <dt>string `k_appointment`</dt>
   *   <dd>Appointment key.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Business key.</dd>
   * 
   *   <dt>string `k_class_period`</dt>
   *   <dd>Class schedule key.</dd>
   * 
   *   <dt>string `k_visit`</dt>
   *   <dd>Visit key.</dd>
   * 
   *   <dt>string `s_secret`</dt>
   *   <dd>Visit secret key.</dd>
   * </dl>
   * 
   * Parameters for `1869`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Business key.</dd>
   * 
   *   <dt>string `uid_receiver`</dt>
   *   <dd>User key who will receive message.</dd>
   * </dl>
   * 
   * Parameters for `735`:
   * <dl>
   *   <dt>string|null `k_business`</dt>
   *   <dd>Key of a business to which report to subscribe.
   * 
   * `null` for system-wide businesses.</dd>
   * 
   *   <dt>string `s_report`</dt>
   *   <dd>
   *     Key of a report to subscribe to.
   * 
   * 
   *   </dd>
   * </dl>
   * 
   * Parameters for `1105`:
   * <dl>
   *   <dt>string `uid`</dt>
   *   <dd>Current user key.</dd>
   * </dl>
   * 
   * Parameters for `1005`:
   * <dl>
   *   <dt>string|null `k_microservice`</dt>
   *   <dd>Microservice key.
   * 
   * `null` if the value is not set</dd>
   * </dl>
   * 
   * Parameters for `19`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Business key.</dd>
   * </dl>
   * 
   * Parameters for `305`:
   * <dl>
   *   <dt>string `k_location`</dt>
   *   <dd>Location where session booked or cancelled.</dd>
   * </dl>
   * 
   * Parameters for `298`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Business key.</dd>
   * </dl>
   * 
   * Parameters for `1163`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Key of the business.</dd>
   * 
   *   <dt>string `uid_actor`</dt>
   *   <dd>Key of the actor.</dd>
   * </dl>
   * 
   * Parameters for `1660`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Business key.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>User key.</dd>
   * </dl>
   * 
   * Parameters for `510`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Business key.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>User key.</dd>
   * </dl>
   * 
   * Parameters for `1850`:
   * <dl>
   *   <dt>int `id_import_custom`</dt>
   *   <dd>ID of custom import process. One of {@link CustomSid} constants.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Business key within which import is progressing.</dd>
   * </dl>
   * 
   * Parameters for `842`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Business in which the report was generated.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>User who requested the report generation.</dd>
   * </dl>
   * 
   * Parameters for `1543`:
   * <dl>
   *   <dt>int `id_report`</dt>
   *   <dd>ID of the report.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Business key in which the report was monitoring.</dd>
   * </dl>
   * 
   * Parameters for `977`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Key of the business.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>UID of the client for which failed to send SMS.</dd>
   * </dl>
   * 
   * Parameters for `16`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Business key.</dd>
   * </dl>
   * 
   * Parameters for `1834`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Business key.</dd>
   * </dl>
   * 
   * Parameters for `677`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Business key.</dd>
   * </dl>
   * 
   * Parameters for `1820`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Key of a business.</dd>
   * </dl>
   * 
   * Parameters for `1657`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Key of the business.</dd>
   * </dl>
   * 
   * Parameters for `1421`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Key of the business.</dd>
   * 
   *   <dt>string `k_business_merchant`</dt>
   *   <dd>Key of the business merchant.</dd>
   * 
   *   <dt>string `k_pay_transaction`</dt>
   *   <dd>Pay transaction key, which was used to create ticket.</dd>
   * 
   *   <dt>string `s_ticket_id`</dt>
   *   <dd>Gateway Ticket ID.</dd>
   * </dl>
   * 
   * Parameters for `523`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Business key.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>User key.</dd>
   * </dl>
   * 
   * Parameters for `960`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Key of the business.</dd>
   * 
   *   <dt>string `uid_actor`</dt>
   *   <dd>Key of the actor.
   * 
   * <tt>admin</tt> - for WebSocket channel for which admins subscribed.</dd>
   * </dl>
   * 
   * Parameters for `34`:
   * <dl>
   *   <dt>string `uid_response`</dt>
   *   <dd>Key of user who can grant access to location.</dd>
   * </dl>
   * 
   * Parameters for `41`:
   * <dl>
   *   <dt>string `k_location`</dt>
   *   <dd>Location key.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>User-receiver of response.</dd>
   * </dl>
   * 
   * Parameters for `57`:
   * <dl>
   *   <dt>string `k_location`</dt>
   *   <dd>Key of location access to which was requested.</dd>
   * 
   *   <dt>string `uid_request`</dt>
   *   <dd>Key of user who requested access to location.</dd>
   * </dl>
   * 
   * Parameters for `828`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Business key.</dd>
   * 
   *   <dt>string `s_id`</dt>
   *   <dd>Key of the task where addresses should be verified.</dd>
   * </dl>
   * 
   * Parameters for `1736`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Key of the business.</dd>
   * 
   *   <dt>string `k_business_merchant`</dt>
   *   <dd>Key of the business merchant.</dd>
   * 
   *   <dt>string `k_pay_transaction`</dt>
   *   <dd>Pay transaction key, which was used to create ticket.</dd>
   * 
   *   <dt>string `s_exchange_identification`</dt>
   *   <dd>Gateway exchange identification.</dd>
   * </dl>
   * 
   * Parameters for `549`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Business key.</dd>
   * </dl>
   * 
   * Parameters for `963`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Key of the business.</dd>
   * 
   *   <dt>string `uid_receiver`</dt>
   *   <dd>Key of the user.</dd>
   * </dl>
   * 
   * Parameters for `952`:
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Key of the business.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>UID of the client.</dd>
   * </dl>
   * @post post
   * @var array
   */
  public $a_key = [];

  /**
   * All messages in queue. Key is a message key. Value is message data.
   *
   * When a client is initially subscribed for a WebSocket channel, entire message queue is sent to the client.
   * This is needed to send message that were generated before a client has subscribed.
   *
   * Parameters for `60`:
   * <dl>
   *   <dt>string|null `dt_remove`</dt>
   *   <dd>Date/time when access to specified service will be revoked.
   * 
   * <tt>null</tt> if access is revoked.</dd>
   * 
   *   <dt>string `k_ip_service`</dt>
   *   <dd>Key of a service that is changed.</dd>
   * </dl>
   * 
   * Parameters for `1921`:
   * <dl>
   *   <dt>string `k_visit`</dt>
   *   <dd>Key of a book/visit.</dd>
   * </dl>
   * 
   * Parameters for `1342`:
   * <dl>
   *   <dt>int `i_unread_alert`</dt>
   *   <dd>The count with unread alert for the user.</dd>
   * 
   *   <dt>bool `is_active`</dt>
   *   <dd>Whether message is active. This is needed to avoid showing previous messages on page reload.</dd>
   * 
   *   <dt>bool `is_message`</dt>
   *   <dd>Whether this is an alert for an SMS message</dd>
   * 
   *   <dt>bool `is_sound`</dt>
   *   <dd>Whether the user should hear a sound when a notification is sent.</dd>
   * 
   *   <dt>string|null `k_alert`</dt>
   *   <dd>Key of the alert that was just sent.
   * 
   * <tt>null</tt> means alert was read.</dd>
   * </dl>
   * 
   * Parameters for `1583`:
   * <dl>
   *   <dt>array `a_data`</dt>
   *   <dd>
   *     New information for messenger.
   *     <dl>
   *       <dt>array `message`</dt>
   *       <dd>
   *         Message information:
   *         <dl>
   *           <dt>int `id`</dt>
   *           <dd>Message key.</dd>
   * 
   *           <dt>string `message`</dt>
   *           <dd>Message text.</dd>
   * 
   *           <dt>string `updated_at`</dt>
   *           <dd>Date/time when the message has been posted.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array `user_profile`</dt>
   *       <dd>
   *         User's information:
   *         <dl>
   *           <dt>int `id_gender`</dt>
   *           <dd>User gender. One of {@link GenderSid} constants.</dd>
   * 
   *           <dt>string `s_first_name`</dt>
   *           <dd>User first name.</dd>
   * 
   *           <dt>string `s_last_name`</dt>
   *           <dd>User last name.</dd>
   * 
   *           <dt>string `uid`</dt>
   *           <dd>User key. </dd>
   * 
   *           <dt>string `url_photo`</dt>
   *           <dd>URL of the user's profile photo.</dd>
   *         </dl>
   *       </dd>
   *     </dl>
   *   </dd>
   * </dl>
   * 
   * Parameters for `733`:
   * <dl>
   *   <dt>string|null `k_business`</dt>
   *   <dd>Business key.</dd>
   * </dl>
   * 
   * Parameters for `688`:
   * <dl>
   *   <dt>string `url_redirect`</dt>
   *   <dd>Url link to redirect to join virtual meeting.</dd>
   * </dl>
   * 
   * Parameters for `1869`:
   * <dl>
   *   <dt>int `i_overdue`</dt>
   *   <dd>Number of overdue tasks.</dd>
   * 
   *   <dt>int `id_task_status`</dt>
   *   <dd>New task status of the changed task.
   * 
   * One of {@link TaskStatusSid}.</dd>
   * 
   *   <dt>string `k_task`</dt>
   *   <dd>Key of the changed task.</dd>
   * </dl>
   * 
   * Parameters for `735`:
   * <dl>
   *   <dt>int `i_cas_change`</dt>
   *   <dd>
   *     A CAS (compare-and-swap) number that allows to track changes in the report storage.
   * 
   * This number is changed every time content of the report gets updated.
   * If this number is not changed, the content is not updated.
   * 
   * 
   *   </dd>
   * 
   *   <dt>int `id_report_status`</dt>
   *   <dd>Status of this report.
   * 
   * One of {@link ReportGeneratorStatusSid} constants.</dd>
   * </dl>
   * 
   * Parameters for `1105`:
   * <dl>
   *   <dt>string `s_code`</dt>
   *   <dd>Code for authorization.</dd>
   * 
   *   <dt>int `text_time`</dt>
   *   <dd>Unique string for get code.</dd>
   * </dl>
   * 
   * Parameters for `1005`:
   * <dl>
   *   <dt>string[] `a_op`</dt>
   *   <dd>
   *     Names of operation that were executed.
   * 
   * Operation names are defined by <tt>OP_*</tt>
   *   </dd>
   * 
   *   <dt>string|null `s_step`</dt>
   *   <dd>Name of the step that was set.
   * 
   * `null` if step has not changed.</dd>
   * 
   *   <dt>string|null `text_log`</dt>
   *   <dd>
   *     A new log item was added during execution of a script.
   * 
   * Text of the log item that was just added.
   * 
   * `null` if this message does not contain information about newly added log item.
   *   </dd>
   * </dl>
   * 
   * Parameters for `19`:
   * <dl>
   *   <dt>string `text_title`</dt>
   *   <dd>New title of the business.</dd>
   * </dl>
   * 
   * Parameters for `305`:
   * <dl>
   *   <dt>string `dtl_end`</dt>
   *   <dd>Session end date/time.</dd>
   * 
   *   <dt>string `dtl_start`</dt>
   *   <dd>Session start date/time.</dd>
   * 
   *   <dt>string|null `k_appointment`</dt>
   *   <dd>
   *     Key of the changed appointment.
   * Is set only if changed session is appointment.
   * 
   * `null` if changed session is not an appointment.
   *   </dd>
   * 
   *   <dt>string|null `k_class_period`</dt>
   *   <dd>
   *     Key of the changed class session.
   * Is set only if changed session is class.
   * 
   * `null` if changed session is not a class.
   *   </dd>
   * </dl>
   * 
   * Parameters for `298`:
   * <dl>
   *   <dt>string `dt_end_local`</dt>
   *   <dd>End of change interval.
   * 
   * Empty string if change interval has no end.</dd>
   * 
   *   <dt>string `dt_start_local`</dt>
   *   <dd>Start of change interval.</dd>
   * 
   *   <dt>string|null `k_class_tab_new`</dt>
   *   <dd>
   *     New "Book now" tab primary key in {@link TabSid} table.
   * 
   * <tt>null</tt> means system default tab.
   *   </dd>
   * 
   *   <dt>string|null `k_class_tab_old`</dt>
   *   <dd>
   *     Old "Book now" tab primary key in {@link TabSid} table.
   * 
   * <tt>null</tt> means system default tab.
   *   </dd>
   * </dl>
   * 
   * Parameters for `1163`:
   * <dl>
   *   <dt>bool `is_active`</dt>
   *   <dd>Whether message is active. This is needed to avoid showing previous messages on page reload.</dd>
   * 
   *   <dt>bool|null `is_booking_in_progress`</dt>
   *   <dd>
   *     Whether booking is in progress.
   * 
   *   </dd>
   * </dl>
   * 
   * Parameters for `510`:
   * <dl>
   *   <dt>array `a_visit`</dt>
   *   <dd>
   *     New data of changes schedule item:
   *     <dl>
   *       <dt>string `dtl_end`</dt>
   *       <dd>Date/time of end.</dd>
   * 
   *       <dt>string `dtl_start`</dt>
   *       <dd>Date/time of start.</dd>
   * 
   *       <dt>bool `is_cancel`</dt>
   *       <dd><tt>true</tt> if book was canceled; <tt>false</tt> otherwise.</dd>
   * 
   *       <dt>string `s_key`</dt>
   *       <dd>Book key. </dd>
   * 
   *       <dt>string `text_address`</dt>
   *       <dd>Address of location.</dd>
   * 
   *       <dt>string `text_location`</dt>
   *       <dd>Title of location.</dd>
   * 
   *       <dt>string `text_note`</dt>
   *       <dd>Description of event.</dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Title of event.</dd>
   * 
   *       <dt>string `url`</dt>
   *       <dd>URL of virtual service. Empty if the visit is not virtual.</dd>
   *     </dl>
   *   </dd>
   * </dl>
   * 
   * Parameters for `1850`:
   * <dl>
   *   <dt>int `i_complete`</dt>
   *   <dd>Number of successfully processed items.</dd>
   * 
   *   <dt>int `i_fail`</dt>
   *   <dd>Number of failed items.</dd>
   * 
   *   <dt>int `i_left`</dt>
   *   <dd>Number of items left to process.</dd>
   * 
   *   <dt>string `k_import`</dt>
   *   <dd>Key of the import being processing.</dd>
   * 
   *   <dt>string `url_log`</dt>
   *   <dd>Url link to download log file with import progress.</dd>
   * </dl>
   * 
   * Parameters for `842`:
   * <dl>
   *   <dt>int `i_generation`</dt>
   *   <dd>Duration of the generation of the report in seconds.</dd>
   * 
   *   <dt>int `id_report`</dt>
   *   <dd>ID of the report that was generated.
   * One of the {@link WlReportSid} constants.</dd>
   * 
   *   <dt>bool `is_need_show`</dt>
   *   <dd>Whether need to display a message about report generation, regardless of the generation time.</dd>
   * 
   *   <dt>string `k_report_accumulation`</dt>
   *   <dd>Report accumulation.</dd>
   * 
   *   <dt>string `text_report`</dt>
   *   <dd>Title of the report that was generated.</dd>
   * </dl>
   * 
   * Parameters for `977`:
   * <dl>
   *   <dt>string `html_error_message`</dt>
   *   <dd>The text of the error.</dd>
   * 
   *   <dt>string `s_key`</dt>
   *   <dd>The unique key of the sent SMS.</dd>
   * 
   *   <dt>int `tl_send`</dt>
   *   <dd>The time in UNIX format when socket message was sent.</dd>
   * </dl>
   * 
   * Parameters for `16`:
   * <dl>
   *   <dt>string `text_title`</dt>
   *   <dd>New title of the business.</dd>
   * </dl>
   * 
   * Parameters for `1834`:
   * <dl>
   *   <dt>array `a_domain_token`</dt>
   *   <dd>
   *     List of email domain tokens: 
   * 
   * Empty array if the business does not have a mail domain set up.
   *     <dl>
   *       <dt>int `id_status`</dt>
   *       <dd>Status of the token. One of {@link DomainVerifyStatusSid} constants.</dd>
   * 
   *       <dt>string `text_host`</dt>
   *       <dd>Host part of the token, which should be added to the DNS records.</dd>
   * 
   *       <dt>string `text_icon_class`</dt>
   *       <dd>CSS class for the icon representing the token status.</dd>
   * 
   *       <dt>string `text_status`</dt>
   *       <dd>Text representation of the token status.</dd>
   * 
   *       <dt>string `text_type`</dt>
   *       <dd>Type of the token. One of {@link DomainTokenTypeSid} constants in text representation.</dd>
   * 
   *       <dt>string `text_value`</dt>
   *       <dd>Value of the token, which should be added to the DNS records.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int|null `id_domain_status`</dt>
   *   <dd>Email domain status.
   * 
   * `null` if the business does not have a mail domain set up.</dd>
   * 
   *   <dt>string `text_domain_status_icon`</dt>
   *   <dd>
   *     CSS class for the icon representing the email domain status.
   * 
   * Empty string if the business does not have a mail domain set up.
   *   </dd>
   * </dl>
   * 
   * Parameters for `677`:
   * <dl>
   *   <dt>int `id_mail_verify_status`</dt>
   *   <dd>
   *     Status of mail verification.
   * One of the {@link MailVerifyStatusSid} constants.
   *
   *   </dd>
   * 
   *   <dt>string `text_email`</dt>
   *   <dd>Email address to check.</dd>
   * </dl>
   * 
   * Parameters for `1820`:
   * <dl>
   *   <dt>string|null `k_login_type`</dt>
   *   <dd>Key of the client type.
   * 
   * `null` if client type is not set.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>Key of the user.</dd>
   * </dl>
   * 
   * Parameters for `1421`:
   * <dl>
   *   <dt>int|null `id_card_system`</dt>
   *   <dd>
   *     Card type ID.
   * 
   * Not `null` when {@link \Thoth\PayProcessor\DirectConnect\Ticket\DirectConnectTicketStatusChannel::$id_ticket_status}
   * is equal {@link DirectConnectTicketStatusSid::COMPLETE}.
   *   </dd>
   * 
   *   <dt>int|null `id_pay_exception`</dt>
   *   <dd>Transaction exception ID.
   * 
   * `null` if no errors occurred.</dd>
   * 
   *   <dt>int|null `id_ticket_status`</dt>
   *   <dd>Ticket status.
   * 
   * `null` if not set yet.</dd>
   * 
   *   <dt>string `m_tip`</dt>
   *   <dd>Amount of tips entered by customer on terminal.</dd>
   * 
   *   <dt>string|null `s_card_holder`</dt>
   *   <dd>
   *     Cardholder name.
   * 
   * Not `null` when {@link \Thoth\PayProcessor\DirectConnect\Ticket\DirectConnectTicketStatusChannel::$id_ticket_status}
   * is equal {@link DirectConnectTicketStatusSid::COMPLETE}.
   *   </dd>
   * 
   *   <dt>string|null `s_expire`</dt>
   *   <dd>
   *     Card expiration date.
   * 
   * Not `null` when {@link \Thoth\PayProcessor\DirectConnect\Ticket\DirectConnectTicketStatusChannel::$id_ticket_status}
   * is equal {@link DirectConnectTicketStatusSid::COMPLETE}.
   *   </dd>
   * 
   *   <dt>string|null `s_last4`</dt>
   *   <dd>
   *     Last four digits of the card number.
   * 
   * Not `null` when {@link \Thoth\PayProcessor\DirectConnect\Ticket\DirectConnectTicketStatusChannel::$id_ticket_status}
   * is equal {@link DirectConnectTicketStatusSid::COMPLETE}.
   *   </dd>
   * 
   *   <dt>string|null `text_message`</dt>
   *   <dd>Text message to notify the client.
   * 
   * `null` until initialized.</dd>
   * </dl>
   * 
   * Parameters for `523`:
   * <dl>
   *   <dt>array `a_visit`</dt>
   *   <dd>
   *     New data of changes schedule item:
   *     <dl>
   *       <dt>string `dtl_end`</dt>
   *       <dd>Date/time of end.</dd>
   * 
   *       <dt>string `dtl_start`</dt>
   *       <dd>Date/time of start.</dd>
   * 
   *       <dt>bool `is_cancel`</dt>
   *       <dd><tt>true</tt> if book was canceled; <tt>false</tt> otherwise.</dd>
   * 
   *       <dt>string `s_key`</dt>
   *       <dd>Book key. </dd>
   * 
   *       <dt>string `text_location`</dt>
   *       <dd>Title of location.</dd>
   * 
   *       <dt>string `text_note`</dt>
   *       <dd>Description of event.</dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Title of event.</dd>
   * 
   *       <dt>string `url`</dt>
   *       <dd>URL of virtual service. Empty if the visit is not virtual.</dd>
   *     </dl>
   *   </dd>
   * </dl>
   * 
   * Parameters for `960`:
   * <dl>
   *   <dt>int `i_unread_sms`</dt>
   *   <dd>The count with unread SMS in the business.</dd>
   * </dl>
   * 
   * Parameters for `34`:
   * <dl>
   *   <dt>bool `is_close`</dt>
   *   <dd>
   *     `true` if the request has been already processed (question window must not be shown);
   * `false` otherwise (question window must be shown).
   *   </dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>Location key.</dd>
   * 
   *   <dt>string `text_full_name`</dt>
   *   <dd>Name of the user requesting access.</dd>
   * 
   *   <dt>string `text_location`</dt>
   *   <dd>Location title.</dd>
   * 
   *   <dt>string `uid_request`</dt>
   *   <dd>Key of user who request access to location.</dd>
   * </dl>
   * 
   * Parameters for `41`:
   * <dl>
   *   <dt>bool `is_grant`</dt>
   *   <dd><tt>true</tt> - access is granted; <tt>false</tt> - denied.</dd>
   * 
   *   <dt>string `text_full_name`</dt>
   *   <dd>Full name of user-receiver of response.</dd>
   * 
   *   <dt>float `tu_send`</dt>
   *   <dd>The time in seconds with fractional part in UNIX format when socket message was sent.</dd>
   * </dl>
   * 
   * Parameters for `57`:
   * <dl>
   *   <dt>bool `is_inactive`</dt>
   *   <dd>
   *     `true` if a new assess request has been sent (question window must be not closed);
   * `false` otherwise (question window must be closed).
   *   </dd>
   * </dl>
   * 
   * Parameters for `828`:
   * <dl>
   *   <dt>array `a_invalid`</dt>
   *   <dd>
   *     List of users for which address verification failed.
   *     <dl>
   *       <dt>array `a_address`</dt>
   *       <dd>
   *         Address information. 
   *         <dl>
   *           <dt>string `text_address`</dt>
   *           <dd>Address string.</dd>
   * 
   *           <dt>string `text_city`</dt>
   *           <dd>City title.</dd>
   * 
   *           <dt>string `text_country`</dt>
   *           <dd>Country title.</dd>
   * 
   *           <dt>string `text_postal`</dt>
   *           <dd>Postal address.</dd>
   * 
   *           <dt>string `text_state`</dt>
   *           <dd>State.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>bool `is_address`</dt>
   *       <dd>Whether address string is specified.</dd>
   * 
   *       <dt>bool `is_checked`</dt>
   *       <dd>`true` if address check, `false` otherwise.</dd>
   * 
   *       <dt>string `text_email`</dt>
   *       <dd>User email address.</dd>
   * 
   *       <dt>string `text_name`</dt>
   *       <dd>User name.</dd>
   * 
   *       <dt>string `text_phone`</dt>
   *       <dd>User phone number.</dd>
   * 
   *       <dt>string `text_note`</dt>
   *       <dd>Note.</dd>
   * 
   *       <dt>string `uid`</dt>
   *       <dd>User key.</dd>
   * 
   *       <dt>string `url`</dt>
   *       <dd>Link to user profile.</dd>
   * 
   *       <dt>string `url_image`</dt>
   *       <dd>Link to user image.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array `a_valid`</dt>
   *   <dd>
   *     List of users for which address verification succeed.
   *     <dl>
   *       <dt>array `a_address`</dt>
   *       <dd>
   *         Address information. 
   *         <dl>
   *           <dt>string `text_address`</dt>
   *           <dd>Address string.</dd>
   * 
   *           <dt>string `text_city`</dt>
   *           <dd>City title.</dd>
   * 
   *           <dt>string `text_country`</dt>
   *           <dd>Country title.</dd>
   * 
   *           <dt>string `text_postal`</dt>
   *           <dd>Postal address.</dd>
   * 
   *           <dt>string `text_state`</dt>
   *           <dd>State.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>bool `is_address`</dt>
   *       <dd>Whether address string is specified.</dd>
   * 
   *       <dt>bool `is_checked`</dt>
   *       <dd>`true` if address check, `false` otherwise.</dd>
   * 
   *       <dt>string `text_email`</dt>
   *       <dd>User email address.</dd>
   * 
   *       <dt>string `text_name`</dt>
   *       <dd>User name.</dd>
   * 
   *       <dt>string `text_phone`</dt>
   *       <dd>User phone number.</dd>
   * 
   *       <dt>string `text_note`</dt>
   *       <dd>Note.</dd>
   * 
   *       <dt>string `uid`</dt>
   *       <dd>User key.</dd>
   * 
   *       <dt>string `url`</dt>
   *       <dd>Link to user profile.</dd>
   * 
   *       <dt>string `url_image`</dt>
   *       <dd>Link to user image.</dd>
   *     </dl>
   *   </dd>
   * </dl>
   * 
   * Parameters for `1736`:
   * <dl>
   *   <dt>int|null `id_card_system`</dt>
   *   <dd>
   *     Card type ID.
   * 
   * Not `null` when {@link \Thoth\PayProcessor\Nuvei\Terminal\OMNIChannelApi\PaymentStatusChannel::$id_payment_status}
   * is equal {@link CSResponseSid::APPROVED}.
   *   </dd>
   * 
   *   <dt>int|null `id_card_type`</dt>
   *   <dd>
   *     Card type ID.
   * 
   * `null` If were unable to determine the card type.
   *   </dd>
   * 
   *   <dt>int|null `id_pay_exception`</dt>
   *   <dd>Transaction exception ID.
   * 
   * `null` if no errors occurred.</dd>
   * 
   *   <dt>int|null `id_payment_status`</dt>
   *   <dd>Payment status.
   * 
   * `null` if not set yet.</dd>
   * 
   *   <dt>string|null `m_tip`</dt>
   *   <dd>Tip amount entered by the customer at the terminal.
   * 
   * `null` if not initialized yet.</dd>
   * 
   *   <dt>string|null `s_last4`</dt>
   *   <dd>
   *     Last four digits of the card number.
   * 
   * Not `null` when {@link \Thoth\PayProcessor\Nuvei\Terminal\OMNIChannelApi\PaymentStatusChannel::$id_payment_status}
   * is equal {@link CSResponseSid::APPROVED}.
   *   </dd>
   * 
   *   <dt>string|null `text_card_holder`</dt>
   *   <dd>
   *     Cardholder name.
   * 
   * Not `null` when {@link \Thoth\PayProcessor\Nuvei\Terminal\OMNIChannelApi\PaymentStatusChannel::$id_payment_status}
   * is equal {@link CSResponseSid::APPROVED}.
   *   </dd>
   * 
   *   <dt>string|null `text_message`</dt>
   *   <dd>Text message to notify the client.
   * 
   * `null` until initialized.</dd>
   * </dl>
   * 
   * Parameters for `549`:
   * <dl>
   *   <dt>float `f_progress`</dt>
   *   <dd>Accumulation process progress.</dd>
   * </dl>
   * 
   * Parameters for `963`:
   * <dl>
   *   <dt>array `a_info`</dt>
   *   <dd>
   *     An array with information about dialog:
   *     <dl>
   *       <dt>string `dtl_last_activity`</dt>
   *       <dd>The date and time of the last SMS in the dialog.</dd>
   * 
   *       <dt>int `i_unread_sms`</dt>
   *       <dd>A count of unread messages.</dd>
   * 
   *       <dt>bool `is_inbound`</dt>
   *       <dd>Whether the last SMS is inbound or not.</dd>
   * 
   *       <dt>string `text_last_sms`</dt>
   *       <dd>The text of last sms.</dd>
   * 
   *       <dt>string `uid`</dt>
   *       <dd>The UID of the client. </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `tl_send`</dt>
   *   <dd>The time in UNIX format when socket message was sent.</dd>
   * </dl>
   * 
   * Parameters for `952`:
   * <dl>
   *   <dt>array `a_info`</dt>
   *   <dd>
   *     An array with information about SMS:
   *     <dl>
   *       <dt>string `dtl_message`</dt>
   *       <dd>Date and time, when SMS messages were sent, in MySQL format.</dd>
   * 
   *       <dt>bool `is_automated`</dt>
   *       <dd><tt>true</tt> if SMS was sent from task, <tt>false</tt> - if the staff member sent SMS.</dd>
   * 
   *       <dt>bool `is_outbound`</dt>
   *       <dd><tt>true</tt> if staff member sent SMS, <tt>false</tt> - if the client sent the SMS.</dd>
   * 
   *       <dt>string `k_sms_history`</dt>
   *       <dd>The key of SMS history. </dd>
   * 
   *       <dt>string `sid_sms_status`</dt>
   *       <dd>Sid of the SMS status.</dd>
   * 
   *       <dt>string `text_date`</dt>
   *       <dd>The day when SMS messages were sent.</dd>
   * 
   *       <dt>string `text_sender_name`</dt>
   *       <dd>The sender's name.</dd>
   * 
   *       <dt>string `text_sms_body`</dt>
   *       <dd>The body of the SMS.</dd>
   * 
   *       <dt>string `text_sms_status`</dt>
   *       <dd>The title of the SMS status.</dd>
   * 
   *       <dt>string `text_sms_type`</dt>
   *       <dd>The title of the mail type.</dd>
   * 
   *       <dt>string `text_time`</dt>
   *       <dd>The time when SMS was sent.</dd>
   * 
   *       <dt>string|null `uid_sender`</dt>
   *       <dd>The UID of the sender, <tt>null</tt> - if SMS sent from task.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `s_key`</dt>
   *   <dd>
   *     The unique key of sent SMS from 2-way SMS chat. The key need to update SMS information in the chat after sent SMS to client.
   *   </dd>
   * </dl>
   * @post result
   * @var array[]
   */
  public $a_message_broadcast = [];

  /**
   * Channel controller CID.
   *
   * @post post
   * @var int
   */
  public $cid_channel;

  /**
   * Subscriber password.
   *
   * @post post
   * @var string
   */
  public $s_password;

  /**
   * Request token.
   *
   * This token is only used for asynchronous functions, and identifies a specific request.
   *
   * @post post
   * @var string
   */
  public $s_token;
}

?>