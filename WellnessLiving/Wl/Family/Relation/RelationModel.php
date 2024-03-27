<?php

namespace WellnessLiving\Wl\Family\Relation;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns data about a user's relationships.
 */
class RelationModel extends WlModelAbstract
{
  /**
   * The new relationship to be added to user, specified with {@link RelationModel::$uid}:
   * <dl>
   *   <dt>int <var>id_family_relation</var></dt>
   *   <dd>The relationship type. One of the {@link WlFamilyRelationSid} constants.</dd>
   *   <dt>string <var>uid</var></dt>
   *   <dd>The related user's key.</dd>
   * </dl>
   *
   * @post post
   * @var array
   */
  public $a_new = [];

  /**
   * Information about the user's relationships. Every element has the following fields:
   * <dl>
   *   <dt>int <var>id_family_relation</var></dt>
   *   <dd>The relationship type. One of the {@link WlFamilyRelationSid} constants.</dd>
   *   <dt>int <var>id_family_relation_reverse</var></dt>
   *   <dd>The type of reciprocated relationship. One of the {@link WlFamilyRelationSid} constants.</dd>
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