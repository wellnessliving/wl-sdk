<?php

namespace WellnessLiving\Wl\Insurance\Enrollment\Field;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves and validates a list of insurance partner fields.
 *
 * Use the GET method to load a list of required fields.
 *
 * Use the POST method to validate the fields before sending them to the payment API.
 */
class EnrollmentFieldListModel extends WlModelAbstract
{
  /**
   * Reimbursement account information.
   *
   * Keys - field name.
   * Values - value entered by user.
   *
   * 
   * @post post
   * @put post
   * @var string[]
   */
  public $a_account = [];

  /**
   * List of fields that the user has filled in for enrollment.
   *
   * Keys refer specifically to field keys.  Values refer specifically to values entered by the user.
   *
   * 
   * @post post
   * @put post
   * @var string[]
   */
  public $a_field = [];

  /**
   * The partner field list: 
   *
   * @get result
   * @var array
   */
  public $a_field_list;

  /**
   * The key of the business in which the enrollment is performed.
   *
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * "Wellness Program" key.
   *
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_wellness_program = '';
}

?>