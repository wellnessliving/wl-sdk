<?php

namespace WellnessLiving\Wl\Business\Search;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to get business logo, name and address by provided business keys.
 *
 * @method WlModelRequest get()
 */
class BusinessInfoModel extends WlModelAbstract
{
  /**
   * Array of business keys to retrieve the data.
   *
   * @get get
   * @var array
   */
  public $a_business = [];

  /**
   * Array with needed info about the business.
   * Values have the next structure:
   *
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Business key.</dd>
   * 
   *   <dt>string `s_location`</dt>
   *   <dd>Business address.</dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>Business name.</dd>
   * 
   *   <dt>string `url_business`</dt>
   *   <dd>Business URL address to sign in.</dd>
   * 
   *   <dt>string `url_logo`</dt>
   *   <dd>Path to business logo.</dd>
   * </dl>
   * @get result
   * @var string[][]
   */
  public $a_result = [];

  /**
   * User's location latitude in degrees.
   *
   * @get get
   * @var float
   */
  public $f_latitude = 0;

  /**
   * User's location Longitude in degrees.
   *
   * @get get
   * @var float
   */
  public $f_longitude = 0;
}

?>