# Trial Task

## Dependencies

- Linux
- PHP 8.2+
## Installation

```shell
git clone https://gitlab.com/begeekedlabs/community-site/community-site.git
cd event-site
```
```shell
composer install
# or in a production environment
composer install --no-dev
# or for local (Windows) enviroment
composer install --ignore-platform-reqs

npm install
#Start your build process
npm run dev
```
```shell
cp .env.example .env
```

```shell
php artisan key:generate
