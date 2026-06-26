<?php

namespace WellnessLiving\Wl\Mail\Domain;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for refreshing the status of a business email domain.
 *
 * This API allows users to manually refresh the verification status of their business email domain.
 * It checks if the user has access to the business and then initiates a task to verify the domain status.
 *
 * @api
 *
 * @method WlModelRequest post()
 */
class DomainRefreshModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @post post
   * @rule value-db {@link \RsBusinessAr}
   * @var string
   */
  public $k_business = '';
}

?>