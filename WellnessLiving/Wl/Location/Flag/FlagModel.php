<?php

namespace WellnessLiving\Wl\Location\Flag;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves information if a user is flagged in a location.
 */
class FlagModel extends WlModelAbstract
{
  /**
   * <tt>true</tt> if the user is flagged, <tt>false</tt> if otherwise.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var boolean
   */
  public $is_flag = null;

  /**
   * The location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The user's key.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>