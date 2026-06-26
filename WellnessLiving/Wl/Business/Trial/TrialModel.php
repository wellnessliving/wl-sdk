<?php

namespace WellnessLiving\Wl\Business\Trial;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for business trial managing.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest post()
 */
class TrialModel extends WlModelAbstract
{
  /**
   * Whether business account has trial limitation.
   *
   * `true` if business account has trial limitation, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_trial = false;

  /**
   * Business key to remove trial from.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';
}

?>