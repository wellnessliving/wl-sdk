<?php

namespace WellnessLiving\Studio\Service\Cid;

use WellnessLiving\WlModelAbstract;

/**
 * Allows to retrieve information about a CID class.
 *
 * This API endpoint is only available for Studio personnel and bots.
 */
class StudioCid_InfoModel extends WlModelAbstract
{
  /**
   * Name of the class associated with specified CID.
   *
   * @get result
   * @var string
   */
  public $s_class;

  /**
   * CID of the class to retrieve informaion for.
   *
   * @get get
   * @var int
   */
  public $cid;
}

?>