<?php

namespace WellnessLiving\Wl\Promotion\Membership\Report;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to load Membership Conversion filter html for new reports.
 * Reason to create API: Membership Conversion filter html is based on `rs.promotion.select` widget that can be rendered
 * on PHP side only. And filters in new reports are rendered via JS.
 *
 * @method WlModelRequest get()
 */
class MembershipConversionFilterViewModel extends WlModelAbstract
{
  /**
   * Filter view html
   *
   * @get result
   * @var string
   */
  public $html_view = '';

  /**
   * Business key to load filter for.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Selected value of `Converted From`. Primary key in {@link \RsPromotionSql} or `null` if filter `Converted From`
   * option should not be applied.
   * `0` when filter was applied, but promotion was not selected.
   *
   * @get get
   * @var string|null
   */
  public $k_promotion_from = null;

  /**
   * Selected value of `Converted To`. Primary key in {@link \RsPromotionSql} or `null` if filter `Converted To`
   * option should not be applied.
   * `0` when filter was applied, but promotion was not selected.
   *
   * @get get
   * @var string|null
   */
  public $k_promotion_to = null;
}

?>