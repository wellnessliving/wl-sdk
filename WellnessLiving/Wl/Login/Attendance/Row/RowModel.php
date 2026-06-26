<?php

namespace WellnessLiving\Wl\Login\Attendance\Row;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Loads data for single attendance list row.
 *
 * @method WlModelRequest get() This method is called to process GET query.
 */
class RowModel extends WlModelAbstract
{
  /**
   * Service image.
   *
   * @get result
   * @var array
   */
  public $a_row = [];

  /**
   * Date.
   *
   * @get get
   * @var string
   */
  public $dtu_date = '';

  /**
   * Visit key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Visit key.
   *
   * @get get
   * @var string
   */
  public $k_visit = '';
}

?>