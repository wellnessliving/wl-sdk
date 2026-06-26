<?php

namespace WellnessLiving\Wl\Visit\Blame;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Visit\WlVisitSid;

/**
 * An API to check the specified visit against the business late cancellation and no show rules.
 *
 * @method WlModelRequest get() Gets visit status.
 */
class CheckModel extends WlModelAbstract
{
  /**
   * Amount to be charged to the user.
   *
   * `null` if specified visit is not the blame, according business late cancel and no shows rules.
   *
   * @get result
   * @var string|null
   */
  public $html_fee_amount = null;

  /**
   * Visit status. One of {@link WlVisitSid} constants.
   *
   * @get get
   * @var string
   */
  public $id_visit = '0';

  /**
   * Blame status of the visit.
   *
   * `true` if specified visit, according business late cancel and no shows rules, is blamed.
   *
   * @get result
   * @var bool
   */
  public $is_blame = false;

  /**
   * ID of business.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Visit ID to get status for.
   *
   * @get get
   * @var string
   */
  public $k_visit = '0';

  /**
   * Whether display the confirmation modal.
   *
   * `true` the confirmation modal must be shown if specified visit, according business late cancel
   * and no shows rules, is blamed and the current user has the privilege to decide whether to charge a penalty or not.
   * `false` - do not show the confirmation modal.
   *
   * @get result
   * @var bool
   */
  public $show_confirm = false;
}

?>