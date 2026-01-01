## Overview

<p>This repository demonstrates a gRPC based client–server communication implemented using Laravel and Roadrunner, showcasing how services can communicate efficiently using Protocol Buffers (Protobuf).</p>

<p>It exposes gRPC endpoints that can be consumed by other services.</p>

## Folder Structure
.
├── app/
│   ├── Generated/
│   │   ├── GPBMetadata/
│   │   │   └── Product.php
│   │   └── Product/
│   │       ├── ProductRequest.php
│   │       ├── ProductResponse.php
│   │       └── ProductServiceClient.php
│   │
│   └── Service/
│       └── Grpc/
│           └── ProductGrpcService.php
│
├── proto/
│   └── product.proto
│
├── grpc-worker.php
├── .rr.yaml
├── composer.json
└── vendor/

## Running the gRPC Server
- docker compose up -d
- Test the connection using Postman v10+ (gRPC supported)

<p>For client side implementation you can checkout to this repository https://github.com/Progesh/laravel-grpc-client</p>
