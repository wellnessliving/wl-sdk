<?php

namespace WellnessLiving\Wl\Skin\Application\Resource;

use WellnessLiving\Core\a\AFolder;
use WellnessLiving\WlAssertException;
use WellnessLiving\WlModelAbstract;

/**
 * Information to generate application sources.
 */
class ApplicationResourceModel extends WlModelAbstract
{
  /**
   * Application data.
   *
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @var array[]|null
   */
  public $a_application = null;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Sets application ID in a certain file.
   *
   * @param string $s_sources Path to directory with sources that must be processed.
   * @param string $s_file File name.
   * @throws WlAssertException In a case of an error.
   */
  private function _id(string $s_sources, string $s_file):void
  {
    $s_id = '[ID]';

    if(empty($this->a_application[0]['text_domain']))
    {
      throw new WlAssertException([
        'text_message' => 'Application ID has not been returned by server.'
      ]);
    }

    $s_file = $s_sources.$s_file;
    if(!file_exists($s_file))
    {
      throw new WlAssertException([
        's_file' => $s_file,
        'text_message' => 'File does not exist.'
      ]);
    }

    $text_content = file_get_contents($s_file);

    if(strpos($text_content,$s_id)===false)
    {
      throw new WlAssertException([
        'text_content' => $text_content,
        'text_message' => 'File does not contain placeholder for application ID.'
      ]);
    }

    $text_content = str_replace($s_id,$this->a_application[0]['text_domain'],$text_content);

    file_put_contents($s_file,$text_content);
  }

  /**
   * Sets application name.
   *
   * @param string $s_sources Path to directory with sources that must be processed.
   * @throws WlAssertException In a case of an error.
   */
  private function _name(string $s_sources):void
  {
    $s_name = '[NAME]';

    if(empty($this->a_application[0]['text_name']))
    {
      throw new WlAssertException([
        'text_message' => 'Application name has not been returned by server.'
      ]);
    }

    $s_file = $s_sources.'config.xml';
    if(!file_exists($s_file))
    {
      throw new WlAssertException([
        's_file' => $s_file,
        'text_message' => 'File does not exist.'
      ]);
    }

    $text_content = file_get_contents($s_file);

    if(strpos($text_content,$s_name)===false)
    {
      throw new WlAssertException([
        'text_content' => $text_content,
        'text_message' => 'File does not contain placeholder for application name.'
      ]);
    }

    $text_content = str_replace($s_name,$this->a_application[0]['text_name'],$text_content);

    file_put_contents($s_file,$text_content);
  }

  /**
   * Sets application resources.
   *
   * @param string $s_sources Path to directory with sources that must be processed.
   * @throws WlAssertException In a case of an error.
   */
  private function _resource(string $s_sources):void
  {
    $s_resource = $s_sources.'res/';

    if(!file_exists($s_resource))
    {
      throw new WlAssertException([
        's_resource' => $s_resource,
        'text_message' => 'Resource directory does not exist.'
      ]);
    }

    if(empty($this->a_application[0]['a_resource']))
    {
      throw new WlAssertException([
        'text_message' => 'Resources information has not been returned by server.'
      ]);
    }
    $a_resource_list = $this->a_application[0]['a_resource'];

    foreach($a_resource_list as $a_resource)
    {
      foreach($a_resource['a_group'] as $a_group)
      {
        if(isset($a_group['a_image']))
        {
          foreach($a_group['a_image'] as $a_image)
          {
            if(!$a_image['url_link'])
              continue;

            $r_image = fopen($a_image['url_link'], 'r');

            foreach($a_image['a_file'] as $s_file)
            {
              $i_directory = strrpos($s_file,'/');
              if($i_directory!==false)
              {
                $s_directory = substr($s_file,0,$i_directory+1);
                if(!file_exists($s_resource.$s_directory))
                  continue;
              }

              file_put_contents($s_resource.$s_file,$r_image);
            }

            fclose($r_image);
          }
        }

        if(isset($a_group['a_file']))
        {
          foreach($a_group['a_file'] as $a_file)
          {
            if(!$a_file['url_link'])
              continue;

            $i_directory = strrpos($a_file['s_file'],'/');
            if($i_directory!==false)
            {
              $s_directory = substr($a_file['s_file'],0,$i_directory+1);
              if(!file_exists($s_sources.$s_directory))
                continue;
            }

            $r_file = fopen($a_file['url_link'],'r');
            file_put_contents($s_sources.$a_file['s_file'],$r_file);
            fclose($r_file);
          }
        }
      }
    }
  }

  /**
   * Generate sources for application.
   *
   * @param string $s_source Directory with raw sources.
   * @param string $s_destination Directory with ready sources for certain application.
   * @throws WlAssertException In a case of an error.
   */
  public function sources(string $s_source,string $s_destination):void
  {
    if(!is_dir($s_source))
    {
      throw new WlAssertException([
        'text_message' => 'Source directory does not exist.'
      ]);
    }
    if(!is_dir($s_destination))
    {
      throw new WlAssertException([
        'text_message' => 'Destination directory does not exist.'
      ]);
    }

    if(is_null($this->a_application))
    {
      throw new WlAssertException([
        'text_message' => 'You must load model information before sources generation.'
      ]);
    }
    if(!count($this->a_application))
    {
      throw new WlAssertException([
        'text_message' => 'Application information has not been returned by server.'
      ]);
    }

    if($s_source[strlen($s_source)-1]!=='/')
      $s_source .= '/';
    if($s_destination[strlen($s_destination)-1]!=='/')
      $s_destination .= '/';

    AFolder::clear($s_destination);
    AFolder::copy($s_source,$s_destination);

    $this->_resource($s_destination);
    $this->_id($s_destination,'config.xml');
    $this->_id($s_destination,'www/index.html');
    $this->_id($s_destination,'www/js/communication.js');
    $this->_name($s_destination);
  }
}

?>