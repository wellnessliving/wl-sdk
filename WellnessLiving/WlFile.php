<?php

namespace WellnessLiving;

/**
 * File to be sent with a model.
 */
class WlFile
{
  /**
   * Mimetype of the file. <tt>null</tt> if not set.
   *
   * @var string|null
   */
  private $s_mime;

  /**
   * Path to the file which will be uploaded.
   *
   * @var string
   */
  private $s_name;

  /**
   * Name of the file. <tt>null</tt> if not set.
   *
   * @var string|null
   */
  private $s_postname;

  /**
   * Creates a class object.
   *
   * @param string $s_name Path to the file which will be uploaded.
   * @param string|null $s_mime Mimetype of the file. <tt>null</tt> if not set.
   * @param string|null $s_postname Name of the file. <tt>null</tt> if not set.
   */
  public function __construct($s_name,$s_mime = null,$s_postname = null)
  {
    $this->s_mime = $s_mime;
    $this->s_name = $s_name;
    $this->s_postname = $s_postname;
  }

  /**
   * Gets mimetype of the file.
   *
   * @return string|null Mimetype of the file. <tt>null</tt> if not set.
   */
  public function mime()
  {
    return $this->s_mime;
  }

  /**
   * Gets path to the file which will be uploaded.
   *
   * @return string Path to the file which will be uploaded.
   */
  public function name()
  {
    return $this->s_name;
  }

  /**
   * Gets name of the file.
   *
   * @return string|null Name of the file. <tt>null</tt> if not set.
   */
  public function postname()
  {
    return $this->s_postname;
  }
}

?>