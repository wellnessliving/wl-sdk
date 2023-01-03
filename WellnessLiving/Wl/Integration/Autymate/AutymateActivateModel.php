<?php

namespace WellnessLiving\Wl\Integration\Autymate;

use WellnessLiving\WlModelAbstract;

/**
 * Checks or changes the status of Autymate enrollments.
 */
class AutymateActivateModel extends WlModelAbstract
{
  /**
   * The mode of the request.
   *
   * One of the {@link \WellnessLiving\Wl\Integration\Autymate\AutymateAccessModeSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_mode = AutymateAccessModeSid::ENROLL;

  /**
   * The new status of the enrollment. If 0 then return the current status.
   *
   * One of {@link \WellnessLiving\Wl\Integration\Autymate\AutymateStatusSid} constants.
   *
   * @get get,result
   * @var int
   */
  public $id_status = 0;

  /**
   * The key of the business.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The randomly generated 32 character string used to authenticate Autymate requests for the business
   *
   * @get get
   * @var string
   */
  public $s_guid = '';

  /**
   * The user key.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}
?>