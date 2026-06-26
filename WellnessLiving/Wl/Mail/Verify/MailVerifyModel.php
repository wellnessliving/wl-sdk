<?php

namespace WellnessLiving\Wl\Mail\Verify;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to work with verification email in Amazon SES. It is necessary for sending email through Amazon SES.
 * Amazon SES can send email only from verified email addresses.
 *
 * @method WlModelRequest post() Adds an email address to the list of identities for our Amazon SES account in the current AWS region and attempts to verify it. As a result of executing this operation, a verification email is sent to the specified address. If the operation to Amazon is successful this method changes status of the {@link \Wl\Business\Config\Option\MailVerifyStatusOption} option in {@link \Wl\Mail\Verify\BusinessConfigOptionSql} table and adds task to check mail verification status.
 */
class MailVerifyModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @post post
   * @rule value-db {@link \RsBusinessAr}
   * @var string
   */
  public $k_business;

  /**
   * Email address.
   *
   * @post post
   * @var string
   */
  public $text_email = '';
}

?>