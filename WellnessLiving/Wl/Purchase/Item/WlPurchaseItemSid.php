<?php

namespace WellnessLiving\Wl\Purchase\Item;

/**
 * A list of purchase types.
 *
 * Last used ID: 25.
 */
abstract class WlPurchaseItemSid
{
  /**
   * Personal user's account refill.
   */
  const ACCOUNT = 7;

  /**
   * Business account payment.
   */
  const ACCOUNT_BUSINESS = 11;

  /**
   * Single appointment reservation.
   *
   * This purchase is created when a worker has charged a client for an appointment.
   *
   * This purchase can only be created in POS.
   *
   * @see RsPurchaseItemAppointment Purchase item manager class.
   * @see RsPurchaseItemSid::SERVICE A purchased item that is created during the online booking process.
   */
  const APPOINTMENT = 8;

  /**
   * Single appointment reservation with deposit.
   *
   * This purchase created when client books a single appointment reservation with deposit amount,
   * to do so appointment should be managed with deposit.
   */
  const APPOINTMENT_DEPOSIT = 18;

  /**
   * Tips for the appointment.
   *
   * @see RsPurchaseItemAppointment Purchase item manager class.
   * @see RsPurchaseItemSid::SERVICE A purchased item that is created during the online booking process.
   */
  const APPOINTMENT_TIP = 22;

  /**
   * Expense that comes along with the payment business. It contains information about additional services which are
   * included in the package. For example, payment for SMS.
   */
  const BUSINESS_EXPENSE = 16;

  /**
   * A skipped purchase for the business account.
   */
  const BUSINESS_SKIP = 17;

  /**
   * Business subscription payment.
   */
  const BUSINESS_SUBSCRIPTION = 23;

  /**
   * Single classes.
   */
  const CLASS_PERIOD = 2;

  /**
   * Collectors payments
   */
  const COLLECTOR_DEBT = 24;

  /**
   * Arbitrary money withdrawal with comment.
   */
  const COMMENT = 13;

  /**
   * Gift Cards.
   */
  const COUPON = 10;

  /**
   * Events and enrollments. Client can not book only one class, he needs to to book the whole enrollment.
   */
  const ENROLLMENT = 4;

  /**
   * Enrollment reservation with a deposit.
   *
   * This purchase created when client books an enrollment reservation with deposit amount,
   * to do so enrollment should be managed with deposit.
   */
  const ENROLLMENT_DEPOSIT = 19;

  /**
   * Enrollment reservation with a discount.
   *
   * This purchase created when client books an enrollment reservation with early bird price.
   */
  const ENROLLMENT_DISCOUNT = 21;

  /**
   * Payment by an installment plan.
   */
  const INSTALLMENT = 14;

  /**
   * Recurrent payments.
   *
   * <tt>k_id</tt> is ID of a purchased promotion (<tt>k_login_promotion</tt>).
   *
   * @see RsPurchaseItemMembership
   */
  const MEMBERSHIP = 3;

  /**
   * Products.
   */
  const PRODUCT = 9;

  /**
   * Promotions.
   */
  const PROMOTION = 1;

  /**
   * A purchase to renew a promotion.
   *
   * @see RsPurchaseItemPromotionRenew
   */
  const PROMOTION_RENEW = 12;

  /**
   * A purchase to book an asset.
   *
   * @see RsPurchaseItemResource
   */
  const RESOURCE = 15;

  /**
   * A purchase to book a deposit asset.
   *
   * @see RsPurchaseItemResourceDeposit
   */
  const RESOURCE_DEPOSIT = 20;

  /**
   * Purchase item for appointments.
   *
   * This purchase item is created during the online booking process.
   *
   * @see RsPurchaseItemService Purchase item manager class.
   * @see RsPurchaseItemSid::APPOINTMENT Purchase that is created when a staff adds payment for an appointment at POS.
   */
  const SERVICE = 6;

  /**
   * Purchase item for testing purposes.
   */
  const TEST = 5;
}

?>