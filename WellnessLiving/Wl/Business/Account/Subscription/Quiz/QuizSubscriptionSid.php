<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Quiz;

/**/
abstract class QuizSubscriptionSid
{
  /**
   * @price-month 0.00
   * @rate 2
   * @title Business
   */
  const BUSINESS = 3;

  /**
   * @default
   * @inactive
   * @rate 0
   * @title None
   */
  const FREE = 1;

  /**
   * @price-alarm 49.00
   * @price-month 49.00
   * @rate 3
   * @title Professional
   */
  const PROFESSIONAL = 2;

  /**
   * @price-month 0.00
   * @rate 1
   * @title Starter
   */
  const STARTER = 4;
}

?>