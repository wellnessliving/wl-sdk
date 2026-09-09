<?php

namespace WellnessLiving\Thoth\ReportCore\QueryEngine\Registry;

/**
 * Controls which records are included in the result based on their `is_active` flag.
 */
class ReportQueryRecordStatusSid
{
  /**
   * Only active records (`is_active = 1`).
   *
   * @title Active
   */
  const ACTIVE = 1;

  /**
   * All records regardless of status.
   *
   * @title All
   */
  const ALL = 2;

  /**
   * Only inactive records (`is_active = 0`).
   *
   * @title Inactive
   */
  const INACTIVE = 3;
}

?>