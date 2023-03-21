CREATE TABLE test_text (
	txt_no INt PRIMARY KEY auto_increment
	, f_text VARCHAR(4000)
);

CREATE FULLTEXT index idx_test_text on test_text(f_text);

INSERT INTO test_text(f_text) VALUES('동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라만세');
INSERT INTO test_text(f_text) VALUES('무궁화 삼천리 화려강산 대한사람 대한으로 길이 보전하세');
INSERT INTO test_text(f_text) VALUES('남산 위에 저 소나무 철갑을 두른듯 바람서리 불변함은 우리 기상일세');
INSERT INTO test_text(f_text) VALUES('가을하늘 공활한데 높고 구름 없이 바람 서리 불변함은 우리 기상일세');

SELECT * FROM test_text
WHERE MATCH(f_text) AGAINST('동해물과');


SELECT emp.emp_no, emp.first_name, dep.dept_no
FROM employees emp
	INNER JOIN dept_emp dep
	ON emp.emp_no = dep.emp_no
WHERE emp.emp_no = 10001;

SELECT emp.emp_no, emp.first_name, dep.dept_no, depa.dept_name
FROM employees emp
	INNER JOIN dept_emp dep
	ON emp.emp_no = dep.emp_no
	INNER JOIN departments depa
	ON dep.dept_no = depa.dept_no
WHERE emp.emp_no = 10001;