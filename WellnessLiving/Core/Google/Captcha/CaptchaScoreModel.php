<?php

namespace WellnessLiving\Core\Google\Captcha;

use WellnessLiving\WlModelAbstract;

/**
 * Endpoint for validating and overriding the score for {@link CaptchaVersionSid::V3} captcha.
 */
class CaptchaScoreModel extends WlModelAbstract
{
  /**
   * Overridden score value for {@link CaptchaVersionSid::V3} captcha.
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