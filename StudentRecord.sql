create database StudentRecord
create TABLE Student (
    StudentID INT NOT NULL Primary Key,
    FirstName varchar(255),
    LastName varchar(255),
    DateOfBirth date,
    Email varchar(255),
    Phone INT,
);

create TABLE Course (
    CourseID INT NOT NULL Primary Key,
    CourseName varchar(255),
    Credits INT
);

create TABLE Instructor (
    InstructorID INT NOT NULL Primary Key,
    FirstName varchar(255),
    LastName varchar(255),
    Email varchar(255),
    Phone INT,
);

create TABLE Enrollment (
    EnrollmentID INT NOT NULL Primary Key,
    FOREIGN KEY (StudentID) REFERENCES Student(StudentID),
    FOREIGN KEY (CourseID) REFERENCES Course(CourseID),
    EnrollmentDate date,
    Grade INT );c