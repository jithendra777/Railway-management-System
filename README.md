# Railway-management-System
About :-
Our project is about railway ticket booking system. Where different kinds of users will be able to book the tickets. 
Our database will store the details of what all things the user does. 
The UI allows the users to select the prescribed booking of the ticket and the user will be able to see the name of the train and the serial no and the timing arriving at the station. 
If the user wants to cancel the ticket they can cancel. 
The user will be able to see the departure and arriving timings of the trains in the stations.
Front End - HTML, CSS and JavaScript.
Business logic-PHP.
Back End-MySQL or MariaDB database server
Instructions:-
->Install xampp
->keep all the files(better create a folder of the files) with php extension in  htdocs folder.
->and create a database called database in the xampp my sql server and create the tables by using the below commands
	->create table customer(Fname varchar(20),Lname varchar(20),emailID varchar(25),passwords varchar(20),dateofbirth varchar(15),gender varchar(15),Occupation varchar(15),nationality varchar(15),PRIMARY KEY(emailID));
	->create table customer_ph(emailID varchar(25),Phone_number number(10),Primary key(emailID,Phone_number),Foreign key(emailID) references customer(emailID) ,constraint a check(Phone_number between 1000000000 and 9999999999));
	->create table train(Train_Name varchar(20),Train_number varchar(8),Starting_place varchar(15),Ending_place varchar(15),Train_type varchar(15),Arrival_time varchar(10),Depature_time varchar(10),Primary key(Train_number));
	->create table ticket(Boarding varchar(15),Destination varchar(15),classes varchar(15),Ticket_number varchar(10),status varchar(10),Seat_no varchar(4),emailID varchar(25),Train_number varchar(8),primary key(Ticket_number),foreign key(Train_number) references train,foreign key(emailID) references customer(emailID) );
	->create table personal_details(Fname varchar(20),Lname varchar(20),Phone_number number(10),Ticket_number varchar(10),dateofbirth varchar(15),gender varchar(15),primary key(Phone_number,Ticket_number),foreign key(Ticket_number) references ticket(emailID));
	->create table payments(Payment_ID varchar(10),Methods varchar(10),Paid_Date varchar(15),emailID varchar(25),Amount number(10),Card_Number varchar(15),foreign key(emailID) references customer(emailID));
->After this insert some trains in the train table and start executing from dbms_login_form_final.php.
->open chrome type in this way localhost/(folder-name)/(filename) better keep the file name which I had sent as it was the starting page as dbms_login_form_final.php
->The above line folder should be consisting of the files which I sent to you.
->Sign Up and then Sign In and book the tickets.
