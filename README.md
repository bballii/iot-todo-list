# IOT-TODO-LIST

## Description

**iot-todo-list** is a Laravel-based project that integrates Internet of Things (IoT) functionality with an ESP microcontroller. The ESP, programmed using the Arduino IDE, manages a series of LEDs that visually represent the status of tasks in the to-do list.

## Features

-   **Task Addition:** When a new task is added through the web interface, an LED lights up with a specific color to indicate the task's active status.
-   **Task Completion:** Marking a task as completed changes the LED's color to represent its completion.
-   **Task Deletion:** Deleting a task turns off the corresponding LED, reflecting the removal of the task from the list.

## Arduino Code

The code for the ESP microcontroller is available in the [Arduino repository to be pushed soon](<Arduino Repository URL>).

This project demonstrates the integration of IoT devices with web applications, providing a visual and interactive approach to task management.

## Quick Links

> -   [ Overview](#-overview)
> -   [ Features](#-features)
> -   [ Repository Structure](#-repository-structure)
> -   [ Modules](#-modules)
> -   [ Getting Started](#-getting-started)
>     -   [ Installation](#-installation)
>     -   [ Running iot-todo-list](#-running-iot-todo-list)
>     -   [ Tests](#-tests)
> -   [ Project Roadmap](#-project-roadmap)
> -   [ Contributing](#-contributing)
> -   [ License](#-license)
> -   [ Acknowledgments](#-acknowledgments)

---

## Overview

HTTP error 401 for prompt `overview`

---

## Features

HTTP error 401 for prompt `features`

---

## Repository Structure

```sh
└── iot-todo-list/
    ├── README.md
    ├── app
    │   ├── Http
    │   │   └── Controllers
    │   │       ├── Controller.php
    │   │       └── TodoController.php
    │   ├── Models
    │   │   ├── Task.php
    │   │   └── User.php
    │   └── Providers
    │       └── AppServiceProvider.php
    ├── artisan
    ├── bootstrap
    │   ├── app.php
    │   ├── cache
    │   │   ├── .gitignore
    │   │   ├── packages.php
    │   │   └── services.php
    │   └── providers.php
    ├── composer.json
    ├── composer.lock
    ├── config
    │   ├── app.php
    │   ├── auth.php
    │   ├── cache.php
    │   ├── database.php
    │   ├── filesystems.php
    │   ├── logging.php
    │   ├── mail.php
    │   ├── mqtt-client.php
    │   ├── queue.php
    │   ├── services.php
    │   └── session.php
    ├── database
    │   ├── .gitignore
    │   ├── factories
    │   │   └── UserFactory.php
    │   ├── migrations
    │   │   ├── 0001_01_01_000000_create_users_table.php
    │   │   ├── 0001_01_01_000001_create_cache_table.php
    │   │   ├── 0001_01_01_000002_create_jobs_table.php
    │   │   └── 2024_08_16_182952_create_tasks_table.php
    │   └── seeders
    │       └── DatabaseSeeder.php
    ├── package.json
    ├── phpunit.xml
    ├── public
    │   ├── .htaccess
    │   ├── favicon.ico
    │   ├── index.php
    │   └── robots.txt
    ├── resources
    │   ├── css
    │   │   └── app.css
    │   ├── js
    │   │   ├── app.js
    │   │   └── bootstrap.js
    │   └── views
    │       └── welcome.blade.php
    ├── routes
    │   ├── console.php
    │   └── web.php
    ├── storage
    │   ├── app
    │   │   ├── .gitignore
    │   │   └── public
    │   │       └── .gitignore
    │   ├── framework
    │   │   ├── .gitignore
    │   │   ├── cache
    │   │   │   ├── .gitignore
    │   │   │   └── data
    │   │   │       └── .gitignore
    │   │   ├── sessions
    │   │   │   └── .gitignore
    │   │   ├── testing
    │   │   │   └── .gitignore
    │   │   └── views
    │   │       └── .gitignore
    │   └── logs
    │       └── .gitignore
    ├── tests
    │   ├── Feature
    │   │   └── ExampleTest.php
    │   ├── TestCase.php
    │   └── Unit
    │       └── ExampleTest.php
    └── vite.config.js
```

---

## Modules

<details closed><summary>.</summary>

| File                                                                                      | Summary                                    |
| ----------------------------------------------------------------------------------------- | ------------------------------------------ |
| [composer.lock](https://github.com/bballii/iot-todo-list.git/blob/master/composer.lock)   | HTTP error 401 for prompt `composer.lock`  |
| [vite.config.js](https://github.com/bballii/iot-todo-list.git/blob/master/vite.config.js) | HTTP error 401 for prompt `vite.config.js` |
| [package.json](https://github.com/bballii/iot-todo-list.git/blob/master/package.json)     | HTTP error 401 for prompt `package.json`   |
| [phpunit.xml](https://github.com/bballii/iot-todo-list.git/blob/master/phpunit.xml)       | HTTP error 401 for prompt `phpunit.xml`    |
| [artisan](https://github.com/bballii/iot-todo-list.git/blob/master/artisan)               | HTTP error 401 for prompt `artisan`        |
| [composer.json](https://github.com/bballii/iot-todo-list.git/blob/master/composer.json)   | HTTP error 401 for prompt `composer.json`  |

</details>

<details closed><summary>resources.css</summary>

| File                                                                                      | Summary                                           |
| ----------------------------------------------------------------------------------------- | ------------------------------------------------- |
| [app.css](https://github.com/bballii/iot-todo-list.git/blob/master/resources/css/app.css) | HTTP error 401 for prompt `resources/css/app.css` |

</details>

<details closed><summary>resources.views</summary>

| File                                                                                                            | Summary                                                       |
| --------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------- |
| [welcome.blade.php](https://github.com/bballii/iot-todo-list.git/blob/master/resources/views/welcome.blade.php) | HTTP error 401 for prompt `resources/views/welcome.blade.php` |

</details>

<details closed><summary>resources.js</summary>

| File                                                                                               | Summary                                               |
| -------------------------------------------------------------------------------------------------- | ----------------------------------------------------- |
| [bootstrap.js](https://github.com/bballii/iot-todo-list.git/blob/master/resources/js/bootstrap.js) | HTTP error 401 for prompt `resources/js/bootstrap.js` |
| [app.js](https://github.com/bballii/iot-todo-list.git/blob/master/resources/js/app.js)             | HTTP error 401 for prompt `resources/js/app.js`       |

</details>

<details closed><summary>public</summary>

| File                                                                                     | Summary                                       |
| ---------------------------------------------------------------------------------------- | --------------------------------------------- |
| [.htaccess](https://github.com/bballii/iot-todo-list.git/blob/master/public/.htaccess)   | HTTP error 401 for prompt `public/.htaccess`  |
| [index.php](https://github.com/bballii/iot-todo-list.git/blob/master/public/index.php)   | HTTP error 401 for prompt `public/index.php`  |
| [robots.txt](https://github.com/bballii/iot-todo-list.git/blob/master/public/robots.txt) | HTTP error 401 for prompt `public/robots.txt` |

</details>

<details closed><summary>database.factories</summary>

| File                                                                                                           | Summary                                                        |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------- |
| [UserFactory.php](https://github.com/bballii/iot-todo-list.git/blob/master/database/factories/UserFactory.php) | HTTP error 401 for prompt `database/factories/UserFactory.php` |

</details>

<details closed><summary>database.migrations</summary>

| File                                                                                                                                                              | Summary                                                                                  |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| [2024_08_16_182952_create_tasks_table.php](https://github.com/bballii/iot-todo-list.git/blob/master/database/migrations/2024_08_16_182952_create_tasks_table.php) | HTTP error 401 for prompt `database/migrations/2024_08_16_182952_create_tasks_table.php` |
| [0001_01_01_000002_create_jobs_table.php](https://github.com/bballii/iot-todo-list.git/blob/master/database/migrations/0001_01_01_000002_create_jobs_table.php)   | HTTP error 401 for prompt `database/migrations/0001_01_01_000002_create_jobs_table.php`  |
| [0001_01_01_000000_create_users_table.php](https://github.com/bballii/iot-todo-list.git/blob/master/database/migrations/0001_01_01_000000_create_users_table.php) | HTTP error 401 for prompt `database/migrations/0001_01_01_000000_create_users_table.php` |
| [0001_01_01_000001_create_cache_table.php](https://github.com/bballii/iot-todo-list.git/blob/master/database/migrations/0001_01_01_000001_create_cache_table.php) | HTTP error 401 for prompt `database/migrations/0001_01_01_000001_create_cache_table.php` |

</details>

<details closed><summary>database.seeders</summary>

| File                                                                                                               | Summary                                                         |
| ------------------------------------------------------------------------------------------------------------------ | --------------------------------------------------------------- |
| [DatabaseSeeder.php](https://github.com/bballii/iot-todo-list.git/blob/master/database/seeders/DatabaseSeeder.php) | HTTP error 401 for prompt `database/seeders/DatabaseSeeder.php` |

</details>

<details closed><summary>routes</summary>

| File                                                                                       | Summary                                        |
| ------------------------------------------------------------------------------------------ | ---------------------------------------------- |
| [web.php](https://github.com/bballii/iot-todo-list.git/blob/master/routes/web.php)         | HTTP error 401 for prompt `routes/web.php`     |
| [console.php](https://github.com/bballii/iot-todo-list.git/blob/master/routes/console.php) | HTTP error 401 for prompt `routes/console.php` |

</details>

<details closed><summary>config</summary>

| File                                                                                               | Summary                                            |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------- |
| [auth.php](https://github.com/bballii/iot-todo-list.git/blob/master/config/auth.php)               | HTTP error 401 for prompt `config/auth.php`        |
| [database.php](https://github.com/bballii/iot-todo-list.git/blob/master/config/database.php)       | HTTP error 401 for prompt `config/database.php`    |
| [mail.php](https://github.com/bballii/iot-todo-list.git/blob/master/config/mail.php)               | HTTP error 401 for prompt `config/mail.php`        |
| [queue.php](https://github.com/bballii/iot-todo-list.git/blob/master/config/queue.php)             | HTTP error 401 for prompt `config/queue.php`       |
| [app.php](https://github.com/bballii/iot-todo-list.git/blob/master/config/app.php)                 | HTTP error 401 for prompt `config/app.php`         |
| [mqtt-client.php](https://github.com/bballii/iot-todo-list.git/blob/master/config/mqtt-client.php) | HTTP error 401 for prompt `config/mqtt-client.php` |
| [session.php](https://github.com/bballii/iot-todo-list.git/blob/master/config/session.php)         | HTTP error 401 for prompt `config/session.php`     |
| [services.php](https://github.com/bballii/iot-todo-list.git/blob/master/config/services.php)       | HTTP error 401 for prompt `config/services.php`    |
| [logging.php](https://github.com/bballii/iot-todo-list.git/blob/master/config/logging.php)         | HTTP error 401 for prompt `config/logging.php`     |
| [cache.php](https://github.com/bballii/iot-todo-list.git/blob/master/config/cache.php)             | HTTP error 401 for prompt `config/cache.php`       |
| [filesystems.php](https://github.com/bballii/iot-todo-list.git/blob/master/config/filesystems.php) | HTTP error 401 for prompt `config/filesystems.php` |

</details>

<details closed><summary>bootstrap</summary>

| File                                                                                              | Summary                                             |
| ------------------------------------------------------------------------------------------------- | --------------------------------------------------- |
| [providers.php](https://github.com/bballii/iot-todo-list.git/blob/master/bootstrap/providers.php) | HTTP error 401 for prompt `bootstrap/providers.php` |
| [app.php](https://github.com/bballii/iot-todo-list.git/blob/master/bootstrap/app.php)             | HTTP error 401 for prompt `bootstrap/app.php`       |

</details>

<details closed><summary>bootstrap.cache</summary>

| File                                                                                                  | Summary                                                  |
| ----------------------------------------------------------------------------------------------------- | -------------------------------------------------------- |
| [packages.php](https://github.com/bballii/iot-todo-list.git/blob/master/bootstrap/cache/packages.php) | HTTP error 401 for prompt `bootstrap/cache/packages.php` |
| [services.php](https://github.com/bballii/iot-todo-list.git/blob/master/bootstrap/cache/services.php) | HTTP error 401 for prompt `bootstrap/cache/services.php` |

</details>

<details closed><summary>app.Providers</summary>

| File                                                                                                                    | Summary                                                          |
| ----------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------- |
| [AppServiceProvider.php](https://github.com/bballii/iot-todo-list.git/blob/master/app/Providers/AppServiceProvider.php) | HTTP error 401 for prompt `app/Providers/AppServiceProvider.php` |

</details>

<details closed><summary>app.Http.Controllers</summary>

| File                                                                                                                   | Summary                                                             |
| ---------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------- |
| [TodoController.php](https://github.com/bballii/iot-todo-list.git/blob/master/app/Http/Controllers/TodoController.php) | HTTP error 401 for prompt `app/Http/Controllers/TodoController.php` |
| [Controller.php](https://github.com/bballii/iot-todo-list.git/blob/master/app/Http/Controllers/Controller.php)         | HTTP error 401 for prompt `app/Http/Controllers/Controller.php`     |

</details>

<details closed><summary>app.Models</summary>

| File                                                                                     | Summary                                         |
| ---------------------------------------------------------------------------------------- | ----------------------------------------------- |
| [Task.php](https://github.com/bballii/iot-todo-list.git/blob/master/app/Models/Task.php) | HTTP error 401 for prompt `app/Models/Task.php` |
| [User.php](https://github.com/bballii/iot-todo-list.git/blob/master/app/Models/User.php) | HTTP error 401 for prompt `app/Models/User.php` |

</details>

---

## Getting Started

**_Requirements_**

Ensure you have the following dependencies installed on your system:

-   **PHP**: `version x.y.z`

### Installation

1. Clone the iot-todo-list repository:

```sh
git clone https://github.com/bballii/iot-todo-list.git
```

2. Change to the project directory:

```sh
cd iot-todo-list
```

3. Install the dependencies:

```sh
composer install
```

### Running iot-todo-list

Use the following command to run iot-todo-list:

```sh
php main.php
```

### Tests

To execute tests, run:

```sh
vendor/bin/phpunit
```

---

## Project Roadmap

-   [x] `► INSERT-TASK-1`
-   [ ] `► INSERT-TASK-2`
-   [ ] `► ...`

---

## Contributing

Contributions are welcome! Here are several ways you can contribute:

-   **[Submit Pull Requests](https://github.com/bballii/iot-todo-list.git/blob/main/CONTRIBUTING.md)**: Review open PRs, and submit your own PRs.
-   **[Join the Discussions](https://github.com/bballii/iot-todo-list.git/discussions)**: Share your insights, provide feedback, or ask questions.
-   **[Report Issues](https://github.com/bballii/iot-todo-list.git/issues)**: Submit bugs found or log feature requests for Iot-todo-list.

<details closed>
    <summary>Contributing Guidelines</summary>

1. **Fork the Repository**: Start by forking the project repository to your GitHub account.
2. **Clone Locally**: Clone the forked repository to your local machine using a Git client.
    ```sh
    git clone https://github.com/bballii/iot-todo-list.git
    ```
3. **Create a New Branch**: Always work on a new branch, giving it a descriptive name.
    ```sh
    git checkout -b new-feature-x
    ```
4. **Make Your Changes**: Develop and test your changes locally.
5. **Commit Your Changes**: Commit with a clear message describing your updates.
    ```sh
    git commit -m 'Implemented new feature x.'
    ```
6. **Push to GitHub**: Push the changes to your forked repository.
    ```sh
    git push origin new-feature-x
    ```
7. **Submit a Pull Request**: Create a PR against the original project repository. Clearly describe the changes and their motivations.

Once your PR is reviewed and approved, it will be merged into the main branch.

</details>

---

## License

This project is protected under the [SELECT-A-LICENSE](https://choosealicense.com/licenses) License. For more details, refer to the [LICENSE](https://choosealicense.com/licenses/) file.

---

## Acknowledgments

-   List any resources, contributors, inspiration, etc. here.

[**Return**](#-quick-links)

---
