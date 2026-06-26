<?php

namespace WellnessLiving\Wl\Profile\Form\Registration;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * List of user's uncompleted registration quizzes.
 *
 * @method WlModelRequest get()
 */
class RegistrationListModel extends WlModelAbstract
{
  /**
   * Require and optional to completion forms. Each element has the next structure: 
   *
   * <dl>
   *   <dt>bool `is_require`</dt>
   *   <dd>Whether form is require to completion.</dd>
   * 
   *   <dt>string `k_quiz`</dt>
   *   <dd>Quiz key.</dd>
   * 
   *   <dt>string `k_quiz_login`</dt>
   *   <dd>Quiz login key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Quiz title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_quiz = [];

  /**
   * Key of a business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of a user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>