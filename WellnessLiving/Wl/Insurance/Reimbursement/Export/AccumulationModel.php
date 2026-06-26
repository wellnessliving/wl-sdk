<?php

namespace WellnessLiving\Wl\Insurance\Reimbursement\Export;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for Curves data files.
 *
 * @method WlModelRequest post() Generates reimbursement export files for providers and uploads them into S3.
 */
class AccumulationModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Partner key.
   *
   * @post get
   * @var string
   */
  public $k_partner;
}

?>