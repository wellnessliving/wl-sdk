<?php

namespace WellnessLiving\Wl\Mail\Group;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Mail group API.
 *
 * @method WlModelRequest post()
 */
class MailGroupOpenModel extends WlModelAbstract
{
  /**
   * Mail group ID.
   *
   * @post post
   * @var int
   */
  public $id_mail_group;

  /**
   * <tt>true</tt> If mail group is hide, <tt>false</tt> - otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_remove;

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * User key.
   *
   * @post post
   * @var string
   */
  public $uid;
}

?>