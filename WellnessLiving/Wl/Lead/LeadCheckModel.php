<?php

namespace WellnessLiving\Wl\Lead;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Checks if user with specified email already belongs to specified business.
 *
 * @method WlModelRequest post() Checks if user with specified email already registered for specified business.
 */
class LeadCheckModel extends WlModelAbstract
{
  /**
   * `true` if user with specified email is lead of a specified business, `false` - otherwise.
   *
   * @post result
   * @var bool
   */
  public $is_lead = false;

  /**
   * `true` if user with specified email is a member of a specified business, `false` - otherwise.
   *
   * @post result
   * @var bool
   */
  public $is_member = false;

  /**
   * The key of business to which the new user must be captured.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';

  /**
   * User email.
   *
   * @post post
   * @var string
   */
  public $s_mail = '';
}

?>