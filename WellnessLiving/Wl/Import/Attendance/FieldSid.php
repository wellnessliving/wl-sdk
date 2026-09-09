<?php

namespace WellnessLiving\Wl\Import\Attendance;

/**
 * List of files that user can upload to import attendance.
 *
 * @id-last 11
 */
abstract class FieldSid
{
  /**
   * Client's birthday date.
   */
  const BIRTHDAY = 9;

  /**
   * Class name.
   */
  const CLASSES = 4;

  /**
   * Client name.
   */
  const CLIENT = 1;

  /**
   * A date of class period.
   */
  const DATE = 2;

  /**
   * Location name.
   */
  const LOCATION = 10;

  /**
   * User membership.
   */
  const MEMBERSHIP = 7;

  /**
   * Connected to the class schedule resource in share-usage mode. For example, room.
   *
   * Resource should be previously selected on the class edit form, as usable for this class.
   */
  const RESOURCE = 11;

  /**
   * Staff name.
   */
  const STAFF = 5;

  /**
   * Visit status.
   */
  const STATUS = 6;

  /**
   * Start date of the class period.
   */
  const TIME_END = 8;

  /**
   * Start date of the class period.
   */
  const TIME_START = 3;
}

?>