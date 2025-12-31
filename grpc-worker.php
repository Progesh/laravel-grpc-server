<?php

use App\Services\Grpc\ProductGrpcService;
use Grpc\Product\ProductServiceInterface;
use Spiral\RoadRunner\GRPC\Invoker;
use Spiral\RoadRunner\GRPC\Server;
use Spiral\RoadRunner\Worker;

require __DIR__ . '/vendor/autoload.php';

/**
 * Bootstrap Laravel
 */
$app = require __DIR__ . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$server = new Server(new Invoker(), [
    'debug' => false,
]);
$server->registerService(ProductServiceInterface::class, new ProductGrpcService());
$server->serve(Worker::create());
