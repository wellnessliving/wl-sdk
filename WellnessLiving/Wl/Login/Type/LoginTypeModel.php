<?php

namespace WellnessLiving\Wl\Login\Type;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves information about login types.
 *
 * A login type is basically a client type.
 * This information can be used to filter clients by their client type in the All Clients Report.
 */
class LoginTypeModel extends WlModelAbstract
{
  /**
   * A list of login types, keys, and information. Each element is an array with the following information:
   *
   * <dl>
   *   <dt>bool <var>is_member</var></dt>
   *   <dd>
   *     It will be `1` if the record contains a type of member.
   *     It will be `0` if record contains some other type of client.
   *     It will be `null` if the record contains some type of prospect.
   *   </dd>
   *   <dt>string <var>k_login_type</var></dt>
   *   <dd>The login type key.</dd>
   *   <dt>string <var>s_title</var></dt>
   *   <dd>The name of the login type.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>Same as <var>s_title</var> offset.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_login_type_list;

  /**
   * The business key used internally by WellnessLiving.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>