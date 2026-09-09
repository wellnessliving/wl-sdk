<?php

namespace WellnessLiving\Wl\Zoom;

/**
 * List of known notifications from zoom.
 *
 * Last used ID: 12
 */
class ZoomApiEventSid
{
  /**
   * Notification thrown when meeting has been ended.
   *
   * @link https://marketplace.zoom.us/docs/api-reference/webhook-reference/meeting-events/meeting-ending
   */
  const MEETING_ENDED = 2;

  /**
   * Notification thrown when meeting recording has been completed.
   *
   * @link https://marketplace.zoom.us/docs/api-reference/webhook-reference/recording-events/recording-completed
   */
  const RECORDING_COMPLETED = 1;

  /**
   * Notification thrown when meeting recording has been paused.
   *
   * @link https://developers.zoom.us/docs/api/rest/reference/zoom-api/events/#operation/recording.paused
   */
  const RECORDING_PAUSED = 11;

  /**
   * Notification thrown when meeting recording has been resumed.
   *
   * @link https://developers.zoom.us/docs/api/rest/reference/zoom-api/events/#operation/recording.resumed
   */
  const RECORDING_RESUMED = 12;

  /**
   * Url validation notification.
   *
   * @link https://marketplace.zoom.us/docs/api-reference/webhook-reference/#validate-your-webhook-endpoint
   */
  const URL_VALIDATION = 10;

  /**
   * Notification thrown when user activated.
   *
   * @link https://marketplace.zoom.us/docs/api-reference/webhook-reference/user-events/user-activated
   */
  const USER_ACTIVATED = 7;

  /**
   * Notification thrown when new user created.
   *
   * @link https://marketplace.zoom.us/docs/api-reference/webhook-reference/user-events/user-created
   */
  const USER_CREATED = 4;

  /**
   * Notification thrown when user deactivated.
   *
   * @link https://marketplace.zoom.us/docs/api-reference/webhook-reference/user-events/user-deactivated
   */
  const USER_DEACTIVATED = 8;

  /**
   * Notification thrown when user deleted.
   *
   * @link https://marketplace.zoom.us/docs/api-reference/webhook-reference/user-events/user-deleted
   */
  const USER_DELETED = 5;

  /**
   * Notification thrown when user disassociated.
   *
   * @link https://marketplace.zoom.us/docs/api-reference/webhook-reference/user-events/user-disassociated
   */
  const USER_DISASSOCIATED = 6;

  /**
   * Notification thrown when user settings updated.
   *
   * @link https://marketplace.zoom.us/docs/api-reference/webhook-reference/user-events/user-settings-updated
   */
  const USER_SETTINGS_UPDATED = 9;

  /**
   * Notification thrown when user edited.
   *
   * @link https://marketplace.zoom.us/docs/api-reference/webhook-reference/user-events/user-updated
   */
  const USER_UPDATED = 3;
}

?>