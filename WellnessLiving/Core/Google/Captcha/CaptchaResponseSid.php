<?php

namespace WellnessLiving\Core\Google\Captcha;

/**
 * List of responses for Google Captcha token.
 */
class CaptchaResponseSid
{
  /**
   * Token can be verified due to error from Google Captcha.
   */
  const ERROR = 5;

  /**
   * Token is invalid or expired.
   *
   * Used by: {@link CaptchaVersionSid::V2} and {@link CaptchaVersionSid::V3}.
   */
  const INVALID = 1;

  /**
   * Token is valid, but v2 captcha require.
   *
   * Used by {@link CaptchaVersionSid::V3} only.
   */
  const REQUIRE_V2 = 2;

  /**
   * Token is valid.
   *
   * Used by: {@link CaptchaVersionSid::V2} and {@link CaptchaVersionSid::V3}.
   */
  const VALID = 3;

  /**
   * Token is valid but score is risky.
   *
   * Used by {@link CaptchaVersionSid::V3} only.
   */
  const VALID_BLOCK = 4;
}

?>