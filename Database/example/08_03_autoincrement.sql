-- auto_increment 생성 (넘버 2 튜플을 delete한후 다시 insert를 하면 넘버3로 생성됨)
CREATE TABLE test_member (
	mem_no INT(11) PRIMARY KEY auto_increment
	, mem_name VARCHAR(50)
);

INSERT INTO test_member(mem_name)
VALUES('윤상흠');
INSERT INTO test_member(mem_name)
VALUES('홍길동');
DELETE FROM test_member WHERE mem_no = 2;

SELECT *
FROM test_member;

DROP TABLE test_member;

-- table을 만들었을때 auto_increment 만 추가하는 방법 (auto_increment = 5를 추가하면 5부터시작)
CREATE TABLE test_member (
	mem_no INT(11) PRIMARY KEY
	, mem_name VARCHAR(50)
);

ALTER TABLE test_member MODIFY mem_no INT(11) AUTO_INCREMENT;

-- index 확인 : show index from 테이블;
SHOW INDEX FROM employees;

-- index 생성 : create index 인덱스명 on 테이블(컬럼);     or       create index 인덱스명 on 테이블(컬럼1, 컬럼2...);
CREATE INDEX idx_employees_last_name ON employees(last_name);

-- index 제거 : drop index 인덱스명 on 테이블;   => index는 수정이 불가(drop후 create 해야함)
drop index idx_employees_last_name on employees;


SELECT * FROM employees WHERE last_name = 'swan';