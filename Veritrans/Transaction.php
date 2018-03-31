<?php
/**
 * API methods to get transaction status, approve and cancel transactions
 */

namespace Veritrans;

class Transaction {

  /**
   * Retrieve transaction status
   * @param string $id Order ID or transaction ID
   * @return mixed[]
   */
  public static function status($id)
  {
    return ApiRequestor::get(
        Config::getBaseUrl() . '/' . $id . '/status',
        Config::$serverKey,
        false);
  }

  /**
   * Approve challenge transaction
   * @param string $id Order ID or transaction ID
   * @return string
   */
  public static function approve($id)
  {
    return ApiRequestor::post(
        Config::getBaseUrl() . '/' . $id . '/approve',
        Config::$serverKey,
        false)->status_code;
  }

  /**
   * Cancel transaction before it's settled
   * @param string $id Order ID or transaction ID
   * @return string
   */
  public static function cancel($id)
  {
    return ApiRequestor::post(
        Config::getBaseUrl() . '/' . $id . '/cancel',
        Config::$serverKey,
        false)->status_code;
  }
  
  /**
   * Expire transaction before it's setteled
   * @param string $id Order ID or transaction ID
   * @return mixed[]
   */
  public static function expire($id)
  {
    return ApiRequestor::post(
        Config::getBaseUrl() . '/' . $id . '/expire',
        Config::$serverKey,
        false);
  }
}
