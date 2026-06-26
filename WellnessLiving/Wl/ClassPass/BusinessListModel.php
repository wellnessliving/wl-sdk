<?php

namespace WellnessLiving\Wl\ClassPass;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns a list of all partners.
 *
 * Dispatched URL: <tt>/cp/v1/partners</tt>.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest patch()
 * @method WlModelRequest post()
 * @method WlModelRequest put() This method is called to process <tt>PUT</tt> query.
 */
class BusinessListModel extends WlModelAbstract
{
  /**
   * @field pagination
   * @get result
   * @var array
   */
  public $a_pagination;

  /**
   * Be attentive this argument used as intermediate when request is forwarded and as final for direct request.
   * Logic of filling this array described in `namespace.Wl/ClassPass/doc/BusinessListApi-get.en.md`.
   *
   * @field partners
   * @get result
   * @var array
   */
  public $a_partner_list;
}

?>