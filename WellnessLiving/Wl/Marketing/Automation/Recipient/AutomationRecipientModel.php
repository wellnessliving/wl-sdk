<?php

namespace WellnessLiving\Wl\Marketing\Automation\Recipient;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Gets recipients data.
 *
 * @method WlModelRequest get() Returns the list of recipients for the given automation within the specified date range.
 * @method WlModelRequest post() Manually adds selected clients to the automation as recipients.  Clients who are already in progress are skipped and counted separately. Only new clients are scheduled for execution.
 */
class AutomationRecipientModel extends WlModelAbstract
{
  /**
   * Recipients data. Has the next structure:
   *
   * <dl>
   *   <dt>string `html_client`</dt>
   *   <dd>HTML representation of the recipient for client side.</dd>
   * 
   *   <dt>int `i_lead_sort`</dt>
   *   <dd>
   *     Lead-stage sort position. Used by JS to sort by the Lead Stage column.
   *    See {@link \Wl\Marketing\Automation\Recipient\AutomationRecipientManager::getRecipientList()} `@return` for the value scheme.
   *   </dd>
   * 
   *   <dt>int `i_status_sort`</dt>
   *   <dd>Status sort position. Used by JS to sort by the Status column.</dd>
   * 
   *   <dt>int `i_step_sort`</dt>
   *   <dd>Current-step sort position. Used by JS to sort by the Current Step column.</dd>
   * 
   *   <dt>int `id_status`</dt>
   *   <dd>Recipient status.</dd>
   * 
   *   <dt>bool `is_manual`</dt>
   *   <dd>Whether the recipient was added manually. `true` if added manually, `false` otherwise.</dd>
   * 
   *   <dt>string `s_start_sort`</dt>
   *   <dd>Start date in UTC MySQL datetime format. Used by JS to sort by the Start date column.</dd>
   * 
   *   <dt>string `text_badge_class`</dt>
   *   <dd>Recipient status badge class.</dd>
   * 
   *   <dt>string `text_lead_stage`</dt>
   *   <dd>Client's current lead stage display text. Empty string if the client has no lead record.</dd>
   * 
   *   <dt>string `text_lead_stage_class`</dt>
   *   <dd>CSS badge class for the lead stage badge. Empty string if the client has no lead record.</dd>
   * 
   *   <dt>string `text_start`</dt>
   *   <dd>Local date and time when the recipient was added to the automation.</dd>
   * 
   *   <dt>string `text_step`</dt>
   *   <dd>
   *     Current step display text. Shows 'Step N: Content' for in-progress and excluded recipients,
   *    'Finished automation' for finished recipients, or '-' for legacy data.
   *   </dd>
   * 
   *   <dt>string `text_step_tooltip`</dt>
   *   <dd>
   *     Tooltip text for the step column. Contains the message body for SMS and push notification steps.
   *    Empty string for other step types.
   *   </dd>
   * 
   *   <dt>string `text_status`</dt>
   *   <dd>Recipient status title.</dd>
   * 
   *   <dt>string `text_status_class`</dt>
   *   <dd>CSS class of the recipient status.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>User ID.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_recipient_list = [];

  /**
   * End date filter.
   *
   * @get get
   * @var string
   */
  public $dl_end = '';

  /**
   * Start date filter.
   *
   * @get get
   * @var string
   */
  public $dl_start = '';

  /**
   * Number of recipients successfully added to the automation.
   *
   * @post result
   * @var int
   */
  public $i_recipient_add = 0;

  /**
   * Number of recipients that are already in progress and were not added again.
   *
   * @post result
   * @var int
   */
  public $i_recipient_progress = 0;

  /**
   * JSON-encoded list of user UIDs to add as recipients.
   *
   * @post post
   * @var string|null
   */
  public $json_recipient_add = null;

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
}

?>