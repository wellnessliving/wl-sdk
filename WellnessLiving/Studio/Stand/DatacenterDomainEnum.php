<?php

namespace WellnessLiving\Studio\Stand;

/**
 * Stand datacenters.
 *
 * @method static DatacenterDomainEid classEid(string $s_class, ?string $s_prefix = null)
 * @method static DatacenterDomainEid constantEid(string $s_constant)
 * @method static DatacenterDomainEid idEid(int $id)
 * @method static DatacenterDomainEid sidEid(string $sid)
 */
class DatacenterDomainEnum
{
  /**
   * Global domain;
   */
  const GLOBAL_DOMAIN = 1;

  /**
   * Primary datacenter;
   */
  const PRIMARY = 2;

  /**
   * Secondary datacenter;
   */
  const SECONDARY = 3;
}

?>