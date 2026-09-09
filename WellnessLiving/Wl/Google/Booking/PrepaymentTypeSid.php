<?php

namespace WellnessLiving\Wl\Google\Booking;

/**
 * Enum to indicate the prepayment type.
 *
 * @link https://developers.google.com/maps-booking/reference/rest/v1alpha/inventory.partners.merchants.services#prepaymenttype
 */
class PrepaymentTypeSid
{
  /**
   * The prepayment is not supported for this service.
   */
  const NOT_SUPPORTED = 3;

  /**
   * The user can choose to pre-pay this service at the booking time or later, but it is not required in order to book.
   */
  const OPTIONAL = 1;

  /**
   * By default we will assume that the prepayment is {@link PrepaymentTypeSid::NOT_SUPPORTED}.
   */
  const PREPAYMENT_TYPE_UNSPECIFIED = 4;

  /**
   * The user has to pay this service at the booking time.
   */
  const REQUIRED = 2;
}

?>