<?php

namespace WellnessLiving\Wl\Business\Waiver;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about Business Waiver settings.
 *
 * @method WlModelRequest get() Gets waiver settings for the business.
 */
class BusinessWaiverModel extends WlModelAbstract
{
  /**
   * If {@link BusinessWaiverModel::$is_contract_minor} is set, this field contains the age
   * of the minor. Default value is 18.
   *
   * @get result
   * @var int
   */
  public $i_contract_minor = 18;

  /**
   * Require clients to agree to the Liability Release only when booking services. `True` means to require. `False` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_contract_book_only = false;

  /**
   * Clients can sign the waiver on behalf of any minor of age {@link BusinessWaiverModel::$i_contract_minor}
   *
   * @get result
   * @var bool
   */
  public $is_contract_minor = false;

  /**
   * Require clients to agree to the Liability Release upon registration. `True` means to require. `False` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_contract_upon_register = false;

  /**
   * Business Key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Contents of the business waiver.
   *
   * @get result
   * @var string
   */
  public $xml_contract = '';

  /**
   * Description of the business waiver.
   *
   * @get result
   * @var string
   */
  public $xml_description = '';
}

?>