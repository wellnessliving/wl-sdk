<?php

namespace WellnessLiving\Core\Google\Captcha;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint for validating and overriding the score for {@link CaptchaVersionSid::V3} captcha.
 *
 * @method WlModelRequest get() Returns the overridden score for the reCAPTCHA v3.  Returns the current session-level score override value that was set via the PUT method. Requires reCAPTCHA v3 to be enabled; throws an exception otherwise.
 * @method WlModelRequest post() Validates the reCAPTCHA v3 token.  Accepts a reCAPTCHA v3 user token, sends it to Google for verification, and returns a response ID indicating the outcome. Note that each token can only be validated once; a new token must be generated for subsequent requests.
 * @method WlModelRequest put() Overrides the score for the reCAPTCHA v3.  Sets a custom score value in the range 0.0-1.0 to override the actual reCAPTCHA v3 score for the current session. Pass `null` to clear the override and restore the default behavior. Requires the score override feature to be enabled.
 */
class CaptchaScoreModel extends WlModelAbstract
{
  /**
   * Overridden score value for V3 captcha.
   *
   * `null` to reset override.
   *
   * @get result
   * @put post
   * @var float|null
   */
  public $f_score = null;

  /**
   * Captcha response ID.
   *
   * @post result
   * @var int
   * @see CaptchaResponseSid
   */
  public $id_response;

  /**
   * The user token CAPTCHA from {@link CaptchaVersionSid::V3} captcha.
   *
   * Be careful when use this endpoint for validate token, because token can be used only once,
   * so if you validate token in this endpoint, you must generate new token for next requests.
   *
   * @post get
   * @var string
   */
  public $text_token = '';
}

?>