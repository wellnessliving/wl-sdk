<?php

namespace WellnessLiving\Wl\Login\Type;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about login types.
 *
 * A login type is basically a client type.
 * This information can be used to filter clients by their client type in the All Clients Report.
 */
class LoginTypeModel extends WlModelAbstract
{
  /**
   * A list of login types, keys, and information. Each element is an array with the following information:
   *
   * @get result
   * @var array[]
   */
  public $a_login_type_list = [];

  /**
   * If `true`, this `k_business` is a franchisor, and login types of all franchisees should be returned.
   *
   * @get get
   * @var bool
   */
  public $is_franchisor = false;

  /**
   * The business key used internally by WellnessLiving.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>