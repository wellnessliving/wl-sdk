<?php

namespace WellnessLiving\Core;

/**
 * Class to work with image repeat types. See more:
 * {@link http://www.w3.org/TR/css3-background/#the-background-repeat }.
 *
 * Last used ID: 6
 */
abstract class AImageRepeatSid
{
  /**
   * The image is repeated in this direction as often as needed to cover the background painting area.
   */
  const REPEAT = 1;

  /**
   * The image is placed once and not repeated in this direction.
   */
  const REPEAT_NO = 2;

  /**
   * Computes to ‘repeat no-repeat’.
   */
  const REPEAT_X = 3;

  /**
   * Computes to ‘no-repeat repeat’.
   */
  const REPEAT_Y = 4;

  /**
   * The image is repeated as often as will fit within the background positioning area.
   */
  const ROUND = 5;

  /**
   * The image is repeated as often as will fit within the background positioning area without being clipped
   * and then the images are spaced out to fill the area.
   */
  const SPACE = 6;
}

?>