<?php

namespace WellnessLiving\Wl\Field;

/**
 * List of general fields in user's profile.
 *
 * Term "field" is not equal to "input". Field can contain multiple inputs, e.g. "birthday" field contains 3 selects
 * (day, month, year). All fields listed in this sid (except manual fields) have class that process them. Class name
 * has the following pattern: rs.profile.field.[<tt>sid_file</tt>].php
 *
 * Manual fields have only constant in this sid. They have no associated class and processed separately in view, e.g.
 * user email/password field that has its own widget.
 *
 * If you add new field, you must add inputs of this field to controller {@link RsLoginRegisterController} as POST
 * fields.
 *
 * Last used ID: 12.
 */
class WlFieldGeneralSid
{
  /**
   * Set of fields to choose address.
   */
  const ADDRESS = 9;

  /**
   * Set of fields to choose birthday date.
   */
  const BIRTHDAY = 7;

  /**
   * Gender field.
   */
  const GENDER = 8;

  /**
   * Home location.
   */
  const LOCATION = 10;

  /**
   * Block with login information (email and password).
   */
  const LOGIN = 3;

  /**
   * Member ID.
   */
  const MEMBER = 11;

  /**
   * First name.
   */
  const NAME_FIRST = 2;

  /**
   * Last name.
   */
  const NAME_LAST = 1;

  /**
   * Cell phone number.
   */
  const PHONE_CELL = 4;

  /**
   * Home phone number.
   */
  const PHONE_HOME = 5;

  /**
   * Work phone number + ext.
   */
  const PHONE_WORK = 6;

  /**
   * Referred by.
   */
  const REFERRER = 12;
}

?>