<?php

namespace WellnessLiving\Wl\Profile\Overview;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Model for sending emails to user.
 *
 * @method WlModelRequest post() This method is called to process POST query.
 */
class SendMailModel extends WlModelAbstract
{
  /**
   * ID of the email.
   *
   * @post get
   * @var int
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