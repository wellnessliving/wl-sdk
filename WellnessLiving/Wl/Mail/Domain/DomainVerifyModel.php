<?php

namespace WellnessLiving\Wl\Mail\Domain;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for email domain verification.
 * The domain must be verified before sending emails from it.
 *
 * @method WlModelRequest post()
 */
class DomainVerifyModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @post post
   * @rule value-db {@link \RsBusinessAr}
   * @var string
   */
  public $k_business = '';

  /**
   * Domain name.
   *
   * @post post
   * @var string
   */
  public $text_domain = '';
}

?>