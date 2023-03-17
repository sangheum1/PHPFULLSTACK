-- 1. VIEW란?
-- 	가상의 테이블로, 보안과 함께 사용자의 편의성을 높이기 위해 사용합니다.
-- 	여러테이블을 조인 할 시에 view를 생성하여, 
-- 	복잡한 SQL을 편리하게 조회 할 수 있는 장점이 있습니다.

-- 	뷰를 

-- 2. VIEW 생성
-- 	CREATE [OR REPLACE] VIEW 뷰명
-- 	AS
-- 		SELECT 문
-- 	;
-- 	** [OR REPLACE] : 기존의 뷰가 있을 경우 덮어쓰기를 합니다. **

-- 3. VIEW 삭제
-- 	DROP view 뷰명;

CREATE VIEW test_view
as
	SELECT tit.title, COUNT(gender) c_g
	FROM employees emp
		INNER JOIN titles tit
		ON tit.emp_no = emp.emp_no
		WHERE emp.gender = 'F'
		AND tit.to_date = DATE(99990101)
	GROUP BY tit.title
;

SELECT * FROM test_view WHERE title = 'staff';

DROP VIEW test_view

-- 사원의 사원번호, 풀네임, 현재 소속부서명을 출력
CREATE VIEW test_view
as
SELECT emp.emp_no, CONCAT(last_name, ' ', first_name) fullname, dept.dept_name
FROM employees emp
	left outer JOIN dept_emp dep_e
	ON emp.emp_no = dep_e.emp_no
	INNER JOIN departments dept
	ON dep_e.dept_no = dept.dept_no
WHERE dep_e.to_date = DATE(99990101)
;

COMMIT;