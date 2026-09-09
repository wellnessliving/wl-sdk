<?php

namespace WellnessLiving\Wl\Business\Config;

/**
 * Location to be selected in the online store by default.
 * It is used in Setup -> Store configuration -> Store Settings.
 *
 * Last used id: 3.
 */
class LocationDefaultSid
{
  /**
   * No location is selected by default.
   *
   * @title no location
   */
  const BLANK = 1;

  /**
   * The client's home location is selected by default.
   *
   * @title the client's home location
   */
  const CLIENT = 3;

  /**
   *<tt>is_location_select</tt> is `false` -
   * option is turned-off.
   */
  const OPTION_OFF = 4;

  /**
   * The staff's home location is selected by default.
   *
   * @title the staff member's current location
   */
  const STAFF = 2;
}

?>