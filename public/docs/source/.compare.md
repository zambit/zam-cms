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
            "name": "Consequatur nesciunt accusantium et et expedita.",
            "description": "Eum totam facilis non est expedita. Quia consequatur vel eos ut inventore consequatur. Autem ea est enim dolorem accusantium similique repellat provident."
        },
        {
            "id": 2,
            "name": "Amet tempora mollitia natus qui nihil voluptas.",
            "description": "Veniam quasi natus harum quia ea ut. Et expedita est sapiente sunt quis fugit. Cum natus vel dolorem vel quibusdam cum accusantium sed."
        },
        {
            "id": 3,
            "name": "Fugit id error necessitatibus eum sint aliquid soluta.",
            "description": "In qui neque cupiditate aut iusto. Qui minima a amet est. Ipsa perferendis aliquid qui quod sint pariatur impedit."
        },
        {
            "id": 4,
            "name": "Omnis est quae rerum praesentium.",
            "description": "Odit excepturi expedita labore alias culpa aut et. Recusandae esse est nemo corrupti. Ea omnis nobis tenetur tempora."
        },
        {
            "id": 5,
            "name": "Voluptatum voluptas doloribus doloremque minima tempore eius asperiores dolorum.",
            "description": "Quidem pariatur esse esse modi. Et qui sapiente ea consequatur omnis impedit molestias. Unde non sit fuga."
        }
    ]
}
```

### HTTP Request
`GET api/v1/blog/categories`


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
            "name": "quia"
        },
        {
            "id": 2,
            "name": "ipsa"
        },
        {
            "id": 3,
            "name": "aut"
        },
        {
            "id": 4,
            "name": "eos"
        },
        {
            "id": 5,
            "name": "qui"
        },
        {
            "id": 6,
            "name": "est"
        },
        {
            "id": 7,
            "name": "enim"
        },
        {
            "id": 8,
            "name": "et"
        },
        {
            "id": 9,
            "name": "quod"
        },
        {
            "id": 10,
            "name": "consequatur"
        },
        {
            "id": 11,
            "name": "ratione"
        },
        {
            "id": 12,
            "name": "doloribus"
        },
        {
            "id": 13,
            "name": "ut"
        },
        {
            "id": 14,
            "name": "ipsam"
        },
        {
            "id": 15,
            "name": "tempora"
        },
        {
            "id": 16,
            "name": "vel"
        },
        {
            "id": 17,
            "name": "consectetur"
        },
        {
            "id": 18,
            "name": "eveniet"
        },
        {
            "id": 19,
            "name": "veniam"
        },
        {
            "id": 20,
            "name": "ea"
        }
    ]
}
```

### HTTP Request
`GET api/v1/blog/tags`


<!-- END_036973ff29d7074ede3b2dcfc19c9ff0 -->

<!-- START_8f906889f559840a9e1b4e7bfef8d18b -->
## api/v1/blog/articles
> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/blog/articles" 
```

```javascript
const url = new URL("http://localhost/api/v1/blog/articles");

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
null
```

### HTTP Request
`GET api/v1/blog/articles`


<!-- END_8f906889f559840a9e1b4e7bfef8d18b -->

<!-- START_c75c12d719d09cb4ff4ae977ade96c4a -->
## api/v1/blog/articles/{article}
> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/blog/articles/{article}" 
```

```javascript
const url = new URL("http://localhost/api/v1/blog/articles/{article}");

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
null
```

### HTTP Request
`GET api/v1/blog/articles/{article}`


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
            "flag": "http:\/\/localhost\/storage\/languages\/en.png"
        },
        {
            "name": "Русский",
            "slug": "ru",
            "flag": "http:\/\/localhost\/storage\/languages\/ru.png"
        },
        {
            "name": "Polish",
            "slug": "pl",
            "flag": "http:\/\/localhost\/storage\/languages\/pl.png"
        }
    ]
}
```

### HTTP Request
`GET api/v1/languages`


<!-- END_3c47392e194ead0174be5d8be4151da2 -->

#Page
<!-- START_f0bb47ebe642912f2525d54503f865be -->
## api/v1/pages
> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/pages" 
```

```javascript
const url = new URL("http://localhost/api/v1/pages");

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
null
```

### HTTP Request
`GET api/v1/pages`


<!-- END_f0bb47ebe642912f2525d54503f865be -->

<!-- START_d03f408a7e8308790d30ce70a84d399b -->
## api/v1/pages/{page}
> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/pages/{page}" 
```

```javascript
const url = new URL("http://localhost/api/v1/pages/{page}");

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
null
```

### HTTP Request
`GET api/v1/pages/{page}`


<!-- END_d03f408a7e8308790d30ce70a84d399b -->


