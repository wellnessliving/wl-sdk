<?php

namespace WellnessLiving\Studio\Build\StartForm;

/**
 * Start forms for starting builds.
 *
 * Last used ID: 2
 */
class BuildStartFormSid
{
  /**
   * Simple Ok/Cancel confirmation form.
   *
   * This is the default form.
   */
  const CONFIRM = 1;

  /**
   * Allows to select one of the latest revisions to downgrade to.
   */
  const DOWNGRADE = 2;
}

?>