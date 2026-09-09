<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom\Reporting;

/**
 * Stripe report types.
 *
 * @link https://stripe.com/docs/reports/report-types#payout-reconciliation
 *
 * Last used id: 18.
 */
class StripeReportTypeSid
{
  /**
   * Connected account itemized payouts.
   *
   * @link https://stripe.com/docs/reports/report-types#schema-connected-account-payouts-itemized-1
   */
  const CONNECTED_ACCOUNT_PAYOUTS_ITEMIZED_1 = 17;

  /**
   * Connected account itemized date-ranged payout reconciliation.
   *
   * @link https://stripe.com/docs/reports/report-types#schema-connected-account-payout-reconciliation-itemized-5
   */
  const CONNECTED_ACCOUNT_PAYOUT_RECONCILIATION_ITEMIZED_5 = 18;

  /**
   * Itemized ending balance reconciliation.
   *
   * @link https://stripe.com/docs/reports/report-types#schema-ending-balance-reconciliation-itemized-1
   */
  const ENDING_BALANCE_RECONCILIATION_ITEMIZED_1 = 1;

  /**
   * Itemized ending balance reconciliation.
   *
   * @link https://stripe.com/docs/reports/report-types#schema-ending-balance-reconciliation-itemized-2
   */
  const ENDING_BALANCE_RECONCILIATION_ITEMIZED_2 = 2;

  /**
   * Itemized ending balance reconciliation.
   *
   * @link https://stripe.com/docs/reports/report-types#schema-ending-balance-reconciliation-itemized-3
   */
  const ENDING_BALANCE_RECONCILIATION_ITEMIZED_3 = 3;

  /**
   * Itemized ending balance reconciliation.
   *
   * @link https://stripe.com/docs/reports/report-types#schema-ending-balance-reconciliation-itemized-4
   */
  const ENDING_BALANCE_RECONCILIATION_ITEMIZED_4 = 4;

  /**
   * Ending balance reconciliation summary.
   *
   * @link https://stripe.com/docs/reports/report-types#schema-ending-balance-reconciliation-summary-1
   */
  const ENDING_BALANCE_RECONCILIATION_SUMMARY_1 = 5;

  /**
   * Itemized reconciliation for a single payout.
   *
   * @link https://stripe.com/docs/reports/report-types#schema-payout-reconciliation-by-id-itemized-1
   */
  const PAYOUT_RECONCILIATION_BY_ID_ITEMIZED_1 = 6;

  /**
   * Itemized reconciliation for a single payout.
   *
   * @link https://stripe.com/docs/reports/report-types#schema-payout-reconciliation-by-id-itemized-2
   */
  const PAYOUT_RECONCILIATION_BY_ID_ITEMIZED_2 = 7;

  /**
   * Itemized reconciliation for a single payout.
   *
   * @link https://stripe.com/docs/reports/report-types#schema-payout-reconciliation-by-id-itemized-3
   */
  const PAYOUT_RECONCILIATION_BY_ID_ITEMIZED_3 = 8;

  /**
   * Itemized reconciliation for a single payout.
   *
   * @link https://stripe.com/docs/reports/report-types#schema-payout-reconciliation-by-id-itemized-4
   */
  const PAYOUT_RECONCILIATION_BY_ID_ITEMIZED_4 = 9;

  /**
   * Payouts reconciliation summary for a single payout.
   *
   * @link https://stripe.com/docs/reports/report-types#schema-payout-reconciliation-by-id-summary-1
   */
  const PAYOUT_RECONCILIATION_BY_ID_SUMMARY_1 = 10;

  /**
   * Itemized payout reconciliation.
   *
   * @link https://stripe.com/docs/reports/report-types#schema-payout-reconciliation-itemized-1
   */
  const PAYOUT_RECONCILIATION_ITEMIZED_1 = 11;

  /**
   * Itemized payout reconciliation.
   *
   * @link https://stripe.com/docs/reports/report-types#schema-payout-reconciliation-itemized-2
   */
  const PAYOUT_RECONCILIATION_ITEMIZED_2 = 12;

  /**
   * Itemized payout reconciliation.
   *
   * @link https://stripe.com/docs/reports/report-types#schema-payout-reconciliation-itemized-3
   */
  const PAYOUT_RECONCILIATION_ITEMIZED_3 = 13;

  /**
   * Itemized payout reconciliation.
   *
   * @link https://stripe.com/docs/reports/report-types#schema-payout-reconciliation-itemized-4
   */
  const PAYOUT_RECONCILIATION_ITEMIZED_4 = 14;

  /**
   * Itemized payout reconciliation.
   *
   * @link https://stripe.com/docs/reports/report-types#schema-payout-reconciliation-itemized-5
   */
  const PAYOUT_RECONCILIATION_ITEMIZED_5 = 15;

  /**
   * Payouts reconciliation summary.
   *
   * @link https://stripe.com/docs/reports/report-types#schema-payout-reconciliation-summary-1
   */
  const PAYOUT_RECONCILIATION_SUMMARY_1 = 16;
}

?>