<?php

namespace WellnessLiving\Wl\Insurance\Reimbursement;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Triggers resubmission of the reimbursement record.
 *
 * @method WlModelRequest get() Triggers resubmission of the reimbursement record.
 */
class ReimbursementResubmitModel extends WlModelAbstract
{
  /**
   * Key of the reimbursement record to be resubmitted.
   *
   * @get get
   * @var string
   */
  public $k_insurance_reimbursement = '0';
}

?>