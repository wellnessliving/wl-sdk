<?php

namespace WellnessLiving\Wl\Login\Add;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that registers an existing user in the specified Enterprise Headquarters account.
 *
 * This endpoint isn't applicable for users who are already members of the business. After a profile is edited, there can
 * be a delay while the data replicates to system caches. As a result, you may see a 'profile-field-empty' status code. In most
 * cases, this delay is less than 20 seconds.
 *
 * For Enterprise Cloud in WellnessLiving, clients can only be members in one Enterprise Location.
 * In all other Enterprise Locations, they'll be treated as travelers in the system.
 */
class MailUseOkModel extends WlModelAbstract
{
  /**
   * The list of fields with missing information.
   * Each element is an array containing the following data:
   * <dl>
   *   <dt>
   *     string <var>html_message</var>
   *   </dt>
   *   <dd>
   *     The error message.
   *   </dd>
   *   <dt>
   *     string <var>s_field</var>
   *   </dt>
   *   <dd>
   *     The name of the field missing information.
   *     Given in the format `k_field.name`.
   *   </dd>
   * </dl>
   *
   * @post result
   * @var array
   */
  public $a_error_list;

  /**
   * This value is `true` if this user is a lead. `false` if otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_lead = false;

  /**
   * The business key used internally by WellnessLiving.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * The Lead Capture Widget skin key. This is used only if a lead was added.
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
  public $s_code;

  /**
   * The result message of the request.
   *
   * @post result
   * @var string
   */
  public $text_message;

  /**
   * The user key.
   *
   * @post post
   * @var string
   */
  public $uid = '';
}

?>