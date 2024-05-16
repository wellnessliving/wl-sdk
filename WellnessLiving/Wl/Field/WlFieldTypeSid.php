<?php

namespace WellnessLiving\Wl\Field;

/**
 * Possible types of the custom fields: text, checkbox, radio buttons, etc.
 *
 * <b>!!! BE ATTENTIVE !!!</b>
 *
 * When you add a new field type, do not forget to test synchronization with electronic mail list managers. Search for
 * other constants in this class. You need to add your new constant in bulk places where other constants are found.
 */
class WlFieldTypeSid
{
  /**
   * Checkbox field. The <tt>s_value</tt> for this type of field can be 1 if checkbox is checked and 0 otherwise.
   */
  const CHECKBOX = 2;

  /**
   * General field. Has its own format.
   */
  const GENERAL = 5;

  /**
   * Radio buttons.
   */
  const RADIO = 4;

  /**
   * Drop-down menu.
   */
  const SELECT = 3;

  /**
   * One line text field.
   */
  const TEXT = 1;
}

?>