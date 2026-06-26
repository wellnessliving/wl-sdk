<?php

namespace WellnessLiving\Wl\Login\Activity;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Sharing user's activity in social networks.
 *
 * @method WlModelRequest post() This method is called to process POST query.
 */
class ShareModel extends WlModelAbstract
{
  /**
   * List of IDs of user's activity.
   *
   * @post post
   * @var string[]
   */
  public $a_login_activity = [];

  /**
   * <tt>true</tt> - share activity on Facebook; <tt>false</tt> - do not share on Facebook.
   *
   * @post post
   * @var bool
   * @deprecated Feature is no longer supported.
   */
  public $is_facebook = false;

  /**
   * <tt>true</tt> - share activity on Twitter; <tt>false</tt> - do not share on Twitter.
   *
   * @post post
   * @var bool
   */
  public $is_twitter = false;
}

?>