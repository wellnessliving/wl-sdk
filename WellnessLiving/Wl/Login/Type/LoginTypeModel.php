<?php

namespace WellnessLiving\Wl\Login\Type;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about login types.
 */
class LoginTypeModel extends WlModelAbstract
{
  /**
   * Information about login types. Each element is an array with the following information:
   *
   * <dl>
   *   <dt>bool <var>is_member</var></dt>
   *   <dd>It will be <tt>1</tt> if the record contains a type of member.
   *     It will be <tt>0<tt> if record contains some other type of client.
   *     It will be <tt>null</tt> if the record contains some type of prospect.</dd>
   *   <dt>string <var>k_login_type</var></dt>
   *   <dd>The login type key.</dd>
   *   <dt>string <var>s_title</var></dt>
   *   <dd>The name of the login type.</dd>
   * </dl>
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