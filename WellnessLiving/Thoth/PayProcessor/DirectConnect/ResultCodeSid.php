<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect;

/**
 * DC Gateway <tt>ResultCode</tt> enumeration.
 */
class ResultCodeSid
{
  /**
   * User does not have required access privileges.
   */
  const ACCESS_DENIED = 1;

  /**
   * DC Gateway failed to reach Processor.
   */
  const INTERNAL_ERROR = 2;

  /**
   * Request was rejected by DC Gateway.
   */
  const INVALID_ARGUMENT = 3;

  /**
   * Invalid customer ID.
   */
  const INVALID_CUSTOMERID = 17;

  /**
   * DC Gateway rejected username and/or password.
   */
  const INVALID_LOGIN = 4;

  /**
   * DC Gateway rejected PartnerID.
   */
  const INVALID_PARTNERID = 5;

  /**
   * Request was rejected by DC Gateway.
   */
  const INVALID_RECORD = 6;

  /**
   * DC Gateway rejected username.
   */
  const INVALID_USER = 7;

  /**
   * DC Gateway rejected username.
   */
  const INVALID_USER_STATUS = 8;

  /**
   * DC Gateway rejected VendorID.
   */
  const INVALID_VENDORID = 9;

  /**
   * User lacks sufficient privileges for requested operation.
   */
  const NOT_ENOUGH_PRIVILEGE = 10;

  /**
   * Request was processed successfully by processor.
   */
  const OK = 11;

  /**
   * Request message included an invalid transaction type for the specified operation.
   */
  const TRANSACTION_TYPE_NOT_SUPPORTED_BY_HOST = 12;

  /**
   * DC Gateway failed to reach Processor.
   */
  const UNKNOWN_ERROR = 13;

  /**
   * DC Gateway cannot add duplicate username for Merchant.
   */
  const USERNAME_ALREADY_IN_USE = 15;

  /**
   * DC Gateway rejected username.
   */
  const USERNAME_HAS_INVALID_CHARACTERS = 16;

  /**
   * DC Gateway rejected username.
   */
  const USER_NOT_FOUND = 14;
}

?>