<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei\NuveiRestApi\Entity\PaymentOption\Response;

/**
 * The CVV2 (card verification value) response.
 *
 * Last used ID: 5.
 *
 * @link https://docs.nuvei.com/api/main/indexMain_v1_0.html?json#payment
 */
class CardVerificationResponseSid
{
  /**
   * CVV2 Match.
   */
  const CVV_MATCH = 1;

  /**
   * CVV2 No Match.
   */
  const CVV_NO_MATCH = 2;

  /**
   * Issuer is not certified and/or has not provided Visa the encryption keys.
   */
  const NOT_CERTIFIED = 3;

  /**
   * Not Processed.
   */
  const NOT_PROCESSED = 4;

  /**
   * CVV2 processor is unavailable.
   */
  const UNAVAILABLE = 5;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.Nuvei.NuveiRestApi.Entity.PaymentOption.Response.CardVerificationResponseSid';
}

?>