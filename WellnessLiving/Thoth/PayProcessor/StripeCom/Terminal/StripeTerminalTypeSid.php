<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom\Terminal;

use WellnessLiving\Wl\WlPayProcessorSid;

/**
 * List of {@link WlPayProcessorSid::STRIPE_COM} supported terminal types.
 */
class StripeTerminalTypeSid
{
  /**
   * Terminals that work via Stripe javascript SDK.
   * Requires registration on Hardware page.
   *
   * @link https://stripe.com/docs/terminal/references/api/js-sdk
   */
  const JS_SDK = 2;

  /**
   * Magtek USB.
   * This type of terminal does not require registration on Hardware page.
   */
  const MAGTEK_USB = 1;
}

?>