<?php

namespace WellnessLiving\Wl\User\Option;

/**
 * Possible settings for each user.
 *
 * First piece of constant used when chose method serialization data.
 * For example "SERIALIZE_PROMPT_LIST". First peace it 'SERIALIZE'.
 *
 * If you need add some another method of serialization like "JSON" or "gcompres".
 *
 * Last used ID: 1.
 */
class OptionSid
{
  /**
   * Saved settings for confirmation modals.
   * Check mark "Do not show this message again".
   */
  const SERIALIZE_PROMPT_LIST = 1;
}

?>