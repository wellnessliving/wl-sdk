<?php

namespace WellnessLiving\Core\Locale;

/**
 * A list of currencies.
 *
 * Currency constant names must comply with the standard `ISO 4217` for correct integration with other services.
 *
 * @link https://docs.1010data.com/1010dataReferenceManual/DataTypesAndFormats/currencyUnitCodes.html
 *
 * Last used ID: 13
 */
abstract class CurrencySid
{
  /**
   * United Arab Emirates dirham.
   */
  const AED = 11;

  /**
   * Australian dollar.
   */
  const AUD = 6;

  /**
   * Canadian dollar.
   */
  const CAD = 4;

  /**
   * Egypt Pound.
   */
  const EGP = 8;

  /**
   * Euro.
   */
  const EUR = 13;

  /**
   * British pound.
   */
  const GBP = 3;

  /**
   * Kuwaiti dinar.
   */
  const KWD = 14;

  /**
   * Cayman Islands dollar.
   */
  const KYD = 5;

  /**
   * New Zealand Dollar.
   */
  const NZD = 10;

  /**
   * Philippines Pesco.
   */
  const PHP = 12;

  /**
   * Unknown code.
   *
   * Used when currency is not specified or is not known.
   */
  const UNKNOWN = 2;

  /**
   * US dollars.
   */
  const USD = 1;

  /**
   * South African rand.
   */
  const ZAR = 7;
}

?>