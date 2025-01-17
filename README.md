## Programming School by Flashsoft Indonesia
## Install
git clone https://github.com/flvshsoft/hr-imam.git
composer install
php artisan migrate:fresh --seed
php artisan server

## Mysql
mysqld --console --skip-grant-tables --skip-external-locking

## ip
ipconfig

## antar pc
php artisan serve --host=0.0.0.0 --port=8000

### CRUD
<!-- Untuk buat contoller -->
https://www.malasngoding.com/tutorial-membuat-crud-dengan-laravel/
<p>php artisan make:controller PegawaiController</p>

### Seeder dan Faker
https://www.malasngoding.com/seeding-dan-faker-pada-laravel/
<p>php artisan make:seeder PegawaiSeeder</p>
<p>php artisan db:seed --class=PegawaiSeeder</p>


php artisan migrate
php artisan migrate:fresh --seed

http://localhost:8000/form-kandidat


## mysql error
mysqld --console --skip-grant-tables --skip-external-locking


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

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

## Fs
php artisan migrate
php artisan db:seed

## vscode json

{
  "security.workspace.trust.untrustedFiles": "open",
  "editor.fontSize": 12,
  "editor.inlayHints.fontSize": 11,
  "php.validate.executablePath": "E:/xampp82/php/php.exe",
  "files.autoSave": "afterDelay",
  "workbench.colorTheme": "Default Dark+",
  "[dart]": {
    "editor.formatOnSave": true,
    "editor.formatOnType": true,
    "editor.rulers": [80],
    "editor.selectionHighlight": false,
    "editor.suggestSelection": "first",
    "editor.tabCompletion": "onlySnippets",
    "editor.wordBasedSuggestions": false
  },
  "redhat.telemetry.enabled": true,
  "cmake.configureOnOpen": false,
  "git.autofetch": true,
  "yaml.schemas": {
    "file:///c%3A/Users/A28/.vscode/extensions/atlassian.atlascode-3.0.10/resources/schemas/pipelines-schema.json": "bitbucket-pipelines.yml"
  },
  "atlascode.jira.jqlList": [
    {
      "id": "7ead161e-1fb9-496b-bcf9-819772e4adfe",
      "enabled": true,
      "name": "My kloverkres Issues",
      "query": "assignee = currentUser() AND resolution = Unresolved ORDER BY lastViewed DESC",
      "siteId": "c3e228f1-83e7-4340-9a3a-ddb0b1c1c75b",
      "monitor": true
    }
  ],
  "window.zoomLevel": -1,
  "explorer.confirmDragAndDrop": false,
  "editor.defaultFormatter": "esbenp.prettier-vscode",
  "editor.formatOnSave": true
}
