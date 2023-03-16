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

--문자열 함수--
SELECT CONCAT('안녕하세요 ', '좋은아침입니다.');
SELECT CONCAT_WS('/', 'a', 'b');

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

SELECT CONCAT(first_name, ' ', last_name)
FROM employees
WHERE emp_no=500000;

SELECT FORMAT(1234, 2);

SELECT LPAD('956', 6, '0');

SELECT SUBSTRING('abcdef', 2, 4);

SELECT SUBSTRING_index('ab.cd.ef.g', '.', 2);

SELECT TRUNCATE(2, 1.11);

SELECT TRUNCATE(1.11, 2);

SELECT DATE(NOW());

SELECT ADDDATE(NOW(), INTERVAL 1 MONTH);

SELECT ADDTIME(NOW(), '-1:1:1');

SELECT emp_no, RANK() over(ORDER BY salary ASC)
FROM salaries;