<?php

namespace WellnessLiving\Wl;

/**
 * A list of payment methods.
 *
 * How to add a new payment method:<ol>
 *   <li>Add a constant to {@link WlPayMethodSid} (lets use COUPON for our example).</li>
 *   <li>Create payment method controller class.
 *     Use existing <tt>RsPayMethod*</tt> classes for examples.</li>
 *   <li>Add evaluation of availability of this method in <tt>RsPayEnvironment::method_available()</tt></li>
 *   <li>You may want to create method-specific transactions.
 *     For this, you'll need to create a <tt>RsPayTransaction*Sql</tt> table and <tt>RsPayTransaction*</tt> class for
 *     transaction controller.
 *   </li>
 *   <li>Add PHP version of template loader for form of the new method. rs.pay.form.coupon.xml.php in our example.</li>
 *   <li>Add *.xml for form of the new method. rs.pay.form.coupon.xml in our example.</li>
 *   <li>Add JavaScript's widget controller for the new method. rs.pay.form.coupon.widget.js in our example.</li>
 * </ol>
 *
 * Last used ID: 13.
 */
abstract class WlPayMethodSid
{
  /**
   * Payment with personal user account (rs.pay.account).
   */
  const ACCOUNT = 7;

  /**
   * Payment with personal user account.
   * Special payment method to indicate payments related only to manual adjustment of user account balance.
   * This payment method actually does not exist and used only for filtering purpose.
   *
   * @deprecated
   */
  const ACCOUNT_MANUAL = 13;

  /**
   * ACH system (USA-specific direct banking transactions).
   *
   * @link http://en.wikipedia.org/wiki/Automated_Clearing_House
   */
  const ACH = 9;

  /**
   * Payment with cash.
   */
  const CASH = 4;

  /**
   * Payment with a cheque.
   */
  const CHEQUE = 5;

  /**
   * Payment by clear balance.
   */
  const CLEAR_BALANCE = 12;

  /**
   * Payment with a coupon.
   */
  const COUPON = 8;

  /**
   * Direct Entry system (australian-specific direct banking transactions).
   *
   * @link http://en.wikipedia.org/wiki/Financial_system_in_Australia#Direct_Entry
   */
  const DIRECT_ENTRY = 10;

  /**
   * Online payment. Card not present.
   */
  const ECOMMERCE = 2;

  /**
   * Payment with an external terminal.
   */
  const EXTERNAL = 6;

  /**
   * Special method to be used for migration process.
   *
   * There are sales in Mindbody that were not bought using account balance or reward points.
   * This is not real revenue and cannot be imported as real sales. So, they can be imported as this special method
   * to be in the system and to allow business owner to hide on sales report.
   *
   * In online store this method should not be available.
   */
  const IMPORT_ACCRUAL = 11;

  /**
   * Payment method at a Points of sale.
   */
  const POS = 1;
}

?>