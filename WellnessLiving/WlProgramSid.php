<?php

namespace WellnessLiving;

/**
 * Program types.
 */
class WlProgramSid
{
  /**
   * Special Membership that does not allow client to visit anything but fill client's account after purchase
   * and after renew.
   */
  public const ACCOUNT_MEMBERSHIP = 21;

  /**
   * Special Time-Based pass that does not allow client to visit anything but fill client's account after purchase
   * and after renew.
   */
  public const ACCOUNT_PASS = 20;

  /**
   * Class Pass.
   */
  public const CLASS_LIMIT = 1;

  /**
   * Class Membership.
   */
  public const CLASS_MEMBERSHIP = 5;

  /**
   * Class Time-Based pass.
   */
  public const CLASS_PASS = 6;

  /**
   * WellnessLiving Promotion.
   */
  public const CLASS_PROSPECT = 4;

  /**
   * Daily Deal Integration: not for sale, only redemption codes.
   */
  public const DEAL = 7;

  /**
   * Enrollment.
   */
  public const ENROLLMENT = 14;

  /**
   * "Wellness Program" membership.
   */
  public const INSURANCE_MEMBERSHIP = 22;

  /**
   * Package.
   */
  public const PACKAGE = 3;

  /**
   * Resource Duration Pass.
   */
  public const RESOURCE_DURATION = 19;

  /**
   * Resource Limit Pass.
   */
  public const RESOURCE_LIMIT = 15;

  /**
   * Resource Membership.
   */
  public const RESOURCE_MEMBERSHIP = 16;

  /**
   * Resource Time-Based pass.
   */
  public const RESOURCE_PASS = 17;

  /**
   * Appointment Duration Pass.
   */
  public const SERVICE_DURATION = 18;

  /**
   * Appointment session pass.
   */
  public const SERVICE_LIMIT = 11;

  /**
   * Appointment membership.
   */
  public const SERVICE_MEMBERSHIP = 12;

  /**
   * Appointment Time-Based pass.
   */
  public const SERVICE_PASS = 13;

  /**
   * Gym Pass.
   */
  public const VISIT_LIMIT = 8;

  /**
   * Gym Membership.
   */
  public const VISIT_MEMBERSHIP = 9;

  /**
   * Gym Time-Based pass.
   */
  public const VISIT_PASS = 10;
}

?>