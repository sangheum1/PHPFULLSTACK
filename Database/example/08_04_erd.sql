CREATE DATABASE grade_manage;

CREATE TABLE stud_information (
	stud_num INT NOT NULL
	, stud_birth date NOT NULL
	, stud_no VARCHAR(10) NOT NULL
	, stud_addr VARCHAR(20) NOT NULL
	, stud_tel int NOT NULL
	, stud_gen ENUM('남','여')  NOT NULL
	, stud_ent date NOT NULL
	, stud_grad date NOT NULL
	, stud_attend ENUM('입학','졸업','휴학','재학','제적') NOT NULL
	, CONSTRAINT PK_stud_num PRIMARY KEY(stud_num)
);

CREATE TABLE grade_information (
	stud_num INT NOT NULL
	, sub_num int NOT NULL
	, stud_score int NOT NULL
	, stud_rank int NOT NULL
	, stud_complete date NOT NULL
	, CONSTRAINT PK_stud_num PRIMARY KEY(stud_num, sub_num)
);

CREATE TABLE subject_information (
	sub_num INT NOT NULL
	, sub_no VARCHAR(10) NOT NULL
	, sub_prof int NOT NULL
	, sub_fix int NOT NULL
	, sub_semester VARCHAR(5) NOT NULL
	, sub_room INT NOT NULL
	, sub_start TIME NOT NULL
	, sub_fin TIME NOT NULL
	, sub_complete INT NOT NULL
	, prof_num INT NOT NULL
	, book_num INT NOT NULL
	, CONSTRAINT PK_sub_num PRIMARY KEY(sub_num)
);

CREATE TABLE professor_information (
	prof_num INT NOT NULL
	, prof_no VARCHAR(10) NOT NULL
	, prof_birth date NOT NULL
	, prof_deg int NOT NULL
	, prof_email VARCHAR(20) NOT NULL
	, prof_pos VARCHAR(10) NOT NULL
	, prof_lab int NOT NULL
	, prof_gen ENUM('남','여') NOT NULL
	, prof_hire date NOT NULL
	, CONSTRAINT PK_prof_num PRIMARY KEY(prof_num)
);

CREATE TABLE textbook_information (
	book_num INT NOT NULL
	, book_no VARCHAR(20) NOT NULL
	, CONSTRAINT PK_book_num PRIMARY KEY(book_num)
);