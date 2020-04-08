<?php

namespace WellnessLiving\Core\a;

/**
 * Functions to work with folders.
 */
class AFolder
{
  /**
   * Delete files and folders in the specified directory.
   *
   * @param string $s_path Path to delete data.
   * @param bool $is_recursive Is recursive delete?
   * @param bool $is_file <tt>true</tt> to delete files, <tt>false</tt> otherwise.
   * @param bool $is_dir <tt>true</tt> to delete subdirectories, <tt>false</tt> otherwise.
   * @return bool <tt>true</tt> if ok, <tt>false</tt> if error occurred.
   */
  public static function clear(string $s_path,bool $is_recursive = true,bool $is_file = true,bool $is_dir = true):bool
  {
    if(empty($s_path))
      return true;
    if($s_path[strlen($s_path)-1]=='/')
      $s_path = substr($s_path,0,strlen($s_path)-1);
    $has_file = false;
    if($r_dir = opendir($s_path))
    {
      while(($s_file = readdir($r_dir))!==false)
      {
        if($s_file=='.'||$s_file=='..')
          continue;
        if(is_dir($s_path.'/'.$s_file))
        {
          if($is_recursive)
          {
            if(static::clear($s_path.'/'.$s_file,true,$is_file))
            {
              if($is_dir)
                rmdir($s_path.'/'.$s_file);
              else
                $has_file = true;
            }
            else
              $has_file = true;
          }
          else
            $has_file = true;
          continue;
        }
        if($is_file)
        {
          if(!unlink($s_path.'/'.$s_file))
            $has_file = true;
        }
        else
          $has_file = true;
      }
      closedir($r_dir);
    }
    return !$has_file;
  }

  public static function copy(string $s_source,string $s_destination):void
  {
    $r_directory = opendir($s_source);
    while(($s_file=readdir($r_directory))!==false)
    {
      if($s_file==='.'||$s_file==='..'||$s_file==='.idea'||$s_file==='.svn')
        continue;

      if(is_dir($s_source.'/'.$s_file))
      {
        mkdir($s_destination.'/'.$s_file);
        static::copy($s_source.'/'.$s_file,$s_destination.'/'.$s_file);
      }
      else
      {
        copy($s_source.'/'.$s_file,$s_destination.'/'.$s_file);
      }
    }
    closedir($r_directory);
  }
}

?>