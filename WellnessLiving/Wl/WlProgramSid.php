<?php

namespace WellnessLiving\Wl;

/**
 * Program types.
 *
 * Usually type includes type and category.
 *
 * Last used ID: 23.
 *
 * @see WlProgramCategorySid
 * @see WlProgramTypeSid
 */
abstract class WlProgramSid
{
  /**
     * Special Membership that does not allow client to visit anything but fill client's account after purchase
     * and after renew.
     */
  const ACCOUNT_MEMBERSHIP = 21;

  /**
     * Special Time-Based pass that does not allow client to visit anything but fill client's account after purchase
     * and after renew.
     */
  const ACCOUNT_PASS = 20;

  /**
     * Class Pass.
     */
  const CLASS_LIMIT = 1;

  /**
     * Class Membership.
     */
  const CLASS_MEMBERSHIP = 5;

  /**
     * Class Time-Based pass.
     */
  const CLASS_PASS = 6;

  /**
     * WellnessLiving Promotion.
     */
  const CLASS_PROSPECT = 4;

  /**
     * Daily Deal Integration: not for sale, only redemption codes.
     */
  const DEAL = 7;

  /**
     * Enrollment.
     */
  const ENROLLMENT = 14;

  /**
     * "Wellness Program" membership.
     *
     * @link https://wellnessliving.atlassian.net/browse/WL-23950
     */
  const INSURANCE_MEMBERSHIP = 22;

  /**
     * Package.
     */
  const PACKAGE = 3;

  /**
     * Resource Duration Pass.
     */
  const RESOURCE_DURATION = 19;

  /**
     * Resource Limit Pass.
     */
  const RESOURCE_LIMIT = 15;

  /**
     * Resource Membership.
     */
  const RESOURCE_MEMBERSHIP = 16;

  /**
     * Resource Time-Based pass.
     */
  const RESOURCE_PASS = 17;

  /**
     * Appointment Duration Pass.
     */
  const SERVICE_DURATION = 18;

  /**
     * Appointment session pass.
     */
  const SERVICE_LIMIT = 11;

  /**
     * Appointment membership.
     */
  const SERVICE_MEMBERSHIP = 12;

  /**
     * Appointment Time-Based pass.
     */
  const SERVICE_PASS = 13;

  /**
     * Video Membership.
     */
  const VIDEO_MEMBERSHIP = 23;

  /**
     * Gym Pass.
     */
  const VISIT_LIMIT = 8;

  /**
     * Gym Membership.
     */
  const VISIT_MEMBERSHIP = 9;

  /**
     * Gym Time-Based pass.
     */
  const VISIT_PASS = 10;
}

?>