<?php

namespace WellnessLiving\Core\Captcha;

use WellnessLiving\Core\Google\Captcha\CaptchaVersionSid;

/**
 * List of captcha modes.
 */
class CaptchaModeSid
{
  /**
   * Always mode.
   * Example: Each captcha should always be shown.
   *
   * Always use {@link CaptchaVersionSid::V2}.
   */
  const ALWAYS = 1;

  /**
   * Default captcha mode.
   * Example: Each captcha should be shown based on internal logic.
   *
   * Always use {@link CaptchaVersionSid::V2}.
   */
  const DEFAULT = 2;

  /**
   * Two-phase mode.
   *
   * This mode like {@link CaptchaModeSid::ALWAYS}, but work in two phases:
   * 1. First phase: show captcha {@link CaptchaVersionSid::V3}.
   *
   *    In other cases we go to second phase.
   * 2. Second phase: show captcha {@link CaptchaVersionSid::V2}.
   */
  const TWO_PHASE = 3;

  /**
   * Same as {@link CaptchaModeSid::TWO_PHASE}, but first phase is optional.
   */
  const TWO_PHASE_OPTIONAL = 4;
}

?>