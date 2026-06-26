<?php

namespace WellnessLiving\Wl\Feedback;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to log feedback from the mobile application.
 *
 * @method WlModelRequest post() Logs feedback from the mobile application.
 */
class FeedbackLogModel extends WlModelAbstract
{
  /**
   * Screen height in pixels.
   *
   * @post post
   * @var int
   */
  public $i_screen_height = 0;

  /**
   * Screen width in pixels.
   *
   * @post post
   * @var int
   */
  public $i_screen_width = 0;

  /**
   * The source of the action.
   *
   * Is optional. The default value is the current mode.
   *
   * @post post
   * @var int
   */
  public $id_mode = 0;

  /**
   * `true` of a user is satisfied by application; `false` otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_satisfied = false;

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';

  /**
   * Location key.
   *
   * @post post
   * @var string
   */
  public $k_location = '0';

  /**
   * Device model.
   *
   * @post post
   * @var string
   */
  public $text_device_model = '';

  /**
   * Device operating system.
   *
   * @post post
   * @var string
   */
  public $text_device_os = '';

  /**
   * The text that shows up when the user submits feedback.
   *
   * @post post
   * @var string
   */
  public $text_prompt_shown = '';

  /**
   * Application version.
   *
   * @post post
   * @var string
   */
  public $text_version = '';
}

?>