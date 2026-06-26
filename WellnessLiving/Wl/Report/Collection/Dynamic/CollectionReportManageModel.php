<?php

namespace WellnessLiving\Wl\Report\Collection\Dynamic;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Report\WlReportSid;

/**
 * API to manage separate reports in a collection.
 *
 * @method WlModelRequest delete() Deletes a report from collection.
 */
class CollectionReportManageModel extends WlModelAbstract
{
  /**
   * Report ID within the collection, one of {@link WlReportSid}.
   *
   * Must be provided in combination with <var>k_dynamic_collection</var>.
   * Ignored if <var>k_dynamic_collection_report</var> is provided.
   *
   * <tt>null</tt> if <var>k_dynamic_collection_report</var> is provided instead.
   *
   * @delete get
   * @var int|null
   * @see WlReportSid
   */
  public $id_report = null;

  /**
   * Business key.
   *
   * @delete get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of dynamic collection to which <var>id_report</var> belongs.
   *
   * Must be provided in combination with <var>id_report</var>.
   * Ignored if <var>k_dynamic_collection_report</var> is provided.
   *
   * <tt>null</tt> if <var>k_dynamic_collection_report</var> is provided instead.
   *
   * @delete get
   * @var string|null
   */
  public $k_dynamic_collection = null;

  /**
   * Key of the dynamic collection report to manage.
   *
   * Must be provided if <var>k_dynamic_collection</var> and <var>id_report</var> are empty.
   *
   * <tt>null</tt> if <var>k_dynamic_collection</var> and <var>id_report</var> pair are provided instead.
   *
   * @delete get
   * @var string|null
   */
  public $k_dynamic_collection_report = null;

  /**
   * Key of the user performing the request. Must be the same as currently logged-in user.
   *
   * @delete get
   * @var string
   */
  public $uid = '';
}

?>