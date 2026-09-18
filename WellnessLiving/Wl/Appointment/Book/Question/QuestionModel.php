<?php

namespace WellnessLiving\Wl\Appointment\Book\Question;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves questions for a selected service.
 *
 * @method WlModelRequest get() Retrieves questions for the current service.  Returns the list of intake questions defined for the specified service that the client must  answer before completing an appointment booking. Each question includes its text, a stable  hash key for matching answers, and input size metadata.
 * @method WlModelRequest post() Saves answers for an existing appointment.
 */
class QuestionModel extends WlModelAbstract
{
  /**
 * The list of answers for questions
 *
 * * Key is a question hash from {@link QuestionModel::$a_question}.
 * * Value is the answer text for that question.
 *
 * @post post
 * @var string[]
 */
  public $a_answer = [];

  /**
 * A list of questions for the service. Each element contains: 
 *
 * <dl>
 *   <dt>bool `has_answer`</dt>
 *   <dd>`true` if the current appointment already has a non-empty answer for this question, `false` otherwise.</dd>
 * 
 *   <dt>int `i_size`</dt>
 *   <dd>Number of text rows for the answer input. Values greater than 1 indicate a multi-line answer.</dd>
 * 
 *   <dt>bool `is_multiple`</dt>
 *   <dd>`true` if `i_size` is greater than 1, `false` otherwise.</dd>
 * 
 *   <dt>string `s_key`</dt>
 *   <dd>SHA1 hash of the question text, used as a unique identifier for the question.</dd>
 * 
 *   <dt>string `s_question`</dt>
 *   <dd>Question text.</dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_question;

  /**
 * Appointment key used to load or save question answers.
 *
 * Optional for question loading.
 * When provided, access is validated and `has_answer` is calculated from stored appointment answers.
 *
 * Required for answer saving.
 * Identifies the appointment where answers are saved after access validation.
 *
 * @get get
 * @post get
 * @var string
 */
  public $k_appointment = '0';

  /**
 * The service key used for retrieving questions.
 *
 * @get get
 * @var string
 */
  public $k_service = '0';
}

?>