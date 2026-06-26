<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom\Onboarding;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Creates a link to update connected account data.
 *
 * @method WlModelRequest post()
 */
class CreateLinkModel extends WlModelAbstract
{
  /**
   * Key of the business within which the account should be created.
   *
   * @post post
   * @var string|null
   */
  public $k_business = null;

  /**
   * ID of the account for which link should be created.
   *
   * @post post
   * @var string|null
   */
  public $s_account = null;

  /**
   * URL to redirect user to Stripe dashboard to upload documents.
   *
   * @post result
   * @var string|null
   */
  public $url_account = null;
}

?>