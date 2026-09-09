<?php

namespace WellnessLiving\Wl\Google\Booking;

/**
 * @link https://developers.google.com/maps-booking/reference/rest/v1alpha/inventory.partners.merchants.services#fieldtype
 */
class ServiceIntakeFormFieldSid
{
  /**
   * A yes/no button.
   */
  const BOOLEAN = 6;

  /**
   * One or more enumerated items with checkboxes.
   */
  const CHECKBOXES = 4;

  /**
   * A selection from a dropdown.
   */
  const DROPDOWN = 5;

  /**
   * Fields of unspecified or unknown type will be ignored.
   */
  const FIELD_TYPE_UNSPECIFIED = 7;

  /**
   * A set of radio buttons that requires one choice from many options.
   */
  const MULTIPLE_CHOICE = 3;

  /**
   * A multi-line input field for text.
   */
  const PARAGRAPH = 2;

  /**
   * A one-line input field for text.
   */
  const SHORT_ANSWER = 1;
}

?>