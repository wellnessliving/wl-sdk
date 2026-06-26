<?php

namespace WellnessLiving\Wl\Sms\A2p;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * A2P10DLC Registration API.
 *
 * @method WlModelRequest post() Creates and submits A2P10DLC registration for a business.
 * @method WlModelRequest put() Updates an A2P10DLC registration for a business.
 */
class A2pRegistrationModel extends WlModelAbstract
{
  /**
   * Primary contact information.
   *
   * <dl>
   *   <dt>int `id_position`</dt>
   *   <dd>Contact job position.</dd>
   * 
   *   <dt>string `text_email`</dt>
   *   <dd>Contact email address.</dd>
   * 
   *   <dt>string `text_name_first`</dt>
   *   <dd>Contact first name.</dd>
   * 
   *   <dt>string `text_name_last`</dt>
   *   <dd>Contact last name.</dd>
   * 
   *   <dt>string `text_phone`</dt>
   *   <dd>Contact phone number.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Contact job title.</dd>
   * </dl>
   * @post post
   * @put post
   * @var array
   */
  public $a_contact_primary = [];

  /**
   * Secondary contact information.
   *
   * <dl>
   *   <dt>int `id_position`</dt>
   *   <dd>Contact job position.</dd>
   * 
   *   <dt>string `text_email`</dt>
   *   <dd>Contact email address.</dd>
   * 
   *   <dt>string `text_name_first`</dt>
   *   <dd>Contact first name.</dd>
   * 
   *   <dt>string `text_name_last`</dt>
   *   <dd>Contact last name.</dd>
   * 
   *   <dt>string `text_phone`</dt>
   *   <dd>Contact phone number.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Contact job title.</dd>
   * </dl>
   * @post post
   * @put post
   * @var array|null
   */
  public $a_contact_secondary = null;

  /**
   * Business registration identifier.
   *
   * @post post
   * @put post
   * @var int|null
   */
  public $id_business_registration_identifier = null;

  /**
   * Business structure.
   *
   * @post post
   * @put post
   * @var int|null
   */
  public $id_business_structure = null;

  /**
   * A2P10DLC campaign type.
   *
   * @post post
   * @put post
   * @var int|null
   */
  public $id_campaign_type = null;

  /**
   * Business company type.
   *
   * @post post
   * @put post
   * @var int|null
   */
  public $id_company_type = null;

  /**
   * Business stock exchange.
   *
   * @post post
   * @put post
   * @var int|null
   */
  public $id_stock_exchange = null;

  /**
   * Business key.
   *
   * @post get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Business country key.
   *
   * @post post
   * @put post
   * @var string
   */
  public $k_country = '';

  /**
   * Business address.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_address = '';

  /**
   * DBA / Trade Name (optional).
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_brand_name = '';

  /**
   * Business name.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_business_name = '';

  /**
   * Business phone number.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_business_phone = '';

  /**
   * Business registration number.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_business_registration_number = '';

  /**
   * Business city.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_city = '';

  /**
   * Business owner first name.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_name_first = '';

  /**
   * Business owner last name.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_name_last = '';

  /**
   * Notification email address.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_notification_email = '';

  /**
   * Business postal/ZIP code.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_postal = '';

  /**
   * Business province/state.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_region = '';

  /**
   * Business stock ticker.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_stock_ticker = '';

  /**
   * OTP Verification phone number.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_verification_phone = '';

  /**
   * Business website URL.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_website_url = '';
}

?>