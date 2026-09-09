<?php

namespace WellnessLiving\Wl;

/**
 * A list of interest merge tag types.
 *
 * Names of the constants correspond to names in mailchimp.
 *
 * @link http://apidocs.mailchimp.com/api/2.0/lists/merge-var-add.php See a list of values acceptable to <tt>field_type</tt> argument.
 */
abstract class RsEmlMailchimpFieldTagSid
{
  /**
   * Street address.
   */
  const ADDRESS = 6;

  /**
   * Birthday. Only month and day specified.
   */
  const BIRTHDAY = 11;

  /**
   * A date.
   */
  const DATE = 5;

  /**
   * A drop-down list.
   */
  const DROPDOWN = 4;

  /**
   * Date format that is used with birthday field type.
   *
   * This option should be hidden from user.
   */
  const HIDDEN_FORMAT_BIRTHDAY = 'MM/DD';

  /**
   * Date format that is used with date field type.
   *
   * This option should be hidden from user.
   */
  const HIDDEN_FORMAT_DATE = 'MM/DD/YYYY';

  /**
   * A link to an image.
   */
  const IMAGEURL = 9;

  /**
   * Numeric data.
   */
  const NUMBER = 2;

  /**
   * Phone number.
   */
  const PHONE = 7;

  /**
   * Radio buttons.
   */
  const RADIO = 3;

  /**
   * Arbitrary text data.
   */
  const TEXT = 1;

  /**
   * An URL.
   */
  const URL = 8;

  /**
   * A ZIP code (only valid for USA).
   */
  const ZIP = 10;
}

?>