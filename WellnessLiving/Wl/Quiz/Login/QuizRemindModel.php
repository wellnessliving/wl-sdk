<?php

namespace WellnessLiving\Wl\Quiz\Login;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for change quizzes which client must process.
 *
 * @method WlModelRequest post() Sends a reminder notification for an incomplete quiz.  Resolves the quiz login key from the response key when needed, validates access and that the quiz login exists and is visible, checks that the quiz is not restricted to staff only, then sends a reminder notification to the client.
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