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
   * @param string $k_business Key of a business for that sources are making.
   * @param string $s_sources Path to directory with sources that must be processed.
   * @param string $s_file File name.
   * @throws WlAssertException In a case of an error.
   */
  private function _id(string $k_business,string $s_sources, string $s_file):void
  {
    $s_id = '[ID]';

    if(empty($this->a_application[$k_business]['text_domain']))
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

    $text_content = str_replace($s_id,$this->a_application[$k_business]['text_domain'],$text_content);

    file_put_contents($s_file,$text_content);
  }

  /**
   * Sets application name.
   *
   * @param string $k_business Key of a business for that sources are making.
   * @param string $s_sources Path to directory with sources that must be processed.
   * @throws WlAssertException In a case of an error.
   */
  private function _name(string $k_business,string $s_sources):void
  {
    $s_name = '[NAME]';

    if(empty($this->a_application[$k_business]['text_name']))
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

    $text_content = str_replace($s_name,$this->a_application[$k_business]['text_name'],$text_content);

    file_put_contents($s_file,$text_content);
  }

  /**
   * Sets application resources.
   *
   * @param string $k_business Key of a business for that sources are making.
   * @param string $s_sources Path to directory with sources that must be processed.
   * @throws WlAssertException In a case of an error.
   */
  private function _resource(string $k_business,string $s_sources):void
  {
    $s_resource = $s_sources.'res/';

    if(!file_exists($s_resource))
    {
      throw new WlAssertException([
        's_resource' => $s_resource,
        'text_message' => 'Resource directory does not exist.'
      ]);
    }

    if(empty($this->a_application[$k_business]['a_resource']))
    {
      throw new WlAssertException([
        'text_message' => 'Resources information has not been returned by server.'
      ]);
    }
    $a_resource_list = $this->a_application[$k_business]['a_resource'];

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

            $s_image = file_get_contents($a_image['url_link']);

            foreach($a_image['a_file'] as $s_file)
            {
              $i_directory = strrpos($s_file,'/');
              if($i_directory!==false)
              {
                $s_directory = substr($s_file,0,$i_directory+1);
                if(!file_exists($s_resource.$s_directory))
                  continue;
              }

              file_put_contents($s_resource.$s_file,$s_image);

              if($s_file==='screen/ios/Default@3x~iphone~comany.png')
                file_put_contents($s_sources.'www/icon.png',$s_image);
            }
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

            $r_file = fopen($a_file['url_link'],'rb');
            if(!$r_file)
              continue;

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

    foreach($this->a_application as $k_business => $a_application)
    {
      if(empty($a_application['text_domain']))
        continue;

      $s_destination_application = $s_destination.$k_business.'-'.$a_application['text_domain'].'/';

      echo $s_destination_application."\n";
      if(!is_dir($s_destination_application))
        mkdir($s_destination_application);

      AFolder::clear($s_destination_application);
      AFolder::copy($s_source,$s_destination_application);

      $this->_resource($k_business,$s_destination_application);
      $this->_id($k_business,$s_destination_application,'config.xml');
      $this->_id($k_business,$s_destination_application,'www/index.html');
      $this->_id($k_business,$s_destination_application,'www/js/communication.js');
      $this->_name($k_business,$s_destination_application);
    }
  }
}

?>