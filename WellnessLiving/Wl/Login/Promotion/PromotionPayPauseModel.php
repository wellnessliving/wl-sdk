<?php

namespace WellnessLiving\Wl\Login\Promotion;

use WellnessLiving\WlModelAbstract;

/**
 * Manages promotion payment pause periods.
 */
class PromotionPayPauseModel extends WlModelAbstract
{
  public const DATE_END_INDEFINITE = '0000-00-00';

  /**
   * End date of pause period in login promotion timezone. Can be set to special value
   * {@link PromotionPayPauseModel::DATE_END_INDEFINITE} to make the period indefinite until further action.
   *
   * <tt>null</tt> if it shouldn't be updated.
   *
   * @get get,result
   * @post get
   * @put get
   * @var string|null
   */
  public $dt_end = null;

  /**
   * Start date of pause period in login promotion timezone.
   *
   * <tt>null</tt> if it shouldn't be updated.
   *
   * @get get,result
   * @post get
   * @put get
   * @var string|null
   */
  public $dt_start = null;

  /**
   * Key of login promotion to create pause for.
   * Primary key in {@link \RsLoginPromotionSql} table.
   *
   * Ignored if {@link $k_promotion_pay_pause} is provided.
   *
   * <tt>null</tt> if not initialized.
   *
   * @delete get
   * @get get,result
   * @post get
   * @var string|null
   */
  public $k_login_promotion = null;

  /**
   * Key of the payment pause period to read or update.
   * Primary key in {@link \RsPromotionPayPauseSql} table.
   *
   * <tt>null</tt> if not initialized or request is based on {@link $k_login_promotion}.
   *
   * @delete get
   * @get get,result
   * @post get,result
   * @put get,result
   * @var string|null
   */
  public $k_promotion_pay_pause = null;

  /**
   * Additional notes for promotion payment pause period.
   *
   * <tt>null</tt> if it shouldn't be updated.
   *
   * @get result
   * @post post
   * @put put
   * @var string|null
   */
  public $text_note = null;
}

?>