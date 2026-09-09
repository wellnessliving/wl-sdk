<?php

namespace WellnessLiving\Thoth\PayProcessor\ProcessorInterface;

/**
 * Actor that has initiated the payment transaction.
 */
class PayProcessorActorSid
{
  /**
   * Transaction was initiated by a bot.
   */
  const BOT = 3;

  /**
   * Transaction was initiated by a staff member.
   */
  const STAFF = 2;

  /**
   * Transaction was initiated by a user.
   */
  const USER = 1;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.ProcessorInterface.PayProcessorActorSid';
}

?>