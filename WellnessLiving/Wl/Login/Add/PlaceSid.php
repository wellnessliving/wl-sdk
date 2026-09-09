<?php

namespace WellnessLiving\Wl\Login\Add;

/**
 * Possible places where user can be created.
 *
 * Last used ID: 7.
 */
class PlaceSid
{
  /**
   * Add new client through appointment edit page. (Backend).
   */
  const APPOINTMENT = 1;

  /**
   * Add new client on through attendance list. (Backend)
   */
  const ATTENDANCE = 2;

  /**
   * Add client through business url. (Frontend)
   */
  const BUSINESS = 7;

  /**
   * Add client through login create page. (Backend)
   */
  const LOGIN = 3;

  /**
   * Add new client on Self-Registration page. (Backend/Frontend)
   */
  const SELF = 4;

  /**
   * Add new client when create staff. (Backend)
   */
  const STAFF = 5;

  /**
   * Add new client through the store. (Backend)
   */
  const STORE = 6;
}

?>