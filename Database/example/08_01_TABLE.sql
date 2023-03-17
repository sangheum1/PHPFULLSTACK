CREATE TABLE employees_1 (
	emp_no INT(11) NOT NULL
	, birth_date date NOT NULL
	, first_name VARCHAR(14) NOT NULL
	, lastt_name VARCHAR(16) NOT NULL
	, gender ENUM('M', 'F') NOT NULL
	, hire_date DATE NOT NULL
	, CONSTRAINT PK_employees_1_emp_no PRIMARY KEY(emp_no)
);

SHOW FULL COLUMNS FROM employees_1;
SHOW FULL COLUMNS FROM salaries_1;
SHOW FULL COLUMNS FROM titles_1;

CREATE TABLE salaries_1 (
	emp_no INT(11) NOT NULL
	, salary INT(11) NOT NULL
	, from_date date NOT NULL
	, to_date date NOT NULL
	, CONSTRAINT PK_salaries_1_from_date PRIMARY KEY(from_date, emp_no)
	, CONSTRAINT FK_salaries_1_emp_no FOREIGN KEY(emp_no) references employees_1
);

DROP TABLE salaries_1;

-- CREATE TABLE salaries_1 (
-- 	emp_no INT(11) NOT NULL
-- 	, salary INT(11) NOT NULL
-- 	, from_date date NOT NULL
-- 	, to_date date NOT NULL
-- 	, CONSTRAINT PK_salaries_1_from_date PRIMARY KEY(from_date, emp_no)
-- 	, CONSTRAINT FK_salaries_1_emp_no FOREIGN KEY(emp_no) references employees_1(emp_no)
-- );

CREATE TABLE titles_1 (
	emp_no INT(11) NOT NULL
	, title VARCHAR(50) NOT NULL
	, from_date date NOT NULL
	, to_date date NOT NULL
	, CONSTRAINT PK_titles_1 PRIMARY KEY(from_date, emp_no, title)
	, CONSTRAINT FK_titles_1_emp_no FOREIGN KEY(emp_no) references employees_1
);