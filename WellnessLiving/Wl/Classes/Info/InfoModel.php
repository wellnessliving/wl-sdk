<?php

namespace WellnessLiving\Wl\Classes\Info;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Class information.
 *
 * @method WlModelRequest get() Gets information about class.  Returns the class title, service logo, and whether the class is actually an event, based on the  given business and class keys.
 */
class InfoModel extends WlModelAbstract
{
  /**
   * Service logo information:
   *
   * <dl>
   *   <dt>bool `is_empty`</dt>
   *   <dd>Whether service image is empty.</dd>
   * 
   *   <dt>string `s_url`</dt>
   *   <dd>Url link to image.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_logo;

  /**
   * <tt>true</tt> means event, <tt>false</tt> means class.
   *
   * @get result
   * @var bool
   */
  public $is_event;

  /**
   * Key of the business in which the class resides.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Class identifier to get information for.
   *
   * @get get
   * @var string
   */
  public $k_class = '0';

  /**
   * Title of the class.
   *
   * @get result
   * @var string
   */
  public $text_title;
}

?>