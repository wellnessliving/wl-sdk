<?php

namespace WellnessLiving\Wl\Login\Search;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to get and update settings of the client search in Staff Back Office.
 *
 * @method WlModelRequest get()
 * @method WlModelRequest put()
 */
class SearchSettingsModel extends WlModelAbstract
{
  /**
   * `true` if found client should be automatically check-in if possible.
   * `false` if not.
   * `null` if setting should not be changed within the put request.
   *
   * @get result
   * @put post
   * @var bool|null
   */
  public $is_auto_check_in = null;

  /**
   * `true` if enterprise clients (clients from different franchisees) should be included in the result. Can be applied
   *   only in the franchise businesses.
   * `false`if not.
   * `null` if setting should not be changed within the put request.
   *
   * @get result
   * @put post
   * @var bool|null
   */
  public $is_franchisee_search_wide = null;

  /**
   * `true` if inactive clients should be included in the result.
   * `false`if not.
   * `null` if setting should not be changed within the put request.
   *
   * @get result
   * @put post
 * @var bool|null
   */
  public $is_inactive = null;

  /**
   * `true` if member ID should be shown in the result.
   * `false`if not.
   * `null` if setting should not be changed within the put request.
   *
   * @get result
   * @put post
   * @var bool|null
   */
  public $is_show_client_id = null;

  /**
   * `true` if email should be shown in the result.
   * `false` if not.
   * `null` if setting should not be changed within the put request.
   *
   * @get result
   * @put post
   * @var bool|null
   */
  public $is_show_email = null;

  /**
   * `true` if phone number should be shown in the result.
   * `false` if not.
   * `null` if setting should not be changed within the put request.
   *
   * @get result
   * @put post
   * @var bool|null
   */
  public $is_show_phone = null;

  /**
   * Key of the business.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business = '';
}

?>