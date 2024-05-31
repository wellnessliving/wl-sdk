<?php

namespace WellnessLiving\Wl\Family\Relation;

/**
 * Relation type between two relatives.
 *
 * Last used ID: 7.
 */
class WlFamilyRelationSid
{
  /**
   * Child of the parent.
   */
  const CHILD = 5;

  /**
   * Friend.
   */
  const FRIEND = 2;

  /**
   * Guardian.
   */
  const GUARDIAN = 7;

  /**
   * Not specified custom relationship.
   */
  const OTHER = 6;

  /**
   * Parent of the child.
   */
  const PARENT = 3;

  /**
   * Sibling. A brother or sister.
   */
  const SIBLING = 4;

  /**
   * Spouse. A husband or wife.
   */
  const SPOUSE = 1;
}

?>