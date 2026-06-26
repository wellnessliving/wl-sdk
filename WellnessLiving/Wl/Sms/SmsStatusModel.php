<?php

namespace WellnessLiving\Wl\Sms;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API that returns the status of the SMS system.
 *
 * @method WlModelRequest get() Returns information about SMS settings.
 */
class SmsStatusModel extends WlModelAbstract
{
  /**
   * Indicates if business phone number configured.
   *
   * @get result
   * @var bool
   */
  public $has_sms_number = false;

  /**
   * Indicates if the A2P10DLC registration for this business needs to be completed now.
   *
   * @get result
   * @var bool
   */
  public $is_a2p_registration_due = false;

  /**
   * Indicates if a regulatory bundle submission is required for this business.
   * `true` if the business locale requires a regulatory bundle (UK/Australia) and it has not been submitted yet.
   *
   * @get result
   * @var bool
   */
  public $is_regulatory_bundle_required = false;

  /**
   * Indicates if SMS is enabled for this business. Determines if SMS features are available.
   *
   * @get result
   * @var bool
   */
  public $is_sms_enable = false;

  /**
   * Indicates if SMS notifications are enabled for this business.
   *
   * @get result
   * @var bool
   */
  public $is_sms_notification_enable = false;

  /**
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Returns the message to be displayed when A2P10DLC registration is due for a business and the user attempts to access an SMS feature.
   * `null` if registration is not due.
   *
   * @get result
   * @var string|null
   */
  public $text_a2p_registration_due_message = null;
}

?>