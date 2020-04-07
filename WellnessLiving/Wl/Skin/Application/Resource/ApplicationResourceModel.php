<?php

namespace WellnessLiving\Wl\Skin\Application\Resource;

use WellnessLiving\Core\a\AFolder;
use WellnessLiving\WlAssertException;
use WellnessLiving\WlModelAbstract;

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
   * Sets application resources.
   *
   * @param string $s_source Path to directory with sources that must be processed.
   */
  private function _resource(string $s_source):void
  {
    $s_resource = $s_source.'res/';

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
              if(!file_exists($s_source.$s_directory))
                continue;
            }

            $r_file = fopen($a_file['url_link'],'r');
            file_put_contents($s_source.$a_file['s_file'],$r_file);
            fclose($r_file);
          }
        }
      }
    }
  }

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

    AFolder::clear($s_destination);
    AFolder::copy($s_source,$s_destination);

    $this->_resource($s_destination);

  }
}

?>