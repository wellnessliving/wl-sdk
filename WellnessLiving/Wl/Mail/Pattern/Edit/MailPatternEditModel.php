<?php

namespace WellnessLiving\Wl\Mail\Pattern\Edit;

use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to check for clients who will be affected after the change of mail pattern.
 *
 * @method WlModelRequest get() Checks if some clients can be affected after the change of mail pattern.
 */
class MailPatternEditModel extends WlModelAbstract
{
  /**
   * List of client and member types.
   *
   * @get get
   * @var string[]
   */
  public $a_login_type = [];

  /**
   * List of member groups.
   *
   * @get get
   * @var string[]
   */
  public $a_member_group = [];

  /**
   * Whether or not to stop sending review requests after <var>i_max_review_request</var> is reached.
   *
   * <tt>null</tt> if not set.
   *
   * @get get
   * @var bool|null
   */
  public $has_max_review_request;

  /**
   * The number of affected clients.
   *
   * @get result
   * @var int
   */
  public $i_affected_clients = 0;

  /**
   * The amount for the new delay before sending mail.
   *
   * <tt>null</tt> if not loaded.
   *
   * @get get
   * @var int|null
   */
  public $i_after = null;

  /**
   * Count of the duration unit after change.
   *
   * <tt>null</tt> if not loaded.
   *
   * @get get
   * @var int|null
   */
  public $i_delay = null;

  /**
   * Maximum number of review requests that can be sent.
   *
   * <tt>null</tt> if not set.
   *
   * @get get
   * @var int|null
   */
  public $i_max_review_request;

  /**
   * Type of the duration unit after change. One of constants {@link ADurationSid}.
   *
   * <tt>null</tt> if not set.
   *
   * @get get
   * @var int|null
   */
  public $id_duration_delay = null;

  /**
   * Whether some clients will be affected after the change of mail pattern.
   *
   * @get result
   * @var bool
   */
  public $is_affected_client;

  /**
   * If <tt>true</tt> then mail for all visits will be rescheduled.
   * If <tt>false</tt> then only first will be rescheduled.
   *
   * After change.
   *
   * <tt>null</tt> if not set.
   *
   * @get get
   * @var bool|null
   */
  public $is_after_every;

  /**
   * Whether emails should be sent to members in churn risk group (Only for automated marketing).
   *
   * `true` if sent mails only to members in churn risk group.
   * `false` if sent mails not only to members in churn risk group.
   *
   * <tt>null</tt> if not set.
   *
   * @get get
   * @var bool|null
   */
  public $is_churn_risk;

  /**
   * Whether mail will be sent after the client has made a review.
   * <tt>true</tt> to send the mail, <tt>false</tt> to disable sending the mail. <tt>null</tt> if not set.
   *
   * @get get
   * @var bool|null
   */
  public $is_disable_review_request_after_review;

  /**
   * Whether need to prevent sending email without fulfilling a certain condition.
   * For example, for email {@link \RaMailSid::PROMOTION_PURCHASE} and {@link \RaMailSid::LEAD_CAPTURE}
   * <tt>true</tt> means that mail will not be sent to clients who make any new purchase, <tt>false</tt> otherwise.
   * After change.
   *
   * <tt>null</tt> if not set.
   *
   * @get get
   * @var bool|null
   */
  public $is_prevent = null;

  /**
   * Key of retention location.
   *
   * <tt>null</tt> if not set.
   *
   * @get get
   * @var string|null
   */
  public $k_location_retention = null;

  /**
   * Key of the mail pattern.
   *
   * <tt>null</tt> if not loaded.
   *
   * @get get
   * @var string|null
   */
  public $k_mail_pattern = null;

  /**
   * Object identifier.
   * Some mails related only with specific promotion, product or service.
   *
   * <tt>null</tt> if not set.
   *
   * @get get
   * @var string|null
   */
  public $s_object = null;

  /**
   * URL for client report.
   *
   * @get result
   * @var string
   */
  public $url_report;
}

?>