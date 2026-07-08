<?php

namespace WellnessLiving\Wl\Lead;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Checks if user with specified email already belongs to specified business.
 *
 * @method WlModelRequest post() Checks if user with specified email already registered for specified business.  Looks up an existing account by the given email address. If no account with that email exists,  the user is reported as neither a member nor a lead. If an account exists, the response reports  whether that user is already a member of the specified business, and whether that user is already  registered as a lead for the specified business.
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