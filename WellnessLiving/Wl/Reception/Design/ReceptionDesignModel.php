<?php

namespace WellnessLiving\Wl\Reception\Design;

use WellnessLiving\WlModelAbstract;

/**
 * Api endpoint to get information about Self Check-In Kiosk settings.
 */
class ReceptionDesignModel extends WlModelAbstract
{
  /**
   * Array of image information for Self Check-In logo.
   * Empty if {@link ReceptionDesignModel::$k_location} is not provided.
   *
   * Will contain the following keys:
   * <dl>
   *  <dt>string <var>url_view</var></dt>
   *  <dd>url for full image.</dd>
   *  <dt>string <var>url_thumbnail</var></dt>
   *  <dd>url for thumbnail version of image.</dd>
   * </dl>
   *
   * If image for self check in app is empty, will attempt to obtain business logo instead. If business logo is empty,
   * will attempt to obtain location logo.
   *
   * @get result
   * @var string[]
   */
  public $a_reception_logo = [];

  /**
   * `true` - client profile images will be hidden after the client signs in on the Check-in Kiosk;
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $hide_profile_images;

  /**
   * Number of minutes for the client check-in window after session has started.
   *
   * @get result
   * @var int
   */
  public $i_book_open;

  /**
   * Delay in seconds on Check-in Confirmation Screen before redirect to Login screen.
   *
   * @get result
   * @var int
   */
  public $i_confirm_delay;

  /**
   * Delay in seconds on Schedule Screen before redirect to Login screen.
   *
   * @get result
   * @var int
   */
  public $i_schedule_delay = 0;

  /**
   * ID of the sound for failed check in.
   *
   * @get result
   * @var int
   */
  public $id_failed_sound;

  /**
   * ID of the sound for successful check in.
   *
   * @get result
   * @var int
   */
  public $id_success_sound;

  /**
   * `true` - allow client to check-in unpaid;
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_attend_free;

  /**
   * If only one service available with the look ahead window the client will:
   * `true` - automatically check in to it; `false` - have to select the service.
   *
   * @get result
   * @var bool
   */
  public $is_auto_check_in;

  /**
   * `true` - allow clients to check-in to sessions in progress;
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_book_open;

  /**
   * `true` - allow client check-in without booking prior;
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_book_optional;

  /**
   * `true` - enable check-in by client id;
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_client_id;

  /**
   * `true` - enable check-in by email;
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_mail;

  /**
   * `true` - require password while check-in;
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_password;

  /**
   * `true` - enable check-in by phone;
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_phone;

  /**
   * `true` - automatically reconcile unpaid visits upon check in;
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_reconcile_auto;

  /**
   * Key of the business, where application is run.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the location, where application is run.
   *
   * @get get
   * @var string
   */
  public $k_location = '';

  /**
   * `true` - show business name on client self check-in page;
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $show_business_name;

  /**
   * `true` - show confirm screen after client self check-in;
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $show_confirm_screen;

  /**
   * Name of the business to display on the client self check-in page.
   *
   * @get get
   * @var string
   */
  public $text_business_name = '';
}

?>