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

#Income management


APIs for managing incomes
<!-- START_e6268a040d36eeaf708f54cf052ac975 -->
## Display a listing of the resource.

> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get("/api/v1/incomes", [
    'headers' => [
            "Content-Type" => "application/json",
        ],
    'json' => [
            "title" => "neque",
            "body" => "rem",
            "type" => "officia",
            "author_id" => "18",
            "thumbnail" => "totam",
        ],
]);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
[
    {
        "id": 0,
        "name": "Cassandra Dickens",
        "summ": 5608
    },
    {
        "id": 1,
        "name": "Dr. Anne Ryan",
        "summ": 4648
    },
    {
        "id": 2,
        "name": "Gilda Schulist",
        "summ": 3167
    },
    {
        "id": 3,
        "name": "Mrs. Alanis Cruickshank",
        "summ": 8752
    },
    {
        "id": 4,
        "name": "Isac Veum",
        "summ": 8781
    },
    {
        "id": 5,
        "name": "Sofia Schinner",
        "summ": 1017
    },
    {
        "id": 6,
        "name": "Leland Doyle",
        "summ": 7054
    },
    {
        "id": 7,
        "name": "Ellsworth Grant",
        "summ": 6310
    },
    {
        "id": 8,
        "name": "Bernhard Marvin",
        "summ": 4999
    },
    {
        "id": 9,
        "name": "Sister Keebler",
        "summ": 7253
    },
    {
        "id": 10,
        "name": "Giovanny Bogisich",
        "summ": 8775
    },
    {
        "id": 11,
        "name": "Prof. Frederic Kunde PhD",
        "summ": 2270
    },
    {
        "id": 12,
        "name": "Dean Cormier",
        "summ": 4961
    },
    {
        "id": 13,
        "name": "Meagan Torp",
        "summ": 8831
    },
    {
        "id": 14,
        "name": "Prof. Jacinto Upton PhD",
        "summ": 5642
    },
    {
        "id": 15,
        "name": "Savanah Donnelly",
        "summ": 2097
    },
    {
        "id": 16,
        "name": "Ms. Jailyn Mraz",
        "summ": 5159
    },
    {
        "id": 17,
        "name": "Derrick Bednar II",
        "summ": 7497
    },
    {
        "id": 18,
        "name": "Denis Kreiger",
        "summ": 5796
    },
    {
        "id": 19,
        "name": "Dr. Eugene Champlin I",
        "summ": 8523
    },
    {
        "id": 20,
        "name": "Domenico Farrell",
        "summ": 8839
    },
    {
        "id": 21,
        "name": "Arthur Bradtke",
        "summ": 4992
    },
    {
        "id": 22,
        "name": "Tyson Borer",
        "summ": 4788
    },
    {
        "id": 23,
        "name": "Felipe Wiegand",
        "summ": 8038
    },
    {
        "id": 24,
        "name": "Audrey Raynor",
        "summ": 7982
    },
    {
        "id": 25,
        "name": "Louisa Hirthe",
        "summ": 7104
    },
    {
        "id": 26,
        "name": "Hollie Grady",
        "summ": 6870
    },
    {
        "id": 27,
        "name": "Mr. Jo Leuschke",
        "summ": 8438
    },
    {
        "id": 28,
        "name": "Maegan Lubowitz",
        "summ": 8577
    },
    {
        "id": 29,
        "name": "Burnice Pfeffer",
        "summ": 5157
    },
    {
        "id": 30,
        "name": "Adolph Tremblay",
        "summ": 5419
    },
    {
        "id": 31,
        "name": "Evert Waelchi",
        "summ": 3566
    },
    {
        "id": 32,
        "name": "Ryder Stiedemann",
        "summ": 8334
    },
    {
        "id": 33,
        "name": "Eve Kozey PhD",
        "summ": 8571
    },
    {
        "id": 34,
        "name": "Holly Morar",
        "summ": 1062
    },
    {
        "id": 35,
        "name": "Rosalia Pollich",
        "summ": 5900
    },
    {
        "id": 36,
        "name": "Mr. Gaston Nader",
        "summ": 7639
    },
    {
        "id": 37,
        "name": "Dr. Alberta Buckridge Sr.",
        "summ": 1385
    },
    {
        "id": 38,
        "name": "Otto Parisian",
        "summ": 4042
    },
    {
        "id": 39,
        "name": "Karli Murphy",
        "summ": 7242
    },
    {
        "id": 40,
        "name": "Prof. Lyla Barrows IV",
        "summ": 6851
    },
    {
        "id": 41,
        "name": "Junius Bode",
        "summ": 3934
    },
    {
        "id": 42,
        "name": "Prof. Jess Greenholt",
        "summ": 8746
    },
    {
        "id": 43,
        "name": "Bernadine Kessler",
        "summ": 6456
    },
    {
        "id": 44,
        "name": "Demetrius Legros",
        "summ": 8877
    },
    {
        "id": 45,
        "name": "Dr. Joany Ondricka II",
        "summ": 6486
    },
    {
        "id": 46,
        "name": "Demetris Littel",
        "summ": 1894
    },
    {
        "id": 47,
        "name": "Juwan Miller",
        "summ": 3439
    },
    {
        "id": 48,
        "name": "Eloisa Wintheiser",
        "summ": 8173
    },
    {
        "id": 49,
        "name": "Neva Kassulke",
        "summ": 3241
    },
    {
        "id": 50,
        "name": "Scarlett Ankunding",
        "summ": 1015
    },
    {
        "id": 51,
        "name": "Kirsten Hagenes",
        "summ": 3111
    },
    {
        "id": 52,
        "name": "Hildegard Mann",
        "summ": 6618
    },
    {
        "id": 53,
        "name": "Myrl Schimmel",
        "summ": 4201
    },
    {
        "id": 54,
        "name": "Prof. Candido Roob II",
        "summ": 7561
    },
    {
        "id": 55,
        "name": "Mr. Declan Frami",
        "summ": 8743
    },
    {
        "id": 56,
        "name": "Dr. Al Rice PhD",
        "summ": 7994
    },
    {
        "id": 57,
        "name": "Jimmy Ferry",
        "summ": 7247
    },
    {
        "id": 58,
        "name": "Mrs. Mittie Okuneva II",
        "summ": 3196
    },
    {
        "id": 59,
        "name": "Roberto Bailey II",
        "summ": 7692
    },
    {
        "id": 60,
        "name": "Prof. Laury Moen DVM",
        "summ": 6750
    },
    {
        "id": 61,
        "name": "Dr. Jaeden Fisher",
        "summ": 4305
    },
    {
        "id": 62,
        "name": "Dr. Maxine Harvey Jr.",
        "summ": 3991
    },
    {
        "id": 63,
        "name": "Holly Borer Sr.",
        "summ": 1648
    },
    {
        "id": 64,
        "name": "Elda Cummings",
        "summ": 4876
    },
    {
        "id": 65,
        "name": "Aiden Kerluke",
        "summ": 5716
    },
    {
        "id": 66,
        "name": "Erick Robel",
        "summ": 7168
    },
    {
        "id": 67,
        "name": "Rachel Robel II",
        "summ": 4572
    },
    {
        "id": 68,
        "name": "Miss Nadia Yundt DVM",
        "summ": 8789
    },
    {
        "id": 69,
        "name": "Talon Dickinson",
        "summ": 5814
    },
    {
        "id": 70,
        "name": "Merl Brown",
        "summ": 8783
    },
    {
        "id": 71,
        "name": "Treva Sipes I",
        "summ": 8566
    },
    {
        "id": 72,
        "name": "Sarah Mueller",
        "summ": 4663
    },
    {
        "id": 73,
        "name": "Rod Olson",
        "summ": 1530
    },
    {
        "id": 74,
        "name": "Krystel Corkery",
        "summ": 1984
    },
    {
        "id": 75,
        "name": "Ona Farrell DDS",
        "summ": 6535
    },
    {
        "id": 76,
        "name": "Dr. Constantin Kshlerin V",
        "summ": 4337
    },
    {
        "id": 77,
        "name": "Diana Sauer MD",
        "summ": 8718
    },
    {
        "id": 78,
        "name": "Ms. Abby Cruickshank",
        "summ": 2851
    },
    {
        "id": 79,
        "name": "Prof. Maddison White PhD",
        "summ": 4374
    },
    {
        "id": 80,
        "name": "Michale Crooks",
        "summ": 3601
    },
    {
        "id": 81,
        "name": "Ms. Dayna Crona MD",
        "summ": 3609
    },
    {
        "id": 82,
        "name": "Damien Aufderhar",
        "summ": 7123
    },
    {
        "id": 83,
        "name": "Mr. Evans Hoeger",
        "summ": 7199
    },
    {
        "id": 84,
        "name": "Doris Mann",
        "summ": 7963
    },
    {
        "id": 85,
        "name": "Vilma Rutherford",
        "summ": 7569
    },
    {
        "id": 86,
        "name": "Amos Farrell",
        "summ": 5787
    },
    {
        "id": 87,
        "name": "Mrs. Giovanna Jerde I",
        "summ": 1215
    },
    {
        "id": 88,
        "name": "Akeem Jacobson",
        "summ": 7619
    },
    {
        "id": 89,
        "name": "Polly Marks",
        "summ": 3450
    },
    {
        "id": 90,
        "name": "Cleta Auer",
        "summ": 4625
    },
    {
        "id": 91,
        "name": "Jayden McDermott",
        "summ": 1200
    },
    {
        "id": 92,
        "name": "Etha Weber",
        "summ": 4463
    },
    {
        "id": 93,
        "name": "Wade Kunde",
        "summ": 1214
    },
    {
        "id": 94,
        "name": "Liam Schultz",
        "summ": 8850
    },
    {
        "id": 95,
        "name": "Erick Lueilwitz",
        "summ": 7705
    },
    {
        "id": 96,
        "name": "Ryder Goldner",
        "summ": 1342
    },
    {
        "id": 97,
        "name": "Ms. Onie Eichmann DVM",
        "summ": 1796
    },
    {
        "id": 98,
        "name": "Trey Murray",
        "summ": 3312
    },
    {
        "id": 99,
        "name": "Skyla Larkin I",
        "summ": 1998
    }
]
```

### HTTP Request
`GET /api/v1/incomes`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | The title of the post.
    body | string |  required  | The title of the post.
    type | string |  optional  | The type of post to create. Defaults to 'textophonious'.
    author_id | integer |  optional  | the ID of the author
    thumbnail | image |  optional  | This is required if the post type is 'imagelicious'.

<!-- END_e6268a040d36eeaf708f54cf052ac975 -->

