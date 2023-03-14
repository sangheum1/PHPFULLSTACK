SELECT emp_no, title
FROM titles
WHERE title LIKE('%Engineer%')
;

SELECT distinct emp_no
FROM dept_emp;

SELECT *
FROM employees
LIMIT 10 OFFSET 4;

SELECT *
FROM employees
ORDER BY first_name ASC, last_name ASC;

SELECT COUNT(emp_no)
FROM employees
WHERE emp_no = 10001;

SELECT max(salary)
FROM salaries;

SELECT title, COUNT(title)
FROM titles
GROUP BY title HAVING COUNT(title) >= 100000;

SELECT emp_no, avg(salary) AS avg_s
FROM salaries
GROUP BY emp_no 
HAVING avg(salary)>=30000 and AVG(salary)<=50000;

SELECT emp_no, avg(salary)
FROM salaries
GROUP BY emp_no;

SELECT *
FROM dept_manager
WHERE dept_no = 
               (
               	SELECT dept_no FROM dept_manager
               	WHERE emp_no = 110344
               );

SELECT *
FROM dept_manager
WHERE dept_no in 
               (
               	SELECT emp_no FROM dept_manager
               	WHERE dept_no = 'd009'
               );

SELECT *
FROM dept_manager
WHERE dept_no = any
	               (
	               	SELECT dept_no FROM dept_manager
	               	WHERE emp_no = 110344
	               );

SELECT *
FROM dept_manager
WHERE dept_no = all
	               (
	               	SELECT dept_no FROM dept_manager
	               	WHERE emp_no = 110344
	               );             
               
SELECT emp_no, first_name, last_name, gender
FROM salaries
WHERE
GROUP BY emp_no having AVG(salary) >= 70000;

SELECT emp_no, first_name, last_name, gender
FROM employees
WHERE emp_no in(
						SELECT emp_no
						FROM salaries
						GROUP BY emp_no HAVING AVG(salary) >= 7000
					 );

SELECT *
FROM titles
WHERE emp_no = 10009
  AND to_date >= NOW();
  
-- 현재 직책이 senior Engineer인 사원의 사원번호와
-- 성을 조회해 주세요

SELECT emp_no, last_name
FROM employees
WHERE emp_no IN (
						SELECT emp_no
						FROM titles
						WHERE title = 'Senior Engineer'
						AND to_date >= NOW()
					 );