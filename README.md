## Requirement
- [PHP 7.4 or Higher](https://www.php.net/)
- [Laravel 8 or Higher](https://www.laravel.com/)
- [Laravel Job Queue](https://laravel.com/docs/10.x/queues#jobs-and-database-transactions)
- [Pusher](https://pusher.com/)


### Install Package

```
composer require yogameleniawan/search-sort-eloquent
```

### How to use

#### Searchable trait

Use Searchable trait to your model

```
use Yogameleniawan\SearchSortEloquent\Traits\Searchable;

class User extends Model {
    use Searchable;

    ....
}
```

Use search function to your eloquent model

```

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

```
use Yogameleniawan\SearchSortEloquent\Traits\Sortable;

class User extends Model {
    use Sortable;

    ....
}
```

Use sort function to your eloquent model

```

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
