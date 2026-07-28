<?php

namespace WellnessLiving\Wl\Profile\Account\Select;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Family\Relation\WlFamilyRelationSid;

/**
 * Retrieves information about current user and his relationship with sub accounts.
 *
 * @method WlModelRequest get() Retrieves information about user specified in {@link \Wl\Profile\Account\Select\SelectApi::$uid} and his relationship with sub accounts.  Returns all user's relatives and type of relationship, which are allowed to sign in with. So, you can use this list to sign in user as hist relative, but this is not the best way to get full family. Business can set that parent can sign in as his child, but child cannot sign in as his parent. So, this method will return children for parent, but will not return parents for child.
 * @method WlModelRequest post() Signs in user specified in {@link \Wl\Profile\Account\Select\SelectApi::$uid_in}.  Returns an error if you try to sign in user not according to the business permissions.
 */
class SelectModel extends WlModelAbstract
{
  /**
   * Array with information about current user and his relationship with sub accounts.
   *
   * <dl>
   *   <dt>int `id_family_relation`</dt>
   *   <dd>ID of relationship between current user and sub account from {@link WlFamilyRelationSid}.</dd>
   * 
   *   <dt>string `s_name`</dt>
   *   <dd>Name of sub account.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>UID of sub account.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_user = [];

  /**
   * Business to retrieve relationship information.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * UID to retrieve relationship information.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '';

  /**
   * ID of relative to sign in.
   *
   * @post post
   * @var string
   */
  public $uid_in = '';
}

?>