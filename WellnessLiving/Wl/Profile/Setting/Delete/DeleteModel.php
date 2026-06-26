<?php

namespace WellnessLiving\Wl\Profile\Setting\Delete;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for delete account in business.
 *
 * This endpoint using captcha check.
 * To pass captcha need study the documentation by captcha API, there you will find that you need to send a captcha for
 * a specific action. For this API an action is {@link DeleteCaptcha::CID}.
 *
 * @method WlModelRequest get()
 * @method WlModelRequest post()
 */
class DeleteModel extends WlModelAbstract
{
  /**
   * List of business keys.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_business = [];

  /**
   * Data about deletion result.
   * Value is:
   *
   * <dl>
   *   <dt>bool `is_full_delete`</dt>
   *   <dd>`true` if client delete from all business, `false` otherwise.</dd>
   * 
   *   <dt>string `k_business_left`</dt>
   *   <dd>Business key when user left. Primary key in {@link \RsBusinessSql}</dd>
   * </dl>
   * @post result
   * @var array[]
   */
  public $a_delete_result = [];

  /**
   * List of reasons why account can not be deleted.
   *
   * <dl>
   *   <dt>array `a_reason`</dt>
   *   <dd>
   *     List of reasons why client can not be deleted. Each value is:
   *     <dl>
   *       <dt>string `html_data`</dt>
   *       <dd>Additional data for reason text.</dd>
   * 
   *       <dt>string `text_reason`</dt>
   *       <dd>Reason why client profile can't be deleted.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `is_reason_single`</dt>
   *   <dd>`true` if only one reason exist, `false` otherwise.</dd>
   * 
   *   <dt>string `text_name`</dt>
   *   <dd>Client name.</dd>
   * 
   *   <dt>string `url_profile`</dt>
   *   <dd>Link to the client profile.</dd>
   * </dl>
   * @get result
   * @post result
   * @var array[]
   */
  public $a_error_info = [];

  /**
   * List of user keys.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_uid = [];

  /**
   * List of user keys that can be deleted.
   *
   * @get result
   * @post result
   * @var string[]
   */
  public $a_uid_valid = [];

  /**
   * `true` if client delete from backend, `false` otherwise.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_backend = false;

  /**
   * The application ID.
   *
   * If set, it means that it is necessary to revoke the tokens of the connected social networks.
   * Currently, only Apple Sign-in supports token revocation.
   *
   * @get get
   * @post get
   * @var string
   */
  public $text_application = '';

  /**
   * Reason why account can not be deleted.
   *
   * @get error
   * @post error
   * @var string
   */
  public $text_reason = '';
}

?>