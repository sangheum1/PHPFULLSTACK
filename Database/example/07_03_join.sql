SELECT emp.emp_no, demp.dept_no, emp.first_name
FROM employees emp
	INNER JOIN dept_emp demp
	ON emp.emp_no = demp.emp_no
LIMIT 10;

INSERT INTO departments
VALUES (
	'd010'
	, 'test'
);

COMMIT;

SELECT dept.dept_no, dept.dept_name, d_m.emp_no
FROM departments dept
	left OUTER JOIN dept_manager d_m
		ON dept.dept_no = d_m.dept_no;

--테이블employees안에 존재하는 사원의 상관의 정보를 조회한것(self join)--		
SELECT emp2.*
FROM employees emp1
	INNER JOIN employees emp2
		ON emp1.sup_no = emp2.emp_no
WHERE emp1.emp_no = 10001;

SELECT * FROM employees WHERE emp_no = 10001 or emp_no = 10005
UNION
SELECT * FROM employees WHERE emp_no = 10005;