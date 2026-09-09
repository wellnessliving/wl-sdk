<?php

namespace WellnessLiving\Thoth\ReportCore\Generator;

/**
 * Lists types of businesses for which a report can be generated.
 */
class ReportAccessBusinessSid
{
  /**
   * This report can be generated both system-widely and for individual businesses.
   */
  const BOTH = 1;

  /**
   * This report can ony be generated for individual businesses, but not system-widely.
   */
  const INDIVIDUAL = 2;

  /**
   * This report can ony be generated system-widely, but not for individual businesses.
   */
  const SYSTEM = 3;
}

?>