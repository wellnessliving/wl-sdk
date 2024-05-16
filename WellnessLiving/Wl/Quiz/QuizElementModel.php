<?php

namespace WellnessLiving\Wl\Quiz;

use WellnessLiving\WlModelAbstract;

/**
 * Manages a single quiz.
 */
class QuizElementModel extends WlModelAbstract
{
  /**
   * List of quiz elements.
   *
   * Order of the element in array corresponds to order of elements on the form.
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
   * List of quiz elements in json format.
   *
   * Order of the element in array corresponds to order of elements on the form.
   *
   * @post post
   * @var string
   */
  public $json_element = '';

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
}

?>