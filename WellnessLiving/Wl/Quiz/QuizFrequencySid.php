<?php

namespace WellnessLiving\Wl\Quiz;

/**
 * List of quiz frequency types.
 */
class QuizFrequencySid
{
  /**
   * Client will be asked to complete the quiz every time they book a service or purchase item.
   */
  const EVERY = 1;

  /**
   * Client will be asked to complete the quiz the first time they book a service or purchase item.
   */
  const FIRST = 2;

  /**
   * Client will be asked to complete the quiz only one time when they book a service or purchase item.
   */
  const ONCE = 3;
}

?>