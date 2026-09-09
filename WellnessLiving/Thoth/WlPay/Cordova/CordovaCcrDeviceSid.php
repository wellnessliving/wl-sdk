<?php

namespace WellnessLiving\Thoth\WlPay\Cordova;

/**
 * A list of devices supported by credit card reader plugin.
 *
 * <b>*** ATTENTION ***</b> If you modify this class, you should also modify its counterparts in Java and ObjectiveC.
 *
 * Last used ID: 17.
 */
class CordovaCcrDeviceSid
{
  /**
   * Payment processor: Direct Connect.
   *
   * Device: <tt>IDTech/Augusta</tt>.
   */
  const DC_IDT_AUGUSTA = 4;

  /**
   * Payment processor: Direct Connect.
   *
   * Device: <tt>IDTech/BTMag</tt>.
   */
  const DC_IDT_BT_MAG = 5;

  /**
   * Payment processor: Direct Connect.
   *
   * Device: <tt>IDTech/UniMag</tt>.
   */
  const DC_IDT_UNI_MAG = 6;

  /**
   * Payment processor: Direct Connect.
   *
   * Device: <tt>IDTech/UniPay</tt>.
   *
   * Not supported in iOS.
   */
  const DC_IDT_UNI_PAY = 7;

  /**
   * Payment processor: Direct Connect.
   *
   * Device: <tt>Magtek</tt>, connection over audio jack. Supported devices: <tt>uDynamo</tt>, <tt>aDynamo</tt>.
   */
  const DC_MAGTEK_AUDIO = 11;

  /**
   * Payment processor: Paragon (ex. Direct Connect).
   *
   * Device: <tt>Magtek</tt>, bluetooth connection. Supported device - <tt>eDynamo</tt>.
   */
  const DC_MAGTEK_BLUETOOTH = 13;

  /**
   * Payment processor: Direct Connect.
   *
   * Device: <tt>iDynamo</tt> (for iOS only).
   */
  const DC_MAGTEK_LIGHTNING = 12;

  /**
   * Payment processor: Direct Connect.
   *
   * Device: <tt>IDTech/Miura</tt>.
   */
  const DC_MIURA = 8;

  /**
   * Payment processor: Direct Connect.
   *
   * Device: <tt>PAX</tt>.
   *
   * Documentation says that this device manager is not implemented.
   * In Direct Connect SDK we see that there is a library for iOS, but not for Android.
   */
  const DC_PAX = 9;

  /**
   * Payment processor: NMI.
   *
   * Device: Enterprise.
   */
  const NMI_ENTERPRISE = 3;

  /**
   * Payment processor: NMI.
   *
   * Device: IPS.
   */
  const NMI_IPS = 2;

  /**
   * Payment processor: NMI.
   *
   * Device: Unimag.
   */
  const NMI_UNIMAG = 1;

  /**
   * Payment processor: Stripe.
   *
   * Device: Simulated BBPOS WisePOS E.
   */
  const STRIPE_BBPOS_SIMULATED_WISEPOS_E = 17;

  /**
   * Payment processor: Stripe.
   *
   * Device: BBPOS Wisepad 3.
   */
  const STRIPE_BBPOS_WISEPAD_3_BLUETOOTH = 14;

  /**
   * Payment processor: Stripe.
   *
   * Device: BBPOS WisePOS E.
   */
  const STRIPE_BBPOS_WISEPOS_E_INTERNET = 15;

  /**
   * Payment processor: Stripe.
   *
   * Device: Stripe Reader M2.
   */
  const STRIPE_READER_M2_BLUETOOTH = 16;

  /**
   * Virtual device for testing purposes.
   *
   * Currently supported only by Direct Connect.
   */
  const VIRTUAL = 10;
}

?>