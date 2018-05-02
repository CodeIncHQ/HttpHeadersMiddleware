<?php
//
// +---------------------------------------------------------------------+
// | CODE INC. SOURCE CODE                                               |
// +---------------------------------------------------------------------+
// | Copyright (c) 2017 - Code Inc. SAS - All Rights Reserved.           |
// | Visit https://www.codeinc.fr for more information about licensing.  |
// +---------------------------------------------------------------------+
// | NOTICE:  All information contained herein is, and remains the       |
// | property of Code Inc. SAS. The intellectual and technical concepts  |
// | contained herein are proprietary to Code Inc. SAS are protected by  |
// | trade secret or copyright law. Dissemination of this information or |
// | reproduction of this material  is strictly forbidden unless prior   |
// | written permission is obtained from Code Inc. SAS.                  |
// +---------------------------------------------------------------------+
//
// Author:   Joan Fabrégat <joan@codeinc.fr>
// Date:     04/03/2018
// Time:     08:38
// Project:  HttpHeadersMiddleware
//
declare(strict_types = 1);
namespace CodeInc\HttpHeadersMiddleware;
use CodeInc\HttpHeadersMiddleware\Tests\NoCacheMiddlewareTest;
use Micheh\Cache\CacheUtil;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;


/**
 * Class NoCacheMiddleware
 *
 * @uses CacheUtil
 * @see NoCacheMiddlewareTest
 * @package CodeInc\HttpHeadersMiddleware
 * @author Joan Fabrégat <joan@codeinc.fr>
 * @license MIT <https://github.com/CodeIncHQ/HttpHeadersMiddleware/blob/master/LICENSE>
 * @link https://github.com/CodeIncHQ/HttpHeadersMiddleware
 */
class NoCacheMiddleware implements MiddlewareInterface
{
	/**
	 * @inheritdoc
	 * @param ServerRequestInterface $request
	 * @param RequestHandlerInterface $handler
	 * @return ResponseInterface
	 */
	public function process(ServerRequestInterface $request,
        RequestHandlerInterface $handler):ResponseInterface
	{
		// returns the response with the cache prevention headers
		return (new CacheUtil())->withCachePrevention($handler->handle($request));
	}
}