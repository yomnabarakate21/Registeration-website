Create DATABASE registeration;

use registeration;

Create Table Departement (
  dept_id        bigint AUTO_INCREMENT,
  name           text NOT NULL,
  description    text NOT NULL,
  PRIMARY KEY(dept_id)

);

Create Table User (

  user_id               bigint AUTO_INCREMENT,
  email                 text NOT NULL,
  username              text NOT NULL,
  password              text NOT NULL,
  registeration_date    TIMESTAMP,
  dept_id               bigint,
  PRIMARY KEY(user_id) ,
  Foreign key (dept_id) REFERENCES Departement(dept_id)


);

Create Table Course (
  course_id               bigint AUTO_INCREMENT,
  course_name             text NOT NULL,
  course_description      text,
  instructor_name         text NOT NULL,
  credit_hours            bigint ,
  dept_id                 bigint ,
  PRIMARY KEY (course_id),
  Foreign key (dept_id) REFERENCES Departement(dept_id)

)
