<?php

namespace WellnessLiving\Wl\Location;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to edit location active status.
 *
 * @method WlModelRequest delete() Deletes location active log.
 * @method WlModelRequest get() Returns confirmation message that should be shown during the edit process of the location status.
 * @method WlModelRequest post() Edits location active status.
 */
class LocationActiveEditModel extends WlModelAbstract
{
  /**
   * Local date of operation.
   *
   * @post get
   * @var string
   */
  public $dl_operation;

  /**
   * Whether type of operation is the churn, otherwise - reactivation.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_churn = false;

  /**
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_location;

  /**
   * Key of the location active log.
   *
   * @delete get
   * @var string
   */
  public $k_location_active_log;

  /**
   * Confirmation message.
   *
   * @get result
   * @var string
   */
  public $text_confirm = '';

  /**
   * Reason of the change of location status.
   *
   * @post get
   * @var string
   */
  public $text_reason = '';
}

?>