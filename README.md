## para iniciar o projeto 
npm install
php artisan serve

database mySQL (Workbanch, dbeahver ou qualquer gerenciador de sua preferência)

para as Requests utilizei o Postman (insomnia ou qualquer outra também serve)

## Cadastrar usuário

Para cadastrar uma tarifa será necessário criar um usuário.
Usei o console interativo do ***Laravel / Tinker***

php artisan tinker (entrar na linha de comando Tinker)
Psy Shell v0.11.8 (PHP 8.1.10 — cli) by Justin Hileman

> $user = new \App\User(); // laravel 9 nao consegue mapear o arquivo, sendo necessario passar todo o caminho 
PHP Error:  Class "App\User" not found in Psy Shell code on line 1
$user = new \App\Models\User();  //pssar todo o caminho para conseguir criar o novo usuario.
=> App\Models\User {#4568}
> 

> $user->name = ‘Wellington ’;
=> "Wellington"
> 

> $user->email = 'example@outlook.com';
=> "example@outlook.com"
> 

> $user->password = bcrypt('12345');
=> "$2y$10$vr0SvCYm6rFeeNz9.WQUuucomfehJMIaBaMD5JXfe9HD7pYuZap0C"
> 

> $user->save(); salvar usuário
=> true
> 

> \App\Models\User::all(); mostrar todos os dados do usuário
=> Illuminate\Database\Eloquent\Collection {#4580
all: [
App\Models\User {#4582
id: 1,
name: "Wellington",
email: "Examplo@outlook.com",
email_verified_at: null,
#password: "$2y$10$vr0SvCYm6rFeeNz9.WQUuucomfehJMIaBaMD5JXfe9HD7pYuZap0C",
#remember_token: null,
created_at: "2022-09-27 01:38:29",
updated_at: "2022-09-27 01:38:29",
},
],
}

## Teste create
<p align="center"><img src="https://drive.google.com/file/d/15FyHAEcb0rwvo2ZMlaF0JD1V2tvNWJpG/view?usp=sharing" width="400" alt="Teste create tarifa"></p>

## teste Update
<p align="center"><img src="https://drive.google.com/file/d/1H3bDmlYh4KxkUUevUUO0VC5mSHNQ0Lsw/view?usp=sharing" width="400" alt="Teste update tarifa"></p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
