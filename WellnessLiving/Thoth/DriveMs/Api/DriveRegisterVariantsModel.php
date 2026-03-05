<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\WlModelAbstract;

/**
 * Registers variants.
 */
class DriveRegisterVariantsModel extends WlModelAbstract
{
  /**
   * List of variant file paths with key as descriptor.
   *
   * @post post
   * @var string[]
   */
  public $a_variant = [];

  /**
   * List of variant file paths with key as descriptor in JSON format.
   *
   * This parameter allows passing a large number of files to the controller without exceeding the maximum POST request
   * variable limit.
   * The files should be provided as a JSON-encoded array of strings.
   * It is preferable to use this parameter instead of {@link DriveRegisterVariantsModel::$a_variant}.
   *
   * @post post
   * @var string
   */
  public $json_variant = '';

  /**
   * Link to the file.
   *
   * @post get
   * @var string
   */
  public $s_link = '';
}

?>