<?php

namespace WellnessLiving;

/**
 * Program type categories.
 */
class WlProgramCategorySid
{
  /**
   * Purchase options to fill user's account:
   * <ul>
   *   <li>{@link \WellnessLiving\WlProgramSid::::ACCOUNT_PASS}</li>
   * </ul>
   */
  const ACCOUNT = 7;
  
  /**
   * Purchase options to pay for classes, events and enrollments:
   * <ul>
   *   <li>{@link \WellnessLiving\WlProgramSid::CLASS_LIMIT}</li>
   *   <li>{@link \WellnessLiving\WlProgramSid::CLASS_MEMBESHIP}</li>
   *   <li>{@link \WellnessLiving\WlProgramSid::CLASS_PASS}</li>
   * </ul>
   */
  const CLASSES = 1;
  
  /**
   * Packages and daily deals.
   */
  const OTHER = 5;
  
  /**
   * Resource category.
   *
   * This is a category grouped next program sids:
   * <ul>
   *   <li>{@link \WellnessLiving\WlProgramSid::RESOURCE_DURATION}</li>
   *   <li>{@link \WellnessLiving\WlProgramSid::RESOURCE_LIMIT}</li>
   *   <li>{@link \WellnessLiving\WlProgramSid::RESOURCE_MEMBESHIP}</li>
   *   <li>{@link \WellnessLiving\WlProgramSid::RESOURCE_PASS}</li>
   * </ul>
   */
  const RESOURCE = 6;
  
  /**
   * Purchase options to pay for appointments:
   * <ul>
   *   <li>{@link \WellnessLiving\WlProgramSid::SERVICE_LIMIT}</li>
   *   <li>{@link \WellnessLiving\WlProgramSid::SERVICE_MEMBESHIP}</li>
   *   <li>{@link \WellnessLiving\WlProgramSid::SERVICE_PASS}</li>
   * </ul>
   */
  const SERVICE = 3;
  
  /**
   * Purchase options to pay for gym visits:
   * <ul>
   *   <li>{@link \WellnessLiving\WlProgramSid::VISIT_LIMIT}</li>
   *   <li>{@link \WellnessLiving\WlProgramSid::VISIT_MEMBESHIP}</li>
   *   <li>{@link \WellnessLiving\WlProgramSid::VISIT_PASS}</li>
   * </ul>
   */
  const VISIT = 2;
}

?>