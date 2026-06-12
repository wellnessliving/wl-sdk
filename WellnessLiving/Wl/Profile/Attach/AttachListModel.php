<?php

namespace WellnessLiving\Wl\Profile\Attach;

use WellnessLiving\WlModelAbstract;

/**
 * Manages client attachment list.
 */
class AttachListModel extends WlModelAbstract
{
  /**
   * List of client attachments.
   * Each element: 
   *
   * <dl>
   *   <dt>string `dtu_create`</dt>
   *   <dd>Date and time of creation in UTC MySQL format.</dd>
   * 
   *   <dt>string `dtu_edit`</dt>
   *   <dd>Date and time of the last edit in UTC MySQL format.</dd>
   * 
   *   <dt>int|null `i_height`</dt>
   *   <dd>Image height in pixels. `null` if not an image or dimensions are unavailable.</dd>
   * 
   *   <dt>int `i_show_delete`</dt>
   *   <dd>
   *     Flag indicating whether to show the delete button. `'1'` to show, `'0'` to hide.
   * Only present in backend mode.
   *   </dd>
   * 
   *   <dt>int|null `i_width`</dt>
   *   <dd>Image width in pixels. `null` if not an image or dimensions are unavailable.</dd>
   * 
   *   <dt>int `id_preview`</dt>
   *   <dd>Preview type identifier.</dd>
   * 
   *   <dt>bool `is_private`</dt>
   *   <dd>
   *     `true` if the attachment is private (not visible to the client); `false` otherwise.
   * Only present in backend mode.
   *   </dd>
   * 
   *   <dt>string `k_attach`</dt>
   *   <dd>Attachment key. 
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Business key. 
   * 
   *   <dt>string|null `k_quiz_response`</dt>
   *   <dd>
   *     Quiz response key. `null` if the attachment is not from a quiz response.
   * * Only present in backend mode.
   *   </dd>
   * 
   *   <dt>string|null `text_description`</dt>
   *   <dd>Attachment description. `null` if no description. Only present in backend mode.</dd>
   * 
   *   <dt>string `text_filename`</dt>
   *   <dd>Attachment file name.</dd>
   * 
   *   <dt>string `text_filesize`</dt>
   *   <dd>Human-readable file size (for example, "1.2 MB").</dd>
   * 
   *   <dt>string `text_filetype`</dt>
   *   <dd>File extension in lowercase (for example, "pdf", "jpg").</dd>
   * 
   *   <dt>string `text_source`</dt>
   *   <dd>Source description (for example, quiz title or "Uploaded by staff").
   * Only present in backend mode.</dd>
   * 
   *   <dt>string `text_uploaded_by`</dt>
   *   <dd>Name of the user who uploaded the attachment. Empty string if unknown.</dd>
   * 
   *   <dt>string `text_uploaded_date`</dt>
   *   <dd>Formatted upload date in the business locale.</dd>
   * 
   *   <dt>string `url_file`</dt>
   *   <dd>URL to download the attachment file.</dd>
   * 
   *   <dt>string|null `url_preview`</dt>
   *   <dd>URL to a preview image (50x50). `null` if preview is not available for this file type.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_list = [];

  /**
   * If `true`, the API is being used from backend. Otherwise, this will be `false`.
   *
   * @get get
   * @var bool
   */
  public $is_backend = true;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The filter phrase to filter attach by name.
   *
   * @get get
   * @var string
   */
  public $text_search = '';

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>