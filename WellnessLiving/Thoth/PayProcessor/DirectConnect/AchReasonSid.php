<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect;

/**
 * First ACH return reason codes.
 *
 * See `doc/status_and_return_codes.pdf` for a list of return codes.
 * See `doc/Return_Codes_with_Definitions.pdf` for a list of return codes.
 *
 * <b>Be attentive!</b> If you add a constant to this class, you should also add corresponding exception code in
 *
 * @link https://www.paypalobjects.com/en_US/vhelp/paypalmanager_help/ach_status_code.htm Errors of Rxx series.
 *
 * Last used ID: 105.
 */
class AchReasonSid
{
  /**
   * Account Closed.
   */
  const E02 = 86;

  /**
   * No Account / Unable to Locate Account.
   */
  const E03 = 87;

  /**
   * Invalid Account Number.
   */
  const E04 = 88;

  /**
   * Unauthorized Debit to Consumer Account Using Corporate SEC Code.
   */
  const E05 = 89;

  /**
   * Authorization Revoked by Customer.
   */
  const E07 = 90;

  /**
   * Payment Stopped.
   */
  const E08 = 91;

  /**
   * Customer Advises Originator Not Known / Not Authorized.
   */
  const E10 = 92;

  /**
   * Customer Advises Entry Not in Accordance with Authorization.
   */
  const E11 = 93;

  /**
   * RDFI Not Qualified to Participate.
   */
  const E13 = 94;

  /**
   * Representative Payee Deceased or Unable to Continue.
   */
  const E14 = 95;

  /**
   * Beneficiary or Account Holder Deceased.
   */
  const E15 = 96;

  /**
   * Account Frozen.
   */
  const E16 = 97;

  /**
   * Invalid Account Number under Questionable Circumstances.
   */
  const E17 = 98;

  /**
   * Non-Transaction Account.
   */
  const E20 = 99;

  /**
   * Corporate Customer Advises Not Authorized.
   */
  const E29 = 100;

  /**
   * Invalid Image.
   */
  const E92 = 101;

  /**
   * Non-Negotiable.
   */
  const E93 = 102;

  /**
   * Breach of Warranty.
   */
  const E95 = 103;

  /**
   * Counterfeit / Forgery.
   */
  const E96 = 104;

  /**
   * Refer to Maker.
   */
  const E97 = 105;

  /**
   * Insufficient funds.
   *
   * Available balance is not sufficient to cover the amount of the debit entry.
   */
  const R01 = 1;

  /**
   * Bank account closed.
   *
   * Previously active account has been closed by the customer of RDFI.
   */
  const R02 = 2;

  /**
   * No bank account/unable to locate account.
   *
   * Account number does not correspond to the individual identified in the entry, or the account number designated is
   * not an open account.
   */
  const R03 = 3;

  /**
   * Invalid bank account number.
   *
   * Account number structure is not valid.
   */
  const R04 = 4;

  /**
   * Unauthorized Debit to Consumer Account Using Corporate SEC Code.
   */
  const R05 = 5;

  /**
   * Returned per ODFI request.
   *
   * ODFI requested the RDFI to return the entry.
   */
  const R06 = 6;

  /**
   * Authorization revoked by customer.
   *
   * Receiver has revoked authorization.
   */
  const R07 = 7;

  /**
   * Payment stopped.
   *
   * Receiver of a recurring debit has stopped payment of an entry.
   */
  const R08 = 8;

  /**
   * Uncollected funds.
   *
   * Collected funds are not sufficient for payment of the debit entry.
   */
  const R09 = 9;

  /**
   * Customer advises not authorized.
   *
   * Receiver has advised RDFI that originator is not authorized to debit his bank account.
   */
  const R10 = 10;

  /**
   * Check truncation entry return.
   *
   * To be used when returning a check truncation entry.
   */
  const R11 = 11;

  /**
   * Branch sold to another RDFI.
   *
   * RDFI unable to post entry destined for a bank account maintained at a branch sold to another financial institution.
   */
  const R12 = 12;

  /**
   * RDFI not qualified to participate.
   *
   * Financial institution does not receive commercial ACH entries.
   */
  const R13 = 13;

  /**
   * Representative payee deceased or unable to continue in that capacity.
   *
   * The representative payee authorized to accept entries on behalf of a beneficiary is either deceased or unable to
   * continue in that capacity.
   */
  const R14 = 14;

  /**
   * Beneficiary or bank account holder.
   *
   * (Other than representative payee) deceased* - (1) the beneficiary entitled to payments is deceased or (2) the bank
   * account holder other than a representative payee is deceased.
   */
  const R15 = 15;

  /**
   * Bank account frozen.
   *
   * Funds in bank account are unavailable due to action by RDFI or legal order.
   */
  const R16 = 16;

  /**
   * File record edit criteria.
   *
   * Fields rejected by RDFI processing (identified in return addenda).
   */
  const R17 = 17;

  /**
   * Improper effective entry date.
   *
   * Entries have been presented prior to the first available processing window for the effective date.
   */
  const R18 = 18;

  /**
   * Amount field error.
   *
   * Improper formatting of the amount field.
   */
  const R19 = 19;

  /**
   * Non-payment bank account.
   *
   * Entry destined for non-payment bank account defined by reg.
   */
  const R20 = 20;

  /**
   * Invalid company ID number.
   *
   * The company ID information not valid (normally CIE entries).
   */
  const R21 = 21;

  /**
   * Invalid individual ID number.
   *
   * Individual ID used by receiver is incorrect (CIE entries).
   */
  const R22 = 22;

  /**
   * Credit entry refused by receiver.
   *
   * Receiver returned entry because minimum or exact amount not remitted, bank account is subject to litigation, or
   * payment represents an overpayment, originator is not known to receiver or receiver has not authorized this credit
   * entry to this bank account.
   */
  const R23 = 23;

  /**
   * Duplicate entry.
   *
   * RDFI has received a duplicate entry.
   */
  const R24 = 24;

  /**
   * Addenda error.
   *
   * Improper formatting of the addenda record information.
   */
  const R25 = 25;

  /**
   * Mandatory field error.
   *
   * Improper information in one of the mandatory fields.
   */
  const R26 = 26;

  /**
   * Trace number error.
   *
   * Original entry trace number is not valid for return entry; or addenda trace numbers do not correspond with entry
   * detail record.
   */
  const R27 = 27;

  /**
   * Transit routing number check digit error.
   *
   * Check digit for the transit routing number is incorrect.
   */
  const R28 = 28;

  /**
   * Corporate customer advises not authorized.
   *
   * RDFI has been notified by corporate receiver that debit entry of originator is not authorized.
   */
  const R29 = 29;

  /**
   * RDFI not participant in check truncation program.
   *
   * Financial institution not participating in automated check safekeeping application.
   */
  const R30 = 30;

  /**
   * Permissible return entry (CCD and CTX only).
   *
   * RDFI has been notified by the ODFI that it agrees to accept a CCD or CTX return entry.
   */
  const R31 = 31;

  /**
   * RDFI non-settlement.
   *
   * RDFI is not able to settle the entry.
   */
  const R32 = 32;

  /**
   * Return of XCK entry.
   *
   * RDFI determines at its sole discretion to return an XCK entry; an XCK return entry may be initiated by midnight of
   * the sixtieth day following the settlement date if the XCK entry.
   */
  const R33 = 33;

  /**
   * Limited participation RDFI.
   *
   * RDFI participation has been limited by a federal or state supervisor.
   */
  const R34 = 34;

  /**
   * Return of improper debit entry.
   *
   * ACH debit not permitted for use with the CIE standard entry class code (except for reversals).
   */
  const R35 = 35;

  /**
   * Return of Improper Credit Entry.
   */
  const R36 = 36;

  /**
   * Source Document Presented for Payment.
   */
  const R37 = 37;

  /**
   * Stop Payment on Source Document.
   */
  const R38 = 38;

  /**
   * Improper Source Document.
   */
  const R39 = 39;

  /**
   * Return of ENR Entry by Federal Government Agency.
   */
  const R40 = 40;

  /**
   * Invalid Transaction Code.
   */
  const R41 = 41;

  /**
   * Routing Number / Check Digit Error.
   */
  const R42 = 42;

  /**
   * Invalid DFI Account Number.
   */
  const R43 = 43;

  /**
   * Invalid Individual ID Number / Identification.
   */
  const R44 = 44;

  /**
   * Invalid Individual Name / Company Name.
   */
  const R45 = 45;

  /**
   * Invalid Representative Payee Indicator.
   */
  const R46 = 46;

  /**
   * Duplicate Enrollment.
   */
  const R47 = 47;

  /**
   * State Law Affecting RCK Acceptance.
   */
  const R50 = 50;

  /**
   * Item is Ineligible, Notice Not Provided, etc.
   */
  const R51 = 51;

  /**
   * Stop Payment on Item (Adjustment Entries).
   */
  const R52 = 52;

  /**
   * Item and ACH Entry Presented for Payment.
   */
  const R53 = 53;

  /**
   * Misrouted Return.
   */
  const R61 = 61;

  /**
   * Incorrect Trace Number.
   */
  const R62 = 62;

  /**
   * Incorrect Dollar Amount.
   */
  const R63 = 63;

  /**
   * Incorrect Individual Identification.
   */
  const R64 = 64;

  /**
   * Incorrect Transaction Code.
   */
  const R65 = 65;

  /**
   * Incorrect Company Identification.
   */
  const R66 = 66;

  /**
   * Duplicate Return.
   */
  const R67 = 67;

  /**
   * Untimely Return.
   */
  const R68 = 68;

  /**
   * Multiple Errors.
   */
  const R69 = 69;

  /**
   * Permissible Return Entry Not Accepted.
   */
  const R70 = 70;

  /**
   * Misrouted Dishonored Return.
   */
  const R71 = 71;

  /**
   * Untimely Dishonored Return.
   */
  const R72 = 72;

  /**
   * Timely Original Return.
   */
  const R73 = 73;

  /**
   * Corrected Return.
   */
  const R74 = 74;

  /**
   * Return Not a Duplicate.
   */
  const R75 = 75;

  /**
   * No Errors Found.
   */
  const R76 = 76;

  /**
   * IAT Entry Coding Error.
   */
  const R80 = 80;

  /**
   * Non-Participant in IAT Program.
   */
  const R81 = 81;

  /**
   * Invalid Foreign Receiving DFI Identification.
   */
  const R82 = 82;

  /**
   * Foreign Receiving DFI Unable to Settle.
   */
  const R83 = 83;

  /**
   * Entry Not Processed by Gateway.
   */
  const R84 = 84;

  /**
   * Incorrectly Coded Outbound International Payment.
   */
  const R85 = 85;
}

?>