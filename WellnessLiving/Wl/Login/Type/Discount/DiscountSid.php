<?php

namespace WellnessLiving\Wl\Login\Type\Discount;

/**
 * Categories of purchases for which may be applied discounts via client/member types.
 *
 * Last used ID: 10.
 */
class DiscountSid
{
  /**
   * Appointment Purchase Options.
   * If for certain record of table {@link \Wl\Login\Type\Discount\Sql} field <var>id_login_type_discount</var>
   * is equal to this constant, field <var>k_id</var>
   */
  const APPOINTMENT = 1;

  /**
   * Class/Event Purchase Options.
   * If for certain record of table {@link \Wl\Login\Type\Discount\Sql} field <var>id_login_type_discount</var>
   * is equal to this constant, field <var>k_id</var>
   */
  const CLASSES = 2;

  /**
   * One visit of class.
   * If for certain record of table {@link \Wl\Login\Type\Discount\Sql} field <var>id_login_type_discount</var>
   * is equal to this constant, field <var>k_id</var>
   */
  const ONE_CLASS = 6;

  /**
   * One visit of event.
   * If for certain record of table {@link \Wl\Login\Type\Discount\Sql} field <var>id_login_type_discount</var>
   * is equal to this constant, field <var>k_id</var>
   */
  const ONE_EVENT = 7;

  /**
   * One bookable asset.
   * If for certain record of table {@link \Wl\Login\Type\Discount\Sql} field <var>id_login_type_discount</var>
   * is equal to this constant, field <var>k_id</var>
   */
  const ONE_RESOURCE = 10;

  /**
   * One appointment of service.
   * If for certain record of table {@link \Wl\Login\Type\Discount\Sql} field <var>id_login_type_discount</var>
   * is equal to this constant, field <var>k_id</var>
   */
  const ONE_SERVICE = 8;

  /**
   * Packages.
   * If for certain record of table {@link \Wl\Login\Type\Discount\Sql} field <var>id_login_type_discount</var>
   * is equal to this constant, field <var>k_id</var>
   */
  const PACKAGE = 3;

  /**
   * Products.
   * If for certain record of table {@link \Wl\Login\Type\Discount\Sql} field <var>id_login_type_discount</var>
   * is equal to this constant, field <var>k_id</var>
   */
  const PRODUCT = 4;

  /**
   * Asset Purchase Options.
   * If for certain record of table {@link \Wl\Login\Type\Discount\Sql} field <var>id_login_type_discount</var>
   * is equal to this constant, field <var>k_id</var>
   */
  const RESOURCE = 9;

  /**
   * Gym visits.
   * If for certain record of table {@link \Wl\Login\Type\Discount\Sql} field <var>id_login_type_discount</var>
   * is equal to this constant, field <var>k_id</var>
   */
  const VISIT = 5;
}

?>