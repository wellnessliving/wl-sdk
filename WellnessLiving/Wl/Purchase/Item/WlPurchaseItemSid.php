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
     *
     *
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
     * Key of appointment.
     *
     * For old purchases "appointment" may also be a bookable asset without appointment service.
     *
     *
     *
     * A purchased item that is created during the online booking process {@link WlPurchaseItemSid::SERVICE}.
     */
  const APPOINTMENT = 8;

  /**
     * Single appointment reservation with deposit.
     *
     * This purchase created when client books a single appointment reservation with deposit amount,
     * to do so appointment should be managed with deposit.
     *
     * Key of a service. Or key of an appointment.
     *
     */
  const APPOINTMENT_DEPOSIT = 18;

  /**
     * Tips for the appointment.
     *
     * 
     *
     *
     * A purchased item that is created during the online booking process {@link WlPurchaseItemSid::SERVICE}.
     */
  const APPOINTMENT_TIP = 22;

  /**
     * Expense that comes along with the payment business. It contains information about additional services which are
     * included in the package. For example, payment for SMS.
     *
     *
     */
  const BUSINESS_EXPENSE = 16;

  /**
     * A skipped purchase for the business account.
     *
     *
     */
  const BUSINESS_SKIP = 17;

  /**
     * Business subscription payment.
     *
     *
     */
  const BUSINESS_SUBSCRIPTION = 23;

  /**
     * Single classes.
     *
     * Key of a class period.
     *
     *
     */
  const CLASS_PERIOD = 2;

  /**
     * Collectors payments
     *
     *
     */
  const COLLECTOR_DEBT = 24;

  /**
     * Arbitrary money withdrawal with comment.
     */
  const COMMENT = 13;

  /**
     * Gift Cards.
     *
     * Key of a coupon.
     */
  const COUPON = 10;

  /**
     * Events and enrollments. Client can not book only one class, he needs to book the whole enrollment.
     *
     * Key of a class.
     */
  const ENROLLMENT = 4;

  /**
     * Enrollment reservation with a deposit.
     *
     * This purchase created when client books an enrollment reservation with deposit amount,
     * to do so enrollment should be managed with deposit.
     *
     *  Key of a class.
     */
  const ENROLLMENT_DEPOSIT = 19;

  /**
     * Enrollment reservation with a discount.
     *
     * This purchase created when client books an enrollment reservation with early bird price.
     *
     * Key of a class.
     */
  const ENROLLMENT_DISCOUNT = 21;

  /**
     * Payment by an installment plan.
     *
     *
     */
  const INSTALLMENT = 14;

  /**
     * Recurrent payments.
     *
     * Key of a purchased promotion.
     *
     *
     */
  const MEMBERSHIP = 3;

  /**
     * Products.
     *
     * Key of a shop product option.
     *
     * For old purchases `k_id` may also be shop product key.
     *
     *
     */
  const PRODUCT = 9;

  /**
     * Promotions.
     *
     * Key of a promotion.
     *
     * For old purchases `k_id` may also be login promotion key.
     *
     */
  const PROMOTION = 1;

  /**
     * Early cancellation fee for a memberships.
     *
     *
     */
  const PROMOTION_CANCEL_FEE = 25;

  /**
     * A purchase to renew a promotion.
     *
     * Key of a login promotion.
     *
     *
     */
  const PROMOTION_RENEW = 12;

  /**
     * A purchase to book an asset.
     *
     * Key of a resource.
     *
     *
     */
  const RESOURCE = 15;

  /**
     * A purchase to book a deposit asset.
     *
     * Key of a resource.
     *
     *
     */
  const RESOURCE_DEPOSIT = 20;

  /**
     * Purchase item for appointments.
     *
     * This purchase item is created during the online booking process.
     *
     * Key of a service.
     *
     *
     * Purchase that is created when a staff adds payment for an appointment at POS {@link WlPurchaseItemSid::APPOINTMENT}.
     */
  const SERVICE = 6;
}

?>