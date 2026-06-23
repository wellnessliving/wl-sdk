<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Registers variants.
 *
 * @method WlModelRequest get() Registers file variants for the given link (deprecated GET compatibility endpoint).  Reads variant and link values from the raw GET parameters and delegates to the POST method. This endpoint exists only for backward compatibility; use {@link \Thoth\DriveMs\Api\DriveRegisterVariantsApi::post()} instead.
 * @method WlModelRequest post() Registers file variants for the given link.  Accepts a drive link and a list of variant file paths keyed by descriptor (either as an array or as a JSON-encoded string), and associates the given variants with the specified link in the drive storage.
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