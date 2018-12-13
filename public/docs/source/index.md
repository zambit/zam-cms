---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Blog
<!-- START_a5fc097791612691c7746eeb6a588523 -->
## GET api/v1/blog/categories

Get all available blog categories.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/blog/categories" 
```

```javascript
const url = new URL("http://localhost/api/v1/blog/categories");

    let params = {
            "lang": "2M36amdAdqNSKHqd",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Quis cupiditate consequuntur molestiae esse in fuga.",
            "description": "Rerum natus dolor sunt. Consequatur ut id debitis ratione voluptate dicta. Esse consequatur explicabo est accusantium."
        },
        {
            "id": 2,
            "name": "Nesciunt qui qui exercitationem rerum impedit labore.",
            "description": "Ut enim ut nemo aliquam nam modi quas. Facere tenetur sit ea suscipit suscipit quia et. Labore enim officia deleniti."
        },
        {
            "id": 3,
            "name": "Distinctio molestias ipsum praesentium et porro.",
            "description": "Architecto quia qui vel. Dolorem temporibus delectus officiis occaecati dolor ratione quaerat voluptatem. Id nostrum rem modi sint."
        },
        {
            "id": 4,
            "name": "Maxime animi atque dolores sunt dignissimos ullam error.",
            "description": "Dolorem ipsum quae id quaerat debitis. Quasi alias aut eius. Soluta sit voluptates quia omnis aperiam."
        },
        {
            "id": 5,
            "name": "Eveniet consequatur et dolor minus dolorum qui.",
            "description": "Minus incidunt officia voluptas nisi. Natus voluptatem officiis ut consequatur. Harum quidem sed voluptatem id temporibus nostrum."
        }
    ]
}
```

### HTTP Request
`GET api/v1/blog/categories`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    lang |  optional  | Current language. English default.

<!-- END_a5fc097791612691c7746eeb6a588523 -->

<!-- START_036973ff29d7074ede3b2dcfc19c9ff0 -->
## GET api/v1/blog/tags

Get all available blog tags.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/blog/tags" 
```

```javascript
const url = new URL("http://localhost/api/v1/blog/tags");

    let params = {
            "lang": "sj2ZRgLAnG9kfP74",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "itaque"
        },
        {
            "id": 2,
            "name": "dolore"
        },
        {
            "id": 3,
            "name": "dolor"
        },
        {
            "id": 4,
            "name": "sit"
        },
        {
            "id": 5,
            "name": "pariatur"
        },
        {
            "id": 6,
            "name": "velit"
        },
        {
            "id": 7,
            "name": "et"
        },
        {
            "id": 8,
            "name": "fugiat"
        },
        {
            "id": 9,
            "name": "inventore"
        },
        {
            "id": 10,
            "name": "in"
        },
        {
            "id": 11,
            "name": "dolores"
        },
        {
            "id": 12,
            "name": "iusto"
        },
        {
            "id": 13,
            "name": "est"
        },
        {
            "id": 14,
            "name": "ea"
        },
        {
            "id": 15,
            "name": "quis"
        },
        {
            "id": 16,
            "name": "consequatur"
        },
        {
            "id": 17,
            "name": "nihil"
        },
        {
            "id": 18,
            "name": "voluptatem"
        },
        {
            "id": 19,
            "name": "ex"
        },
        {
            "id": 20,
            "name": "quas"
        }
    ]
}
```

### HTTP Request
`GET api/v1/blog/tags`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    lang |  optional  | Current language. English default.

<!-- END_036973ff29d7074ede3b2dcfc19c9ff0 -->

<!-- START_8f906889f559840a9e1b4e7bfef8d18b -->
## GET api/v1/blog/articles

Get blog articles.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/blog/articles" 
```

```javascript
const url = new URL("http://localhost/api/v1/blog/articles");

    let params = {
            "lang": "kXR5Kst5wPhaGaXn",
            "full": "CLskcn10qQVFlZWs",
            "limit": "11",
            "category": "XosLaCIqO2OSXaJh",
            "author": "TlDYoApkO7m5jlar",
            "tags": "hCOtsYEUfnvuJU2j",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [],
    "links": {
        "first": "http:\/\/localhost\/api\/v1\/blog\/articles?page=1",
        "last": "http:\/\/localhost\/api\/v1\/blog\/articles?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": null,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/v1\/blog\/articles",
        "per_page": 11,
        "to": null,
        "total": 0
    }
}
```

### HTTP Request
`GET api/v1/blog/articles`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    lang |  optional  | Current language. English default.
    full |  optional  | If `true` show full content.
    limit |  optional  | How many items show on a page (default 20).
    category |  optional  | Filter by a category ID.
    author |  optional  | Filter by an author ID.
    tags |  optional  | Filter by an tag ID. You can list several, separated by commas.

<!-- END_8f906889f559840a9e1b4e7bfef8d18b -->

<!-- START_c75c12d719d09cb4ff4ae977ade96c4a -->
## GET api/v1/blog/articles/{article}

Get blog article by id

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/blog/articles/{article}" 
```

```javascript
const url = new URL("http://localhost/api/v1/blog/articles/{article}");

    let params = {
            "lang": "2XFu4kdVuqIuvgpO",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "header": "Deserunt ipsam dolore soluta fugiat sunt ut distinctio.",
        "title": "Nihil maiores dicta impedit harum numquam cumque voluptates.",
        "keywords": "veritatis, sit, animi, non, minus, sint, quia, ipsum, saepe, similique, unde, nam, natus, facere, est, beatae, voluptates, est, modi, vero",
        "description": "Omnis impedit ut et blanditiis in esse. Omnis et ut ut id qui. Et beatae odio qui illo est occaecati.",
        "content": "<p>Ipsa numquam rerum facilis quaerat quasi. Nisi inventore alias itaque consequuntur deserunt ut excepturi est. In ut sed ut aut vero magnam adipisci. Inventore delectus aut reiciendis ad nam tempore doloremque omnis. Est nulla ad delectus doloremque. Voluptas voluptas beatae est sit placeat magnam. Perferendis assumenda quis ratione ex. Asperiores saepe enim cum dolorum explicabo. Maxime quidem in id consequatur. Laboriosam impedit maxime sed iusto expedita. Aut delectus molestias non sunt accusantium. Consequatur et optio quo molestiae veniam quae. At ut voluptatem occaecati at quis ut. Et officia qui iste quisquam fugiat. Quas necessitatibus et numquam necessitatibus minima dolor blanditiis eum. Libero laudantium fuga neque quo fuga eum labore. Error aliquid sunt beatae a. Asperiores maiores est reprehenderit. Nisi veniam odio veniam et. Aut sint et rerum omnis ut sunt placeat.<\/p>",
        "image": "http:\/\/localhost\/storage\/articles\/7191b4e5452e6dc86acb034124d67e3b.jpg",
        "category": {
            "id": 1,
            "name": "Quis cupiditate consequuntur molestiae esse in fuga."
        },
        "author": {
            "id": 1,
            "name": "Mrs. Bernadine Hansen"
        },
        "tags": [
            {
                "id": 6,
                "name": "velit"
            },
            {
                "id": 14,
                "name": "ea"
            },
            {
                "id": 15,
                "name": "quis"
            }
        ],
        "created_at": {
            "date": "2018-12-13 18:31:44.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`GET api/v1/blog/articles/{article}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    lang |  optional  | Current language. English default.

<!-- END_c75c12d719d09cb4ff4ae977ade96c4a -->

#Language
<!-- START_3c47392e194ead0174be5d8be4151da2 -->
## GET api/v1/languages

Get all available site languages.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/languages" 
```

```javascript
const url = new URL("http://localhost/api/v1/languages");

    let params = {
            "lang": "70Yqq2wlag9jmzOS",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "name": "English",
            "slug": "en",
            "flag": "http:\/\/localhost\/storage\/languages\/demo_en.png"
        },
        {
            "name": "Русский",
            "slug": "ru",
            "flag": "http:\/\/localhost\/storage\/languages\/demo_ru.png"
        },
        {
            "name": "Polish",
            "slug": "pl",
            "flag": "http:\/\/localhost\/storage\/languages\/demo_pl.png"
        }
    ]
}
```

### HTTP Request
`GET api/v1/languages`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    lang |  optional  | Current language. English default.

<!-- END_3c47392e194ead0174be5d8be4151da2 -->

#Page
<!-- START_f0bb47ebe642912f2525d54503f865be -->
## GET api/v1/pages

Get all available site pages.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/pages" 
```

```javascript
const url = new URL("http://localhost/api/v1/pages");

    let params = {
            "lang": "AgZ3r4itk0K23pqo",
            "full": "UuhyhjhOG9jIlKbV",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "title": "Sint et sint fuga incidunt consequatur culpa et.",
            "keywords": "dolor, voluptatem, quo, officia, omnis, harum, repellendus, dolorum, necessitatibus, quasi, aut, enim, quia, corporis, repellat, illo, molestias, voluptatem, rerum, minus",
            "description": "Facere aut in quis iure neque omnis et in. Illum modi ullam deleniti quidem enim. Commodi nihil deleniti nihil est odio.",
            "created_at": {
                "date": "2018-12-13 18:31:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 2,
            "title": "Exercitationem optio qui eos sapiente repellat adipisci.",
            "keywords": "et, pariatur, cumque, harum, ipsam, sed, aut, ipsam, ea, nam, alias, odit, earum, dolor, voluptatem, iste, cumque, totam, atque, suscipit",
            "description": "Qui aspernatur odit quidem enim error. Omnis itaque assumenda libero ut ab mollitia. Dolores voluptatem molestiae aut rem qui sequi.",
            "created_at": {
                "date": "2018-12-13 18:31:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 3,
            "title": "Ut iusto autem libero.",
            "keywords": "id, et, debitis, labore, labore, sed, voluptatum, eum, nisi, aut, tempora, nulla, error, laboriosam, veritatis, et, qui, dignissimos, tempora, reprehenderit",
            "description": "Quae veniam porro fugiat doloremque. Et unde qui non alias vel. Omnis rerum quia vitae eius et aut voluptatibus quidem.",
            "created_at": {
                "date": "2018-12-13 18:31:26.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 4,
            "title": "Aut necessitatibus vel non consectetur voluptatem sed.",
            "keywords": "autem, quia, cumque, fuga, atque, magnam, magnam, inventore, sed, provident, et, vero, libero, vel, dicta, similique, ab, sed, ipsum, in",
            "description": "Illo laborum eius architecto sunt voluptatibus. Mollitia id quod ea eos veniam pariatur consequatur nobis. Maiores sit facilis sit eius iste cupiditate libero.",
            "created_at": {
                "date": "2018-12-13 18:31:26.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 5,
            "title": "Dolorem eum id iure neque.",
            "keywords": "repudiandae, et, cupiditate, dicta, maxime, maiores, et, nemo, dolor, cum, quam, dolor, molestias, modi, hic, id, qui, est, nemo, ullam",
            "description": "Tempore reiciendis quae est dolore repudiandae atque accusantium. Vel qui magnam fugiat. Repudiandae perspiciatis voluptate rerum dicta eveniet exercitationem hic.",
            "created_at": {
                "date": "2018-12-13 18:31:26.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 6,
            "title": "Est eum excepturi ratione fuga.",
            "keywords": "iusto, laboriosam, expedita, earum, atque, ut, illo, reiciendis, distinctio, repellendus, recusandae, doloremque, odit, placeat, ut, est, deleniti, accusantium, labore, commodi",
            "description": "Perferendis nisi vel facere nam est tempora ab et. Aut nam repellendus quo et sit commodi. Dolorem nihil est harum ea.",
            "created_at": {
                "date": "2018-12-13 18:31:26.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 7,
            "title": "Aut error temporibus est tempora ipsam accusantium.",
            "keywords": "quia, quibusdam, maxime, quam, enim, quia, aliquid, eius, non, nisi, natus, sunt, qui, commodi, molestias, dolorem, quasi, nesciunt, incidunt, aut",
            "description": "Et at consequatur unde explicabo eum quasi. Nesciunt consequuntur ea rerum odit voluptatem. Vel aut tempora esse voluptatem necessitatibus voluptatem.",
            "created_at": {
                "date": "2018-12-13 18:31:26.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 8,
            "title": "Voluptatem ea voluptates qui aut est quasi.",
            "keywords": "fuga, et, ab, ab, totam, quae, voluptatem, ut, et, assumenda, error, vero, architecto, voluptatem, quas, ducimus, quasi, earum, sunt, non",
            "description": "Quod fugit nemo vel facere illum quasi. Et neque quas id qui. Est rerum et quo sunt doloremque.",
            "created_at": {
                "date": "2018-12-13 18:31:26.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 9,
            "title": "Natus earum sint nihil quas suscipit.",
            "keywords": "aspernatur, sunt, et, eos, aut, quasi, ipsam, sint, eos, cum, nihil, delectus, eos, temporibus, porro, laboriosam, voluptas, et, ex, doloremque",
            "description": "Quo dolor temporibus id omnis velit. Rerum et exercitationem alias aliquam architecto consequatur molestiae. Non ut voluptas beatae dolor incidunt.",
            "created_at": {
                "date": "2018-12-13 18:31:26.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "id": 10,
            "title": "Deserunt reiciendis maiores et aspernatur dolore.",
            "keywords": "laboriosam, libero, qui, deleniti, laudantium, excepturi, qui, corrupti, facilis, perspiciatis, porro, voluptate, perferendis, ad, iusto, et, voluptas, quas, voluptatem, earum",
            "description": "Eos vero qui est. Est ex laborum et aut saepe. Qui et aut recusandae culpa nemo.",
            "created_at": {
                "date": "2018-12-13 18:31:26.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ]
}
```

### HTTP Request
`GET api/v1/pages`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    lang |  optional  | Current language. English default.
    full |  optional  | If `true` show full content.

<!-- END_f0bb47ebe642912f2525d54503f865be -->

<!-- START_d03f408a7e8308790d30ce70a84d399b -->
## GET api/v1/pages/{page}

Get page by id

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/pages/{page}" 
```

```javascript
const url = new URL("http://localhost/api/v1/pages/{page}");

    let params = {
            "lang": "IWtBrfzxhpkoAAdC",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "title": "Sint et sint fuga incidunt consequatur culpa et.",
        "keywords": "dolor, voluptatem, quo, officia, omnis, harum, repellendus, dolorum, necessitatibus, quasi, aut, enim, quia, corporis, repellat, illo, molestias, voluptatem, rerum, minus",
        "description": "Facere aut in quis iure neque omnis et in. Illum modi ullam deleniti quidem enim. Commodi nihil deleniti nihil est odio.",
        "content": "Velit nihil beatae recusandae est. Perferendis repudiandae sint soluta est. Ex atque consequatur molestias rerum est ullam. Blanditiis consequuntur quo aliquam a ad placeat tempore. Nisi tempora quos sed perferendis laborum molestiae. Et asperiores qui nesciunt. Vel voluptatum quaerat voluptatum nam sunt. Quibusdam placeat odit reprehenderit veritatis. Illo velit omnis itaque voluptatem. Necessitatibus id inventore sit qui qui repudiandae. Voluptate dolor quaerat vitae odit. Ipsam qui fugit aut minima itaque. Ut totam quidem occaecati excepturi voluptatem ab. Quia laboriosam sed officiis et. Et sunt molestias et. Praesentium at aperiam aut sint. Nihil eos doloremque animi unde sunt. Sit nam officia et quo expedita suscipit totam. Voluptas quia mollitia nam nulla ipsam. Dolor deleniti saepe minus deserunt.",
        "created_at": {
            "date": "2018-12-13 18:31:25.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        }
    }
}
```

### HTTP Request
`GET api/v1/pages/{page}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    lang |  optional  | Current language. English default.

<!-- END_d03f408a7e8308790d30ce70a84d399b -->


