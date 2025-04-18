---
title: AdminUnitController
description: IDS\AdminUnit\Controllers\AdminUnitController
date: 2025-04-18 13:07:22
---
## Methods

### __construct()

AdminUnitController constructor.
Initializes the controller and sets the permission for accessing admin unit functionalities.

| **Key** | **Description** |
| --- | --- |
| Modifier | public |
| Return |  |


---

### index($request)

Display a listing of the admin units.
Retrieves admin units, applying search filters and eager loading relations.

| **Key** | **Description** |
| --- | --- |
| Modifier | public |
| Return | Illuminate\Http\JsonResponse |


**Parameters**
| **Name** | **Type** |
| --- | --- |
| request | Illuminate\Http\Request |


---

### export($request)

Export admin unit data.

| **Key** | **Description** |
| --- | --- |
| Modifier | public |
| Return | Illuminate\Http\JsonResponse |


**Parameters**
| **Name** | **Type** |
| --- | --- |
| request | Illuminate\Http\Request |


---

### store($request)

Store a new admin unit.

| **Key** | **Description** |
| --- | --- |
| Modifier | public |
| Return | Illuminate\Http\JsonResponse |


**Parameters**
| **Name** | **Type** |
| --- | --- |
| request | IDS\AdminUnit\Requests\AdminRequest |


---

### show($adminUnit, $code, $message)

Display the specified admin unit.

| **Key** | **Description** |
| --- | --- |
| Modifier | public |
| Return | Illuminate\Http\JsonResponse |


**Parameters**
| **Name** | **Type** |
| --- | --- |
| adminUnit | App\Models\User |
| code |  |
| message |  |


---

### update($request, $adminUnit)

Updates an existing admin unit.

| **Key** | **Description** |
| --- | --- |
| Modifier | public |
| Return | Illuminate\Http\JsonResponse |


**Parameters**
| **Name** | **Type** |
| --- | --- |
| request | IDS\AdminUnit\Requests\AdminRequest |
| adminUnit | App\Models\User |


---

### destroy($adminUnit)

Delete an existing Admin Unit.

| **Key** | **Description** |
| --- | --- |
| Modifier | public |
| Return | Illuminate\Http\Response |


**Parameters**
| **Name** | **Type** |
| --- | --- |
| adminUnit | App\Models\User |


---

### unitResource($item)

Format user data to be used in admin unit feature.

| **Key** | **Description** |
| --- | --- |
| Modifier | public |
| Return | Illuminate\Support\Collection |


**Parameters**
| **Name** | **Type** |
| --- | --- |
| item | App\Models\User |


---

### unitResources($data)

Transforms a paginated collection of data items by applying the unitResource
transformation to each item, and returns the modified paginated collection.

| **Key** | **Description** |
| --- | --- |
| Modifier | public |
| Return | Illuminate\Pagination\LengthAwarePaginator |


**Parameters**
| **Name** | **Type** |
| --- | --- |
| data | Illuminate\Pagination\LengthAwarePaginator |


---
