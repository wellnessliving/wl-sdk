<?php

namespace WellnessLiving\Wl\Profile\Overview;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\RsMailSid;

/**
 * Model for sending emails to user.
 *
 * @method WlModelRequest post() This method is called to process POST query.  Validates the mail id, business, and target user, checks that the current staff member has access to the user and permission to send mail, builds any additional data required for the selected mail (for example, a password reset link), and sends the notification.
 */
class SendMailModel extends WlModelAbstract
{
  /**
   * ID of the email.
   *
   * @post get
   * @var int
   * @see RsMailSid
   */
  public $id_mail = 0;

  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * UID of a user for whom an email should be sent.
   *
   * @post get
   * @var string
   */
  public $uid = '';
}

?>