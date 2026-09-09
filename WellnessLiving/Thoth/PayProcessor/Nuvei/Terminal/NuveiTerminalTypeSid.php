<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei\Terminal;

use WellnessLiving\Wl\WlPayProcessorSid;

/**
 * List of {@link WlPayProcessorSid::NUVEI} supported terminal types.
 */
class NuveiTerminalTypeSid
{
  /**
   * Magtek USB.
   * This type of terminal does not require registration on Hardware page.
   */
  const MAGTEK_USB = 1;

  /**
   * Card terminals that work via OMNI Channel API.
   * Requires registration on Hardware page.
   *
   * See Nuvei/doc/OMNI_Channel_ISO20022_V2.38.pdf
   */
  const OMNICHANNEL = 2;
}

?>