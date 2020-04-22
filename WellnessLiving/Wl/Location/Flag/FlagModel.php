<?php

namespace WellnessLiving\Wl\Location\Flag;

use WellnessLiving\WlModelAbstract;

/**
 * Information if a user is flagged in a location.
 */
class FlagModel extends WlModelAbstract
{
  /**
   * <tt>true</tt> if user is flagged; <tt>false</tt> otherwise.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var boolean
   */
  public $is_flag = null;

  /**
   * Location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * User's key.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>