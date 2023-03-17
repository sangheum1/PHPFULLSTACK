ALTER TABLE employees add COLUMN sup_no INT(11);
SELECT *
FROM employees;

SELECT emp1.emp_no, emp1.first_name, emp1.last_name, emp2.title
FROM employees emp1
	INNER JOIN titles emp2
	ON emp1.emp_no = emp2.emp_no;

--현재 월급 출력 2번 완료--
SELECT emp1.emp_no, emp1.gender, MAX(emp2.salary)
FROM employees emp1
	INNER JOIN salaries emp2
	ON emp1.emp_no = emp2.emp_no
GROUP BY emp2.emp_no;                                    








--사원10010의 현재 월급이력 출력
SELECT emp1.emp_no, emp1.first_name, emp1.last_name, emp2.salary
FROM employees emp1
	INNER JOIN salaries emp2
	ON emp1.emp_no = emp2.emp_no
WHERE emp1.emp_no = 10010
ORDER BY emp2.salary DESC
LIMIT 1; 

--사원의 사원번호, 풀네임, 소속부서명 출력
SELECT emp1.emp_no, emp1.first_name, emp1.last_name, emp2.dept_no
FROM employees emp1
	INNER JOIN dept_emp emp2
	ON emp1.emp_no = emp2.emp_no;

--현재 월급의 상위 10번까지의 사원 사번 5번 완료--

SELECT emp1.emp_no, MAX(emp2.salary)
FROM employees emp1
	INNER JOIN salaries emp2
	ON emp1.emp_no = emp2.emp_no
GROUP BY emp2.emp_no
ORDER BY MAX(emp2.salary) DESC
LIMIT 10;  


--각 부서의 부서장의 부서명,푸네임, 입사일을 출력(6번) 완료--
SELECT emp1.dept_no, emp2.first_name, emp2.last_name, emp1.from_date
FROM dept_manager emp1
	INNER JOIN employees emp2
	ON emp1.emp_no = emp2.emp_no and date(emp1.to_date) = '9999-01-01'
;

--현재 직책이 staff인  사원의 현재 전체 평균 월급을 출력(7번)--
SELECT emp1.emp_no, avg(emp1.salary)
FROM salaries emp1
	INNER JOIN titles emp2
	ON emp1.emp_no = emp2.emp_no
WHERE emp2.title= 'staff'
GROUP BY emp1.emp_no
;  

SELECT avg(emp1.salary)
FROM salaries emp1
	INNER JOIN titles emp2
	ON emp1.emp_no = emp2.emp_no
WHERE emp2.title= 'staff'
	AND emp2.to_date = DATE(99990101)
	AND emp1.to_date = DATE(99990101)
;  


SELECT emp1.emp_no, avg(emp1.salary)
FROM salaries emp1
	INNER JOIN titles emp2
	ON emp1.emp_no = emp2.emp_no AND emp2.title= 'staff'
GROUP BY emp1.emp_no
;  



--부서장 직을 역임했던 모든 사원의 풀네임과 입사일 ,사번 부서번호를 출력(8번)--
SELECT emp2.first_name, emp2.last_name, emp1.from_date, emp2.emp_no, emp1.dept_no
FROM dept_manager emp1
	INNER JOIN employees emp2
	ON emp1.emp_no = emp2.emp_no
;

SELECT CONCAT(last_name, ' ', first_name) fullname
			, hire_date
			, emp.emp_no
			, d_m.dept_no
FROM employees emp
	INNER JOIN dept_manager d_m
	ON emp.emp_no = d_m.emp_no
WHERE d_m.to_date < DATE(99990101);


--현재 각 직급별 평균월급 중 60000원 이상인 직급의 직급명 평균월급(정수)를 내림차순으로 출력9번)--
SELECT emp2.title, avg(emp1.salary)
FROM salaries emp1
	INNER JOIN titles emp2
	ON emp1.emp_no = emp2.emp_no
GROUP BY emp2.title HAVING AVG(emp1.salary) >= 60000
ORDER BY AVG(emp1.salary) desc
;

SELECT tit.title, TRUNCATE(AVG(salary),0) a_s
FROM titles tit
	INNER JOIN salaries sal
	ON sal.emp_no = tit.emp_no
	WHERE tit.to_date = DATE(99990101)
	AND sal.to_date = DATE(99990101)
GROUP BY tit.title HAVING a_s >= 60000
ORDER BY a_s DESC;




--성별이 여자인 사웑들의 직급별 사원수를 출력 10번 --
SELECT tit.title, COUNT(gender) c_g
FROM employees emp
	INNER JOIN titles tit
	ON tit.emp_no = emp.emp_no
	WHERE emp.gender = 'F'
	AND tit.to_date = DATE(99990101)
GROUP BY tit.title
;

SELECT tit.title, COUNT(*), emp.gender
FROM employees emp
	INNER JOIN titles tit
	ON tit.emp_no = emp.emp_no
	WHERE emp.gender = 'F'
	AND tit.to_date = DATE(99990101)
GROUP BY tit.title
;



