<?php

namespace WellnessLiving\Studio\Team\Manage;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to create, edit and delete teams.
 *
 * @method WlModelRequest delete() Deletes a team.
 * @method WlModelRequest get() Returns information about a team.
 * @method WlModelRequest post() Saves a team.
 */
class TeamEditModel extends WlModelAbstract
{
  /**
   * List of selected personnel.
   *
   * @post post
   * @var array
   */
  public $a_personnel;

  /**
   * List of personnel roles.
   *
   * Key is personnel key.
   * Value is team role.
   *
   * @post post
   * @var array
   */
  public $a_team_role;

  /**
   * Personnel list html.
   *
   * @get result
   * @var string
   */
  public $html_personnel_select;

  /**
   * Key of the team.
   *
   * <tt>null</tt> if a new team should be created.
   * This value is required for edit and delete operations.
   *
   * @delete get
   * @get get
   * @post get,result
   * @var string|null
   */
  public $k_team = null;

  /**
   * Name of the team.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_title;
}

?>