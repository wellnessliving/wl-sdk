<?php

namespace WellnessLiving\Core\Lob;

/**
 * List of deliverability variants.
 *
 * Last used Id: 7.
 */
class DeliverabilitySid
{
  /**
   * The address is deliverable.
   */
  const DELIVERABLE = 1;

  /**
   * The address is deliverable to the building's default address but the secondary unit provided may not exist.
   * There is a chance the mail will not reach the intended recipient.
   */
  const DELIVERABLE_INCORRECT_UNIT = 6;

  /**
   * The address is missing some information, but is most likely deliverable.
   */
  const DELIVERABLE_MISSING_INFO = 2;

  /**
   * The address is deliverable to the building's default address but is missing secondary unit information.
   * There is a chance the mail will not reach the intended recipient.
   */
  const DELIVERABLE_MISSING_UNIT = 7;

  /**
   * The address is deliverable, but the secondary unit information is unnecessary.
   */
  const DELIVERABLE_UNNECESSARY_UNIT = 5;

  /**
   * This address is not deliverable. No matching street could be found within the city or postal code.
   */
  const NO_MATCH = 4;

  /**
   * The address is most likely not deliverable. Some components of the address (such as city or postal code) may have been found.
   */
  const UNDELIVERABLE = 3;
}

?>