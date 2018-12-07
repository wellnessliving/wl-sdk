<?php

namespace WellnessLiving;

/**
 * Stores and manages cookies for API models.
 */
class WlModelCookie
{
  /**
   * A list of cookies.
   *
   * Key - name of the cookie. Value - value of the cookie.
   *
   * @var array
   */
  private $a_cookie = [];

  /**
   * Returns cookies value by its name.
   *
   * @param string $s_name Name of the cookie.
   * @return string|null Value of the cookie or <tt>null</tt> if cookie is not set.
   */
  public function cookieGet($s_name)
  {
    return isset($this->a_cookie[$s_name])?$this->a_cookie[$s_name]:null;
  }

  /**
   * Sets cookie value.
   *
   * @param string $s_name Name of the cookie.
   * @param string $s_value Value of the cookie.
   */
  public function cookieSet($s_name,$s_value)
  {
    $this->a_cookie[$s_name] = $s_value;
  }

  /**
   * Converts this object to string prepared for sending in HTTP headers.
   *
   * @return string String prepared for sending in HTTP headers.
   */
  public function toHeader()
  {
    $a_cookie = [];
    foreach($this->a_cookie as $s_name => $s_value)
      $a_cookie[] = $s_name.'='.$s_value;
    return implode(';',$a_cookie);
  }
}

?>