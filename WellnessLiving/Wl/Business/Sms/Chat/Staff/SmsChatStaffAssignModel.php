<?php

namespace WellnessLiving\Wl\Business\Sms\Chat\Staff;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages information about the available and assigned staff members for the client chat.
 *
 * @method WlModelRequest get() Gets information about staff assigned to for the chat.
 * @method WlModelRequest post() Save staff assign for the client chat.
 */
class SmsChatStaffAssignModel extends WlModelAbstract
{
  /**
   * Array of staff available for assigned to chat of client.
   * Each element contains the following fields:
   * <ul>
   *   <li>string <var>uid_staff</var> Staff UID.</li>
   *   <li>string <var>text_full_name</var> Staff member first and last name.</li>
   *   <li>string <var>url_image</var> Url staff member logo.</li>
   * </ul>
   *
   * @get result
   * @var array[]
   */
  public $a_staff_available = [];

  /**
   * Can a current staff assign a conversation to a staff member.
   * `true` if enable the role to use the Assign to field, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_available_assign_to = false;

  /**
   * Business key.
   *
   * `null` if not specified, will throw an exception.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Staff name assigned to chat of client.
   *
   * @get result
   * @var string
   */
  public $text_staff_name_assign = '';

  /**
   * UID of the client with which selected dialog.
   *
   * `null` if not specified, will throw an exception.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $uid_client = null;

  /**
   * User staff Key assigned to chat of client.
   *
   * `null` if staff unassigned.
   *
   * @get result
   * @post get
   * @var string|null
   */
  public $uid_staff_assign = null;

  /**
   * UID of the current staff member if there are on the list of available for assignment, `false` otherwise.
   *
   * @get result
   * @var string|null
   */
  public $uid_staff_available_self = null;

  /**
   * Staff logo assigned to chat of client.
   *
   * @get result
   * @var string
   */
  public $url_image_staff_assign = '';
}

?>