<?php

namespace WellnessLiving\Wl\Book\Process;

/**
 * Event booking process sid class
 *
 * Last used ID: 6.
 */
abstract class ProcessSpaSid
{
  /**
   * Information about the class.
   */
  const INFO = 2;

  /**
   * Installment selection.
   */
  const INSTALLMENT = 4;

  /**
   * Sign in, Sign up, fill in all necessary account data.
   */
  const PASSPORT = 1;

  /**
   * Card data and the booking confirmation.
   */
  const PAYMENT = 5;

  /**
   * A selection of assets.
   */
  const RESOURCE = 6;

  /**
   * A list of possible Purchase Options to be bought.
   */
  const STORE = 3;
}

?>