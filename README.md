# Task Indicator - IoT Todo List

## Description

Task Indicator is a Laravel-based project that integrates Internet of Things (IoT) functionality with an ESP microcontroller. The ESP, programmed using the Arduino Framework, manages a series of LEDs that visually represent the status of tasks in the to-do list.

## Features

-   **Task Addition:** When a new task is added through the web interface, an LED lights up with a specific color to indicate the task's active status.
-   **Task Completion:** Marking a task as completed changes the LED's color to represent its completion.
-   **Task Deletion:** Deleting a task turns off the corresponding LED, reflecting the removal of the task from the list.

## Arduino Code

The code for the ESP microcontroller is available in the [task-indicator-arduino](https://github.com/bballii/task-indicator-arduino).

This project demonstrates the integration of IoT devices with web applications, providing a visual and interactive approach to task management.

## Getting Started

**_Requirements_**

Ensure you have the following dependencies installed on your system:

| PHP | Laravel | Composer |
| --- | ------- | -------- |
| 8.2 | 11.1.0  | 2.6.6    |

### Installation

1. Clone the iot-todo-list repository:

```sh
git clone https://github.com/bballii/iot-todo-list.git
```

2. Change to the project directory:

```sh
cd iot-todo-list
```

## Set up Laravel Backend

### 1. Install dependencies

```bash
composer install
```

### 2. Create .env file

```bash
cp .env.example .env
```

#### Add the following in .env file

##### MQTT Credentials

```
MQTT_HOST=<mqtt host>
MQTT_PORT=1883
MQTT_CLIENT_ID="todo-list"
MQTT_AUTH_USERNAME=<mqtt username>
MQTT_AUTH_PASSWORD=<mqtt password>
```

### 3. Generate application key:

```bash
php artisan key:generate
```

### 4. Set up database configuration in the .env file.

### 5. Run database migrations :

```bash
php artisan migrate
```

### 6. Serve the Laravel application:

```bash
php artisan serve
```

**_PS: This is really a practice project and created in a few hours, so the code for both Arduino and Laravel can be messy. I will be optimizing and improving it in further udpates._**
