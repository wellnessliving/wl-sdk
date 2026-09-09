<?php

namespace WellnessLiving\Wl\Report\Filter\QuizFormStatus;

use WellnessLiving\Wl\Report\WlReportSid;

/**
 * Possible form statuses to filter on in {@link WlReportSid::PROFILE_FORM_RESPONSE} report.
 *
 * * Last used ID: 3.
 */
class QuizFormStatusSid
{
  /**
   * A form is completed and filled out.
   */
  const COMPLETED = 1;

  /**
   * A form in draft mode.
   */
  const DRAFT = 3;

  /**
   * A form was generated but not filled out.
   */
  const NOT_COMPLETED = 2;
}

?>