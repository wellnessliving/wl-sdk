<?php

namespace WellnessLiving\Wl\Skin\Application\Upgrade;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API endpoint for handling application upgrades.
 *
 * This class is responsible for managing the upgrade process of application versions
 * that will be published to Google Play and Apple Store.
 *
 * @method WlModelRequest post()
 */
class ApplicationUpgradeModel extends WlModelAbstract
{
  /**
   * The type of update to be performed.
   *
   * @post post
   * @var int
   */
  public $id_version = 1;

  /**
   * The business that must be upgraded.
   *
   * @post post
   * @var string
   */
  public $s_business = '';
}

?>