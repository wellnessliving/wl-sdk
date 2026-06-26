<?php

namespace WellnessLiving\Wl\Login\Promotion\Cancel;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Creates live pattern.
 *
 * @method WlModelRequest get() Gets customization form HTML content.
 * @method WlModelRequest post() Creates live template.
 */
class MailPatternLiveModel extends WlModelAbstract
{
  /**
   * Deactivation date.
   *
   * @post post
   * @var string
   */
  public $dl_deactivation = '';

  /**
   * HTML form content.
   *
   * @get result
   * @var string
   */
  public $html_form = '';

  /**
   * Type of copy to business on <var>s_business_mail</var>
   * <tt>null</tt> if not initialized.
   *
   * @post post
   * @var int|null
   */
  public $id_mail_copy_business = null;

  /**
   * Whether this notification should be tracked as a campaign.
   *
   * @post post
   * @var bool
   */
  public $is_campaign = false;

  /**
   * <tt>true</tt> if user must get email,<tt>false</tt> otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_mail = false;

  /**
   * <tt>true</tt> if user must get push-notification,<tt>false</tt> otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_push = false;

  /**
   * <tt>true</tt> if user must get SMS notification,<tt>false</tt> otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_sms = false;

  /**
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of the mail pattern.
   *
   * @post result
   * @var string
   */
  public $k_mail_pattern_live = '';

  /**
   * Business mail.
   * <tt>null</tt> if not initialized.
   *
   * @post post
   * @var string|null
   */
  public $s_business_mail = null;

  /**
   * Business name.
   * <tt>null</tt> if not initialized.
   *
   * @post post
   * @var string|null
   */
  public $s_business_name = null;

  /**
   * Business reply.
   * <tt>null</tt> if not initialized.
   *
   * @post post
   * @var string|null
   */
  public $s_business_reply = null;

  /**
   * Company name.
   * <tt>null</tt> if not initialized.
   *
   * @post post
   * @var string|null
   */
  public $s_campaign = null;

  /**
   * Content of email.
   * <tt>null</tt> if not initialized.
   *
   * @post post
   * @var string|null
   */
  public $s_html = null;

  /**
   * Content of push notification.
   * <tt>null</tt> if not initialized.
   *
   * @post post
   * @var string|null
   */
  public $s_push = null;

  /**
   * Content of SMS.
   * <tt>null</tt> if not initialized.
   *
   * @post post
   * @var string|null
   */
  public $s_sms = null;

  /**
   * Message subject.
   * <tt>null</tt> if not initialized.
   *
   * @post post
   * @var string|null
   */
  public $s_subject = null;

  /**
   * Content of email as text.
   * <tt>null</tt> if not initialized.
   *
   * @post post
   * @var string|null
   */
  public $s_text = null;

  /**
   * SID of notification form.
   * <tt>null</tt> if not initialized.
   *
   * @get get
   * @var string|null
   */
  public $sid_mail_form = null;

  /**
   * UID user's key of the actor.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid_actor = '0';
}

?>