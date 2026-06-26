<?php

namespace WellnessLiving\Wl\Business\Account\Application;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Upgrades business account to application customisation.
 *
 * @method WlModelRequest post() Upgrades current application account to specified account.
 */
class ApplicationModel extends WlModelAbstract
{
  /**
   * Application package ID.
   *
   * @post get
   * @var int
   */
  public $id_application;

  /**
   * Achieve subscription plan ID.
   *
   * @post get
   * @var int
   */
  public $id_plan = 0;

  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business;
}

?>