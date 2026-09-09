<?php

namespace WellnessLiving\Wl\Report\Filter\Payer;

use WellnessLiving\Wl\Family\Relation\WlFamilyRelationSid;

/**
 * List of payer relation types.
 * Based on {@link WlFamilyRelationSid} relation types.
 *
 * Last used ID: 11.
 */
class PayerFamilyRelationFilterSid
{
  /**
   * The payer is any third party.
   */
  const ANY_THIRD_PARTY = 8;

  /**
   * Care provider.
   */
  const CAREGIVER = 10;

  /**
   * Care recipient.
   */
  const CARE_RECEIVER = 11;

  /**
   * The payer is a child.
   */
  const CHILD = 5;

  /**
   * The payer is a friend.
   */
  const FRIEND = 2;

  /**
   * The payer is a guardian.
   */
  const GUARDIAN = 7;

  /**
   * The payer is a custom relationship.
   */
  const OTHER = 6;

  /**
   * The payer is a parent.
   */
  const PARENT = 3;

  /**
   * The payer is a sibling (brother or sister).
   */
  const SIBLING = 4;

  /**
   * The payer is a spouse (husband or wife).
   */
  const SPOUSE = 1;

  /**
   * The payer is a current user (paid for himself).
   */
  const THIS_CLIENT = 9;
}

?>