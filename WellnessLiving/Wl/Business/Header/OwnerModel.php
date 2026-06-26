<?php

namespace WellnessLiving\Wl\Business\Header;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Provides header information and some header display settings.
 *
 * @method WlModelRequest get() Performs all necessary checks, as well as prepares and returns data.
 */
class OwnerModel extends WlModelAbstract
{
  /**
   * Business or Location title.
   * Which of the title will be returned depends on the current user and the features of the business.
   *
   * @get result
   * @var string
   */
  public $html_title;

  /**
   * Whether the business or location logo exists and should be displayed.
   *
   * @get result
   * @var bool
   */
  public $is_logo_exists;

  /**
   * The key of the business for which you want to get header information.
   *
   * As a result, this field may be empty. In this case, the location key will be setted.
   *
   * @get get,result
   * @var string
   */
  public $k_business = '';

  /**
   * Key of current user location.
   *
   * @get result
   * @var string
   */
  public $k_location;

  /**
   * Whether title will be displayed or not.
   * Depends on business settings.
   *
   * @get result
   * @var bool
   */
  public $show_business_name;

  /**
   * The user key for which information will be loaded.
   *
   * @get get
   * @var string
   */
  public $uid = '';

  /**
   * Microsite URL for user location.
   *
   * @get result
   * @var string
   */
  public $url_microsite;
}

?>