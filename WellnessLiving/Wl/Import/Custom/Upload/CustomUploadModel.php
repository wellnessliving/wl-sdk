<?php

namespace WellnessLiving\Wl\Import\Custom\Upload;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to get information about custom import.
 *
 * @method WlModelRequest get() Returns count of rows that are left to be imported.
 */
class CustomUploadModel extends WlModelAbstract
{
  /**
   * Count of the rows that are left to be imported.
   *
   * @get result
   * @var int
   */
  public $i_left = 0;

  /**
   * Type of custom import.
   *
   * @delete get
   * @get get
   * @var int
   */
  public $id_import_custom = 0;

  /**
   * Key of the business.
   *
   * @delete get
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>