<?php

namespace WellnessLiving\Wl\Book\Process\Store;

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
  public $a_purchase_item_check = [];

  /**
   * A list of distributed new shared purchase items which are selected by a group of clients.
   *
   * Keys are UIDs of clients, values are arrays with the following structure:
   *
   * @post result
   * @var array[]
   */
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
  public $a_repeat = null;

  /**
   * A list of assets which are selected by a group of clients.
   *
   * Keys are UIDs of clients, values are arrays with the following structure:
   *
   * @post post
   * @var array[]
   */
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