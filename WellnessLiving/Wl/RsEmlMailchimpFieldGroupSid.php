<?php

namespace WellnessLiving\Wl;

/**
 * A list of interest grouping types.
 *
 * Names of the constants correspond to names in mailchimp.
 *
 * @link http://apidocs.mailchimp.com/api/2.0/lists/interest-grouping-add.php See a list of value acceptable to type argument.
 */
abstract class RsEmlMailchimpFieldGroupSid
{
  /**
   * Checkboxes.
   */
  const CHECKBOXES = 1;

  /**
   * A drop-down list.
   */
  const DROPDOWN = 3;

  /**
   * A hidden field.
   */
  const HIDDEN = 2;

  /**
   * A set of radio buttons.
   */
  const RADIO = 4;
}

?>