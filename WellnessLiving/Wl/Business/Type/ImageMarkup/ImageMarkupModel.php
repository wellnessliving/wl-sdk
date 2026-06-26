<?php

namespace WellnessLiving\Wl\Business\Type\ImageMarkup;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to get default image markup for the business type of current business.
 *
 * @method WlModelRequest get() Returns the default image markup for the given business.
 */
class ImageMarkupModel extends WlModelAbstract
{
  /**
   * Business Key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Link of the image markup.
   *
   * @get result
   * @var string
   */
  public $s_link_markup_image = '';

  /**
   * Url of the default image markup.
   *
   * @get result
   * @var string
   */
  public $url_image_markup = '';
}

?>