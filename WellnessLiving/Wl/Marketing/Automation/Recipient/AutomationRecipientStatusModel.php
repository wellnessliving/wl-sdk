<?php

namespace WellnessLiving\Wl\Marketing\Automation\Recipient;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages recipients in an automation flow.
 *
 * @method WlModelRequest get() Returns the current status of a recipient in an automation flow.  When a single user is specified, returns the status of their most recent enrollment in the automation.  When a member group is specified, returns a map of recipient UIDs to their statuses for all  users in that group who have a record in the automation.
 * @method WlModelRequest post() Excludes a recipient from an automation flow.  Marks the given user as excluded so they will no longer receive further steps of the automation. If the user is not currently in the flow the call has no effect.
 */
class AutomationRecipientStatusModel extends WlModelAbstract
{
  /**
   * Statuses of the member group recipients in the automation flow.
   *
   * Only users that have a record in the automation are included.
   * `null` if the request is filtered by an individual user instead of a member group.
   *
   * @get result
   * @var int[]|null
   */
  public $a_group_status = null;

  /**
   * Status of a recipient in an automation flow.
   *
   * `null` if the recipient is not found in the flow.
   *
   * @get result
   * @var int|null
   */
  public $id_status = null;

  /**
   * Automation key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_automation = '0';

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * Member group key to filter recipients by.
   * Can be a primary key in the {@link \Wl\Member\Group\Sql} table
   *
   * `null` if the request is filtered by an individual user instead of a member group.
   *
   * @get get
   * @var string|null
   */
  public $k_member_group = null;

  /**
   * Recipient user key.
   *
   * `null` if the request is filtered by a member group instead of an individual user.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $uid = null;
}

?>