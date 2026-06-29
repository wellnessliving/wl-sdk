<?php

namespace WellnessLiving\Studio\Service\Cid;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to rename a class associated with a CID.
 *
 * This API endpoint is only available for Studio personnel and bots.
 *
 * @method WlModelRequest put() Allows to rename a class associated with a CID.  The CID must already be registered. Validates the new class name format before updating.
 */
class RenameModel extends WlModelAbstract
{
  /**
   * CID of the class to rename.
   *
   * @put get
   * @var int
   */
  public $cid;

  /**
   * New name to assign to a CID.
   *
   * @put post
   * @var string
   */
  public $s_class;
}

?>