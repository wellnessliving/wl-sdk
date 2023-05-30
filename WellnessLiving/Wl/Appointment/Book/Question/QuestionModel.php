<?php

namespace WellnessLiving\Wl\Appointment\Book\Question;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves questions for a selected service.
 */
class QuestionModel extends WlModelAbstract
{
  /**
   * A list of questions for the service.
   *
   * @get result
   * @var array
   */
  public $a_question = [];

  /**
   * The service ID used for retrieving questions.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;
}

?>