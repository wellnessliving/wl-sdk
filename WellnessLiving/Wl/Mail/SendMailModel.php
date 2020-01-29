<?php

namespace WellnessLiving\Wl\Mail;

use WellnessLiving\WlModelAbstract;

/**
 * Tool to send email.
 */
class SendMailModel extends WlModelAbstract
{
  /**
   * Business id.
   *
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * Message recipient.
   *
   * @post post
   * @var string
   */
  public $s_subject = '';

  /**
   * Business mail.
   *
   * @post post
   * @var string
   */
  public $text_business_mail = '';

  /**
   * Business name.
   *
   * @post post
   * @var string
   */
  public $text_business_name = '';

  /**
   * Business reply.
   *
   * @post post
   * @var string
   */
  public $text_business_reply = '';

  /**
   * Company name.
   *
   * @post post
   * @var string
   */
  public $text_campaign = '';

  /**
   * Message recipient.
   *
   * @post post
   * @var string
   */
  public $text_mail = '';

  /**
   * Message content.
   *
   * @post post
   * @var string
   */
  public $z_html = '';
}