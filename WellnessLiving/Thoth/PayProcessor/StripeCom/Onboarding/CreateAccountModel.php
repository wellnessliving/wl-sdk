<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom\Onboarding;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Creates a new Stripe account.
 *
 * @method WlModelRequest post()
 */
class CreateAccountModel extends WlModelAbstract
{
  /**
   * Key of the business within which the account should be created.
   *
   * @post post
   * @var string|null
   */
  public $k_business = null;

  /**
   * Key of the created business merchant.
   *
   * @post result
   * @var string|null
   */
  public $k_business_merchant = null;

  /**
   * URL to redirect user to Stripe dashboard to upload documents.
   *
   * @post result
   * @var string|null
   */
  public $url_account = null;
}

?>