<?php

namespace WellnessLiving\Wl\Quiz;

use WellnessLiving\WlModelAbstract;

/**
 * Api endpoint to manage single quiz.
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
  public array $a_element = [];

  /**
   * `true` if don't check user authorization, `false` otherwise.
   *
   * @get get
   * @post get
   * @var bool
   */
  public bool $can_anonymous = false;

  /**
   * Quiz active status.
   *
   * `true` if quiz is active.
   * `false` if quiz is not active.
   *
   * @get result
   * @var bool
   */
  public bool $is_active = true;

  /**
   * Business key within which quiz is managed.
   *
   * @get get
   * @post get
   * @var string
   * @see \RsBusinessSql
   */
  public string $k_business = '';

  /**
   * Quiz key.
   *
   * @get get
   * @post get,result
   * @var string
   */
  public string $k_quiz = '';

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
  public bool $show_numbering = true;

  /**
   * Quiz form title.
   *
   * @get result
   * @post post
   * @var string
   */
  public string $text_title = '';
}

?>