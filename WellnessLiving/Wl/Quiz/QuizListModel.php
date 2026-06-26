<?php

namespace WellnessLiving\Wl\Quiz;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint to get list of business quizzes.
 *
 * @method WlModelRequest get()
 */
class QuizListModel extends WlModelAbstract
{
  /**
   * Whether to show active or inactive quizzes.
   *
   * @get get
   * @var int[]
   */
  public $a_active_id = [];

  /**
   * List of available quizzes within quiz holder.
   *
   * @get result
   * @var array
   */
  public $a_list = [];

  /**
   * List of quiz keys, needed for registration.
   *
   * @get result
   * @var array
   */
  public $a_quiz_register = [];

  /**
   * Shows which register quizzes must be returned.
   * `true` if return quizzes before registration, `false` otherwise.
   * `null` if return all quizzes for registration.
   *
   * @get get
   * @var bool|null
   */
  public $is_register_before = null;

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
   * Filter phrase to filter quizzes by name.
   *
   * @get get
   * @var string
   */
  public $text_search = '';
}

?>