<?php

namespace WellnessLiving\Thoth\WlPay\Form\Terminal;

/**
 * Swipe process status sid class.
 * Used on fronted side.
 */
class TerminalSwipeStatusSid
{
  /**
   * Error occurs while card swiped.
   */
  const ERROR = 1;

  /**
   * Swipe process running.
   */
  const IN_PROGRESS = 2;

  /**
   * Initial state. Swipe process not running.
   */
  const NONE = 3;

  /**
   * Swipe process successfully finished.
   */
  const SUCCESS = 4;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Form.Terminal.TerminalSwipeStatusSid';
}

?>