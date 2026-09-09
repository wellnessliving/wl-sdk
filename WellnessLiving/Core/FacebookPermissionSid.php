<?php

namespace WellnessLiving\Core;

/**
 * Constant names are matched to the Facebook privilege names.
 *
 * Last used ID: 8
 *
 * @link https://developers.facebook.com/docs/permissions/reference A complete list of permissions and their descriptions.
 */
abstract class FacebookPermissionSid
{
  /**
   * Provides access to the user's primary email address in the email property.
   *
   * @link https://developers.facebook.com/docs/permissions/reference/email
   */
  const EMAIL = 1;

  /**
   * Provides access to the public fields of user profiles.
   *
   * @link https://developers.facebook.com/docs/permissions/reference/public_profile
   */
  const PUBLIC_PROFILE = 8;

  /**
   * Provides access to the user birthday.
   *
   * @link https://developers.facebook.com/docs/permissions/reference/user_birthday
   */
  const USER_BIRTHDAY = 4;

  /**
   * Provides access to a users`s gender.
   *
   * @link https://developers.facebook.com/docs/permissions/reference/user_gender
   */
  const USER_GENDER = 5;

  /**
   * Provides access to the Facebook profile URL.
   *
   * @link https://developers.facebook.com/docs/permissions/reference/user_link
   */
  const USER_LINK = 6;

  /**
   * Provides access to a users's current city through the location field on the User object.
   * The current city is set by a person on their Profile.
   *
   * @link https://developers.facebook.com/docs/permissions/reference/user_location
   */
  const USER_LOCATION = 7;
}

?>