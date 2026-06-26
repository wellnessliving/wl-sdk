<?php

namespace WellnessLiving\Wl\DoorAccess\Brivo;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for connect Facility Access Brivo.
 *
 * @method WlModelRequest delete() Disconnecting with Brivo, remove a token.
 * @method WlModelRequest post() Connecting with Brivo, getting a token.
 * @method WlModelRequest put() Update credentials. This functionality is requested only for Demo and Staging for testing purposes.
 */
class ConnectModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @delete get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Additional action to do during disconnect.
   * empty - if no additional actions,
   * `full` - when need to erase all database records
   *
   * @delete post
   * @var string
   */
  public $s_action = '';

  /**
   * Api key.
   *
   * @post get
   * @put get
   * @var string
   */
  public $s_api_key = '';

  /**
   * Client ID.
   *
   * @post get
   * @var string
   */
  public $s_client_id = '';

  /**
   * Client secret key.
   *
   * @post get
   * @var string
   */
  public $s_client_secret = '';

  /**
   * Password.
   *
   * @post get
   * @var string
   */
  public $s_password = '';

  /**
   * Username.
   *
   * @post get
   * @var string
   */
  public $s_username = '';
}

?>