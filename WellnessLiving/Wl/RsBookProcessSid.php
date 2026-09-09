<?php

namespace WellnessLiving\Wl;

use WellnessLiving\Wl\Book\Process\ProcessSpaSid;

/**
 * List of steps to be passed by the client to book a class.
 *
 * Last used ID: 7
 *
 * @deprecated Use {@link ProcessSpaSid} class instead.
 */
abstract class RsBookProcessSid
{
  /**
   * Contracts attached to purchase options.
   */
  const CONTRACT = 6;

  /**
   * Information about the class.
   */
  const INFO = 2;

  /**
   * Sign in, Sign up, fill in all necessary account data.
   */
  const PASSPORT = 1;

  /**
   * Card data and confirming the book.
   */
  const PAYMENT = 5;

  /**
   * List of chosen purchase options with total sum to pay.
   */
  const PURCHASE = 4;

  /**
   * Quizzes attached to the class.
   */
  const QUIZ = 7;

  /**
   * List of possible purchase options to be bought.
   */
  const STORE = 3;
}

?>