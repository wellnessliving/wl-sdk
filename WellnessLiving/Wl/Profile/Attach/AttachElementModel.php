<?php

namespace WellnessLiving\Wl\Profile\Attach;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint for upload and manage attachments.
 *
 * @method WlModelRequest delete() Deletes the attachment.  Permanently removes the specified attachment from the client profile and logs the deletion  action in the business audit trail.
 * @method WlModelRequest get() Gets the data for the attachment editing form.  Returns attachment metadata including filename, description, filesize, file type, creation  and edit timestamps, download URL, preview URL, and a flag indicating whether the current  user has permission to delete the attachment.
 * @method WlModelRequest post() In case the attachment key is not specified, it adds a new attachment. In case the attachment key is specified, edits the attachment.  When {@link \Wl\Profile\Attach\AttachElementApi::$k_attach} is empty, uploads a new file to the client profile; when set, updates the  attachment metadata, file content, or visibility flag depending on the provided fields.
 */
class AttachElementModel extends WlModelAbstract
{
  /**
   * Uploaded file.
   *
   * @post post
   * @var array
   */
  public $a_file = [];

  /**
   * Date and time of the creation.
   *
   * @get result
   * @var string
   */
  public $dtu_create = '';

  /**
   * Date and time of the last edit.
   *
   * @get result
   * @var string
   */
  public $dtu_edit = '';

  /**
   * `true` if the attachment is private; `false` otherwise.
   * `null` until initialized.
   *
   * @post post
   * @var bool|null
   */
  public $is_private = null;

  /**
   * Attachment key.
   *
   * @delete get
   * @get get
   * @post get,result
   * @var string
   */
  public $k_attach = '';

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
   * Flag for showing a delete button.
   *
   * @get result
   * @var string
   */
  public $s_show_delete;

  /**
   * Attachment description.
   *
   * `null` for not update description.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $text_description = null;

  /**
   * Attachment file name.
   *
   * `null` for not update file name.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $text_filename = null;

  /**
   * Attachment file size.
   *
   * @get result
   * @var string
   */
  public $text_filesize = '';

  /**
   * Attachment file type.
   *
   * @get result
   * @var string
   */
  public $text_filetype = '';

  /**
   * User key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $uid = '';

  /**
   * URL to get attachment file.
   *
   * @get result
   * @var string
   */
  public $url_file = '';

  /**
   * URL to get preview attachment data.
   *
   * `null` in case when preview not available.
   *
   * @get result
   * @var string|null
   */
  public $url_preview = '';
}

?>