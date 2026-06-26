<?php

namespace WellnessLiving\Wl\Zoom\Recover;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api endpoint to manage unloaded recordings.
 *
 * @method WlModelRequest get() Gets a list of unloaded recordings.
 * @method WlModelRequest post() Recover meeting recordings from cloud.
 */
class ZoomRecoverModel extends WlModelAbstract
{
  /**
   * List of unloaded meeting records. Each value is: 
   *
   * <dl>
   *   <dt>bool `is_task_exist`</dt>
   *   <dd>`true` if this task to upload video to FitVID exists in the task queue, `false` - otherwise.</dd>
   * 
   *   <dt>string `k_business_use`</dt>
   *   <dd>Key of the business for which meeting was created.</dd>
   * 
   *   <dt>string `s_meeting_id`</dt>
   *   <dd>Zoom meeting ID.</dd>
   * 
   *   <dt>string `s_recording_id`</dt>
   *   <dd>Id of the recording.</dd>
   * 
   *   <dt>string `text_name`</dt>
   *   <dd>Zoom meeting title.</dd>
   * 
   *   <dt>string `text_start`</dt>
   *
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_meeting_list = [];

  /**
   * Date by which the list of meetings must be returned.
   *
   * @get get
   * @var string
   */
  public $dl_meeting = '';

  /**
   * Key of the business for which meeting was created.
   *
   * @get get
   * @var string
   */
  public $k_business_use = '';

  /**
   * Zoom meeting ID.
   *
   * @post post
   * @var string
   */
  public $s_meeting_id = '';

  /**
   * ID of the recording.
   *
   * @post post
   * @var string
   */
  public $s_recording_id = '';
}

?>