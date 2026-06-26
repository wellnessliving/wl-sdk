<?php

namespace WellnessLiving\Wl\Business\Churn;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to churn business.
 *
 * @method WlModelRequest get() Gets information about a business.
 * @method WlModelRequest post() Churns the business.
 */
class BusinessChurnModel extends WlModelAbstract
{
  /**
   * Business churn date.
   * <tt>null</tt> if not initialized yet.
   *
   * @post get
   * @var string|null
   */
  public $dl_churn = null;

  /**
   * <tt>true</tt> if business is a lost customer, <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_churn;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Business name
   *
   * @get result
   * @var string
   */
  public $text_business_name;

  /**
   * Reason of a business churn.
   *
   * @post get
   * @var string
   */
  public $text_churn_reason;
}

?>