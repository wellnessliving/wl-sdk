<?php

namespace WellnessLiving\Core\Spa\Application;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Information of application.
 *
 * @method WlModelRequest get() Gets information of application.  Returns which sign-in methods (Apple, Facebook, Google, Microsoft, TJX) are enabled for the application, along with the social sign-in and registration restrictions and the corresponding authorization links.
 */
class SpaApplicationModel extends WlModelAbstract
{
  /**
   * `true` - enable for this application sign in with Apple; `false` - disable.
   *
   * @get result
   * @var bool
   */
  public $is_apple;

  /**
   * `true` - enable for this application sign in with Facebook; `false` - disable.
   *
   * @get result
   * @var bool
   */
  public $is_facebook;

  /**
   * `true` - enable for this application sign in with Facebook for Android; `false` - disable.
   *
   * @get result
   * @var bool
   */
  public $is_facebook_android;

  /**
   * `true` - enable for this application sign in with Google; `false` - disable.
   *
   * @get result
   * @var bool
   */
  public $is_google;

  /**
   * `true` - enable for this application sign in with Microsoft; `false` - disable.
   *
   * @get result
   * @var bool
   */
  public $is_microsoft;

  /**
   * `true` - registration of new user is denied in application; `false` - registration of new user is allowed.
   *
   * @get result
   * @var bool
   */
  public $is_register_deny;

  /**
   * `true` if sign in via social networks is allowed; `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_social;

  /**
   * `true` if sign in via TJX Azure is allowed; `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_tjx;

  /**
   * Unique ID of application.
   *
   * @get get
   * @var string
   */
  public $s_application = '';

  /**
   * Tjx button name.
   *
   * @get result
   * @var string
   */
  public $text_tjx_button_name = 'TJX Single Sign on';

  /**
   * Facebook authorization link.
   *
   * @get result
   * @var string
   */
  public $url_facebook;

  /**
   * Tjx link.
   *
   * @get result
   * @var string
   */
  public $url_tjx;
}

?>