# Provincial Legislative Records System

**Provincial Government of La Union**  
**Provincial Ordinances and Resolutions Management System**

---

## 1. Applicant Information

| Information | Details |
|---|---|
| Applicant's Name | EDRIENE JAY O. CABANELA |
| Examination | Computer Programmer I – Practical Programming Examination |
| Project Title | Provincial Legislative Records System |

## 2. Project Description

The Provincial Legislative Records System is a web-based application developed to manage and provide public access to Provincial Ordinances and Provincial Resolutions.

The system provides an authenticated administrative area where authorized users can manage legislative records and a public-facing portal where visitors can search and view published records without logging in.

The application was developed using Laravel, PHP, and MySQL.

## 3. Technologies Used

| Technology | Version / Description |
|---|---|
| PHP | 8.5.1 |
| Laravel | 13.40.0 |
| MySQL | MySQL Database |
| HTML5 | Web page structure |
| CSS3 | Styling |
| Tailwind CSS | Utility-first CSS framework |
| JavaScript | Client-side functionality |
| Vite | Frontend asset compilation |
| Composer | PHP dependency management |
| NPM | JavaScript dependency management |

**Development Environment:**
- Operating System: Windows 10/11
- Code Editor: Visual Studio Code
- Local Development Server: Laravel Artisan Development Server

## 4. Features Implemented

### A. User Authentication
- Administrator login functionality.
- Authentication-protected administrative pages.
- Restricted access to administrative features.
- Logout functionality.
- Default administrator account provided through the database seeder.

### B. Ordinance Management
- Add new provincial ordinances.
- View ordinance information.
- Edit existing ordinance records.
- Delete ordinance records.
- Validate required fields.
- Enforce unique ordinance numbers.
- Store ordinance number, title, date passed, author/sponsor, and description.

### C. Resolution Management
- Add new provincial resolutions.
- View resolution information.
- Edit existing resolution records.
- Delete resolution records.
- Validate required fields.
- Enforce unique resolution numbers.
- Store resolution number, title, date passed, author/sponsor, and description.

### D. Public Access Portal
- Public-facing landing page and legislative records search page.
- Search ordinances and resolutions using record numbers or partial titles.
- Filter legislative records by date passed.
- View complete ordinance details.
- View complete resolution details.
- Access public records without administrator authentication.

### E. Dashboard
- Administrative dashboard.
- Display total ordinance records.
- Display total resolution records.
- Navigation to ordinance and resolution management pages.

### F. User Interface
- Responsive interface for desktop and mobile devices.
- Separate visual accents for ordinances and resolutions.
- Consistent navigation and page layouts.
- Form validation feedback and confirmation prompts for record deletion.

## 5. Installation and Setup Instructions

### Prerequisites

Make sure the following are installed:

- PHP 8.2 or higher (PHP 8.5.1 used during development).
- Composer.
- MySQL.
- Node.js and NPM.
- Git (optional).

### Step 1: Obtain the Project

Extract the submitted ZIP file or clone the GitHub repository.

```bash
git clone [YOUR_GITHUB_REPOSITORY_URL]
```

Navigate to the project directory:

```bash
cd [PROJECT_FOLDER]
```

### Step 2: Install PHP Dependencies

Run:

```bash
composer install
```

### Step 3: Configure Environment Variables

Create the environment configuration file:

```bash
cp .env.example .env
```

For Windows Command Prompt, use:

```cmd
copy .env.example .env
```

Generate the Laravel application key:

```bash
php artisan key:generate
```

### Step 4: Configure the Database

Create a MySQL database named:

```sql
CREATE DATABASE elyu_legislative_db;
```

Open the `.env` file and configure the database connection:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=elyu_legislative_db
DB_USERNAME=root
DB_PASSWORD=
```

**Note:** Update the database username and password according to your local MySQL configuration. Do not commit actual database credentials to the repository.

### Step 5: Run Database Migrations and Seeders

Run the following command:

```bash
php artisan migrate --seed
```

This will create the required database tables and populate the database with the default administrator account.

### Step 6: Install Frontend Dependencies

Run:

```bash
npm install
```

Compile the frontend assets:

```bash
npm run build
```

### Step 7: Start the Application

Run the Laravel development server:

```bash
php artisan serve
```

Open the application in your browser:

```text
http://127.0.0.1:8000
```

The public search page can be accessed at:

```text
http://127.0.0.1:8000/search
```

The administrator login page can be accessed at:

```text
http://127.0.0.1:8000/login
```

## 6. Default Administrator Account

The database seeder creates the following administrator account:

| Field | Default Value |
|---|---|
| Email Address | admin@elyu.gov.ph |
| Password | admin1234 |

**Important:** These are default examination credentials. Change the password before deploying the application to a production environment.

To recreate the default administrator account, run:

```bash
php artisan db:seed
```

Avoid running `php artisan migrate:fresh --seed` on a database containing records you want to preserve, because this command drops existing tables and recreates them.

## 7. Database Structure

The application uses MySQL for data storage.

The primary tables include:

| Table | Description |
|---|---|
| users | Stores administrator account information. |
| ordinances | Stores provincial ordinance records. |
| resolutions | Stores provincial resolution records. |
| migrations | Tracks executed database migrations. |

The database schema is created using Laravel migration files included in the project.

## 8. Project Structure

Important application directories and files:

```text
project-folder/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Admin/
│   │       │   ├── DashboardController.php
│   │       │   ├── OrdinanceController.php
│   │       │   └── ResolutionController.php
│   │       └── PublicSearchController.php
│   │
│   └── Models/
│       ├── Ordinance.php
│       └── Resolution.php
│
├── database/
│   ├── migrations/
│   └── seeders/
│
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── admin/
│       ├── auth/
│       ├── layouts/
│       ├── public/
│       └── welcome.blade.php
│
├── routes/
│   ├── web.php
│   └── auth.php
│
├── .env.example
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── package-lock.json
└── README.md
```

## 9. Known Limitations

- The application is designed for local development and examination purposes.
- Public search currently provides a general search for both ordinances and resolutions.
- The ordinance and resolution category links direct visitors to the general public search page rather than applying an automatic record-type filter.
- Password recovery is not implemented as an automated email-based process. Users who cannot access their administrator accounts must contact the system administrator.
- The default administrator credentials should be changed before production deployment.

## 10. Acknowledgment

This application was developed as part of the Computer Programmer I Practical Programming Examination for the Provincial Government of La Union.

The system aims to provide a simple, organized, and accessible platform for managing and viewing provincial legislative records.

**Developed by:**  
[Your Full Name]

**Provincial Legislative Records System**  
Provincial Government of La Union
