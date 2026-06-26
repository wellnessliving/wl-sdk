<?php

namespace WellnessLiving\Wl\Video\MediaConvert;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to add\change path video converted.
 *
 * @method WlModelRequest post() Getting the list of converted file paths and registering them as variants.
 */
class PathElementModel extends WlModelAbstract
{
  /**
   * List of fully qualified file paths.
   *
   * @post post
   * @var string
   */
  public $json_file_path = '[]';

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * String key of the video.
   *
   * @post post
   * @var string
   */
  public $k_video = '';
}

?>