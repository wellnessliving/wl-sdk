<?php

namespace WellnessLiving\Wl\Family\Relation;

use WellnessLiving\WlModelAbstract;

/**
 * Data about user's family.
 */
class RelationModel extends WlModelAbstract
{
  /**
   * @inheritDoc
   */
  public const KEY = 'uid,k_business';

  /**
   * The new relative to be added to user specified with {@link \WellnessLiving\\Wl\Family\Relation\RelationModel::$uid}:
   * <dl>
   *   <dt>int <var>id_family_relation</var></dt>
   *   <dd>Type of family relation. One of {@link WlFamilyRelationSid} constants.</dd>
   *   <dt>string <var>uid</var></dt>
   *   <dd>The related user's key.</dd>
   * </dl>
   *
   * @post post
   * @var array
   */
  public $a_new = [];

  /**
   * Information about user's family relations. Every element has next fields:
   * <dl>
   *   <dt>int <var>id_family_relation</var></dt>
   *   <dd>Type of family relation. One of {@link WlFamilyRelationSid} constants.</dd>
   * </d;>
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
   * They key of the user whose relatives we will work with.
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