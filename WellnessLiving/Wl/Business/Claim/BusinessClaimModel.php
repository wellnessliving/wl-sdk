<?php

namespace WellnessLiving\Wl\Business\Claim;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Business trial verification API.
 *
 * @method WlModelRequest get() Checks if the email or phone number has already been used for a trial account or not.  Called during the self-onboarding flow before creating a new business to detect duplicate registrations early. Checks across all data center regions. Rate-limited per IP to prevent abuse.
 * @method WlModelRequest post() Completes the verification process of the trial business.  Used by WellnessLiving staff to confirm a new trial business after reviewing the signup. Marks the business as verified by the approving user. Returns the location microsite URL so the staff member can share it with the new client.
 * @method WlModelRequest put() Saves the Self-Setup wizard form data in the business claim log.  Called at the end of the Self-Setup wizard to store the wizard input for internal auditing. Can only be called once per business after it has been claimed.
 */
class BusinessClaimModel extends WlModelAbstract
{
  /**
   * The Self-Setup wizard form data to be saved in the business claim log.
   *
   * The structure is conditionally arbitrary and is used only for logging purposes.
   * No specific keys are required or validated.
   *
   * @put post
   * @var string[]
   */
  public $a_form = [];

  /**
   * The key of the business to be verified.
   *
   * @post post
   * @put post
   * @var string
   */
  public $k_business = '';

  /**
   * The key of the location to be verified.
   *
   * @post post
   * @var string
   */
  public $k_location = '';

  /**
   * The email address of the location.
   *
   * Urlencoded email address is expected.
   *
   * @get get
   * @var string
   */
  public $text_mail = '';

  /**
   * The phone number of the business, staff and location.
   *
   * Urlencoded phone number is expected.
   *
   * @get get
   * @var string
   */
  public $text_phone = '';

  /**
   * The key of the user who verified the business.
   *
   * @post post
   * @var string
   */
  public $uid_verified = '';

  /**
   * Location microsite URL.
   *
   * @post result
   * @var string|null
   */
  public $url_microsite = null;
}

?>