<?php

namespace WellnessLiving\Wl\Catalog\View\Image;

use WellnessLiving\Core\Drive\DriveTypeSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlSaleSid;

/**
 * Retrieves information about product images.
 *
 * @method WlModelRequest get() Retrieves an information about product images.  Requires the sale item ID and the sale category ID to be specified. For a `product`  sale category, resolves the business that owns the shop product, loads the thumbnail  image list for that product, and converts each image variant into its array  representation. For sale categories that do not represent a shop product, returns an  empty image list.
 */
class ImageModel extends WlModelAbstract
{
  /**
 * Contains a list of images for the current product. Each element has the structure
 *  described in .
 *
 * <dl>
 *   <dt>array `a_image`</dt>
 *   <dd>
 *     <dl>
 *       <dt>int `i_height`</dt>
 *       <dd>Height of the variant image.</dd>
 * 
 *       <dt>int `i_height_src`</dt>
 *       <dd>Height of the original image.</dd>
 * 
 *       <dt>int `i_rotate`</dt>
 *       <dd>Rotate.</dd>
 * 
 *       <dt>int `i_width`</dt>
 *       <dd>Width of the variant image.</dd>
 * 
 *       <dt>int `i_width_src`</dt>
 *       <dd>Width of the original image.</dd>
 * 
 *       <dt>int `id_type_src`</dt>
 *       <dd>Type ID of the image. Constant from {@link DriveTypeSid}.</dd>
 * 
 *       <dt>bool `is-resize`</dt>
 *       <dd>`true` if the variant differs from the original, `false` - otherwise.</dd>
 * 
 *       <dt>string `url-thumbnail`</dt>
 *       <dd>URL to download variant (thumbnail) file.</dd>
 * 
 *       <dt>string `url-view`</dt>
 *       <dd>URL to download original file.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>int `i_height`</dt>
 *   <dd>Height of the variant image.</dd>
 * 
 *   <dt>int `i_width`</dt>
 *   <dd>Width of the variant image.</dd>
 * 
 *   <dt>bool `is_empty`</dt>
 *   <dd>`true` if the image file does not exist, `false` - otherwise.</dd>
 * 
 *   <dt>string `s_url`</dt>
 *   <dd>Link to the variant file.</dd>
 * </dl>
 * @get result
 * @var array[]
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