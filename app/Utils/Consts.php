<?php
namespace App\Utils;
class Constants {
  const ADMIN_LOGIN = 'admin';
  const AGENT_LOGIN = 'agent';
  const SUPPLIER_LOGIN = 'supplier';
  
  // response code
  const CODE_SUCCESS = '200';
  const AUTH_FAIL = '401';
  const MSG_SUCCESS = '请求成功';
  
  const DEFAULT_CREDENTIALS = ['phone', 'password'];
  public static function getAuthType($name) {
      $map = [
        "ADMIN_LOGIN" => self::ADMIN_LOGIN,
        "AGENT_LOGGIN" => self::ADMIN_LOGIN,
        "SUPPLIER_LOGIN" => self::SUPPLIER_LOGIN,
      ];
      return $map[$name] ?? '';
  }
  public static function getCredential($authType='default') {
      $map = ['default' => self::DEFAULT_CREDENTIALS];
      return $map[$authType];
  }
  public static function genOkResponse($data=[]) {
      $code = self::CODE_SUCCESS;
      $msg = self::MSG_SUCCESS;
      return compact('code', 'msg', 'data');
  }
  public static function genFailResponse($code, $msg) {
      $code;
      $msg = self::MSG_SUCCESS;
      return compact('code', 'msg', 'data');
  }
}