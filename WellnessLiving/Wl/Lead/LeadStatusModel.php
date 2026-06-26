<?php

namespace WellnessLiving\Wl\Lead;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Lead status processing.
 *
 * @method WlModelRequest post()
 */
class LeadStatusModel extends WlModelAbstract
{
  /**
   * Status of the lead record.
   *
   * @post post
   * @var string
   */
  public $id_lead_status = '';

  /**
   * Whether to create lead if it does not exist.
   *
   * If `true` and lead does not exist, create it, otherwise throw an error.
   *
   * @post post
   * @var bool
   */
  public $is_lead_create_nx = false;

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * User key.
   *
   * @post post
   * @var string
   */
  public $uid = '';
}

?>