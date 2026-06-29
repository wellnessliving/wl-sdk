<?php

namespace WellnessLiving\Studio\Service\Cid;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to retrieve information about a CID class.
 *
 * This API endpoint is only available for Studio personnel and bots.
 *
 * @method WlModelRequest get() Returns information about a CID.  Retrieves the class name registered for the given CID value.
 */
class StudioCid_InfoModel extends WlModelAbstract
{
  /**
   * CID of the class to retrieve information for.
   *
   * @get get
   * @var int
   */
  public $cid;

  /**
   * Name of the class associated with specified CID.
   *
   * @get result
   * @var string
   */
  public $s_class;
}

?>