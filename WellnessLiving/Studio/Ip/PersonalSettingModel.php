<?php

namespace WellnessLiving\Studio\Ip;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manage personal settings about a service.
 *
 * @method WlModelRequest put() Update personal settings.
 */
class PersonalSettingModel extends WlModelAbstract
{
  /**
   * Whether the service is marked as favorite.
   * `true` means marked as favorite, `false` otherwise.
   *
   * @put post
   * @var bool
   */
  public $is_favorite = false;

  /**
   * The service for which the settings will be updated.
   *
   * `null` if the service is not specified.
   *
   * @put post
   * @var string|null
   */
  public $k_ip_service = null;

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