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

<!-- START_13a195ed380ca3be0a53c21d896d7f01 -->
## /api/v1/users/logout
> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post("/api/v1/users/logout", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST /api/v1/users/logout`


<!-- END_13a195ed380ca3be0a53c21d896d7f01 -->

<!-- START_6c5e0bab28b9a0da78549ac6c574a1f4 -->
## /api/v1/groups
> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get("/api/v1/groups", [
    'headers' => [
            "Content-Type" => "application/json",
        ],
    'json' => [
            "title" => "est",
            "body" => "id",
            "type" => "omnis",
            "author_id" => "4",
            "thumbnail" => "enim",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (500):

```json
null
```

### HTTP Request
`GET /api/v1/groups`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | The title of the post.
    body | string |  required  | The title of the post.
    type | string |  optional  | The type of post to create. Defaults to 'textophonious'.
    author_id | integer |  optional  | the ID of the author
    thumbnail | image |  optional  | This is required if the post type is 'imagelicious'.

<!-- END_6c5e0bab28b9a0da78549ac6c574a1f4 -->

<!-- START_3ca26d95589ea34edab8e87c3bdd9766 -->
## /api/v1/groups/{id}
> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get("/api/v1/groups/1", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (500):

```json
null
```

### HTTP Request
`GET /api/v1/groups/{id}`


<!-- END_3ca26d95589ea34edab8e87c3bdd9766 -->

<!-- START_e22d6fda00db6aa77cba8ef686d2e292 -->
## /api/v1/groups
> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post("/api/v1/groups", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST /api/v1/groups`


<!-- END_e22d6fda00db6aa77cba8ef686d2e292 -->

<!-- START_02d4f4c207120ff1b310c4d4f21009ab -->
## /api/v1/groups/{id}
> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->patch("/api/v1/groups/1", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PATCH /api/v1/groups/{id}`


<!-- END_02d4f4c207120ff1b310c4d4f21009ab -->

<!-- START_d438934b201bda7e4a84a6ce0b799db3 -->
## /api/v1/groups/{id}
> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete("/api/v1/groups/1", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE /api/v1/groups/{id}`


<!-- END_d438934b201bda7e4a84a6ce0b799db3 -->

<!-- START_2cc33f55f1c4180ce6879ebb14b15841 -->
## /api/v1/groups
> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete("/api/v1/groups", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE /api/v1/groups`


<!-- END_2cc33f55f1c4180ce6879ebb14b15841 -->

<!-- START_b18e8be657a92f7f58d809e8c613119e -->
## /api/v1/invoices
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

<!-- START_98ffcd325ce048a067aa96f2dc16c14e -->
## /api/v1/invoices/{id}
> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get("/api/v1/invoices/1", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (500):

```json
null
```

### HTTP Request
`GET /api/v1/invoices/{id}`


<!-- END_98ffcd325ce048a067aa96f2dc16c14e -->

<!-- START_52dc66c04ac6e785b1efe058cc863394 -->
## /api/v1/invoices
> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post("/api/v1/invoices", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST /api/v1/invoices`


<!-- END_52dc66c04ac6e785b1efe058cc863394 -->

<!-- START_c9c944a2d018ecd4e6867eeaf3507ba0 -->
## /api/v1/invoices/{id}
> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->patch("/api/v1/invoices/1", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PATCH /api/v1/invoices/{id}`


<!-- END_c9c944a2d018ecd4e6867eeaf3507ba0 -->

<!-- START_db272abab49e84f79f8f4811317cc3d0 -->
## /api/v1/invoices/{id}
> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete("/api/v1/invoices/1", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE /api/v1/invoices/{id}`


<!-- END_db272abab49e84f79f8f4811317cc3d0 -->

<!-- START_67c117e57cb106d1c15a83628c1e286a -->
## /api/v1/invoices
> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete("/api/v1/invoices", [
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE /api/v1/invoices`


<!-- END_67c117e57cb106d1c15a83628c1e286a -->


