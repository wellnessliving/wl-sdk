<?php

namespace WellnessLiving\Wl\Business\Lead;

use WellnessLiving\WlModelAbstract;

/**
 *  Creates new business lead request within partner program.
 */
class BusinessLeadModel extends WlModelAbstract
{
  /**
   * Business partner key.
   *
   * @post post
   * @var string
   */
  public $k_business_partner;

  /**
   * Business name.
   *
   * @post post
   * @var string
   */
  public $text_business_name;

  /**
   * Client's full name.
   *
   * @post post
   * @var string
   */
  public $text_client_name;

  /**
   * Client's email.
   *
   * @post post
   * @var string
   */
  public $text_email;

  /**
   * Client's phone.
   *
   * @post post
   * @var string
   */
  public $text_phone;

  /**
   * Web-site URL.
   *
   * @post post
   * @var string
   */
  public $url_website;
}

?>