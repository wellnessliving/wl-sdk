<?php

namespace WellnessLiving\Wl\Alert;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to manage alerts for current user.
 *
 * @method WlModelRequest get() Returns all alerts for the user.  Validates that the user has access to the business, then loads the alert list for the current  user. Additional alert data needed to make alerts tappable is included only when the request  comes from the staff backend.
 * @method WlModelRequest post() Sets alerts as already read.  Validates that the user has access to the business and that any provided alert keys are valid,  marks the specified alerts (or all alerts when none are specified) as read, and sends the  updated unread alert count to the client.
 */
class AlertListModel extends WlModelAbstract
{
  /**
 * List of alerts. 
 *
 * <dl>
 *   <dt>int `cid_alert`</dt>
 *
 * 
 *   <dt>string `dtl_create`</dt>
 *   <dd>Date and time in MySQL format, when an alert has been added.</dd>
 * 
 *   <dt>int `i_difference`</dt>
 *   <dd>Quantity of seconds passed from an alert sending.</dd>
 * 
 *   <dt>bool `is_read`</dt>
 *   <dd>Determines whether the alert was read by the user.</dd>
 * 
 *   <dt>string `k_alert`</dt>
 *   <dd>Alert key. Primary key in  table.</dd>
 * 
 *   <dt>string `k_business`</dt>
 *   <dd>Business key. Primary key in  table.</dd>
 * 
 *   <dt>string `s_icon_class`</dt>
 *   <dd>Icon class.</dd>
 * 
 *   <dt>string `text_message`</dt>
 *   <dd>Alert message.</dd>
 * 
 *   <dt>string `text_title`</dt>
 *   <dd>Alert title.</dd>
 * 
 *   <dt>string|null `uid_client`</dt>
 *   <dd>
 *     User key associated with this alert. Primary key in .`null` if user is walk-in.
 *   </dd>
 * 
 *   <dt>string `url_detail`</dt>
 *   <dd>
 *     A link to detail page related to the alert. Can be empty if the user had
 *    no access to this page at the time the alert was created.
 *   </dd>
 * 
 *   <dt>string `url_logo`</dt>
 *   <dd>Url to user's logo.</dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_alert_list = [];

  /**
 * List of alert keys to mark as read.
 * `null` to set all alerts as read.
 *
 * @post post
 * @var string[]|null
 */
  public $a_alert_read = null;

  /**
 * Key of the business.
 *
 * @get get
 * @post get
 * @var string
 */
  public $k_business = '';
}

?>