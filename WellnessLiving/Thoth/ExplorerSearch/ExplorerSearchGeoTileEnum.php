<?php

namespace WellnessLiving\Thoth\ExplorerSearch;

/**
 * List of geographical coordinate tiles in search.
 *
 * Distances for each tile are approximate since high precision is not required for general area search.
 *
 * Latitude distances per degree are mostly constant: 110.6 at the equator, ~111.7 at the poles. 111 km is treated
 * as constant global approximation.
 *
 * Longitude distances vary depending on latitude, and are roughly equal to 111.3 km multiplied by cosinus of the latitude.
 * Approximate distances at 60 degrees latitude below are given using simplified approximation used by the code,
 * which may be 0.5-1 km off actual distances.
 *
 * Last ID: 5
 */
class ExplorerSearchGeoTileEnum
{
  /**
   * 0.01-degree tile.
   * Longitude distance: ~1 km at the equator, ~0.6 km at 60 degrees latitude.
   */
  const DEG_001 = 1;

  /**
   * 0.1-degree tile.
   * Longitude distance: ~11 km at the equator, ~5.6 km at 60 degrees latitude.
   */
  const DEG_01 = 2;

  /**
   * 0.3-degree tile.
   * Longitude distance: ~33 km at the equator, ~16.7 km at 60 degrees latitude.
   */
  const DEG_03 = 3;

  /**
   * 0.5-degree tile.
   * Longitude distance: ~55.7 km at the equator, ~27.8 km at 60 degrees latitude.
   */
  const DEG_05 = 4;

  /**
   * 1-degree tile.
   * Longitude distance: ~111.3 km at the equator, ~55.8 km at 60 degrees latitude (actually, ~58 km, but using
   * simplified approximation it comes out as 55.8).
   */
  const DEG_1 = 5;
}

?>