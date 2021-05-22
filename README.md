

## 💻 Built with

- [Laravel 8](https://laravel.com/): A PHP framework
- [Lighthouse 5](https://lighthouse-php.com/): A framework for serving GraphQL from Laravel


## 🛠️ Installations

1. Clone the repository

```bash
git clone https://github.com/rachmarmohammad/laravel-graphql-boilerplate.git
```

2. Change the working directory

```bash
cd laravel-graphql-boilerplate
```

3. Copy the .env example

```bash
cp .env .env.example
```

4. Generate your app key

```bash
php artisan key:generate
```

5. Change your database on .env file

```bash
DB_DATABASE=graphl
DB_USERNAME=user
DB_PASSWORD=password
```

5. Migrate your database

```bash
php artisan make:migrate
```

6. Seed product per user

```bash
php artisan db:seed
```

7. Server your application

```bash
php artisan serve
```

8. Go to the /graphql-playground

```bash
https://<YOUR_DOMAIN>/graphql-playground
```

9. Query this to the left panel

```bash
query{
  users{
    id
    name
    email
    products{
      id
      name
      description
    }
  }
}
```

🌟 You are all set!