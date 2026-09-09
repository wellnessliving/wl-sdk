<?php

namespace WellnessLiving\Wl\Quiz\Activity;

/**
 * The status of form actions.
 *
 * Last used ID: 8.
 */
class ActivitySid
{
  /**
   * Form was added to the profile.
   */
  const ADD = 1;

  /**
   * Form was saved as a draft.
   */
  const DRAFT = 2;

  /**
   * Form was edited.
   */
  const EDIT = 3;

  /**
   * Form was exported to CSV file.
   */
  const EXPORT_CSV = 4;

  /**
   * Form was exported to PDF file.
   */
  const EXPORT_PDF = 5;

  /**
   * Form was printed.
   */
  const PRINTING = 6;

  /**
   * Form was submitted.
   */
  const SUBMIT = 7;

  /**
   * Form was viewed.
   */
  const VIEW = 8;
}

?>