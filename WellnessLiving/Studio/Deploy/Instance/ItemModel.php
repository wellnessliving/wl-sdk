<?php

namespace WellnessLiving\Studio\Deploy\Instance;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to read, create and patch a deployment instance.
 *
 * @method WlModelRequest put() Patches a deployment instance.
 */
class ItemModel extends WlModelAbstract
{
  /**
   * Locking mode.
   *
   * <tt>true</tt> to allow locking of the servers. <tt>false</tt> to deny locking.
   *
   * <tt>null</tt> if locking mode should not be changed.
   *
   * @put post,result
   * @var bool|null
   */
  public $is_lock = null;

  /**
   * ID of deployment instance.
   *
   * <tt>null</tt> if a new instance is about to be created.
   *
   * @put get
   * @var string
   */
  public $k_deploy_instance = null;

  /**
   * Reason for change locking mode.
   *
   * @put post
   * @var string
   */
  public $text_reason = '';
}

?>