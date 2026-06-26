<?php

namespace WellnessLiving\Wl\Virtual\Setting;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for manage virtual settings.
 *
 * @method WlModelRequest put() Retrieves a list of virtual settings.
 */
class SettingModel extends WlModelAbstract
{
  /**
   * List of visit statuses who have access to uploaded videos.
   *
   * @put get
   * @var int[]
   */
  public $a_visit_id;

  /**
   * Type of chime.
   *
   * @put get
   * @var int
   */
  public $id_chime;

  /**
   * Type of automatic recording.
   *
   * @put get
   * @var int
   */
  public $id_recording;

  /**
   * Whether to notify the host with a sound when a participant joins the meeting is in waiting room waiting to be admitted.
   *
   * @put get
   * @var bool
   */
  public $is_alert_join;

  /**
   * Whether chat is enable during meeting.
   *
   * @put get
   * @var bool
   */
  public $is_chat;

  /**
   * Whether participants can send messages in main chat or not.
   *
   * @put get
   * @var bool
   */
  public $is_chat_public;

  /**
   * Whether participants can send messages in main chat or not.
   *
   * @put get
   * @var bool
   */
  public $is_co_host;

  /**
   * Whether to start meetings with the host video on.
   *
   * @put get
   * @var bool
   */
  public $is_host_video;

  /**
   * Whether to include the passcode inside meeting link, so client will directly enter the meeting without having to enter passcode explicitly.
   *
   * @put get
   * @var bool
   */
  public $is_include_passcode;

  /**
   * Whether link to join meeting should be secured.
   *
   * `true` if link should be secured. In this case secure phrase will be added to join link which allows user to avoid credential enter step.
   * `false` if link should be common. In this case user will have to enter credentials before join meeting.
   *
   * @put get
   * @var bool
   */
  public $is_link_secure;

  /**
   * Whether to keep your participants muted once they enter the virtual session and all through it unless the host unmute them.
   *
   * @put get
   * @var bool
   */
  public $is_mute_entry;

  /**
   * Whether to start meetings with the participant video on.
   *
   * @put get
   * @var bool
   */
  public $is_participant_video;

  /**
   * Whether to allow host to record and save meeting in the cloud.
   *
   * @put get
   * @var string
   */
  public $is_recording_cloud;

  /**
   * Whether to allow only host to download cloud recordings.
   *
   * @put get
   * @var bool
   */
  public $is_recording_local;

  /**
   * Whether to enable waiting room for participants.
   *
   * @put get
   * @var bool
   */
  public $is_waiting_room;

  /**
   * Business key.
   *
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * Whether to allow screen sharing (Only from staff to client).
   *
   * <tt>false</tt> will allow screen sharing from host to participants, <tt>true</tt> will disable screen sharing.
   *
   * @put get
   * @var bool
   */
  public $not_screen_sharing;
}

?>