<?php

namespace WellnessLiving\Studio\Service\Cid;

use WellnessLiving\WlModelAbstract;

/**
 * Allows to rename a class associated with a CID.
 *
 * This API endpoint is only available for Studio personnel and bots.
 */
class StudioCid_RenameModel extends WlModelAbstract
{
  /**
   * New name to assign to a CID.
   *
   * @put post
   * @var string
   */
  public $s_class;

  /**
   * CID of the class to rename.
   *
   * @put get
   * @var int
   */
  public $cid;
}

?>