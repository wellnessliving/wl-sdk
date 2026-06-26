<?php

namespace WellnessLiving\Wl\Catalog\View\Image;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlSaleSid;

/**
 * Retrieves information about product images.
 *
 * @method WlModelRequest get() Retrieves an information about product images.
 */
class ImageModel extends WlModelAbstract
{
  /**
   * Contains a list of images for the current product.
   *
   * @get result
   * @var array
   */
  public $a_image;

  /**
   * ID of sale category. One of {@link WlSaleSid}.
   *
   * @get get
   * @var int
   */
  public $id_sale = 0;

  /**
   * ID of the sale item.
   *
   * @get get
   * @var string
   */
  public $k_id = 0;

  /**
   * Shop product option ID.
   *
   * @get get
   * @var string
   */
  public $k_shop_product_option = 0;
}

?>