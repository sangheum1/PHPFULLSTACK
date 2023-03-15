SELECT CAST( 1234 AS CHAR(3) );

SELECT if( 1>2 , '참', '거짓');

SELECT emp_no, if( emp_no = 10001, 'first_name', 'birth_date')
FROM employees;

SELECT IFNULL(' ', 'aa');

SELECT
	emp_no
	, gender
	, case gender
		when 'M' then '남자'
		ELSE '여자'
	end
FROM employees LIMIT 10;

--직책이 senior engineer일 경우는 관리자 그외의 직책은 팀원으로하고 case결과값을  출력해주세요--
SELECT
	emp_no
	, case title
		when 'Senior Engineer' then '관리자'
		ELSE '팀원'
	END AS 'k_title'
FROM titles;