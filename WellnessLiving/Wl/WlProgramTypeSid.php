<?php

namespace WellnessLiving\Wl;

/**
 * Program types.
 *
 * See {@link WlProgramSid} for a list of promotions.
 *
 * Last used ID: 7.
 *
 * @see WlProgramSid
 */
abstract class WlProgramTypeSid
{
  /**
     * Duration Pass.
     *
     * Differs from {@link WlProgramTypeSid::LIMIT} in that this type of promotion is limited by time.
     *
     *
     */
  const DURATION = 7;

  /**
     * Class pass.
     *
     * Differs from {@link WlProgramTypeSid::PASS} in that this type of promotion allows access to only a limited number
     * of classes.
     *
     *
     */
  const LIMIT = 1;

  /**
     * This promotion is a membership.
     *
     * Payment schedule can be set up for memberships.
     *
     *
     */
  const MEMBERSHIP = 3;

  /**
     * Type for programs that are not presented in {@link WlProgramSid}.
     */
  const OTHER = 6;

  /**
     * Packages and Daily deals.
     *
     * @see WlProgramSid::DEAL
     * @see WlProgramSid::PACKAGE
     */
  const PACKAGE = 4;

  /**
     * Unlimited pass. Day/week/month pass.
     *
     * Allows access to unlimited number of classes.
     *
     * Differs from {@link WlProgramTypeSid::MEMBERSHIP} in that this type of promotion can only be paid once.
     *
     * @see WlProgramTypeSid::LIMIT
     */
  const PASS = 2;

  /**
     * Special WellnessLiving promote passes that allow to visit specific classes to get acquainted with the business.
     *
     * Such passes cannot be bought, they can be only components of the special system packages,
     * packages with <var>k_business</var> = <tt>null</tt>.
     *
     * @see WlProgramSid::CLASS_PROSPECT
     */
  const PROSPECT = 5;
}

?>