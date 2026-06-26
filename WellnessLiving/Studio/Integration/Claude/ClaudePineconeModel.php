<?php

namespace WellnessLiving\Studio\Integration\Claude;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API controller for handling POST requests from Claude integration, processing the requests, and returning appropriate JSON responses based on the requested method.
 *
 * Access control follows a one-key-one-tool model by design: each authorization key grants access
 * to exactly one tool. {@link KNOWLEDGE_CODE} exposes only `search_knowledge_base`;
 * This ensures that Thoth source code
 * cannot be accessed by holders of the knowledge base key, even within the same endpoint.
 *
 * If access to both tools is required in a single Claude session, two separate MCP connectors
 * must be configured — one per key. This is intentional and not a limitation of the implementation.
 *
 * @method WlModelRequest post()
 */
class ClaudePineconeModel extends WlModelAbstract
{
  /**
   * Secret key required to authorize and access this API endpoint.
   *
   * This value must be provided by the client in the request to successfully authenticate and use the endpoint.
   *
   * @field sig
   * @post get
   * @var string
   */
  public $s_authorization_key = '';
}

?>