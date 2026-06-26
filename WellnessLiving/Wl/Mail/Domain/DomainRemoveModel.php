<?php

namespace WellnessLiving\Wl\Mail\Domain;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to remove a domain from the business settings.
 *
 * @method WlModelRequest delete()
 */
class DomainRemoveModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @delete get
   * @var string
   */
  public $k_business = '';
}

?>