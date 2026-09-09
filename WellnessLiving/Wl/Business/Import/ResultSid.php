<?php

namespace WellnessLiving\Wl\Business\Import;

/**
 * List of possible results of business import row.
 *
 * Last used ID: 5.
 */
abstract class ResultSid
{
  /**
   * Business type of imported business does not exist in the system.
   */
  const BUSINESS_TYPE_NX = 4;

  /**
   * Business exist but business type different so type of business was updated.
   */
  const BUSINESS_TYPE_UPDATE = 5;

  /**
   * Business was successfully created.
   */
  const CREATE = 1;

  /**
   * Business exist and was not imported.
   */
  const EXIST = 2;

  /**
   * There was errors while import so business was not imported.
   */
  const IGNORE = 3;
}

?>