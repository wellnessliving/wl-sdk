<?php

namespace WellnessLiving\Wl\Appointment\Edit;

use WellnessLiving\WlModelAbstract;

/**
 * Updates add-ons for an appointment.
 *
 * This endpoint can be used to update add-ons for existing appointments.
 */
class AddonUpdateModel extends WlModelAbstract
{
  /**
   * The appointment addon-ons.
   *
   * Old format - an array where each value is key of the add-on.
   * New format - each element is an array: 
   *
   * @put post
   * @var string[]|array[]
   */
  public $a_addon;

  /**
   * Data to show appointment add-ons:
   *
   * @get result
   * @var array
   */
  public $a_addon_data;

  /**
   * List of user keys to get add-ons for. Not empty only when getting add-ons for new appointment
   * ({@link AddonUpdateModel::$k_appointment} is null). User key '-1' means walk-in, user key '0' means new user
   * (user will be created together with appointment).
   *
   * @get get
   * @var string[]
   */
  public $a_uid = [];

  /**
   * Determines whether the appointment duration needs to be updated.
   * 
   * @put post
   * @var bool
   */
  public $is_duration_update = false;

  /**
   * The appointment key.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_appointment;

  /**
   * The business key. This will be an empty string if not set yet.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Location key.
   * Not empty only when getting add-ons for new appointment ({@link AddonUpdateModel::$k_appointment} is null).
   *
   * @get get
   * @var string
   */
  public $k_location = '';

  /**
   * Service key.
   * Not empty only when getting add-ons for new appointment ({@link AddonUpdateModel::$k_appointment} is null).
   *
   * @get get
   * @var string
   */
  public $k_service = '';
}

?>