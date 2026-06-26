<?php

namespace WellnessLiving\Wl\Promotion\Pay;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages promotion payment pause periods for list of login promotion.
 *
 * @method WlModelRequest post() Plans tasks to perform actions with promotions: create,stop or delete payment pause periods.
 * @method WlModelRequest put() Returns list of clients who have promotion payment pause on specified period if {@link \Wl\Promotion\Pay\$dl_start} and {@link \Wl\Promotion\Pay\$dl_end} are provided.
 */
class PromotionPayPauseListModel extends WlModelAbstract
{
  /**
   * List of the login promotions which can not be put on hold in the selected period.
   *
   * @put result
   * @var array
   */
  public $a_login_promotion_exclude;

  /**
   * List of the clients to which list of login promotion belong and have promotion payment pause on the selected period.
   *
   * @put result
   * @var array
   */
  public $a_user = [];

  /**
   * End date of pause period in login promotion timezone. Can be set to special value
   *
   * <tt>null</tt> if not initialized.
   *
   * @post post
   * @put post
   * @var string|null
   */
  public $dl_end = null;

  /**
   * Start date of pause period in login promotion timezone.
   *
   * <tt>null</tt> if not initialized.
   *
   * @post post
   * @put post
   * @var string|null
   */
  public $dl_start = null;

  /**
   * Number of all clients to which list of login promotion belong and have a promotion payment pause on the selected period.
   *
   * @put result
   * @var int
   */
  public $i_user = 0;

  /**
   * Number of all clients to which list of login promotion belong and are impacted.
   *
   * @put result
   * @var int
   */
  public $i_user_impact;

  /**
   * Action to perform with promotion payment pause periods.
   *
   * <tt>null</tt> if not initialized.
   *
   * @post post
   * @var int|null
   */
  public $id_action = null;

  /**
   * Whether or not to send email notification.
   *
   * <tt>false</tt> if not initialized.
   *
   * @post post
   * @put result
   * @var bool
   */
  public $is_mail = false;

  /**
   * Whether or not to send push notification.
   *
   * <tt>false</tt> if not initialized.
   *
   * @post post
   * @put result
   * @var bool
   */
  public $is_push = false;

  /**
   * Whether or not to send SMS notification.
   *
   * <tt>false</tt> if not initialized.
   *
   * @post post
   * @put result
   * @var bool
   */
  public $is_sms = false;

  /**
   * Key of the email pattern.
   *
   * @put result
   * @var string/null
   */
  public $k_mail_pattern = null;

  /**
   * Bulk of login promotions. Login promotion primary keys serialized with JSON.
   * This logic was selected, because there is possibility to transfer list with more than 1000 elements.
   *
   * <tt>null</tt> if not initialized.
   *
   * @post post
   * @put post
   * @var string|null
   */
  public $s_login_promotion = null;

  /**
   * Additional notes for promotion payment pause period.
   *
   * <tt>null</tt> if not initialized.
   *
   * @post post
   * @var string|null
   */
  public $text_note = null;
}

?>