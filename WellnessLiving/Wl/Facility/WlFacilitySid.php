<?php

namespace WellnessLiving\Wl\Facility;

/**
 * Type of facilities available at a location.
 *
 * Last ID: 15.
 */
abstract class WlFacilitySid
{
  /**
   * The location has basketball courts.
   */
  public const BASKETBALL_COURTS = 8;

  /**
   * The location has change rooms.
   */
  public const CHANGE_ROOM = 1;

  /**
   * The location has childcare services.
   */
  public const CHILDCARE = 14;

  /**
   * The location has a juice bar.
   */
  public const JUICE_BAR = 15;

  /**
   * The location has lockers available for clients.
   */
  public const LOCKERS = 2;

  /**
   * The location has a pro-shop.
   */
  public const PRO_SHOP = 12;

  /**
   * The location has racquetball courts.
   */
  public const RACQUETBALL_COURTS = 7;

  /**
   * The location has saunas.
   */
  public const SAUNA = 10;

  /**
   * The location has showers.
   */
  public const SHOWERS = 4;

  /**
   * The location has a spa.
   */
  public const SPA = 9;

  /**
   * The location has squash courts.
   */
  public const SQUASH_COURTS = 6;

  /**
   * The location has a swimming pool.
   */
  public const SWIMMING_POOL = 11;

  /**
   * This location provides towel service.
   */
  public const TOWEL_SERVICE = 5;

  /**
   * This location has washrooms for clients.
   */
  public const WASHROOMS = 3;

  /**
   * This location has a woman's only area.
   */
  public const WOMAN_ONLY_AREA = 13;
}

?>