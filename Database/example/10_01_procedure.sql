SHOW PROCEDURE STATUS;

DELIMITER $$
CREATE PROCEDURE test_proc(
	IN in_num INT
)
BEGIN
	SELECT *
	FROM employees
	LIMIT in_num;
END $$
DELIMITER ;

CALL TEST_proc(2);

DROP PROCEDURE test_proc;

DELIMITER $$
CREATE function fc_sum(num INT)
	RETURNS int
BEGIN
	RETURN num + num + num;
END $$
DELIMITER ;

SELECT fc_sum(3);

	DELIMITER $$
	CREATE PROCEDURE test()
	BEGIN
	DECLARE sal INT;
	DECLARE sum_sal INT;
	DECLARE cur_sal INT;
	DECLARE end_row BOOLEAN DEFAULT FALSE;
	
	declare cur_sal CURSOR FOR
		SELECT salary FROM salaries wherer enp_no = 10001;
		
	DECLARE CONTINUE handler FOR NOT FOUND
		SET end_row = TRUE;
	
	cursor_loop: loop
		fetch cur_sal INTO sal;
		if end_row then
			leave cursor_loop;
		END if;
		
		SET sum_sal = sum_sal + sal;
	END loop cursor_loop;
	SELECT sum_sal;
	END $$
	DELIMITER ;
	