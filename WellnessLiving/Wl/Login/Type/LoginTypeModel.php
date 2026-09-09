<?php

namespace WellnessLiving\Wl\Login\Type;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about login types.
 *
 * A login type is basically a client type.
 * This information can be used to filter clients by their client type in the All Clients Report.
 *
 * @method WlModelRequest get() Gets a login types list of a business.  Returns all client types configured for the specified business, each with its key, title, client type ID, and a deprecated membership flag. If `is_franchisor` is `true`, returns the combined login types of all franchisees under the franchisor business.
 */
class LoginTypeModel extends WlModelAbstract
{
  /**
   * A list of login types, keys, and information. Each element is an array with the following information:
   *
   * <dl>
   *   <dt>int `id_client_type`</dt>
   *   <dd>Client Type ID. One of {@link ClientTypeSid} constants.</dd>
   * 
   *   <dt>bool `is_member`</dt>
   *   <dd>
   *     Deprecated Use <var>id_client_type</var> instead.
   * It will be `1` if the record contains a type of member.
   * It will be `0` if record contains some other type of client.
   * It will be `null` if the record contains some type of prospect.
   *   </dd>
   * 
   *   <dt>string `k_login_type`</dt>
   *   <dd>The login type key.</dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>The name of the login type.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Same as <var>s_title</var> offset.</dd>
   * </dl>
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