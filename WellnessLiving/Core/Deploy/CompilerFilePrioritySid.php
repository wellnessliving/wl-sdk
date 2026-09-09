<?php

namespace WellnessLiving\Core\Deploy;

/**
 * Priorities for using files when compiling.
 *
 * When generating the result, different source files can generate the same resulting files.
 * For example, the core contains a file with a button image, but in the project or configuration
 * this file must be replaced by another file.
 * Conflict resolution is performed by assigning priority to the source directory.
 * Files from lower priority source directories can be replaced with files from higher priority directories.
 * In total, there are 3 levels of priority (ascending):
 * * core files - have the lowest priority;
 * * project files - have priority over the core and can override the resulting core files;
 * * config files - have the highest priority and can override the resulting core and project files.
 *
 * The higher the value of the constant, the higher the priority.
 */
class CompilerFilePrioritySid
{
  /**
   * File from configuration source. Has the highest priority.
   */
  const CONFIG = 10;

  /**
   * File from core.
   *
   * Core files have the lowest priority, as they can be overridden in the project and in the config.
   */
  const CORE = 1;

  /**
   * File from project.
   */
  const PROJECT = 2;
}

?>