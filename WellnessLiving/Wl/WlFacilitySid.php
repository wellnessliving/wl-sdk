<?php

namespace WellnessLiving\Wl;

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
  const BASKETBALL_COURTS = 8;

  /**
     * The location has change rooms.
     */
  const CHANGE_ROOM = 1;

  /**
     * The location has childcare services.
     */
  const CHILDCARE = 14;

  /**
     * The location has a juice bar.
     */
  const JUICE_BAR = 15;

  /**
     * The location has lockers available for clients.
     */
  const LOCKERS = 2;

  /**
     * The location has a pro-shop.
     */
  const PRO_SHOP = 12;

  /**
     * The location has racquetball courts.
     */
  const RACQUETBALL_COURTS = 7;

  /**
     * The location has saunas.
     */
  const SAUNA = 10;

  /**
     * The location has showers.
     */
  const SHOWERS = 4;

  /**
     * The location has a spa.
     */
  const SPA = 9;

  /**
     * The location has squash courts.
     */
  const SQUASH_COURTS = 6;

  /**
     * The location has a swimming pool.
     */
  const SWIMMING_POOL = 11;

  /**
     * This location provides towel service.
     */
  const TOWEL_SERVICE = 5;

  /**
     * This location has washrooms for clients.
     */
  const WASHROOMS = 3;

  /**
     * This location has a woman's only area.
     */
  const WOMAN_ONLY_AREA = 13;
}

?>