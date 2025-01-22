<?php

namespace WellnessLiving\Custom\Wl\Report;

use WellnessLiving\Wl\Report\UrlEncode;
use WellnessLiving\WlModelAbstract;

/**
 * Class aimed to customise class {@link \WellnessLiving\Wl\Report\DataModel}.
 *
 * @property string $s_filter
 */
class DataModel extends WlModelAbstract
{
  /**
   * Sets report filters.
   *
   * Specific filters depend on specific reports.
   *
   * @param array $a_filter The report filters. The key is the filter variable name, and the value is its value.
   */
  public function filterSet($a_filter)
  {
    if(count($a_filter))
      $this->s_filter= UrlEncode::encode($a_filter);
    else
      $this->s_filter='';
  }
}

?>