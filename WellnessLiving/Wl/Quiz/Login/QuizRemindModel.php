<?php

namespace WellnessLiving\Wl\Quiz\Login;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for change quizzes which client must process.
 *
 * @method WlModelRequest post()
 */
class QuizRemindModel extends WlModelAbstract
{
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
   * Quiz response key.
   *
   * Passed when need send reminder for draft response(which created from request), otherwise `null`.
   *
   * @post get
   * @var string|null
   */
  public $k_quiz_response = null;
}

?>