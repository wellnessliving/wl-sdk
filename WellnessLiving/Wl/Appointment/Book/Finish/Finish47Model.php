<?php

namespace WellnessLiving\Wl\Appointment\Book\Finish;

/**
 * An endpoint that completes an appointment booking.
 */
class Finish47Model extends FinishModel
{
  /**
   * All data from the appointment booking provider model.
   *
   * @post post
   * @var array
   */
  public $a_book_data = [];
}