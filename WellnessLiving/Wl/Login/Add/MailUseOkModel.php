<?php

namespace WellnessLiving\Wl\Login\Add;

use WellnessLiving\WlModelAbstract;

/**
 * Registers existing user in current business.
 * If user already member of current business then do nothing.
 */
class MailUseOkModel extends WlModelAbstract
{
  /**
   * Whether this is a lead. <tt>true</tt> if this is the lead. <tt>false</tt> otherwise.
   *
   * @post post
   * @var string
   */
  public $is_lead = 0;

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * Lead Widget skin key used to add the lead.
   *
   * @post post
   * @var string
   */
  public $k_skin = '';

  /**
   * The result code of the request.
   *
   * @post result
   * @var string
   */
  public $s_code = '';

  /**
   * The result message of the request.
   *
   * @post result
   * @var string
   */
  public $s_message = '';

  /**
   * User ID.
   *
   * @post post
   * @var string
   */
  public $uid = '';
}

?>