<?php

namespace WellnessLiving\Wl\Catalog\Terms;

/**
 * Action that a client or staff performs with terms and conditions of cart items.
 */
class TermsActionSid
{
  /**
   * Terms and conditions are accepted.
   *
   * @title Agree
   */
  const AGREE = 1;

  /**
   * Terms and conditions are declined, so items are removed from the cart.
   *
   * @title Decline
   */
  const DECLINE = 2;

  /**
   * Terms and conditions are skipped by staff in the point of sale.
   *
   * @title Skip
   */
  const SKIP = 3;
}

?>