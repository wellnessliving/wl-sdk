<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect;

/**
 * Types of card presence.
 *
 * Corresponds to <tt>CardPresentType</tt> enumeration in Direct Connect documentation.
 */
class CardPresentSid
{
  /**
   * Card is not present at time of purchase.
   */
  const FALSE = 1;

  /**
   * Card is present at time of purchase.
   */
  const TRUE = 2;

  /**
   * Card presence is unknown at time of purchase.
   */
  const UNKNOWN = 3;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.DirectConnect.CardPresentSid';
}

?>