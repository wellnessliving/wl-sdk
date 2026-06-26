<?php

namespace WellnessLiving\Studio\Deploy\Instance;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to change preliminary mode of a deployment instance.
 *
 * @method WlModelRequest put() Sets preliminary mode.
 */
class PreliminaryModel extends WlModelAbstract
{
  /**
   * Preliminary mode.
   *
   * <tt>true</tt> to perform deployment in preliminary mode. <tt>false</tt> to perform normal deployment.
   *
   * <tt>null</tt> if mode is undefined.
   *
   * @put post,result
   * @var bool|null
   */
  public $is_preliminary = null;

  /**
   * Key of a deployment instance to change.
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