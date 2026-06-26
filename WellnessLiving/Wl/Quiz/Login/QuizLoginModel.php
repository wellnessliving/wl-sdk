<?php

namespace WellnessLiving\Wl\Quiz\Login;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for change quizzes which client must process.
 *
 * @method WlModelRequest delete() Deletes from the client profile.
 * @method WlModelRequest post() Adds quiz for client profile.
 * @method WlModelRequest put()
 */
class QuizLoginModel extends WlModelAbstract
{
  /**
   * List of quizzes keys.
   *
   * `null` when we do not send data from frontend and send `k_quiz` instead.
   *
   * @post post
   * @var string[]|null
   * @link QuizSql
   */
  public $a_quiz = [];

  /**
   * The mode type.
   *
   * @delete get
   * @var int
   */
  public $id_mode = 0;

  /**
   * Whether filling out a form is obligatory and should be passed urgently.
   * `true` - obligatory, `false` - otherwise.
   *
   * @put post
   * @var bool
   */
  public $is_require = false;

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
   * @post get
   * @var string
   * @link QuizSql
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
   * Quiz response key.
   *
   * Passed when need change hidden status for draft response(which created from request), otherwise `null`.
   *
   * @put get
   * @var string|null
   */
  public $k_quiz_response = null;

  /**
   * Visit key.
   *
   * @post post
   * @var string
   */
  public $k_visit = '';

  /**
   * UID of the client.
   *
   * @post post
   * @var string
   */
  public $uid_client = '';
}

?>