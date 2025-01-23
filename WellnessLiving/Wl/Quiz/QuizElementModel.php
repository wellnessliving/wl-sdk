<?php

namespace WellnessLiving\Wl\Quiz;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

/**
 * Manages a single quiz.
 */
class QuizElementModel extends WlModelAbstract
{
  /**
   * Access log data.
   *
   * @get result
   * @var array[] Access log data.
   */
  public $a_access_log = [];

  /**
   * List of quiz elements.
   *
   * Each element responsible for one quiz question (inheritor of {@link \Core\Quiz\Element\ElementQuestionAbstract})
   * and contains array representation of individual question.
   * Structure of each value depend on type of element and contains public arguments of responsible class element.
   *
   * Order of the elements in array corresponds to order of elements on the form.
   *
   * @get result
   * @post post
   * @var array
   */
  public $a_element = [];

  /**
   * Quiz settings.
   *
   * @get result
   * @post post
   * @put result
   * @var array
   */
  public $a_setting = [];

  /**
   * Whether user has privileges to amend form.
   *
   * @get result
   * @var bool
   */
  public $can_amend = false;

  /**
   * Checks whether unauthorized user should be permitted to operate with form and make a response.
   * In general all quizzes should have users in response but it some cases such as registration process
   *  user might not exist yet, and we need ability to ignore check for user existence.
   * `true` - add possibility load form and accept response for non-registered user, `false` otherwise.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $can_anonymous = false;

  /**
   * Number of responses for specific quiz.
   *
   * @get result
   * @var int
   */
  public $i_responses = 0;

  /**
   * Quiz active status.
   *
   * `true` if quiz is active.
   * `false` if quiz is not active.
   *
   * @get result
   * @post post
   * @put post
   * @var bool
   */
  public $is_active = true;

  /**
   * `true` for request quiz from form builder page, `false` otherwise.
   *
   * @get get
   * @var bool
   */
  public $is_builder = false;

  /**
   * `true` if quiz is imported, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_imported;

  /**
   * Whether quiz response received by kiosk or direct mode link.
   *
   * `true` quiz response received by kiosk mode.
   * `false` quiz response received by direct or direct mode.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_simple = false;

  /**
   * List of quiz elements in json format.
   *
   * Order of the element in array corresponds to order of elements on the form.
   *
   * @post post
   * @var string
   */
  public $json_element = '';

  /**
   * List of purchase items for which this form is loaded in JSON format.
   *
   * Each element has the format `[id_purchase_item]::[k_id]`, where: <dl>
   *   <dt>int <var>id_purchase_item</var></dt>
   *   <dd>The ID of the purchase item. One of the {@link WlPurchaseItemSid} constants.</dd>
   *   <dt>string <var>k_id</var></dt>
   *   <dd>The item key. This depends on <var>id_purchase_item</var> of this array.</dd>
   * </dl>
   *
   * Empty in case when purchase item not specified or form loaded from direct link.
   *
   * @get get
   * @var string
   */
  public $json_purchase_item = '';

  /**
   * Business key within which quiz is managed.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Business type key. Used only for forms in the system business.
   *
   * `null` if not initialized.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $k_business_type = null;

  /**
   * Quiz key.
   *
   * @delete get
   * @get get
   * @post get,result
   * @put get
   * @var string
   */
  public $k_quiz = '';

  /**
   * Quiz login key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_quiz_login = '';

  /**
   * Whether to show numbering of the form elements that supports numbering.
   *
   * `true` to show numbering on the form for elements that supports numbering.
   * `false` to not show numbering.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $show_numbering = true;

  /**
   * Quiz form title.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_title = '';

  /**
   * UID of the client for which quiz requested.
   *
   * @get get
   * @var string
   */
  public $uid_client = '';

  /**
   * Direct URL to quiz.
   *
   * @get result
   * @put result
   * @var string
   */
  public $url_quiz;

  /**
   * Kiosk direct URL to quiz.
   *
   * @get result
   * @put result
   * @var string
   */
  public $url_quiz_kiosk;
}

?>