# Student-feedback-sytsem
This project is based on Student feedbacks to faculty of colleges, school.

It have some features like faculty can see their average and individual feedback attributes in their account.
Admin can see overall faculty  average performance and individual performance too. 
Student only can give feedback to the faculty who are register or have acoount. 

The languages used in this project is html, css, javascript, php.

Xampp is used for database server here.
The database consist of three tables: student, faculty, administrator, feedback having primary key (id, email, ID, ID) respectively.

1. Student table having attributes are named as:
   id, roll, username, email, phone, course, password

2. Faculty table having attribute are named as:
   ID, username, email, phone, department, password, percent

3. administrator having attributes are named as:
   ID, user, email, password, phone

4. Feedback having attributes are named as:
   ID, a, b, c, d, e, f, fac, stud
   
   This database table structure defined in this project. You can change it also but then you have make some changes in php files also.
