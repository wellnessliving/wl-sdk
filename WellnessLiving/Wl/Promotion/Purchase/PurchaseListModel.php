<?php

namespace WellnessLiving\Wl\Promotion\Purchase;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlProgramSid;
use WellnessLiving\Wl\WlProgramTypeSid;

/**
 * Purchase API.
 *
 * @method WlModelRequest get() Gets list of promotions.
 */
class PurchaseListModel extends WlModelAbstract
{
  /**
   * List of promotions.
   *
   * <dl>
   *   <dt>array[] `a_promotion`</dt>
   *   <dd>
   *     Promotion list. Each element has keys:
   *     <dl>
   *       <dt>string `k_promotion`</dt>
   *
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Title of promotion.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `id_program`</dt>
   *   <dd>Promotion program. One of {@link WlProgramSid} constants.</dd>
   * 
   *   <dt>int `id_program_type`</dt>
   *   <dd>Promotion program type. One of {@link WlProgramTypeSid} constants.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Program type title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_promotion;

  /**
   * A flag to include inactive items in the query result.
   *
   * @get get
   * @var bool
   */
  public $is_inactive_include = false;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>