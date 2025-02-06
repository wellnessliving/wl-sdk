<?php

namespace WellnessLiving\Wl\Profile\Attach;

use WellnessLiving\WlModelAbstract;

/**
 * Endpoint for upload and manage attachments.
 */
class AttachElementModel extends WlModelAbstract
{
  /**
   * Uploaded file.
   *
   * @post file
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
   * @put get
   * @var string
   */
  public $k_attach = '';

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
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
   * @get result
   * @post post
   * @put post
   * @var string
   */
  public $text_description = '';

  /**
   * Attachment file name.
   *
   * @get result
   * @post post
   * @put post
   * @var string
   */
  public $text_filename = '';

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
   * @put get
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