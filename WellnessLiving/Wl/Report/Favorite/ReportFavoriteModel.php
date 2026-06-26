<?php

namespace WellnessLiving\Wl\Report\Favorite;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API point to manages favorite reports.
 *
 * @method WlModelRequest delete() Removes report controller from favorites.
 * @method WlModelRequest get() Returns information whether passed report controller (saved report controller) is favorite for the specified user   within specified business.
 * @method WlModelRequest post() Adds report controller to favorites.
 */
class ReportFavoriteModel extends WlModelAbstract
{
  /**
   * CID of the controller.
   *
   * @delete get
   * @get get
   * @post get
   * @var int
   */
  public $cid_controller;

  /**
   * Whether report is favorite.
   *
   * @get result
   * @var bool
   */
  public $is_favorite;

  /**
   * Business key within which request is performed.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Saved report key to manage.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_report_save;

  /**
   * UID user's key of the actor.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $uid_actor;
}

?>