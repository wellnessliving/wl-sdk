<?php

namespace WellnessLiving\Wl\Family\Relation;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Returns data about a user's relationships.
 */
class RelationModel extends WlModelAbstract
{
  /**
   * The new relationship to be added to user, specified with {@link RelationModel::$uid}:
   *
   * @post post
   * @var array
   */
  public $a_new = [];

  /**
   * Information about the user's relationships. Every element has the following fields:
   *
   * @delete result
   * @get result
   * @post result
   * @var array[]
   */
  public $a_relation;

  /**
   * ID of the user behavior flow.
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