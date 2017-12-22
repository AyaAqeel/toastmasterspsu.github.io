<?php
            $servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "toastmasters";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password,$dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}else {
			   echo "Connected to the database server successfully\n";
			}
			
			$query= "CREATE TABLE member(id varchar2(10) primary key,name VARCHAR2(30) not null,phone varchar2(10) null,
			email VARCHAR(50) not null, club_name varchar2(20)) null, registeration_month varchar2(10)";
			$table_created = mysqli_query($conn,$query);
			if ($table_created){
			echo "Table email_list created successfully";
			} else {
			echo "Error creating table: " . mysqli_error($conn);
			}
			
			$query= "CREATE TABLE admin(id varchar2(10) primary key,name VARCHAR2(30) not null,phone varchar2(10) null,
			email VARCHAR(50) not null, club_name varchar2(20)) null, registeration_month varchar2(10))";
			$table_created = mysqli_query($conn,$query);
			if ($table_created){
			echo "Table email_list created successfully";
			} else {
			echo "Error creating table: " . mysqli_error($conn);
			}
			
			$query= "CREATE TABLE meeting(meeting_number number(3) primary key, meeting_date date)";
			$table_created = mysqli_query($conn,$query);
			if ($table_created){
			echo "Table email_list created successfully";
			} else {
			echo "Error creating table: " . mysqli_error($conn);
			}
			
			$query= "CREATE TABLE project(id varchar2(10) primary key,role VARCHAR2(30) not null,project_num number(3) null,
			certificate_name VARCHAR(30) not null, meeting_date date,, foreign key (meeting_date) references meeting(meeting_date))";
			$table_created = mysqli_query($conn,$query);
			if ($table_created){
			echo "Table email_list created successfully";
			} else {
			echo "Error creating table: " . mysqli_error($conn);
			}
			
			$query= "CREATE TABLE speech(id varchar2(10) primary key,speech_topic VARCHAR2(30) not null,speech_num number(3) null,
			certificate_name VARCHAR(30) not null, meeting_date date, foreign key (meeting_date) references meeting(meeting_date))";
			$table_created = mysqli_query($conn,$query);
			if ($table_created){
			echo "Table email_list created successfully";
			} else {
			echo "Error creating table: " . mysqli_error($conn);
			}
			
			$query= "CREATE TABLE event(event_title varchar2(30), event_date date)";
			$table_created = mysqli_query($conn,$query);
			if ($table_created){
			echo "Table email_list created successfully";
			} else {
			echo "Error creating table: " . mysqli_error($conn);
			}
			
			mysqli_close($conn);
			
			
			
			
?>