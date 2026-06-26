<?php

namespace WellnessLiving\Wl\Integration\GoHighLevel\Location;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint for add/deactivate or refresh token for location for Go High Level integration.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest post()
 */
class LocationModel extends WlModelAbstract
{
  /**
   * Location key.
   *
   * @delete get
   * @post get
   * @var string[]
   */
  public $a_location = [];

  /**
   * Business key.
   *
   * @delete get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Go High Level account name.
   *
   * @post result
   * @var string
   */
  public $text_account;

  /**
   * Go High Level location id.
   *
   * @post post
   * @var string
   */
  public $text_location_id = '';

  /**
   * Go High Level location token.
   *
   * @post post,result
   * @var string
   */
  public $text_token = '';
}

?>