UPDATE departments
SET dept_name = '1000'
WHERE dept_no = 'd001'

SELECT *
FROM departments
WHERE dept_no ='d001'

SELECT *
FROM departments

INSERT INTO employees(
	emp_no
	, birth_date
	, first_name
	, last_name
	, gender
	, hire_date
)
VALUES
(
	500000
	, NOW()
	, 'Sangheum'
	, 'yun'
	, 'M'
	, NOW()
);

SELECT *
FROM employees
WHERE emp_no=500000

UPDATE employees
SET first_name='Yun'
, last_name='sangheum'
WHERE emp_no=500000;

SELECT *
FROM departments;

DELETE 
FROM employees
WHERE emp_no = 500000

SELECT *
FROM employees
ORDER BY emp_no DESC;