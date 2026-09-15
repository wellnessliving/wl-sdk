<?php

namespace WellnessLiving\Wl\Quiz\Login;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Api for change quizzes which client must process.
 *
 * @method WlModelRequest delete() Deletes from the client profile.  Validates access and that the quiz exists, resolves the quiz login record (considering franchise businesses when travel mode is flexible), validates that the quiz login can be deleted, then removes it, logs the removal, reindexes the client in search, and clears the related report and quiz note caches.
 * @method WlModelRequest post() Adds quiz for client profile.  Validates access to the target client and to the requested quiz or quizzes, requiring exactly one of `k_quiz` or `a_quiz` to be provided and all requested quizzes to exist and be active. If a visit is provided, marks the quizzes as uncompleted for that visit; otherwise creates new quiz login records for manual assignment. Clears the quiz note cache afterwards.
 * @method WlModelRequest put() Updates the required flag of a quiz login.  Resolves the quiz login key from the response key when needed, validates access to the quiz login, updates its record in the business shard to make it visible and set the required flag, then clears the quiz login cache and the related report cache.
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
   * The mode type. One of the {@link ModeSid} constants.
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