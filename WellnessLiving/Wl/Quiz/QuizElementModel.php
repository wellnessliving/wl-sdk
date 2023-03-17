<?php

namespace WellnessLiving\Wl\Quiz;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that manages a single quiz.
 */
class QuizElementModel extends WlModelAbstract
{
  /**
   * A list of quiz elements.
   *
   * The order of the element in the array that corresponds to the order of the elements on the form.
   *
   * @get result
   * @post post
   * @var array
   */
  public $a_element = [];

  /**
   * This will be `true` if the endpoint doesn't check for user authorization. Otherwise, this will be `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $can_anonymous = false;

  /**
   * Determines whether the quiz is active.
   *
   * This will be `true` if the quiz is active. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_active = true;

  /**
   * The business key within which the quiz is managed.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * The quiz's key.
   *
   * @get get
   * @post get,result
   * @var string
   */
  public $k_quiz = '';

  /**
   * Determines whether to display numbering of the form elements that support numbering.
   *
   * This will be `true` if numbering for elements is displayed. Otherwise, this will be `false`.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $show_numbering = true;

  /**
   * The quiz's form title.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_title = '';
}

?>