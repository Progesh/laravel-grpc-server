<?php

namespace App\Services\Grpc;

use Grpc\Product\ProductRequest;
use Grpc\Product\ProductResponse;
use Grpc\Product\ProductServiceInterface;
use Spiral\RoadRunner\GRPC\ContextInterface;

class ProductGrpcService implements ProductServiceInterface
{
    public function GetProduct(
        ContextInterface $ctx,
        ProductRequest $request
    ): ProductResponse {
        // For demonstration, returning a static product. In real scenarios, fetch from DB.
        $response = new ProductResponse();
        $response->setProductId("1");
        $response->setName("Sample Product");
        $response->setPrice(9.99);
        return $response;
    }
}
