# Overview

This software was a demonstration of the programming language PHP and an application of my experience with HTML, CSS, and SQL Relational Databases.

Using the niasurvey database, this program displays two queries of data from a set of surveys that my cousin has taken. To use this program you must create and populate the database using niasurvey.sql. The populate.php file displays the information in a webpage.

The purpose of this software was to demonstrate these concepts and to provide a way for the information collected to be effectively displayed for analysis.

[NiaSurvey Software Demo Video](https://youtu.be/5cEgYPy4krI)

# Relational Database

The relational database I am using in this program is MySQL and I used phpMyAdmin to run the queries. 

The structure of the database includes two tables, the people and the survey table. The people table contains the general name, age, and gender of each person who took the survey. The survey table includes all the results from each person. These two tables' shared key is the attribute ID. Using this ID we can perform a join between both tables and retrieve the information.

# Development Environment

My IDE for this program was Visual Studio Code. I used a MySQL database through the web server solution XAMPP.

The languages I used for this program include HTML, CSS, PHP, and SQL.

# Useful Websites

* [W3Schools](https://www.w3schools.com/php/php_mysql_intro.asp)
* [PHP.net](https://www.php.net/)

# Future Work

* Make the information easily updatable
* Function to display all of the information
* User search and query system
* Potential Authentication or User System

