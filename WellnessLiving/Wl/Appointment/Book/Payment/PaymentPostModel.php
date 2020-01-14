<?php

namespace WellnessLiving\Wl\Appointment\Book\Payment;

/**
 * {@inheritdoc}
 * Model for send post query.
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