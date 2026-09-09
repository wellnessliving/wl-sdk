<?php

namespace WellnessLiving\Wl\Collector;

/**
 * List of user statuses for collectors.
 *
 * Last used ID: 7.
 */
class DebtStatusSid
{
  /**
   * User is a debtor that was pending to be sent to collections but was removed from this list.
   *
   * @title Exempted from Collections
   */
  const FORGIVEN = 5;

  /**
   * User has no debts.
   *
   * @title No Payments Due
   */
  const INNOCENT = 1;

  /**
   * User who are at least {@link \Wl\Business\Account\Subscription\Collections\CollectionsSubscriptionConfigEntity::$i_day_due} days past due
   *
   * @title Long Overdue
   */
  const OVERDUE = 6;

  /**
   * User is a debtor and pending to be sent to collections.
   *
   * @title Pending Collections
   */
  const PENDING = 2;

  /**
   * User is a debtor and already sent to collections.
   *
   * @title Sent to Collections
   */
  const SENT = 4;

  /**
   * User is a debtor but not pending to be sent to collections.
   *
   * @title Past Due
   */
  const SUSPECT = 3;

  /**
   * Special status of the debt to indicate that it is currently in update state.
   * For example re-activation of the debt can take a time because it is performed by task.
   *
   * @title Awaiting Update
   */
  const SYNC = 7;
}

?>