<?php

namespace WellnessLiving\Wl\Business\Partner;

use WellnessLiving\WlModelAbstract;

/**
 * Works with partner settings of the business: name of the business owner, review about wellnessliving and other.
 * This information staff member enters, when enrolls into partner program and is used on custom landing page, which
 * is available by special business url.
 */
class PartnerSettingsModel extends WlModelAbstract
{
  /**
   * Home page tour of the business. Depends on type.
   *
   * @get result
   * @var int
   * @see \WellnessLiving\RsHomeTourSid
   */
  public $id_business_tour = 0;

  /**
   * Business key.
   *
   * @get result
   * @var string
   */
  public $k_business = '';

  /**
   * Unique code that business can give other businesses to tell them about system.
   *
   * @get get
   * @var string
   */
  public $text_code = '';

  /**
   * First name of the business representative.
   *
   * @get result
   * @var string
   */
  public $text_name_first;

  /**
   * Last name of the business representative.
   *
   * @get result
   * @var string
   */
  public $text_name_last;

  /**
   * Job title of the business representative.
   *
   * @get result
   * @var string
   */
  public $text_position;

  /**
   * Text of the review about wellnessliving system.
   *
   * @get result
   * @var string
   */
  public $text_review;

  /**
   * Link to the photo of the business representative.
   *
   * @get result
   * @var string
   */
  public $url_photo;
}

?>