<?php

namespace WellnessLiving\Wl\Business\Integration;

/**
 * A business integration SID class.
 *
 * Last used ID: 5.
 */
class Sid
{
  /**
   * CENTRED integration.
   */
  const CENTRED = 5;

  /**
   * Class pass integration.
   *
   * If value of this constant is changed you must change the triggers:
   *   - <tt>\Wl\ClassPass\BusinessNumberBusinessDeleteTrigger.sql</tt>
   *   - <tt>\Wl\ClassPass\BusinessNumberBusinessInsertTrigger.sql</tt>
   *   - <tt>\Wl\ClassPass\BusinessNumberBusinessUpdateTrigger.sql</tt>
   *   - <tt>\Wl\ClassPass\BusinessNumberBusinessIntegrationDeleteTrigger.sql</tt>
   *   - <tt>\Wl\ClassPass\BusinessNumberBusinessIntegrationInsertTrigger.sql</tt>
   *   - <tt>\Wl\ClassPass\BusinessNumberBusinessIntegrationUpdateTrigger.sql</tt>
   */
  const CLASS_PASS = 1;

  /**
   * Reserve with google.
   *
   * @link https://www.google.com/maps/reserve/
   */
  const GOOGLE_RESERVE = 3;

  /**
   * Gym pass integration.
   *
   * @link https://www.gympass.com/
   */
  const GYM_PASS = 4;

  /**
   * Mind Body, YFPassport and Fight2Fitness integration.
   */
  const WELLNESSLIVING = 2;
}

?>