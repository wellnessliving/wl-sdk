<?php

namespace WellnessLiving\Core\Request\FrontController;

/**
 * Represents a list of imposed priorities of entries of the front controller map.
 *
 * **Important** Values of the constants MUST represent order in which map entries are applied.
 *   To support this, it is ALLOWED that values of the constants be changed.
 *
 * Lower value of the constant means that this map entry will be checked first, thus having higher priority.
 *
 * Although you are free to create as many constants in this class as you may need, you should try to avoid excessive
 * usage of imposed priorities where possible. Try to use natural priorities where possible.
 * You may also use {@link \Core\Request\FrontController\FrontControllerMapEntry::$s_regular_order} to tune order of
 * application of regular expressions within one prefix and imposed priority.
 *
 * See <tt>namespace.Core/Request/FrontController/doc/map-data-structure.md</tt> for definition of imposed and natural
 * priorities.
 */
class FrontControllerPrioritySid
{
  /**
   * High-priority map entry from core.
   *
   * Although this priority is high, it is lower than
   * {@link FrontControllerPrioritySid::PROJECT_LOW}.
   */
  const CORE_HIGH = 4;

  /**
   * Low-priority map entry from code.
   *
   * This is the most low priority among others.
   */
  const CORE_LOW = 6;

  /**
   * Normal-priority map entry from code.
   *
   * Most map entries originated from core should have this priority.
   */
  const CORE_NORMAL = 5;

  /**
   * High-priority project-wide map entries.
   *
   * Use this priority for entries that should be applied before normal project-wide entries.
   *
   * This is the highest priority among others.
   */
  const PROJECT_HIGH = 1;

  /**
   * Low-priority project-wide map entries.
   *
   * Use this priority for entries that should be applied after normal project-wide entries.
   */
  const PROJECT_LOW = 3;

  /**
   * Project-wide map entries with normal priority.
   *
   * Use this priority if you feel that this map entry may interfere with map entries originated from core.
   * In all other cases, keeping default
   * {@link FrontControllerPrioritySid::CORE_NORMAL} is ok.
   *
   * There should be a possibility to override rules gathered in code with rules originated from project.
   * For this, project map has higher priority than core map.
   *
   * You should avoid setting of `PROJECT` priority on map entries originated from core.
   * This may lead to that some resources can not be overridden in project.
   * Use {@link FrontControllerPrioritySid::CORE_HIGH} if you need a high-priority
   * map entries in core.
   */
  const PROJECT_NORMAL = 2;
}

?>