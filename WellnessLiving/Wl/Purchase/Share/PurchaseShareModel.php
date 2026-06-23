<?php

namespace WellnessLiving\Wl\Purchase\Share;

use WellnessLiving\Core\ASocialSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Shares a purchase to a specified social network.
 *
 * @method WlModelRequest post() Records the purchase share action and returns the social network sharing URL.  Validates that the caller owns the purchase, prevents duplicate share actions, saves the share record, and returns the social network URL for sharing.
 */
class PurchaseShareModel extends WlModelAbstract
{
  /**
   * The social network. One of the {@link ASocialSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_social;

  /**
   * The key of the purchase.
   *
   * @post post
   * @var string
   */
  public $k_purchase;

  /**
   * The URL to the sharing page.
   *
   * @post result
   * @var string
   */
  public $url_share;
}

?>