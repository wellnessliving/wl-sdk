<?php

namespace WellnessLiving\Wl\Session;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * This API is dedicated to save into session location selected by guest.
 *
 * It is forbidden to use sessions in application.
 *
 * But we must save location to define business member of which must became user after authorisation/registration.
 *
 * So usage of session is only way.
 *
 * @method WlModelRequest delete() Deletes selected by guest location from session.
 * @method WlModelRequest post() Saves into session location which was selected by guest when application was started.
 */
class LocationModel extends WlModelAbstract
{
  /**
   * Location selected when application was started.
   *
   * @post post
   * @var string
   */
  public $k_location = '0';
}

?>