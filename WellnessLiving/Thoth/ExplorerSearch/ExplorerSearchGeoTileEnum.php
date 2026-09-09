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
  }

?>