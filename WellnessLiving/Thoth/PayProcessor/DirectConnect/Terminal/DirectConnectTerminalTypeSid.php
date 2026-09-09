<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect\Terminal;

use WellnessLiving\Wl\WlPayProcessorSid;

/**
 * List of {@link WlPayProcessorSid::DIRECT_CONNECT} supported terminal types.
 */
class DirectConnectTerminalTypeSid
{
  /**
   * EMV card terminals that work via Paragon Purecloud API.
   * Requires registration on Hardware page.
   *
   * @link https://docs.paragonsolutions.com/purecloud/Version/latest/PUREcloud%20Integration%20Guide.pdf
   */
  const PURE_CLOUD = 2;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.DirectConnect.Terminal.DirectConnectTerminalTypeSid';
}

?>