<?php

namespace WellnessLiving\Thoth\PayProcessor\Terminal;

/**
 * List of supported terminal interaction types.
 * Note: this list is rather internal Wellnessliving application list rather than common-known list. Each of types
 * determines the way how we interact with terminal on application level.
 */
class TerminalTypeSid
{
  /**
   * Magtek USB.
   * This type of terminal does not require registration on Hardware page.
   */
  const MAGTEK_USB = 1;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.Terminal.TerminalTypeSid';
}

?>