<?php

namespace WellnessLiving\Core\a;

/**
 * Functions used when working with folders.
 */
class AFolder
{
  /**
   * Delete files and folders in the specified directory.
   *
   * @param string $s_path The path to delete data for.
   * @param bool $is_recursive Determines if this is a recursive deletion.
   * @param bool $is_file If <tt>true</tt>, this delete files. Otherwise, this will be <tt>false</tt>.
   * @param bool $is_dir If <tt>true</tt>, this deletes subdirectories. Otherwise, this will be <tt>false</tt>.
   * @return bool If <tt>true</tt>, there aren't any errors. Otherwise, this will be <tt>false</tt> if an error occurred.
   */
  public static function clear($s_path,$is_recursive = true,$is_file = true,$is_dir = true)
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

  /**
   * Copies content from one folder to another.
   *
   * @param string $s_source The source folder.
   * @param string $s_destination The destination folder.
   */
  public static function copy($s_source,$s_destination)
  {
    $r_directory = opendir($s_source);
    while(($s_file=readdir($r_directory))!==false)
    {
      if($s_file==='.'||$s_file==='..'||$s_file==='.idea'||$s_file==='.svn')
        continue;

      $s_destination_file = $s_destination.'/'.$s_file;

      if(is_dir($s_source.'/'.$s_file))
      {
        if(!is_dir($s_destination_file))
          mkdir($s_destination_file);
        static::copy($s_source.'/'.$s_file,$s_destination_file);
      }
      else
      {
        copy($s_source.'/'.$s_file,$s_destination_file);
      }
    }
    closedir($r_directory);
  }
}

?>