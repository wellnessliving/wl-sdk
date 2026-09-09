<?php

namespace WellnessLiving\Wl\Report;

/**
 * Categories types of the report.
 *
 * Last used ID: 4.
 */
abstract class CategoryTypeSid
{
  /**
   * The franchise report. Both franchisor and franchisee have access to this category type.
   *
   * @title Franchisee report.
   */
  const FRANCHISE = 3;

  /**
   * The franchisee report. Only franchisee have access to this category type.
   *
   * @title Franchisee report.
   */
  const FRANCHISEE = 4;

  /**
   * The franchisor report.
   *
   * @title Franchisor report.
   */
  const FRANCHISOR = 2;

  /**
   * The regular report.
   *
   * @title Regular report.
   */
  const REGULAR = 1;
}

?>