INSERT INTO employees (
	emp_no
	, birth_date
	, first_name
	, last_name
	, gender
	, hire_date
)
VALUES (
	500000
	, NOW()
	, 'sangheum'
	, 'yun'
	, 'M'
	, NOW()
);

INSERT INTO salaries (
	emp_no
	, salary
	, from_date
	, to_date
)
VALUES (
	500000
	, 100000
	, NOW()
	, NOW()
);

INSERT INTO titles (
	emp_no
	, title
	, from_date
	, to_date
)
VALUES (
	500000
	, 'Engineer'
	, NOW()
	, NOW()
);

INSERT INTO dept_emp (
	emp_no
	, dept_no
	, from_date
	, to_date
)
VALUES (
	500000
	, 'd005'
	, NOW()
	, NOW()
);

--짝궁 것 넣기--
INSERT INTO employees (
	emp_no
	, birth_date
	, first_name
	, last_name
	, gender
	, hire_date
)
VALUES (
	500001
	, NOW()
	, 'gildong'
	, 'Hong'
	, 'M'
	, NOW()
);

INSERT INTO salaries (
	emp_no
	, salary
	, from_date
	, to_date
)
VALUES (
	500001
	, 110000
	, NOW()
	, NOW()
);

INSERT INTO titles (
	emp_no
	, title
	, from_date
	, to_date
)
VALUES (
	500001
	, 'Engineer'
	, NOW()
	, NOW()
);

INSERT INTO dept_emp (
	emp_no
	, dept_no
	, from_date
	, to_date
)
VALUES (
	500001
	, 'd005'
	, NOW()
	, NOW()
);

--소속 부서 변경--
UPDATE dept_emp
SET dept_no='d009'
WHERE emp_no = 500000
OR emp_no = 500001;

--모든정보를 삭제--
DELETE FROM employees
WHERE emp_no=500001;

DELETE FROM salaries
WHERE emp_no=500001;

DELETE FROM titles
WHERE emp_no=500001;

DELETE FROM dept_emp
WHERE emp_no=500001;

--관리자 나로변경--
INSERT INTO dept_manager (
dept_no
, emp_no
, from_date
, to_date
)
VALUES (
'd009'
, 500000
, NOW()
, DATE(99990101)
);

UPDATE dept_manager
SET to_date=NOW()
WHERE emp_no=111939;

--나의 직책을 변경--
INSERT INTO titles (
	emp_no
	, title
	, from_date
	, to_date
)
VALUES (
	500000
	, 'Senior Engineer'
	, NOW()
	, DATE(99990101)
);

--최고연봉 사원,최저연봉 사원 사번.이름 출력--

SELECT emp_no, first_name, last_name
FROM employees
WHERE emp_no IN (
							SELECT emp_no
							FROM salaries
							where salary in (
													(select MIN(salary)
													FROM salaries)
													,
													(SELECT MAX(salary)
													FROM salaries)
												 )
					 );
					 
--전체 사원의 평균 연봉을 출력--
SELECT AVG(salary)
FROM salaries;

--사번 두개의 평균 연ㅇ봉을 출력--
SELECT AVG(salary)
FROM salaries
WHERE emp_no=499975;
						

						

						
