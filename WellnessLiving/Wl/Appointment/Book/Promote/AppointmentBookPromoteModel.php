<?php

namespace WellnessLiving\Wl\Appointment\Book\Promote;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * An API to promote visits from a wait list to an active list for appointment/asset.
 *
 * @method WlModelRequest post()
 */
class AppointmentBookPromoteModel extends WlModelAbstract
{
  /**
   * `null` if not initialized yet.
   *
   * @post post
   * @var int|null
   */
  public $id_mode = null;

  /**
   * Whether is awaiting for user confirmation.
   *
   * @post result
   * @var bool
   */
  public $is_wait_confirm = false;

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * Visit key.
   *
   * @post post
   * @var string
   */
  public $k_visit = '';
}

?>