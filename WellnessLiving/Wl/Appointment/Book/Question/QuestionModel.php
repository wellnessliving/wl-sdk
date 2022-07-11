<?php

namespace WellnessLiving\Wl\Appointment\Book\Question;

use WellnessLiving\WlModelAbstract;

/**
 * A model to retrieve questions for the current service.
 */
class QuestionModel extends WlModelAbstract
{
  /**
   * A list of questions for the current service.
   *
   * @get result
   * @var array
   */
  public $a_question = [];

  /**
   * The service ID for retrieving questions.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;
}

?>