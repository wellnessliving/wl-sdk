<?php

namespace WellnessLiving;

/**
 * Program type categories.
 */
class RsProgramCategorySid
{
  /**
   * Purchase options to fill user's account:
   * <ul>
   *   <li>{@link \RsProgramSid::ACCOUNT_PASS}</li>
   * </ul>
   */
  const ACCOUNT = 7;
  
  /**
   * Purchase options to pay for classes, events and enrollments:
   * <ul>
   *   <li>{@link \RsProgramSid::CLASS_LIMIT}</li>
   *   <li>{@link \RsProgramSid::CLASS_MEMBESHIP}</li>
   *   <li>{@link \RsProgramSid::CLASS_PASS}</li>
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
   *   <li>{@link \RsProgramSid::RESOURCE_DURATION}</li>
   *   <li>{@link \RsProgramSid::RESOURCE_LIMIT}</li>
   *   <li>{@link \RsProgramSid::RESOURCE_MEMBESHIP}</li>
   *   <li>{@link \RsProgramSid::RESOURCE_PASS}</li>
   * </ul>
   */
  const RESOURCE = 6;
  
  /**
   * Purchase options to pay for appointments:
   * <ul>
   *   <li>{@link \RsProgramSid::SERVICE_LIMIT}</li>
   *   <li>{@link \RsProgramSid::SERVICE_MEMBESHIP}</li>
   *   <li>{@link \RsProgramSid::SERVICE_PASS}</li>
   * </ul>
   */
  const SERVICE = 3;
  
  /**
   * Purchase options to pay for gym visits:
   * <ul>
   *   <li>{@link \RsProgramSid::VISIT_LIMIT}</li>
   *   <li>{@link \RsProgramSid::VISIT_MEMBESHIP}</li>
   *   <li>{@link \RsProgramSid::VISIT_PASS}</li>
   * </ul>
   */
  const VISIT = 2;
}

?>