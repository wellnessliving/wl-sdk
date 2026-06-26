<?php

namespace WellnessLiving\Wl\Business\Promote\Explorer;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Controller to access business explorer links.
 *
 * @method WlModelRequest post()
 */
class PromoteExplorerModel extends WlModelAbstract
{
  /**
   * Whether the Explorer promotion is active for the specified business/location.
   *
   * @post post
   * @var bool|null
   */
  public $is_active = null;

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * Location key.
   *
   * @post post
   * @var string
   */
  public $k_location = '';

  /**
   * Resource string alias to be set as a part of explorer link.
   *
   * @post post
   * @var string|null
   */
  public $text_alias = null;

  /**
   * Explorer URL for the specified business/location.
   *
   * @post result
   * @var string
   */
  public $url_explorer = '';
}

?>