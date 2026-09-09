<?php

namespace WellnessLiving\Thoth\PayProcessor\StripeCom\File;

/**
 * The purpose of the uploaded file.
 *
 * @link https://stripe.com/docs/api/files/object
 *
 * Last used id: 15.
 */
class StripeFilePurposeSid
{
  /**
   * Additional documentation requirements that can be requested for an account.
   */
  const ACCOUNT_REQUIREMENT = 1;

  /**
   * Additional verification for custom accounts.
   */
  const ADDITIONAL_VERIFICATION = 2;

  /**
   * A business icon.
   */
  const BUSINESS_ICON = 3;

  /**
   * A business logo.
   */
  const BUSINESS_LOGO = 4;

  /**
   * Customer signature image.
   */
  const CUSTOMER_SIGNATURE = 5;

  /**
   * Evidence to submit with a dispute response.
   */
  const DISPUTE_EVIDENCE = 6;

  /**
   * Identity document.
   */
  const DOCUMENT_PROVIDER_IDENTITY_DOCUMENT = 7;

  /**
   * User-accessible copies of query results from the Reporting dataset.
   */
  const FINANCE_REPORT_RUN = 8;

  /**
   * A document to verify the identity of an account owner during account provisioning.
   */
  const IDENTITY_DOCUMENT = 9;

  /**
   * Image of a document collected by Stripe Identity.
   */
  const IDENTITY_DOCUMENT_DOWNLOADABLE = 10;

  /**
   * A self-assessment PCI questionnaire.
   */
  const PCI_DOCUMENT = 11;

  /**
   * Image of a selfie collected by Stripe Identity.
   */
  const SELFIE = 12;

  /**
   * Sigma scheduled query file for export and download.
   */
  const SIGMA_SCHEDULED_QUERY = 13;

  /**
   * A user-uploaded tax document.
   */
  const TAX_DOCUMENT_USER_UPLOAD = 14;

  /**
   * Splashscreen to be displayed on Terminal readers.
   */
  const TERMINAL_READER_SPLASHSCREEN = 15;
}

?>