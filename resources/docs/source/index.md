---
title: API Reference

language_tabs:
- bash
- javascript
- python

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://monitoreo.test/docs/collection.json)

<!-- END_INFO -->

#Regiones

APIs para administrar los Datos de las Regiones
<!-- START_715065722f8648eb8990c028dfbcc9ce -->
## Muestra el listado de todas las regiones

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/api/region" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/api/region"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/api/region'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "regiones": [
        {
            "id": 1,
            "nombre": "1",
            "created_at": "2020-08-22T21:36:51.000000Z",
            "updated_at": "2020-08-22T21:36:51.000000Z"
        },
        {
            "id": 2,
            "nombre": "2",
            "created_at": "2020-08-22T21:36:51.000000Z",
            "updated_at": "2020-08-22T21:36:51.000000Z"
        },
        {
            "id": 3,
            "nombre": "3",
            "created_at": "2020-08-22T21:36:51.000000Z",
            "updated_at": "2020-08-22T21:36:51.000000Z"
        },
        {
            "id": 4,
            "nombre": "4",
            "created_at": "2020-08-22T21:36:51.000000Z",
            "updated_at": "2020-08-22T21:36:51.000000Z"
        },
        {
            "id": 5,
            "nombre": "5",
            "created_at": "2020-08-22T21:36:51.000000Z",
            "updated_at": "2020-08-22T21:36:51.000000Z"
        },
        {
            "id": 6,
            "nombre": "6",
            "created_at": "2020-08-22T21:36:51.000000Z",
            "updated_at": "2020-08-22T21:36:51.000000Z"
        },
        {
            "id": 7,
            "nombre": "7",
            "created_at": "2020-08-22T21:36:51.000000Z",
            "updated_at": "2020-08-22T21:36:51.000000Z"
        },
        {
            "id": 8,
            "nombre": "8 ",
            "created_at": "2020-08-22T21:36:51.000000Z",
            "updated_at": "2020-08-22T21:36:51.000000Z"
        }
    ],
    "message": "Retrieved successfully"
}
```

### HTTP Request
`GET api/region`


<!-- END_715065722f8648eb8990c028dfbcc9ce -->

<!-- START_e581651db49b36c9fd71b593a7f8f359 -->
## Muestra los registros de una region en Especifico

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/api/region/2" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/api/region/2"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/api/region/2'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "registros": [
        {
            "id": 514,
            "longitud": -73.970116,
            "latitud": 4.722394,
            "temperatura": 19.92,
            "hg": 0,
            "conduct": 0.01,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 513,
            "longitud": -73.970116,
            "latitud": 4.722394,
            "temperatura": 24.29,
            "hg": 0,
            "conduct": 0.01,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 512,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.04,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 511,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 510,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.13,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 509,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 508,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.07,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 507,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 506,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.11,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 505,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.04,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 504,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 503,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.04,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 502,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.32,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 501,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 19.16,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 500,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 20,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 499,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 15.09,
            "hg": 0,
            "conduct": 0.02,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 498,
            "longitud": -73.977379,
            "latitud": 4.707583,
            "temperatura": 16.39,
            "hg": 0,
            "conduct": 0.02,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 497,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 18.54,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 496,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 22.86,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 495,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 20.31,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 494,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 18.37,
            "hg": 0,
            "conduct": 0.59,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 493,
            "longitud": -73.953506,
            "latitud": 4.748996,
            "temperatura": 24.69,
            "hg": 0,
            "conduct": 0.02,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:22.000000Z",
            "updated_at": "2018-06-29T20:28:22.000000Z"
        },
        {
            "id": 492,
            "longitud": -73.953506,
            "latitud": 4.748996,
            "temperatura": 22.16,
            "hg": 0,
            "conduct": 0.02,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:22.000000Z",
            "updated_at": "2018-06-29T20:28:22.000000Z"
        },
        {
            "id": 491,
            "longitud": -73.954819,
            "latitud": 4.750876,
            "temperatura": 25.04,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:22.000000Z",
            "updated_at": "2018-06-29T20:28:22.000000Z"
        },
        {
            "id": 490,
            "longitud": -73.953506,
            "latitud": 4.748996,
            "temperatura": 22.94,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:22.000000Z",
            "updated_at": "2018-06-29T20:28:22.000000Z"
        },
        {
            "id": 489,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.1,
            "hg": 0,
            "conduct": 9.93,
            "od": 17.42,
            "ph": 9.812,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T18:30:33.000000Z",
            "updated_at": "2018-06-29T18:30:33.000000Z"
        },
        {
            "id": 488,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.77,
            "hg": 0,
            "conduct": 16.01,
            "od": 9.54,
            "ph": 8.122,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T18:30:33.000000Z",
            "updated_at": "2018-06-29T18:30:33.000000Z"
        },
        {
            "id": 487,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.24,
            "hg": 0,
            "conduct": 12.46,
            "od": 6.17,
            "ph": 6.87,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:44:38.000000Z",
            "updated_at": "2018-06-29T16:44:38.000000Z"
        },
        {
            "id": 486,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 22.44,
            "hg": 0,
            "conduct": 9.12,
            "od": 12,
            "ph": 6.987,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:32:51.000000Z",
            "updated_at": "2018-06-29T16:32:51.000000Z"
        },
        {
            "id": 485,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 19.98,
            "hg": 0,
            "conduct": 13.95,
            "od": 10.24,
            "ph": 6.984,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:32:51.000000Z",
            "updated_at": "2018-06-29T16:32:51.000000Z"
        },
        {
            "id": 484,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 21,
            "hg": 0,
            "conduct": 10.11,
            "od": 9.84,
            "ph": 7.006,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:32:51.000000Z",
            "updated_at": "2018-06-29T16:32:51.000000Z"
        },
        {
            "id": 483,
            "longitud": -74.066432,
            "latitud": 4.601489,
            "temperatura": 22.12,
            "hg": 0,
            "conduct": 9.65,
            "od": 10.01,
            "ph": 6.854,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:13:11.000000Z",
            "updated_at": "2018-06-29T16:13:11.000000Z"
        },
        {
            "id": 482,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.6,
            "hg": 0,
            "conduct": 11.31,
            "od": 5.56,
            "ph": 7.38,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:41:00.000000Z",
            "updated_at": "2018-06-27T16:41:00.000000Z"
        },
        {
            "id": 481,
            "longitud": -74.066432,
            "latitud": 4.601489,
            "temperatura": 19,
            "hg": 0,
            "conduct": 9.95,
            "od": 7.01,
            "ph": 6.284,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:13:11.000000Z",
            "updated_at": "2018-06-29T16:13:11.000000Z"
        },
        {
            "id": 480,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.24,
            "hg": 0,
            "conduct": 8.95,
            "od": 6.23,
            "ph": 7.12,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:41:00.000000Z",
            "updated_at": "2018-06-27T16:41:00.000000Z"
        },
        {
            "id": 479,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.14,
            "hg": 0,
            "conduct": 9.88,
            "od": 6.45,
            "ph": 6.896,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:41:00.000000Z",
            "updated_at": "2018-06-27T16:41:00.000000Z"
        },
        {
            "id": 478,
            "longitud": -74.0656,
            "latitud": 4.603385,
            "temperatura": 13,
            "hg": 0,
            "conduct": 8.95,
            "od": 10.01,
            "ph": 6.204,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T15:59:09.000000Z",
            "updated_at": "2018-06-29T15:59:09.000000Z"
        },
        {
            "id": 477,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18,
            "hg": 0,
            "conduct": 10.12,
            "od": 6.14,
            "ph": 7.204,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:41:00.000000Z",
            "updated_at": "2018-06-27T16:41:00.000000Z"
        },
        {
            "id": 476,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.56,
            "hg": 0,
            "conduct": 10.11,
            "od": 7,
            "ph": 6.58,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:38:08.000000Z",
            "updated_at": "2018-06-27T16:38:08.000000Z"
        },
        {
            "id": 475,
            "longitud": -74.0656,
            "latitud": 4.603385,
            "temperatura": 12,
            "hg": 0,
            "conduct": 10.11,
            "od": 7.84,
            "ph": 6.756,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T15:59:09.000000Z",
            "updated_at": "2018-06-29T15:59:09.000000Z"
        },
        {
            "id": 474,
            "longitud": -73.970116,
            "latitud": 4.722394,
            "temperatura": 24.87,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 473,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 472,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 471,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.09,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 470,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.09,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 469,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 468,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.02,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 467,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.14,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 466,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.14,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 465,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 19.32,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 464,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 15.52,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 463,
            "longitud": -73.967705,
            "latitud": 4.721514,
            "temperatura": 17.51,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 462,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.66,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 461,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 20.35,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 460,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 21.38,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 459,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 22.34,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 458,
            "longitud": -73.970116,
            "latitud": 4.722397,
            "temperatura": 18.54,
            "hg": 0,
            "conduct": 25.09,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 457,
            "longitud": -73.970116,
            "latitud": 4.722397,
            "temperatura": 16.47,
            "hg": 0,
            "conduct": 0.02,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 456,
            "longitud": -73.970116,
            "latitud": 4.722397,
            "temperatura": 18.54,
            "hg": 0,
            "conduct": 27.56,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 455,
            "longitud": -73.953506,
            "latitud": 4.748996,
            "temperatura": 23.73,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:22.000000Z",
            "updated_at": "2018-06-29T20:28:22.000000Z"
        },
        {
            "id": 454,
            "longitud": -73.954819,
            "latitud": 4.750876,
            "temperatura": 24.6,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:22.000000Z",
            "updated_at": "2018-06-29T20:28:22.000000Z"
        },
        {
            "id": 453,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.31,
            "hg": 0,
            "conduct": 16.55,
            "od": 13.88,
            "ph": 6.782,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T19:53:24.000000Z",
            "updated_at": "2018-06-29T19:53:24.000000Z"
        },
        {
            "id": 452,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18,
            "hg": 0,
            "conduct": 10.12,
            "od": 6.14,
            "ph": 7.204,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:41:49.000000Z",
            "updated_at": "2018-06-29T16:41:49.000000Z"
        },
        {
            "id": 451,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22,
            "hg": 0,
            "conduct": 11.06,
            "od": 19.27,
            "ph": 9.135,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T18:30:33.000000Z",
            "updated_at": "2018-06-29T18:30:33.000000Z"
        },
        {
            "id": 449,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.11,
            "hg": 0,
            "conduct": 16.42,
            "od": 9.1,
            "ph": 6.894,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T18:30:33.000000Z",
            "updated_at": "2018-06-29T18:30:33.000000Z"
        },
        {
            "id": 448,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.56,
            "hg": 0,
            "conduct": 12.53,
            "od": 8,
            "ph": 4.99,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:44:38.000000Z",
            "updated_at": "2018-06-29T16:44:38.000000Z"
        },
        {
            "id": 447,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.14,
            "hg": 0,
            "conduct": 10.93,
            "od": 7.22,
            "ph": 6.12,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:44:38.000000Z",
            "updated_at": "2018-06-29T16:44:38.000000Z"
        },
        {
            "id": 446,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 22.22,
            "hg": 0,
            "conduct": 14.65,
            "od": 10.11,
            "ph": 6.894,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:32:51.000000Z",
            "updated_at": "2018-06-29T16:32:51.000000Z"
        },
        {
            "id": 445,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 21.02,
            "hg": 0,
            "conduct": 16,
            "od": 13.17,
            "ph": 7.004,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:32:51.000000Z",
            "updated_at": "2018-06-29T16:32:51.000000Z"
        },
        {
            "id": 444,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 21.01,
            "hg": 0,
            "conduct": 10.12,
            "od": 9.5,
            "ph": 6.789,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:32:51.000000Z",
            "updated_at": "2018-06-29T16:32:51.000000Z"
        },
        {
            "id": 443,
            "longitud": -74.066432,
            "latitud": 4.601489,
            "temperatura": 20.02,
            "hg": 0,
            "conduct": 21,
            "od": 7.17,
            "ph": 7.144,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:13:11.000000Z",
            "updated_at": "2018-06-29T16:13:11.000000Z"
        },
        {
            "id": 442,
            "longitud": -74.066432,
            "latitud": 4.601489,
            "temperatura": 19,
            "hg": 0,
            "conduct": 12,
            "od": 9.54,
            "ph": 6.934,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:13:11.000000Z",
            "updated_at": "2018-06-29T16:13:11.000000Z"
        },
        {
            "id": 441,
            "longitud": -74.0656,
            "latitud": 4.603385,
            "temperatura": 20.25,
            "hg": 0,
            "conduct": 15.96,
            "od": 10.14,
            "ph": 7.744,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T15:59:09.000000Z",
            "updated_at": "2018-06-29T15:59:09.000000Z"
        },
        {
            "id": 440,
            "longitud": -74.0656,
            "latitud": 4.603385,
            "temperatura": 14,
            "hg": 0,
            "conduct": 12,
            "od": 9.54,
            "ph": 7.934,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T15:59:09.000000Z",
            "updated_at": "2018-06-29T15:59:09.000000Z"
        },
        {
            "id": 439,
            "longitud": -73.970116,
            "latitud": 4.722394,
            "temperatura": 20.35,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 438,
            "longitud": -73.954117,
            "latitud": 4.727611,
            "temperatura": 20.26,
            "hg": 0,
            "conduct": 3.59,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 437,
            "longitud": -73.970116,
            "latitud": 4.722394,
            "temperatura": 21.64,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 436,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.09,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 435,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.09,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 434,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.04,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        }
    ],
    "message": "Retrieved successfully"
}
```

### HTTP Request
`GET api/region/{region}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `region` |  required  | requerido para seleccionar la region.

<!-- END_e581651db49b36c9fd71b593a7f8f359 -->

<!-- START_32c79df1740ef55c41dd5d43ffc7f6cb -->
## Muestra el listado de registros de una region en unas fechas determinadas.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/api/region/3/12-04-2018/20-04-2020" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/api/region/3/12-04-2018/20-04-2020"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/api/region/3/12-04-2018/20-04-2020'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "registros": [],
    "message": "Retrieved successfully"
}
```

### HTTP Request
`GET api/region/{region}/{fechaIni}/{fechaFin}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `region` |  required  | requerido para seleccionar la region.
    `fechaIni` |  required  | requerido para filtrar la fecha de inicio de la busqueda.
    `fechaFin` |  required  | requerido para filtrar la fecha final de la busqueda, 20-04-2020 para seleccionar el 20 de Abril de 2020.

<!-- END_32c79df1740ef55c41dd5d43ffc7f6cb -->

#Registros

APIs para administrar los Datos de las Registros
<!-- START_ad533a78ac1488c81b7166c7ba0e4137 -->
## Muestra el listado de todos los registros.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/api/registro" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/api/registro"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/api/registro'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "registros": [
        {
            "id": 1,
            "longitud": -70.1327717,
            "latitud": -4.0084371,
            "temperatura": 28.5,
            "hg": 0,
            "conduct": 9.48,
            "od": 7.61,
            "ph": 7,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 2,
            "longitud": -70.349729,
            "latitud": -3.79183,
            "temperatura": 28.9,
            "hg": 0,
            "conduct": 1087.46,
            "od": 9.42,
            "ph": 6.56,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 3,
            "longitud": -69.94506,
            "latitud": -4.2214267,
            "temperatura": 28.94,
            "hg": 0,
            "conduct": 15.05,
            "od": 47.67,
            "ph": 8.02,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 4,
            "longitud": -70.349729,
            "latitud": -3.79183,
            "temperatura": 28.06,
            "hg": 0,
            "conduct": 103.68,
            "od": 10.24,
            "ph": 6.33,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 5,
            "longitud": -70.349729,
            "latitud": -3.79183,
            "temperatura": 27.94,
            "hg": 0,
            "conduct": 20.92,
            "od": 9.72,
            "ph": 7.28,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 6,
            "longitud": -70.1330174,
            "latitud": -4.0084622,
            "temperatura": 26.69,
            "hg": 0,
            "conduct": 16.35,
            "od": 7.32,
            "ph": 6.66,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 7,
            "longitud": -70.349729,
            "latitud": -3.79183,
            "temperatura": 28.5,
            "hg": 0,
            "conduct": 88.16,
            "od": 10.08,
            "ph": 7.12,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 8,
            "longitud": -69.94506,
            "latitud": -4.2214267,
            "temperatura": 29.06,
            "hg": 0,
            "conduct": 15.05,
            "od": 47.67,
            "ph": 8.02,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 9,
            "longitud": -70.349729,
            "latitud": -3.79183,
            "temperatura": 28.06,
            "hg": 0,
            "conduct": 144.41,
            "od": 10.08,
            "ph": 6.84,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 10,
            "longitud": -70.349729,
            "latitud": -3.79183,
            "temperatura": 28.06,
            "hg": 0,
            "conduct": 20.85,
            "od": 9.57,
            "ph": 5.41,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 11,
            "longitud": -70.349729,
            "latitud": -3.79183,
            "temperatura": 26.37,
            "hg": 0,
            "conduct": 53.45,
            "od": 9.46,
            "ph": 8.95,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 12,
            "longitud": -70.349729,
            "latitud": -3.79183,
            "temperatura": 26.37,
            "hg": 0,
            "conduct": 51.5,
            "od": 9.29,
            "ph": 7.1,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 13,
            "longitud": -69.938903,
            "latitud": -4.18984,
            "temperatura": 30.31,
            "hg": 0,
            "conduct": 14.44,
            "od": 11.9,
            "ph": 6.52,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 14,
            "longitud": -69.938903,
            "latitud": -4.18984,
            "temperatura": 30.31,
            "hg": 0,
            "conduct": 14.44,
            "od": 11.9,
            "ph": 6.52,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 15,
            "longitud": -70.1298459,
            "latitud": -4.0085118,
            "temperatura": 25.94,
            "hg": 0,
            "conduct": 20.85,
            "od": 9.57,
            "ph": 7.41,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 16,
            "longitud": -69.938903,
            "latitud": -4.18984,
            "temperatura": 30.44,
            "hg": 0,
            "conduct": 0.4,
            "od": 14.22,
            "ph": 7.6,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 17,
            "longitud": -74.065511,
            "latitud": 4.603334,
            "temperatura": 14.1,
            "hg": 0,
            "conduct": 33,
            "od": 7.57,
            "ph": 7.4,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 18,
            "longitud": -74.065511,
            "latitud": 4.603334,
            "temperatura": 14,
            "hg": 0,
            "conduct": 30.6,
            "od": 7.76,
            "ph": 7.59,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 19,
            "longitud": -69.974471,
            "latitud": -4.082099,
            "temperatura": 28.25,
            "hg": 0,
            "conduct": 14.44,
            "od": 9.47,
            "ph": 7.68,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 20,
            "longitud": -69.937283,
            "latitud": -4.096417,
            "temperatura": 28.5,
            "hg": 0,
            "conduct": 36.65,
            "od": 12.7,
            "ph": 6.88,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 21,
            "longitud": -69.937283,
            "latitud": -4.096417,
            "temperatura": 28.56,
            "hg": 0,
            "conduct": 121.13,
            "od": 12.41,
            "ph": 7.13,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 22,
            "longitud": -69.937283,
            "latitud": -4.096417,
            "temperatura": 28.5,
            "hg": 0,
            "conduct": 136.65,
            "od": 12.59,
            "ph": 6.97,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 23,
            "longitud": -69.974471,
            "latitud": -4.082099,
            "temperatura": 28.44,
            "hg": 0,
            "conduct": 13.98,
            "od": 9.67,
            "ph": 7.48,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 24,
            "longitud": -69.974471,
            "latitud": -4.082099,
            "temperatura": 28.44,
            "hg": 0,
            "conduct": 14.21,
            "od": 9.64,
            "ph": 7.08,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:53.000000Z",
            "updated_at": "2018-06-27T15:20:53.000000Z"
        },
        {
            "id": 25,
            "longitud": -69.974471,
            "latitud": -4.082099,
            "temperatura": 28.44,
            "hg": 0,
            "conduct": 13.98,
            "od": 9.86,
            "ph": 7.08,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:54.000000Z",
            "updated_at": "2018-06-27T15:20:54.000000Z"
        },
        {
            "id": 26,
            "longitud": -70.312024,
            "latitud": -3.767798,
            "temperatura": 25.06,
            "hg": 0,
            "conduct": 11.53,
            "od": 9.48,
            "ph": 6.21,
            "region_id": 3,
            "transfer_id": 1,
            "created_at": "2018-06-27T15:20:54.000000Z",
            "updated_at": "2018-06-27T15:20:54.000000Z"
        },
        {
            "id": 27,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18,
            "hg": 0,
            "conduct": 10.12,
            "od": 6.14,
            "ph": 7.204,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:53:26.000000Z",
            "updated_at": "2018-08-30T15:53:26.000000Z"
        },
        {
            "id": 28,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.14,
            "hg": 0,
            "conduct": 6.88,
            "od": 6.45,
            "ph": 4.896,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 29,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.56,
            "hg": 0,
            "conduct": 7,
            "od": 7,
            "ph": 6.58,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 30,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 21,
            "hg": 0,
            "conduct": 21,
            "od": 7.48,
            "ph": 4.15,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 31,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 15.25,
            "hg": 0,
            "conduct": 7.44,
            "od": 5.14,
            "ph": 4.24,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:21:11.000000Z",
            "updated_at": "2018-07-19T20:21:11.000000Z"
        },
        {
            "id": 32,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.44,
            "hg": 0,
            "conduct": 8.95,
            "od": 6.9,
            "ph": 6.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 33,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.19,
            "hg": 0,
            "conduct": 19.12,
            "od": 7.4,
            "ph": 6.56,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 34,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 21.89,
            "hg": 0,
            "conduct": 12.53,
            "od": 8.99,
            "ph": 7.01,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 35,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.11,
            "hg": 0,
            "conduct": 14.54,
            "od": 8.95,
            "ph": 7.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 36,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 22.48,
            "hg": 0,
            "conduct": 12.15,
            "od": 6.92,
            "ph": 7.1,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 37,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 23.78,
            "hg": 0,
            "conduct": 49.3,
            "od": 8.91,
            "ph": 7.02,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 38,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.67,
            "hg": 0,
            "conduct": 19.12,
            "od": 7.4,
            "ph": 6.56,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 39,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 22,
            "hg": 0,
            "conduct": 11.01,
            "od": 9,
            "ph": 7.07,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 40,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.89,
            "hg": 0,
            "conduct": 12.53,
            "od": 8.99,
            "ph": 7.01,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 41,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22,
            "hg": 0,
            "conduct": 16.45,
            "od": 7.55,
            "ph": 7.92,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 42,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.55,
            "hg": 0,
            "conduct": 12.23,
            "od": 10.99,
            "ph": 8.56,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 43,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.24,
            "hg": 0,
            "conduct": 22.04,
            "od": 9.31,
            "ph": 4.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:00:14.000000Z",
            "updated_at": "2018-08-31T17:00:14.000000Z"
        },
        {
            "id": 44,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.89,
            "hg": 0,
            "conduct": 12.14,
            "od": 9.14,
            "ph": 7.77,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 45,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20,
            "hg": 0,
            "conduct": 19,
            "od": 9.36,
            "ph": 7.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 46,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.88,
            "hg": 0,
            "conduct": 19.42,
            "od": 9.36,
            "ph": 3.984,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:06:28.000000Z",
            "updated_at": "2018-08-31T17:06:28.000000Z"
        },
        {
            "id": 47,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.14,
            "hg": 0,
            "conduct": 10,
            "od": 8.89,
            "ph": 6.202,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:06:28.000000Z",
            "updated_at": "2018-08-31T17:06:28.000000Z"
        },
        {
            "id": 48,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.15,
            "hg": 0,
            "conduct": 20.08,
            "od": 11,
            "ph": 7.08,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 49,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.41,
            "hg": 0,
            "conduct": 45.45,
            "od": 8.99,
            "ph": 7.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 50,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.15,
            "hg": 0,
            "conduct": 19.89,
            "od": 7.22,
            "ph": 7.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 51,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 20.18,
            "hg": 0,
            "conduct": 44.78,
            "od": 6.92,
            "ph": 7.44,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 52,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19.88,
            "hg": 0,
            "conduct": 12.88,
            "od": 7.89,
            "ph": 6.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 53,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.14,
            "hg": 0,
            "conduct": 14.85,
            "od": 9.81,
            "ph": 8.54,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 54,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.14,
            "hg": 0,
            "conduct": 18,
            "od": 8.45,
            "ph": 4.69,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 55,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.01,
            "hg": 0,
            "conduct": 11.24,
            "od": 9.14,
            "ph": 7.203,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 56,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.15,
            "hg": 0,
            "conduct": 7.88,
            "od": 9.78,
            "ph": 5.415,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:06:28.000000Z",
            "updated_at": "2018-08-31T17:06:28.000000Z"
        },
        {
            "id": 57,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17,
            "hg": 0,
            "conduct": 14.15,
            "od": 9.64,
            "ph": 4.21,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 58,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.4,
            "hg": 0,
            "conduct": 9.88,
            "od": 9.78,
            "ph": 7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 59,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.25,
            "hg": 0,
            "conduct": 14.22,
            "od": 6.98,
            "ph": 4.144,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 60,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.55,
            "hg": 0,
            "conduct": 9.27,
            "od": 6.18,
            "ph": 5.56,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:25:35.000000Z",
            "updated_at": "2018-07-19T20:25:35.000000Z"
        },
        {
            "id": 61,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.14,
            "hg": 0,
            "conduct": 10.13,
            "od": 7.93,
            "ph": 6.58,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:25:35.000000Z",
            "updated_at": "2018-07-19T20:25:35.000000Z"
        },
        {
            "id": 62,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19,
            "hg": 0,
            "conduct": 8.95,
            "od": 6.23,
            "ph": 3.99,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:25:36.000000Z",
            "updated_at": "2018-07-19T20:25:36.000000Z"
        },
        {
            "id": 63,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.85,
            "hg": 0,
            "conduct": 12.14,
            "od": 7.77,
            "ph": 6.5,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:25:36.000000Z",
            "updated_at": "2018-07-19T20:25:36.000000Z"
        },
        {
            "id": 64,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.55,
            "hg": 0,
            "conduct": 9.98,
            "od": 5.56,
            "ph": 6.67,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 65,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19,
            "hg": 0,
            "conduct": 16.27,
            "od": 9.12,
            "ph": 6.6,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 66,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 14.88,
            "hg": 0,
            "conduct": 11.29,
            "od": 6.867,
            "ph": 5.78,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:27:07.000000Z",
            "updated_at": "2018-07-19T20:27:07.000000Z"
        },
        {
            "id": 67,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 21.5,
            "hg": 0,
            "conduct": 11.16,
            "od": 9.01,
            "ph": 7.99,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 68,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 21.99,
            "hg": 0,
            "conduct": 10.93,
            "od": 9.34,
            "ph": 5.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 69,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 21.44,
            "hg": 0,
            "conduct": 12.46,
            "od": 9.38,
            "ph": 6.99,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 70,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.87,
            "hg": 0,
            "conduct": 11.01,
            "od": 7.4,
            "ph": 7.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 71,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.22,
            "hg": 0,
            "conduct": 12.23,
            "od": 4.14,
            "ph": 7.39,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 72,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.77,
            "hg": 0,
            "conduct": 9.88,
            "od": 9,
            "ph": 6.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 73,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.45,
            "hg": 0,
            "conduct": 10.88,
            "od": 7.14,
            "ph": 7.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 74,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.55,
            "hg": 0,
            "conduct": 14.22,
            "od": 8.65,
            "ph": 7.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 75,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.45,
            "hg": 0,
            "conduct": 24.15,
            "od": 8.78,
            "ph": 8.08,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 76,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.45,
            "hg": 0,
            "conduct": 9.17,
            "od": 10.14,
            "ph": 9.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 77,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.55,
            "hg": 0,
            "conduct": 14.11,
            "od": 12.41,
            "ph": 9.01,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 78,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18,
            "hg": 0,
            "conduct": 11.31,
            "od": 5.56,
            "ph": 3.38,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 79,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.55,
            "hg": 0,
            "conduct": 10.68,
            "od": 7.12,
            "ph": 5.02,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 80,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20,
            "hg": 0,
            "conduct": 10.1,
            "od": 9.36,
            "ph": 5.6,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 81,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 22,
            "hg": 0,
            "conduct": 39.45,
            "od": 8.78,
            "ph": 5.6,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 82,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 20.21,
            "hg": 0,
            "conduct": 18.88,
            "od": 8.95,
            "ph": 7.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 83,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18.98,
            "hg": 0,
            "conduct": 14.7,
            "od": 7.4,
            "ph": 8.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 84,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.56,
            "hg": 0,
            "conduct": 8.89,
            "od": 9.03,
            "ph": 6.88,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 85,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19.98,
            "hg": 0,
            "conduct": 55.28,
            "od": 7.14,
            "ph": 6.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 86,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.99,
            "hg": 0,
            "conduct": 19.87,
            "od": 10.14,
            "ph": 9.44,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 87,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.26,
            "hg": 0,
            "conduct": 9.19,
            "od": 10.14,
            "ph": 5.85,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:06:28.000000Z",
            "updated_at": "2018-08-31T17:06:28.000000Z"
        },
        {
            "id": 88,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.05,
            "hg": 0,
            "conduct": 11.24,
            "od": 8.45,
            "ph": 6.001,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 89,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.15,
            "hg": 0,
            "conduct": 8.88,
            "od": 8.88,
            "ph": 6.15,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 90,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 20.02,
            "hg": 0,
            "conduct": 9.08,
            "od": 10.14,
            "ph": 7.06,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 91,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.45,
            "hg": 0,
            "conduct": 20.05,
            "od": 8.115,
            "ph": 6.086,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 92,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16,
            "hg": 0,
            "conduct": 14,
            "od": 10.68,
            "ph": 3.85,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 93,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17,
            "hg": 0,
            "conduct": 6,
            "od": 12,
            "ph": 6.56,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 94,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17,
            "hg": 0,
            "conduct": 12.36,
            "od": 10,
            "ph": 4.15,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 95,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.45,
            "hg": 0,
            "conduct": 7.77,
            "od": 5.56,
            "ph": 4.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:48:34.000000Z",
            "updated_at": "2018-07-19T20:48:34.000000Z"
        },
        {
            "id": 96,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.24,
            "hg": 0,
            "conduct": 8.65,
            "od": 8.96,
            "ph": 6.35,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 97,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.2,
            "hg": 0,
            "conduct": 8.61,
            "od": 4.56,
            "ph": 6.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:48:34.000000Z",
            "updated_at": "2018-07-19T20:48:34.000000Z"
        },
        {
            "id": 98,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 21.15,
            "hg": 0,
            "conduct": 25.99,
            "od": 7.14,
            "ph": 5.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 99,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.7,
            "hg": 0,
            "conduct": 9.56,
            "od": 6.17,
            "ph": 6.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 100,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.37,
            "hg": 0,
            "conduct": 9.79,
            "od": 6.18,
            "ph": 6.76,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 101,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.48,
            "hg": 0,
            "conduct": 15.96,
            "od": 7.14,
            "ph": 7,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 102,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.14,
            "hg": 0,
            "conduct": 12,
            "od": 7.12,
            "ph": 7.08,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 103,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.55,
            "hg": 0,
            "conduct": 10.68,
            "od": 7.12,
            "ph": 7.02,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 104,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.07,
            "hg": 0,
            "conduct": 16.27,
            "od": 9.12,
            "ph": 6.6,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 105,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.99,
            "hg": 0,
            "conduct": 10.93,
            "od": 9.34,
            "ph": 6.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 106,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21,
            "hg": 0,
            "conduct": 12.46,
            "od": 9.38,
            "ph": 6.99,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 107,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.14,
            "hg": 0,
            "conduct": 10.93,
            "od": 9.22,
            "ph": 9.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 108,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.24,
            "hg": 0,
            "conduct": 12.46,
            "od": 8.17,
            "ph": 8.87,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 109,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.89,
            "hg": 0,
            "conduct": 17.88,
            "od": 8.45,
            "ph": 6.47,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:00:14.000000Z",
            "updated_at": "2018-08-31T17:00:14.000000Z"
        },
        {
            "id": 110,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.55,
            "hg": 0,
            "conduct": 7.56,
            "od": 9.1,
            "ph": 7.008,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 111,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.44,
            "hg": 0,
            "conduct": 10.22,
            "od": 7.89,
            "ph": 6.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 112,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.11,
            "hg": 0,
            "conduct": 11.11,
            "od": 12.48,
            "ph": 5.711,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 113,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 21.11,
            "hg": 0,
            "conduct": 11.69,
            "od": 9.22,
            "ph": 6.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 114,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.78,
            "hg": 0,
            "conduct": 6.67,
            "od": 7.14,
            "ph": 4.78,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:25:35.000000Z",
            "updated_at": "2018-07-19T20:25:35.000000Z"
        },
        {
            "id": 115,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.98,
            "hg": 0,
            "conduct": 8.88,
            "od": 4.63,
            "ph": 4.15,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:25:35.000000Z",
            "updated_at": "2018-07-19T20:25:35.000000Z"
        },
        {
            "id": 116,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.44,
            "hg": 0,
            "conduct": 19.88,
            "od": 7.03,
            "ph": 4.95,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:25:36.000000Z",
            "updated_at": "2018-07-19T20:25:36.000000Z"
        },
        {
            "id": 117,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.78,
            "hg": 0,
            "conduct": 14.46,
            "od": 7.48,
            "ph": 6.44,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:25:36.000000Z",
            "updated_at": "2018-07-19T20:25:36.000000Z"
        },
        {
            "id": 118,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.44,
            "hg": 0,
            "conduct": 11.16,
            "od": 9.27,
            "ph": 5.35,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 119,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 22,
            "hg": 0,
            "conduct": 11.69,
            "od": 6.86,
            "ph": 6.76,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 120,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20,
            "hg": 0,
            "conduct": 14.11,
            "od": 6.89,
            "ph": 6.54,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 121,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 21,
            "hg": 0,
            "conduct": 19.99,
            "od": 7.55,
            "ph": 6.66,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 122,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.87,
            "hg": 0,
            "conduct": 15.88,
            "od": 10.01,
            "ph": 7.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 123,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 21.44,
            "hg": 0,
            "conduct": 8.22,
            "od": 7.89,
            "ph": 7.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 124,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.14,
            "hg": 0,
            "conduct": 19,
            "od": 10.23,
            "ph": 7.18,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 125,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.88,
            "hg": 0,
            "conduct": 18.11,
            "od": 10.16,
            "ph": 7.25,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 126,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.07,
            "hg": 0,
            "conduct": 10.14,
            "od": 11.78,
            "ph": 7.08,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 127,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 22.21,
            "hg": 0,
            "conduct": 6.88,
            "od": 9.45,
            "ph": 7.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 128,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.88,
            "hg": 0,
            "conduct": 25.78,
            "od": 9.38,
            "ph": 6.5,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 129,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.14,
            "hg": 0,
            "conduct": 11.58,
            "od": 6.86,
            "ph": 8.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 130,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 23,
            "hg": 0,
            "conduct": 21.87,
            "od": 9.45,
            "ph": 7.56,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 131,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.42,
            "hg": 0,
            "conduct": 19.18,
            "od": 6.17,
            "ph": 8.49,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 132,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 20.88,
            "hg": 0,
            "conduct": 14.88,
            "od": 8.91,
            "ph": 6.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 133,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.45,
            "hg": 0,
            "conduct": 55.14,
            "od": 9.18,
            "ph": 7.85,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 134,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.45,
            "hg": 0,
            "conduct": 24.55,
            "od": 10.14,
            "ph": 9.44,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:19.000000Z",
            "updated_at": "2018-07-19T20:47:19.000000Z"
        },
        {
            "id": 135,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22,
            "hg": 0,
            "conduct": 9.02,
            "od": 9.88,
            "ph": 9.88,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 136,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.09,
            "hg": 0,
            "conduct": 16.98,
            "od": 9.45,
            "ph": 6.07,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 137,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.86,
            "hg": 0,
            "conduct": 8.19,
            "od": 11.14,
            "ph": 6.085,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 138,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.1,
            "hg": 0,
            "conduct": 18.48,
            "od": 9.88,
            "ph": 9.06,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 139,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 14.11,
            "hg": 0,
            "conduct": 11,
            "od": 8.56,
            "ph": 5.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 140,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.21,
            "hg": 0,
            "conduct": 12.36,
            "od": 5.69,
            "ph": 7.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 141,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.24,
            "hg": 0,
            "conduct": 7.56,
            "od": 7.89,
            "ph": 4.51,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 142,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 15.28,
            "hg": 0,
            "conduct": 14.55,
            "od": 6.56,
            "ph": 7.24,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 143,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.21,
            "hg": 0,
            "conduct": 12.56,
            "od": 7.89,
            "ph": 4.25,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 144,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.55,
            "hg": 0,
            "conduct": 12.15,
            "od": 8.55,
            "ph": 9.014,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 145,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.37,
            "hg": 0,
            "conduct": 19.79,
            "od": 6.18,
            "ph": 5.76,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 146,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.24,
            "hg": 0,
            "conduct": 14.95,
            "od": 6.23,
            "ph": 5.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 147,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.11,
            "hg": 0,
            "conduct": 12.95,
            "od": 8,
            "ph": 5.1,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 148,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.19,
            "hg": 0,
            "conduct": 7.651,
            "od": 7.03,
            "ph": 6.46,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 149,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 21.14,
            "hg": 0,
            "conduct": 7.99,
            "od": 8.91,
            "ph": 7.75,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 150,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.01,
            "hg": 0,
            "conduct": 19.32,
            "od": 9.17,
            "ph": 7.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 151,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.47,
            "hg": 0,
            "conduct": 7.88,
            "od": 8.96,
            "ph": 8.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 152,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.11,
            "hg": 0,
            "conduct": 11.69,
            "od": 9.22,
            "ph": 6.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 153,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.87,
            "hg": 0,
            "conduct": 11.01,
            "od": 9.49,
            "ph": 8.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 154,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.56,
            "hg": 0,
            "conduct": 12.53,
            "od": 10,
            "ph": 8.99,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 155,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19,
            "hg": 0,
            "conduct": 8.98,
            "od": 9.14,
            "ph": 6.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 156,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.17,
            "hg": 0,
            "conduct": 17.21,
            "od": 9.36,
            "ph": 4.98,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 157,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.45,
            "hg": 0,
            "conduct": 10.54,
            "od": 7.25,
            "ph": 6,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 158,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.21,
            "hg": 0,
            "conduct": 17.45,
            "od": 7.89,
            "ph": 5.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 159,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.03,
            "hg": 0,
            "conduct": 19.86,
            "od": 10.06,
            "ph": 7.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 160,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.89,
            "hg": 0,
            "conduct": 19.41,
            "od": 7,
            "ph": 6.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 161,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.46,
            "hg": 0,
            "conduct": 16.12,
            "od": 6.45,
            "ph": 8.01,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 162,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.33,
            "hg": 0,
            "conduct": 17.14,
            "od": 9.15,
            "ph": 8.79,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 163,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.13,
            "hg": 0,
            "conduct": 6.66,
            "od": 10.14,
            "ph": 7.06,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 164,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18,
            "hg": 0,
            "conduct": 18.1,
            "od": 8.75,
            "ph": 6.778,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 165,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 20.14,
            "hg": 0,
            "conduct": 16.22,
            "od": 8.95,
            "ph": 7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 166,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.01,
            "hg": 0,
            "conduct": 11.03,
            "od": 5.89,
            "ph": 6.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 167,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 14.55,
            "hg": 0,
            "conduct": 8.96,
            "od": 7.12,
            "ph": 6.52,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:25:35.000000Z",
            "updated_at": "2018-07-19T20:25:35.000000Z"
        },
        {
            "id": 168,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 15,
            "hg": 0,
            "conduct": 10.1,
            "od": 6.36,
            "ph": 5.6,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:25:36.000000Z",
            "updated_at": "2018-07-19T20:25:36.000000Z"
        },
        {
            "id": 169,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.12,
            "hg": 0,
            "conduct": 12.12,
            "od": 7.34,
            "ph": 6.77,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:25:36.000000Z",
            "updated_at": "2018-07-19T20:25:36.000000Z"
        },
        {
            "id": 170,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.44,
            "hg": 0,
            "conduct": 19.32,
            "od": 9.17,
            "ph": 7.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 171,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 21.44,
            "hg": 0,
            "conduct": 39,
            "od": 11.02,
            "ph": 6.07,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 172,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.57,
            "hg": 0,
            "conduct": 11.01,
            "od": 4.14,
            "ph": 5.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 173,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 21.44,
            "hg": 0,
            "conduct": 17.56,
            "od": 8.78,
            "ph": 6.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 174,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 22.14,
            "hg": 0,
            "conduct": 19.47,
            "od": 9.03,
            "ph": 7.08,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 175,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.45,
            "hg": 0,
            "conduct": 28.74,
            "od": 9.34,
            "ph": 7.6,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 176,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.45,
            "hg": 0,
            "conduct": 7.88,
            "od": 8.92,
            "ph": 7.78,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 177,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.11,
            "hg": 0,
            "conduct": 12.11,
            "od": 8.45,
            "ph": 7.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 178,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.44,
            "hg": 0,
            "conduct": 15.88,
            "od": 9.52,
            "ph": 6.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 179,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18,
            "hg": 0,
            "conduct": 10.14,
            "od": 8.14,
            "ph": 6.223,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:06:28.000000Z",
            "updated_at": "2018-08-31T17:06:28.000000Z"
        },
        {
            "id": 180,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.48,
            "hg": 0,
            "conduct": 20.12,
            "od": 10.36,
            "ph": 4.984,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 181,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.24,
            "hg": 0,
            "conduct": 21.04,
            "od": 10.31,
            "ph": 5.112,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 182,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.04,
            "hg": 0,
            "conduct": 22,
            "od": 15.04,
            "ph": 6.788,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 183,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 15.21,
            "hg": 0,
            "conduct": 5.69,
            "od": 7.89,
            "ph": 6.56,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 184,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.02,
            "hg": 0,
            "conduct": 11.25,
            "od": 8.65,
            "ph": 6.52,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 185,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 15.36,
            "hg": 0,
            "conduct": 8.65,
            "od": 11.13,
            "ph": 5.23,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 186,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.56,
            "hg": 0,
            "conduct": 12,
            "od": 8.25,
            "ph": 5.03,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 187,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.34,
            "hg": 0,
            "conduct": 16.34,
            "od": 10.34,
            "ph": 3.67,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T22:41:31.000000Z",
            "updated_at": "2019-01-25T22:41:31.000000Z"
        },
        {
            "id": 188,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17,
            "hg": 0,
            "conduct": 8.19,
            "od": 7,
            "ph": 9.22,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:35:55.000000Z",
            "updated_at": "2018-12-04T17:35:55.000000Z"
        },
        {
            "id": 189,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.59,
            "hg": 0,
            "conduct": 14.11,
            "od": 8.98,
            "ph": 8.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 190,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.89,
            "hg": 0,
            "conduct": 7.44,
            "od": 9.78,
            "ph": 8.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 191,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.14,
            "hg": 0,
            "conduct": 19.44,
            "od": 12.1,
            "ph": 8.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 192,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.98,
            "hg": 0,
            "conduct": 10.05,
            "od": 10.14,
            "ph": 8.59,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 193,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 20,
            "hg": 0,
            "conduct": 15.96,
            "od": 7.14,
            "ph": 3.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 194,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.14,
            "hg": 0,
            "conduct": 10.13,
            "od": 7.93,
            "ph": 6.39,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 195,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.18,
            "hg": 0,
            "conduct": 12.12,
            "od": 7.34,
            "ph": 7.7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 196,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.88,
            "hg": 0,
            "conduct": 6.98,
            "od": 7.56,
            "ph": 6.67,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 197,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.01,
            "hg": 0,
            "conduct": 11.03,
            "od": 7.89,
            "ph": 6.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 198,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 22.05,
            "hg": 0,
            "conduct": 11.16,
            "od": 12.01,
            "ph": 7.99,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 199,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.69,
            "hg": 0,
            "conduct": 11.16,
            "od": 9.27,
            "ph": 5.35,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 200,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.14,
            "hg": 0,
            "conduct": 14.45,
            "od": 6.86,
            "ph": 8.98,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 201,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 23,
            "hg": 0,
            "conduct": 12.15,
            "od": 14.92,
            "ph": 8.51,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 202,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.24,
            "hg": 0,
            "conduct": 20,
            "od": 8.04,
            "ph": 5.48,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 203,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.45,
            "hg": 0,
            "conduct": 19.85,
            "od": 7.45,
            "ph": 5.86,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 204,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19,
            "hg": 0,
            "conduct": 15.89,
            "od": 8.89,
            "ph": 6.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 205,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17,
            "hg": 0,
            "conduct": 18.15,
            "od": 8.44,
            "ph": 4.15,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 206,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19,
            "hg": 0,
            "conduct": 9.45,
            "od": 10.03,
            "ph": 6.25,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 207,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.02,
            "hg": 0,
            "conduct": 15.56,
            "od": 10.25,
            "ph": 6.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 208,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.19,
            "hg": 0,
            "conduct": 7.651,
            "od": 7.03,
            "ph": 7.6,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 209,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18,
            "hg": 0,
            "conduct": 7.89,
            "od": 11,
            "ph": 6.32,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 210,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.02,
            "hg": 0,
            "conduct": 8.19,
            "od": 10.25,
            "ph": 5.77,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 211,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.14,
            "hg": 0,
            "conduct": 10.54,
            "od": 7,
            "ph": 8.01,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 212,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.3,
            "hg": 0,
            "conduct": 18.45,
            "od": 10,
            "ph": 8.056,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 213,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.04,
            "hg": 0,
            "conduct": 10.21,
            "od": 8.95,
            "ph": 7.48,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 214,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19,
            "hg": 0,
            "conduct": 18.56,
            "od": 9.68,
            "ph": 7.44,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 215,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.55,
            "hg": 0,
            "conduct": 17.88,
            "od": 8.88,
            "ph": 6.044,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 216,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 22,
            "hg": 0,
            "conduct": 18.44,
            "od": 8.12,
            "ph": 8.78,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 217,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.11,
            "hg": 0,
            "conduct": 19.55,
            "od": 5.56,
            "ph": 4.78,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:25:35.000000Z",
            "updated_at": "2018-07-19T20:25:35.000000Z"
        },
        {
            "id": 218,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 16.14,
            "hg": 0,
            "conduct": 45.99,
            "od": 5.14,
            "ph": 5.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:25:36.000000Z",
            "updated_at": "2018-07-19T20:25:36.000000Z"
        },
        {
            "id": 219,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.05,
            "hg": 0,
            "conduct": 22.11,
            "od": 8.14,
            "ph": 9.032,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 220,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.7,
            "hg": 0,
            "conduct": 9.56,
            "od": 6.17,
            "ph": 6.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 221,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.44,
            "hg": 0,
            "conduct": 7.99,
            "od": 8.91,
            "ph": 7.75,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 222,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.47,
            "hg": 0,
            "conduct": 7.88,
            "od": 8.96,
            "ph": 7.1,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 223,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 22.11,
            "hg": 0,
            "conduct": 10.93,
            "od": 7.22,
            "ph": 7.38,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 224,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.56,
            "hg": 0,
            "conduct": 12.53,
            "od": 7.14,
            "ph": 6.58,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 225,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.24,
            "hg": 0,
            "conduct": 12.46,
            "od": 6.17,
            "ph": 8.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 226,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.17,
            "hg": 0,
            "conduct": 7.23,
            "od": 7.55,
            "ph": 7.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:39:43.000000Z",
            "updated_at": "2018-07-19T20:39:43.000000Z"
        },
        {
            "id": 227,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.88,
            "hg": 0,
            "conduct": 10.11,
            "od": 10,
            "ph": 8.44,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 228,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.55,
            "hg": 0,
            "conduct": 9.77,
            "od": 10.14,
            "ph": 7.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 229,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.37,
            "hg": 0,
            "conduct": 9.88,
            "od": 10.78,
            "ph": 6.78,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:06:28.000000Z",
            "updated_at": "2018-08-31T17:06:28.000000Z"
        },
        {
            "id": 230,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.14,
            "hg": 0,
            "conduct": 7.66,
            "od": 7.89,
            "ph": 5.904,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 231,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.07,
            "hg": 0,
            "conduct": 21.15,
            "od": 9.98,
            "ph": 5.85,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 232,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 20.04,
            "hg": 0,
            "conduct": 11,
            "od": 7.69,
            "ph": 7.2,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 233,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.01,
            "hg": 0,
            "conduct": 16.96,
            "od": 9.89,
            "ph": 7.22,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 234,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.56,
            "hg": 0,
            "conduct": 12.14,
            "od": 12.15,
            "ph": 4.58,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 235,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 15.21,
            "hg": 0,
            "conduct": 21,
            "od": 10.04,
            "ph": 4.25,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 236,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.54,
            "hg": 0,
            "conduct": 12.05,
            "od": 8.54,
            "ph": 5.22,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 237,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.25,
            "hg": 0,
            "conduct": 6.36,
            "od": 6.48,
            "ph": 6.25,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 238,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.23,
            "hg": 0,
            "conduct": 14.25,
            "od": 8.56,
            "ph": 4.21,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 239,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.21,
            "hg": 0,
            "conduct": 44.2,
            "od": 7.55,
            "ph": 4.49,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:48:01.000000Z",
            "updated_at": "2018-07-19T20:48:01.000000Z"
        },
        {
            "id": 240,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 22.01,
            "hg": 0,
            "conduct": 19.55,
            "od": 9.859,
            "ph": 7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 241,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.14,
            "hg": 0,
            "conduct": 9.48,
            "od": 11.4,
            "ph": 9.67,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 242,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.41,
            "hg": 0,
            "conduct": 15.88,
            "od": 12.14,
            "ph": 7.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 243,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18,
            "hg": 0,
            "conduct": 10.24,
            "od": 9.45,
            "ph": 5.601,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T16:55:44.000000Z",
            "updated_at": "2018-08-31T16:55:44.000000Z"
        },
        {
            "id": 244,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.21,
            "hg": 0,
            "conduct": 15.96,
            "od": 7.89,
            "ph": 7.18,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 245,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.01,
            "hg": 0,
            "conduct": 21,
            "od": 9.15,
            "ph": 5.87,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 246,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.45,
            "hg": 0,
            "conduct": 10.45,
            "od": 6.98,
            "ph": 6.87,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 247,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.41,
            "hg": 0,
            "conduct": 14.27,
            "od": 8.46,
            "ph": 7.01,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 248,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19,
            "hg": 0,
            "conduct": 6.45,
            "od": 6.66,
            "ph": 7.48,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 249,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.26,
            "hg": 0,
            "conduct": 10.14,
            "od": 9.14,
            "ph": 7.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 250,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.56,
            "hg": 0,
            "conduct": 19,
            "od": 8.15,
            "ph": 7.05,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 251,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.36,
            "hg": 0,
            "conduct": 19,
            "od": 6.14,
            "ph": 7.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 252,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.01,
            "hg": 0,
            "conduct": 22.14,
            "od": 8.14,
            "ph": 8.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 253,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.45,
            "hg": 0,
            "conduct": 10.12,
            "od": 9.36,
            "ph": 6.98,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 254,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.11,
            "hg": 0,
            "conduct": 7.95,
            "od": 8,
            "ph": 7.1,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 255,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.12,
            "hg": 0,
            "conduct": 11.29,
            "od": 6.867,
            "ph": 6.98,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 256,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.4,
            "hg": 0,
            "conduct": 10.1,
            "od": 6.36,
            "ph": 5.6,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 257,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20,
            "hg": 0,
            "conduct": 12,
            "od": 7.48,
            "ph": 7.12,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 258,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 21.15,
            "hg": 0,
            "conduct": 10,
            "od": 7.77,
            "ph": 6.5,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 259,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.18,
            "hg": 0,
            "conduct": 12.12,
            "od": 7.34,
            "ph": 7.7,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 260,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 21.15,
            "hg": 0,
            "conduct": 45.99,
            "od": 5.14,
            "ph": 5.12,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 261,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.4,
            "hg": 0,
            "conduct": 10.56,
            "od": 6.99,
            "ph": 7.12,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 262,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 21.14,
            "hg": 0,
            "conduct": 7.99,
            "od": 8.91,
            "ph": 7.75,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 263,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 21.65,
            "hg": 0,
            "conduct": 9.98,
            "od": 5.56,
            "ph": 6.67,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 264,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.44,
            "hg": 0,
            "conduct": 57.45,
            "od": 7.12,
            "ph": 4.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:25:35.000000Z",
            "updated_at": "2018-07-19T20:25:35.000000Z"
        },
        {
            "id": 265,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.44,
            "hg": 0,
            "conduct": 10.56,
            "od": 6.99,
            "ph": 7.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:25:36.000000Z",
            "updated_at": "2018-07-19T20:25:36.000000Z"
        },
        {
            "id": 266,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 20.05,
            "hg": 0,
            "conduct": 11.78,
            "od": 15.11,
            "ph": 6.91,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 267,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.27,
            "hg": 0,
            "conduct": 21.21,
            "od": 10.36,
            "ph": 5.981,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T19:18:18.000000Z",
            "updated_at": "2018-08-31T19:18:18.000000Z"
        },
        {
            "id": 268,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.21,
            "hg": 0,
            "conduct": 7.14,
            "od": 9.65,
            "ph": 4.56,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 269,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.21,
            "hg": 0,
            "conduct": 14,
            "od": 9.89,
            "ph": 5.124,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 270,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 14.89,
            "hg": 0,
            "conduct": 6.58,
            "od": 11.2,
            "ph": 4.25,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 271,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.02,
            "hg": 0,
            "conduct": 11.54,
            "od": 8.95,
            "ph": 6.58,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 272,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 16.56,
            "hg": 0,
            "conduct": 13.65,
            "od": 10.14,
            "ph": 5.01,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 273,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.21,
            "hg": 0,
            "conduct": 20.64,
            "od": 8.89,
            "ph": 5.07,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:09:59.000000Z",
            "updated_at": "2019-01-25T23:09:59.000000Z"
        },
        {
            "id": 274,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18,
            "hg": 0,
            "conduct": 14.55,
            "od": 6.12,
            "ph": 5.487,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 275,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.55,
            "hg": 0,
            "conduct": 24.74,
            "od": 9.22,
            "ph": 8.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 276,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.21,
            "hg": 0,
            "conduct": 24.48,
            "od": 9.27,
            "ph": 7.7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 277,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.22,
            "hg": 0,
            "conduct": 7.89,
            "od": 9.88,
            "ph": 7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 278,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18.99,
            "hg": 0,
            "conduct": 27.89,
            "od": 8.12,
            "ph": 7.88,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-07-19T20:47:18.000000Z",
            "updated_at": "2018-07-19T20:47:18.000000Z"
        },
        {
            "id": 279,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.22,
            "hg": 0,
            "conduct": 19.55,
            "od": 7.66,
            "ph": 5.762,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 280,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.02,
            "hg": 0,
            "conduct": 8.99,
            "od": 8.87,
            "ph": 6.78,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 281,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.14,
            "hg": 0,
            "conduct": 12.11,
            "od": 9.85,
            "ph": 7.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 282,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.99,
            "hg": 0,
            "conduct": 22.22,
            "od": 7.89,
            "ph": 6.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 283,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 22.15,
            "hg": 0,
            "conduct": 15.44,
            "od": 11.15,
            "ph": 9.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 284,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19.89,
            "hg": 0,
            "conduct": 9.44,
            "od": 10.14,
            "ph": 6.31,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 285,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.01,
            "hg": 0,
            "conduct": 10.09,
            "od": 7.45,
            "ph": 7.88,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 286,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 23.01,
            "hg": 0,
            "conduct": 14.22,
            "od": 12.56,
            "ph": 8.18,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T15:57:52.000000Z",
            "updated_at": "2018-08-30T15:57:52.000000Z"
        },
        {
            "id": 287,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.23,
            "hg": 0,
            "conduct": 10.67,
            "od": 9.74,
            "ph": 6.98,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 288,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 16.43,
            "hg": 0,
            "conduct": 8.78,
            "od": 10.12,
            "ph": 7.77,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 289,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18.13,
            "hg": 0,
            "conduct": 18.75,
            "od": 8.62,
            "ph": 8.34,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 290,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17.89,
            "hg": 0,
            "conduct": 10.54,
            "od": 9.14,
            "ph": 7.07,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:35:55.000000Z",
            "updated_at": "2018-12-04T17:35:55.000000Z"
        },
        {
            "id": 291,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18,
            "hg": 0,
            "conduct": 9,
            "od": 8,
            "ph": 5.08,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 292,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.15,
            "hg": 0,
            "conduct": 19.78,
            "od": 10,
            "ph": 6.48,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T16:55:44.000000Z",
            "updated_at": "2018-08-31T16:55:44.000000Z"
        },
        {
            "id": 293,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 10.78,
            "od": 10.11,
            "ph": 7.01,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 294,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.12,
            "hg": 0,
            "conduct": 19.46,
            "od": 9.36,
            "ph": 7.05,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 295,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.12,
            "hg": 0,
            "conduct": 14.55,
            "od": 7.89,
            "ph": 7.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 296,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18,
            "hg": 0,
            "conduct": 15.54,
            "od": 9.01,
            "ph": 6.66,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 297,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.24,
            "hg": 0,
            "conduct": 11.21,
            "od": 6.31,
            "ph": 8.98,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 298,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.01,
            "hg": 0,
            "conduct": 13,
            "od": 8.63,
            "ph": 9.04,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 299,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 15.17,
            "hg": 0,
            "conduct": 10,
            "od": 11,
            "ph": 7.39,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 300,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17,
            "hg": 0,
            "conduct": 7,
            "od": 14,
            "ph": 6.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 301,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 14.14,
            "hg": 0,
            "conduct": 7,
            "od": 11,
            "ph": 5.22,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 302,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.14,
            "hg": 0,
            "conduct": 11,
            "od": 6.68,
            "ph": 6,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 303,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.21,
            "hg": 0,
            "conduct": 10,
            "od": 8,
            "ph": 5.35,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 304,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.14,
            "hg": 0,
            "conduct": 14,
            "od": 9.65,
            "ph": 5.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:08:02.000000Z",
            "updated_at": "2018-08-31T17:08:02.000000Z"
        },
        {
            "id": 305,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.14,
            "hg": 0,
            "conduct": 6.66,
            "od": 8.89,
            "ph": 6.704,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:08:02.000000Z",
            "updated_at": "2018-08-31T17:08:02.000000Z"
        },
        {
            "id": 306,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.23,
            "hg": 0,
            "conduct": 10,
            "od": 10,
            "ph": 4,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 307,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.11,
            "hg": 0,
            "conduct": 10.11,
            "od": 9.48,
            "ph": 4.711,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:08:02.000000Z",
            "updated_at": "2018-08-31T17:08:02.000000Z"
        },
        {
            "id": 308,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.31,
            "hg": 0,
            "conduct": 11,
            "od": 9,
            "ph": 7.67,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 309,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19,
            "hg": 0,
            "conduct": 11,
            "od": 9,
            "ph": 6,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 310,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20,
            "hg": 0,
            "conduct": 6,
            "od": 8,
            "ph": 7.78,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 311,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18,
            "hg": 0,
            "conduct": 11,
            "od": 9,
            "ph": 9.15,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 312,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17.07,
            "hg": 0,
            "conduct": 8.85,
            "od": 7.45,
            "ph": 9.98,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 313,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17.95,
            "hg": 0,
            "conduct": 10.34,
            "od": 7.85,
            "ph": 7.94,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 314,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17,
            "hg": 0,
            "conduct": 6.98,
            "od": 9.23,
            "ph": 8.65,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 315,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.14,
            "hg": 0,
            "conduct": 10.13,
            "od": 7.93,
            "ph": 7.39,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 316,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.7,
            "hg": 0,
            "conduct": 9.56,
            "od": 6.17,
            "ph": 6.45,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 317,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.01,
            "hg": 0,
            "conduct": 11.03,
            "od": 5.89,
            "ph": 6.89,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 318,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.16,
            "hg": 0,
            "conduct": 8.95,
            "od": 6.9,
            "ph": 6.12,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 319,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.01,
            "hg": 0,
            "conduct": 19.32,
            "od": 9.17,
            "ph": 7.89,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 320,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.07,
            "hg": 0,
            "conduct": 16.27,
            "od": 9.12,
            "ph": 6.6,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 321,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.47,
            "hg": 0,
            "conduct": 7.88,
            "od": 8.96,
            "ph": 7.1,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 322,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.5,
            "hg": 0,
            "conduct": 11.16,
            "od": 9.01,
            "ph": 7.99,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 323,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.65,
            "hg": 0,
            "conduct": 16,
            "od": 11.02,
            "ph": 6.07,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 324,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.57,
            "hg": 0,
            "conduct": 11.01,
            "od": 9,
            "ph": 7.07,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 325,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.99,
            "hg": 0,
            "conduct": 10.93,
            "od": 9.34,
            "ph": 5.89,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 326,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.11,
            "hg": 0,
            "conduct": 11.69,
            "od": 9.22,
            "ph": 6.12,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 327,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.44,
            "hg": 0,
            "conduct": 12,
            "od": 8.78,
            "ph": 6.89,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 328,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.89,
            "hg": 0,
            "conduct": 12.53,
            "od": 8.99,
            "ph": 7.01,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 329,
            "longitud": -74.0656,
            "latitud": 4.603385,
            "temperatura": 14.05,
            "hg": 0,
            "conduct": 9.88,
            "od": 9.55,
            "ph": 7.101,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T15:59:09.000000Z",
            "updated_at": "2018-06-29T15:59:09.000000Z"
        },
        {
            "id": 330,
            "longitud": -74.0656,
            "latitud": 4.603385,
            "temperatura": 12.02,
            "hg": 0,
            "conduct": 10.13,
            "od": 9.1,
            "ph": 7.144,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T15:59:09.000000Z",
            "updated_at": "2018-06-29T15:59:09.000000Z"
        },
        {
            "id": 331,
            "longitud": -74.0656,
            "latitud": 4.603385,
            "temperatura": 21.12,
            "hg": 0,
            "conduct": 7.651,
            "od": 9.98,
            "ph": 7.854,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T15:59:09.000000Z",
            "updated_at": "2018-06-29T15:59:09.000000Z"
        },
        {
            "id": 332,
            "longitud": -74.066432,
            "latitud": 4.601489,
            "temperatura": 20.01,
            "hg": 0,
            "conduct": 15.12,
            "od": 8.5,
            "ph": 6.989,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:13:11.000000Z",
            "updated_at": "2018-06-29T16:13:11.000000Z"
        },
        {
            "id": 333,
            "longitud": -74.066432,
            "latitud": 4.601489,
            "temperatura": 20.05,
            "hg": 0,
            "conduct": 14.88,
            "od": 6.55,
            "ph": 6.201,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:13:11.000000Z",
            "updated_at": "2018-06-29T16:13:11.000000Z"
        },
        {
            "id": 334,
            "longitud": -74.066432,
            "latitud": 4.601489,
            "temperatura": 21.56,
            "hg": 0,
            "conduct": 10.08,
            "od": 9.65,
            "ph": 6.885,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:13:11.000000Z",
            "updated_at": "2018-06-29T16:13:11.000000Z"
        },
        {
            "id": 335,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 20,
            "hg": 0,
            "conduct": 10.1,
            "od": 10.54,
            "ph": 6.934,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:32:51.000000Z",
            "updated_at": "2018-06-29T16:32:51.000000Z"
        },
        {
            "id": 336,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 22.05,
            "hg": 0,
            "conduct": 14.88,
            "od": 6.55,
            "ph": 6.801,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:32:51.000000Z",
            "updated_at": "2018-06-29T16:32:51.000000Z"
        },
        {
            "id": 337,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 21.06,
            "hg": 0,
            "conduct": 12.08,
            "od": 8.65,
            "ph": 6.415,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:32:51.000000Z",
            "updated_at": "2018-06-29T16:32:51.000000Z"
        },
        {
            "id": 338,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.69,
            "hg": 0,
            "conduct": 11.16,
            "od": 9.27,
            "ph": 5.35,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:44:37.000000Z",
            "updated_at": "2018-06-29T16:44:37.000000Z"
        },
        {
            "id": 339,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 23.98,
            "hg": 0,
            "conduct": 12.23,
            "od": 9,
            "ph": 6.56,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:44:37.000000Z",
            "updated_at": "2018-06-29T16:44:37.000000Z"
        },
        {
            "id": 340,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 23,
            "hg": 0,
            "conduct": 12.15,
            "od": 6.92,
            "ph": 5.51,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:44:38.000000Z",
            "updated_at": "2018-06-29T16:44:38.000000Z"
        },
        {
            "id": 341,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.87,
            "hg": 0,
            "conduct": 18.33,
            "od": 9.42,
            "ph": 7.12,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T18:30:33.000000Z",
            "updated_at": "2018-06-29T18:30:33.000000Z"
        },
        {
            "id": 342,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 23.62,
            "hg": 0,
            "conduct": 11.69,
            "od": 6.86,
            "ph": 7.908,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T18:30:33.000000Z",
            "updated_at": "2018-06-29T18:30:33.000000Z"
        },
        {
            "id": 343,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.24,
            "hg": 0,
            "conduct": 8.69,
            "od": 6.45,
            "ph": 6.09,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:34:28.000000Z",
            "updated_at": "2018-12-05T18:34:28.000000Z"
        },
        {
            "id": 344,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 22.1,
            "hg": 0,
            "conduct": 18.21,
            "od": 8.85,
            "ph": 7.152,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T18:32:08.000000Z",
            "updated_at": "2018-06-29T18:32:08.000000Z"
        },
        {
            "id": 345,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.4,
            "hg": 0,
            "conduct": 16.22,
            "od": 18.95,
            "ph": 9.804,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T18:34:41.000000Z",
            "updated_at": "2018-06-29T18:34:41.000000Z"
        },
        {
            "id": 346,
            "longitud": -73.953506,
            "latitud": 4.748996,
            "temperatura": 22.77,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:22.000000Z",
            "updated_at": "2018-06-29T20:28:22.000000Z"
        },
        {
            "id": 347,
            "longitud": -73.954819,
            "latitud": 4.750876,
            "temperatura": 23.73,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:22.000000Z",
            "updated_at": "2018-06-29T20:28:22.000000Z"
        },
        {
            "id": 348,
            "longitud": -73.953506,
            "latitud": 4.748996,
            "temperatura": 23.73,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:22.000000Z",
            "updated_at": "2018-06-29T20:28:22.000000Z"
        },
        {
            "id": 349,
            "longitud": -73.970116,
            "latitud": 4.722397,
            "temperatura": 17.59,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 350,
            "longitud": -73.970116,
            "latitud": 4.722397,
            "temperatura": 18.71,
            "hg": 0,
            "conduct": 18.72,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 351,
            "longitud": -73.970116,
            "latitud": 4.722397,
            "temperatura": 17.51,
            "hg": 0,
            "conduct": 0.02,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 352,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 20.78,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 353,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 21.3,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 354,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 23.03,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 355,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.75,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 356,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 15.09,
            "hg": 0,
            "conduct": 0.01,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 357,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 17.94,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 358,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.3,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 359,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 360,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.07,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 361,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 362,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.04,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 363,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 364,
            "longitud": -73.970116,
            "latitud": 4.722394,
            "temperatura": 20.87,
            "hg": 0,
            "conduct": 0.02,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 365,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21,
            "hg": 0,
            "conduct": 12.46,
            "od": 9.38,
            "ph": 6.99,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:23:37.000000Z",
            "updated_at": "2018-06-27T16:23:37.000000Z"
        },
        {
            "id": 366,
            "longitud": -74.0656,
            "latitud": 4.603385,
            "temperatura": 11.19,
            "hg": 0,
            "conduct": 8.79,
            "od": 6.14,
            "ph": 7.184,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T15:59:09.000000Z",
            "updated_at": "2018-06-29T15:59:09.000000Z"
        },
        {
            "id": 367,
            "longitud": -74.0656,
            "latitud": 4.603385,
            "temperatura": 12.01,
            "hg": 0,
            "conduct": 10.12,
            "od": 9.5,
            "ph": 7.989,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T15:59:09.000000Z",
            "updated_at": "2018-06-29T15:59:09.000000Z"
        },
        {
            "id": 368,
            "longitud": -74.0656,
            "latitud": 4.603385,
            "temperatura": 14.88,
            "hg": 0,
            "conduct": 7.95,
            "od": 6.14,
            "ph": 7.254,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T15:59:09.000000Z",
            "updated_at": "2018-06-29T15:59:09.000000Z"
        },
        {
            "id": 369,
            "longitud": -74.066432,
            "latitud": 4.601489,
            "temperatura": 21,
            "hg": 0,
            "conduct": 14.31,
            "od": 8.14,
            "ph": 6.744,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:13:11.000000Z",
            "updated_at": "2018-06-29T16:13:11.000000Z"
        },
        {
            "id": 370,
            "longitud": -74.066432,
            "latitud": 4.601489,
            "temperatura": 20.19,
            "hg": 0,
            "conduct": 9.79,
            "od": 7.04,
            "ph": 6.284,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:13:11.000000Z",
            "updated_at": "2018-06-29T16:13:11.000000Z"
        },
        {
            "id": 371,
            "longitud": -74.066432,
            "latitud": 4.601489,
            "temperatura": 19.88,
            "hg": 0,
            "conduct": 13.95,
            "od": 9.24,
            "ph": 6.254,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:13:11.000000Z",
            "updated_at": "2018-06-29T16:13:11.000000Z"
        },
        {
            "id": 372,
            "longitud": -74.066432,
            "latitud": 4.601489,
            "temperatura": 22.04,
            "hg": 0,
            "conduct": 14.12,
            "od": 10,
            "ph": 6.004,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:13:11.000000Z",
            "updated_at": "2018-06-29T16:13:11.000000Z"
        },
        {
            "id": 373,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 21,
            "hg": 0,
            "conduct": 24.31,
            "od": 12.14,
            "ph": 6.044,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:32:51.000000Z",
            "updated_at": "2018-06-29T16:32:51.000000Z"
        },
        {
            "id": 374,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 20.05,
            "hg": 0,
            "conduct": 10.96,
            "od": 9.14,
            "ph": 6.004,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:32:51.000000Z",
            "updated_at": "2018-06-29T16:32:51.000000Z"
        },
        {
            "id": 375,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.11,
            "hg": 0,
            "conduct": 16,
            "od": 8.95,
            "ph": 6,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:44:37.000000Z",
            "updated_at": "2018-06-29T16:44:37.000000Z"
        },
        {
            "id": 376,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 23.62,
            "hg": 0,
            "conduct": 11.69,
            "od": 6.86,
            "ph": 5.98,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:44:38.000000Z",
            "updated_at": "2018-06-29T16:44:38.000000Z"
        },
        {
            "id": 377,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22,
            "hg": 0,
            "conduct": 7.23,
            "od": 7.55,
            "ph": 4.92,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:44:38.000000Z",
            "updated_at": "2018-06-29T16:44:38.000000Z"
        },
        {
            "id": 378,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 23.78,
            "hg": 0,
            "conduct": 49.3,
            "od": 8.91,
            "ph": 5.4,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:44:38.000000Z",
            "updated_at": "2018-06-29T16:44:38.000000Z"
        },
        {
            "id": 379,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.81,
            "hg": 0,
            "conduct": 19.46,
            "od": 8.75,
            "ph": 6.763,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T18:30:33.000000Z",
            "updated_at": "2018-06-29T18:30:33.000000Z"
        },
        {
            "id": 380,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 20.12,
            "hg": 0,
            "conduct": 19.49,
            "od": 18.02,
            "ph": 6.998,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T18:30:33.000000Z",
            "updated_at": "2018-06-29T18:30:33.000000Z"
        },
        {
            "id": 381,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.9,
            "hg": 0,
            "conduct": 8.25,
            "od": 10.65,
            "ph": 6.17,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:09:59.000000Z",
            "updated_at": "2019-01-25T23:09:59.000000Z"
        },
        {
            "id": 382,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 21.81,
            "hg": 0,
            "conduct": 6.28,
            "od": 10.37,
            "ph": 5.824,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T19:13:52.000000Z",
            "updated_at": "2018-06-29T19:13:52.000000Z"
        },
        {
            "id": 383,
            "longitud": -73.953506,
            "latitud": 4.748996,
            "temperatura": 24.34,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:22.000000Z",
            "updated_at": "2018-06-29T20:28:22.000000Z"
        },
        {
            "id": 384,
            "longitud": -73.954819,
            "latitud": 4.750876,
            "temperatura": 25.48,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:22.000000Z",
            "updated_at": "2018-06-29T20:28:22.000000Z"
        },
        {
            "id": 385,
            "longitud": -73.954819,
            "latitud": 4.750876,
            "temperatura": 21.73,
            "hg": 0,
            "conduct": 0.02,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:22.000000Z",
            "updated_at": "2018-06-29T20:28:22.000000Z"
        },
        {
            "id": 386,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 18.8,
            "hg": 0,
            "conduct": 2.86,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 387,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 20.69,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 388,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 23.03,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 389,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.14,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 390,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 17.85,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 391,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 18.45,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 392,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.13,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 393,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.09,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 394,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.07,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 395,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 396,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.07,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 397,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.04,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 398,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.07,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 399,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.07,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 400,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.07,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 401,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 402,
            "longitud": -73.970116,
            "latitud": 4.722394,
            "temperatura": 29.43,
            "hg": 0,
            "conduct": 0.02,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 403,
            "longitud": -74.0656,
            "latitud": 4.603385,
            "temperatura": 23,
            "hg": 0,
            "conduct": 11.31,
            "od": 9.14,
            "ph": 7.104,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T15:59:09.000000Z",
            "updated_at": "2018-06-29T15:59:09.000000Z"
        },
        {
            "id": 404,
            "longitud": -74.0656,
            "latitud": 4.603385,
            "temperatura": 19.56,
            "hg": 0,
            "conduct": 10.68,
            "od": 7.653,
            "ph": 7.145,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T15:59:09.000000Z",
            "updated_at": "2018-06-29T15:59:09.000000Z"
        },
        {
            "id": 405,
            "longitud": -74.0656,
            "latitud": 4.603385,
            "temperatura": 22.24,
            "hg": 0,
            "conduct": 11.12,
            "od": 10.64,
            "ph": 7.004,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T15:59:09.000000Z",
            "updated_at": "2018-06-29T15:59:09.000000Z"
        },
        {
            "id": 406,
            "longitud": -74.066432,
            "latitud": 4.601489,
            "temperatura": 20,
            "hg": 0,
            "conduct": 16.11,
            "od": 8.84,
            "ph": 6.756,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:13:11.000000Z",
            "updated_at": "2018-06-29T16:13:11.000000Z"
        },
        {
            "id": 407,
            "longitud": -74.066432,
            "latitud": 4.601489,
            "temperatura": 20.25,
            "hg": 0,
            "conduct": 15.96,
            "od": 9.14,
            "ph": 7.004,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:13:11.000000Z",
            "updated_at": "2018-06-29T16:13:11.000000Z"
        },
        {
            "id": 408,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 20.49,
            "hg": 0,
            "conduct": 10.79,
            "od": 9.04,
            "ph": 6.8384,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:32:51.000000Z",
            "updated_at": "2018-06-29T16:32:51.000000Z"
        },
        {
            "id": 409,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 19,
            "hg": 0,
            "conduct": 20.95,
            "od": 8.01,
            "ph": 6.524,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:32:51.000000Z",
            "updated_at": "2018-06-29T16:32:51.000000Z"
        },
        {
            "id": 410,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.87,
            "hg": 0,
            "conduct": 11.01,
            "od": 7.4,
            "ph": 5.12,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:44:37.000000Z",
            "updated_at": "2018-06-29T16:44:37.000000Z"
        },
        {
            "id": 411,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.14,
            "hg": 0,
            "conduct": 12,
            "od": 9.03,
            "ph": 4.87,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:44:38.000000Z",
            "updated_at": "2018-06-29T16:44:38.000000Z"
        },
        {
            "id": 412,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 21.04,
            "hg": 0,
            "conduct": 19.93,
            "od": 8.32,
            "ph": 6.82,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T18:30:33.000000Z",
            "updated_at": "2018-06-29T18:30:33.000000Z"
        },
        {
            "id": 413,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.09,
            "hg": 0,
            "conduct": 14.16,
            "od": 9.27,
            "ph": 7.735,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T18:30:33.000000Z",
            "updated_at": "2018-06-29T18:30:33.000000Z"
        },
        {
            "id": 414,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19,
            "hg": 0,
            "conduct": 14,
            "od": 9.95,
            "ph": 8.458,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T18:30:33.000000Z",
            "updated_at": "2018-06-29T18:30:33.000000Z"
        },
        {
            "id": 415,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.34,
            "hg": 0,
            "conduct": 9.45,
            "od": 7.89,
            "ph": 6.08,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 416,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.47,
            "hg": 0,
            "conduct": 10.01,
            "od": 17.4,
            "ph": 9.102,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T18:30:33.000000Z",
            "updated_at": "2018-06-29T18:30:33.000000Z"
        },
        {
            "id": 417,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.62,
            "hg": 0,
            "conduct": 13.69,
            "od": 16.46,
            "ph": 9.598,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T18:30:33.000000Z",
            "updated_at": "2018-06-29T18:30:33.000000Z"
        },
        {
            "id": 418,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.87,
            "hg": 0,
            "conduct": 16.52,
            "od": 14,
            "ph": 8.021,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T19:53:24.000000Z",
            "updated_at": "2018-06-29T19:53:24.000000Z"
        },
        {
            "id": 419,
            "longitud": -73.957397,
            "latitud": 4.725964,
            "temperatura": 21.54,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 420,
            "longitud": -73.970116,
            "latitud": 4.722397,
            "temperatura": 18.63,
            "hg": 0,
            "conduct": 20.09,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 421,
            "longitud": -73.970116,
            "latitud": 4.722397,
            "temperatura": 18.63,
            "hg": 0,
            "conduct": 23.51,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 422,
            "longitud": -73.970116,
            "latitud": 4.722397,
            "temperatura": 18.63,
            "hg": 0,
            "conduct": 21.78,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 423,
            "longitud": -73.970116,
            "latitud": 4.722397,
            "temperatura": 17.15,
            "hg": 0,
            "conduct": 0.02,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 424,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 15.78,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 425,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 426,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 18.2,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 427,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 19.23,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 428,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.23,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 429,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.16,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 430,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 431,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 432,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.07,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 433,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.07,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 434,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.04,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 435,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.09,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 436,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.09,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 437,
            "longitud": -73.970116,
            "latitud": 4.722394,
            "temperatura": 21.64,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 438,
            "longitud": -73.954117,
            "latitud": 4.727611,
            "temperatura": 20.26,
            "hg": 0,
            "conduct": 3.59,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 439,
            "longitud": -73.970116,
            "latitud": 4.722394,
            "temperatura": 20.35,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 440,
            "longitud": -74.0656,
            "latitud": 4.603385,
            "temperatura": 14,
            "hg": 0,
            "conduct": 12,
            "od": 9.54,
            "ph": 7.934,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T15:59:09.000000Z",
            "updated_at": "2018-06-29T15:59:09.000000Z"
        },
        {
            "id": 441,
            "longitud": -74.0656,
            "latitud": 4.603385,
            "temperatura": 20.25,
            "hg": 0,
            "conduct": 15.96,
            "od": 10.14,
            "ph": 7.744,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T15:59:09.000000Z",
            "updated_at": "2018-06-29T15:59:09.000000Z"
        },
        {
            "id": 442,
            "longitud": -74.066432,
            "latitud": 4.601489,
            "temperatura": 19,
            "hg": 0,
            "conduct": 12,
            "od": 9.54,
            "ph": 6.934,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:13:11.000000Z",
            "updated_at": "2018-06-29T16:13:11.000000Z"
        },
        {
            "id": 443,
            "longitud": -74.066432,
            "latitud": 4.601489,
            "temperatura": 20.02,
            "hg": 0,
            "conduct": 21,
            "od": 7.17,
            "ph": 7.144,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:13:11.000000Z",
            "updated_at": "2018-06-29T16:13:11.000000Z"
        },
        {
            "id": 444,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 21.01,
            "hg": 0,
            "conduct": 10.12,
            "od": 9.5,
            "ph": 6.789,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:32:51.000000Z",
            "updated_at": "2018-06-29T16:32:51.000000Z"
        },
        {
            "id": 445,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 21.02,
            "hg": 0,
            "conduct": 16,
            "od": 13.17,
            "ph": 7.004,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:32:51.000000Z",
            "updated_at": "2018-06-29T16:32:51.000000Z"
        },
        {
            "id": 446,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 22.22,
            "hg": 0,
            "conduct": 14.65,
            "od": 10.11,
            "ph": 6.894,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:32:51.000000Z",
            "updated_at": "2018-06-29T16:32:51.000000Z"
        },
        {
            "id": 447,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.14,
            "hg": 0,
            "conduct": 10.93,
            "od": 7.22,
            "ph": 6.12,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:44:38.000000Z",
            "updated_at": "2018-06-29T16:44:38.000000Z"
        },
        {
            "id": 448,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.56,
            "hg": 0,
            "conduct": 12.53,
            "od": 8,
            "ph": 4.99,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:44:38.000000Z",
            "updated_at": "2018-06-29T16:44:38.000000Z"
        },
        {
            "id": 449,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.11,
            "hg": 0,
            "conduct": 16.42,
            "od": 9.1,
            "ph": 6.894,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T18:30:33.000000Z",
            "updated_at": "2018-06-29T18:30:33.000000Z"
        },
        {
            "id": 450,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.34,
            "hg": 0,
            "conduct": 14.78,
            "od": 10.34,
            "ph": 5.29,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:12:31.000000Z",
            "updated_at": "2019-01-25T23:12:31.000000Z"
        },
        {
            "id": 451,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22,
            "hg": 0,
            "conduct": 11.06,
            "od": 19.27,
            "ph": 9.135,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T18:30:33.000000Z",
            "updated_at": "2018-06-29T18:30:33.000000Z"
        },
        {
            "id": 452,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18,
            "hg": 0,
            "conduct": 10.12,
            "od": 6.14,
            "ph": 7.204,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:41:49.000000Z",
            "updated_at": "2018-06-29T16:41:49.000000Z"
        },
        {
            "id": 453,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.31,
            "hg": 0,
            "conduct": 16.55,
            "od": 13.88,
            "ph": 6.782,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T19:53:24.000000Z",
            "updated_at": "2018-06-29T19:53:24.000000Z"
        },
        {
            "id": 454,
            "longitud": -73.954819,
            "latitud": 4.750876,
            "temperatura": 24.6,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:22.000000Z",
            "updated_at": "2018-06-29T20:28:22.000000Z"
        },
        {
            "id": 455,
            "longitud": -73.953506,
            "latitud": 4.748996,
            "temperatura": 23.73,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:22.000000Z",
            "updated_at": "2018-06-29T20:28:22.000000Z"
        },
        {
            "id": 456,
            "longitud": -73.970116,
            "latitud": 4.722397,
            "temperatura": 18.54,
            "hg": 0,
            "conduct": 27.56,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 457,
            "longitud": -73.970116,
            "latitud": 4.722397,
            "temperatura": 16.47,
            "hg": 0,
            "conduct": 0.02,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 458,
            "longitud": -73.970116,
            "latitud": 4.722397,
            "temperatura": 18.54,
            "hg": 0,
            "conduct": 25.09,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 459,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 22.34,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 460,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 21.38,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 461,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 20.35,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 462,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.66,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 463,
            "longitud": -73.967705,
            "latitud": 4.721514,
            "temperatura": 17.51,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 464,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 15.52,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 465,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 19.32,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 466,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.14,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 467,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.14,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 468,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.02,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 469,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 470,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.09,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 471,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.09,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 472,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 473,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 474,
            "longitud": -73.970116,
            "latitud": 4.722394,
            "temperatura": 24.87,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 475,
            "longitud": -74.0656,
            "latitud": 4.603385,
            "temperatura": 12,
            "hg": 0,
            "conduct": 10.11,
            "od": 7.84,
            "ph": 6.756,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T15:59:09.000000Z",
            "updated_at": "2018-06-29T15:59:09.000000Z"
        },
        {
            "id": 476,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.56,
            "hg": 0,
            "conduct": 10.11,
            "od": 7,
            "ph": 6.58,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:38:08.000000Z",
            "updated_at": "2018-06-27T16:38:08.000000Z"
        },
        {
            "id": 477,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18,
            "hg": 0,
            "conduct": 10.12,
            "od": 6.14,
            "ph": 7.204,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:41:00.000000Z",
            "updated_at": "2018-06-27T16:41:00.000000Z"
        },
        {
            "id": 478,
            "longitud": -74.0656,
            "latitud": 4.603385,
            "temperatura": 13,
            "hg": 0,
            "conduct": 8.95,
            "od": 10.01,
            "ph": 6.204,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T15:59:09.000000Z",
            "updated_at": "2018-06-29T15:59:09.000000Z"
        },
        {
            "id": 479,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.14,
            "hg": 0,
            "conduct": 9.88,
            "od": 6.45,
            "ph": 6.896,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:41:00.000000Z",
            "updated_at": "2018-06-27T16:41:00.000000Z"
        },
        {
            "id": 480,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.24,
            "hg": 0,
            "conduct": 8.95,
            "od": 6.23,
            "ph": 7.12,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:41:00.000000Z",
            "updated_at": "2018-06-27T16:41:00.000000Z"
        },
        {
            "id": 481,
            "longitud": -74.066432,
            "latitud": 4.601489,
            "temperatura": 19,
            "hg": 0,
            "conduct": 9.95,
            "od": 7.01,
            "ph": 6.284,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:13:11.000000Z",
            "updated_at": "2018-06-29T16:13:11.000000Z"
        },
        {
            "id": 482,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.6,
            "hg": 0,
            "conduct": 11.31,
            "od": 5.56,
            "ph": 7.38,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-27T16:41:00.000000Z",
            "updated_at": "2018-06-27T16:41:00.000000Z"
        },
        {
            "id": 483,
            "longitud": -74.066432,
            "latitud": 4.601489,
            "temperatura": 22.12,
            "hg": 0,
            "conduct": 9.65,
            "od": 10.01,
            "ph": 6.854,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:13:11.000000Z",
            "updated_at": "2018-06-29T16:13:11.000000Z"
        },
        {
            "id": 484,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 21,
            "hg": 0,
            "conduct": 10.11,
            "od": 9.84,
            "ph": 7.006,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:32:51.000000Z",
            "updated_at": "2018-06-29T16:32:51.000000Z"
        },
        {
            "id": 485,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 19.98,
            "hg": 0,
            "conduct": 13.95,
            "od": 10.24,
            "ph": 6.984,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:32:51.000000Z",
            "updated_at": "2018-06-29T16:32:51.000000Z"
        },
        {
            "id": 486,
            "longitud": -74.064707,
            "latitud": 4.602244,
            "temperatura": 22.44,
            "hg": 0,
            "conduct": 9.12,
            "od": 12,
            "ph": 6.987,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:32:51.000000Z",
            "updated_at": "2018-06-29T16:32:51.000000Z"
        },
        {
            "id": 487,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.24,
            "hg": 0,
            "conduct": 12.46,
            "od": 6.17,
            "ph": 6.87,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T16:44:38.000000Z",
            "updated_at": "2018-06-29T16:44:38.000000Z"
        },
        {
            "id": 488,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.77,
            "hg": 0,
            "conduct": 16.01,
            "od": 9.54,
            "ph": 8.122,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T18:30:33.000000Z",
            "updated_at": "2018-06-29T18:30:33.000000Z"
        },
        {
            "id": 489,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.1,
            "hg": 0,
            "conduct": 9.93,
            "od": 17.42,
            "ph": 9.812,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T18:30:33.000000Z",
            "updated_at": "2018-06-29T18:30:33.000000Z"
        },
        {
            "id": 490,
            "longitud": -73.953506,
            "latitud": 4.748996,
            "temperatura": 22.94,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:22.000000Z",
            "updated_at": "2018-06-29T20:28:22.000000Z"
        },
        {
            "id": 491,
            "longitud": -73.954819,
            "latitud": 4.750876,
            "temperatura": 25.04,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:22.000000Z",
            "updated_at": "2018-06-29T20:28:22.000000Z"
        },
        {
            "id": 492,
            "longitud": -73.953506,
            "latitud": 4.748996,
            "temperatura": 22.16,
            "hg": 0,
            "conduct": 0.02,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:22.000000Z",
            "updated_at": "2018-06-29T20:28:22.000000Z"
        },
        {
            "id": 493,
            "longitud": -73.953506,
            "latitud": 4.748996,
            "temperatura": 24.69,
            "hg": 0,
            "conduct": 0.02,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:22.000000Z",
            "updated_at": "2018-06-29T20:28:22.000000Z"
        },
        {
            "id": 494,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 18.37,
            "hg": 0,
            "conduct": 0.59,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 495,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 20.31,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 496,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 22.86,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 497,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 18.54,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 498,
            "longitud": -73.977379,
            "latitud": 4.707583,
            "temperatura": 16.39,
            "hg": 0,
            "conduct": 0.02,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 499,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 15.09,
            "hg": 0,
            "conduct": 0.02,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 500,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 20,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 501,
            "longitud": -73.954117,
            "latitud": 4.727614,
            "temperatura": 19.16,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 502,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.32,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 503,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.04,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 504,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 505,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.04,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 506,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.11,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 507,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 508,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.07,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 509,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 510,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.13,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 511,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.06,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 512,
            "longitud": -73.957397,
            "latitud": 4.725948,
            "temperatura": 19.04,
            "hg": 0,
            "conduct": 0,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 513,
            "longitud": -73.970116,
            "latitud": 4.722394,
            "temperatura": 24.29,
            "hg": 0,
            "conduct": 0.01,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 514,
            "longitud": -73.970116,
            "latitud": 4.722394,
            "temperatura": 19.92,
            "hg": 0,
            "conduct": 0.01,
            "od": 0,
            "ph": 0,
            "region_id": 2,
            "transfer_id": 1,
            "created_at": "2018-06-29T20:28:23.000000Z",
            "updated_at": "2018-06-29T20:28:23.000000Z"
        },
        {
            "id": 515,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.44,
            "hg": 0,
            "conduct": 10.12,
            "od": 7.14,
            "ph": 5.204,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 516,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.14,
            "hg": 0,
            "conduct": 12,
            "od": 6.12,
            "ph": 4.08,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 517,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.12,
            "hg": 0,
            "conduct": 11.29,
            "od": 8.867,
            "ph": 5.98,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 518,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 21.15,
            "hg": 0,
            "conduct": 14.44,
            "od": 7.77,
            "ph": 6.5,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 519,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18,
            "hg": 0,
            "conduct": 10.56,
            "od": 6.99,
            "ph": 7.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 520,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.16,
            "hg": 0,
            "conduct": 11.95,
            "od": 9.99,
            "ph": 6.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 521,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.65,
            "hg": 0,
            "conduct": 16,
            "od": 11.02,
            "ph": 6.07,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 522,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.44,
            "hg": 0,
            "conduct": 6.88,
            "od": 8.78,
            "ph": 6.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 523,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.11,
            "hg": 0,
            "conduct": 16,
            "od": 10.15,
            "ph": 6.98,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 524,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.14,
            "hg": 0,
            "conduct": 12,
            "od": 9.03,
            "ph": 9.87,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 525,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22,
            "hg": 0,
            "conduct": 17.12,
            "od": 10.91,
            "ph": 9.44,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-30T16:04:16.000000Z",
            "updated_at": "2018-08-30T16:04:16.000000Z"
        },
        {
            "id": 526,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.87,
            "hg": 0,
            "conduct": 20.75,
            "od": 8.98,
            "ph": 6.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T16:56:40.000000Z",
            "updated_at": "2018-08-31T16:56:40.000000Z"
        },
        {
            "id": 527,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18,
            "hg": 0,
            "conduct": 12.56,
            "od": 6.94,
            "ph": 7.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 528,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.45,
            "hg": 0,
            "conduct": 9.79,
            "od": 10.21,
            "ph": 6.02,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 529,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.15,
            "hg": 0,
            "conduct": 18.21,
            "od": 6.64,
            "ph": 5.88,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 530,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.27,
            "hg": 0,
            "conduct": 12.54,
            "od": 7.48,
            "ph": 7.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 531,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18,
            "hg": 0,
            "conduct": 20.12,
            "od": 9.15,
            "ph": 5.88,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 532,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.65,
            "hg": 0,
            "conduct": 12.78,
            "od": 9.41,
            "ph": 6.23,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 533,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.45,
            "hg": 0,
            "conduct": 21.14,
            "od": 8.15,
            "ph": 7.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T17:02:47.000000Z",
            "updated_at": "2018-08-31T17:02:47.000000Z"
        },
        {
            "id": 534,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.65,
            "hg": 0,
            "conduct": 6.98,
            "od": 9.32,
            "ph": 6.84,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:12:31.000000Z",
            "updated_at": "2019-01-25T23:12:31.000000Z"
        },
        {
            "id": 535,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.74,
            "hg": 0,
            "conduct": 9.14,
            "od": 9.13,
            "ph": 4.34,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 536,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.23,
            "hg": 0,
            "conduct": 10.55,
            "od": 9.96,
            "ph": 9.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 537,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 16.21,
            "hg": 0,
            "conduct": 7.89,
            "od": 8.15,
            "ph": 8.49,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:35:55.000000Z",
            "updated_at": "2018-12-04T17:35:55.000000Z"
        },
        {
            "id": 538,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18,
            "hg": 0,
            "conduct": 14.55,
            "od": 10.45,
            "ph": 9.56,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:35:55.000000Z",
            "updated_at": "2018-12-04T17:35:55.000000Z"
        },
        {
            "id": 539,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 20.14,
            "hg": 0,
            "conduct": 10.14,
            "od": 8.25,
            "ph": 8.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:35:55.000000Z",
            "updated_at": "2018-12-04T17:35:55.000000Z"
        },
        {
            "id": 540,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19,
            "hg": 0,
            "conduct": 9,
            "od": 11,
            "ph": 9,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:35:55.000000Z",
            "updated_at": "2018-12-04T17:35:55.000000Z"
        },
        {
            "id": 541,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.09,
            "hg": 0,
            "conduct": 8,
            "od": 9,
            "ph": 4.58,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 542,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.25,
            "hg": 0,
            "conduct": 9,
            "od": 8,
            "ph": 6.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 543,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.26,
            "hg": 0,
            "conduct": 14,
            "od": 9,
            "ph": 5.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 544,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 16,
            "hg": 0,
            "conduct": 13,
            "od": 5,
            "ph": 5,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 545,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.54,
            "hg": 0,
            "conduct": 9,
            "od": 9,
            "ph": 6.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 546,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.39,
            "hg": 0,
            "conduct": 22,
            "od": 8,
            "ph": 8.92,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 547,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.45,
            "hg": 0,
            "conduct": 8,
            "od": 6,
            "ph": 7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 548,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.55,
            "hg": 0,
            "conduct": 20,
            "od": 7,
            "ph": 8.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 549,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17,
            "hg": 0,
            "conduct": 12,
            "od": 11,
            "ph": 8.75,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 550,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21,
            "hg": 0,
            "conduct": 9,
            "od": 7,
            "ph": 9,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 551,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19,
            "hg": 0,
            "conduct": 19,
            "od": 9,
            "ph": 9.99,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 552,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19.35,
            "hg": 0,
            "conduct": 24.98,
            "od": 8.83,
            "ph": 8.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 553,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17.73,
            "hg": 0,
            "conduct": 21.59,
            "od": 6.75,
            "ph": 8.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 554,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 16.89,
            "hg": 0,
            "conduct": 11.36,
            "od": 9.65,
            "ph": 7.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 555,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.21,
            "hg": 0,
            "conduct": 9.56,
            "od": 11.24,
            "ph": 8.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 556,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.21,
            "hg": 0,
            "conduct": 9.65,
            "od": 8.78,
            "ph": 9.014,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 557,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18,
            "hg": 0,
            "conduct": 8.98,
            "od": 8.25,
            "ph": 9.036,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 558,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18,
            "hg": 0,
            "conduct": 11.24,
            "od": 7.56,
            "ph": 8.65,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 559,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19,
            "hg": 0,
            "conduct": 11.25,
            "od": 9.54,
            "ph": 9.145,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:40.000000Z",
            "updated_at": "2018-12-05T18:38:40.000000Z"
        },
        {
            "id": 560,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.24,
            "hg": 0,
            "conduct": 16.45,
            "od": 11,
            "ph": 9.36,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 561,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.58,
            "hg": 0,
            "conduct": 6.49,
            "od": 10.39,
            "ph": 7.01,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 562,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18,
            "hg": 0,
            "conduct": 12,
            "od": 10,
            "ph": 8,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:40:54.000000Z",
            "updated_at": "2018-12-04T17:40:54.000000Z"
        },
        {
            "id": 563,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.14,
            "hg": 0,
            "conduct": 9.89,
            "od": 9.36,
            "ph": 8.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 564,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.35,
            "hg": 0,
            "conduct": 11.25,
            "od": 6.89,
            "ph": 8.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 565,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19.45,
            "hg": 0,
            "conduct": 8.56,
            "od": 10.14,
            "ph": 9.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:40.000000Z",
            "updated_at": "2018-12-05T18:38:40.000000Z"
        },
        {
            "id": 566,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 15.24,
            "hg": 0,
            "conduct": 11.31,
            "od": 9,
            "ph": 7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:38.000000Z",
            "updated_at": "2018-12-05T18:45:38.000000Z"
        },
        {
            "id": 567,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.25,
            "hg": 0,
            "conduct": 7.95,
            "od": 9.25,
            "ph": 7.58,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:39.000000Z",
            "updated_at": "2018-12-05T18:45:39.000000Z"
        },
        {
            "id": 568,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17,
            "hg": 0,
            "conduct": 11.29,
            "od": 12.14,
            "ph": 7.25,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:39.000000Z",
            "updated_at": "2018-12-05T18:45:39.000000Z"
        },
        {
            "id": 569,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 20,
            "hg": 0,
            "conduct": 12.12,
            "od": 10.25,
            "ph": 6.001,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:39.000000Z",
            "updated_at": "2018-12-05T18:45:39.000000Z"
        },
        {
            "id": 570,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 14,
            "hg": 0,
            "conduct": 14,
            "od": 11,
            "ph": 4.25,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:30:34.000000Z",
            "updated_at": "2019-01-25T23:30:34.000000Z"
        },
        {
            "id": 571,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 16.06,
            "hg": 0,
            "conduct": 12.8,
            "od": 9.14,
            "ph": 6.86,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:35:55.000000Z",
            "updated_at": "2018-12-04T17:35:55.000000Z"
        },
        {
            "id": 572,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16,
            "hg": 0,
            "conduct": 10.14,
            "od": 11,
            "ph": 4,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 573,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 15.45,
            "hg": 0,
            "conduct": 14,
            "od": 6,
            "ph": 6.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 574,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 15.15,
            "hg": 0,
            "conduct": 12,
            "od": 9,
            "ph": 6.46,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 575,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.14,
            "hg": 0,
            "conduct": 16,
            "od": 8,
            "ph": 3.67,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 576,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.95,
            "hg": 0,
            "conduct": 10,
            "od": 8,
            "ph": 4.01,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 577,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.95,
            "hg": 0,
            "conduct": 11,
            "od": 10,
            "ph": 5.98,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 578,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.45,
            "hg": 0,
            "conduct": 7,
            "od": 10,
            "ph": 7.09,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 579,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21,
            "hg": 0,
            "conduct": 9,
            "od": 7,
            "ph": 8,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 580,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20,
            "hg": 0,
            "conduct": 17.88,
            "od": 10,
            "ph": 7.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 581,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18,
            "hg": 0,
            "conduct": 14,
            "od": 12,
            "ph": 7.56,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 582,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18,
            "hg": 0,
            "conduct": 6,
            "od": 10,
            "ph": 8.38,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 583,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 16.44,
            "hg": 0,
            "conduct": 10,
            "od": 8.58,
            "ph": 7.41,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 584,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.52,
            "hg": 0,
            "conduct": 10.45,
            "od": 14.25,
            "ph": 7.145,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 585,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.45,
            "hg": 0,
            "conduct": 16.09,
            "od": 9.19,
            "ph": 7.089,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 586,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.05,
            "hg": 0,
            "conduct": 11.04,
            "od": 8.25,
            "ph": 6.458,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 587,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.05,
            "hg": 0,
            "conduct": 15.06,
            "od": 9.94,
            "ph": 7.48,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 588,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.04,
            "hg": 0,
            "conduct": 19.09,
            "od": 11.21,
            "ph": 7.002,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 589,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.01,
            "hg": 0,
            "conduct": 24.05,
            "od": 9.04,
            "ph": 5.515,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 590,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.9,
            "hg": 0,
            "conduct": 22.045,
            "od": 10.15,
            "ph": 6.087,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 591,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.25,
            "hg": 0,
            "conduct": 19.21,
            "od": 11.04,
            "ph": 6.08,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 592,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.02,
            "hg": 0,
            "conduct": 11.05,
            "od": 11.23,
            "ph": 7.02,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 593,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.05,
            "hg": 0,
            "conduct": 21.02,
            "od": 11.16,
            "ph": 6.08,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 594,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.87,
            "hg": 0,
            "conduct": 18.14,
            "od": 8.48,
            "ph": 8.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 595,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.05,
            "hg": 0,
            "conduct": 10.45,
            "od": 7.09,
            "ph": 7.08,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 596,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.01,
            "hg": 0,
            "conduct": 18.45,
            "od": 8.89,
            "ph": 6.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 597,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.19,
            "hg": 0,
            "conduct": 20.06,
            "od": 13.26,
            "ph": 7.52,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 598,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.22,
            "hg": 0,
            "conduct": 21.19,
            "od": 11.06,
            "ph": 7.65,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 599,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.02,
            "hg": 0,
            "conduct": 16.06,
            "od": 11.25,
            "ph": 8.09,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 600,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.84,
            "hg": 0,
            "conduct": 15.07,
            "od": 9.46,
            "ph": 7.21,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 601,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.05,
            "hg": 0,
            "conduct": 13.08,
            "od": 11.01,
            "ph": 7.23,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 602,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19,
            "hg": 0,
            "conduct": 6.89,
            "od": 12.05,
            "ph": 7.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 603,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.05,
            "hg": 0,
            "conduct": 9.29,
            "od": 12.25,
            "ph": 7.77,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 604,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.05,
            "hg": 0,
            "conduct": 22.14,
            "od": 9.25,
            "ph": 7.99,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 605,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.02,
            "hg": 0,
            "conduct": 16.15,
            "od": 8.19,
            "ph": 8.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 606,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.06,
            "hg": 0,
            "conduct": 8.15,
            "od": 16.56,
            "ph": 7.68,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 607,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.04,
            "hg": 0,
            "conduct": 18.04,
            "od": 99.14,
            "ph": 8.39,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 608,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.16,
            "hg": 0,
            "conduct": 11.14,
            "od": 10.14,
            "ph": 8.09,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 609,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.22,
            "hg": 0,
            "conduct": 14.04,
            "od": 11.02,
            "ph": 8.66,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 610,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.06,
            "hg": 0,
            "conduct": 22,
            "od": 9.15,
            "ph": 8.05,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 611,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.09,
            "hg": 0,
            "conduct": 22.01,
            "od": 8.02,
            "ph": 8.09,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 612,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.09,
            "hg": 0,
            "conduct": 11.14,
            "od": 10.14,
            "ph": 8.97,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 613,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.04,
            "hg": 0,
            "conduct": 12.21,
            "od": 8.31,
            "ph": 9.08,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 614,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.76,
            "hg": 0,
            "conduct": 18.22,
            "od": 8.45,
            "ph": 8.91,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 615,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.06,
            "hg": 0,
            "conduct": 22,
            "od": 7.14,
            "ph": 8.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 616,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.81,
            "hg": 0,
            "conduct": 18.14,
            "od": 10.24,
            "ph": 9.04,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 617,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.05,
            "hg": 0,
            "conduct": 11.01,
            "od": 9.15,
            "ph": 8.48,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 618,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.31,
            "hg": 0,
            "conduct": 19.15,
            "od": 12,
            "ph": 9.05,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 619,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.1,
            "hg": 0,
            "conduct": 8.16,
            "od": 15.11,
            "ph": 8.06,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 620,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17.24,
            "hg": 0,
            "conduct": 21.14,
            "od": 6.31,
            "ph": 8.03,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:35:55.000000Z",
            "updated_at": "2018-12-04T17:35:55.000000Z"
        },
        {
            "id": 621,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 20,
            "hg": 0,
            "conduct": 8,
            "od": 7,
            "ph": 8.88,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:35:55.000000Z",
            "updated_at": "2018-12-04T17:35:55.000000Z"
        },
        {
            "id": 622,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.14,
            "hg": 0,
            "conduct": 10,
            "od": 11,
            "ph": 6.25,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 623,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.88,
            "hg": 0,
            "conduct": 7,
            "od": 12,
            "ph": 6.11,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 624,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.24,
            "hg": 0,
            "conduct": 9,
            "od": 10,
            "ph": 7.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 625,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.3,
            "hg": 0,
            "conduct": 8,
            "od": 10,
            "ph": 4.99,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 626,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19,
            "hg": 0,
            "conduct": 17,
            "od": 8,
            "ph": 6.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 627,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.3,
            "hg": 0,
            "conduct": 14,
            "od": 11,
            "ph": 6.87,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 628,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.22,
            "hg": 0,
            "conduct": 8,
            "od": 8,
            "ph": 7.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 629,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19.95,
            "hg": 0,
            "conduct": 7.77,
            "od": 9,
            "ph": 9.17,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 630,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.45,
            "hg": 0,
            "conduct": 9.19,
            "od": 9.34,
            "ph": 4.84,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:12:31.000000Z",
            "updated_at": "2019-01-25T23:12:31.000000Z"
        },
        {
            "id": 631,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16,
            "hg": 0,
            "conduct": 10.11,
            "od": 7.77,
            "ph": 5.24,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 632,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.44,
            "hg": 0,
            "conduct": 15.24,
            "od": 10,
            "ph": 7.05,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 633,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18,
            "hg": 0,
            "conduct": 14.25,
            "od": 5.44,
            "ph": 6.05,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 634,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 16.22,
            "hg": 0,
            "conduct": 18,
            "od": 10,
            "ph": 6.22,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 635,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.55,
            "hg": 0,
            "conduct": 17.25,
            "od": 6.89,
            "ph": 6.24,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 636,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 16.54,
            "hg": 0,
            "conduct": 8.95,
            "od": 8.51,
            "ph": 9.25,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 637,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 16.36,
            "hg": 0,
            "conduct": 7.54,
            "od": 6.56,
            "ph": 7.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 638,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 16.24,
            "hg": 0,
            "conduct": 8.57,
            "od": 10.26,
            "ph": 6.789,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 639,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 16.98,
            "hg": 0,
            "conduct": 7.65,
            "od": 11.02,
            "ph": 7.58,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 640,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.89,
            "hg": 0,
            "conduct": 10,
            "od": 9.82,
            "ph": 9.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 641,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18.25,
            "hg": 0,
            "conduct": 11.45,
            "od": 9.05,
            "ph": 8.65,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 642,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17,
            "hg": 0,
            "conduct": 8,
            "od": 8,
            "ph": 9.49,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:40:54.000000Z",
            "updated_at": "2018-12-04T17:40:54.000000Z"
        },
        {
            "id": 643,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18,
            "hg": 0,
            "conduct": 22,
            "od": 14,
            "ph": 9.03,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:40:54.000000Z",
            "updated_at": "2018-12-04T17:40:54.000000Z"
        },
        {
            "id": 644,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19,
            "hg": 0,
            "conduct": 11,
            "od": 6,
            "ph": 8.88,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:40:54.000000Z",
            "updated_at": "2018-12-04T17:40:54.000000Z"
        },
        {
            "id": 645,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18.65,
            "hg": 0,
            "conduct": 9.65,
            "od": 9.24,
            "ph": 7.84,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:40.000000Z",
            "updated_at": "2018-12-05T18:38:40.000000Z"
        },
        {
            "id": 646,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 16.25,
            "hg": 0,
            "conduct": 11,
            "od": 10.85,
            "ph": 5.69,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 647,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.14,
            "hg": 0,
            "conduct": 7.8,
            "od": 10.04,
            "ph": 6.85,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 648,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.25,
            "hg": 0,
            "conduct": 7.58,
            "od": 11.3,
            "ph": 7.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 649,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 16.44,
            "hg": 0,
            "conduct": 8.11,
            "od": 11.32,
            "ph": 8.24,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 650,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 16.95,
            "hg": 0,
            "conduct": 10.2,
            "od": 7.89,
            "ph": 8.01,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 651,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.14,
            "hg": 0,
            "conduct": 18.47,
            "od": 10.45,
            "ph": 9.01,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 652,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17.59,
            "hg": 0,
            "conduct": 7.58,
            "od": 13.25,
            "ph": 9.36,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:40.000000Z",
            "updated_at": "2018-12-05T18:38:40.000000Z"
        },
        {
            "id": 653,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19.89,
            "hg": 0,
            "conduct": 11.25,
            "od": 8.47,
            "ph": 9.87,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:40.000000Z",
            "updated_at": "2018-12-05T18:38:40.000000Z"
        },
        {
            "id": 654,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18,
            "hg": 0,
            "conduct": 14.56,
            "od": 9.25,
            "ph": 8.48,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:40.000000Z",
            "updated_at": "2018-12-05T18:38:40.000000Z"
        },
        {
            "id": 655,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.54,
            "hg": 0,
            "conduct": 10.11,
            "od": 6,
            "ph": 6.36,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:38.000000Z",
            "updated_at": "2018-12-05T18:45:38.000000Z"
        },
        {
            "id": 656,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19.25,
            "hg": 0,
            "conduct": 10.13,
            "od": 8.689,
            "ph": 4.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:39.000000Z",
            "updated_at": "2018-12-05T18:45:39.000000Z"
        },
        {
            "id": 657,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 19,
            "hg": 0,
            "conduct": 10,
            "od": 9.36,
            "ph": 5,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:39.000000Z",
            "updated_at": "2018-12-05T18:45:39.000000Z"
        },
        {
            "id": 658,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.89,
            "hg": 0,
            "conduct": 45.99,
            "od": 7.25,
            "ph": 7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:39.000000Z",
            "updated_at": "2018-12-05T18:45:39.000000Z"
        },
        {
            "id": 659,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16,
            "hg": 0,
            "conduct": 11.03,
            "od": 9,
            "ph": 4.44,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:39.000000Z",
            "updated_at": "2018-12-05T18:45:39.000000Z"
        },
        {
            "id": 660,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.45,
            "hg": 0,
            "conduct": 10,
            "od": 9.02,
            "ph": 5.24,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 661,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 15.25,
            "hg": 0,
            "conduct": 10.55,
            "od": 11.25,
            "ph": 7.44,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 662,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17,
            "hg": 0,
            "conduct": 19,
            "od": 11.25,
            "ph": 8.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 663,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17,
            "hg": 0,
            "conduct": 10,
            "od": 9.35,
            "ph": 8.32,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 664,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19,
            "hg": 0,
            "conduct": 16,
            "od": 11,
            "ph": 8.48,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 665,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.03,
            "hg": 0,
            "conduct": 22.04,
            "od": 10.05,
            "ph": 8.09,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 666,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17.56,
            "hg": 0,
            "conduct": 6.45,
            "od": 6.14,
            "ph": 8.07,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:35:55.000000Z",
            "updated_at": "2018-12-04T17:35:55.000000Z"
        },
        {
            "id": 667,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.24,
            "hg": 0,
            "conduct": 11,
            "od": 10,
            "ph": 4.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 668,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.87,
            "hg": 0,
            "conduct": 14,
            "od": 10,
            "ph": 6.02,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 669,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.15,
            "hg": 0,
            "conduct": 20,
            "od": 6,
            "ph": 6.75,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 670,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.3,
            "hg": 0,
            "conduct": 8,
            "od": 10,
            "ph": 5.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 671,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.02,
            "hg": 0,
            "conduct": 12,
            "od": 9,
            "ph": 5.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 672,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.48,
            "hg": 0,
            "conduct": 14,
            "od": 7,
            "ph": 9.56,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 673,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18,
            "hg": 0,
            "conduct": 14,
            "od": 10,
            "ph": 9.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 674,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19,
            "hg": 0,
            "conduct": 16,
            "od": 11,
            "ph": 8.81,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 675,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18.55,
            "hg": 0,
            "conduct": 20,
            "od": 8,
            "ph": 9.1,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:39:22.000000Z",
            "updated_at": "2018-12-04T17:39:22.000000Z"
        },
        {
            "id": 676,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.55,
            "hg": 0,
            "conduct": 16.25,
            "od": 8.31,
            "ph": 3.82,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:12:31.000000Z",
            "updated_at": "2019-01-25T23:12:31.000000Z"
        },
        {
            "id": 677,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 15.24,
            "hg": 0,
            "conduct": 12,
            "od": 8,
            "ph": 6.66,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 678,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 15.24,
            "hg": 0,
            "conduct": 15.55,
            "od": 6,
            "ph": 4.55,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 679,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.24,
            "hg": 0,
            "conduct": 16.54,
            "od": 7.58,
            "ph": 9.014,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 680,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.54,
            "hg": 0,
            "conduct": 10.65,
            "od": 7.89,
            "ph": 8.54,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 681,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 16.05,
            "hg": 0,
            "conduct": 7.89,
            "od": 10.25,
            "ph": 8.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 682,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17,
            "hg": 0,
            "conduct": 8.69,
            "od": 5.89,
            "ph": 6.178,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 683,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18,
            "hg": 0,
            "conduct": 6.89,
            "od": 13.36,
            "ph": 8.014,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 684,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.35,
            "hg": 0,
            "conduct": 8.65,
            "od": 10.24,
            "ph": 8.06,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 685,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19,
            "hg": 0,
            "conduct": 12.36,
            "od": 9.36,
            "ph": 8.26,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 686,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19.25,
            "hg": 0,
            "conduct": 10.24,
            "od": 8.69,
            "ph": 9.25,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:40.000000Z",
            "updated_at": "2018-12-05T18:38:40.000000Z"
        },
        {
            "id": 687,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18.24,
            "hg": 0,
            "conduct": 9.56,
            "od": 11.25,
            "ph": 9.47,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:40.000000Z",
            "updated_at": "2018-12-05T18:38:40.000000Z"
        },
        {
            "id": 688,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18,
            "hg": 0,
            "conduct": 9.99,
            "od": 11,
            "ph": 8,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:40:54.000000Z",
            "updated_at": "2018-12-04T17:40:54.000000Z"
        },
        {
            "id": 689,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19,
            "hg": 0,
            "conduct": 18,
            "od": 12,
            "ph": 9,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:40:54.000000Z",
            "updated_at": "2018-12-04T17:40:54.000000Z"
        },
        {
            "id": 690,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21,
            "hg": 0,
            "conduct": 10,
            "od": 10,
            "ph": 9.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:40:54.000000Z",
            "updated_at": "2018-12-04T17:40:54.000000Z"
        },
        {
            "id": 691,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18,
            "hg": 0,
            "conduct": 10,
            "od": 7,
            "ph": 7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:40:54.000000Z",
            "updated_at": "2018-12-04T17:40:54.000000Z"
        },
        {
            "id": 692,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18,
            "hg": 0,
            "conduct": 9.79,
            "od": 7,
            "ph": 5,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:38.000000Z",
            "updated_at": "2018-12-05T18:45:38.000000Z"
        },
        {
            "id": 693,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.25,
            "hg": 0,
            "conduct": 15.96,
            "od": 4.14,
            "ph": 4.88,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:39.000000Z",
            "updated_at": "2018-12-05T18:45:39.000000Z"
        },
        {
            "id": 694,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17,
            "hg": 0,
            "conduct": 10.68,
            "od": 8.7,
            "ph": 6.66,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:39.000000Z",
            "updated_at": "2018-12-05T18:45:39.000000Z"
        },
        {
            "id": 695,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.25,
            "hg": 0,
            "conduct": 10.56,
            "od": 8.58,
            "ph": 7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:39.000000Z",
            "updated_at": "2018-12-05T18:45:39.000000Z"
        },
        {
            "id": 696,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.56,
            "hg": 0,
            "conduct": 9.98,
            "od": 8.59,
            "ph": 6.56,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:39.000000Z",
            "updated_at": "2018-12-05T18:45:39.000000Z"
        },
        {
            "id": 697,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.12,
            "hg": 0,
            "conduct": 17.05,
            "od": 12,
            "ph": 6.35,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 698,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 16.24,
            "hg": 0,
            "conduct": 6.89,
            "od": 10.99,
            "ph": 6.85,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 699,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 16.58,
            "hg": 0,
            "conduct": 8.59,
            "od": 9.56,
            "ph": 8.02,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 700,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.56,
            "hg": 0,
            "conduct": 11.25,
            "od": 8.98,
            "ph": 6.014,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 701,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 16.06,
            "hg": 0,
            "conduct": 12.32,
            "od": 7.55,
            "ph": 8.01,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 702,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 14.22,
            "hg": 0,
            "conduct": 7.58,
            "od": 8,
            "ph": 6.54,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 703,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 16.25,
            "hg": 0,
            "conduct": 11.25,
            "od": 6.35,
            "ph": 8.04,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 704,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 16.89,
            "hg": 0,
            "conduct": 10.14,
            "od": 8,
            "ph": 8.06,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 705,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.48,
            "hg": 0,
            "conduct": 16,
            "od": 8,
            "ph": 7.55,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 706,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 16.35,
            "hg": 0,
            "conduct": 21,
            "od": 8.02,
            "ph": 6.04,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 707,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.25,
            "hg": 0,
            "conduct": 11,
            "od": 10,
            "ph": 9.32,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 708,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19,
            "hg": 0,
            "conduct": 22,
            "od": 10.01,
            "ph": 8.59,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 709,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 16.36,
            "hg": 0,
            "conduct": 14,
            "od": 7.89,
            "ph": 9,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 710,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18.25,
            "hg": 0,
            "conduct": 14.22,
            "od": 7.54,
            "ph": 9.03,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 711,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.45,
            "hg": 0,
            "conduct": 11.01,
            "od": 10.14,
            "ph": 7.39,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 712,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.02,
            "hg": 0,
            "conduct": 20.05,
            "od": 10.06,
            "ph": 8.09,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 713,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.45,
            "hg": 0,
            "conduct": 12.1,
            "od": 11.36,
            "ph": 8.98,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 714,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.24,
            "hg": 0,
            "conduct": 6.58,
            "od": 9.65,
            "ph": 8.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 715,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.54,
            "hg": 0,
            "conduct": 8.65,
            "od": 10.45,
            "ph": 7.68,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 716,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18.65,
            "hg": 0,
            "conduct": 14.25,
            "od": 10.25,
            "ph": 8.24,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 717,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18.69,
            "hg": 0,
            "conduct": 10.25,
            "od": 9.36,
            "ph": 9.24,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:40.000000Z",
            "updated_at": "2018-12-05T18:38:40.000000Z"
        },
        {
            "id": 718,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18.65,
            "hg": 0,
            "conduct": 10.25,
            "od": 6.32,
            "ph": 8.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:40.000000Z",
            "updated_at": "2018-12-05T18:38:40.000000Z"
        },
        {
            "id": 719,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18.33,
            "hg": 0,
            "conduct": 9.36,
            "od": 8.25,
            "ph": 8.25,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:40.000000Z",
            "updated_at": "2018-12-05T18:38:40.000000Z"
        },
        {
            "id": 720,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18.98,
            "hg": 0,
            "conduct": 9.55,
            "od": 10.24,
            "ph": 9.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:40.000000Z",
            "updated_at": "2018-12-05T18:38:40.000000Z"
        },
        {
            "id": 721,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18,
            "hg": 0,
            "conduct": 8.3,
            "od": 8,
            "ph": 10,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:40:54.000000Z",
            "updated_at": "2018-12-04T17:40:54.000000Z"
        },
        {
            "id": 722,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19.24,
            "hg": 0,
            "conduct": 8.54,
            "od": 14,
            "ph": 8.59,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:40.000000Z",
            "updated_at": "2018-12-05T18:38:40.000000Z"
        },
        {
            "id": 723,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.24,
            "hg": 0,
            "conduct": 7.85,
            "od": 6.02,
            "ph": 4.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 724,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.62,
            "hg": 0,
            "conduct": 6.89,
            "od": 10.35,
            "ph": 8.04,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 725,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17,
            "hg": 0,
            "conduct": 14.35,
            "od": 6.58,
            "ph": 7.048,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 726,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17,
            "hg": 0,
            "conduct": 10.12,
            "od": 11,
            "ph": 4,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:38.000000Z",
            "updated_at": "2018-12-05T18:45:38.000000Z"
        },
        {
            "id": 727,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.24,
            "hg": 0,
            "conduct": 9.88,
            "od": 8,
            "ph": 6,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:38.000000Z",
            "updated_at": "2018-12-05T18:45:38.000000Z"
        },
        {
            "id": 728,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.56,
            "hg": 0,
            "conduct": 8,
            "od": 11.14,
            "ph": 8.36,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:39.000000Z",
            "updated_at": "2018-12-05T18:45:39.000000Z"
        },
        {
            "id": 729,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16,
            "hg": 0,
            "conduct": 10.1,
            "od": 10.25,
            "ph": 6,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:39.000000Z",
            "updated_at": "2018-12-05T18:45:39.000000Z"
        },
        {
            "id": 730,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.56,
            "hg": 0,
            "conduct": 9.56,
            "od": 10.11,
            "ph": 5.54,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:39.000000Z",
            "updated_at": "2018-12-05T18:45:39.000000Z"
        },
        {
            "id": 731,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.74,
            "hg": 0,
            "conduct": 17.82,
            "od": 6.04,
            "ph": 6.03,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:18:46.000000Z",
            "updated_at": "2019-01-25T23:18:46.000000Z"
        },
        {
            "id": 732,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.04,
            "hg": 0,
            "conduct": 10.54,
            "od": 5.22,
            "ph": 7.09,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:18:46.000000Z",
            "updated_at": "2019-01-25T23:18:46.000000Z"
        },
        {
            "id": 733,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.56,
            "hg": 0,
            "conduct": 8.25,
            "od": 8.91,
            "ph": 7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:39.000000Z",
            "updated_at": "2018-12-05T18:45:39.000000Z"
        },
        {
            "id": 734,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.35,
            "hg": 0,
            "conduct": 16.32,
            "od": 8.93,
            "ph": 7.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:18:46.000000Z",
            "updated_at": "2019-01-25T23:18:46.000000Z"
        },
        {
            "id": 735,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 14.22,
            "hg": 0,
            "conduct": 18,
            "od": 7,
            "ph": 6.55,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 736,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 15.36,
            "hg": 0,
            "conduct": 16.98,
            "od": 11,
            "ph": 4.25,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 737,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 14.99,
            "hg": 0,
            "conduct": 17,
            "od": 7.54,
            "ph": 7.05,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 738,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.22,
            "hg": 0,
            "conduct": 17,
            "od": 6.5,
            "ph": 8.05,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 739,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 16.55,
            "hg": 0,
            "conduct": 15.25,
            "od": 8.66,
            "ph": 6.04,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 740,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17,
            "hg": 0,
            "conduct": 9.25,
            "od": 11,
            "ph": 7.04,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 741,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.45,
            "hg": 0,
            "conduct": 19.25,
            "od": 9,
            "ph": 6.11,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 742,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17,
            "hg": 0,
            "conduct": 16.27,
            "od": 8.58,
            "ph": 6.76,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 743,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.24,
            "hg": 0,
            "conduct": 16,
            "od": 7.89,
            "ph": 7.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 744,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.25,
            "hg": 0,
            "conduct": 11.69,
            "od": 11,
            "ph": 7.02,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 745,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19,
            "hg": 0,
            "conduct": 10.93,
            "od": 7.77,
            "ph": 7.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 746,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20,
            "hg": 0,
            "conduct": 12.53,
            "od": 6,
            "ph": 6.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 747,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.48,
            "hg": 0,
            "conduct": 11.24,
            "od": 7.4,
            "ph": 7.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 748,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17,
            "hg": 0,
            "conduct": 21,
            "od": 8.96,
            "ph": 8,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 749,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.14,
            "hg": 0,
            "conduct": 10,
            "od": 9.03,
            "ph": 8.91,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 750,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 20.01,
            "hg": 0,
            "conduct": 12,
            "od": 6.14,
            "ph": 8.01,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 751,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.99,
            "hg": 0,
            "conduct": 17,
            "od": 7,
            "ph": 7.88,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 752,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.69,
            "hg": 0,
            "conduct": 7.77,
            "od": 7.12,
            "ph": 8.78,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 753,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.11,
            "hg": 0,
            "conduct": 6.98,
            "od": 7.03,
            "ph": 8.99,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 754,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 16.25,
            "hg": 0,
            "conduct": 12,
            "od": 7.58,
            "ph": 7.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 755,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 16.25,
            "hg": 0,
            "conduct": 16,
            "od": 10.25,
            "ph": 8,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 756,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17.25,
            "hg": 0,
            "conduct": 11,
            "od": 8.65,
            "ph": 7.58,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 757,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18.65,
            "hg": 0,
            "conduct": 22,
            "od": 7.14,
            "ph": 8.23,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 758,
            "longitud": -73.953506,
            "latitud": 4.748996,
            "temperatura": 18,
            "hg": 11,
            "conduct": 2342,
            "od": 66,
            "ph": 13,
            "region_id": 6,
            "transfer_id": 1,
            "created_at": "2020-03-18T21:16:20.000000Z",
            "updated_at": "2020-03-18T21:16:20.000000Z"
        },
        {
            "id": 759,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.06,
            "hg": 0,
            "conduct": 14,
            "od": 9.03,
            "ph": 9.11,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-08-31T20:16:12.000000Z",
            "updated_at": "2018-08-31T20:16:12.000000Z"
        },
        {
            "id": 760,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.45,
            "hg": 0,
            "conduct": 7.02,
            "od": 9.45,
            "ph": 7.056,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 761,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18.25,
            "hg": 0,
            "conduct": 10.24,
            "od": 8.62,
            "ph": 7.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:39.000000Z",
            "updated_at": "2018-12-05T18:38:39.000000Z"
        },
        {
            "id": 762,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17.89,
            "hg": 0,
            "conduct": 8.15,
            "od": 7.58,
            "ph": 9.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:40.000000Z",
            "updated_at": "2018-12-05T18:38:40.000000Z"
        },
        {
            "id": 763,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19.54,
            "hg": 0,
            "conduct": 8.69,
            "od": 9.24,
            "ph": 9.36,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:40.000000Z",
            "updated_at": "2018-12-05T18:38:40.000000Z"
        },
        {
            "id": 764,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 20,
            "hg": 0,
            "conduct": 8.58,
            "od": 8.65,
            "ph": 8.36,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:40.000000Z",
            "updated_at": "2018-12-05T18:38:40.000000Z"
        },
        {
            "id": 765,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 16.24,
            "hg": 0,
            "conduct": 9.45,
            "od": 5,
            "ph": 6.54,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 766,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.24,
            "hg": 0,
            "conduct": 8.245,
            "od": 12.06,
            "ph": 7.01,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:36:14.000000Z",
            "updated_at": "2018-12-05T18:36:14.000000Z"
        },
        {
            "id": 767,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19.05,
            "hg": 0,
            "conduct": 12.14,
            "od": 8.23,
            "ph": 9.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:38:40.000000Z",
            "updated_at": "2018-12-05T18:38:40.000000Z"
        },
        {
            "id": 768,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17,
            "hg": 0,
            "conduct": 6.6,
            "od": 16,
            "ph": 7.86,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:40:54.000000Z",
            "updated_at": "2018-12-04T17:40:54.000000Z"
        },
        {
            "id": 769,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.56,
            "hg": 0,
            "conduct": 12,
            "od": 11,
            "ph": 7.25,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:38.000000Z",
            "updated_at": "2018-12-05T18:45:38.000000Z"
        },
        {
            "id": 770,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18,
            "hg": 0,
            "conduct": 8.95,
            "od": 5.65,
            "ph": 5,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:39.000000Z",
            "updated_at": "2018-12-05T18:45:39.000000Z"
        },
        {
            "id": 771,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.65,
            "hg": 0,
            "conduct": 12,
            "od": 8.36,
            "ph": 5.25,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:39.000000Z",
            "updated_at": "2018-12-05T18:45:39.000000Z"
        },
        {
            "id": 772,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.14,
            "hg": 0,
            "conduct": 10,
            "od": 6.9,
            "ph": 7.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:45:39.000000Z",
            "updated_at": "2018-12-05T18:45:39.000000Z"
        },
        {
            "id": 773,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.43,
            "hg": 0,
            "conduct": 18.25,
            "od": 10.56,
            "ph": 5.94,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:18:46.000000Z",
            "updated_at": "2019-01-25T23:18:46.000000Z"
        },
        {
            "id": 774,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.78,
            "hg": 0,
            "conduct": 9.44,
            "od": 7.23,
            "ph": 7.63,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:18:46.000000Z",
            "updated_at": "2019-01-25T23:18:46.000000Z"
        },
        {
            "id": 775,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.83,
            "hg": 0,
            "conduct": 8.95,
            "od": 9.34,
            "ph": 7.34,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:18:46.000000Z",
            "updated_at": "2019-01-25T23:18:46.000000Z"
        },
        {
            "id": 776,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.89,
            "hg": 0,
            "conduct": 9.7,
            "od": 9.28,
            "ph": 6.23,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:18:46.000000Z",
            "updated_at": "2019-01-25T23:18:46.000000Z"
        },
        {
            "id": 777,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.22,
            "hg": 0,
            "conduct": 7.58,
            "od": 8,
            "ph": 7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 778,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 15.22,
            "hg": 0,
            "conduct": 10.22,
            "od": 9,
            "ph": 7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 779,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 14.25,
            "hg": 0,
            "conduct": 10,
            "od": 6,
            "ph": 8.05,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 780,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.58,
            "hg": 0,
            "conduct": 8.22,
            "od": 10.22,
            "ph": 7.04,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 781,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.88,
            "hg": 0,
            "conduct": 11.25,
            "od": 7.89,
            "ph": 7.05,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 782,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.55,
            "hg": 0,
            "conduct": 10.14,
            "od": 8,
            "ph": 7.22,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 783,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.85,
            "hg": 0,
            "conduct": 10.24,
            "od": 11.25,
            "ph": 5.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 784,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19,
            "hg": 0,
            "conduct": 11,
            "od": 7,
            "ph": 8.55,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 785,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 16.25,
            "hg": 0,
            "conduct": 18.52,
            "od": 11,
            "ph": 7.01,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 786,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17.02,
            "hg": 0,
            "conduct": 12,
            "od": 11,
            "ph": 9,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 787,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18,
            "hg": 0,
            "conduct": 9,
            "od": 8.25,
            "ph": 9,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 788,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.36,
            "hg": 0,
            "conduct": 12.53,
            "od": 11,
            "ph": 6.98,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 789,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18,
            "hg": 0,
            "conduct": 11.01,
            "od": 8.25,
            "ph": 7.7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 790,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.56,
            "hg": 0,
            "conduct": 8.25,
            "od": 8.91,
            "ph": 7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 791,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.55,
            "hg": 0,
            "conduct": 18,
            "od": 9.01,
            "ph": 7.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 792,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.15,
            "hg": 0,
            "conduct": 11.25,
            "od": 8.78,
            "ph": 7.77,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 793,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.15,
            "hg": 0,
            "conduct": 9.28,
            "od": 9.27,
            "ph": 5.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 794,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.7,
            "hg": 0,
            "conduct": 11.14,
            "od": 7.4,
            "ph": 6.17,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 795,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 21.07,
            "hg": 0,
            "conduct": 8.58,
            "od": 6.17,
            "ph": 9.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 796,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 20.57,
            "hg": 0,
            "conduct": 14,
            "od": 7.12,
            "ph": 8.55,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 797,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.89,
            "hg": 0,
            "conduct": 8.56,
            "od": 7.93,
            "ph": 9.34,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 798,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.14,
            "hg": 0,
            "conduct": 14.2,
            "od": 6.36,
            "ph": 9.27,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 799,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.56,
            "hg": 0,
            "conduct": 16.35,
            "od": 7.34,
            "ph": 7.22,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 800,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 23,
            "hg": 0,
            "conduct": 12.33,
            "od": 6.17,
            "ph": 7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 801,
            "longitud": -72.8373655,
            "latitud": 10.9423336,
            "temperatura": 31.25,
            "hg": 0,
            "conduct": 4.95,
            "od": 7.436,
            "ph": 4.95,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-07-08T16:58:41.000000Z",
            "updated_at": "2019-07-08T16:58:41.000000Z"
        },
        {
            "id": 802,
            "longitud": -73.50493,
            "latitud": 5.47956,
            "temperatura": 21,
            "hg": 0,
            "conduct": 648,
            "od": 40.3,
            "ph": 9.31,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:16:24.000000Z",
            "updated_at": "2020-05-07T04:16:24.000000Z"
        },
        {
            "id": 803,
            "longitud": -73.5421,
            "latitud": 5.45502,
            "temperatura": 17,
            "hg": 0,
            "conduct": 9,
            "od": 33.7,
            "ph": 5.03,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 804,
            "longitud": -73.49792,
            "latitud": 5.46671,
            "temperatura": 13,
            "hg": 0,
            "conduct": 83,
            "od": 34.1,
            "ph": 6.97,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 805,
            "longitud": -73.52232,
            "latitud": 5.47803,
            "temperatura": 18,
            "hg": 0,
            "conduct": 2432,
            "od": 47.1,
            "ph": 3.31,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 806,
            "longitud": -73.49792,
            "latitud": 5.4667,
            "temperatura": 14,
            "hg": 0,
            "conduct": 83,
            "od": 33.7,
            "ph": 6.92,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 807,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.56,
            "hg": 0,
            "conduct": 9.85,
            "od": 8.34,
            "ph": 6.25,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:18:46.000000Z",
            "updated_at": "2019-01-25T23:18:46.000000Z"
        },
        {
            "id": 808,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 16.16,
            "hg": 0,
            "conduct": 6.83,
            "od": 10.26,
            "ph": 6.34,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:18:46.000000Z",
            "updated_at": "2019-01-25T23:18:46.000000Z"
        },
        {
            "id": 809,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.84,
            "hg": 0,
            "conduct": 7.12,
            "od": 11.78,
            "ph": 6.56,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:18:46.000000Z",
            "updated_at": "2019-01-25T23:18:46.000000Z"
        },
        {
            "id": 810,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 21.1,
            "hg": 0,
            "conduct": 12.6,
            "od": 14,
            "ph": 7.204,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-10-17T16:23:11.000000Z",
            "updated_at": "2018-10-17T16:23:11.000000Z"
        },
        {
            "id": 811,
            "longitud": -73.953506,
            "latitud": 4.748996,
            "temperatura": 30,
            "hg": 36,
            "conduct": 57,
            "od": 48,
            "ph": 1,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-11-22T12:28:57.000000Z",
            "updated_at": "2018-11-22T12:28:57.000000Z"
        },
        {
            "id": 812,
            "longitud": -73.953506,
            "latitud": 4.748996,
            "temperatura": 56,
            "hg": 100,
            "conduct": 4601,
            "od": 44,
            "ph": 2,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-11-22T12:28:57.000000Z",
            "updated_at": "2018-11-22T12:28:57.000000Z"
        },
        {
            "id": 813,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 16,
            "hg": 0,
            "conduct": 19.12,
            "od": 7.89,
            "ph": 7.38,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 814,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.54,
            "hg": 0,
            "conduct": 19.32,
            "od": 7.85,
            "ph": 7.08,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 815,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.25,
            "hg": 0,
            "conduct": 16,
            "od": 9.36,
            "ph": 6.5,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 816,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.14,
            "hg": 0,
            "conduct": 10,
            "od": 6.9,
            "ph": 7.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 817,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.4,
            "hg": 0,
            "conduct": 14.14,
            "od": 9.34,
            "ph": 6.36,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 818,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20,
            "hg": 0,
            "conduct": 12.25,
            "od": 9.22,
            "ph": 7.48,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 819,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.4,
            "hg": 0,
            "conduct": 8.58,
            "od": 9.38,
            "ph": 6.99,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 820,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.01,
            "hg": 0,
            "conduct": 17,
            "od": 7.22,
            "ph": 5.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 821,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.16,
            "hg": 0,
            "conduct": 16,
            "od": 6.86,
            "ph": 6.9,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 822,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19.65,
            "hg": 0,
            "conduct": 8,
            "od": 6.18,
            "ph": 8.04,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 823,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21,
            "hg": 0,
            "conduct": 9.36,
            "od": 8,
            "ph": 9.22,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 824,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 23.78,
            "hg": 0,
            "conduct": 11,
            "od": 5.89,
            "ph": 8.88,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 825,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.79,
            "hg": 0,
            "conduct": 7.56,
            "od": 10.83,
            "ph": 6.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:18:46.000000Z",
            "updated_at": "2019-01-25T23:18:46.000000Z"
        },
        {
            "id": 826,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.72,
            "hg": 0,
            "conduct": 9.52,
            "od": 11.18,
            "ph": 4.23,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:18:46.000000Z",
            "updated_at": "2019-01-25T23:18:46.000000Z"
        },
        {
            "id": 827,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 15.05,
            "hg": 0,
            "conduct": 8.88,
            "od": 8,
            "ph": 6.05,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 828,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 16.33,
            "hg": 0,
            "conduct": 16,
            "od": 8.35,
            "ph": 7.04,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 829,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.58,
            "hg": 0,
            "conduct": 10.36,
            "od": 9,
            "ph": 8.36,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 830,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.25,
            "hg": 0,
            "conduct": 10.25,
            "od": 8.62,
            "ph": 9.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 831,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.58,
            "hg": 0,
            "conduct": 20,
            "od": 7.15,
            "ph": 7.04,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 832,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18,
            "hg": 0,
            "conduct": 19,
            "od": 12,
            "ph": 7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 833,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18.36,
            "hg": 0,
            "conduct": 9,
            "od": 10,
            "ph": 9.01,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 834,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18.25,
            "hg": 0,
            "conduct": 14,
            "od": 9.32,
            "ph": 6.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 835,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17.56,
            "hg": 0,
            "conduct": 13,
            "od": 8.01,
            "ph": 8.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:38:22.000000Z",
            "updated_at": "2019-01-25T23:38:22.000000Z"
        },
        {
            "id": 836,
            "longitud": -72.8373655,
            "latitud": 10.9423336,
            "temperatura": 31.94,
            "hg": 0,
            "conduct": 4.95,
            "od": 7.275,
            "ph": 10.81,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-07-08T16:58:41.000000Z",
            "updated_at": "2019-07-08T16:58:41.000000Z"
        },
        {
            "id": 837,
            "longitud": -72.5084375,
            "latitud": 11.176378,
            "temperatura": 30.12,
            "hg": 0,
            "conduct": 5.01,
            "od": 7.183,
            "ph": 6.77,
            "region_id": 4,
            "transfer_id": 1,
            "created_at": "2019-07-08T16:58:41.000000Z",
            "updated_at": "2019-07-08T16:58:41.000000Z"
        },
        {
            "id": 838,
            "longitud": -73.5421,
            "latitud": 5.45503,
            "temperatura": 17,
            "hg": 0,
            "conduct": 9,
            "od": 33.1,
            "ph": 5.43,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 839,
            "longitud": -73.5421,
            "latitud": 5.45503,
            "temperatura": 17,
            "hg": 0,
            "conduct": 9,
            "od": 33.8,
            "ph": 5.01,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 840,
            "longitud": -73.54258,
            "latitud": 5.45538,
            "temperatura": 20,
            "hg": 0,
            "conduct": 9,
            "od": 39.1,
            "ph": 5,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 841,
            "longitud": -73.54258,
            "latitud": 5.45538,
            "temperatura": 20,
            "hg": 0,
            "conduct": 9,
            "od": 39.3,
            "ph": 4.99,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 842,
            "longitud": -73.51252,
            "latitud": 5.47007,
            "temperatura": 18,
            "hg": 0,
            "conduct": 2792,
            "od": 40.7,
            "ph": 3.48,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 843,
            "longitud": -73.49792,
            "latitud": 5.4667,
            "temperatura": 14,
            "hg": 0,
            "conduct": 84,
            "od": 35.4,
            "ph": 6.89,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 844,
            "longitud": -73.50513,
            "latitud": 5.48036,
            "temperatura": 22,
            "hg": 0,
            "conduct": 326,
            "od": 25.4,
            "ph": 6.56,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 845,
            "longitud": -73.50514,
            "latitud": 5.48035,
            "temperatura": 21,
            "hg": 0,
            "conduct": 327,
            "od": 26.1,
            "ph": 6.52,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 846,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19,
            "hg": 0,
            "conduct": 11.16,
            "od": 6.95,
            "ph": 7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 847,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.96,
            "hg": 0,
            "conduct": 10.93,
            "od": 8.98,
            "ph": 7.1,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 848,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.24,
            "hg": 0,
            "conduct": 12.46,
            "od": 12.01,
            "ph": 5.6,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 849,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.25,
            "hg": 0,
            "conduct": 11.16,
            "od": 11,
            "ph": 7.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 850,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.36,
            "hg": 0,
            "conduct": 12,
            "od": 7,
            "ph": 6.67,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 851,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18,
            "hg": 0,
            "conduct": 12.46,
            "od": 11,
            "ph": 6.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 852,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.19,
            "hg": 0,
            "conduct": 14,
            "od": 11.02,
            "ph": 7.03,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 853,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18,
            "hg": 0,
            "conduct": 10.14,
            "od": 8.95,
            "ph": 5.56,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 854,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 20.47,
            "hg": 0,
            "conduct": 19,
            "od": 6.45,
            "ph": 9.65,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 855,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.11,
            "hg": 0,
            "conduct": 6.14,
            "od": 7.14,
            "ph": 8.88,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 856,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 23.62,
            "hg": 0,
            "conduct": 13.2,
            "od": 7.48,
            "ph": 8.95,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 857,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.24,
            "hg": 0,
            "conduct": 22.24,
            "od": 6.99,
            "ph": 6.86,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 858,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22,
            "hg": 0,
            "conduct": 18.53,
            "od": 5.14,
            "ph": 9.03,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 859,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 23.98,
            "hg": 0,
            "conduct": 17.45,
            "od": 5.56,
            "ph": 8.24,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 860,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.67,
            "hg": 0,
            "conduct": 6.85,
            "od": 9.23,
            "ph": 5.44,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:18:46.000000Z",
            "updated_at": "2019-01-25T23:18:46.000000Z"
        },
        {
            "id": 861,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.65,
            "hg": 0,
            "conduct": 6.15,
            "od": 8.59,
            "ph": 5.13,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:18:46.000000Z",
            "updated_at": "2019-01-25T23:18:46.000000Z"
        },
        {
            "id": 862,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.83,
            "hg": 0,
            "conduct": 10.64,
            "od": 10,
            "ph": 4.23,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:18:46.000000Z",
            "updated_at": "2019-01-25T23:18:46.000000Z"
        },
        {
            "id": 863,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.93,
            "hg": 0,
            "conduct": 10.1,
            "od": 10.03,
            "ph": 6.34,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:18:46.000000Z",
            "updated_at": "2019-01-25T23:18:46.000000Z"
        },
        {
            "id": 864,
            "longitud": -73.953506,
            "latitud": 4.748996,
            "temperatura": 18,
            "hg": 11,
            "conduct": 2342,
            "od": 66,
            "ph": 13,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-03-06T20:34:09.000000Z",
            "updated_at": "2019-03-06T20:34:09.000000Z"
        },
        {
            "id": 865,
            "longitud": -72.8373655,
            "latitud": 10.9423336,
            "temperatura": 32.63,
            "hg": 0,
            "conduct": 4.95,
            "od": 7.367,
            "ph": 8.13,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-07-08T16:58:41.000000Z",
            "updated_at": "2019-07-08T16:58:41.000000Z"
        },
        {
            "id": 866,
            "longitud": -73.54214,
            "latitud": 5.45502,
            "temperatura": 18,
            "hg": 0,
            "conduct": 9,
            "od": 32.8,
            "ph": 5.66,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 867,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.24,
            "hg": 0,
            "conduct": 16.87,
            "od": 8.63,
            "ph": 3.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 868,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.37,
            "hg": 0,
            "conduct": 6.78,
            "od": 8,
            "ph": 5.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 869,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18,
            "hg": 0,
            "conduct": 10.78,
            "od": 4.583,
            "ph": 4,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 870,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.12,
            "hg": 0,
            "conduct": 8.45,
            "od": 9.15,
            "ph": 7.14,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 871,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18,
            "hg": 0,
            "conduct": 16.17,
            "od": 8.46,
            "ph": 7.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 872,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.01,
            "hg": 0,
            "conduct": 19.42,
            "od": 8.4,
            "ph": 5.87,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 873,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.01,
            "hg": 0,
            "conduct": 9.88,
            "od": 7,
            "ph": 6.98,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 874,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.89,
            "hg": 0,
            "conduct": 18.45,
            "od": 10.21,
            "ph": 7.81,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 875,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18.78,
            "hg": 0,
            "conduct": 18,
            "od": 8.63,
            "ph": 8.99,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 876,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17.89,
            "hg": 0,
            "conduct": 12.78,
            "od": 9.01,
            "ph": 8.15,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 877,
            "longitud": -73.5421,
            "latitud": 5.45502,
            "temperatura": 17,
            "hg": 0,
            "conduct": 9,
            "od": 33.7,
            "ph": 5.04,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 878,
            "longitud": -73.49792,
            "latitud": 5.46671,
            "temperatura": 13,
            "hg": 0,
            "conduct": 83,
            "od": 34,
            "ph": 6.99,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 879,
            "longitud": -73.49792,
            "latitud": 5.46671,
            "temperatura": 13,
            "hg": 0,
            "conduct": 83,
            "od": 34,
            "ph": 6.99,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 880,
            "longitud": -73.51252,
            "latitud": 5.47007,
            "temperatura": 18,
            "hg": 0,
            "conduct": 2793,
            "od": 40.7,
            "ph": 3.47,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 881,
            "longitud": -73.50742,
            "latitud": 5.48027,
            "temperatura": 22,
            "hg": 0,
            "conduct": 385,
            "od": 28.2,
            "ph": 6.69,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 882,
            "longitud": -73.50493,
            "latitud": 5.47956,
            "temperatura": 21,
            "hg": 0,
            "conduct": 644,
            "od": 40.2,
            "ph": 9.33,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 883,
            "longitud": -73.50493,
            "latitud": 5.47956,
            "temperatura": 21,
            "hg": 0,
            "conduct": 648,
            "od": 40.3,
            "ph": 9.31,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 884,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 14.25,
            "hg": 0,
            "conduct": 7.88,
            "od": 8.58,
            "ph": 6.58,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 885,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.25,
            "hg": 0,
            "conduct": 12,
            "od": 12.04,
            "ph": 7.6,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 886,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 20.12,
            "hg": 0,
            "conduct": 11.69,
            "od": 8,
            "ph": 5.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 887,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.24,
            "hg": 0,
            "conduct": 12,
            "od": 9.12,
            "ph": 6.23,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 888,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.14,
            "hg": 0,
            "conduct": 14.24,
            "od": 9.17,
            "ph": 7.93,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 889,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.18,
            "hg": 0,
            "conduct": 16,
            "od": 8.99,
            "ph": 7.34,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 890,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.67,
            "hg": 0,
            "conduct": 9,
            "od": 8,
            "ph": 7.4,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 891,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.5,
            "hg": 0,
            "conduct": 14,
            "od": 5.56,
            "ph": 8.01,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 892,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 21.44,
            "hg": 0,
            "conduct": 8.24,
            "od": 6.23,
            "ph": 9,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 893,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 22.14,
            "hg": 0,
            "conduct": 14.2,
            "od": 7.77,
            "ph": 7.4,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-05T18:51:01.000000Z",
            "updated_at": "2018-12-05T18:51:01.000000Z"
        },
        {
            "id": 894,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.75,
            "hg": 0,
            "conduct": 10.83,
            "od": 5.34,
            "ph": 7.84,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:18:46.000000Z",
            "updated_at": "2019-01-25T23:18:46.000000Z"
        },
        {
            "id": 895,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.73,
            "hg": 0,
            "conduct": 19.83,
            "od": 5.3,
            "ph": 7.21,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:18:46.000000Z",
            "updated_at": "2019-01-25T23:18:46.000000Z"
        },
        {
            "id": 896,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.72,
            "hg": 0,
            "conduct": 17.72,
            "od": 13,
            "ph": 6.23,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:18:46.000000Z",
            "updated_at": "2019-01-25T23:18:46.000000Z"
        },
        {
            "id": 897,
            "longitud": -72.5084375,
            "latitud": 11.176378,
            "temperatura": 30.87,
            "hg": 0,
            "conduct": 4.9,
            "od": 7.051,
            "ph": 9.34,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-07-08T16:58:41.000000Z",
            "updated_at": "2019-07-08T16:58:41.000000Z"
        },
        {
            "id": 898,
            "longitud": -73.55224,
            "latitud": 5.44418,
            "temperatura": 18,
            "hg": 0,
            "conduct": 8,
            "od": 29,
            "ph": 5.77,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-04-27T06:22:10.000000Z",
            "updated_at": "2020-04-27T06:22:10.000000Z"
        },
        {
            "id": 899,
            "longitud": -73.54258,
            "latitud": 5.45538,
            "temperatura": 20,
            "hg": 0,
            "conduct": 9,
            "od": 39.5,
            "ph": 4.96,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 900,
            "longitud": -73.51252,
            "latitud": 5.47007,
            "temperatura": 18,
            "hg": 0,
            "conduct": 2801,
            "od": 40.6,
            "ph": 3.48,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 901,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.21,
            "hg": 0,
            "conduct": 14,
            "od": 10,
            "ph": 5.76,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 902,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.87,
            "hg": 0,
            "conduct": 18.37,
            "od": 10.11,
            "ph": 5.02,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 903,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 18.26,
            "hg": 0,
            "conduct": 17.88,
            "od": 7.89,
            "ph": 6.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 904,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.15,
            "hg": 0,
            "conduct": 19.06,
            "od": 5.45,
            "ph": 7.75,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 905,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.11,
            "hg": 0,
            "conduct": 7.01,
            "od": 11.12,
            "ph": 6.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 906,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19.41,
            "hg": 0,
            "conduct": 9.14,
            "od": 9.36,
            "ph": 6.35,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 907,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.02,
            "hg": 0,
            "conduct": 17.21,
            "od": 9.41,
            "ph": 6.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 908,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.45,
            "hg": 0,
            "conduct": 22.04,
            "od": 7.88,
            "ph": 7.45,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 909,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 16.26,
            "hg": 0,
            "conduct": 8.98,
            "od": 10,
            "ph": 7.75,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 910,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.56,
            "hg": 0,
            "conduct": 18.3,
            "od": 13,
            "ph": 8.56,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 911,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19,
            "hg": 0,
            "conduct": 24.14,
            "od": 8.95,
            "ph": 8.1,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 912,
            "longitud": -73.52232,
            "latitud": 5.47803,
            "temperatura": 18,
            "hg": 0,
            "conduct": 2430,
            "od": 46.7,
            "ph": 3.32,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 913,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.13,
            "hg": 0,
            "conduct": 17.14,
            "od": 7.76,
            "ph": 8.67,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 914,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.94,
            "hg": 0,
            "conduct": 17.96,
            "od": 8.34,
            "ph": 6.32,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 915,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.56,
            "hg": 0,
            "conduct": 18.12,
            "od": 10.73,
            "ph": 7.34,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 916,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19.24,
            "hg": 0,
            "conduct": 8.84,
            "od": 9.63,
            "ph": 9.99,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 917,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 16.96,
            "hg": 0,
            "conduct": 7.86,
            "od": 8.73,
            "ph": 8.35,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 918,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 18.53,
            "hg": 0,
            "conduct": 14.5,
            "od": 10.24,
            "ph": 9.08,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 919,
            "longitud": -75.683997,
            "latitud": 10.141092,
            "temperatura": 27.12,
            "hg": 0,
            "conduct": 868.64,
            "od": 6.5,
            "ph": 8.633,
            "region_id": 6,
            "transfer_id": 1,
            "created_at": "2019-07-15T16:38:19.000000Z",
            "updated_at": "2019-07-15T16:38:19.000000Z"
        },
        {
            "id": 920,
            "longitud": -75.683997,
            "latitud": 10.141092,
            "temperatura": 29.06,
            "hg": 0,
            "conduct": 2223.59,
            "od": 7.7,
            "ph": 7.74,
            "region_id": 6,
            "transfer_id": 1,
            "created_at": "2019-07-15T16:38:19.000000Z",
            "updated_at": "2019-07-15T16:38:19.000000Z"
        },
        {
            "id": 921,
            "longitud": -73.52232,
            "latitud": 5.47802,
            "temperatura": 18,
            "hg": 0,
            "conduct": 2311,
            "od": 46.9,
            "ph": 3.32,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 922,
            "longitud": -73.49794,
            "latitud": 5.46669,
            "temperatura": 14,
            "hg": 0,
            "conduct": 83,
            "od": 33.4,
            "ph": 6.83,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 923,
            "longitud": -73.50742,
            "latitud": 5.48028,
            "temperatura": 22,
            "hg": 0,
            "conduct": 384,
            "od": 28.2,
            "ph": 6.65,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 924,
            "longitud": -73.50514,
            "latitud": 5.48035,
            "temperatura": 22,
            "hg": 0,
            "conduct": 329,
            "od": 31.4,
            "ph": 6.48,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 925,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.06,
            "hg": 0,
            "conduct": 6,
            "od": 9.36,
            "ph": 6.58,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 926,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.17,
            "hg": 0,
            "conduct": 8.98,
            "od": 10.14,
            "ph": 6.39,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 927,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17,
            "hg": 0,
            "conduct": 10.78,
            "od": 5.65,
            "ph": 7.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 928,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.03,
            "hg": 0,
            "conduct": 9.31,
            "od": 7.89,
            "ph": 7.01,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 929,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.36,
            "hg": 0,
            "conduct": 4.98,
            "od": 10.25,
            "ph": 6.99,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 930,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.3,
            "hg": 0,
            "conduct": 20.75,
            "od": 8.15,
            "ph": 7.92,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 931,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20,
            "hg": 0,
            "conduct": 10.14,
            "od": 6.66,
            "ph": 8.51,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 932,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18,
            "hg": 0,
            "conduct": 10.78,
            "od": 9.19,
            "ph": 9,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 933,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.58,
            "hg": 0,
            "conduct": 8,
            "od": 10.12,
            "ph": 8.78,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 934,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.92,
            "hg": 0,
            "conduct": 15.95,
            "od": 9.73,
            "ph": 8.56,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 935,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17.96,
            "hg": 0,
            "conduct": 12.23,
            "od": 9.03,
            "ph": 6.36,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 936,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17.73,
            "hg": 0,
            "conduct": 6.15,
            "od": 6.86,
            "ph": 8.67,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 937,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 20.04,
            "hg": 0,
            "conduct": 10.29,
            "od": 8.67,
            "ph": 8.35,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 938,
            "longitud": -75.683997,
            "latitud": 10.141092,
            "temperatura": 28.19,
            "hg": 0,
            "conduct": 1091.23,
            "od": 10.62,
            "ph": 7.727,
            "region_id": 6,
            "transfer_id": 1,
            "created_at": "2019-07-15T16:38:19.000000Z",
            "updated_at": "2019-07-15T16:38:19.000000Z"
        },
        {
            "id": 939,
            "longitud": -73.50513,
            "latitud": 5.48035,
            "temperatura": 21,
            "hg": 0,
            "conduct": 326,
            "od": 25,
            "ph": 6.54,
            "region_id": 7,
            "transfer_id": 1,
            "created_at": "2020-05-07T04:27:38.000000Z",
            "updated_at": "2020-05-07T04:27:38.000000Z"
        },
        {
            "id": 940,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17,
            "hg": 0,
            "conduct": 9.65,
            "od": 9.15,
            "ph": 4.08,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 941,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.15,
            "hg": 0,
            "conduct": 9.88,
            "od": 8,
            "ph": 6.46,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 942,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.14,
            "hg": 0,
            "conduct": 17.89,
            "od": 6.48,
            "ph": 6.67,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 943,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 16.14,
            "hg": 0,
            "conduct": 6.47,
            "od": 10.56,
            "ph": 6.22,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 944,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 17.14,
            "hg": 0,
            "conduct": 10.11,
            "od": 5.89,
            "ph": 7,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 945,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.02,
            "hg": 0,
            "conduct": 7.89,
            "od": 10.06,
            "ph": 6.99,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 946,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.33,
            "hg": 0,
            "conduct": 7.88,
            "od": 7.89,
            "ph": 8.56,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 947,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.04,
            "hg": 0,
            "conduct": 10,
            "od": 9.14,
            "ph": 6.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 948,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19,
            "hg": 0,
            "conduct": 17.88,
            "od": 10.14,
            "ph": 6.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 949,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.14,
            "hg": 0,
            "conduct": 15.96,
            "od": 9.88,
            "ph": 8.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 950,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.14,
            "hg": 0,
            "conduct": 10,
            "od": 6.66,
            "ph": 9.22,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 951,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 19.12,
            "hg": 0,
            "conduct": 8.99,
            "od": 9.36,
            "ph": 9.27,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 952,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.54,
            "hg": 0,
            "conduct": 20.77,
            "od": 8.23,
            "ph": 7.23,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 953,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 20.23,
            "hg": 0,
            "conduct": 10.83,
            "od": 6.34,
            "ph": 8.34,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 954,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 18.73,
            "hg": 0,
            "conduct": 22.45,
            "od": 7.95,
            "ph": 7.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 955,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 17.98,
            "hg": 0,
            "conduct": 18.83,
            "od": 13.83,
            "ph": 8.4,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 956,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17.84,
            "hg": 0,
            "conduct": 7.23,
            "od": 10.84,
            "ph": 9.23,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 957,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 16.16,
            "hg": 0,
            "conduct": 12.96,
            "od": 9.17,
            "ph": 6.87,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2019-01-25T23:24:29.000000Z",
            "updated_at": "2019-01-25T23:24:29.000000Z"
        },
        {
            "id": 958,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.89,
            "hg": 0,
            "conduct": 16.14,
            "od": 10.14,
            "ph": 3.38,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 959,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.45,
            "hg": 0,
            "conduct": 20.75,
            "od": 8.95,
            "ph": 5.12,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 960,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 16.88,
            "hg": 0,
            "conduct": 6.45,
            "od": 9.36,
            "ph": 5.1,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 961,
            "longitud": -74.065282,
            "latitud": 4.603333,
            "temperatura": 17.24,
            "hg": 0,
            "conduct": 8.45,
            "od": 8.14,
            "ph": 6.89,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:11.000000Z",
            "updated_at": "2018-12-04T17:34:11.000000Z"
        },
        {
            "id": 962,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 18.65,
            "hg": 0,
            "conduct": 10.11,
            "od": 10.25,
            "ph": 6.98,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 963,
            "longitud": -74.067635,
            "latitud": 4.601806,
            "temperatura": 19,
            "hg": 0,
            "conduct": 9.36,
            "od": 11,
            "ph": 4.87,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 964,
            "longitud": -74.070932,
            "latitud": 4.60065,
            "temperatura": 19.13,
            "hg": 0,
            "conduct": 9.19,
            "od": 9.01,
            "ph": 6.67,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        },
        {
            "id": 965,
            "longitud": -74.072422,
            "latitud": 4.600916,
            "temperatura": 17.45,
            "hg": 0,
            "conduct": 7,
            "od": 10.14,
            "ph": 9.38,
            "region_id": 1,
            "transfer_id": 1,
            "created_at": "2018-12-04T17:34:12.000000Z",
            "updated_at": "2018-12-04T17:34:12.000000Z"
        }
    ],
    "message": "Retrieved successfully"
}
```

### HTTP Request
`GET api/registro`


<!-- END_ad533a78ac1488c81b7166c7ba0e4137 -->

<!-- START_7a70a1e04f326ca03c4eb4f41c82d1cd -->
## Almacena un nuevo registro

> Example request:

```bash
curl -X POST \
    "https://monitoreo.test/api/registro" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"longitud":4.12,"latitud":-74.105001,"temperatura":15.2,"hg":0,"conduct":4.5,"od":6,"ph":4.5,"region_id":2}'

```

```javascript
const url = new URL(
    "https://monitoreo.test/api/registro"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "longitud": 4.12,
    "latitud": -74.105001,
    "temperatura": 15.2,
    "hg": 0,
    "conduct": 4.5,
    "od": 6,
    "ph": 4.5,
    "region_id": 2
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/api/registro'
payload = {
    "longitud": 4.12,
    "latitud": -74.105001,
    "temperatura": 15.2,
    "hg": 0,
    "conduct": 4.5,
    "od": 6,
    "ph": 4.5,
    "region_id": 2
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```



### HTTP Request
`POST api/registro`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `longitud` | float |  required  | Longitud de la ubicación.
        `latitud` | float |  required  | Latitud de la ubicación.
        `temperatura` | float |  required  | PH del agua.
        `hg` | float |  required  | PH del agua.
        `conduct` | float |  required  | PH del agua.
        `od` | float |  required  | PH del agua.
        `ph` | float |  required  | PH del agua.
        `region_id` | integer |  required  | PH del agua.
    
<!-- END_7a70a1e04f326ca03c4eb4f41c82d1cd -->

#general


<!-- START_cd4a874127cd23508641c63b640ee838 -->
## doc.json
> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/doc.json" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/doc.json"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/doc.json'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET doc.json`


<!-- END_cd4a874127cd23508641c63b640ee838 -->

<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/oauth/authorize'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/authorize`


<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST \
    "https://monitoreo.test/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/oauth/authorize'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()
```



### HTTP Request
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE \
    "https://monitoreo.test/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/oauth/authorize'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()
```



### HTTP Request
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST \
    "https://monitoreo.test/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/oauth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/oauth/token'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()
```



### HTTP Request
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/oauth/tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/oauth/tokens'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "https://monitoreo.test/oauth/tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/oauth/tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/oauth/tokens/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()
```



### HTTP Request
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST \
    "https://monitoreo.test/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/oauth/token/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/oauth/token/refresh'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()
```



### HTTP Request
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/oauth/clients'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/clients`


<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST \
    "https://monitoreo.test/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/oauth/clients'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()
```



### HTTP Request
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT \
    "https://monitoreo.test/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/oauth/clients/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()
```



### HTTP Request
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE \
    "https://monitoreo.test/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/oauth/clients/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()
```



### HTTP Request
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/oauth/scopes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/oauth/scopes'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/scopes`


<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->

<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/oauth/personal-access-tokens'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/personal-access-tokens`


<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST \
    "https://monitoreo.test/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/oauth/personal-access-tokens'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()
```



### HTTP Request
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "https://monitoreo.test/oauth/personal-access-tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/oauth/personal-access-tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/oauth/personal-access-tokens/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()
```



### HTTP Request
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## api/register
> Example request:

```bash
curl -X POST \
    "https://monitoreo.test/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/api/register'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()
```



### HTTP Request
`POST api/register`


<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## api/login
> Example request:

```bash
curl -X POST \
    "https://monitoreo.test/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/api/login'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()
```



### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/login'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "https://monitoreo.test/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/login'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "https://monitoreo.test/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/logout'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/register'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "https://monitoreo.test/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/register'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/password/reset'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "https://monitoreo.test/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/password/email'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/password/reset/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "https://monitoreo.test/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/password/reset'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_b77aedc454e9471a35dcb175278ec997 -->
## Display the password confirmation view.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/password/confirm'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET password/confirm`


<!-- END_b77aedc454e9471a35dcb175278ec997 -->

<!-- START_54462d3613f2262e741142161c0e6fea -->
## Confirm the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "https://monitoreo.test/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/password/confirm'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()
```



### HTTP Request
`POST password/confirm`


<!-- END_54462d3613f2262e741142161c0e6fea -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/home'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->

<!-- START_2b36f1b73c9eda5cf69a782b11bb3038 -->
## registro/import
> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/registro/import" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/registro/import"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/registro/import'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET registro/import`


<!-- END_2b36f1b73c9eda5cf69a782b11bb3038 -->

<!-- START_398910ff8e70eaa895b75f22e28b3d98 -->
## registro/import
> Example request:

```bash
curl -X POST \
    "https://monitoreo.test/registro/import" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/registro/import"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/registro/import'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()
```



### HTTP Request
`POST registro/import`


<!-- END_398910ff8e70eaa895b75f22e28b3d98 -->

<!-- START_9354ca3357b10c66a5cd7d5c7ae2f025 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/registro" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/registro"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/registro'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET registro`


<!-- END_9354ca3357b10c66a5cd7d5c7ae2f025 -->

<!-- START_9757048bd11590c350406fb64c9490a6 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/registro/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/registro/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/registro/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET registro/create`


<!-- END_9757048bd11590c350406fb64c9490a6 -->

<!-- START_8cb6b3d0188a7284da91effe95eb2bf6 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "https://monitoreo.test/registro" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/registro"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/registro'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()
```



### HTTP Request
`POST registro`


<!-- END_8cb6b3d0188a7284da91effe95eb2bf6 -->

<!-- START_d8d697de073943446326f050a7421b39 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/registro/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/registro/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/registro/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET registro/{registro}`


<!-- END_d8d697de073943446326f050a7421b39 -->

<!-- START_5ce759ee36c1f7d55fac09fdf2943f92 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/registro/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/registro/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/registro/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET registro/{registro}/edit`


<!-- END_5ce759ee36c1f7d55fac09fdf2943f92 -->

<!-- START_33faeb2cbc6a06fe66454008c35bb6f4 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "https://monitoreo.test/registro/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/registro/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/registro/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()
```



### HTTP Request
`PUT registro/{registro}`

`PATCH registro/{registro}`


<!-- END_33faeb2cbc6a06fe66454008c35bb6f4 -->

<!-- START_a0a4ff555de632e73b7e0665b6643159 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "https://monitoreo.test/registro/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/registro/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/registro/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()
```



### HTTP Request
`DELETE registro/{registro}`


<!-- END_a0a4ff555de632e73b7e0665b6643159 -->

<!-- START_ac431eb196a0bb8538d6b8ab9823c297 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/region" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/region"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/region'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET region`


<!-- END_ac431eb196a0bb8538d6b8ab9823c297 -->

<!-- START_fe38e1fb35fcf36012950e17b3acf522 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/region/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/region/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/region/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET region/create`


<!-- END_fe38e1fb35fcf36012950e17b3acf522 -->

<!-- START_2526a7f27a6ef51bd32f6d97b18f7c6c -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "https://monitoreo.test/region" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/region"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/region'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()
```



### HTTP Request
`POST region`


<!-- END_2526a7f27a6ef51bd32f6d97b18f7c6c -->

<!-- START_3d8f3372d85652cfadce26401be1c132 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/region/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/region/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/region/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET region/{region}`


<!-- END_3d8f3372d85652cfadce26401be1c132 -->

<!-- START_45c4abcc0fae4435fdea997beccfcd51 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/region/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/region/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/region/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET region/{region}/edit`


<!-- END_45c4abcc0fae4435fdea997beccfcd51 -->

<!-- START_338953968a637be6e5c7f990df2b1e5e -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "https://monitoreo.test/region/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/region/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/region/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()
```



### HTTP Request
`PUT region/{region}`

`PATCH region/{region}`


<!-- END_338953968a637be6e5c7f990df2b1e5e -->

<!-- START_4506d8f227ca2abde8f712d85c885d33 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "https://monitoreo.test/region/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/region/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/region/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()
```



### HTTP Request
`DELETE region/{region}`


<!-- END_4506d8f227ca2abde8f712d85c885d33 -->

<!-- START_0e4b7362e192c53e3a357313e90094dc -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/celular" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/celular"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/celular'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET celular`


<!-- END_0e4b7362e192c53e3a357313e90094dc -->

<!-- START_d3bd37f9fa7a3c87f23b902f857a2969 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/celular/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/celular/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/celular/create'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET celular/create`


<!-- END_d3bd37f9fa7a3c87f23b902f857a2969 -->

<!-- START_f4d4dfc6f86102980a2764e7f200f31c -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "https://monitoreo.test/celular" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/celular"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/celular'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('POST', url, headers=headers)
response.json()
```



### HTTP Request
`POST celular`


<!-- END_f4d4dfc6f86102980a2764e7f200f31c -->

<!-- START_5883e82e1132c6cc66d2b6283054abcf -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/celular/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/celular/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/celular/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET celular/{celular}`


<!-- END_5883e82e1132c6cc66d2b6283054abcf -->

<!-- START_447a7a5d3b02eb66225235a2cb069ac8 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/celular/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/celular/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/celular/1/edit'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET celular/{celular}/edit`


<!-- END_447a7a5d3b02eb66225235a2cb069ac8 -->

<!-- START_4367ef31030413f15d16fd358a2efd80 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "https://monitoreo.test/celular/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/celular/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/celular/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()
```



### HTTP Request
`PUT celular/{celular}`

`PATCH celular/{celular}`


<!-- END_4367ef31030413f15d16fd358a2efd80 -->

<!-- START_344642e807964a8a4cb616242581c233 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "https://monitoreo.test/celular/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/celular/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/celular/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('DELETE', url, headers=headers)
response.json()
```



### HTTP Request
`DELETE celular/{celular}`


<!-- END_344642e807964a8a4cb616242581c233 -->

<!-- START_3bcedda78ae45ef5c0f4c97a4963b7a1 -->
## Display a listing of the users

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/user'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET user`


<!-- END_3bcedda78ae45ef5c0f4c97a4963b7a1 -->

<!-- START_47f7fbb6bf98ef4cdc54b10f03cb3bdd -->
## Show the form for editing the profile.

> Example request:

```bash
curl -X GET \
    -G "https://monitoreo.test/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/profile'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET profile`


<!-- END_47f7fbb6bf98ef4cdc54b10f03cb3bdd -->

<!-- START_5923354cd3893edc9968e2c82f8b48ab -->
## Update the profile

> Example request:

```bash
curl -X PUT \
    "https://monitoreo.test/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/profile'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()
```



### HTTP Request
`PUT profile`


<!-- END_5923354cd3893edc9968e2c82f8b48ab -->

<!-- START_fcfb330d525341b80e2ffceacff23c83 -->
## Change the password

> Example request:

```bash
curl -X PUT \
    "https://monitoreo.test/profile/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://monitoreo.test/profile/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```python
import requests
import json

url = 'https://monitoreo.test/profile/password'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}
response = requests.request('PUT', url, headers=headers)
response.json()
```



### HTTP Request
`PUT profile/password`


<!-- END_fcfb330d525341b80e2ffceacff23c83 -->


