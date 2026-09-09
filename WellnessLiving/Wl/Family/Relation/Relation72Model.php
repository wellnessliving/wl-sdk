<?php

namespace WellnessLiving\Wl\Family\Relation;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Mode\ModeSid;
use WellnessLiving\Wl\User\Tracking\FlowSid;

/**
 * Returns data about a user's relationships.
 *
 * @method WlModelRequest delete() Deletes family relation between 2 users.  Removes the relationship between the user identified by `uid` and the user identified by `uid_delete` within the given business, then returns the updated list of relationships for `uid`.
 * @method WlModelRequest get() Gets relative list.  Returns the list of all family relationships for the specified user within the given business, including relationship type, reverse relationship type, name, and photo information for each related user.
 * @method WlModelRequest post() Adds to user {@link \Wl\Family\Relation\RelationApi::$uid} relative {@link \Wl\Family\Relation\RelationApi::$a_new}.  Creates a bidirectional family relationship between the user identified by `uid` and the user specified in `a_new`, then returns the updated list of relationships for `uid`.
 */
class Relation72Model extends WlModelAbstract
{
  /**
   * The new relationship to be added to user, specified with {@link RelationModel::$uid}:
   *
   * <dl>
   *   <dt>int `id_family_relation`</dt>
   *   <dd>The relationship type. One of the {@link WlFamilyRelationSid} constants.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>The related user's key. </dd>
   * </dl>
   * @post post
   * @var array
   */
  public $a_new = [];

  /**
   * Information about the user's relationships. Every element has the following fields:
   *
   * <dl>
   *   <dt>int `id_family_relation`</dt>
   *   <dd>The relationship type. One of the {@link WlFamilyRelationSid} constants.</dd>
   * 
   *   <dt>int `id_family_relation_reverse`</dt>
   *   <dd>The type of reciprocated relationship. One of the {@link WlFamilyRelationSid} constants.</dd>
   * 
   *   <dt>string `text_name`</dt>
   *   <dd>The name of the relation.</dd>
   * 
   *   <dt>string `text_name_first`</dt>
   *   <dd>The first name of the relation.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>The key of the related user. </dd>
   * </dl>
   * @delete result
   * @get result
   * @post result
   * @var array[]
   */
  public $a_relation = null;

  /**
   * ID of the user behavior flow.
   * One of {@link FlowSid} constants.
   *
   * @delete get
   * @get get
   * @post get
   * @var int
   */
  public $id_flow = 0;

  /**
   * ID of source mode.
   * One of {@link ModeSid} constants.
   *
   * @delete post
   * @post post
   * @var int
   */
  public $id_mode = 0;

  /**
   * The business key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business = null;

  /**
   * The key of the user whose relationships are being assessed.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';

  /**
   * The key of the related user who {@link RelationModel::$uid} must be removed.
   *
   * @delete get
   * @var string
   */
  public $uid_delete = '0';
}

?>