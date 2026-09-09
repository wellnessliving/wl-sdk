<?php

namespace WellnessLiving\Wl\Import\Custom\ClientRelationship;

/**
 * List of columns required to import client relationship.
 *
 * Last used ID: 8.
 */
class CustomClientRelationshipSid
{
  /**
   * The first client's first name.
   */
  const FIRST_NAME_FROM = 3;

  /**
   * The second client's first name.
   */
  const FIRST_NAME_TO = 8;

  /**
   * The first client's last name.
   */
  const LAST_NAME_FROM = 2;

  /**
   * The second client's last name.
   */
  const LAST_NAME_TO = 7;

  /**
   * Flagged the first client is payer second client.
   */
  const PAYER = 5;

  /**
   * Type of relationship between the first client with the second client.
   */
  const RELATIONSHIP = 4;

  /**
   * Uid of the first client.
   */
  const UID_FROM = 1;

  /**
   * Uid of the second client.
   */
  const UID_TO = 6;
}

?>