<?php

namespace ccxt\abstract;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code


abstract class phemex extends \ccxt\Exchange {
    public function public_get_cfg_v2_products($params = array()) {
        return $this->request('cfg/v2/products', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_cfg_fundingrates($params = array()) {
        return $this->request('cfg/fundingRates', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_products($params = array()) {
        return $this->request('products', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_nomics_trades($params = array()) {
        return $this->request('nomics/trades', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_md_kline($params = array()) {
        return $this->request('md/kline', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_md_v2_kline_list($params = array()) {
        return $this->request('md/v2/kline/list', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_md_v2_kline($params = array()) {
        return $this->request('md/v2/kline', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function public_get_md_v2_kline_last($params = array()) {
        return $this->request('md/v2/kline/last', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v1_get_md_orderbook($params = array()) {
        return $this->request('md/orderbook', 'v1', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v1_get_md_trade($params = array()) {
        return $this->request('md/trade', 'v1', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v1_get_md_ticker_24hr($params = array()) {
        return $this->request('md/ticker/24hr', 'v1', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v1_get_md_ticker_24hr_all($params = array()) {
        return $this->request('md/ticker/24hr/all', 'v1', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v1_get_md_spot_ticker_24hr($params = array()) {
        return $this->request('md/spot/ticker/24hr', 'v1', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v1_get_md_spot_ticker_24hr_all($params = array()) {
        return $this->request('md/spot/ticker/24hr/all', 'v1', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v1_get_exchange_public_products($params = array()) {
        return $this->request('exchange/public/products', 'v1', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v2_get_md_v2_orderbook($params = array()) {
        return $this->request('md/v2/orderbook', 'v2', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v2_get_md_v2_trade($params = array()) {
        return $this->request('md/v2/trade', 'v2', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v2_get_md_v2_ticker_24hr($params = array()) {
        return $this->request('md/v2/ticker/24hr', 'v2', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v2_get_md_v2_ticker_24hr_all($params = array()) {
        return $this->request('md/v2/ticker/24hr/all', 'v2', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v2_get_api_data_public_data_funding_rate_history($params = array()) {
        return $this->request('api-data/public/data/funding-rate-history', 'v2', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_spot_orders_active($params = array()) {
        return $this->request('spot/orders/active', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_spot_orders($params = array()) {
        return $this->request('spot/orders', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_spot_wallets($params = array()) {
        return $this->request('spot/wallets', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_exchange_spot_order($params = array()) {
        return $this->request('exchange/spot/order', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_exchange_spot_order_trades($params = array()) {
        return $this->request('exchange/spot/order/trades', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_exchange_order_v2_orderlist($params = array()) {
        return $this->request('exchange/order/v2/orderList', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_exchange_order_v2_tradinglist($params = array()) {
        return $this->request('exchange/order/v2/tradingList', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_accounts_accountpositions($params = array()) {
        return $this->request('accounts/accountPositions', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_g_accounts_accountpositions($params = array()) {
        return $this->request('g-accounts/accountPositions', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_accounts_positions($params = array()) {
        return $this->request('accounts/positions', 'private', 'GET', $params, null, null, array("cost" => 25));
    }
    public function private_get_api_data_futures_funding_fees($params = array()) {
        return $this->request('api-data/futures/funding-fees', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_api_data_g_futures_funding_fees($params = array()) {
        return $this->request('api-data/g-futures/funding-fees', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_api_data_futures_orders($params = array()) {
        return $this->request('api-data/futures/orders', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_api_data_g_futures_orders($params = array()) {
        return $this->request('api-data/g-futures/orders', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_api_data_futures_orders_by_order_id($params = array()) {
        return $this->request('api-data/futures/orders/by-order-id', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_api_data_g_futures_orders_by_order_id($params = array()) {
        return $this->request('api-data/g-futures/orders/by-order-id', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_api_data_futures_trades($params = array()) {
        return $this->request('api-data/futures/trades', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_api_data_g_futures_trades($params = array()) {
        return $this->request('api-data/g-futures/trades', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_api_data_futures_trading_fees($params = array()) {
        return $this->request('api-data/futures/trading-fees', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_api_data_g_futures_trading_fees($params = array()) {
        return $this->request('api-data/g-futures/trading-fees', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_g_orders_activelist($params = array()) {
        return $this->request('g-orders/activeList', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_orders_activelist($params = array()) {
        return $this->request('orders/activeList', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function private_get_exchange_order_list($params = array()) {
        return $this->request('exchange/order/list', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_exchange_order($params = array()) {
        return $this->request('exchange/order', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_exchange_order_trade($params = array()) {
        return $this->request('exchange/order/trade', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_phemex_user_users_children($params = array()) {
        return $this->request('phemex-user/users/children', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_phemex_user_wallets_v2_depositaddress($params = array()) {
        return $this->request('phemex-user/wallets/v2/depositAddress', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_phemex_user_wallets_tradeaccountdetail($params = array()) {
        return $this->request('phemex-user/wallets/tradeAccountDetail', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_phemex_user_order_closedpositionlist($params = array()) {
        return $this->request('phemex-user/order/closedPositionList', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_exchange_margins_transfer($params = array()) {
        return $this->request('exchange/margins/transfer', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_exchange_wallets_confirm_withdraw($params = array()) {
        return $this->request('exchange/wallets/confirm/withdraw', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_exchange_wallets_withdrawlist($params = array()) {
        return $this->request('exchange/wallets/withdrawList', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_exchange_wallets_depositlist($params = array()) {
        return $this->request('exchange/wallets/depositList', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_exchange_wallets_v2_depositaddress($params = array()) {
        return $this->request('exchange/wallets/v2/depositAddress', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_api_data_spots_funds($params = array()) {
        return $this->request('api-data/spots/funds', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_assets_convert($params = array()) {
        return $this->request('assets/convert', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_assets_transfer($params = array()) {
        return $this->request('assets/transfer', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_assets_spots_sub_accounts_transfer($params = array()) {
        return $this->request('assets/spots/sub-accounts/transfer', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_assets_futures_sub_accounts_transfer($params = array()) {
        return $this->request('assets/futures/sub-accounts/transfer', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_get_assets_quote($params = array()) {
        return $this->request('assets/quote', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function private_post_spot_orders($params = array()) {
        return $this->request('spot/orders', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_orders($params = array()) {
        return $this->request('orders', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_g_orders($params = array()) {
        return $this->request('g-orders', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function private_post_positions_assign($params = array()) {
        return $this->request('positions/assign', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function private_post_exchange_wallets_transferout($params = array()) {
        return $this->request('exchange/wallets/transferOut', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function private_post_exchange_wallets_transferin($params = array()) {
        return $this->request('exchange/wallets/transferIn', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function private_post_exchange_margins($params = array()) {
        return $this->request('exchange/margins', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function private_post_exchange_wallets_createwithdraw($params = array()) {
        return $this->request('exchange/wallets/createWithdraw', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function private_post_exchange_wallets_cancelwithdraw($params = array()) {
        return $this->request('exchange/wallets/cancelWithdraw', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function private_post_exchange_wallets_createwithdrawaddress($params = array()) {
        return $this->request('exchange/wallets/createWithdrawAddress', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function private_post_assets_transfer($params = array()) {
        return $this->request('assets/transfer', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function private_post_assets_spots_sub_accounts_transfer($params = array()) {
        return $this->request('assets/spots/sub-accounts/transfer', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function private_post_assets_futures_sub_accounts_transfer($params = array()) {
        return $this->request('assets/futures/sub-accounts/transfer', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function private_post_assets_universal_transfer($params = array()) {
        return $this->request('assets/universal-transfer', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function private_post_assets_convert($params = array()) {
        return $this->request('assets/convert', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function private_put_spot_orders($params = array()) {
        return $this->request('spot/orders', 'private', 'PUT', $params, null, null, array("cost" => 1));
    }
    public function private_put_orders_replace($params = array()) {
        return $this->request('orders/replace', 'private', 'PUT', $params, null, null, array("cost" => 1));
    }
    public function private_put_g_orders_replace($params = array()) {
        return $this->request('g-orders/replace', 'private', 'PUT', $params, null, null, array("cost" => 1));
    }
    public function private_put_positions_leverage($params = array()) {
        return $this->request('positions/leverage', 'private', 'PUT', $params, null, null, array("cost" => 5));
    }
    public function private_put_g_positions_leverage($params = array()) {
        return $this->request('g-positions/leverage', 'private', 'PUT', $params, null, null, array("cost" => 5));
    }
    public function private_put_g_positions_switch_pos_mode_sync($params = array()) {
        return $this->request('g-positions/switch-pos-mode-sync', 'private', 'PUT', $params, null, null, array("cost" => 5));
    }
    public function private_put_positions_risklimit($params = array()) {
        return $this->request('positions/riskLimit', 'private', 'PUT', $params, null, null, array("cost" => 5));
    }
    public function private_delete_spot_orders($params = array()) {
        return $this->request('spot/orders', 'private', 'DELETE', $params, null, null, array("cost" => 2));
    }
    public function private_delete_spot_orders_all($params = array()) {
        return $this->request('spot/orders/all', 'private', 'DELETE', $params, null, null, array("cost" => 2));
    }
    public function private_delete_orders_cancel($params = array()) {
        return $this->request('orders/cancel', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
    public function private_delete_orders($params = array()) {
        return $this->request('orders', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
    public function private_delete_orders_all($params = array()) {
        return $this->request('orders/all', 'private', 'DELETE', $params, null, null, array("cost" => 3));
    }
    public function private_delete_g_orders_cancel($params = array()) {
        return $this->request('g-orders/cancel', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
    public function private_delete_g_orders($params = array()) {
        return $this->request('g-orders', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
    public function private_delete_g_orders_all($params = array()) {
        return $this->request('g-orders/all', 'private', 'DELETE', $params, null, null, array("cost" => 3));
    }
    public function publicGetCfgV2Products($params = array()) {
        return $this->request('cfg/v2/products', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetCfgFundingRates($params = array()) {
        return $this->request('cfg/fundingRates', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetProducts($params = array()) {
        return $this->request('products', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetNomicsTrades($params = array()) {
        return $this->request('nomics/trades', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetMdKline($params = array()) {
        return $this->request('md/kline', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetMdV2KlineList($params = array()) {
        return $this->request('md/v2/kline/list', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetMdV2Kline($params = array()) {
        return $this->request('md/v2/kline', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function publicGetMdV2KlineLast($params = array()) {
        return $this->request('md/v2/kline/last', 'public', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v1GetMdOrderbook($params = array()) {
        return $this->request('md/orderbook', 'v1', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v1GetMdTrade($params = array()) {
        return $this->request('md/trade', 'v1', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v1GetMdTicker24hr($params = array()) {
        return $this->request('md/ticker/24hr', 'v1', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v1GetMdTicker24hrAll($params = array()) {
        return $this->request('md/ticker/24hr/all', 'v1', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v1GetMdSpotTicker24hr($params = array()) {
        return $this->request('md/spot/ticker/24hr', 'v1', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v1GetMdSpotTicker24hrAll($params = array()) {
        return $this->request('md/spot/ticker/24hr/all', 'v1', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v1GetExchangePublicProducts($params = array()) {
        return $this->request('exchange/public/products', 'v1', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v2GetMdV2Orderbook($params = array()) {
        return $this->request('md/v2/orderbook', 'v2', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v2GetMdV2Trade($params = array()) {
        return $this->request('md/v2/trade', 'v2', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v2GetMdV2Ticker24hr($params = array()) {
        return $this->request('md/v2/ticker/24hr', 'v2', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v2GetMdV2Ticker24hrAll($params = array()) {
        return $this->request('md/v2/ticker/24hr/all', 'v2', 'GET', $params, null, null, array("cost" => 5));
    }
    public function v2GetApiDataPublicDataFundingRateHistory($params = array()) {
        return $this->request('api-data/public/data/funding-rate-history', 'v2', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetSpotOrdersActive($params = array()) {
        return $this->request('spot/orders/active', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetSpotOrders($params = array()) {
        return $this->request('spot/orders', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetSpotWallets($params = array()) {
        return $this->request('spot/wallets', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetExchangeSpotOrder($params = array()) {
        return $this->request('exchange/spot/order', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetExchangeSpotOrderTrades($params = array()) {
        return $this->request('exchange/spot/order/trades', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetExchangeOrderV2OrderList($params = array()) {
        return $this->request('exchange/order/v2/orderList', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetExchangeOrderV2TradingList($params = array()) {
        return $this->request('exchange/order/v2/tradingList', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetAccountsAccountPositions($params = array()) {
        return $this->request('accounts/accountPositions', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetGAccountsAccountPositions($params = array()) {
        return $this->request('g-accounts/accountPositions', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetAccountsPositions($params = array()) {
        return $this->request('accounts/positions', 'private', 'GET', $params, null, null, array("cost" => 25));
    }
    public function privateGetApiDataFuturesFundingFees($params = array()) {
        return $this->request('api-data/futures/funding-fees', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetApiDataGFuturesFundingFees($params = array()) {
        return $this->request('api-data/g-futures/funding-fees', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetApiDataFuturesOrders($params = array()) {
        return $this->request('api-data/futures/orders', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetApiDataGFuturesOrders($params = array()) {
        return $this->request('api-data/g-futures/orders', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetApiDataFuturesOrdersByOrderId($params = array()) {
        return $this->request('api-data/futures/orders/by-order-id', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetApiDataGFuturesOrdersByOrderId($params = array()) {
        return $this->request('api-data/g-futures/orders/by-order-id', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetApiDataFuturesTrades($params = array()) {
        return $this->request('api-data/futures/trades', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetApiDataGFuturesTrades($params = array()) {
        return $this->request('api-data/g-futures/trades', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetApiDataFuturesTradingFees($params = array()) {
        return $this->request('api-data/futures/trading-fees', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetApiDataGFuturesTradingFees($params = array()) {
        return $this->request('api-data/g-futures/trading-fees', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetGOrdersActiveList($params = array()) {
        return $this->request('g-orders/activeList', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetOrdersActiveList($params = array()) {
        return $this->request('orders/activeList', 'private', 'GET', $params, null, null, array("cost" => 1));
    }
    public function privateGetExchangeOrderList($params = array()) {
        return $this->request('exchange/order/list', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetExchangeOrder($params = array()) {
        return $this->request('exchange/order', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetExchangeOrderTrade($params = array()) {
        return $this->request('exchange/order/trade', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetPhemexUserUsersChildren($params = array()) {
        return $this->request('phemex-user/users/children', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetPhemexUserWalletsV2DepositAddress($params = array()) {
        return $this->request('phemex-user/wallets/v2/depositAddress', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetPhemexUserWalletsTradeAccountDetail($params = array()) {
        return $this->request('phemex-user/wallets/tradeAccountDetail', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetPhemexUserOrderClosedPositionList($params = array()) {
        return $this->request('phemex-user/order/closedPositionList', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetExchangeMarginsTransfer($params = array()) {
        return $this->request('exchange/margins/transfer', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetExchangeWalletsConfirmWithdraw($params = array()) {
        return $this->request('exchange/wallets/confirm/withdraw', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetExchangeWalletsWithdrawList($params = array()) {
        return $this->request('exchange/wallets/withdrawList', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetExchangeWalletsDepositList($params = array()) {
        return $this->request('exchange/wallets/depositList', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetExchangeWalletsV2DepositAddress($params = array()) {
        return $this->request('exchange/wallets/v2/depositAddress', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetApiDataSpotsFunds($params = array()) {
        return $this->request('api-data/spots/funds', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetAssetsConvert($params = array()) {
        return $this->request('assets/convert', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetAssetsTransfer($params = array()) {
        return $this->request('assets/transfer', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetAssetsSpotsSubAccountsTransfer($params = array()) {
        return $this->request('assets/spots/sub-accounts/transfer', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetAssetsFuturesSubAccountsTransfer($params = array()) {
        return $this->request('assets/futures/sub-accounts/transfer', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privateGetAssetsQuote($params = array()) {
        return $this->request('assets/quote', 'private', 'GET', $params, null, null, array("cost" => 5));
    }
    public function privatePostSpotOrders($params = array()) {
        return $this->request('spot/orders', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostOrders($params = array()) {
        return $this->request('orders', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostGOrders($params = array()) {
        return $this->request('g-orders', 'private', 'POST', $params, null, null, array("cost" => 1));
    }
    public function privatePostPositionsAssign($params = array()) {
        return $this->request('positions/assign', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function privatePostExchangeWalletsTransferOut($params = array()) {
        return $this->request('exchange/wallets/transferOut', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function privatePostExchangeWalletsTransferIn($params = array()) {
        return $this->request('exchange/wallets/transferIn', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function privatePostExchangeMargins($params = array()) {
        return $this->request('exchange/margins', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function privatePostExchangeWalletsCreateWithdraw($params = array()) {
        return $this->request('exchange/wallets/createWithdraw', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function privatePostExchangeWalletsCancelWithdraw($params = array()) {
        return $this->request('exchange/wallets/cancelWithdraw', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function privatePostExchangeWalletsCreateWithdrawAddress($params = array()) {
        return $this->request('exchange/wallets/createWithdrawAddress', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function privatePostAssetsTransfer($params = array()) {
        return $this->request('assets/transfer', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function privatePostAssetsSpotsSubAccountsTransfer($params = array()) {
        return $this->request('assets/spots/sub-accounts/transfer', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function privatePostAssetsFuturesSubAccountsTransfer($params = array()) {
        return $this->request('assets/futures/sub-accounts/transfer', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function privatePostAssetsUniversalTransfer($params = array()) {
        return $this->request('assets/universal-transfer', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function privatePostAssetsConvert($params = array()) {
        return $this->request('assets/convert', 'private', 'POST', $params, null, null, array("cost" => 5));
    }
    public function privatePutSpotOrders($params = array()) {
        return $this->request('spot/orders', 'private', 'PUT', $params, null, null, array("cost" => 1));
    }
    public function privatePutOrdersReplace($params = array()) {
        return $this->request('orders/replace', 'private', 'PUT', $params, null, null, array("cost" => 1));
    }
    public function privatePutGOrdersReplace($params = array()) {
        return $this->request('g-orders/replace', 'private', 'PUT', $params, null, null, array("cost" => 1));
    }
    public function privatePutPositionsLeverage($params = array()) {
        return $this->request('positions/leverage', 'private', 'PUT', $params, null, null, array("cost" => 5));
    }
    public function privatePutGPositionsLeverage($params = array()) {
        return $this->request('g-positions/leverage', 'private', 'PUT', $params, null, null, array("cost" => 5));
    }
    public function privatePutGPositionsSwitchPosModeSync($params = array()) {
        return $this->request('g-positions/switch-pos-mode-sync', 'private', 'PUT', $params, null, null, array("cost" => 5));
    }
    public function privatePutPositionsRiskLimit($params = array()) {
        return $this->request('positions/riskLimit', 'private', 'PUT', $params, null, null, array("cost" => 5));
    }
    public function privateDeleteSpotOrders($params = array()) {
        return $this->request('spot/orders', 'private', 'DELETE', $params, null, null, array("cost" => 2));
    }
    public function privateDeleteSpotOrdersAll($params = array()) {
        return $this->request('spot/orders/all', 'private', 'DELETE', $params, null, null, array("cost" => 2));
    }
    public function privateDeleteOrdersCancel($params = array()) {
        return $this->request('orders/cancel', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
    public function privateDeleteOrders($params = array()) {
        return $this->request('orders', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
    public function privateDeleteOrdersAll($params = array()) {
        return $this->request('orders/all', 'private', 'DELETE', $params, null, null, array("cost" => 3));
    }
    public function privateDeleteGOrdersCancel($params = array()) {
        return $this->request('g-orders/cancel', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
    public function privateDeleteGOrders($params = array()) {
        return $this->request('g-orders', 'private', 'DELETE', $params, null, null, array("cost" => 1));
    }
    public function privateDeleteGOrdersAll($params = array()) {
        return $this->request('g-orders/all', 'private', 'DELETE', $params, null, null, array("cost" => 3));
    }
}
