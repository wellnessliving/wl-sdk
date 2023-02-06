<?php 

namespace WellnessLiving\Wl\Promotion;

use WellnessLiving\WlModelAbstract;

/**
 * API point to get promotion list of the specified business.
 */
class PromotionListModel extends WlModelAbstract
{
  /**
   * List of promotions.
   * <dl>
   *   <dt>
   *     int <var>id_program</var>
   *   </dt>
   *   <dd>
   *     Promotion program. One of {@link \RsProgramSid} constants.
   *   </dd>
   *   <dt>
   *     string <var>k_promotion</var>
   *   </dt>
   *   <dd>
   *     ID of promotion, primary key in {@link \RsPromotionSql}.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     Title of promotion.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_promotion;

  /**
   * Whether to return franchisee-created promotions (if business is franchisor).
   * <tt>true</tt> to include franchisee-created promotions.
   *
   * @get get
   * @var bool
   */
  public $is_franchise = false;

  /**
   * Business key to get promotions.
   * Primary key in the {@link \RsBusinessSql} table.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>