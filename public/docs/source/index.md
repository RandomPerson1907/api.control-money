---
title: API Reference

language_tabs:
- php

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://api.control-money/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_40992bdc64e83308f3be9b8eed35fce0 -->
## /api/v1/users/register
> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post("/api/v1/users/register", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST /api/v1/users/register`


<!-- END_40992bdc64e83308f3be9b8eed35fce0 -->

<!-- START_ab10e1c11b203a254fc25c51c2d30f65 -->
## /api/v1/users/login
> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post("/api/v1/users/login", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST /api/v1/users/login`


<!-- END_ab10e1c11b203a254fc25c51c2d30f65 -->

<!-- START_6825494b026bcabed5e271b8ed2cf435 -->
## /api/v1/users/logout
> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get("/api/v1/users/logout", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
[
    {
        "status": false,
        "message": "User not found"
    }
]
```

### HTTP Request
`GET /api/v1/users/logout`


<!-- END_6825494b026bcabed5e271b8ed2cf435 -->

<!-- START_b18e8be657a92f7f58d809e8c613119e -->
## Display a listing of the resource.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get("/api/v1/invoices", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (500):

```json
null
```

### HTTP Request
`GET /api/v1/invoices`


<!-- END_b18e8be657a92f7f58d809e8c613119e -->


