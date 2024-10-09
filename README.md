# Task Management System

Welcome to the **Task Management System** repository. This is a Laravel-based application designed to manage tasks, user
assignments, notifications, and more.

## Table of Contents

- [Installation](#installation)
- [Configuration](#configuration)
- [Running the Application](#running-the-application)
- [Testing](#testing)
- [Features](#features)
- [Dark and Light Mode](#dark-and-light-mode)
- [Language Support (Arabic and English)](#language-support-arabic-and-english)
- [Contributing](#contributing)
- [Contributing](#contributing)
- [License](#license)

## Installation

Follow these steps to get the project up and running locally.

### Prerequisites

Ensure you have the following installed:

- [PHP](https://www.php.net/) (v8.0 or above)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) or another supported database
- [Node.js](https://nodejs.org/) and npm
- [Redis](https://redis.io/) (if using Redis for caching or queueing)

### Step 1: Clone the Repository

```bash
git clone https://github.com/yourusername/task-management-system.git
cd task-management-system


### Step 2: Install Dependencies

Run the following command to install PHP dependencies:

```bash
composer install
```

Next, install the front-end dependencies:

```bash
npm install
npm run build
```

### Step 3: Set Up Environment Variables

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Now, update the `.env` file with your database, mail, and other required configurations.

### Step 4: Generate Application Key

Generate the application encryption key:

```bash
php artisan key:generate
```

### Step 5: Set Up the Database

Ensure that your database is running, and run the following commands to create the database tables and seed some initial
data:

```bash
php artisan migrate --seed
```

### Step 6: Serve the Application

You can serve the application using Laravel’s built-in development server:

```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser to view the application.

## Configuration

You need to configure the `.env` file to match your local setup.

### Key Configurations:

- **Database Settings**:
    - `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`
- **Mail Settings**:
    - `MAIL_MAILER`, `MAIL_HOST`, `MAIL_PORT`, `MAIL_USERNAME`, `MAIL_PASSWORD`, `MAIL_ENCRYPTION`, `MAIL_FROM_ADDRESS`
- **Queue/Cache Settings**:
    - `CACHE_DRIVER=redis` and `QUEUE_CONNECTION=redis` (if using Redis)

## Running the Application

Once installed, you can run the application as you would with any Laravel application. To watch and build frontend
assets in development mode, use the following:

```bash
npm run dev
```

For production builds, you can run:

```bash
npm run build
```

## Testing

This project uses PHPUnit and Pest for automated testing.

### Running the Tests

You can run the test suite using Pest:

```bash
./vendor/bin/pest
```

Or, with parallel testing to speed up the test runs:

```bash
./vendor/bin/pest --parallel
```

If you're using PHPUnit:

```bash
./vendor/bin/phpunit
```

Ensure you have a dedicated test database configured in your `.env` file for testing.

## Features

- **Task Management**: Create, update, delete, and manage tasks.
- **User Assignments**: Assign tasks to different users.
- **Notifications**: Users receive notifications when tasks are assigned, updated, or completed.
- **Role-Based Access Control**: Roles and permissions (e.g., Admin, Manager, User) to control access to different
  features.
- **Task Status Management**: Users can manage and update the status of tasks (e.g., pending, in-progress, completed).
- **Notifications**: Users can mark their notifications as read.
## Dark and Light Mode

This project supports **Dark Mode** and **Light Mode** out of the box. Users can switch between dark and light themes, and the UI adapts automatically based on the user's preferences.

- **Light Mode**: Default white background with dark text.
- **Dark Mode**: Dark background with light text, providing a user-friendly experience in low-light environments.

### Example of Switching Themes:

You can toggle between light and dark modes in your app settings or user preferences. The UI will adjust accordingly for better user experience.

## Language Support (Arabic and English)

This project comes with **multi-language support** for both Arabic (`ar`) and English (`en`) right out of the box. It allows users to switch between languages, and the application UI adapts seamlessly.

- **English**: Default language.
- **Arabic**: Fully RTL (right-to-left) support for Arabic speakers.

### How to Switch Languages:

To switch between languages, you can use a language selector in the UI or set the default language in your `.env` file:

```bash
APP_LOCALE=en
````

```bash
APP_LOCALE=en
````

For Arabic, update the .env file:
```bash
APP_LOCALE=ar
```
Alternatively, users can select their preferred language within the app’s settings.
## Routes Endpoints

This project offers several Routes endpoints for task and Auth management.

### Task Management (Web Routes)

- `GET /tasks` - Fetch all tasks (Task list view)
- `GET /tasks/create` - View the form to create a new task
- `POST /tasks` - Create a new task
- `GET /tasks/{task}` - View a single task by ID (Task details view)
- `GET /tasks/{task}/edit` - View the form to edit a task
- `PUT /tasks/{task}` - Update a task
- `DELETE /tasks/{task}` - Delete a task

### Auth Management (Web Routes)

- `GET /login` - Show the login form
- `POST /login` - Process login credentials and authenticate the user
- `GET /register` - Show the registration form for new users
- `POST /register` - Register a new user
- `POST /logout` - Log out the authenticated user

### Notification Management (Web Routes)

- `POST /notifications/read-all` - Mark all notifications as read

### Dashboard Management (Web Routes)

- `GET /dashboard` - View the main dashboard where users can see an overview of their tasks, notifications, and general statistics