<?php

namespace WellnessLiving\Wl\Import\Process;

/**
 * List of possible reasons to get penalty stores.
 *
 * Last used ID: 11.
 */
class ProcessPenaltySid
{
  /**
   * Amount is not numeric.
   */
  const AMOUNT_INVALID = 10;

  /**
   * Some expecting columns are missing.
   */
  const COLUMN_MISS = 5;

  /**
   * Import tries to add gift cards, but there is no available gift cards in the business.
   */
  const COUPON_NX = 11;

  /**
   * Resulting dates are not in a valid mysql format.
   */
  const DATE_FORMAT = 2;

  /**
   * Some mandatory fields are empty.
   */
  const FAMILY_DEPENDANT_NX = 13;

  /**
   * Some mandatory fields are empty.
   */
  const FAMILY_PAYER_NX = 12;

  /**
   * Some mandatory fields are empty.
   */
  const FIELD_EMPTY = 9;

  /**
   * Invalid email address.
   */
  const MAIL_INVALID = 7;

  /**
   * Client's name column is empty.
   */
  const NAME_EMPTY = 4;

  /**
   * Purchase's name column is empty.
   */
  const PURCHASE_EMPTY = 3;

  /**
   * Owner of the purchase is not included in client's data report.
   */
  const PURCHASE_OWNER_NX = 1;

  /**
   * User that should be imported from some file, does not exist in the file with the whole list of users.
   */
  const USER_NX = 6;
}

?>