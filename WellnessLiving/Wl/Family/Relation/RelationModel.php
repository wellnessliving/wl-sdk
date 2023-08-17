<?php

namespace WellnessLiving\Wl\Family\Relation;

use WellnessLiving\WlModelAbstract;

/**
 * Data about the user's family.
 */
class RelationModel extends WlModelAbstract
{
  /**
   * The new relative to be added to user specified with {@link \WellnessLiving\Wl\Family\Relation\RelationModel::$uid}:
   * <dl>
   *   <dt>int <var>id_family_relation</var></dt>
   *   <dd>Type of family relation. One of {@link \WellnessLiving\Wl\Family\Relation\WlFamilyRelationSid} constants.</dd>
   *   <dt>string <var>uid</var></dt>
   *   <dd>The related user's key.</dd>
   * </dl>
   *
   * @post post
   * @var array
   */
  public $a_new = [];

  /**
   * Information about the user's family relations. Empty array if user is traveller for the specified business.
   * Every element has the following fields:
   * <dl>
   *   <dt>int <var>id_family_relation</var></dt>
   *   <dd>Type of family relation. One of {@link \WellnessLiving\Wl\Family\Relation\WlFamilyRelationSid} constants.</dd>
   *   <dt>int <var>id_family_relation_reverse</var></dt>
   *   <dd>The type of reciprocated relationship. One of {@link \WellnessLiving\Wl\Family\Relation\WlFamilyRelationSid} constants.</dd>
   *   <dt>string <var>text_name</var></dt>
   *   <dd>The name of the relation.</dd>
   *   <dt>string <var>text_name_first</var></dt>
   *   <dd>The first name of the relation.</dd>
   *   <dt>string <var>uid</var></dt>
   *   <dd>The key of the related user.</dd>
   * </dl>
   *
   * @delete result
   * @get result
   * @post result
   * @var array[]
   */
  public $a_relation;

  /**
   * The business key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * The key of the user whose relatives we will work with.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';

  /**
   * The key of the related user who {@link \WellnessLiving\Wl\Family\Relation\RelationModel::$uid} must be removed.
   *
   * @delete get
   * @var string
   */
  public $uid_delete = '0';
}

?>