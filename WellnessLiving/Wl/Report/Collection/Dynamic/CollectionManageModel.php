<?php

namespace WellnessLiving\Wl\Report\Collection\Dynamic;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Report\WlReportSid;

/**
 * API that manages dynamic collection.
 *
 * @method WlModelRequest get() Retrieves information about a dynamic collection.
 * @method WlModelRequest put() Updates dynamic collection.
 */
class CollectionManageModel extends WlModelAbstract
{
  /**
   * List of widgets that are displayed on the dashboard.
   *
   * <tt>null</tt> if list of widgets doesn't need to be updated.
   *
   * Structure of each item: 
   *
   * <dl>
   *   <dt>int `i_position`</dt>
   *   <dd>Report's position in the collection.</dd>
   * 
   *   <dt>int `id_report`</dt>
   *   <dd>Report ID, one of {@link WlReportSid}.</dd>
   * </dl>
   * @get result
   * @put post
   * @var int[][]|null
   * @see WlReportSid
   */
  public $a_report_list;

  /**
   * CID of the collection class.
   *
   * @get result
   * @var int
   */
  public $cid_collection;

  /**
   * Business key.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the dynamic collection to manage.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_dynamic_collection = '';

  /**
   * Collection title
   *
   * @get result
   * @var string
   */
  public $text_title;

  /**
   * Key of the user performing the request. Must be the same as currently logged-in user.
   *
   * @get get
   * @put get
   * @var string
   */
  public $uid = '';
}

?>