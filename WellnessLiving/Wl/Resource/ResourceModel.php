<?php

namespace WellnessLiving\Wl\Resource;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Service\ServiceRequireSid;

/**
 * Api to get data about resource.
 *
 * @method WlModelRequest get()
 */
class ResourceModel extends WlModelAbstract
{
  /**
   * Type of the resource.
   *
   * 1 - if this is a bookable asset.
   * 2 - if this is an off-site location with its own address.
   *
   * @get result
   * @var int
   */
  public $id_category;

  /**
   * Mode to require amount while booking a resource.
   * * One of the {@link ServiceRequireSid} constants.
   * *
   *
   * @get result
   * @var int
   */
  public $id_service_require;

  /**
   * Whether booking of the resource required confirmation from staff member.
   * *
   *
   * @get result
   * @var bool
   */
  public $is_staff_confirm;

  /**
   * Key of the business.
   *
   * <tt>null</tt> - if not set.
   *
   * @get get
   * @var string|null
   */
  public $k_business;

  /**
   * Key of the location.
   *
   * <tt>null</tt> - if not set.
   *
   * @get get,result
   * @var string|null
   */
  public $k_location;

  /**
   * Key of the resource.
   *
   * <tt>null</tt> - if not set.
   *
   * @get get
   * @var string|null
   */
  public $k_resource;

  /**
   * Title of the resource.
   *
   * @get result
   * @var string
   */
  public $text_title = '';
}

?>