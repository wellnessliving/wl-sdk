<?php

namespace WellnessLiving\Wl\Google\Booking;

/**
 * Enum to indicate the service type.
 *
 * @link https://developers.google.com/maps-booking/samples-tutorials/tutorials/tutorial-virtual#services-feed-specs
 */
class ServiceTypeSid
{
  /**
   * Service that provides appointments or classes. Recommended for (1) health
   * and fitness, (2) spa and beauty, and (3) financial consults and
   * evaluations services. Please see the supported service types:
   * https://developers.google.com/maps-booking/guides/end-to-end-integration/overview
   */
  const SERVICE_TYPE_APPOINTMENT = 5;

  /**
   * Service that provides dining reservation.
   */
  const SERVICE_TYPE_DINING_RESERVATION = 1;

  /**
   * Services that provide event based ticketing (e.g. concerts, sporting events, shows).
   * Do not use for Reserve with Google integrations.
   */
  const SERVICE_TYPE_EVENT_TICKET = 3;

  /**
   * Service that only provides food delivery.
   */
  const SERVICE_TYPE_FOOD_DELIVERY = 6;

  /**
   * Service that provides food ordering in general, could be either takeout or delivery or both.
   */
  const SERVICE_TYPE_FOOD_ORDERING = 2;

  /**
   * Service that only provides food takeout.
   */
  const SERVICE_TYPE_FOOD_TAKEOUT = 7;

  /**
   * Service that provides appointment for an online class or session which
   * will be fully virtual. Must be set if enabling virtual service bookings.
   */
  const SERVICE_TYPE_ONLINE_APPOINTMENT = 8;

  /**
   * Service that only provides trim tours.
   */
  const SERVICE_TYPE_TRIP_TOUR = 4;

  /**
   * Type not specified.
   */
  const SERVICE_TYPE_UNSPECIFIED = 0;
}

?>