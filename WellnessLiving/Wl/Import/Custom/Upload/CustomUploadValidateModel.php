<?php

namespace WellnessLiving\Wl\Import\Custom\Upload;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to validate custom import with columns mapping and get information about it.
 *
 * @method WlModelRequest post() Returns count of rows that are left to be imported.
 */
class CustomUploadValidateModel extends WlModelAbstract
{
  /**
   * @post post
   * @var array
   */
  public $a_field_mapping = [];

  /**
   * Count of the rows that cannot be imported due to validation errors.
   *
   * @post result
   * @var int
   */
  public $i_invalid = 0;

  /**
   * Count of the rows in the  file.
   *
   * @post result
   * @var int
   */
  public $i_total = 0;

  /**
   * @post post
   * @var int
   */
  public $id_date = 0;

  /**
   * Type of custom import.
   *
   * @post get
   * @var int
   */
  public $id_import_custom = 0;

  /**
   * Key of the business.
   *
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * @post post
   * @var string
   */
  public $s_file_mapping = '';
}

?>