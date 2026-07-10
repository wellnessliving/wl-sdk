<?php

namespace WellnessLiving\Wl\Passport\Login\Enter;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point to verify user authorization by email and phone number via sending and checking otp code.
 *
 * @method WlModelRequest get() Sends an OTP code to the user's email or phone number to initiate authorization.  Checks the OTP rate limit, generates a new code for the given user, and dispatches it according to the chosen delivery strategy. The user must not be already signed in and must not be an admin.  There are two ways to specify the delivery channel:  **1. Broadcast strategy** (default)  Set {@link \Wl\Passport\Login\Enter\PassportOtpApi::$id_delivery_strategy} to `null` or {@link \Wl\Passport\Login\Enter\OtpDeliveryStrategyEnum::BROADCAST} (or omit it entirely). Use {@link \Wl\Passport\Login\Enter\PassportOtpApi::$is_mail} and/or {@link \Wl\Passport\Login\Enter\PassportOtpApi::$is_phone} to specify which channels to use. At least one of them must be `true`; the OTP is sent to every channel that is enabled. The user must have a corresponding contact — a phone number when {@link \Wl\Passport\Login\Enter\PassportOtpApi::$is_phone} is `true`, an email when {@link \Wl\Passport\Login\Enter\PassportOtpApi::$is_mail} is `true` — otherwise an error is thrown.  Example: set {@link \Wl\Passport\Login\Enter\PassportOtpApi::$is_mail} to `true` and {@link \Wl\Passport\Login\Enter\PassportOtpApi::$is_phone} to `true` to send OTP via both email and SMS simultaneously.  **2. Priority strategy**  Set {@link \Wl\Passport\Login\Enter\PassportOtpApi::$id_delivery_strategy} to {@link \Wl\Passport\Login\Enter\OtpDeliveryStrategyEnum::PRIORITY}. Provide {@link \Wl\Passport\Login\Enter\PassportOtpApi::$text_delivery_priority} — a comma-separated list of `sms` and `email` values in the preferred order, e.g. `"sms,email"`. The system picks the first channel from the list for which the user has valid contact data and sends the OTP only to that one channel. The selected channel is returned in {@link \Wl\Passport\Login\Enter\PassportOtpApi::$text_delivery_selected}; when SMS is selected, the last four digits of the phone are returned in {@link \Wl\Passport\Login\Enter\PassportOtpApi::$text_phone_masked}. If none of the listed channels can be used, an error is thrown.  Example: set {@link \Wl\Passport\Login\Enter\PassportOtpApi::$text_delivery_priority} set to `sms,email` to prefer SMS but fall back to email if the user has no phone number.
 * @method WlModelRequest post() Verifies the submitted OTP code and establishes an authorized session for the user.  Validates the OTP code for the given user, signs in the session, fires the post-login event, completes business registration if applicable, and returns the redirect URL for the business frontend.
 */
class PassportOtpModel extends WlModelAbstract
{
  /**
   * Number of attempts left to submit the correct otp code.
   *
   * @post result
   * @var int
   */
  public $i_attempt_left = 0;

  /**
   * @get get
   * @var int|null
   */
  public $id_delivery_strategy = null;

  /**
   * Whether OTP code will be sending to user via email.
   * `true` if OTP code is sending through email,
   * `false` if OTP code is sending through phone number.
   *
   * @get get
   * @var bool
   */
  public $is_mail = false;

  /**
   * Whether OTP code will be sending to user via email.
   *  `true` if OTP code is sending through phone number,
   *  `false` if OTP code is sending through email.
   *
   * @get get
   * @var bool
   */
  public $is_phone = false;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Otp code integer that was random generated.
   *
   * @post post
   * @var string
   */
  public $s_otp_code = '';

  /**
   * Priority of delivery.
   *
   * Fixed values `sms` and `email` are supported.
   * Should be given in priority order comma-separated.
   *
   * @get get
   * @var string
   */
  public $text_delivery_priority = '';

  /**
   * Delivery channel that was selected based on the given priorities and user data.
   *
   * Fixed values `sms` and `email` are supported. Only one value is returned.
   *
   * @get result
   * @var string
   */
  public $text_delivery_selected = '';

  /**
   * Phone number masked with `*` symbols in case if we have priority sending and sms sending was selected.
   *
   * @get result
   * @var string
   */
  public $text_phone_masked = '';

  /**
   * User key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '';

  /**
   * Redirect url after successful authorization.
   *
   * @post result
   * @var string
   */
  public $url_redirect = '';
}

?>