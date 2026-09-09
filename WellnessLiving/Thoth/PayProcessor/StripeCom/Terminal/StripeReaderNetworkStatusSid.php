<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom\Terminal;

/**
 * Stripe networking statuses of the reader.
 *
 * @link https://stripe.com/docs/api/terminal/readers/list?lang=php#list_terminal_reader-status
 *
 * Last used id: 2.
 */
class StripeReaderNetworkStatusSid
{
  /**
   * Offline reader status.
   */
  const OFFLINE = 2;

  /**
   * Online reader status.
   */
  const ONLINE = 1;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.StripeCom.Terminal.StripeReaderNetworkStatusSid';
}

?>