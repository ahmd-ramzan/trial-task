# Trial Task

## Dependencies

- Linux
- PHP 8.2+
## Installation

```shell
git clone https://github.com/ahmd-ramzan/trial-task.git
cd trial-task
```
```shell
composer install
# or for local (Windows) enviroment
composer install --ignore-platform-reqs
```
```shell
cp .env.example .env
```

```shell
php artisan key:generate
```

## Files To Review
- app/Livewire/HomePage.php
- app/Livewire/Tabs/BasicInformationTab.php
- app/Livewire/Tabs/MarriageTab.php
- app/Livewire/Tabs/OutputTab.php
