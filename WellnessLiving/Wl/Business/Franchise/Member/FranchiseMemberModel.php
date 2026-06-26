<?php

namespace WellnessLiving\Wl\Business\Franchise\Member;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Family\Relation\WlFamilyRelationSid;

/**
 * Performs work with enterprise, travellers and regular clients in the franchise.
 *
 * @method WlModelRequest get() Checks type of the client, whether client can be added to the current business or not and his relationships, which should be added with him.
 * @method WlModelRequest put() Adds client and all his relatives to the business as travellers.
 */
class FranchiseMemberModel extends WlModelAbstract
{
  /**
   * List of relationships, which should be added with the client.
   *
   * <dl>
   *   <dt>int `id_family_relation`</dt>
   *   <dd>Relationship from the current user to the relative from {@link WlFamilyRelationSid}.</dd>
   * 
   *   <dt>string `text_mail`</dt>
   *   <dd>Client's email.</dd>
   * 
   *   <dt>string `text_name_full`</dt>
   *   <dd>Client's full name.</dd>
   * 
   *   <dt>string `text_phone`</dt>
   *   <dd>Client's phone number.</dd>
   * 
   *   <dt>string `text_relationship`</dt>
   *   <dd>Name of teh relationship from the relative to the current user.</dd>
   * 
   *   <dt>string `uid`</dt>
   *
   * 
   *   <dt>string `url_image`</dt>
   *   <dd>Link to the client's photo.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_relation = [];

  /**
   * Checks if client has any required fields to be completed.
   *
   * @put result
   * @var bool
   */
  public $is_empty_required_fields = false;

  /**
   * Key of the business, where we want to add client.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the user, which we want to add to the business.
   *
   * @get get
   * @put get
   * @var string
   */
  public $uid = '';
}

?>