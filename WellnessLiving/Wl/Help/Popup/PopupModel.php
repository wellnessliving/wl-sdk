<?php

namespace WellnessLiving\Wl\Help\Popup;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Help popup settings.
 *
 * @method WlModelRequest get() Gets help popup settings.
 */
class PopupModel extends WlModelAbstract
{
  /**
   * Whether "Call Us" button should be hidden in the help popup.
   *
   * @get result
   * @var bool
   */
  public $hide_call_us;

  /**
   * Whether "Email Us" button should be hidden in the help popup.
   *
   * @get result
   * @var bool
   */
  public $hide_email_us;

  /**
   * Whether "Forum" button should be hidden in the help popup.
   *
   * @get result
   * @var bool
   */
  public $hide_forum;

  /**
   * Whether "My Requests" button should be hidden in the help popup.
   *
   * @get result
   * @var bool
   */
  public $hide_my_requests;

  /**
   * Articles target ID.
   *
   * @get result
   * @var int
   */
  public $id_article_target;

  /**
   * A business in which a user requests help.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * User who asks for help.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>