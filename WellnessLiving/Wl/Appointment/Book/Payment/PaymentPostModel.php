<?php

namespace WellnessLiving\Wl\Appointment\Book\Payment;

/**
 * An endpoint that sends payments for an appointment booking.
 */
class PaymentPostModel extends PaymentModel
{
  /**
   * Information detailing an appointment booking.
   *
   * @post post
   * @var array
   */
  public $a_book_data = [];
}

?>