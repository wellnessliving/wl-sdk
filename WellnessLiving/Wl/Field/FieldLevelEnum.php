<?php

namespace WellnessLiving\Wl\Field;

/**
 * Level at which a client profile field is asked at a given collection entry point.
 *
 * Last used ID: 3.
 *
 * @method static FieldLevelEnum idEid(int $id)
 * @method static FieldLevelEnum sidEid(string $sid)
 */
class FieldLevelEnum
{
  /**
   * The field is not asked at this entry point.
   *
   * @title Don't ask
   */
  const DONT_ASK = 1;

  /**
   * The field is asked, but a value is not required.
   *
   * @title Optional
   */
  const OPTIONAL = 2;

  /**
   * The field is asked, and a value is required.
   *
   * @title Required
   */
  const REQUIRED = 3;
}

?>