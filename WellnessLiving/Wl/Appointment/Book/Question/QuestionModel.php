<?php

namespace WellnessLiving\Wl\Appointment\Book\Question;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves questions for a selected service.
 *
 * @method WlModelRequest get() Retrieves questions for the current service.  Returns the list of intake questions defined for the specified service that the client must  answer before completing an appointment booking. Each question includes its text, a stable  hash key for matching answers, and input size metadata.
 */
class QuestionModel extends WlModelAbstract
{
  /**
   * A list of questions for the service. Each element contains: 
   *
   * <dl>
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
   * The service key used for retrieving questions.
   *
   * @get get
   * @var string
   */
  public $k_service = '0';
}

?>