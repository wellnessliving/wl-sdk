<?php

namespace WellnessLiving\Wl\Business\Franchise;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Saves franchisee settings.
 *
 * @method WlModelRequest post()
 */
class FranchiseeModel extends WlModelAbstract
{
  /**
   * Final Reimbursement Date.
   * Filled in franchisee local time. After this date no workouts
   * should come in Reimbursement report that franchisor able to generate for this franchisee if <var>is_generate_workout</var> true.
   * <var>dl_workout</var>
   *
   * @post post
   * @var string
   */
  public $dl_workout;

  /**
   * API display.
   * Influence on "start/stop showing the selected franchisee on Franchisor website".
   * <var>is_api_display</var>
   *
   * @post post
   * @var bool
   */
  public $is_api_display;

  /**
   * Generate workout.
   * If ON, franchisor will be able to generate Reimbursement reports for this franchisee.
   * If OFF, reimbursement records for this franchisee will not appear in monthly reimbursement report.
   * <var>is_generate_workout</var>
   *
   * @post post
   * @var bool
   */
  public $is_generate_workout;

  /**
   * Franchisee business key.
   *
   * @post get
   * @var string
   */
  public $k_business;
}

?>