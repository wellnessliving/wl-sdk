<?php

namespace WellnessLiving\Studio\Ip\Service;

use WellnessLiving\WlModelAbstract;

/**
 * Allows to create, edit and delete IP services.
 */
class EditModel extends WlModelAbstract
{
  /**
   * Timeout of the service.
   *
   * One of {@link ServiceTimeoutSid} constants.
   *
   * @get result
   * @post post
   * @var int
   */
  public $id_service_timeout;

  /**
   * Type of the service.
   *
   * One of {@link ServiceTypeSid} constants.
   *
   * @get result
   * @post post
   * @var int
   */
  public $id_service_type;

  /**
   * Indicates whether automatic session renewal for IP-based access is restricted.
   *
   * If set to `1`, access by IP is restricted and automatic session renewal is disabled
   * if `0`, access by IP is allowed and session can be automatically renewed.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_auto_restricted = false;

  /**
   * If a service is edited, its key is stored here.
   *
   * <tt>null</tt> if a new service should be created.
   * This value is required for create and delete operations.
   *
   * @delete get
   * @get get
   * @post get,result
   * @var string|null
   */
  public $k_ip_service = null;

  /**
   * Group of services.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_group;

  /**
   * Name of the service.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_title;

  /**
   * Network update rules.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_update;
}

?>