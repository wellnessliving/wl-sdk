<?php

namespace WellnessLiving\Wl\Report\Favorite;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API endpoint to manage favorite reports.
 *
 * @method WlModelRequest delete() Removes report controller from favorites.  Deletes the favorite record for the current user that matches either the specified saved report or the report controller within the current business.
 * @method WlModelRequest get() Returns information whether passed report controller (saved report controller) is favorite for the specified user   within specified business.  Populates {@link \Wl\Report\Favorite\ReportFavoriteApi::$is_favorite} with the current favorite state for the specified saved report or report controller.
 * @method WlModelRequest post() Adds report controller to favorites.  Creates a favorite record for the current user that references either the specified saved report or the report controller within the current business.
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