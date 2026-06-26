<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom\Account;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Creates a link to the Express Dashboard login page.
 *
 * @method WlModelRequest post()
 */
class CreateLoginLinkModel extends WlModelAbstract
{
  /**
   * Key of the business within which the link should be created.
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
   * URL to the Express Dashboard login page.
   *
   * @post result
   * @var string|null
   */
  public $url_login = null;
}

?>