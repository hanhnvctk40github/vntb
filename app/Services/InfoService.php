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
        $info->time_access .= ' || ' . $datetime;
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
          return $os_platform .' || CT: '. $user_agent;
      }
      // Ket thuc lay he dieu hanh

    public function getInfoByIdClient($ip) {
      // $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
      // $location = $details->country;
      $location =  file_get_contents("http://ipinfo.io/{$ip}");
      // var_dump($country); die();
      return $location;
    }

    public function getListInfo() {

      $newInfo = new Info;
      $listInfo = $newInfo->all();
      return $listInfo;
    }

    public function create_slug($text) {
      //thay thế các ký tự không phải chữ hoặc dấu bằng dấu gạch ngang "-"
      $text = preg_replace('~[^\pL\d]+~u', '-', $text);
      // chuyển bảng mã
      // $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
      $text = iconv('UTF-8', 'ASCII//TRANSLIT', $text);

      // xoá các ký tự không mong muốn
      $text = preg_replace('~[^-\w]+~', '', $text);
      // trim $text = trim($text, '-');
      // bỏ các ký tự trùng lắp -
      $text = preg_replace('~-+~', '-', $text);
      // chuyển sang in thường
      $text = strtolower($text);
      if (empty($text)) {
        return 'n-a';
        }
      return $text;
    }

    public function toSlug($string){
      $exp2 = explode(" ",$string);
      $newString = "";
      $sizeOf = sizeof($exp2);
      foreach ($exp2 as $key => $value) {
      $exp = str_split($this->slug($value));
      foreach ($exp as $c) {
      if($c=="�"){

      }else if($c==" "){
      $newString.="-";
      }else{
      $newString.=$this->slug($c);
      }
      }
      $newString.="-";
      }
      return substr($newString, 0,strlen($newString)-1);
    }

    public function slug($string, $options = array())
    {
      //Bản đồ chuyển ngữ
      $slugTransliterationMap = array(
        'á' => 'a',
        'à' => 'a',
        'ả' => 'a',
        'ã' => 'a',
        'ạ' => 'a',
        'â' => 'a',
        'ă' => 'a',
        'Á' => 'A',
        'À' => 'A',
        'Ả' => 'A',
        'Ã' => 'A',
        'Ạ' => 'A',
        'Â' => 'A',
        'Ă' => 'A',
        'ấ' => 'a',
        'ầ' => 'a',
        'ẩ' => 'a',
        'ẫ' => 'a',
        'ậ' => 'a',
        'Ấ' => 'A',
        'Ầ' => 'A',
        'Ẩ' => 'A',
        'Ẫ' => 'A',
        'Ậ' => 'A',
        'ắ' => 'a',
        'ằ' => 'a',
        'ẳ' => 'a',
        'ẵ' => 'a',
        'ặ' => 'a',
        'Ắ' => 'A',
        'Ằ' => 'A',
        'Ẳ' => 'A',
        'Ẵ' => 'A',
        'Ặ' => 'A',
        'đ' => 'd',
        'Đ' => 'D',
        'é' => 'e',
        'è' => 'e',
        'ẻ' => 'e',
        'ẽ' => 'e',
        'ẹ' => 'e',
        'ê' => 'e',
        'É' => 'E',
        'È' => 'E',
        'Ẻ' => 'E',
        'Ẽ' => 'E',
        'Ẹ' => 'E',
        'Ê' => 'E',
        'ế' => 'e',
        'ề' => 'e',
        'ể' => 'e',
        'ễ' => 'e',
        'ệ' => 'e',
        'Ế' => 'E',
        'Ề' => 'E',
        'Ể' => 'E',
        'Ễ' => 'E',
        'Ệ' => 'E',
        'í' => 'i',
        'ì' => 'i',
        'ỉ' => 'i',
        'ĩ' => 'i',
        'ị' => 'i',
        'Í' => 'I',
        'Ì' => 'I',
        'Ỉ' => 'I',
        'Ĩ' => 'I',
        'Ị' => 'I',
        'ó' => 'o',
        'ò' => 'o',
        'ỏ' => 'o',
        'õ' => 'o',
        'ọ' => 'o',
        'ô' => 'o',
        'ơ' => 'o',
        'Ó' => 'O',
        'Ò' => 'O',
        'Ỏ' => 'O',
        'Õ' => 'O',
        'Ọ' => 'O',
        'Ô' => 'O',
        'Ơ' => 'O',
        'ố' => 'o',
        'ồ' => 'o',
        'ổ' => 'o',
        'ỗ' => 'o',
        'ộ' => 'o',
        'Ố' => 'O',
        'Ồ' => 'O',
        'Ổ' => 'O',
        'Ỗ' => 'O',
        'Ộ' => 'O',
        'ớ' => 'o',
        'ờ' => 'o',
        'ở' => 'o',
        'ỡ' => 'o',
        'ợ' => 'o',
        'Ớ' => 'O',
        'Ờ' => 'O',
        'Ở' => 'O',
        'Ỡ' => 'O',
        'Ợ' => 'O',
        'ú' => 'u',
        'ù' => 'u',
        'ủ' => 'u',
        'ũ' => 'u',
        'ụ' => 'u',
        'ư' => 'u',
        'Ú' => 'U',
        'Ù' => 'U',
        'Ủ' => 'U',
        'Ũ' => 'U',
        'Ụ' => 'U',
        'Ư' => 'U',
        'ứ' => 'u',
        'ừ' => 'u',
        'ử' => 'u',
        'ữ' => 'u',
        'ự' => 'u',
        'Ứ' => 'U',
        'Ừ' => 'U',
        'Ử' => 'U',
        'Ữ' => 'U',
        'Ự' => 'U',
        'ý' => 'y',
        'ỳ' => 'y',
        'ỷ' => 'y',
        'ỹ' => 'y',
        'ỵ' => 'y',
        'Ý' => 'Y',
        'Ỳ' => 'Y',
        'Ỷ' => 'Y',
        'Ỹ' => 'Y',
        'Ỵ' => 'Y',
        'd' => 'd',
        'đ' => 'd',
        'D' => 'd',
        'Đ' => 'd',
        '?' => '',
      );

      //Ghép cài đặt do người dùng yêu cầu với cài đặt mặc định của hàm
      $options = array_merge(array(
      'delimiter' => '-',
      'transliterate' => true,
      'replacements' => array(),
      'lowercase' => true,
      'encoding' => 'UTF-8'
      ), $options);

      //Chuyển ngữ các ký tự theo bản đồ chuyển ngữ
      if ($options['transliterate']) {
      $string = str_replace(array_keys($slugTransliterationMap), $slugTransliterationMap, $string);
      }

      //Nếu có bản đồ chuyển ngữ do người dùng cung cấp thì thực hiện chuyển ngữ
      if (is_array($options['replacements']) && !empty($options['replacements'])) {
      $string = str_replace(array_keys($options['replacements']), $options['replacements'], $string);
      }

      //Thay thế các ký tự không phải ký tự latin
      $string = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $string);

      //Chỉ giữ lại một ký tự phân cách giữa 2 từ
      $string = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', trim($string, $options['delimiter']));

      //Chuyển sang chữ thường nếu có yêu cầu
      if ($options['lowercase']) {
      $string = mb_strtolower($string, $options['encoding']);
      }

      //Trả kết quả
      return $string;
    }



  }
