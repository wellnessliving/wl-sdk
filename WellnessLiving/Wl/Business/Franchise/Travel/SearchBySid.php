<?php

namespace WellnessLiving\Wl\Business\Franchise\Travel;

/**
 * List of items that allow franchises to search travelers by options.
 */
class SearchBySid
{
  /**
   * Allow searching by Client id.
   */
  const CLIENT_ID = 1;

  /**
   * Allow searching by Email address.
   */
  const EMAIL_ADDRESS = 2;

  /**
   * Allow searching by UID.
   */
  const UID = 3;
}

?>