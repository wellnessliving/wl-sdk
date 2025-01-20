<?php

namespace WellnessLiving\Wl\Business\Partner;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlHomeTourSid;

/**
 * Works with partner settings of the business.
 * This information is entered by a staff member when a client enrolls into Partner Program and uses a custom landing page, which
 * is available by special business URL.
 */
class PartnerSettingsModel extends WlModelAbstract
{
  /**
   * The homepage tour of the business, which depends on the type.
   *
   * @get result
   * @var int
   * @see WlHomeTourSid
   */
  public $id_business_tour = 0;

  /**
   * The business key.
   *
   * @get result
   * @var string
   */
  public $k_business = '';

  /**
   * The unique code that a business can provide other businesses to tell them about system.
   *
   * @get get
   * @var string
   */
  public $text_code = '';

  /**
   * The first name of the business representative.
   *
   * @get result
   * @var string
   * @deprecated This field is not used anymore.
   */
  public $text_name_first;

  /**
   * The last name of the business representative.
   *
   * @get result
   * @var string
   * @deprecated This field is not used anymore.
   */
  public $text_name_last;

  /**
   * The job title of the business representative.
   *
   * @get result
   * @var string
   * @deprecated This field is not used anymore.
   */
  public $text_position;

  /**
   * The text of the review about the WellnessLiving system.
   *
   * @get result
   * @var string
   * @deprecated This field is not used anymore.
   */
  public $text_review;

  /**
   * A link to the photo of the business representative.
   *
   * `null` in case when image is not uploaded.
   *
   * @get result
   * @var string|null
   * @deprecated This field is not used anymore.
   */
  public $url_photo;
}

?>