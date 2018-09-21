<?php

namespace WellnessLiving\Studio\Service\Cid;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves CID of specified class.
 *
 * If class is not registered yet, registers it.
 *
 * This API endpoint is only available for Studio personnel and bots.
 */
class StudioCid_RegisterModel extends WlModelAbstract
{
  /**
   * Name of the class to register.
   *
   * @get get
   * @var string
   */
  public $s_class;

  /**
   * CID of requested class.
   *
   * @get result
   * @var int|null
   */
  public $cid=null;
}

?>