<?php

namespace WellnessLiving\Wl\Import\Process;

use WellnessLiving\Wl\Member\Import\File\ImportFileSid;

/**
 * List of steps to import members.
 *
 * Last used ID: 22.
 */
class ProcessSid
{
  /**
   * Final step to store prepared data about clients to the main database.
   */
  const CLIENT_SAVE = 3;

  /**
   * Collects information about automatic payments.
   * On this step script collects information about scheduled payments to recreate memberships payment schedules.
   */
  const COLLECT_AUTO = 10;

  /**
   * Collects information about client's account balance.
   * On this step we only add to the collected data one field - current account balance. It can be
   * positive or negative.
   */
  const COLLECT_BALANCE = 5;

  /**
   * Gathers list of all contracts from Mindbody prepaid files with contracts.
   */
  const COLLECT_CONTRACT_LIST = 20;

  /**
   * Collect information from
   * {@link ImportFileSid::COUPON_ASSIGN} and
   * {@link ImportFileSid::COUPON_PREPAID}.
   */
  const COLLECT_COUPON_ASSIGN = 14;

  /**
   * Collect information from {@link ImportFileSid::COUPON_REDEEM}.
   */
  const COLLECT_COUPON_REDEEM = 16;

  /**
   * Collects information about passes and memberships.
   * On this step we select expiration and activation dates.
   */
  const COLLECT_EXPIRE = 8;

  /**
   * Collects information about family relationships.
   */
  const COLLECT_FAMILY_RELATIONSHIP = 17;

  /**
   * Collects list of inactive clients. Clients are already collected in a previous step, we just mark then inactive.
   */
  const COLLECT_INACTIVE = 12;

  /**
   * Collects personnel information about client.
   * On this step we gather mail addresses, phones, cities and so on.
   */
  const COLLECT_INFO = 2;

  /**
   * Collects information about memberships.
   */
  const COLLECT_MEMBER = 11;

  /**
   * Collects information about passes and memberships.
   * On this step we select expiration and activation dates.
   */
  const COLLECT_REMAIN = 9;

  /**
   * Collects all sales of the business. On this step, we don't care, what are purchase items.
   * We just collect when, how much, how is called.
   */
  const COLLECT_SALE = 7;

  /**
   * Gathers information about client's notification settings from Mindbody prepaid files.
   */
  const COLLECT_SUBSCRIPTIONS = 22;

  /**
   * Gathers list of all transactions from Mindbody prepaid files.
   * Should be used to understand, how sales were paid.
   * Each sale can have several transactions.
   */
  const COLLECT_TRANSACTIONS = 21;

  /**
   * Import is completed
   */
  const COMPLETE = 4;

  /**
   * Transform collected data to the format ready to be stored.
   */
  const DATA_PREPARE = 6;

  /**
   * Apply family mapping after all client are already imported.
   */
  const FAMILY_APPLY = 19;

  /**
   * Uses Mindbody credentials to get information about family relationships from the mindbody.
   */
  const FAMILY_MAPPING = 18;

  /**
   * Parse source files and stores information into import database.
   * On this step script reads files row by row and stores them as they are into {@link \Wl\Member\Import\File\Sql}
   */
  const FILE_PARSE = 1;
}

?>