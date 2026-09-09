<?php

namespace WellnessLiving\Studio\Report\EstimateEffort;

/**
 * Represents effort type identifiers related to development and code review.
 */
class EffortLoadSid
{
  /**
   * Developer code.
   * Represents efforts related to writing code by a developer.
   */
  const DEVELOPER_CODE = 1;

  /**
   * Developer review.
   * Represents efforts related to code review by a developer.
   */
  const DEVELOPER_REVIEW = 2;

  /**
   * Frontend code.
   * Represents efforts related to writing frontend code.
   */
  const FRONT_CODE = 3;

  /**
   * Frontend review.
   * Represents efforts related to reviewing frontend code.
   */
  const FRONT_REVIEW = 4;

  /**
   * Other efforts.
   * Represents efforts not related to development or code review.
   */
  const OTHER = 5;
}

?>