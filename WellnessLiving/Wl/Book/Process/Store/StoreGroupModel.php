<?php

namespace WellnessLiving\Wl\Book\Process\Store;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;

/**
 * Performs preliminary checks and distribution of selected purchase options between the client who is currently logged
 * in and his relatives.
 */
class StoreGroupModel extends WlModelAbstract
{
  /**
   * A list of existing login promotions which are selected by a group of clients.
   *
   * This login promotions will be checked to determine if it can be applied to the current class or event.
   *
   * Keys are UIDs of clients, values are login promotion keys.
   *
   * @post post
   * @var string[]
   */
  public $a_login_promotion = [];

  /**
   * A list of new purchase items which are selected by a group of clients.
   *
   * This new purchase items will be checked to determine if it can be applied to the current class or event before
   * being purchased.
   *
   * Keys are UIDs of clients, values are arrays with the following structure:
   *
   * @post post
   * @var array[]
   */
<dl>
  <dt>int `i_session`</dt>
  <dd>
    The number of sessions that this item can cover.

  </dd>

  <dt>int `s_value`</dt>
  <dd>
    The unique identifier of the item being checked.
This corresponds to one of the following values:
<ul>
  <li>{@link Wl\Book\Process\Purchase\Purchase56Api::$a_purchase}`["s_value"]`</li>
  <li>{@link Wl\Book\Process\Purchase\Purchase56Api::$a_reward_prize}`["s_value"]`</li>
  <li>{@link Wl\Book\Process\Purchase\Purchase56Api::$a_login_prize}`["s_value"]`</li>
</ul>
  </dd>
</dl>
  public $a_purchase_item_check = [];

  /**
   * A list of distributed new shared purchase items which are selected by a group of clients.
   *
   * Keys are UIDs of clients, values are arrays with the following structure:
   *
   * @post result
   * @var array[]
   */
<dl>
  <dt>string[] `a_owner`</dt>
  <dd>
    List of UIDs of owners who will share this promotion with this client.
  If empty, this client is the owner of the promotion.
  This only applies to the new promotions.
  /dd>

  <dt>int `i_session`</dt>
  <dd>
    The number of sessions that this item can cover.

  `0` if not applicable.
  </dd>

  <dt>string|null `k_login_promotion`</dt>
  <dd>
    Login promotion key.
  `null` if not applicable.
  </dd>

  <dt>string|null `k_session_pass`</dt>
  <dd>
    Session pass key.
  `null` if not applicable.
  </dd>

  <dt>string|null `s_value`</dt>
  <dd>
    The unique identifier of the purchase item.

  `null` if not applicable.
  </dd>

  <dt>string `text_error`</dt>
  <dd>Error text if the purchase item cannot be applied to the current class or event for this client.</dd>

  <dt>string `text_error_code`</dt>
  <dd>Error code if the purchase item cannot be applied to the current class or event for this client.</dd>
</dl>
  public $a_purchase_item_distribute = [];

  /**
   * Information about the recurring booking for each client in the group.
   *
   * Keys are UIDs of clients, values are arrays with information about the recurring booking:
   *
   * Should be `null` if the booking isn't recurring.
   *
   * @post post
   * @var array[]|null
   */
<dl>
  <dt>int[] `a_day`</dt>
  <dd>
    The days of week when the appointment repeat.One of the {@link ADateWeekSid} constants.
Should be passed for any type of repetition.
  </dd>

  <dt>string `dt_from`</dt>
  <dd>Date to start recurring booking.
Expected for `id_repeat_</dd>

  <dt>string `dt_to`</dt>
  <dd>Date to complete recurring booking.
Expected for `id_repeat_</dd>

  <dt>int `i_count`</dt>
  <dd>
    The number of occurrences after which the appointment's repeat cycle stops.
Should be empty if the repeat cycle doesn't stop after a certain number of occurrences.
Expected for `id_repeat_
  </dd>

  <dt>int `i_duration`</dt>
  <dd>Count of days\weeks\months between recurring bookings.</dd>

  <dt>int `id_duration`</dt>
  <dd>
    The measurement unit of `i_period`. One of the {@link ADurationSid} constants.

  </dd>

  <dt>int `id_repeat_end`</dt>
  <dd>Possible ways to stop repeatable events.</dd>
</dl>
  public $a_repeat = null;

  /**
   * A list of assets which are selected by a group of clients.
   *
   * Keys are UIDs of clients, values are arrays with the following structure:
   *
   * @post post
   * @var array[]
   */
<dl>
  <dt>int `i_index`</dt>
  <dd>The order number of the asset (from 1 to the asset quantity).</dd>

  <dt>string `k_resource`</dt>
  <dd>The asset key. 
</dl>
  public $a_resource = [];

  /**
   * A list of existing session passes (drop-in, full-event) which are selected by a group of clients.
   *
   * This session passes will be checked to determine if it can be applied to the current class or event.
   *
   * Keys are UIDs of clients, values are session pass keys.
   *
   * @post post
   * @var string[]
   */
  public $a_session_pass = [];

  /**
   * A list of sessions which are selected by a group of clients.
   *
   * Keys are UIDs of clients, values are arrays of class period keys mapped to index arrays of
   *  dates/times when the session occurred (MySQL format; UTC).
   *
   * @post post
   * @var string[][][]
   */
  public $a_session_select = [];

  /**
   * A list of wait list (unpaid) sessions which are selected by a group of clients.
   *
   * Keys are UIDs of clients, values are arrays of class period keys mapped to index arrays of
   *  dates/times when the session occurred (MySQL format; UTC).
   *
   * @post post
   * @var string[][][]
   */
  public $a_session_wait_list_unpaid = [];

  /**
   * Date/time to which session is booked.
   *
   * @get get
   * @post get
   * @var string
   */
  public $dt_date_gmt = '';

  /**
   * The mode type.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * `true` if action is performed as a staff member; `false` otherwise.
   *
   * If `true` is sent, access to the business and to the client will be checked.
   * If `false` is sent, user can book only for himself or for relatives if this is allowed in business settings.
   *
   * @get get
   * @post get
   *
   * @var bool
   */
  public $is_backend = false;

  /**
   * Checking whether the client has a credit card (if configured in the business) will be skipped if this flag is set to `false`.
   *
   * Use this field with caution.
   * The final booking will not use this flag, and the check will still be performed.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_credit_card_check = true;

  /**
   * `true` if user pressed 'Pay later'.
   * `false` if user pressed 'Pay now'.
   *
   * @post post
   * @var bool
   */
  public $is_force_pay_later = false;

  /**
   * Key of session which is booked.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = '0';
}

?>