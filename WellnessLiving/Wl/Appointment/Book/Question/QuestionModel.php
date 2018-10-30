<?php

namespace WellnessLiving\Wl\Appointment\Book\Question;

use WellnessLiving\WlModelAbstract;

/**
 * Model to retrieve questions for the current service.
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
   * Service ID for getting the questions.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;
}

?>