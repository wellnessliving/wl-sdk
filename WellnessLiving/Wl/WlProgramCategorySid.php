<?php

namespace WellnessLiving\Wl;

/**
 * Program type categories.
 *
 * Last used ID: 9.
 */
abstract class WlProgramCategorySid
{
  /**
   * Purchase options to fill user's account:
   * <ul>
   *   <li>{@link WlProgramSid::ACCOUNT_PASS}</li>
   * </ul>
   */
  const ACCOUNT = 7;

  /**
   * Purchase options to pay for classes, events and enrollments:
   * <ul>
   *   <li>{@link WlProgramSid::CLASS_LIMIT}</li>
   *   <li>{@link WlProgramSid::CLASS_MEMBESHIP}</li>
   *   <li>{@link WlProgramSid::CLASS_PASS}</li>
   *   <li>{@link WlProgramSid::CLASS_PROSPECT}</li>
   * </ul>
   */
  const CLASSES = 1;

  /**
   * Special "Wellness Program" purchase option.
   *
   * @link https://wellnessliving.atlassian.net/browse/WL-23950
   * @see WlProgramSid::INSURANCE_MEMBERSHIP
   */
  const INSURANCE = 8;

  /**
   * Packages and daily deals.
   */
  const OTHER = 5;

  /**
   * Resource category.
   *
   * This is a category grouped next program sids:
   * <ul>
   *   <li>{@link WlProgramSid::RESOURCE_DURATION}</li>
   *   <li>{@link WlProgramSid::RESOURCE_LIMIT}</li>
   *   <li>{@link WlProgramSid::RESOURCE_MEMBESHIP}</li>
   *   <li>{@link WlProgramSid::RESOURCE_PASS}</li>
   * </ul>
   */
  const RESOURCE = 6;

  /**
   * Purchase options to pay for appointments:
   * <ul>
   *   <li>{@link WlProgramSid::SERVICE_LIMIT}</li>
   *   <li>{@link WlProgramSid::SERVICE_MEMBESHIP}</li>
   *   <li>{@link WlProgramSid::SERVICE_PASS}</li>
   * </ul>
   */
  const SERVICE = 3;

  /**
   * Purchase options to pay for videos:<ui>
   *   <li>{@link WlProgramSid::VIDEO_MEMBERSHIP}</li>
   * </ui>
   */
  const VIDEO = 9;

  /**
   * Purchase options to pay for gym visits:
   * <ul>
   *   <li>{@link WlProgramSid::VISIT_LIMIT}</li>
   *   <li>{@link WlProgramSid::VISIT_MEMBESHIP}</li>
   *   <li>{@link WlProgramSid::VISIT_PASS}</li>
   * </ul>
   */
  const VISIT = 2;
}

?>