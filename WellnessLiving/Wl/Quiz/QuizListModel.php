<?php

namespace WellnessLiving\Wl\Quiz;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint to get list of business quizzes.
 *
 * @method WlModelRequest get() Returns the list of business quizzes together with client registration and import status.  Loads the quiz list for the business filtered by active state and search phrase, then  marks which quizzes still require registration for the current login and which quizzes  were imported from an external system. Also stores the requested active-state filter as  the user's default quiz view.
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
   * List of available quizzes within quiz holder: 
   *
   * <dl>
   *   <dt>string `dtu_create`</dt>
   *   <dd>Date and time the quiz was created, in UTC.</dd>
   * 
   *   <dt>string `dtu_edit`</dt>
   *   <dd>Date and time the quiz was last edited, in UTC.</dd>
   * 
   *   <dt>bool `is_active`</dt>
   *   <dd>Whether the quiz is active. `true` if active, `false` otherwise.</dd>
   * 
   *   <dt>string `k_quiz`</dt>
   *   <dd>Quiz key.</dd>
   * 
   *   <dt>array `a_config`</dt>
   *   <dd>
   *     Quiz form configuration:
   *     <dl>
   *       <dt>bool `show_numbering`</dt>
   *       <dd>Whether numbering is shown for elements that support numbering.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `s_file`</dt>
   *   <dd>Unique random string used for the form kiosk mode page.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Quiz title.</dd>
   * 
   *   <dt>string|null `uid_create`</dt>
   *   <dd>Key of the user who created the quiz. `null` if unknown or imported.</dd>
   * 
   *   <dt>string|null `uid_edit`</dt>
   *   <dd>Key of the user who last edited the quiz. `null` if unknown or imported.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_list = [];

  /**
   * List of quiz keys, needed for registration.
   * Each element is a primary key in the `wl_quiz` table.
   *
   * @get result
   * @var array<string>
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