<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect;

/**
 * A list of Signed Form authorization options.
 */
class CheckAuthFormSid
{
  /**
   * Single payment series.
   */
  const SINGLE_PAYMENT_SERIES = 2;

  /**
   * Until revoked
   */
  const UNTIL_REVOKED = 1;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.DirectConnect.CheckAuthFormSid';
}

?>