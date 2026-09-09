<?php

namespace WellnessLiving\Wl\Business\Import;

/**
 * List of fields that user can upload to import business.
 *
 * Last used ID: 12
 */
abstract class FieldSid
{
  /**
   * Business address.
   */
  const ADDRESS = 1;

  /**
   * Business title.
   */
  const BUSINESS_NAME = 2;

  /**
   * Business type title.
   */
  const BUSINESS_TYPE = 3;

  /**
   * Business city title.
   */
  const CITY = 4;

  /**
   * Business country title.
   */
  const COUNTRY = 5;

  /**
   * First name of the business owner.
   */
  const FIRST_NAME = 11;

  /**
   * Last name of the business owner.
   */
  const LAST_NAME = 12;

  /**
   * Mail address.
   */
  const MAIL = 6;

  /**
   * Phone number.
   */
  const PHONE = 7;

  /**
   * Zip/Postal Code.
   */
  const POSTAL = 8;

  /**
   * State of business address.
   */
  const REGION = 9;

  /**
   * Business website link.
   */
  const WEBSITE = 10;
}

?>