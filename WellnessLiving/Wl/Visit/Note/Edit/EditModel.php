<?php

namespace WellnessLiving\Wl\Visit\Note\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Schedule\Page\WlVisitNoteSid;

/**
 * Visit notes editor.
 *
 * @method WlModelRequest delete() Deletes note.  Removes the visit note record identified by `k_visit_note` after verifying that the  business is valid, the note exists, and the current staff member has privilege to delete  visit notes.
 * @method WlModelRequest get() Gets notes data.  Validates the business and visit, accounting for franchise travel mode when the visit  belongs to a different franchisee business, checks that the current staff member has  privilege to view or edit visit notes, and loads the note fields, additional note field,  and general visit information needed to render the edit form.
 * @method WlModelRequest post() Saves notes data.  Validates the business, visit, and note type, checks that the current staff member has  privilege to edit visit notes, then creates or updates the compressed note content for the  visit in a transaction.
 */
class EditModel extends WlModelAbstract
{
  /**
 * Uncompressed note content received from form.
 *
 * Each key is a note field key, and the value is the HTML content submitted for that field.
 *
 * @post post
 * @var array<string, string>
 */
  public $a_data = [];

  /**
 * Content additional field of visit note. Format is same as <tt>a_visit_note</tt> field.
 *
 * List with a single item: 
 *
 * <dl>
 *   <dt>string `html_note`</dt>
 *   <dd>Additional note content as HTML. Empty string if not set.</dd>
 * 
 *   <dt>string `html_note_stripped`</dt>
 *   <dd>Additional note content with formatting tags stripped. Empty string if not set.</dd>
 * 
 *   <dt>string `text_field`</dt>
 *   <dd>Title of the additional note field.</dd>
 * 
 *   <dt>string `text_field_name`</dt>
 *   <dd>Form field name used to submit the value back in `a_data`.</dd>
 * 
 *   <dt>string `text_id`</dt>
 *   <dd>Form field element id.</dd>
 * 
 *   <dt>string `text_key`</dt>
 *   <dd>Not translated field key.</dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_data_note_additional;

  /**
 * Contains general information.
 *
 * Information about the visit note: 
 *
 * <dl>
 *   <dt>string `dtl_create`</dt>
 *   <dd>Local date and time the note was created. Empty string if the note was never created.</dd>
 * 
 *   <dt>string `dtl_edit`</dt>
 *   <dd>Local date and time the note was last edited. Empty string if the note was never edited.</dd>
 * 
 *   <dt>string `k_visit_note`</dt>
 *   <dd>Visit note key, primary key in . `0` if the note does not exist yet.</dd>
 * 
 *   <dt>string `k_visit_previous`</dt>
 *   <dd>Key of the visit that has a previous note. `0` if a previous note does not exist.</dd>
 * 
 *   <dt>string `text_client_name`</dt>
 *   <dd>Full name of the client the visit belongs to.</dd>
 * 
 *   <dt>string `text_create`</dt>
 *   <dd>Name of the staff member who created the note.</dd>
 * 
 *   <dt>string `text_edit`</dt>
 *   <dd>Name of the staff member who last edited the note.</dd>
 * 
 *   <dt>string `text_location`</dt>
 *   <dd>Location title.</dd>
 * 
 *   <dt>string `text_service`</dt>
 *   <dd>Service, class, event, or asset title.</dd>
 * 
 *   <dt>string `text_service_date`</dt>
 *   <dd>Start date of the visit.</dd>
 * 
 *   <dt>string `text_service_time`</dt>
 *   <dd>Start and end time of the visit.</dd>
 * 
 *   <dt>string `text_staff`</dt>
 *   <dd>Staff full name.</dd>
 * 
 *   <dt>string `url_print`</dt>
 *   <dd>URL to print the visit note.</dd>
 * 
 *   <dt>string `url_profile_create`</dt>
 *   <dd>URL to the profile of the user who created the note. Empty string if the note does not exist.</dd>
 * 
 *   <dt>string `url_profile_edit`</dt>
 *   <dd>URL to the profile of the user who last edited the note. Empty string if the note was never edited.</dd>
 * </dl>
 * @get result
 * @var array
 */
  public $a_info;

  /**
 * List of notes:
 *
 * <dl>
 *   <dt>string `text_field`</dt>
 *   <dd>A title of field of a visit note.</dd>
 * 
 *   <dt>string `text_field_name`</dt>
 *   <dd>A field element name.</dd>
 * 
 *   <dt>string `text_id`</dt>
 *   <dd>A field element id.</dd>
 * 
 *   <dt>string `text_key`</dt>
 *   <dd>Not translated a title of field of a visit note.</dd>
 * 
 *   <dt>string `text_text`</dt>
 *   <dd>A content of field of a visit note.</dd>
 * </dl>
 * @get result
 * @var int[]
 */
  public $a_visit_note;

  /**
 * Can the current user edit the note.
 *
 * @get result
 * @var bool
 */
  public $can_edit;

  /**
 * Note type, one of {@link WlVisitNoteSid} constants.
 *
 * @get result
 * @post post
 * @var int
 */
  public $id_note = 0;

  /**
 * <tt>true</tt> - if visit notes are new, <tt>false</tt> - otherwise.
 *
 * @get result
 * @var bool
 */
  public $is_new = 0;

  /**
 * Business key.
 *
 * @delete get
 * @get get
 * @post get
 * @var string
 */
  public $k_business = '';

  /**
 * Visit key.
 *
 * Empty value means not set.
 *
 * @get get
 * @post get
 * @var string
 */
  public $k_visit = '';

  /**
 * Visit note key.
 *
 * @delete get
 * @var string
 */
  public $k_visit_note = '';
}

?>