<?php

namespace WellnessLiving\Wl\Login\Search\Filter;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Login Search settings.
 *
 * @method WlModelRequest get() Gives filter settings.
 */
class LoginSearchFilterModel extends WlModelAbstract
{
  /**
   * User's search settings.
   *
   * @get result
   * @var array
   */
  public $a_search_filter;

  /**
   * Indicate if redirection to client's profile page was made using the login search panel.
   *
   * @get result
   * @var bool
   */
  public $is_login_search;

  /**
   * State of auto check-in service.
   *
   * @get result
   * @var bool
   */
  public $is_reception;
}

?>