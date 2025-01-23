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
   * A list of business types. Each element has the next structure: <dl>
   *  <dt>array <var>a_image_list</var></dt>
   *  <dd>Images list for business types. Each element has the next structure:<dl>
   *    <dt>int <var>i_height</var></dt>
   *    <dd>Actual height of thumbnail image.</dd>
   *    <dt>int <var>i_height_src</var></dt>
   *    <dd>Height of original image.</dd>
   *    <dt>int <var>i_rotate</var></dt>
   *    <dd>Angle on which image was rotated compared to the original.</dd>
   *    <dt>int <var>i_width</var></dt>
   *    <dd>Actual width of thumbnail image.</dd>
   *    <dt>int <var>i_width_src</var></dt>
   *    <dd>Width of original image.</dd>
   *    <dt>bool <var>is_resize</var></dt>
   *    <dd>Whether thumbnail is a resized variant of original image.
   *      If set to `false`, value returned in <var>url_thumbnail</var> equals value in <var>url_view</var>.</dd>
   *    <dt>string <var>url_thumbnail</var></dt>
   *    <dd>Url to resized and rotated image in file storage.
   *      If size of original image is larger than specified by arguments, image thumbnail as created,
   *      and a link to this thumbnail is returned. Otherwise, link to original image is returned here.</dd>
   *    <dt>string <var>url_view</var></dt>
   *    <dd>Url to original image in file storage.</dd>
   *  </dl></dd>
   *  <dt>int <var>id_business_category</var></dt>
   *  <dd>The business category. One of the {@link BusinessCategorySid} constants.</dd>
   *  <dt>int <var>id_tour</var></dt>
   *  <dd>Type of the demo tour on the sales site connected to the business type. More about tours: {@link WlHomeTourSid}.</dd>
   *  <dt>string <var>k_business_type</var></dt>
   *  <dd>The key of business type.</dd>
   *  <dt>string <var>text_category</var></dt>
   *  <dd>The title of the business category.</dd>
   *  <dt>string <var>text_file</var></dt>
   *  <dd>System name of the business type.</dd>
   *  <dt>string <var>text_title</var></dt>
   *  <dd>The title of business type.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_business_type = [];
}

?>