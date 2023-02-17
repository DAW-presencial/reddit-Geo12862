# APIREST_JorgeMartinMenendez_Y_AbrilFrongiaEncina
Desde el formulario añadimos la parte de ApiRest

## Práctica sobre APIRest y Testing
La practica consiste en crear y probar una APIRest para una aplicación basada en Redit. Se supone que ya están creados las migraciones, los modelos, los factories y los seeders, con arreglo al modelo de datos visto en clase.

Realiza las siguientes tareas. Cada una de las tareas conlleva al menos un commit, en el que figure un mensaje indicando el punto realizado y si está completa o parcialmente realizado.

### CRUD's APIRest
1) Definición de los puntos de entrada siguientes (enpoints): CRUD sobre una Community
2) Definición de los puntos de entrada siguientes: CRUD sobre un Post
3) Definición de los puntos de entrada siguientes: CRUD sobre un Comment
### Test en Laravel 
4) Test para: public function can_fetch_all_communities()
5) Test para: public function can_fetch_single_communities()
6) Test para: public function name_of_communities_is_required()
7) Test para: public function can_create_community()
8) Test para: public function guests_cannot_create_community()
9) Test para: public function can_update_community()
10) Test para: public function can_delete_community()
11) Test para: public function can_returns_a_json_api_error_object_when_a_community_is_not_found()
### Autoización con Bearer Token
12) Crea un controlador para asignar tokens bajo demanda.
13) Añade autenticación con Bearer Token a los endpoints del apartado 1)
#### 14) Crea con Postman las peticiones del apartado 1)
#### 15) Subida a GitHub
#### 16) Despliegue en remoto

## TODO:
- [x] Usuarios
- [x] Post
- [x] Comment
- [ ] Puntuar comentarios (likes) - Comments y Post
- [ ] Comunities (Temática) 
- [ ] Autorizaciones
  - [ ] Guest - Solo puede ver post y comentarios (leer)
  - [ ] Autentificado - crear post, comments, comunities
- [ ] Roles
  - [ ] Moderado
  - [ ] Registrado
  - [ ] Invitado
- [ ] Postman
- [ ] Tesing con Laravel
- [ ] JavaScript
  - [ ] Crear endpoint
- [ ] VUE
  - [ ] Listar comunidades
  - [ ] Listar posts
  - [ ] Listar comentarios de un post
- [ ] Para el Redit
  - [ ] Crear (Comunities, Post, Comments)
  - [ ] Delete (Comunities, Post, Comments)

------------------------------------------------------------------------------------------
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
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
