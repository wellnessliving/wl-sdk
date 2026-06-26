<?php

namespace WellnessLiving\Wl\Feedback;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to submit feedback from the mobile application.
 *
 * @method WlModelRequest post() Sends a feedback email to the support team.
 */
class FeedbackModel extends WlModelAbstract
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
   * `true` to send feedback email to location email; `false` to send the email to support team.
   *
   * @post post
   * @var bool
   */
  public $is_mail_location = false;

  /**
   * `true` of a user initiated the feedback; `false` otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_user_initialized = false;

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
   * Application ID.
   *
   * @post post
   * @var string
   */
  public $text_app_id = '';

  /**
   * App page where feedback was submitted.
   *
   * @post post
   * @var string
   */
  public $text_app_page = '';

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
   * Feedback text.
   *
   * @post post
   * @var string
   */
  public $text_feedback = '';

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