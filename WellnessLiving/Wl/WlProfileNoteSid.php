<?php

namespace WellnessLiving\Wl;

/**
 * Sources of system notes.
 *
 * <h2>How to add a new source of system notes</h2>
 * <ol>
 *   <li>Add a constant to the {@link WlProfileNoteSid} class.</li>
 *   <li>
 *
 *     The class name should be compatible with the constant name.
 *     For example, for the <tt>A_B_C</tt> constant, the following classes will be compatible (in descending order of priority):
 *     <ol>
 *      <li><tt>RsABCNote</tt></li>
 *      <li><tt>\Wl\A\B\CNote</tt></li>
 *      <li><tt>\Wl\A\B\C\Note</tt></li>
 *      <li><tt>\Wl\A\B\C\CNote</tt></li>
 *     </ol>
 *     Also, you can set the class name in see tag of the constant's documentation.
 *     Only one requirement is: the class should exist and path to it should be correct, as an example see {@link WlProfileNoteSid::DOORACCESS_BRIVO_INVITATION_BRIVOINVITATIONPROFILE}.
 *   </li>
 * </ol>
 *
 * Last used ID: 5.
 */
abstract class WlProfileNoteSid
{
  /**
   * A list of clients with not redeemed invitations.
   */
  const DOORACCESS_BRIVO_INVITATION_BRIVOINVITATIONPROFILE = 5;

  /**
   * A list of accounts with invalid progress log.
   */
  const MEMBER_PROGRESS_LOG_PROFILE = 3;

  /**
   * A list of accounts with not verified progress log.
   */
  const MEMBER_PROGRESS_LOG_VERIFICATION = 4;

  /**
   * A list of accounts with negative balance.
   */
  const PAY_ACCOUNT = 1;

  /**
   * A list of due membership payments.
   */
  const PROMOTION_PAY = 2;
}

?>