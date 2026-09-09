<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei\NuveiRestApi;

/**
 * `Nuvei` response status.
 *
 * Possible statuses: `SUCCESS` or `ERROR`.
 *
 * Last ID: 2.
 *
 * @link https://docs.nuvei.com/api/main/indexMain_v1_0.html?json#getSessionToken
 */
class NuveiApiResponseStatusSid
{
  /**
   * Status of erroneous request.
   */
  const ERROR = 1;

  /**
   * Status of successful request.
   */
  const SUCCESS = 2;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.Nuvei.NuveiRestApi.NuveiApiResponseStatusSid';
}

?>