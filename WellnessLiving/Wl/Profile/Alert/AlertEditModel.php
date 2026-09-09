<?php

namespace WellnessLiving\Wl\Profile\Alert;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Location\Flag\FlagSourceEnum;
use WellnessLiving\Wl\RsLoginNoteAccessSid;
use WellnessLiving\Wl\RsLoginNoteFlagSid;

/**
 * Allows to create, read, update and delete login notes.
 *
 * @method WlModelRequest delete() Deletes existing note.  Permanently removes the login note specified by `k_login_note` from the business, requiring  backend access for the current user.
 * @method WlModelRequest get() Retrieves login note data.  Loads a single login note for editing, including its text, access type, flag settings,  booking and purchase restrictions, and location flags. Used to populate the edit form before  saving changes.
 * @method WlModelRequest post() Creates new text note or updates the existing one.  Creates or updates a login note on the client's profile, setting its text, access  restrictions, booking and purchase flags, and the locations where the note applies. Used by  staff to attach internal notes or warnings that appear on check-in and booking flows.
 */
class AlertEditModel extends WlModelAbstract
{
  /**
   * The list of location keys to flag client in.
   *
   * @post post
   * @var string[]
   */
  public $a_location = [];

  /**
   * Login note information.
   *
   * <dl>
   *   <dt>array `a_location`</dt>
   *   <dd>
   *     List of locations the note applies to. Each element:
   *     <dl>
   *       <dt>string `html_title`</dt>
   *       <dd>HTML-escaped location title.</dd>
   * 
   *       <dt>bool `is_select`</dt>
   *       <dd>`true` if this location is selected for the flag; `false` otherwise.</dd>
   * 
   *       <dt>string `k_id`</dt>
   *       <dd>Location key. </dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Location title.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `can_flag`</dt>
   *   <dd>`true` if the current user can flag the client; `false` otherwise.</dd>
   * 
   *   <dt>int `id_login_note_access`</dt>
   *   <dd>Login note access type. One of {@link RsLoginNoteAccessSid} constants.</dd>
   * 
   *   <dt>int `id_login_note_flag`</dt>
   *   <dd>Login note flag type. One of {@link RsLoginNoteFlagSid} constants.</dd>
   * 
   *   <dt>int|null `id_source`</dt>
   *   <dd>
   *     Flag source identifier.
   * One of {@link FlagSourceEnum} constant.
   * `null` if the flag was created manually.
   *   </dd>
   * 
   *   <dt>bool `is_automated`</dt>
   *   <dd>`true` if the note was created by an automated process; `false` if created manually.</dd>
   * 
   *   <dt>bool `is_book`</dt>
   *   <dd>`true` if the flagged client is allowed to book; `false` otherwise.</dd>
   * 
   *   <dt>bool `is_flag`</dt>
   *   <dd>`true` if the client is currently flagged; `false` otherwise.</dd>
   * 
   *   <dt>bool `is_icon`</dt>
   *   <dd>`true` if a flag icon should be displayed; `false` otherwise.</dd>
   * 
   *   <dt>bool `is_location_multiple`</dt>
   *   <dd>`true` if the business has multiple locations; `false` otherwise.</dd>
   * 
   *   <dt>bool `is_purchase`</dt>
   *   <dd>`true` if the flagged client is allowed to make purchases; `false` otherwise.</dd>
   * 
   *   <dt>bool `is_remove`</dt>
   *   <dd>`true` if the note is marked for removal; `false` otherwise.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Business key. </dd>
   * 
   *   <dt>string `k_login_note`</dt>
   *   <dd>Login note key. </dd>
   * 
   *   <dt>string `s_text`</dt>
   *   <dd>Note text content.</dd>
   * 
   *   <dt>string `text_flag_description`</dt>
   *   <dd>Description of the flag source for display.</dd>
   * 
   *   <dt>string `text_flag_disable`</dt>
   *   <dd>Text explaining how to disable the automated flag. Empty string if the flag is manual.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>User key of the flagged client. </dd>
   * 
   *   <dt>string `url_action`</dt>
   *   <dd>URL to submit the login note edit form.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_login_note_data = [];

  /**
   * Login note access type ID.
   *
   * @post post
   * @var int
   * @see RsLoginNoteAccessSid
   */
  public $id_login_note_access = 0;

  /**
   * Whether flagged user can book. Does not matter if {@link AlertEditModel::$is_flag} is `false`.
   *
   * @post post
   * @var bool
   */
  public $is_book = false;

  /**
   * Whether to flag the user.
   *
   * @post post
   * @var bool
   */
  public $is_flag = false;

  /**
   * Whether flagged user can make purchases. Does not matter if {@link AlertEditModel::$is_flag} is `false`.
   *
   * @post post
   * @var bool
   */
  public $is_purchase = false;

  /**
   * Key of current business.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * Login note key to edit or get info for.
   * Empty if new entry is being added.
   *
   * @delete get
   * @get get
   * @post get,result
   * @var string
   */
  public $k_login_note = '0';

  /**
   * Note text.
   *
   * @post post
   * @var string
   */
  public $text_note = '';

  /**
   * Key of a user to show information or post a note for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>