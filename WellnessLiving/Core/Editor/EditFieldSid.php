<?php

namespace WellnessLiving\Core\Editor;

/**
 * A list of field types that may occur in the editor form.
 *
 * Last used ID: 17.
 */
abstract class EditFieldSid
{
  /**
   * Button.
   */
  const BUTTON = 12;

  /**
   * Checkbox.
   */
  const CHECKBOX = 4;

  /**
   * A list with checkboxes.
   */
  const CHECKLIST = 5;

  /**
   * A list with checkboxes which were got from API.
   */
  const CHECKLIST_API = 9;

  /**
   * Date.
   */
  const DATE = 13;

  /**
   * A list of attached files.
   */
  const FILE = 10;

  /**
   * Hidden field.
   */
  const HIDDEN = 8;

  /**
   * Image.
   */
  const IMAGE = 14;

  /**
   * Special field, which is not rendered, it should be added on the page somewhere outside the editor.
   */
  const NOTHING = 11;

  /**
   * Input for numbers.
   */
  const NUMBER = 15;

  /**
   * A list of options which was got from API.
   */
  const SELECT_API = 7;

  /**
   * One of SID constants.
   */
  const SID = 2;

  /**
   * Custom rendered template.
   */
  const TEMPLATE = 6;

  /**
   * One-line text input.
   */
  const TEXT = 1;

  /**
   * Textarea.
   */
  const TEXTAREA = 3;

  /**
   * Input for time.
   */
  const TIME = 16;

  /**
   * Custom view.
   */
  const VIEW = 17;
}

?>