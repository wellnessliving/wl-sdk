<?php

namespace WellnessLiving\Wl\Catalog\Quiz;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

/**
 * Manages quizzes for the selected purchase options.
 *
 * @method WlModelRequest get()
 */
class QuizModel extends WlModelAbstract
{
  /**
   * List of purchase items. Each element has format <tt>[id_purchase_item]::[k_id]</tt>, where
   *
   * Empty if no purchases are made for booking.
   *
   * <dl>
   *   <dt>int `id_purchase_item`</dt>
   *   <dd>ID of the purchase item. One of {@link WlPurchaseItemSid}.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>Key of the item. Depends on <var>id_purchase_item</var> of this array.</dd>
   * </dl>
   * @get get
   * @var string[]
   */
  public $a_purchase_item = [];

  /**
   * List of quizzes. Each element has next structure:
   *
   * <dl>
   *   <dt>bool `is_require`</dt>
   *   <dd>Whether the quiz is required and can not be skipped.</dd>
   * 
   *   <dt>string `k_quiz`</dt>
   *   <dd>Quiz key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Quiz title.</dd>
   * </dl>
   * @get result
   * @var array{
   *     is_require: bool,
   *     k_quiz: string,
   *     text_title: string
   * }
   */
  public $a_quiz = [];

  /**
   * Key of a business.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of a user who is making a purchase.
   *
   * `null` in case when quizzes requested for guest.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>