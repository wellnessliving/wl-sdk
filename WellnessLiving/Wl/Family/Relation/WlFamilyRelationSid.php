<?php

namespace WellnessLiving\Wl\Family\Relation;

/**
 * Relation type between two relatives.
 *
 * Last used ID: 10.
 */
class WlFamilyRelationSid
{
  /**
     * Care provider.
     */
  const CAREGIVER = 8;

  /**
     * Care recipient.
     */
  const CARE_RECEIVER = 9;

  /**
     * Child of the parent.
     */
  const CHILD = 5;

  /**
     * Dependent.
     *
     * @link https://wellnessliving.atlassian.net/browse/WL-82365
     */
  const DEPENDENT = 10;

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