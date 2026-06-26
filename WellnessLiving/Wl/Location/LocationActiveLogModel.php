<?php

namespace WellnessLiving\Wl\Location;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to edit location active log.
 *
 * @method WlModelRequest post() Edits history of location activation change.
 */
class LocationActiveLogModel extends WlModelAbstract
{
  /**
   * Local date of operation.
   *
   * @post post
   * @var string
   */
  public $dl_operation;

  /**
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * @post post
   * @var string
   */
  public $k_location;

  /**
   * @post post
   * @var string
   */
  public $k_location_active_log;

  /**
   * Reason of the change of location status.
   *
   * @post post
   * @var string
   */
  public $text_reason;
}

?>