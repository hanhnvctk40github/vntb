<?php
  namespace App\Services;
  use App\Models\Info;

  class InfoService {
    protected $info;
    public function __construct(Info $info) {
      $this->info = $info;
    }

    public function saveInfo($ip, $user_agent) {
      $result = null;
      if($ip != null && $this->checkIpExist($ip) == false) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $timestamp = time();
        $datetime = date("d/m/Y - H:i:s", $timestamp);
        $user_os = $this->getOS($user_agent);
        $location = $this->getInfoByIdClient($ip);
        $this->info->ip = $ip;
        $this->info->os = $user_os;
        $this->info->time_access = $datetime;
        $this->info->location = $location;
        if($this->info->save()) {
          $result = $this->info;
        }
      }
      return $result;
    }

    public function checkIpExist($ip) {
      
      $result = false;
      $newInfo = new Info;
      $info = $newInfo->all()->where('ip',$ip)->first();

      if(isset($info) && $info != null) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $timestamp = time();
        $datetime = date("d/m/Y - H:i:s", $timestamp);
        $info->time_access .= ', ' . $datetime;
        $info->save();
        
        $result = true;
      }
      return $result;
    }
  
    public function getOS($user_agent)
    {
          $os_platform    =   "Unknown OS Platform";
          $os_array       =   array(
                                  '/windows nt 10/i'     =>  'Windows 10',
                                  '/windows nt 6.3/i'     =>  'Windows 8.1',
                                  '/windows nt 6.2/i'     =>  'Windows 8',
                                  '/windows nt 6.1/i'     =>  'Windows 7',
                                  '/windows nt 6.0/i'     =>  'Windows Vista',
                                  '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                  '/windows nt 5.1/i'     =>  'Windows XP',
                                  '/windows xp/i'         =>  'Windows XP',
                                  '/windows nt 5.0/i'     =>  'Windows 2000',
                                  '/windows me/i'         =>  'Windows ME',
                                  '/win98/i'              =>  'Windows 98',
                                  '/win95/i'              =>  'Windows 95',
                                  '/win16/i'              =>  'Windows 3.11',
                                  '/macintosh|mac os x/i' =>  'Mac OS X',
                                  '/mac_powerpc/i'        =>  'Mac OS 9',
                                  '/linux/i'              =>  'Linux',
                    '/kalilinux/i'          =>  'KaliLinux',
                                  '/ubuntu/i'             =>  'Ubuntu',
                                  '/iphone/i'             =>  'iPhone',
                                  '/ipod/i'               =>  'iPod',
                                  '/ipad/i'               =>  'iPad',
                                  '/android/i'            =>  'Android',
                                  '/blackberry/i'         =>  'BlackBerry',
                                  '/webos/i'              =>  'Mobile',
                    '/Windows Phone/i'      =>  'Windows Phone'
                              );
          foreach ($os_array as $regex => $value) 
          { 
              if (preg_match($regex, $user_agent)) 
              {
                  $os_platform    =   $value;
              }
          }   
          return $os_platform;
      }
      // Ket thuc lay he dieu hanh

    public function getInfoByIdClient($ip) {
      // $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
      // $location = $details->country;
      $location =  file_get_contents("http://ipinfo.io/{$ip}");
      // var_dump($country); die();
      return $location;
    }      
  } 