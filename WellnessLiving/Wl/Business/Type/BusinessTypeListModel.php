<?php

namespace WellnessLiving\Wl\Business\Type;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Business\BusinessCategorySid;
use WellnessLiving\Wl\WlHomeTourSid;

/**
 * Retrieves a list of business types.
 */
class BusinessTypeListModel extends WlModelAbstract
{
  /**
   * A list of business types. Each element has the next structure: 
   *
   * <dl>
   *   <dt>array `a_image_list`</dt>
   *   <dd>
   *     Images list for business types. Each element has the next structure:
   *     <dl>
   *       <dt>int `i_height`</dt>
   *       <dd>Actual height of thumbnail image.</dd>
   * 
   *       <dt>int `i_height_src`</dt>
   *       <dd>Height of original image.</dd>
   * 
   *       <dt>int `i_rotate`</dt>
   *       <dd>Angle on which image was rotated compared to the original.</dd>
   * 
   *       <dt>int `i_width`</dt>
   *       <dd>Actual width of thumbnail image.</dd>
   * 
   *       <dt>int `i_width_src`</dt>
   *       <dd>Width of original image.</dd>
   * 
   *       <dt>bool `is_resize`</dt>
   *       <dd>
   *         Whether thumbnail is a resized variant of original image.
   *  If set to `false`, value returned in <var>url_thumbnail</var> equals value in <var>url_view</var>.
   *       </dd>
   * 
   *       <dt>string `url_thumbnail`</dt>
   *       <dd>
   *         Url to resized and rotated image in file storage.
   *  If size of original image is larger than specified by arguments, image thumbnail as created,
   *  and a link to this thumbnail is returned. Otherwise, link to original image is returned here.
   *       </dd>
   * 
   *       <dt>string `url_view`</dt>
   *       <dd>Url to original image in file storage.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `id_business_category`</dt>
   *   <dd>The business category. One of the {@link BusinessCategorySid} constants.</dd>
   * 
   *   <dt>int `id_tour`</dt>
   *   <dd>
   *     Type of the demo tour on the sales site connected to the business type. More about tours: {@link WlHomeTourSid}.
   *   </dd>
   * 
   *   <dt>string `k_business_type`</dt>
   *   <dd>The key of business type. 
   * 
   *   <dt>string `text_category`</dt>
   *   <dd>The title of the business category.</dd>
   * 
   *   <dt>string `text_category_description`</dt>
   *   <dd>The description of the business category.</dd>
   * 
   *   <dt>string `text_category_icon`</dt>
   *   <dd>The icon of the business category.</dd>
   * 
   *   <dt>string `text_file`</dt>
   *   <dd>System name of the business type.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The title of business type.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_business_type = [];
}

?>