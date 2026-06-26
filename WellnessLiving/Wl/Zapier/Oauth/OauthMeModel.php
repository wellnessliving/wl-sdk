<?php

namespace WellnessLiving\Wl\Zapier\Oauth;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api endpoint used by third party service to retrieve information about current user.
 *
 * @method WlModelRequest get()
 */
class OauthMeModel extends WlModelAbstract
{
  /**
   * Email of the current user.
   *
   * @get result
   * @var string
   */
  public $text_mail = '';

  /**
   * Name of the current user.
   *
   * @get result
   * @var string
   */
  public $text_name = '';
}

?>