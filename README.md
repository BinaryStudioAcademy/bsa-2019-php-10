# PHP_Unit
Binary Studio Academy 2019, PHP, Unit Testing with PHP_Unit.

### Installing
```
git clone https://github.com/BinaryStudioAcademy/bsa-2019-php-10.git
cd PHP_Unit
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate:fresh --seed
```

### Project info
Проект представляет собой реализацию простейшей барахолки с возможностью добавлять, просматривать, а также удалять 
объявления о продаже товаров. Только зарегистрированные пользователи могут добавлять товары на продажу, а также обязаны 
удалять их после продажи. Для простоты использования у товаров есть только имя и цена.

## What you have to do
**Task #1: знакомство с приложением** *(1 балл)*  
Сейчас у каждого зашедшего на ресурс пользователя есть возможность удалить любой товар из списка. Это предстоит 
поправить. Удалить товар может только зарегистрированный пользователь, который добавил данный товар в каталог. Кнопка 
удаления должна быть перемещена в личный кабинет.
    
**Task #2: модульные тесты для методов сервиса [Market Service](https://github.com/BinaryStudioAcademy/bsa-2019-php-10/blob/master/app/Services/MarketService.php)** *(2 балла)*  
Необходимо проверить работу методов (`getProductList()`, `getProductById()`, `getProductsByUserId()`, 
`storeProduct()`), а также соответствие требованиям проекта. При создании тестов необходимо использовать
моки, стабы и встроенные assertions. При создании модульных тестов, работа с базой данных запрещена!  
*P.S. При выполнении этого задания вы должны обнаружить ошибку, которую нужно зафиксить и протестировать :\)* *(1 балл)*

**Task #3: тестирование маршрутов и работы приложения в целом** *(4 балла)*  
В данной части задания необходимо протестировать работу приложения посредством предоставляемых фреймворком возможностей. 
Используя написанную логику для отображения, добавления и удаления товаров нужно протестировать их работу. Но сначала 
нужно прописать работу [MarketApiController](https://github.com/BinaryStudioAcademy/bsa-2019-php-10/blob/master/app/Http/Controllers/MarketApiController.php).  
Работаем со следующим шейпом данных:

* Отображение списка товаров: `GET /api/items`<br>
`Content-type: application/json`<br>
`Status code: 200`<br>
 -> `Response data: `<br>
```
[
    {
        "id": <int>,
        "name": <string>,
        "price": <string>,
        "user_id": <int>
    },
    ...
]
```

* Добавление товара: `POST /api/items`<br>
`Content-type: application/json`<br>
`Status code: 201`<br>
 -> `Request: `<br>
```
{
    "name": <string>,
    "price": <string>,
    "user_id": <int>
}
```
 -> `Response data: `<br>
```
{
    "id": <int>,
    "name": <string>,
    "price": <string>,
    "user_id": <int>
}
```

* Информация о товаре: `GET /api/items/{id}`<br>
`Content-type: application/json`<br>
`Status code: 200`<br>
 -> `Request:`<br>
```
{
    "id": <int>
}
```
 -> `Response data:`<br>
```
{
    "id": <int>,
    "name": <string>,
    "price": <string>,
    "user_id": <int>
}
```

* Удаления товара: `DELETE /api/items/{id}`<br>
`Content-type: application/json`<br>
`Status code: 204`<br>
 -> `Request:`<br>
```
{
    "id": <int>
}
```

Для ошибки будем использовать код `400`, а для идентификации отказа в доступе - `403`.
Для создания фейковых данных рекомендуется использовать фабрики Laravel. Так же, be free to improve the app 
*(добавить кастомные исключения, кастомные запросы, коды ошибок и тд.)*.

### Evaluation
Для сдачи домашнего задания необходимо отправить ссылку на **Bitbucket** репозиторий. Оценка зависит от количества и качества 
выполненных пунктов и может достигнуть своего максимального уровня в 10 баллов. Последние два балла вы можете получить за 
использование рекомендуемых способов реализации, а так же общее влияние на приложение и улучшение кодовой базы.
