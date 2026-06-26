<?php

namespace WellnessLiving\Wl\Business\Partner\Contest;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Update contests' fields.
 *
 * @method WlModelRequest post() Update a contest.
 */
class PartnerContestModel extends WlModelAbstract
{
  /**
   * Weather the contest is visible to anyone or not.
   *
   * @post post
   * @var bool
   */
  public $is_remove;

  /**
   * Weather the contest is visible to the business or not.
   *
   * @post post
   * @var bool
   */
  public $is_visible;

  /**
   * Contest key.
   *
   * @post get
   * @var string
   */
  public $k_partner_contest;

  /**
   * The message to show in case of an error.
   *
   * @post result
   * @var string
   */
  public $s_message;

  /**
   * Status of the operation.
   *
   * @post result
   * @var string
   */
  public $s_status;
}

?>