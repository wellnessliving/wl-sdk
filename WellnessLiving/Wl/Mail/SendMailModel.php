<?php

namespace WellnessLiving\Wl\Mail;

use WellnessLiving\WlModelAbstract;

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
   * Business mail.
   *
   * @post post
   * @var string
   */
  public $s_business_mail = '';

  /**
   * Business name.
   *
   * @post post
   * @var string
   */
  public $s_business_name = '';

  /**
   * Business reply.
   *
   * @post post
   * @var string
   */
  public $s_business_reply = '';

  /**
   * Company name.
   *
   * @post post
   * @var string
   */
  public $s_campaign = '';

  /**
   * Message recipient.
   *
   * @post post
   * @var string
   */
  public $s_mail = '';

  /**
   * Message recipient.
   *
   * @post post
   * @var string
   */
  public $s_subject = '';

  /**
   * Message content.
   *
   * @post post
   * @var string
   */
  public $z_html = '';
}