<?php

namespace WellnessLiving\Core\Request\Api\Application\Credential;

use WellnessLiving\WlModelAbstract;

/**
 * Api for manage credential fro application.
 */
class CredentialModel extends WlModelAbstract
{
  /**
   * CID of the credential.
   * Accepted values: <ul>
   *   <li>
   *     <tt>972</tt> - Google credential.
   *     Use {@link \Wellnessliving\Core\Request\Model\Application\Credential\GoogleCredentialData} object for send credential.
   *   </li>
   *   <li>
   *     <tt>973</tt> - Facebook credential.
   *     Use {@link \Wellnessliving\Core\Request\Model\Application\Credential\FacebookCredentialData} object for send credential.
   *   </li>
   * </ul>
   *
   * @delete get
   * @get get
   * @put get
   * @var int
   */
  public $cid_credential;

  /**
   * Array with credential.
   *
   * @get result
   * @put post
   * @var array
   */
  public $json_credential;
}

?>