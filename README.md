## Instructions

1. Run:
```bash
composer update
cp .env.example .env
php artisan key:generate
php artisan serve
```

2. brows to [http://127.0.0.1:8000](http://127.0.0.1:8000)
3. enter anything in the first "Name" field and then unfocus the input to trigger validation
4. observe that all of the name fields are validated, instead of just the one which has been edited
