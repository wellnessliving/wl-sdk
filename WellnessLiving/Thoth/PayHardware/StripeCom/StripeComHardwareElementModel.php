<?php

namespace WellnessLiving\Thoth\PayHardware\StripeCom;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint for operations with `stripe.com` hardware.
 *
 * @method WlModelRequest delete() Removes terminal.
 * @method WlModelRequest get() Fetch terminal information.
 * @method WlModelRequest post() Creates terminal.
 */
class StripeComHardwareElementModel extends WlModelAbstract
{
  /**
   * Hardware model ID.
   *
   * @get result
   * @post post
   * @var int
   */
  public $id_model = 0;

  /**
   * Status ID.
   *
   * @get result
   * @post post
   * @var int
   */
  public $id_status = 3;

  /**
   * IP address of terminal.
   *
   * Maybe an empty string as it is not set for all terminals.
   *
   * @get result
   * @var null|string
   */
  public $ip_terminal = null;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Location key.
   *
   * @get result
   * @post post
   * @var string
   */
  public $k_location = '';

  /**
   * Terminal key.
   *
   * `null` in case when create new terminal.
   *
   * @delete get
   * @get get
   * @post get,result
   * @var string|null
   */
  public $k_terminal = null;

  /**
   * Registration code.
   *
   * `null` in case when add terminal is not ethernet model.
   *
   * We do not save this field into database as of now.
   *
   * @post post
   * @var string|null
   */
  public $s_registration_code = null;

  /**
   * Serial number. `null` in case when add terminal is ethernet model.
   *
   * @post post
   * @var string|null
   */
  public $s_serial_number = null;

  /**
   * Terminal id, received from Stripe on frontend.
   * Not null only when the request is from the staff application and only for BT readers.
   *
   * @post post
   * @var string|null
   */
  public $s_terminal_id = null;

  /**
   * Label of the terminal.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_label = '';

  /**
   * Location name.
   *
   * `null` in case when not initialized yet.
   *
   * @get result
   * @var string|null
   */
  public $text_location = null;
}

?>