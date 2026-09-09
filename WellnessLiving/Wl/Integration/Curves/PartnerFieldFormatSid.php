<?php

namespace WellnessLiving\Wl\Integration\Curves;

/**
 * The list of possible field formats that are provided by Curves partners.
 */
class PartnerFieldFormatSid
{
  /**
   * Dropdown with values: "CHECKING", "SAVINGS".
   */
  const ACCOUNT_TYPE = 1;

  /**
   * Datepicker.
   */
  const CLEVELAND_AND_CLINIC_SESSION_DATE = 2;

  /**
   * Datepicker.
   */
  const DATE = 3;

  /**
   * Text field.
   */
  const DISCOVERY_ENTITY_NO = 4;

  /**
   * Text field.
   */
  const DISCOVERY_IDENTITY_NO = 5;

  /**
   * Text field with type "email".
   */
  const EMAIL = 6;

  /**
   * Dropdown with values: "Female", "Male".
   */
  const GENDER = 7;

  /**
   * Text field.
   */
  const HEALTH_WAYS_MEMBER_ID = 8;

  /**
   * Money field.
   */
  const MONEY = 9;

  /**
   * Dropdown with values: "Completed", "Ineligible", "Forced Drop", "Cancelled Medical", "Cancelled Personal",
   *  "Cancelled Job Change", "Other".
   */
  const SESSION_STATUS_ENTRY = 11;

  /**
   * Text field.
   */
  const SIMPLE_TEXT_BOX = 10;

  /**
   * Text field with type "number".
   */
  const WEIGHT = 12;

  /**
   * Dropdown with values: "1", "2" and names: "Yes", "No".
   */
  const YES_NO_CDC_DROPDOWN = 13;
}

?>