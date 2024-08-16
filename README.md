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

## Getting Started

**_Requirements_**

Ensure you have the following dependencies installed on your system:

| PHP   | Laravel | Composer |
| ----- | ------- | -------- |
| 8.3.1 | 11.1.0  | 2.6.6    |

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
