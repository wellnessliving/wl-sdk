<?php

namespace WellnessLiving\Wl\Contract;

/**
 * The set of variables that can be represented in the contract.
 *
 * Last used ID: 21
 */
class VariableSid
{
  /**
   * Name of the business.
   */
  const BUSINESS_NAME = 1;

  /**
   * Expiry of the payment account used for purchase.
   */
  const CARD_EXPIRY = 15;

  /**
   * Last four digits of the card or ACH account used for purchase.
   */
  const CARD_LAST_DIGITS = 13;

  /**
   * Type of the payment method used for purchase.
   */
  const CARD_TYPE = 14;

  /**
   * Date when contract is being agreed on.
   */
  const DATE = 2;

  /**
   * Purchase Option expiration date.
   */
  const EXPIRATION = 3;

  /**
   * The value of the first scheduled payment.
   */
  const FIRST_PAYMENT = 11;

  /**
   * Full name of the client agreeing to the contract.
   */
  const FULL_NAME = 4;

  /**
   * Location the client was sold the purchase option.
   */
  const LOCATION = 5;

  /**
   * Location address the client was sold the purchase option.
   */
  const LOCATION_ADDRESS = 17;

  /**
   * Location city the client was sold the purchase option.
   */
  const LOCATION_CITY = 18;

  /**
   * Location country the client was sold the purchase option.
   */
  const LOCATION_COUNTRY = 19;

  /**
   * Location region the client was sold the purchase option.
   */
  const LOCATION_REGION = 21;

  /**
   * Location postalcode the client was sold the purchase option.
   */
  const LOCATION_ZIP_CODE = 20;

  /**
   * Full names of minors, comma separated
   */
  const MINORS_NAME = 12;

  /**
   * Amount of scheduled payments.
   */
  const NUMBER_OF_PAYMENTS = 6;

  /**
   * Scheduled billing amount.
   */
  const PAYMENT_AMOUNT = 7;

  /**
   * Payment method used for the purchase.
   */
  const PAYMENT_METHOD = 16;

  /**
   * Name of the purchase option.
   */
  const PURCHASE_OPTION = 8;

  /**
   * Full name of the client agreeing to the contract.
   *
   * @deprecated The old name of the {@link VariableSid::FULL_NAME} constants.
   */
  const REAL_NAME = 10;

  /**
   * Start date of the Purchase Option.
   */
  const START_DATE = 9;
}

?>