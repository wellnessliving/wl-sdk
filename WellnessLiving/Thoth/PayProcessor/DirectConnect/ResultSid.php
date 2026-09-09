<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect;

/**
 * DC Gateway Result codes.
 */
class ResultSid
{
  /**
   * Invalid Account Number.
   *
   * Request was rejected by DC Gateway.
   */
  const ACCOUNT_INVALID = 23;

  /**
   * Insufficient Funds Available.
   *
   * Request was rejected by the processor.
   */
  const AMOUNT_INSUFFICIENT = 50;

  /**
   * Invalid Amount.
   *
   * Request message included an amount value that is < 0.01 or greater than 99999.99;
   *
   * Request message included an improperly formatted amount value;
   *
   * Request message included an amount value containing alphabetic characters or symbols (other than decimal point).
   */
  const AMOUNT_INVALID = 4;

  /**
   * User Authentication Failed.
   *
   * DC Gateway rejected username and/or password.
   */
  const AUTHENTICATION_ERROR = 1;

  /**
   * Failed AVS Check.
   *
   * Request was rejected by processor.
   *
   * Incomplete or inconsistent address information provided by Client Application for Card number.
   */
  const AVS_ERROR = 112;

  /**
   * Capture Error.
   *
   * Request was rejected by DC Gateway.
   */
  const CAPTURE_ERROR = 111;

  /**
   * Check DL Verification Requires DL State.
   *
   * Request was rejected by DC Gateway.
   */
  const CHECK_DL = 30;

  /**
   * Invalid Check Holder Name.
   *
   * Request was rejected by the processor.
   */
  const CHECK_HOLDER_INVALID = 28;

  /**
   * Invalid Check Number.
   *
   * Request was rejected by the processor.
   */
  const CHECK_NUMBER_INVALID = 29;

  /**
   * Credit Error.
   *
   * Return request was rejected by the processor.
   */
  const CREDIT_ERROR = 105;

  /**
   * Customer Reference Number Not Found.
   *
   * Request was rejected by DC Gateway.
   */
  const CUSTOMER_NX = 20;

  /**
   * Credit Card is Expired.
   */
  const DATE_EXPIRE = 54;

  /**
   * Error Checking Duplicate.
   *
   * Request was not processed by DC Gateway.
   */
  const DUPLICATE_ERROR = 1013;

  /**
   * Duplicate Suppression Timeout.
   *
   * DC Gateway unable to complete request within allotted time duration.
   */
  const DUPLICATE_SUPPRESSION_TIMEOUT = 107;

  /**
   * Duplicate Transaction.
   *
   * Request was rejected by DC Gateway.
   */
  const DUPLICATE_TRANSACTION = 110;

  /**
   * No Records To Process (in the current batch).
   *
   * Request was rejected by DC Gateway.
   */
  const EMPTY_PROCESS = 1015;

  /**
   * No Records To Settle (in the current batch).
   *
   * Request was rejected by DC Gateway.
   */
  const EMPTY_SETTLE = 1014;

  /**
   * Invalid Expiration Date.
   *
   * Request was rejected by DC Gateway.
   */
  const EXPIRATION_INVALID = 24;

  /**
   * Field Format Error.
   *
   * DC Gateway failed while parsing request message.
   */
  const FIELD_FORMAT = 7;

  /**
   * Generic Host Error.
   *
   * Processor failed to respond or responded in an unexpected way to a valid DC Gateway request.
   */
  const GENERIC_HOST = 1000;

  /**
   * General Error.
   *
   * Processor failed to respond or responded in an unexpected way to a valid DC Gateway request.
   */
  const GENERIC_PROCESSOR = 99;

  /**
   * Invalid ABA Number.
   *
   * Request was rejected by DC Gateway.
   */
  const INVALID_ABA_NUMBER = 22;

  /**
   * Invalid Security Code.
   */
  const INVALID_CVC = 82;

  /**
   * Invalid Transaction Returned from Host.
   *
   * Gateway forwarded request to processor for an unsupported operation.
   */
  const INVALID_TRANSACTION_RETURNED = 100;

  /**
   * Too Many Line Items.
   *
   * DC Gateway unable to process payments with more than 99 - line item details.
   */
  const ITEM_LINE = 10;

  /**
   * Invalid Merchant Information.
   *
   * Processor does not recognize Merchant Account.
   */
  const MERCHANT_INVALID = 5;

  /**
   * Invalid Parameter Stream.
   *
   * Client Application failed to pass all necessary parameters to requested operation for messaging protocol.
   */
  const PARAMETER_INVALID = 9;

  /**
   * Payment Type Not Supported.
   *
   * Gateway forwarded request to processor for an unsupported operation.
   */
  const PAYMENT_TYPE_SUPPORT = 1010;

  /**
   * Error Finishing Transaction.
   *
   * Processor failed to respond within allotted time duration to a DC Gateway request.
   */
  const PROCESSOR_FINISH = 1012;

  /**
   * Transaction did not connect (to NCN because SecureNCIS is not running on the web server).
   *
   * DC Gateway unable to communicate with processor.
   */
  const PROCESSOR_NCN = 40;

  /**
   * Processor Not Available.
   *
   * DC Gateway failed to reach processor.
   */
  const PROCESSOR_OFFLINE = 102;

  /**
   * Not a Transaction Server.
   *
   * Gateway unable to reach processor that supports requested operation.
   */
  const PROCESSOR_SERVER = 8;

  /**
   * Unsupported Processor.
   *
   * DC Gateway unable to forward request to specified processor.
   */
  const PROCESSOR_SUPPORT = 1006;

  /**
   * Timeout waiting for Processor Response.
   *
   * Processor failed to respond to valid DC Gateway request within allotted time duration.
   */
  const PROCESSOR_TIMEOUT = 104;

  /**
   * Error Reading Response from Host.
   *
   * Processor failed to respond to valid DC Gateway request.
   */
  const READ_ERROR = 103;

  /**
   * Invalid Receipt Information.
   *
   * Receipt information is improperly configured in DC Gateway for Merchant account.
   */
  const RECEIPT_INVALID = 27;

  /**
   * Invalid Reference Number.
   *
   * Request was rejected by DC Gateway.
   */
  const REFERENCE_INVALID = 26;

  /**
   * Referral.
   *
   * Gateway unable to reach processor that supports requested operation.
   */
  const REFERRAL = 13;

  /**
   * Invalid Request Message.
   *
   * Client Application failed to pass all necessary parameters to requested operation for messaging protocol.
   */
  const REQUEST_INVALID = 1007;

  /**
   * Cannot Exceed Sales Cap.
   *
   * Request was rejected by DC Gateway.
   */
  const SALES_EXCEED = 113;

  /**
   * Client Timeout Waiting for Response.
   *
   * Processor failed to respond to a request from DC Gateway.
   */
  const TIMEOUT_CLIENT = 11;

  /**
   * Timeout Waiting for Host Response.
   *
   * Processor failed to respond to valid DC Gateway request
   */
  const TIMEOUT_HOST = 109;

  /**
   * Timeout Value too Small or Invalid Time Out.
   *
   * Value Request was rejected by DC Gateway.
   */
  const TIMEOUT_INVALID = 101;

  /**
   * Invalid Transaction.
   *
   * DC Gateway forwarded request to processor for an unsupported operation.
   */
  const TRANSACTION_INVALID = 2;

  /**
   * Transaction NOT Processed; Generic Host Error.
   *
   * DC Gateway failed to reach Processor.
   */
  const TRANSACTION_NOT_PROCESSED = -100;

  /**
   * Original Transaction ID Not Found.
   *
   * Request was rejected by DC Gateway.
   */
  const TRANSACTION_NX = 19;

  /**
   * Error Starting Transaction.
   *
   * DC Gateway failed to reach processor.
   */
  const TRANSACTION_START = 1011;

  /**
   * Invalid Transaction Type.
   *
   * Request message included an invalid transaction type for the specified operation.
   */
  const TRANSACTION_TYPE = 3;

  /**
   * Transaction Type Not Allowed.
   *
   * Valid transaction types are: Authorization, Capture, Credit, {@link TransactionTypeSid::CAPTURE},
   * <tt>GetStatus</tt>, <tt>PostAuth</tt>, Purged, Receipt, {@link TransactionTypeSid::REPEAT_SALE}, Sale, Void.
   */
  const TRANSACTION_TYPE_NX = 1005;

  /**
   * Transaction Type Not Supported by Host.
   *
   * Gateway unable to reach processor that supports requested operation.
   */
  const TRANSACTION_TYPE_PROCESSOR = 25;

  /**
   * Transaction Type Not Supported In This Version.
   *
   * Valid transaction types are: Authorization, Capture, Credit, {@link TransactionTypeSid::CAPTURE},
   * <tt>GetStatus</tt>, <tt>PostAuth</tt>, Purged, Receipt, {@link TransactionTypeSid::REPEAT_SALE}, Sale, Void.
   */
  const TRANSACTION_TYPE_VERSION = 14;

  /**
   * Invalid Login Blocked.
   *
   * DC Gateway rejected username and/or password.
   */
  const USER_BLOCK = 1003;

  /**
   * Invalid Login Deactivated.
   *
   * DC Gateway refused request received for a valid username because the account is inactive.
   */
  const USER_INACTIVE = 1004;

  /**
   * Invalid Login.
   *
   * DC Gateway rejected username and/or password.
   */
  const USER_LOGIN = 1001;

  /**
   * Insufficient Privilege or Invalid Amount.
   *
   * DC Gateway refused to process payment request for username.
   */
  const USER_PRIVILEGE = 1002;

  /**
   * Invalid Version.
   *
   * Client Application failed to pass all necessary parameters to requested operation for messaging protocol.
   */
  const VERSION_INVALID = 1008;

  /**
   * Void Error.
   *
   * Request was rejected by DC Gateway.
   */
  const VOID_ERROR = 108;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.DirectConnect.ResultSid';
}

?>