<?php

namespace WellnessLiving\Wl\Login\Add;

use WellnessLiving\WlModelAbstract;

/**
 * Registers existing user in current business.
 * If user already member of current business then do nothing.
 *
 * After a profile edit there can be a delay while the data replicates to our caches where you will receive
 * a 'profile-field-empty' status code. This delay is less than 20 seconds in most cases.
 */
class MailUseOkModel extends WlModelAbstract
{
  /**
   * The list of fields missing information.
   * Each element is an array containing the following data:<dl>
   *   <dt>string <var>html_message</var></dt>
   *   <dd>The error message.</dd>
   *   <dt>string|null <var>s_field</var></dt>
   *   <dd>The name of the field which is missing information.
   *     Given in the format 'k_field.name'.
   *   </dd>
   * </dl>
   *
   * @post result
   * @var array
   */
  public $a_error = [];

  /**
   * Whether this is a lead. <tt>true</tt> if this is the lead. <tt>false</tt> otherwise.
   *
   * @post post
   * @var bool
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
   * User key.
   *
   * @post post
   * @var string
   */
  public $uid = '';
}

?>