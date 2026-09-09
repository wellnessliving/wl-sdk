<?php

namespace WellnessLiving\Wl;

use WellnessLiving\Wl\Field\WlFieldGeneralSid;

/**
 * Mailchimp system fields.
 *
 * @deprecated This class is scheduled for removal.
 *   Use {@link WlFieldGeneralSid} instead.
 */
abstract class RsEmlMailchimpFieldSystemSid
{
  /**
   * Street address.
   */
  const ADDRESS = 8;

  /**
   * Birthday date.
   *
   * Stored in <tt>passport_info.dt_birthday</tt>.
   */
  const BIRTHDAY = 2;

  /**
   * Last name.
   */
  const FAMILY = 4;

  /**
   * Gender.
   */
  const GENDER = 7;

  /**
   * E-Mail address.
   */
  const MAIL = 5;

  /**
   * Member ID.
   *
   * Stored in <tt>rs_login_member.s_member</tt>.
   */
  const MEMBER = 1;

  /**
   * First name;
   */
  const NAME = 3;

  /**
   * Phone number.
   */
  const PHONE = 6;
}

?>