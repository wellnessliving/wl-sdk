<?php

namespace WellnessLiving\Wl\Quiz;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api endpoint to clone single quiz.
 *
 * @method WlModelRequest post()
 */
class QuizElementCloneModel extends WlModelAbstract
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
   * Key of quiz to copy.
   *
   * @post post
   *
   * @var string
   */
  public $k_quiz_clone = '';

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
}

?>