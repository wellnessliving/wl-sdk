<?php

namespace WellnessLiving\Wl\Mail\Domain;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API that returns the domain verification status for a business.
 *
 * @method WlModelRequest get() Returns the domain verification status for the business.
 */
class MailDomainStatusModel extends WlModelAbstract
{
  /**
   * Indicates if the current user has access to Setup > Business > Email Settings.
   * `true` if the user may follow the domain verification link.
   * `false` if the user should be directed to ask an administrator instead.
   *
   * @get result
   * @var bool
   */
  public $is_domain_settings_access = false;

  /**
   * Indicates if the business email domain is verified.
   *
   * @get result
   * @var bool
   */
  public $is_domain_verified = false;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>