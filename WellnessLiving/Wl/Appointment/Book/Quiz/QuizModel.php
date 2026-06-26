<?php

namespace WellnessLiving\Wl\Appointment\Book\Quiz;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

/**
 * Manages quizzes for the service or the asset and selected purchase option during booking process.
 *
 * @method WlModelRequest get() Defines a list of required quizzes.
 */
class QuizModel extends WlModelAbstract
{
  /**
   * List of required quizzes. Each element has next structure:
   *
   * <dl>
   *   <dt>bool `is_require`</dt>
   *   <dd>Whether the quiz is required.</dd>
   * 
   *   <dt>string `k_quiz`</dt>
   *   <dd>Quiz key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Quiz title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_quiz = [];

  /**
   * Purchase item ID.
   *
   * @get get
   * @var int|null
   * @see WlPurchaseItemSid
   */
  public $id_purchase_item = null;

  /**
   * `true` to return both optional and required forms; `false` to return only required forms.
   *
   * @get get
   * @var bool
   */
  public $is_all = false;

  /**
   * List of add-ons.
   *
   * @get get
   * @var string
   */
  public $json_shop_product_option = '[]';

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Promotion key or appointment key. Depends on {@link QuizModel::$id_purchase_item}.
   *
   * @get get
   * @var string|null
   */
  public $k_id = null;

  /**
   * Resource key.
   *
   * @get get
   * @var string|null
   */
  public $k_resource = null;

  /**
   * Service key.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;

  /**
   * User key.
   * Empty if guest.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>