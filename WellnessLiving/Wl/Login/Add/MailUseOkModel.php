<?php

namespace WellnessLiving\Wl\Login\Add;

use WellnessLiving\WlModelAbstract;

/**
 * Registers an existing user in the specified Franchisee.
 *
 * If the user is already a member of the business, then this endpoint will do nothing. After a profile edit there can
 * be a delay while the data replicates to our caches where you will receive a 'profile-field-empty' status code. This
 * delay is less than 20 seconds in most cases.
 *
 * If your business uses Franchise Cloud, there is a restriction where a client can only be a member in one Franchisee,
 * they will be a traveller in all other Franchisees.
 */
class MailUseOkModel extends WlModelAbstract
{
  /**
   * The list of fields missing information.
   * Each element is an array containing the following data:<dl>
   *   <dt>string <var>html_message</var></dt>
   *   <dd>The error message.</dd>
   *   <dt>string <var>s_field</var></dt>
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
   * This value is `true` if this is a lead, otherwise this value is `false` .
   *
   * @post post
   * @var string
   */
  public $is_lead = 0;

  /**
   * The business ID used internally by WellnessLiving.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * The lead widget skin key, this is used only if a lead was added.
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
  public $text_message = '';

  /**
   * The user key.
   *
   * @post post
   * @var string
   */
  public $uid = '';
}

?>