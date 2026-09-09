<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei\NuveiRestApi\Entity\PaymentOption\Response;

/**
 * The address verification service (AVS) response.
 *
 * Last used ID: 10.
 *
 * @link https://docs.nuvei.com/api/main/indexMain_v1_0.html?json#payment
 */
class AddressVerificationResponseSid
{
  /**
   * The street address matches, the ZIP code does not.
   */
  const ADDRESS_MATCH_ZIP_NOT = 1;

  /**
   * AVS not supported by issuer.
   */
  const AVS_NOT_SUPPORTED = 2;

  /**
   * Not authorized (declined).
   */
  const DECLINED = 3;

  /**
   * Issuer is unavailable.
   */
  const ISSUER_UNAVAILABLE = 4;

  /**
   * Both the street address and postal code do not match.
   */
  const NOT_MATCH = 5;

  /**
   * Postal code matches, the street code does not.
   */
  const POSTAL_MATCH_STREET_CODE_NOT = 6;

  /**
   * Postal code and the street address match.
   */
  const POSTAL_MATCH_STREET_MATCH = 8;

  /**
   * Postal code matches, the street address does not.
   */
  const POSTAL_MATCH_STREET_NOT = 7;

  /**
   * Retry.
   */
  const RETRY = 9;

  /**
   * An exact match of both the 9-digit ZIP code and the street address.
   */
  const ZIP_MATCH_STREET_MATCH = 10;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.Nuvei.NuveiRestApi.Entity.PaymentOption.Response.AddressVerificationResponseSid';
}

?>