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
   * `null` if not initialized yet.
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