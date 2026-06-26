<?php

namespace WellnessLiving\Core\Prg\ClearPublic;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point to clear public html directory from PRG.
 *
 * @method WlModelRequest post() Recursively deletes all files and subdirectories from public html except for the following: Keeps files in these directories: *  public html *  public html/a *  public html/static  Does not recurse into these directories: *  public html/a/drive*
 */
class ClearPublicModel extends WlModelAbstract
{
  }

?>