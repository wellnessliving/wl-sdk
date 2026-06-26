<?php

namespace WellnessLiving\Wl\Help\Popup\Email;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for handling emails from the help popup.
 *
 * @method WlModelRequest post() Sends an email for the help popup.
 */
class EmailFormModel extends WlModelAbstract
{
  /**
   * The attached files to send with the email.
   * Each element corresponds to one attached file and has the following structure.
   *
   * <dl>
   *   <dt>string `s_encoded_content`</dt>
   *   <dd>The file's content encoded in base64.</dd>
   * 
   *   <dt>string `s_type`</dt>
   *   <dd>The file's MIME type.</dd>
   * 
   *   <dt>string `s_name`</dt>
   *   <dd>The file's name.</dd>
   * </dl>
   * @post post
   * @var array[]
   */
  public $a_attach = [];

  /**
   * Business key. It will be <tt>null</tt> if not yet set.
   *
   * @post post
   * @var string|null
   */
  public $k_business = null;

  /**
   * The description of the issue, the body of the email.
   *
   * @post post
   * @var string
   */
  public $s_description = '';

  /**
   * The reply to address for the email. This will be the email of the staff member.
   * The empty string will be returned if the validation is not passed.
   *
   * @post result
   * @var string
   */
  public $s_reply = '';

  /**
   * The subject of the email.
   *
   * @post post
   * @var string
   */
  public $s_subject = '';
}

?>