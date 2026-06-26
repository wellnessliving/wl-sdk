<?php

namespace WellnessLiving\Wl\Integration\Centred;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api endpoint to manage CENTRED Integration
 *
 * @method WlModelRequest delete() Removes records from the database.
 * @method WlModelRequest get() Gets studio ID for business.
 * @method WlModelRequest post() On API request save value to database.
 */
class CentredModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Studio ID of the business.
   *
   * <tt>null</tt> if not set.
   *
   * @delete get
   * @get get
   * @post get
   * @var string|null
   */
  public $s_studio_id = null;
}

?>