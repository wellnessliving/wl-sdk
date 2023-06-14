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
  public const CHILD = 5;

  /**
   * Friend.
   */
  public const FRIEND = 2;

  /**
   * Guardian.
   */
  public const GUARDIAN = 7;

  /**
   * Not specified custom relationship.
   */
  public const OTHER = 6;

  /**
   * Parent of the child.
   */
  public const PARENT = 3;

  /**
   * Sibling. A brother or sister.
   */
  public const SIBLING = 4;

  /**
   * Spouse. A husband or wife.
   */
  public const SPOUSE = 1;
}

?>