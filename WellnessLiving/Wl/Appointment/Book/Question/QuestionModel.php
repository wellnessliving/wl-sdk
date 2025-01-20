<?php

namespace WellnessLiving\Wl\Appointment\Book\Question;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves questions for a selected service.
 */
class QuestionModel extends WlModelAbstract
{
  /**
   * A list of questions for the service.
   *
   * @get result
   * @var array
   */
  public $a_question;

  /**
   * The service key used for retrieving questions.
   *
   * @get get
   * @var string
   */
  public $k_service = '0';
}

?>