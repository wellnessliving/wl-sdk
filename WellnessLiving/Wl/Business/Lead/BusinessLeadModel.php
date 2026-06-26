<?php

namespace WellnessLiving\Wl\Business\Lead;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Creates a new business lead request within the Partner Program.
 *
 * @method WlModelRequest post() Saves a new business lead referral record submitted through the Partner Program.  Used when a Partner Program member refers a new prospective client to WellnessLiving. Stores the lead's contact details linked to the referring partner so that sales can follow up and attribute the conversion to the correct partner.
 */
class BusinessLeadModel extends WlModelAbstract
{
  /**
   * The business's partner key.
   *
   * @post post
   * @var string
   */
  public $k_business_partner;

  /**
   * The business's name.
   *
   * @post post
   * @var string
   */
  public $text_business_name;

  /**
   * The client's full name.
   *
   * @post post
   * @var string
   */
  public $text_client_name;

  /**
   * The client's email.
   *
   * @post post
   * @var string
   */
  public $text_email;

  /**
   * The client's phone number.
   *
   * @post post
   * @var string
   */
  public $text_phone;

  /**
   * The business's partner promo code.
   *
   * @post post
   * @var string
   */
  public $text_promo_code;

  /**
   * The website URL.
   *
   * @post post
   * @var string
   */
  public $url_website;
}

?>