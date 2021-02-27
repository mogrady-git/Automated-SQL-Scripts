# SQL Scripts

This project is a demonstration on how PHP can be used to check for the existance of a database & tables and if not exist, create them with the the help of an embedded SQL query.

> Built with HTML, CSS, SQL and PHP.

> You must download this project to test it on localhost.

<img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/mogrady-git/SQL-Scripts"> -->

## Installation Instructions for Testing on Localhost with Gmail

#### XAMPP - Go to the XAMPP installation directory and open the XAMPP folder and follow the below steps:

1. Go to the (C:\xampp\php) and open the php.ini or php file then find the mail function by scrolling down or simply press ctrl+f to search directly then find the following lines and pass these values:

#### PHP.INI FILE:

```
[mail function]
For Win32 only.
http://php.net/smtp
SMTP=smtp.gmail.com
http://php.net/smtp-port
smtp_port=587
sendmail_from = your_email_address_here
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
```

2. Now, go the (C:\xampp\sendmail) and open the sendmail.ini then find sendmail by scrolling down or press ctrl+f to search directly then find the following lines and pass these values:

#### SENDMAIL.INI FILE:

```
smtp_server=smtp.gmail.com
smtp_port=587
error_logfile=error.log
debug_logfile=debug.log
auth_username=your_email_address_here
auth_password=your_password_here
```

3. Save all files and restart Apache Server from the XAMPP Panel and you're ready to go!

## Installation Instructions on Web Server for Production Environment

- [ ] To be completed
