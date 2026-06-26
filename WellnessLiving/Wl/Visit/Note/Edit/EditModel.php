<?php

namespace WellnessLiving\Wl\Visit\Note\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Schedule\Page\WlVisitNoteSid;

/**
 * Visit notes editor.
 *
 * @method WlModelRequest delete() Deletes note.
 * @method WlModelRequest get() Gets notes data.
 * @method WlModelRequest post() Saves notes data.
 */
class EditModel extends WlModelAbstract
{
  /**
   * Uncompressed note content received from form.
   *
   * @post post
   * @var array
   */
  public $a_data = [];

  /**
   * Content additional field of visit note. Format is same as <tt>a_visit_note</tt> field.
   *
   * @get result
   * @var array
   */
  public $a_data_note_additional;

  /**
   * Contains general information.
   *
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
   * Empty value means not set.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_visit = '';

  /**
   * @delete get
   * @var string
   */
  public $k_visit_note = '';
}

?>