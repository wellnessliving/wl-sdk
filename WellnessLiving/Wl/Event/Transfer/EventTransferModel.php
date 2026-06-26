<?php

namespace WellnessLiving\Wl\Event\Transfer;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Transfer purchased event to another user.
 *
 * @method WlModelRequest get() Checks whether users are related.
 * @method WlModelRequest post() Transfers purchased event to another user.
 */
class EventTransferModel extends WlModelAbstract
{
  /**
   * Information about relation between users:
   *
   * <dl>
   *   <dt>string `html_relation`</dt>
   *   <dd>Name of relation type.</dd>
   * 
   *   <dt>string `html_user_name`</dt>
   *   <dd>User name with whom purchased event owner has relation.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_relation;

  /**
   * Key of source mode.
   *
   * @post get
   * @var int
   */
  public $id_mode;

  /**
   * <tt>true</tt> if API is being used from backend, <tt>false</tt> otherwise.
   *
   * @post get
   * @var bool
   */
  public $is_backend = false;

  /**
   * Key of event purchase item to be transferred.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_purchase_item;

  /**
   * User key to transfer purchased event from.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid_from;

  /**
   * User key to transfer purchased event to.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid_to;
}

?>