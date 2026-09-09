<?php

namespace WellnessLiving\Core\Postcard;

/**
 * List of different chances that Postcard can be delivered.
 */
class DeliverySid
{
  /**
   * Address verification was failed and postcard will not be delivered.
   */
  const FAIL = 1;

  /**
   * Address verification was but some data was correct but still postcard will not be delivered.
   */
  const FAIL_PART = 2;

  /**
   * Address was verified with errors but there are big chances that postcard will be delivered.
   */
  const HIGH = 3;

  /**
   * Address was verified with errors and there is a small chance that postcard will be delivered.
   */
  const LOW = 4;

  /**
   * Address was verified and there postcard will be delivered.
   */
  const OK = 5;

  /**
   * Address has not enough data for verification.
   */
  const TRUNCATE = 7;

  /**
   * Address was not verified yet and we can not say whether it valid or not.
   */
  const UNDEFINED = 6;
}

?>