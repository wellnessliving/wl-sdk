<?php

namespace WellnessLiving\Wl\Business\Franchise\Report\Curves;

/**
 * Curves custom field list.
 *
 * These fields are imported to our database and used to generate files.
 *
 * Constants are grouped by first word in the name:
 * - ORGANIZATION - custom fields of the franchisee;
 * - STAFF - staff member (owners, managers, other staff members) custom fields.
 */
class CurvesCustomFieldSid
{
  /**
   * Franchisee address.
   *
   * @title Address
   * @deprecated Now is not used. Field from the Business General Information.
   */
  const ORGANIZATION_ADDRESS = 1;

  /**
   * Franchisee city.
   *
   * @title City
   * @deprecated Now is not used. Field from the Business General Information.
   */
  const ORGANIZATION_CITY = 2;

  /**
   * Franchisee territory name.
   *
   * @title Territory Name
   */
  const ORGANIZATION_NAME_SECOND = 3;

  /**
   * Franchisee number.
   *
   * @title Franchise Number
   */
  const ORGANIZATION_NUMBER = 8;

  /**
   * Franchisee phone.
   *
   * @title Phone
   * @deprecated Now is not used. Field from the Business General Information.
   */
  const ORGANIZATION_PHONE = 4;

  /**
   * Franchisee state.
   *
   * @title State
   * @deprecated Now is not used. Field from the Business General Information.
   */
  const ORGANIZATION_STATE = 5;

  /**
   * Franchisee ZIP.
   *
   * @title ZIP
   * @deprecated Now is not used. Field from the Business General Information.
   */
  const ORGANIZATION_ZIP = 6;

  /**
   * Staff member address.
   *
   * @title Address
   */
  const STAFF_ADDRESS = 9;

  /**
   * Staff member city.
   *
   * @title City
   */
  const STAFF_CITY = 10;

  /**
   * Staff member country.
   *
   * @title Country
   */
  const STAFF_COUNTRY = 13;

  /**
   * Staff member OI Number.
   *
   * @title OI Number
   */
  const STAFF_OI_NUMBER = 7;

  /**
   * Staff member state.
   *
   * @title State
   */
  const STAFF_STATE = 11;

  /**
   * Staff member zip.
   *
   * @title ZIP
   */
  const STAFF_ZIP = 12;
}

?>