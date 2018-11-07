<?php

namespace WellnessLiving\Wl\Book\Process\Store;

use WellnessLiving\Wl\Book\WlBookModeSid;
use WellnessLiving\WlModelAbstract;

/**
 * Booking Wizard for page "Purchase Options".
 */
class StoreModel extends WlModelAbstract
{
  /**
   * IDs of user's activity. Not empty when booking process is finished.
   *
   * @post result
   * @var array
   */
  public $a_login_activity = [];

  /**
   * List of assets which are being booked. Every element has next keys:
   * <ul><li>Number <tt>i_index</tt> Number of asset. Actual for assets with quantity greater <tt>1</tt>.</li>
   * <li>String <tt>k_resource</tt> ID of asset.</li></ul>
   *
   * @post post
   * @var array
   */
  public $a_resource = [];

  /**
   * Selected sessions.
   *
   * Fields - IDs of sessions in database.
   * Values - arrays of date/time when session is occurred. In MySQL format. In GMT.
   *
   * <tt>null</tt> if is not set.
   *
   * @post post
   * @var array
   */
  public $a_session_select = null;

  /**
   * IDs of books are made.
   *
   * @post result
   * @var array
   */
  public $a_visit = [];

  /**
   * Date/time of the session that user is booking now.
   * In MySQL format. In GMT.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post get
   * @var string
   */
  public $dt_date_gmt = null;

  /**
   * WellnessLiving mode type, one of {@link WlBookModeSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_mode = WlBookModeSid::APP_FRONTEND;

  /**
   * Does user agree liability release?
   * <tt>true</tt> - user agrees; <tt>false</tt> - user does not agree or agreement not required.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post post
   * @var bool
   */
  public $is_agree = false;

  /**
   * <tt>true</tt> if need next steps of wizard (need to purchase something to book selected session);
   * <tt>false</tt> if no need next steps (all that need was already bought).
   *
   * @post result
   * @var bool
   */
  public $is_next = false;

  /**
   * ID of session which is booked.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post get
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * ID of a user who is making the book.
   *
   * <tt>null</tt> if not set yet.
   *
   * @post get
   * @var string|null
   */
  public $uid = null;
}

?>