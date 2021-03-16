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
   * Placeholder of application ID.
   */
  private const ID = '[ID]';

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
   * Updates file `www/js/communication.js`.
   *
   * @param string $k_business Key of a business for that sources are making.
   * @param string $s_sources Path to directory with sources that must be processed.
   * @throws WlAssertException In a case of an error.
   */
  private function _communication(string $k_business,string $s_sources):void
  {
    $this->_file($k_business,$s_sources,'www/js/communication.js',[
      [
        's_key' => 'text_domain',
        's_placeholder' => static::ID
      ]
    ]);
  }

  /**
   * Updates content of file `config.xml`.
   *
   * @param string $k_business Key of a business for that sources are making.
   * @param string $s_sources Path to directory with sources that must be processed.
   * @throws WlAssertException In a case of an error.
   */
  private function _config(string $k_business,string $s_sources):void
  {
    $this->_file($k_business,$s_sources,'config.xml',[
      [
        's_key' => 'i_version',
        's_placeholder' => '[VERSION_CODE]'
      ],
      [
        's_key' => 's_google_revers',
        's_placeholder' => '[GOOGLE_REVERSED_CLIENT_ID]'
      ],
      [
        's_key' => 'text_domain',
        's_placeholder' => static::ID
      ],
      [
        's_key' => 'text_name',
        's_placeholder' => '[NAME]'
      ]
    ]);
  }

  /**
   * Updates a specified file.
   *
   * @param string $k_business Key of a business for that sources are making.
   * @param string $s_sources Path to directory with sources that must be processed.
   * @param string $s_file File to be updated.
   * @param array[] $a_data Data to be updated. Every element has next keys:
   * <dl>
   *   <dt>string <var>s_key</var></dt>
   *   <dd>Key of data in {@link ApplicationResourceModel::$a_application} field.</dd>
   *   <dt>string <var>s_placeholder</var></dt>
   *   <dd>Placeholder in source file to be replaced by data.</dd>
   * </dl>
   * @throws WlAssertException In a case of an error.
   */
  private function _file(string $k_business,string $s_sources,string $s_file,array $a_data):void
  {
    $a_replace = [];
    foreach($a_data as $a_data_item)
    {
      if(empty($this->a_application[$k_business][$a_data_item['s_key']]))
      {
        throw new WlAssertException([
          's_data' => $a_data_item['s_key'],
          'text_message' => 'Data has not been returned by server.'
        ]);
      }
      $a_replace[] = $this->a_application[$k_business][$a_data_item['s_key']];
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

    foreach($a_data as $a_data_item)
    {
      if(strpos($text_content,$a_data_item['s_placeholder'])===false)
      {
        throw new WlAssertException([
          's_placeholder' => $a_data_item['s_placeholder'],
          'text_content' => $text_content,
          'text_message' => 'File does not contain placeholder.'
        ]);
      }
    }

    $text_content = str_replace(
      array_column($a_data,'s_placeholder'),
      $a_replace,
      $text_content
    );

    file_put_contents($s_file,$text_content);
  }

  /**
   * Updates file `www/js/google.plus.js`.
   *
   * @param string $k_business Key of a business for that sources are making.
   * @param string $s_sources Path to directory with sources that must be processed.
   * @throws WlAssertException In a case of an error.
   */
  private function _google(string $k_business,string $s_sources):void
  {
    $this->_file($k_business,$s_sources,'www/js/google.plus.js',[
      [
        's_key' => 's_google_id',
        's_placeholder' => '[GOOGLE_CLIENT_ID]'
      ]
    ]);
  }

  /**
   * Updates content of file `www/index.html`.
   *
   * @param string $k_business Key of a business for that sources are making.
   * @param string $s_sources Path to directory with sources that must be processed.
   * @throws WlAssertException In a case of an error.
   */
  private function _index(string $k_business,string $s_sources):void
  {
    $this->_file($k_business,$s_sources,'www/index.html',[
      [
        's_key' => 'text_domain',
        's_placeholder' => static::ID
      ]
    ]);
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

            $s_prefix = substr($a_image['url_link'],0,4)==='http'?'':$this->config()::URL;
            $s_image = file_get_contents($s_prefix.$a_image['url_link']);

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

            $s_prefix = substr($a_file['url_link'],0,4)==='http'?'':$this->config()::URL;
            $r_file = fopen($s_prefix.$a_file['url_link'],'rb');
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
      $this->_config($k_business,$s_destination_application);
      $this->_index($k_business,$s_destination_application);
      $this->_communication($k_business,$s_destination_application);
      $this->_google($k_business,$s_destination_application);
    }
  }
}

?>