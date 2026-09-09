<?php

namespace WellnessLiving\Wl\Integration\Custom;

use WellnessLiving\Wl\Gender\GenderSid;

/**
 * A list of attributes with user information that can be returned by a custom service provider.
 *
 * Last used id: 11.
 */
class AttributeTypeSid
{
  /**
   * Business ID.
   */
  const BUSINESS_ID = 5;

  /**
   * Business name.
   */
  const BUSINESS_NAME = 6;

  /**
   * User's email.
   */
  const EMAIL = 3;

  /**
   * User's first name.
   */
  const FIRST_NAME = 1;

  /**
   * User's last name.
   */
  const LAST_NAME = 2;

  /**
   * User's photo.
   */
  const PHOTO = 4;

  /**
   * Staff biography.
   */
  const STAFF_BIOGRAPHY = 7;

  /**
   * User's time zone.
   */
  const TIME_ZONE = 8;

  /**
   * User's id gender. One of {@link GenderSid}
   */
  const USER_ID_GENDER = 11;

  /**
   * User's role. Result of function {@link \rs_login_role()}
   */
  const USER_LOGIN_ROLE = 10;

  /**
   * User's uid.
   */
  const USER_UID = 9;
}

?>