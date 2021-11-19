<?php

namespace WellnessLiving\Wl\Business;

use WellnessLiving\WlModelAbstract;

/**
 * Creates new business.
 */
class BusinessModel extends WlModelAbstract
{
  /**
   * Business locale. One of {@link \WellnessLiving\Core\Locale\LocaleSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_locale;

  /**
   * Key of created business.
   *
   * @post result
   * @var string
   */
  public $k_business;

  /**
   * Key of business type.
   *
   * @post post
   * @var string
   */
  public $k_business_type;

  /**
   * City key of the business.
   *
   * @post post
   * @var string
   */
  public $k_office_city;

  /**
   * Address of the business.
   *
   * @post post
   * @var string
   */
  public $text_office_address;

  /**
   * Postal code of the business.
   *
   * @post post
   * @var string
   */
  public $text_office_postal;

  /**
   * Phone number of the business.
   *
   * @post post
   * @var string
   */
  public $text_phone;

  /**
   * Title of the business.
   *
   * @post post
   * @var string
   */
  public $text_title;
}

?>