<?php

namespace WellnessLiving\Wl\Field;

/**
 * Client profiles to which a client profile field applies, based on family relationships.
 *
 * Last used ID: 3.
 *
 * @method static FieldAppliesToEnum idEid(int $id)
 * @method static FieldAppliesToEnum sidEid(string $sid)
 */
class FieldAppliesToEnum
{
  /**
   * The field applies to every client profile.
   *
   * @title All profiles
   */
  const ALL = 1;

  /**
   * The field applies only to profiles linked as a child.
   *
   * @title Child profiles only
   */
  const CHILD = 2;

  /**
   * The field applies only to profiles linked as a parent.
   *
   * @title Parent profiles only
   */
  const PARENT = 3;
}

?>