<?php

namespace WellnessLiving\Wl\Book\Process;

/**
 * Event booking process sid class
 *
 * Last used ID: 12.
 */
abstract class ProcessSpaSid
{
  /**
     * Step "Class details".
     *
     * Special step - a container for combining other steps.
     *
     * This constant has been added to the SID class to match the steps interface in JS.
     *
     * Adding a step to the queue is done on the client side (in JS).
     *
     *
     *
     * Designed for Client Web View.
     */
  const DETAIL = 10;

  /**
     * Step "Documents".
     *
     * Special step - a container for combining other steps.
     *
     * This constant has been added to the SID class to match the steps interface in JS
     *
     * Adding a step to the queue is done on the client side (in JS).
     *
     * The list of steps that can be displayed on:
     *  * {@link ProcessSpaSid::QUIZ}
     *  * Purchase options contract
     *
     * Designed for Client Web View.
     */
  const DOCUMENT = 8;

  /**
     * Step "Frequency".
     * It is necessary to select booking frequency.
     *
     * Designed for Client Web View.
     */
  const FREQUENCY = 9;

  /**
     * Information about the class.
     *
     * In the SPA app, this step combines the following steps:
     * * {@link ProcessSpaSid::FREQUENCY}
     * * {@link ProcessSpaSid::SESSION}
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
     * Quizzes attached to the class.
     */
  const QUIZ = 7;

  /**
     * Booking for.
     */
  const RELATION = 12;

  /**
     * Selection of assets.
     */
  const RESOURCE = 6;

  /**
     * Session selection step for a session event.
     *
     * Designed for Client Web View.
     */
  const SESSION = 11;

  /**
     * A list of possible Purchase Options to be bought.
     */
  const STORE = 3;
}

?>