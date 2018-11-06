<?php

namespace WellnessLiving\Core\a;

/**
 * A list of card systems.
 */
class ACardSystemSid
{
  /**
   * American Express.
   */
  const AMERICAN_EXPRESS = 1;

  /**
   *  Bank of Montreal.
   */
  const BMO = 2;

  /**
   * Canadian Imperial Bank of Commerce.
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
   * Japan Credit Bureau.
   *
   * @link http://www.jcbcorporate.com/
   * @link https://en.wikipedia.org/wiki/JCB_Co.,_Ltd.
   */
  const JCB = 7;

  /**
   * Master Card.
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
   * Card system can not be determined.
   */
  const UNDEFINED = 13;

  /**
   * Visa.
   */
  const VISA = 12;
}

?>