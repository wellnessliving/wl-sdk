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
   * Card data and confirming the book.
   */
  const PAYMENT = 5;

  /**
   * Selection of assets.
   */
  const RESOURCE = 6;

  /**
   * List of possible purchase options to be bought.
   */
  const STORE = 3;
}

?>