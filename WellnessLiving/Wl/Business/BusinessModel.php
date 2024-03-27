<?php

namespace WellnessLiving\Wl\Business;

use WellnessLiving\Core\Locale\LocaleSid;
use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that creates a new business.
 */
class BusinessModel extends WlModelAbstract
{
  /**
   * The business locale.
   *
   * @post post
   * @var int
   * @see LocaleSid
   */
  public $id_locale;

  /**
   * The key of the created business.
   *
   * @post result
   * @var string
   */
  public $k_business;

  /**
   * The key of the business type.
   *
   * @post post
   * @var string
   */
  public $k_business_type;

  /**
   * The city key of the business.
   *
   * @post post
   * @var string
   */
  public $k_office_city;

  /**
   * The address of the business.
   *
   * @post post
   * @var string
   */
  public $text_office_address;

  /**
   * The postal code of the business.
   *
   * @post post
   * @var string
   */
  public $text_office_postal;

  /**
   * The phone number of the business.
   *
   * @post post
   * @var string
   */
  public $text_phone;

  /**
   * The title of the business.
   *
   * @post post
   * @var string
   */
  public $text_title;
}

?>