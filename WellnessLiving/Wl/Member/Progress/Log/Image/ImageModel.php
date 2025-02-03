<?php

namespace WellnessLiving\Wl\Member\Progress\Log\Image;

use WellnessLiving\WlModelAbstract;

/**
 * Progress image api.
 */
class ImageModel extends WlModelAbstract
{
  /**
   * Image data:
   * <dl>
   *   <dt>
   *     array <var>a_image</var>
   *   </dt>
   *   <dd>
   *     Image storage data.
   *   </dd>
   *   <dt>
   *     int <var>i-size</var>
   *   </dt>
   *   <dd>
   *     Max image size.
   *   </dd>
   *   <dt>
   *     int <var>i-thumbnail-height</var>
   *   </dt>
   *   <dd>
   *     Image thumbnail height.
   *   </dd>
   *   <dt>
   *     int <var>i-thumbnail-width</var>
   *   </dt>
   *   <dd>
   *     Image thumbnail width.
   *   </dd>
   *   <dt>
   *     string <var>s_link</var>
   *   </dt>
   *   <dd>
   *     Image link.
   *   </dd>
   *   <dt>
   *     string <var>url-action</var>
   *   </dt>
   *   <dd>
   *     Image upload url.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_image;

  /**
   * Local date of the progress picture.
   *
   * <tt>null</tt> if not initialized yet.
   *
   * @delete get
   * @get get
   * @post get
   * @var string|null
   */
  public $dt_date = null;

  /**
   * Business key.
   *
   * <tt>null</tt> if not initialized yet.
   *
   * @delete get
   * @get get
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Save image command.
   *
   * <tt>null</tt> if not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $s_command = '';

  /**
   * User key.
   *
   * <tt>null</tt> if not initialized yet.
   *
   * @delete get
   * @get get
   * @post get
   * @var string|null
   */
  public $uid = null;
}

?>