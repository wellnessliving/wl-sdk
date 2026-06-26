<?php

namespace WellnessLiving\Wl\Promotion\Terminate\Reason;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to work with termination reason for a promotions in the business.
 *
 * @method WlModelRequest delete() Deletes the reason.
 * @method WlModelRequest get() Gets list of available termination reasons for a promotions.
 * @method WlModelRequest post() Edits or creates new reason.
 */
class PromotionTerminateReasonModel extends WlModelAbstract
{
  /**
   * List of available termination reasons for a promotions.
   *
   * <dl>
   *   <dt>string `k_reason`</dt>
   *   <dd>Reason key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Reason title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_reason_list = [];

  /**
   * Business key.
   *
   * @get get
   * @var bool
   */
  public $is_backend = true;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Reason key. `null` to create new reason.
   *
   * @delete get
   * @post get,result
   * @var string|null
   */
  public $k_reason = null;

  /**
   * Reason title.
   *
   * @post post
   * @var string|null
   */
  public $text_title = null;

  /**
   * UID of a user.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>