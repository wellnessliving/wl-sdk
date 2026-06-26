<?php

namespace WellnessLiving\Wl\Insurance\Reimbursement\Import;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to remove files, which were uploaded into SOS before reimbursement import.
 * Such files can be removed, if actor does not want to complete started import.
 *
 * @method WlModelRequest delete()
 */
class FileImportSosModel extends WlModelAbstract
{
  /**
   * Year, when reimbursement import was started.
   *
   * @delete get
   * @var int
   */
  public $i_year = 0;

  /**
   * Month, when reimbursement import was started.
   *
   * @delete get
   * @var int
   */
  public $id_month = 0;

  /**
   * Business key, where reimbursement import was started.
   *
   * @delete get
   * @var string
   */
  public $k_business = '';

  /**
   * Insurance partner key, where reimbursement import was started.
   *
   * @delete get
   * @var string
   */
  public $k_partner = '';
}

?>