<?php

namespace WellnessLiving\Core\Request\Api\Application\Credential;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages credentials for the application.
 *
 * @method WlModelRequest delete() Deletes the specified credential for the application.  Accepts a credential CID identifying the credential type (such as Google or Facebook), resolves the corresponding credential for the current application, and removes it from the database.
 * @method WlModelRequest get() Returns the credential data for the application.  Accepts a credential CID identifying the credential type, loads the credential stored for the current application, and returns it as a JSON-encoded object containing only public fields.
 * @method WlModelRequest put() Saves the credential for the application.  Accepts a credential CID and a JSON-encoded object with credential fields, validates the data, and stores or replaces the credential for the current application.
 */
class CredentialModel extends WlModelAbstract
{
  /**
   * The CID of the credential.
   *
   * @delete get
   * @get get
   * @put get
   * @var int
   */
  public $cid_credential;

  /**
   * An array with the credential.
   *
   * @get result
   * @put post
   * @var string
   */
  public $json_credential = '[]';
}

?>