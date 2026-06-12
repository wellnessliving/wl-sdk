<?php

namespace WellnessLiving\Core\Captcha;

use WellnessLiving\WlModelAbstract;

/**
 * Checks if a CAPTCHA is required.
 */
class CaptchaRequireModel extends WlModelAbstract
{
  /**
   * Arguments for creating CAPTCHA object.
   *
   * Parameters for BusinessPaymentCaptcha:
   * <dl>
   *   <dt>string|null `k_business`</dt>
   *   <dd>Business key. <tt>null</tt> if system business.</dd>
   * </dl>
   * 
   * Parameters for ReviewCaptcha:
   * <dl>
   *   <dt>string|null `k_business`</dt>
   *   <dd>Business key. `null` if is system business.</dd>
   * </dl>
   * 
   * Parameters for LeadCaptcha:
   * <dl>
   *   <dt>string|null `k_business`</dt>
   *   <dd>Business key. `null` if is system business.</dd>
   * </dl>
   * 
   * Parameters for RegisterCaptcha:
   * <dl>
   *   <dt>string|null `k_business`</dt>
   *   <dd>Business key. `null` if is system business.</dd>
   * </dl>
   * 
   * Parameters for BusinessSearchCaptcha:
   * <dl>
   *   <dt>bool `is_search`</dt>
   *   <dd>
   *     Flag to determine is it a search action or no. If search action is `true` it increments
   *
   *   </dd>
   * </dl>
   * @get get
   * @var array
   */
  public $a_arguments = [];

  /**
   * The CID of the CAPTCHA.
   *
   * @get get
   * @var int
   */
  public $cid_captcha = 0;

  /**
   * `true` to always require CAPTCHA, `false` to reset to default.
   *
   * `null` means no change.
   *
   * @put post
   * @var bool|null
   */
  public $is_always_override = null;

  /**
   * `true` if enabled V3 captcha enabled.
   * `false` if only V2 captcha enable.
   *
   * @get result
   * @var bool
   */
  public $is_enable_v3 = false;

  /**
   * This will be `true` if a CAPTCHA is required. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_require = false;

  /**
   * `true` to temporarily disable CAPTCHA requirement for the current session, `false` to reset to default.
   *
   * `null` means no change.
   *
   * @put post
   * @var bool|null
   */
  public $is_temporary_disable = null;
}

?>