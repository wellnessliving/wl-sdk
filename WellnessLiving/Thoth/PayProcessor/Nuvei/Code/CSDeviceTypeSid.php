<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei\Code;

/**
 * CS Device Type code class.
 *
 * Last used ID: 2
 *
 * @link Thoth/PayProcessor/Nuvei/doc/OMNI_Channel_ISO20022_V2.38.pdf 7.3.3.
 */
class CSDeviceTypeSid
{
  /**
   * Indicate the package is initialed from register end.
   */
  const REGISTER_INDENTIFICATION = 1;

  /**
   * Indicate communication is initialed from terminal end.
   */
  const TERMINAL_INDENTIFICATION = 2;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.Nuvei.Code.CSDeviceTypeSid';
}

?>