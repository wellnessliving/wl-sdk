<?php

namespace WellnessLiving\Wl\Catalog\Contract;

/**
 * Source of purchase item contract agreements.
 */
class ContractSourceSid
{
  /**
   * Contract created by automatic renewal.
   *
   * @title Auto-Renew
   * @deprecated Contracts are no longer updated or added upon renew.
   */
  const AUTO_RENEW = 2;

  /**
   * Contract created by modification of the contract.
   *
   * @title Contract Edited
   */
  const CONTRACT_EDIT = 3;

  /**
   * Contract created by new purchase.
   *
   * @title New Purchase
   */
  const PURCHASE = 1;

  /**
   * Contract created by modification of the purchase option.
   *
   * @title Purchase Option Edited
   */
  const PURCHASE_OPTION_EDIT = 4;

  /**
   * Contract created by transfer of the purchase option to another user.
   *
   * @title Purchase Option Transferred
   */
  const PURCHASE_OPTION_TRANSFER = 5;
}

?>