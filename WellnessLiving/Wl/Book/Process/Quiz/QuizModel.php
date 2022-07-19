<?php

namespace WellnessLiving\Wl\Book\Process\Quiz;

use WellnessLiving\WlModelAbstract;

/**
 * Manages quizzes for the class or event and selected purchase option during booking process.
 */
class QuizModel extends WlModelAbstract
{
  /**
   * Keys of user's activity.
   *
   * @post result
   * @var string[]
   */
  public $a_login_activity = [];

  /**
   * List of purchase items. Each element has format <tt>[id_purchase_item]::[k_id]</tt>, where<dl>
   *  <dt>int <var>id_purchase_item</var></dt>
   *  <dd>ID of the purchase item. One of {@link WlPurchaseItemSid}.</dd>
   *  <dt>string <var>k_id</var></dt>
   *  <dd>Key of the item. Depends on <var>id_purchase_item</var> of this array.</dd>
   * </dl>
   *
   * Empty if no purchases are made for booking.
   *
   * @get get
   * @var string[]
   */
  public $a_purchase_item = [];

  /**
   * List of quizzes. Each element has next structure:<dl>
   *  <dt>bool <var>is_require</var></dt>
   *  <dd>Whether the quiz is required and can not be skipped.</dd>
   *  <dt>string <var>k_quiz</var></dt>
   *  <dd>Quiz key.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_quiz = [];

  /**
   * List of quiz response keys.
   * Key is quiz key .
   * Value is response key or special value {@link \WellnessLiving\Wl\Quiz\Response\QuizResponse} constant.
   *
   * @post post
   * @var array
   */
  public $a_quiz_response = [];

  /**
   * Selected assets.
   *
   * Every element has keys:
   * <dl><dt>int <var>i_index</var></dt><dd>Order number of the asset (may be from 1 to asset quantity).</dd>
   * <dt>string <var>k_resource</var></dt><dd>Asset key.</dd></dl>
   *
   * @post post
   * @var array[]
   * @see \RsResourceSql
   */
  public $a_resource = [];

  /**
   * Selected sessions.
   *
   * Keys - class period key.
   * Values - index arrays of dates/time when session is occurred. In MySQL format. In GMT.
   *
   * @post post
   * @var array
   */
  public $a_session_select = [];

  /**
   * Keys of books are made.
   *
   * @post result
   * @var string[]
   */
  public $a_visit = [];
}

?>