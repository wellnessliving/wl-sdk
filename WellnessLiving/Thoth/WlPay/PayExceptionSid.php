<?php

namespace WellnessLiving\Thoth\WlPay;

use WellnessLiving\Wl\Pay\Transaction\WlPayTransactionStatusSid;

/**
 * List of pay exceptions.
 */
class PayExceptionSid
{
  /**
   * Invalid ABA number chosen.
   */
  const ABAN_EMPTY = 58;

  /**
   * Invalid ABA number chosen.
   */
  const ABAN_INVALID = 57;

  /**
   * User Authentication Failed.
   *
   * Gateway rejected username and/or password.
   */
  const ACCESS_AUTHENTICATE = 160;

  /**
   * Authentication token is not valid.
   */
  const ACCESS_TOKEN_INVALID = 181;

  /**
   * Account payment entry method is empty.
   */
  const ACCOUNT_ENTRY_EMPTY = 63;

  /**
   * Account holder type is empty.
   */
  const ACCOUNT_HOLDER_EMPTY = 64;

  /**
   * Account name is empty.
   */
  const ACCOUNT_NAME_EMPTY = 59;

  /**
   * Account name is too long.
   */
  const ACCOUNT_NAME_LONG = 60;

  /**
   * Account number is empty.
   */
  const ACCOUNT_NUMBER_EMPTY = 61;

  /**
   * Account number invalid.
   */
  const ACCOUNT_NUMBER_INVALID = 67;

  /**
   * Account number is too long.
   */
  const ACCOUNT_NUMBER_LONG = 62;

  /**
   * Account number is too short.
   */
  const ACCOUNT_NUMBER_SHORT = 66;

  /**
   * Account owner name does not equal billing name.
   */
  const ACCOUNT_OWNER_DOES_NOT_MATCH = 182;

  /**
   * Account owner is empty.
   */
  const ACCOUNT_OWNER_EMPTY = 69;

  /**
   * Account name is too long.
   */
  const ACCOUNT_OWNER_LONG = 70;

  /**
   * Account type is empty.
   */
  const ACCOUNT_TYPE_EMPTY = 65;

  /**
   * ACH check type or account type is invalid.
   *
   * @title ACH Check type or Account type is invalid.
   */
  const ACH_ACCOUNT_TYPE = 185;

  /**
   * ACH: Account Closed.
   */
  const ACH_E02 = 198;

  /**
   * ACH: No Account / Unable to Locate Account.
   */
  const ACH_E03 = 199;

  /**
   * ACH: Invalid Account Number.
   */
  const ACH_E04 = 200;

  /**
   * ACH: Unauthorized Debit to Consumer Account Using Corporate SEC Code.
   */
  const ACH_E05 = 201;

  /**
   * ACH: Authorization Revoked by Customer.
   */
  const ACH_E07 = 202;

  /**
   * ACH: Payment Stopped.
   */
  const ACH_E08 = 203;

  /**
   * ACH: Customer Advises Originator Not Known / Not Authorized.
   */
  const ACH_E10 = 204;

  /**
   * ACH: Customer Advises Entry Not in Accordance with Authorization.
   */
  const ACH_E11 = 205;

  /**
   * ACH: RDFI Not Qualified to Participate.
   */
  const ACH_E13 = 206;

  /**
   * ACH: Representative Payee Deceased or Unable to Continue.
   */
  const ACH_E14 = 207;

  /**
   * ACH: Beneficiary or Account Holder Deceased.
   */
  const ACH_E15 = 208;

  /**
   * ACH: Account Frozen.
   */
  const ACH_E16 = 209;

  /**
   * ACH: Invalid Account Number under Questionable Circumstances.
   */
  const ACH_E17 = 210;

  /**
   * ACH: Non-Transaction Account.
   */
  const ACH_E20 = 211;

  /**
   * ACH: Corporate Customer Advises Not Authorized.
   */
  const ACH_E29 = 212;

  /**
   * ACH: Invalid Image.
   */
  const ACH_E92 = 213;

  /**
   * ACH: Non-Negotiable.
   */
  const ACH_E93 = 214;

  /**
   * ACH: Breach of Warranty.
   */
  const ACH_E95 = 215;

  /**
   * ACH: Counterfeit / Forgery.
   */
  const ACH_E96 = 216;

  /**
   * ACH: Refer to Maker.
   */
  const ACH_E97 = 217;

  /**
   * Insufficient funds.
   *
   * Available balance is not sufficient to cover the amount of the debit entry.
   */
  const ACH_R01 = 124;

  /**
   * Bank account closed.
   *
   * Previously active account has been closed by the customer of RDFI.
   */
  const ACH_R02 = 125;

  /**
   * No bank account/unable to locate account.
   *
   * Account number does not correspond to the individual identified in the entry, or the account number designated is
   * not an open account.
   */
  const ACH_R03 = 126;

  /**
   * Invalid bank account number.
   *
   * Account number structure is not valid.
   */
  const ACH_R04 = 127;

  /**
   * Unauthorized Debit to Consumer Account Using Corporate SEC Code.
   */
  const ACH_R05 = 128;

  /**
   * Returned per ODFI request.
   *
   * ODFI requested the RDFI to return the entry.
   */
  const ACH_R06 = 129;

  /**
   * Authorization revoked by customer.
   *
   * Receiver has revoked authorization.
   */
  const ACH_R07 = 130;

  /**
   * Payment stopped.
   *
   * Receiver of a recurring debit has stopped payment of an entry.
   */
  const ACH_R08 = 131;

  /**
   * Uncollected funds.
   *
   * Collected funds are not sufficient for payment of the debit entry.
   */
  const ACH_R09 = 132;

  /**
   * Customer advises not authorized.
   *
   * Receiver has advised RDFI that originator is not authorized to debit his bank account.
   */
  const ACH_R10 = 133;

  /**
   * Check truncation entry return.
   *
   * To be used when returning a check truncation entry.
   */
  const ACH_R11 = 134;

  /**
   * Branch sold to another RDFI.
   *
   * RDFI unable to post entry destined for a bank account maintained at a branch sold to another financial institution.
   */
  const ACH_R12 = 135;

  /**
   * RDFI not qualified to participate.
   *
   * Financial institution does not receive commercial ACH entries.
   */
  const ACH_R13 = 136;

  /**
   * Representative payee deceased or unable to continue in that capacity.
   *
   * The representative payee authorized to accept entries on behalf of a beneficiary is either deceased or unable to
   * continue in that capacity.
   */
  const ACH_R14 = 137;

  /**
   * Beneficiary or bank account holder.
   *
   * (Other than representative payee) deceased* - (1) the beneficiary entitled to payments is deceased or (2) the bank
   * account holder other than a representative payee is deceased.
   */
  const ACH_R15 = 138;

  /**
   * Bank account frozen.
   *
   * Funds in bank account are unavailable due to action by RDFI or legal order.
   */
  const ACH_R16 = 139;

  /**
   * File record edit criteria.
   *
   * Fields rejected by RDFI processing (identified in return addenda).
   */
  const ACH_R17 = 140;

  /**
   * Improper effective entry date.
   *
   * Entries have been presented prior to the first available processing window for the effective date.
   */
  const ACH_R18 = 141;

  /**
   * Amount field error.
   *
   * Improper formatting of the amount field.
   */
  const ACH_R19 = 142;

  /**
   * Non-payment bank account.
   *
   * Entry destined for non-payment bank account defined by reg.
   */
  const ACH_R20 = 143;

  /**
   * Invalid company ID number.
   *
   * The company ID information not valid (normally CIE entries).
   */
  const ACH_R21 = 144;

  /**
   * Invalid individual ID number.
   *
   * Individual ID used by receiver is incorrect (CIE entries).
   */
  const ACH_R22 = 145;

  /**
   * Credit entry refused by receiver.
   *
   * Receiver returned entry because minimum or exact amount not remitted, bank account is subject to litigation, or
   * payment represents an overpayment, originator is not known to receiver or receiver has not authorized this credit
   * entry to this bank account.
   */
  const ACH_R23 = 146;

  /**
   * Duplicate entry.
   *
   * RDFI has received a duplicate entry.
   */
  const ACH_R24 = 147;

  /**
   * Addenda error.
   *
   * Improper formatting of the addenda record information.
   */
  const ACH_R25 = 148;

  /**
   * Mandatory field error.
   *
   * Improper information in one of the mandatory fields.
   */
  const ACH_R26 = 149;

  /**
   * Trace number error.
   *
   * Original entry trace number is not valid for return entry; or addenda trace numbers do not correspond with entry
   * detail record.
   */
  const ACH_R27 = 150;

  /**
   * Transit routing number check digit error.
   *
   * Check digit for the transit routing number is incorrect.
   */
  const ACH_R28 = 151;

  /**
   * Corporate customer advises not authorized.
   *
   * RDFI has been notified by corporate receiver that debit entry of originator is not authorized.
   */
  const ACH_R29 = 152;

  /**
   * RDFI not participant in check truncation program.
   *
   * Financial institution not participating in automated check safekeeping application.
   */
  const ACH_R30 = 153;

  /**
   * Permissible return entry (CCD and CTX only).
   *
   * RDFI has been notified by the ODFI that it agrees to accept a CCD or CTX return entry.
   */
  const ACH_R31 = 154;

  /**
   * RDFI non-settlement.
   *
   * RDFI is not able to settle the entry.
   */
  const ACH_R32 = 155;

  /**
   * Return of XCK entry.
   *
   * RDFI determines at its sole discretion to return an XCK entry; an XCK return entry may be initiated by midnight of
   * the sixtieth day following the settlement date if the XCK entry.
   */
  const ACH_R33 = 156;

  /**
   * Limited participation RDFI.
   *
   * RDFI participation has been limited by a federal or state supervisor.
   */
  const ACH_R34 = 157;

  /**
   * Return of improper debit entry.
   *
   * ACH debit not permitted for use with the CIE standard entry class code (except for reversals).
   */
  const ACH_R35 = 158;

  /**
   * ACH: Return of Improper Credit Entry.
   */
  const ACH_R36 = 218;

  /**
   * ACH: Source Document Presented for Payment.
   */
  const ACH_R37 = 219;

  /**
   * ACH: Stop Payment on Source Document.
   */
  const ACH_R38 = 220;

  /**
   * ACH: Improper Source Document.
   */
  const ACH_R39 = 221;

  /**
   * ACH: Return of ENR Entry by Federal Government Agency.
   */
  const ACH_R40 = 222;

  /**
   * ACH: Invalid Transaction Code.
   */
  const ACH_R41 = 223;

  /**
   * ACH: Routing Number / Check Digit Error.
   */
  const ACH_R42 = 224;

  /**
   * ACH: Invalid DFI Account Number.
   */
  const ACH_R43 = 225;

  /**
   * ACH: Invalid Individual ID Number / Identification.
   */
  const ACH_R44 = 226;

  /**
   * ACH: Invalid Individual Name / Company Name.
   */
  const ACH_R45 = 227;

  /**
   * ACH: Invalid Representative Payee Indicator.
   */
  const ACH_R46 = 228;

  /**
   * ACH: Duplicate Enrollment.
   */
  const ACH_R47 = 229;

  /**
   * ACH: State Law Affecting RCK Acceptance.
   */
  const ACH_R50 = 230;

  /**
   * ACH: Item is Ineligible, Notice Not Provided, etc.
   */
  const ACH_R51 = 231;

  /**
   * ACH: Stop Payment on Item (Adjustment Entries).
   */
  const ACH_R52 = 232;

  /**
   * ACH: Item and ACH Entry Presented for Payment.
   */
  const ACH_R53 = 233;

  /**
   * ACH: Misrouted Return.
   */
  const ACH_R61 = 234;

  /**
   * ACH: Incorrect Trace Number.
   */
  const ACH_R62 = 235;

  /**
   * ACH: Incorrect Dollar Amount.
   */
  const ACH_R63 = 236;

  /**
   * ACH: Incorrect Individual Identification.
   */
  const ACH_R64 = 237;

  /**
   * ACH: Incorrect Transaction Code.
   */
  const ACH_R65 = 238;

  /**
   * ACH: Incorrect Company Identification.
   */
  const ACH_R66 = 239;

  /**
   * ACH: Duplicate Return.
   */
  const ACH_R67 = 240;

  /**
   * ACH: Untimely Return.
   */
  const ACH_R68 = 241;

  /**
   * ACH: Multiple Errors.
   */
  const ACH_R69 = 242;

  /**
   * ACH: Permissible Return Entry Not Accepted.
   */
  const ACH_R70 = 243;

  /**
   * ACH: Misrouted Dishonored Return.
   */
  const ACH_R71 = 244;

  /**
   * ACH: Untimely Dishonored Return.
   */
  const ACH_R72 = 245;

  /**
   * ACH: Timely Original Return.
   */
  const ACH_R73 = 246;

  /**
   * ACH: Corrected Return.
   */
  const ACH_R74 = 247;

  /**
   * ACH: Return Not a Duplicate.
   */
  const ACH_R75 = 248;

  /**
   * ACH: No Errors Found.
   */
  const ACH_R76 = 249;

  /**
   * ACH: IAT Entry Coding Error.
   */
  const ACH_R80 = 250;

  /**
   * ACH: Non-Participant in IAT Program.
   */
  const ACH_R81 = 251;

  /**
   * ACH: Invalid Foreign Receiving DFI Identification.
   */
  const ACH_R82 = 252;

  /**
   * ACH: Foreign Receiving DFI Unable to Settle.
   */
  const ACH_R83 = 253;

  /**
   * ACH: Entry Not Processed by Gateway.
   */
  const ACH_R84 = 254;

  /**
   * ACH: Incorrectly Coded Outbound International Payment.
   */
  const ACH_R85 = 255;

  /**
   * ACH payment method is not supported by processor.
   */
  const ACH_SUPPORT = 105;

  /**
   * ACH error: uncollected.
   */
  const ACH_UNCOLLECTED = 123;

  /**
   * Invalid payment address chosen.
   */
  const ADDRESS_INVALID = 39;

  /**
   * Chosen payment address does not exist.
   */
  const ADDRESS_NX = 40;

  /**
   * Disagreement with the Payment Agreement.
   */
  const AGREEMENT_DISAGREE = 176;

  /**
   * Amount was unexpectedly changed during the purchase process.
   * This means that `rs_pay_transaction` amount and pay processor transaction amount differs.
   */
  const AMOUNT_CHANGE = 179;

  /**
   * Sum of amounts for all individual payment sources does not equal the total expected amount.
   */
  const AMOUNT_CONSOLIDATE = 35;

  /**
   * Total package price can't be divided equally between package items without loosing cents.
   * The calculated amount of one of item in the package has more than two digits after the decimal point in result.
   */
  const AMOUNT_CONSOLIDATE_PACKAGE = 191;

  /**
   * Amount is invalid.
   */
  const AMOUNT_INVALID = 34;

  /**/
  const AMOUNT_TOTAL = 75;

  /**
   * Amount equals zero.
   */
  const AMOUNT_ZERO = 32;

  /**
   * AVS verification failed. Postal code or address are invalid.
   */
  const AVS = 14;

  /**
   * Invalid bank account ID.
   */
  const BANK_ACCOUNT_INVALID = 79;

  /**
   * Bank account ID does not exist.
   */
  const BANK_ACCOUNT_NX = 80;

  /**
   * Bank state branch is empty.
   */
  const BSB_EMPTY = 77;

  /**
   * Bank state branch is invalid.
   */
  const BSB_INVALID = 78;

  /**
   * This business is a lost customer.
   *
   * @title Business is a lost customer.
   */
  const BUSINESS_CHURN = 173;

  /**
   * Client must call issuer for further information.
   */
  const CALL = 17;

  /**
   * Element which should be paid with this payment has been canceled and payment should be blocked.
   *
   * @title Purchase has been canceled before payment and payment has been blocked.
   */
  const CANCELED = 177;

  /**
   * Card data is valid, but you can not pay with it (e.g. hold placed on card).
   */
  const CARD_DECLINE = 5;

  /**
   * Invalid payment card chosen.
   */
  const CARD_INVALID = 42;

  /**
   * No such card issuer.
   */
  const CARD_ISSUER_INVALID = 184;

  /**
   * Card over limit.
   */
  const CARD_LIMIT = 73;

  /**
   * Payment card nickname is empty.
   */
  const CARD_NAME_EMPTY = 46;

  /**
   * Payment card nickname is too long.
   */
  const CARD_NAME_LONG = 47;

  /**
   * The customer’s bank has declined the transaction as the credit card number has failed a security check, or the
   * funds have been frozen or depleted. The customer should use an alternate credit card.
   */
  const CARD_NOT_HONOR = 71;

  /**
   * Insufficient funds available.
   */
  const CARD_NSF = 72;

  /**
   * Chosen payment card does not exist.
   */
  const CARD_NX = 43;

  /**
   * User has chosen payment card but he had no such rights.
   */
  const CARD_SELECT = 44;

  /**
   * Card unsupported.
   */
  const CARD_UNSUPPORTED = 190;

  /**
   * Comment for payment method too long.
   */
  const COMMENT_LONG = 99;

  /**
   * Can't connect to payment gateway.
   */
  const CONNECT = 8;

  /**
   * Unsupported country.
   */
  const COUNTRY_UNSUPPORTED = 164;

  /**
   * Gift card belongs to a foreign business.
   */
  const COUPON_BUSINESS = 55;

  /**
   * Invalid payment card chosen.
   */
  const COUPON_CURRENCY = 54;

  /**
   * Coupon is inactive.
   */
  const COUPON_INACTIVE = 97;

  /**
   * Coupon code is invalid (invalid length, or invalid characters encountered).
   */
  const COUPON_INVALID = 51;

  /**
   * Invalid payment card chosen.
   */
  const COUPON_NX = 52;

  /**
   * Coupon is redeemed already.
   */
  const COUPON_REDEEM = 53;

  /**
   * Card credentials (number, csc, month, year) change ability is disabled. E.g. payment processor may not support
   * money authorization, so we can not change card credentials.
   */
  const CREDENTIAL_SUPPORT = 76;

  /**
   * Invalid card security code (CSC).
   */
  const CSC_EMPTY = 21;

  /**
   * Invalid card security code (CSC).
   */
  const CSC_INVALID = 2;

  /**
   * Card is expired.
   */
  const DATE_EXPIRE = 24;

  /**
   * Card is inactive.
   */
  const DATE_INACTIVE = 163;

  /**
   * Invalid Expiration Date.
   */
  const DATE_INVALID = 183;

  /**
   * Month is invalid.
   */
  const DATE_MONTH = 22;

  /**
   * Multiple usage of this payment method is not allowed.
   */
  const DATE_YEAR = 23;

  /**
   * Duplicate transaction. Transaction data that is selected for comparison is payment gateway-specific.
   */
  const DUPLICATE = 1;

  /**
   * Error, caused by one of the following cases:
   * - fraud
   * - card is lost
   * - card is stolen
   */
  const FRAUD = 168;

  /**
   * Terminal that should be used for payment is not found.
   */
  const HARDWARE_NOT_FOUND = 196;

  /**
   * Informational field is not filled in.
   */
  const INFO_EMPTY = 9;

  /**
   * Informational field is too long.
   */
  const INFO_LONG = 41;

  /**/
  const INSTALLMENT_AMOUNT_MIN = 93;

  /**
   * Installment plan: Number of payment is invalid.
   */
  const INSTALLMENT_COUNT_FORMAT = 85;

  /**
   * Installment plan: Number of payment is too large.
   */
  const INSTALLMENT_COUNT_MAX = 87;

  /**
   * Installment plan: Number of payment is too small (less then 2).
   */
  const INSTALLMENT_COUNT_MIN = 86;

  /**
   * Installment date is not specified.
   */
  const INSTALLMENT_DATE_EMPTY = 81;

  /**
   * Installment date format is invalid.
   */
  const INSTALLMENT_DATE_FORMAT = 82;

  /**
   * Installment date is too deep in the future.
   */
  const INSTALLMENT_DATE_FUTURE = 84;

  /**
   * Installment date is in the past (minimum is today).
   */
  const INSTALLMENT_DATE_PAST = 83;

  /**
   * Installment plan: Duration of a period is not allowed.
   */
  const INSTALLMENT_DURATION_DISABLE = 91;

  /**
   * Installment plan: Maximum total duration of installment plan is 100 years.
   */
  const INSTALLMENT_DURATION_MAX = 92;

  /**
   * Installment plan: Duration of a period does not exist.
   */
  const INSTALLMENT_DURATION_NX = 90;

  /**
   * Installment plan: Number of periods between two consecutive payments is invalid.
   */
  const INSTALLMENT_PERIOD_FORMAT = 88;

  /**
   * Installment plan: Number of periods between two consecutive payments is too large.
   */
  const INSTALLMENT_PERIOD_MAX = 89;

  /**
   * Template of installment plans: template is not selected.
   */
  const INSTALLMENT_TEMPLATE_EMPTY = 95;

  /**
   * Template of installment plans: ID of the template does not exist.
   */
  const INSTALLMENT_TEMPLATE_NX = 94;

  /**
   * Internal errors that occurred in the browser (for example, some form data arrived to servers such that user should
   * not be able to enter it in the form).
   *
   * Differs from INTERNAL_SERVER in that errors of this type are not logged into error.log.
   */
  const INTERNAL_BROWSER = 33;

  /**
   * Security throttling error.
   *
   * It is shown as `internal-hit` to the user to make it harder to guess what does this error mean.
   */
  const INTERNAL_HIT = 192;

  /**
   * Internal merchant error.
   *
   * @title Internal merchant error. Please, contact support for assistance.
   *
   * @
   */
  const INTERNAL_MERCHANT = 186;

  /**
   * Some strange service error (e.g. invalid merchant data passed, data format).
   *
   * @title Internal error.
   */
  const INTERNAL_SERVER = 6;

  /**
   * Payer email is required for payment, but empty.
   */
  const MAIL_EMPTY = 175;

  /**
   * The associated merchant account has been closed.
   */
  const MERCHANT_ACCOUNT_CLOSED = 189;

  /**
   * Invalid merchant data.
   *
   * @title Merchant is not configured properly. Contact business owner or WellnessLiving support team (API credentials are not correct).
   */
  const MERCHANT_INVALID = 7;

  /**
   * Transaction was rejected by gateway.
   */
  const MERCHANT_REJECT = 74;

  /**
   * Merchant has invalid settings and does not return customer vault.
   *
   * One of the possible reasons - merchant with a name 'demo' should not be used.
   *
   * @title Merchant does not return customer's vault. Check merchant settings.
   */
  const MERCHANT_SETTINGS_VAULT = 166;

  /**
   * User has no access to the specified payment method.
   * (You have no privileges to use this payment method.)
   */
  const METHOD_ACCESS = 18;

  /**
   * This method does not support authorization request.
   */
  const METHOD_AUTHORIZE = 96;

  /**
   * This payment method can not be used with this business.
   */
  const METHOD_BUSINESS = 19;

  /**
   * Multiple usage of this payment method is not allowed.
   */
  const METHOD_MULTIPLE = 20;

  /**
   * Cardholder name is not typed in.
   */
  const NAME_EMPTY = 25;

  /**
   * Customer name is invalid (contains invalid characters).
   */
  const NAME_INVALID = 106;

  /**
   * Cardholder name is too long.
   */
  const NAME_LONG = 26;

  /**
   * Validation Rejection.
   *
   * This error code is specific for a case when Pay Safe is used within NMI.
   *
   * @link http://support.netbanx.com/REPOSITORY/WebServices_API_1.0.pdf
   */
  const NMI_PAYSAFE_900 = 159;

  /**
   * Not sufficient funds (debits only).
   *
   * This error code is specific for a case when Pay Safe is used within NMI.
   *
   * @link http://support.netbanx.com/REPOSITORY/WebServices_API_1.0.pdf
   * @link https://wellnessliving.atlassian.net/browse/WL-10594
   */
  const NMI_PAYSAFE_901 = 110;

  /**
   * Payment stopped/recalled.
   *
   * This error code is specific for a case when Pay Safe is used within NMI.
   *
   * @link http://support.netbanx.com/REPOSITORY/WebServices_API_1.0.pdf
   * @link https://wellnessliving.atlassian.net/browse/WL-10594
   */
  const NMI_PAYSAFE_903 = 111;

  /**
   * Post dated/stale dated.
   *
   * This error code is specific for a case when Pay Safe is used within NMI.
   *
   * @link http://support.netbanx.com/REPOSITORY/WebServices_API_1.0.pdf
   * @link https://wellnessliving.atlassian.net/browse/WL-10594
   */
  const NMI_PAYSAFE_904 = 112;

  /**
   * Account closed.
   *
   * This error code is specific for a case when Pay Safe is used within NMI.
   *
   * @link http://support.netbanx.com/REPOSITORY/WebServices_API_1.0.pdf
   * @link https://wellnessliving.atlassian.net/browse/WL-10594
   */
  const NMI_PAYSAFE_905 = 113;

  /**
   * Account transferred.
   *
   * This error code is specific for a case when Pay Safe is used within NMI.
   *
   * @link http://support.netbanx.com/REPOSITORY/WebServices_API_1.0.pdf
   * @link https://wellnessliving.atlassian.net/browse/WL-10594
   */
  const NMI_PAYSAFE_906 = 114;

  /**
   * No chequing privileges.
   *
   * This error code is specific for a case when Pay Safe is used within NMI.
   *
   * @link http://support.netbanx.com/REPOSITORY/WebServices_API_1.0.pdf
   * @link https://wellnessliving.atlassian.net/browse/WL-10594
   */
  const NMI_PAYSAFE_907 = 115;

  /**
   * Funds not cleared.
   *
   * This error code is specific for a case when Pay Safe is used within NMI.
   *
   * @link http://support.netbanx.com/REPOSITORY/WebServices_API_1.0.pdf
   * @link https://wellnessliving.atlassian.net/browse/WL-10594
   */
  const NMI_PAYSAFE_908 = 116;

  /**
   * Payor/payee deceased.
   *
   * This error code is specific for a case when Pay Safe is used within NMI.
   *
   * @link http://support.netbanx.com/REPOSITORY/WebServices_API_1.0.pdf
   * @link https://wellnessliving.atlassian.net/browse/WL-10594
   */
  const NMI_PAYSAFE_910 = 117;

  /**
   * Account frozen.
   *
   * This error code is specific for a case when Pay Safe is used within NMI.
   *
   * @link http://support.netbanx.com/REPOSITORY/WebServices_API_1.0.pdf
   * @link https://wellnessliving.atlassian.net/browse/WL-10594
   */
  const NMI_PAYSAFE_911 = 118;

  /**
   * Invalid/incorrect account number.
   *
   * This error code is specific for a case when Pay Safe is used within NMI.
   *
   * @link http://support.netbanx.com/REPOSITORY/WebServices_API_1.0.pdf
   * @link https://wellnessliving.atlassian.net/browse/WL-10594
   */
  const NMI_PAYSAFE_912 = 119;

  /**
   * Incorrect payor/payee name.
   *
   * This error code is specific for a case when Pay Safe is used within NMI.
   *
   * @link http://support.netbanx.com/REPOSITORY/WebServices_API_1.0.pdf
   * @link https://wellnessliving.atlassian.net/browse/WL-10594
   */
  const NMI_PAYSAFE_914 = 120;

  /**
   * Refused by payor/payee.
   *
   * This error code is specific for a case when Pay Safe is used within NMI.
   *
   * @link http://support.netbanx.com/REPOSITORY/WebServices_API_1.0.pdf
   * @link https://wellnessliving.atlassian.net/browse/WL-10594
   */
  const NMI_PAYSAFE_915 = 121;

  /**
   * No Return Agreement.
   *
   * This error code is specific for a case when Pay Safe is used within NMI.
   *
   * @link http://support.netbanx.com/REPOSITORY/WebServices_API_1.0.pdf
   * @link https://wellnessliving.atlassian.net/browse/WL-10594
   */
  const NMI_PAYSAFE_998 = 122;

  /**
   * Card number is not typed in.
   */
  const NUMBER_EMPTY = 27;

  /**
   * Card number is invalid.
   */
  const NUMBER_INVALID = 30;

  /**
   * Card number is too long.
   */
  const NUMBER_LONG = 28;

  /**
   * Card number is too long.
   */
  const NUMBER_SHORT = 29;

  /**
   * Some parameters client has provided are invalid.
   */
  const PARAMETER = 4;

  /**
   * Payment form is in passive mode.
   *
   * No payments can be performed in passive mode.
   */
  const PASSIVE = 165;

  /**
   * Error during authentication of the payer.
   *
   * Payer authentication is performed, for example, as a part of 3D Secure protocol.
   * This error may mean, for example, that SMS code that user has entered is invalid.
   */
  const PAYER_AUTHENTICATION = 167;

  /**
   * There is other process currently running to update payment. Failed to wait until it ends.
   *
   * @title Payment is updating in other process.
   */
  const PAYMENT_UPDATE_LOCK = 174;

  /**
   * Phone number is not specified on user account.
   *
   * Phone number may be required (for example, Direct Connect requires it for ACH transactions).
   */
  const PHONE_EMPTY = 107;

  /**
   * Phone number is invalid.
   */
  const PHONE_INVALID = 178;

  /**
   * Phone number is too long.
   */
  const PHONE_LONG = 108;

  /**
   * Transaction error returned by processor.
   *
   * May be caused by problems like:
   * unsuccessful authorization
   * unsuccessful payment
   * card requires PIN to be entered
   */
  const PROCESSOR_ERROR = 98;

  /**
   * Internal error at processor side has occurred.
   *
   * Example: "Host Communication Error" at Direct Connect.
   */
  const PROCESSOR_INTERNAL = 109;

  /**
   * Refund operation is applied too early.
   *
   * Some merchant processors may require some time to pass after transaction to refund it.
   */
  const REFUND_EARLY = 50;

  /**
   * Amount about to refund is larger then the current rest of the transaction.
   *
   * Current rest is either <tt>rs_pay_transaction.f_amount</tt> for transactions that was not refunded before,
   * or <tt>rs_pay_transaction_refund.f_amount</tt> for partially refunded transactions.
   */
  const REFUND_REST = 49;

  /**
   * Transaction can not be refunded because it is in an invalid status.
   *
   * Status of the transaction is stored in <tt>rs_pay_transaction.id_pay_transaction_status</tt>.
   */
  const REFUND_STATUS = 48;

  /**
   * Invalid region chosen.
   */
  const REGION_INVALID = 37;

  /**
   * Chosen region does not exist.
   */
  const REGION_NX = 38;

  /**
   * Can not repeat purchase transaction. Reference data is expired and invalid now.
   */
  const REPEAT_INVALID = 15;

  /**
   * Error during request to service. In case we have not even got response.
   */
  const REQUEST = 12;

  /**
   * Too many requests.
   */
  const REQUEST_THROTTLE = 172;

  /**
   * Temporary service error. Repeat request.
   */
  const RETRY = 3;

  /**
   * Payment is blocked due security reasons (because payment amount is too large).
   */
  const SECURITY_LARGE = 103;

  /**
   * Only for test, when there is an error in the test that we cannot influence, for example: “server is not available”.
   */
  const SKIP_IN_TESTS = 188;

  /**
   * Stripe data is empty.
   */
  const STRIPE_EMPTY = 31;

  /**
   * Invalid data on magnetic stripe. Maybe some part does not exist.
   */
  const STRIPE_INVALID = 16;

  /**
   * Incorrect payment card type specified.
   */
  const TENDER_TYPE_INVALID = 195;

  /**
   * This recurrent payment token belongs to a different account of this merchant.
   *
   * Two cases may cause this problem:
   *
   * 1. Payment tokens were imported from a different Direct Connect account. This is not allowed. Payment tokens can
   * only be used within that account within which they were created.
   *
   * 2. User was added successfully. After that you have changed login and password to a different Direct Connect
   * account.
   *
   * For Paychoyce in the context of processing a transaction invalid card token can mean any of the following:
   *
   * 1. The token GUID supplied in the request is not a GUID (Very unlikely).
   *
   * 2. The token presented on the charge request does not exist in Paychoice V4 (This is the most likely case: the token wasn't migrated from V3).
   *
   * 3. The token presented on the charge request has been marked as Inactive/Expired (This is part of PCI compliance process to expire tokens that have not been used in 12 months - possible but not very likely).
   *
   * @title The recurrent payment token does not match the merchant's settings.
   */
  const TOKEN_ACCOUNT = 161;

  /**
   * Payment token belongs to a different merchant processor.
   *
   * For example. Recurrent payment token was created by NMI.
   *
   * After that they have changed business merchant to use Direct Connect.
   *
   * Without this check, recurrent payment token in NMI format will be passed to a class that expects that  it was
   * created in Direct Connect format.
   *
   * This will lead to that:
   *
   * 1. There will be PHP notices about undefined index, because DC class will try to access fields that are not
   *     set by NMI.
   * 2. NULL will be sent as vault ID, this will lead to a failed transaction.
   *
   * @title Payment token belongs to a different merchant processor.
   */
  const TOKEN_PROCESSOR = 162;

  /**
   * Transaction does not exist. E.g. we want to make refund using nonexistent reference number.
   */
  const TRANSACTION_NX = 13;

  /**
   * Transaction is in unexpected status. For example, authorization process started but takes long time. While waiting
   * staff decided to cancel transaction. Void is done, transaction is in {@link WlPayTransactionStatusSid::VOID}
   * status. In the same time authorization process finishes, code expects transaction to be in
   * {@link WlPayTransactionStatusSid::AUTHORIZE_ACTIVE} status, but it is not. This can happen when transaction
   * is processed in several processes. For example, card swipe is initiated, but staff presses Cancel Transaction
   * button.
   */
  const UNEXPECTED_TRANSACTION_STATUS = 187;

  /**
   * If the user who pays through the account is a debtor.
   */
  const USER_DEBTOR = 194;

  /**
   * If access denied to an anonymous user.
   */
  const USER_GUEST = 56;

  /**
   * Error specific for payment processors that stores payer entity.
   * Means that payer entity with specified ID does not exist.
   */
  const USER_NOT_FOUND = 197;

  /**
   * Some unpredicted error happened during void on processor side.
   *
   * @title Some unpredicted error happened during void on processor side.
   */
  const VOID_ERROR = 193;

  /**
   * Operation Void is not possible, it's too late to do it.
   */
  const VOID_LATE = 180;

  /**
   * Void operation can be done only for a total transaction amount and cannot be partial.
   */
  const VOID_PARTIAL = 100;

  /**
   * Void operation is restricted by rules of the system.
   */
  const VOID_RESTRICT = 102;

  /**
   * Void operation is not supported by the merchant processor.
   */
  const VOID_SUPPORT = 101;

  /**
   * Timeout waiting for settlement.
   */
  const WAIT_TIMEOUT = 104;
}

?>