# Blog Project
# PHP & MySQL Web Development Internship Project

## 📌 Project Title

Simple Blog Web Application using PHP and MySQL

---

## 📖 Project Description

This project is developed as part of my Web Development Internship.
It is a simple blog management system where users can register, log in, create posts, edit posts, and delete posts. The project demonstrates core backend development skills using PHP and database handling using MySQL.

---

## 🚀 Features

* User Registration
* User Login & Logout
* Session Management
* Create Blog Posts
* Edit Blog Posts
* Delete Blog Posts
* View All Posts
* Secure Database Connection using MySQL
* Basic Authentication System

---

## 🛠️ Technologies Used

* Frontend: HTML, CSS
* Backend: PHP
* Database: MySQL
* Server: XAMPP (Apache Server)
* Version Control: Git & GitHub

---

## 📂 Project Structure

```

blog-project/
│
├── index.php
├── login.php
├── register.php
├── dashboard.php
├── create.php
├── edit.php
├── delete.php
├── logout.php
├── db.php
├── auth.php
├── test.php
└── favicon.ico

```

---

## ⚙️ Installation Guide

### Step 1: Clone Repository

```bash
git clone https://github.com/laharimanchkatla015/blog-project.git
```

### Step 2: Move Project

Place the project folder inside:

```
C:\xampp\htdocs\
```

---

### Step 3: Start Server

Open XAMPP and start:

* Apache
* MySQL

---

### Step 4: Database Setup

1. Open phpMyAdmin:

   ```
   http://localhost/phpmyadmin
   ```

2. Create a database:

   ```
   blog
   ```

3. Import SQL file (if available) or create table manually:

```sql
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

### Step 5: Run Project

Open in browser:

```
http://localhost/blog-project/
```

---

## 🔐 Security Features

* Session-based authentication
* Input validation
* Prepared statements (MySQLi/PDO recommended)
* Protected dashboard access

---

## 🎯 Learning Outcomes

* Understanding PHP backend development
* Working with MySQL database
* CRUD operations (Create, Read, Update, Delete)
* Session & authentication handling
* Git & GitHub version control

---

## 👨‍💻 Author

Intern: Lahari Manchikatla
Internship: Web Development Internship
Platform: ApexPlanet / Internship Provider

---

