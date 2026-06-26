<?php

namespace WellnessLiving\Studio\Deploy\Instance;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manage personal settings about a deployment instance.
 *
 * @method WlModelRequest put() Update personal settings.
 */
class InstancePersonalSettingModel extends WlModelAbstract
{
  /**
   * The deployment instance for which the settings will be updated.
   *
   * @put post
   * @var string
   */
  public $k_deploy_instance = '';

  /**
   * The comment on the service.
   *
   * @max-length 128
   * @put post
   * @var string
   */
  public $text_comment = '';
}

?>