<?php

namespace WellnessLiving\Core\Quiz;

/**
 * List of render modes.
 */
class RenderModeSid
{
  /**
   * Mode for displaying the error message about access restriction to private quiz.
   */
  const ACCESS_DENIED_PRIVATE = 8;

  /**
   * Mode to provide ability to perform question amendment.
   */
  const AMEND = 5;

  /**
   * Mode to display only part of the question with answer element.
   */
  const AMEND_ADD = 7;

  /**
   * Mode to display only answer of the question without actual question information.
   */
  const ANSWER = 6;

  /**
   * Edit mode on quiz edit form.
   */
  const EDIT = 2;

  /**
   * Preview mode on quiz edit form.
   */
  const PREVIEW = 1;

  /**
   * Mode to display element with response.
   */
  const REPORT = 4;

  /**
   * Response mode on the form where response expected.
   */
  const RESPONSE = 3;
}

?>