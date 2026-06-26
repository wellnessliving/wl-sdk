<?php

namespace WellnessLiving\Thoth\ProgressLog\Report;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Member\Progress\Field\MeasurementSid;
use WellnessLiving\Wl\Member\Progress\Field\ProgressFieldSid;
use WellnessLiving\Wl\Member\Progress\Field\TypeSid;

/**
 * Retrieves information about Progress Log report, such as available metrics for the chart and whether the actor can
 * add new measurement records.
 *
 * @method WlModelRequest get()
 */
class ProgressLogReportInfoModel extends WlModelAbstract
{
  /**
   * List of available progress log chart metric fields.
   *
   * Complete structure of each item:
   *
   * <dl>
   *   <dt>array `a_measurement_unit`</dt>
   *   <dd>
   *     Measurement unit short form list. See {@link \Wl\Member\Progress\Field\MeasurementSid::getShortFormList()}
   *  for more details.
   *   </dd>
   * 
   *   <dt>array `a_measurement_unit_order`</dt>
   *   <dd>
   *     Order of measurement units. Each value is one from {@link MeasurementSid} constants,
   *  each key is order position. This is needed to fix problem that order of JSON object keys is not preserved.
   *   </dd>
   * 
   *   <dt>int `id_field`</dt>
   *   <dd>Field ID. One of the {@link ProgressFieldSid} constants.</dd>
   * 
   *   <dt>int `id_measurement_unit`</dt>
   *   <dd>Field measurement unit ID. One of the {@link MeasurementSid} constants.</dd>
   * 
   *   <dt>int `id_type`</dt>
   *   <dd>Field type ID. One of the {@link TypeSid} constants.</dd>
   * 
   *   <dt>bool `is_active`</dt>
   *   <dd>Whether field is active and should be displayed on page.</dd>
   * 
   *   <dt>bool `is_combined`</dt>
   *   <dd>Whether measurement combines several measurement units and field needs several inputs.</dd>
   * 
   *   <dt>bool `is_public`</dt>
   *   <dd>Whether this field is public. If this field is set to 0, this field is not visible to clients.</dd>
   * 
   *   <dt>bool `is_require`</dt>
   *   <dd>Whether field value is required for clients.</dd>
   * 
   *   <dt>bool `is_require_staff`</dt>
   *   <dd>Whether field value is required for staffs.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Business Key.</dd>
   * 
   *   <dt>string `k_field`</dt>
   *   <dd>Field key.</dd>
   * 
   *   <dt>string `s_column_name`</dt>
   *
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Progress field title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_chart_metric = [];

  /**
   * Whether specified actor can add a new transformation log measurement for the specified client.
   * `true` if they can, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $can_add_measurement = false;

  /**
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * @get get
   * @var string
   */
  public $uid_actor = '';

  /**
   * Key of the user, whose progress log profile page to render.
   *
   * @get get
   * @var string
   */
  public $uid_client = '';
}

?>