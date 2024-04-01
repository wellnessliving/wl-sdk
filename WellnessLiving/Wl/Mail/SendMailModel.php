<?php

namespace WellnessLiving\Wl\Mail;

use WellnessLiving\WlModelAbstract;

/**
 * Can be used to send email messages.
 */
class SendMailModel extends WlModelAbstract
{
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
   * The message content.
   *
   * @post post
   * @var string
   */
  public $z_html = '';
}

?>