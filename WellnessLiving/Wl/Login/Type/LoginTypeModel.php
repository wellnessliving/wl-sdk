<?php

namespace WellnessLiving\Wl\Login\Type;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about login types.
 */
class LoginTypeModel extends WlModelAbstract
{
  /**
   * List of login types keys.
   *
   * @get result
   * @var array
   */
  public $a_login_type_list = [];

  /**
   * Business key to get login types for.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>