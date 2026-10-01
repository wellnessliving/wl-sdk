<?php

namespace WellnessLiving\Wl\Purchase\AttemptChain;

/**
 * Stored in the `id_purchase_attempt_chain_
 *
 * Last used ID: 3.
 */
class AttemptChainSourceSid
{
  /**
   * `k_
   *
   * @title Bulk billing
   */
  const BULK_BILLING = 3;

  /**
   * The chain groups the reattempts of a membership renewal - `RsPurchaseItemMembership`.
   * `k_
   *
   * @title Membership
   */
  const MEMBERSHIP = 1;

  /**
   * The chain groups the reattempts of a Duration, Limit or Pass PO renewal - `RsPurchaseItemPromotionRenew`.
   * `k_
   *
   * @title Purchase Option renewal
   */
  const PROMOTION_RENEW = 2;
}

?>