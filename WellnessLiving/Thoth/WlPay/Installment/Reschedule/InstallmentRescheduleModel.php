<?php

namespace WellnessLiving\Thoth\WlPay\Installment\Reschedule;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to reschedule single payment of an installment plan.
 *
 * @method WlModelRequest post() Saves a list of client who a class session must be booked for into session.
 */
class InstallmentRescheduleModel extends WlModelAbstract
{
  /**
   * New local date, when user should be charged.
   *
   *  @post post
   *  @var string
   */
  public $dl_new = '';

  /**
   * Old local date, when user should be charged according to the initial plan.
   *
   *  @post post
   *  @var string
   */
  public $dl_old = '';

  /**
   * The key of the business to reschedule installment plan in.
   *
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * Key in the installment plan.
   *
   * @post get
   * @var string
   */
  public $k_pay_installment = '';
}

?>