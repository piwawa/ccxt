import Exchange from './abstract/bithumb.js';
import { Balances, Int, OHLCV, Order, OrderSide, OrderType, Ticker, Trade, Transaction } from './base/types.js';
/**
 * @class bithumb
 * @extends Exchange
 */
export default class bithumb extends Exchange {
    describe(): any;
    safeMarket(marketId?: any, market?: any, delimiter?: any, marketType?: any): any;
    amountToPrecision(symbol: any, amount: any): any;
    fetchMarkets(params?: {}): Promise<any[]>;
    parseBalance(response: any): Balances;
    fetchBalance(params?: {}): Promise<Balances>;
    fetchOrderBook(symbol: string, limit?: Int, params?: {}): Promise<import("./base/types.js").OrderBook>;
    parseTicker(ticker: any, market?: any): Ticker;
    fetchTickers(symbols?: string[], params?: {}): Promise<import("./base/types.js").Dictionary<Ticker>>;
    fetchTicker(symbol: string, params?: {}): Promise<Ticker>;
    parseOHLCV(ohlcv: any, market?: any): OHLCV;
    fetchOHLCV(symbol: string, timeframe?: string, since?: Int, limit?: Int, params?: {}): Promise<OHLCV[]>;
    parseTrade(trade: any, market?: any): Trade;
    fetchTrades(symbol: string, since?: Int, limit?: Int, params?: {}): Promise<Trade[]>;
    createOrder(symbol: string, type: OrderType, side: OrderSide, amount: any, price?: any, params?: {}): Promise<Order>;
    fetchOrder(id: string, symbol?: string, params?: {}): Promise<Order>;
    parseOrderStatus(status: any): string;
    parseOrder(order: any, market?: any): Order;
    fetchOpenOrders(symbol?: string, since?: Int, limit?: Int, params?: {}): Promise<Order[]>;
    cancelOrder(id: string, symbol?: string, params?: {}): Promise<any>;
    cancelUnifiedOrder(order: any, params?: {}): Promise<any>;
    withdraw(code: string, amount: any, address: any, tag?: any, params?: {}): Promise<Transaction>;
    parseTransaction(transaction: any, currency?: any): Transaction;
    fixCommaNumber(numberStr: any): any;
    nonce(): number;
    sign(path: any, api?: string, method?: string, params?: {}, headers?: any, body?: any): {
        url: string;
        method: string;
        body: any;
        headers: any;
    };
    handleErrors(httpCode: any, reason: any, url: any, method: any, headers: any, body: any, response: any, requestHeaders: any, requestBody: any): any;
}
