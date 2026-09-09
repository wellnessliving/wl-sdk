<?php

namespace WellnessLiving\Wl\Backend\Setup\Classes;

/**
 * List of Setup->Classes sort options.
 */
class ClassesSortSid
{
  /**
   * Sort by name/title.
   * Each entity can be sorted by name/title.
   */
  const NAME = 1;

  /**
   * Sort by lowest price available.
   */
  const PRICE = 2;

  /**
   * Sort by date of the first bookable upcoming session.
   */
  const UPCOMING_SESSION_DATE = 3;
}

?>