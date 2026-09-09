<?php

namespace WellnessLiving\Wl;

/**
 * Sources to import businesses from.
 */
abstract class RsImportSourceSid
{
  /**
   * @link http://demandforce.com
   */
  const DEMANDFORCE = 4;

  /**
   * @link http://www.groupon.com/
   */
  const GROUPON = 5;

  /**
   * @link http://www.healthgrades.com/
   */
  const HEALTHGRADES = 2;

  /**
   * @link https://software.mindbodyonline.com/
   */
  const MINDBODY = 8;

  /**
   * @link http://www.perkville.com/
   */
  const PERKVILLE = 6;

  /**
   * @link https://www.schedulicity.com/
   */
  const SCHEDULICITY = 7;

  /**
   * @link http://www.spafinder.com/
   */
  const SPAFINDER = 1;

  /**
   * @link http://www.zocdoc.com/
   */
  const ZOCDOC = 3;
}

?>