<?php

namespace WellnessLiving;

/**
 * A class with helper functions (such as dates).
 */
class WlTool
{
  /**
   * Converts a date/time from MySQL format to HTTP format.
   *
   * @param string $dt_mysql A date/time in MySQL format.
   * @return string A date/time in HTTP format.
   * @throws WlAssertException In a case of an assertion.
   */
  public static function dateMysqlHttp($dt_mysql)
  {
    $a_date = preg_split('/[^0-9]+/',$dt_mysql.' 0 0 0 0 0 0',7);

    WlAssertException::assertTrue(
      is_numeric($a_date[0])&&
      is_numeric($a_date[1])&&
      is_numeric($a_date[2])&&
      is_numeric($a_date[3])&&
      is_numeric($a_date[4])&&
      is_numeric($a_date[5]),
      [
        'dt_mysql' => $dt_mysql,
        'text_message' => 'Not well formed date. A non-numeric or empty element encountered.'
      ]);

    $i_year = $a_date[0]-1;

    /**
     * Number of days that have passed after 0001-01-01.
     */
    $i_day_count = $i_year*365+(int)bcdiv($i_year,4,0)-(int)bcdiv($i_year,100,0)+(int)bcdiv($i_year,400,0);
    $a_sm = [0,31,59,90,120,151,181,212,243,273,304,334];
    if(!isset($a_sm[$a_date[1]-1]))
      return 0;
    $i_day_count += $a_sm[$a_date[1]-1];
    $is_leap=$a_date[0]%4==0&&$a_date[0]%100!=0||$a_date[0]%400==0;
    if($a_date[1]>2&&$is_leap)
      $i_day_count++;
    $i_day_count += $a_date[2];

    $a_week = ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'];
    $a_month = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    return sprintf(
      '%s, %02d %s %04d %02d:%02d:%02d GMT',
      $a_week[($i_day_count-1)%7],
      $a_date[2],
      $a_month[$a_date[1]-1],
      $a_date[0],
      $a_date[3],
      $a_date[4],
      $a_date[5]
    );
  }

  /**
   * Returns current date in MySQL format.
   *
   * @return string Current date in MySQL format.
   */
  public static function dateNowMysql()
  {
    return gmdate('Y-m-d H:i:s',time());
  }

  /**
   * Gets all HTTP request headers.
   *
   * @return string[] All HTTP headers. The key is header name. The value is header value.
   */
  public static function getAllHeaders()
  {
    // The list of headers remains unchanged until the request is processed.
    static $a_header = null;

    if(function_exists('apache_request_headers'))
      return apache_request_headers();

    if($a_header!==null)
      return $a_header;

    $a_header=[];
    foreach($_SERVER as $s_name => $s_value)
    {
      if(strncmp($s_name,'HTTP_',5)==0)
      {
        $s_header = str_replace(
          ' ',
          '-',
          ucwords(
            strtolower(
              str_replace('_', ' ', substr($s_name, 5))
            )
          )
        );

        $a_header[$s_header] = $s_value;
      }
    }

    return $a_header;
  }
}

?>