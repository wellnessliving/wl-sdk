<?php

namespace WellnessLiving\Wl\User\Info;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Family\Relation\WlFamilyRelationSid;

/**
 * An endpoint that retrieves information about users with the same email.
 *
 * @method WlModelRequest get() Retrieves information about users by email.
 */
class UserListInfoModel extends WlModelAbstract
{
  /**
   * Information about the user's. The information returned has the following structure:
   *
   * <dl>
   *   <dt>array `a_relation`</dt>
   *   <dd>Keys are UIDs or relatives, values - relation type from {@link WlFamilyRelationSid}.</dd>
   * 
   *   <dt>int `id_gender`</dt>
   *   <dd>
   * Empty means that client is not selected gender type.
   *   </dd>
   * 
   *   <dt>bool `is_address_inherited`</dt>
   *   <dd>Whether an address of a user is inherited from a relative `true` - inherited, `false` - otherwise.</dd>
   * 
   *   <dt>bool `is_inherited`</dt>
   *   <dd>Whether an email of a user is inherited from a relative. `true` - inherited, `false` - otherwise.</dd>
   * 
   *   <dt>bool `is_phone_inherited`</dt>
   *   <dd>Whether phones of a user are inherited from a relative `true` - inherited, `false` - otherwise.</dd>
   * 
   *   <dt>string `k_city`</dt>
   *   <dd>City key.</dd>
   * 
   *   <dt>string `text_address`</dt>
   *   <dd>User's address.</dd>
   * 
   *   <dt>string `text_birth`</dt>
   *   <dd>User's birth date.</dd>
   * 
   *   <dt>string `text_cell_phone`</dt>
   *   <dd>User's phone.</dd>
   * 
   *   <dt>string `text_city`</dt>
   *   <dd>User's city.</dd>
   * 
   *   <dt>string `text_business_uid_key`</dt>
   *   <dd>
   *     Compound key delimited wit a colon. First part is business key. Second part - uid of a user.
   *
   *   </dd>
   * 
   *   <dt>string `text_home_phone`</dt>
   *   <dd>User's home phone.</dd>
   * 
   *   <dt>string `text_mail`</dt>
   *   <dd>User's email.</dd>
   * 
   *   <dt>string `text_member`</dt>
   *   <dd>User's member ID.</dd>
   * 
   *   <dt>string `text_name_first`</dt>
   *   <dd>User's first name.</dd>
   * 
   *   <dt>string `text_name_full`</dt>
   *   <dd>User's full name.</dd>
   * 
   *   <dt>string `text_name_last`</dt>
   *   <dd>User's last name.</dd>
   * 
   *   <dt>string `text_postal`</dt>
   *   <dd>User's postal.</dd>
   * 
   *   <dt>string `text_work_phone`</dt>
   *   <dd>User's work phone.</dd>
   * 
   *   <dt>string `url_photo`</dt>
   *   <dd>User's photo url.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_user_data;

  /**
   * The key of the business.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * A user's email address.
   *
   * @get get
   * @var string
   */
  public $text_mail = '';
}

?>