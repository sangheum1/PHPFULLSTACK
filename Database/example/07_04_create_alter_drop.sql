-- CREATE TABLE 테이블명(
-- 	컬럼 타입(크기) NOT NULL --NULL값 못들어감
-- 	,컬럼 타입 디폴트값
-- 	,constraint pk명 PRIMARY KEY(컬럼) --pk설정
-- 	,constraint fk명 foreign KEY(컬럼)
-- 		references 참조테이블(참조컬럼) (ON DELETE 동작 / ON UPDATE 동작)
-- 	,constraint UNIQUE명 UNIQUE(컬럼) --unique설정
-- 	,constraint CHECK명 CHECK (조건) --check설정


CREATE TABLE TEST_TBL (
	MEM_NO INT(5)
	, MEM_NAME VARCHAR(50) NOT NULL
	, MEM_AGE INT(3) NOT NULL
	, MEM_SEX ENUM('F', 'M')
	, MEM_SIGNIN_DATE DATETIME NOT NULL
	, MEM_SIGNOUT_DATE DATETIME
	, CONSTRAINT PK_EMPLOYEES_MEM_NO PRIMARY KEY(MEM_NO)
);

-- alter table 테이블명 add column 컬럼 데이터타입;
ALTER TABLE test_tbl ADD COLUMN ADDR1 VARCHAR(300);

SELECT *
FROM test_tbl;

SHOW FULL COLUMNS FROM test_tbl;

-- varchar(300)을 바꾸고 싶을때 alter 사용
ALTER TABLE test_tbl alter COLUMN ADDR1 VARCHAR(200);

-- 컬럼삭제 drop column 컬럼
ALTER TABLE test_tbl drop COLUMN ADDR1;

-- 테이블 삭제 drop table 테이블1 [, 테이블2, 테이블3 ... => 테이블 그자체를 삭제

INSERT INTO test_tbl (
	MEM_NO
	, MEM_NAME
	, MEM_AGE
	, MEM_SEX
	, MEM_SIGNIN_DATE
	, MEM_SIGNOUT_DATE
)
VALUE (
	4
	, '윤 상 흠'
	, 27
	, 'M'
	, NOW()
	, NULL
);

SELECT * FROM test_tbl;

DELETE FROM test_tbl;

-- 테이블의 데이터 삭제( ddl에 속한 truncate 이기 때문에 rollback으로 복구가 안되기 때문에 주의(delete는 dml이라서 복구가능))
TRUNCATE TABLE test_tbl;
