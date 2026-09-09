<?php

namespace WellnessLiving\Wl\Promotion\Purchase\Search;

/**
 * Enum class that describes relation user to purchase option.
 */
class PurchasesShareRelationSid
{
  /**
   * The user who shares the purchase option with others.
   *
   * @title shared by
   */
  const DONOR = 2;

  /**
   * The user who only owns the purchase option and does not share it with others.
   *
   * @title owned by
   */
  const OWNER = 1;

  /**
   * The user who has been given access to a shared purchase option.
   *
   * @title shared with
   */
  const RECIPIENT = 3;
}

?>