<?php

namespace WellnessLiving\Wl\Business\Import\Config;

/**
 * List of modules which you can turn off during import.
 */
class Sid
{
  /**
   * Prevents to create and edit appointments.
   * Forbidden to edit:
   * <ul>
   * <li>Service name</li>
   * <li>Activation status</li>
   * <li>Duration</li>
   * <li>Appointment category</li>
   * </ul>
   */
  const APPOINTMENT = 1;

  /**
   * Prevents to create and edit assets.
   * Forbidden to edit:
   * <ul>
   * <li>Asset name</li>
   * <li>Activation status</li>
   * </ul>
   */
  const ASSET = 2;

  /**
   * Prevents to create and edit classes.
   * Forbidden to edit:
   * <ul>
   * <li>Class name</li>
   * <li>Activation status</li>
   * </ul>
   */
  const CLASSES = 3;

  /**
   * Prevents to create and edit events.
   * Forbidden to edit:
   * <ul>
   * <li>Event name</li>
   * <li>Activation status</li>
   * </ul>
   */
  const EVENT = 4;

  /**
   * Prevents to create and edit locations.
   * Forbidden to edit:
   * <ul>
   * <li>Location name</li>
   * <li>Activation status</li>
   * </ul>
   */
  const LOCATION = 5;

  /**
   * Prevents to create and edit schedule.
   */
  const SCHEDULE = 6;

  /**
   * Prevents to create and edit staff.
   * Forbidden to edit:
   * <ul>
   * <li>Staff name</li>
   * <li>Activation status</li>
   * <li>Staff association to locations</li>
   * <li>Staff role</li>
   * </ul>
   */
  const STAFF = 7;

  /**
   * Prevents to create and edit promotions.
   * Forbidden to edit:
   * <ul>
   * <li>Purchase option name</li>
   * <li>Activation status</li>
   * <li>Number of visits</li>
   * <li>Price</li>
   * <li>Clients will make auto-payments every ...</li>
   * <li>Clients will pay ...</li>
   * <li>Duration</li>
   * <li>Activation date</li>
   * <li>Access to locations</li>
   * <li>Access to classes</li>
   * <li>Access to events</li>
   * <li>Access to gym</li>
   * <li>Attendance restrictions</li>
   * <li>What is included in the package</li>
   * </ul>
   */
  const STORE = 8;

  /**
   * Enabling this option results in the appearance of a special popup message at the bottom of the screen.
   */
  const WARNING = 9;
}

?>