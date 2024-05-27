## Requirement
- [PHP 7.4 or Higher](https://www.php.net/)
- [Laravel 8 or Higher](https://www.laravel.com/)

### Install Package

```
composer require yogameleniawan/search-sort-eloquent
```

### How to use

#### Searchable trait

Use Searchable trait to your model

```php
use Yogameleniawan\SearchSortEloquent\Traits\Searchable;

class User extends Model {
    use Searchable;

    ....
}
```

Use search function to your eloquent model

```php

class UserController extends Controller {
    
    public function search(Request $request) {
        $user = User::search(
            keyword: $request->keyword,
            columns: ["id", "name", "email"],
        )->get();

        dd($user);
    }
}

```

#### Sortable trait

Use Sortable trait to your model

```php
use Yogameleniawan\SearchSortEloquent\Traits\Sortable;

class User extends Model {
    use Sortable;

    ....
}
```

Use sort function to your eloquent model

```php

class UserController extends Controller {
    
    public function sort(Request $request) {
        $user = User::sort(
                sort_by: $request->sort_by,
                sort_order: $request->sort_order
            )->get();

        dd($user);
    }
}

```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Credits

- [Yoga Meleniawan Pamungkas](https://github.com/yogameleniawan)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
