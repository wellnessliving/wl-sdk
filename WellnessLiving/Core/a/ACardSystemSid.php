<?php

namespace WellnessLiving\Core\a;

/**
 * A class for a list of card systems.
 *
 * Last used id: 14.
 */
abstract class ACardSystemSid
{
  /**
   * American Express.
   */
  const AMERICAN_EXPRESS = 1;

  /**
   * Bank of Montreal (BMO).
   */
  const BMO = 2;

  /**
   * Canadian Imperial Bank of Commerce (CIBC).
   */
  const CIBC = 3;

  /**
   * Diners Club International.
   */
  const DINNER_CLUB = 4;

  /**
   * Discover.
   *
   * @link https://www.discover.com/
   */
  const DISCOVER = 5;

  /**
   * HSBC Bank Canada.
   *
   * @link http://en.wikipedia.org/wiki/HSBC_Bank_Canada
   */
  const HSBC_CANADA = 6;

  /**
   * Japan Credit Bureau (JCB).
   *
   * @link http://www.jcbcorporate.com/
   * @link https://en.wikipedia.org/wiki/JCB_Co.,_Ltd.
   */
  const JCB = 7;

  /**
   * Mastercard.
   */
  const MASTERCARD = 8;

  /**
   * Royal Bank of Canada.
   */
  const ROYAL_BANK = 9;

  /**
   * Scotiabank.
   *
   * @link http://en.wikipedia.org/wiki/Scotiabank
   */
  const SCOTIBANK = 10;

  /**
   * TD Canada Trust.
   *
   * @link http://en.wikipedia.org/wiki/TD_Canada_Trust
   * @link https://www.tdcanadatrust.com/
   */
  const TD_CANADA = 11;

  /**
   * The card system can't be determined.
   */
  const UNDEFINED = 13;

  /**
   * Union Pay.
   *
   * @link https://en.wikipedia.org/wiki/UnionPay
   */
  const UNION_PAY = 14;

  /**
   * Visa.
   */
  const VISA = 12;
}

?>