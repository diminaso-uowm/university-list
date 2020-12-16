# University List
It's about a web application that you can **add, update, edit or delete student's personal information**. These credentials are stored in a database.

## About
This project is an **assignment for the lesson "Graduands' Seminar"** at [Department of Informatics at University of Western Macedonia, Kastoria, Greece](https://cs.uowm.gr). This project was made in the time period of December 2020 by Dimitrios Nasoufis & Chrysa Tsianta.<br/>
Instructor and supervisor of this project is Dimitrios Tzimas, Computing Coordinator Regional Directorate of P&S Education of Western Macedonia.

## Softwares & Programming Languages
- PHP
- MySQL
- Bootstrap
- HTML
- CSS
- JavaScript
- Fontawesome Icons

## Programs & Management
- Visual Studio Code
- MySQL Workbench
- phpMyAdmin
- GitHub Desktop
- Git
- Heroku Cloud

## URLs
**GitHub Repository:** [github.com/diminaso-uowm/university-list](https://github.com/diminaso-uowm/university-list)<br/>
**Heroku App - Demo:** [university-list.herokuapp.com](https://university-list.herokuapp.com)

## Installation
To **run** this application in your computer you should at least have:
- Code Editor (f.e. Notepad++)
- MySQL Server (local or remote)
- Database Manager - Client (HeidiSQL, etc)

Or you can install it at [Heroku Cloud](https://www.heroku.com).

In your database manager (GUI or CLI) make a **new database** and create a table named **university**.

In **university** table create the bellow columns:
- **id** INT : PK, AI
- **name** : VARCHAR(100) : NN
- **surname** : VARCHAR(100) : NN
- **ac_id** : VARCHAR(10) : NN
- **reg_date** : DATE : NN
- **email** : VARCHAR(100) : NN

Last step is to update **php.php** file with your **database connection details**:

```
$db = mysqli_connect('HOSTNAME', 'DB_USERNAME', 'DB_PASSWORD', 'DB_NAME');
```
