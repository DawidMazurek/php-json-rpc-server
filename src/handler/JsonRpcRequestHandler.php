<?php

declare(strict_types = 1);

namespace dmazurek\JsonRpc\handler;

use dmazurek\JsonRpc\request\JsonRpcRequest;
use dmazurek\JsonRpc\response\JsonRpcResponse;

interface JsonRpcRequestHandler
{
    public function registerForMethod(string $method, callable $callback);
    public function handle(JsonRpcRequest $request): JsonRpcResponse;
}
