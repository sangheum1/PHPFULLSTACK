DELIMITER $$
CREATE trigger test_update
AFTER UPDATE
ON departments
FOR EACH row
BEGIN
	UPDATE departments
	SET dept_name = 'trigger test'
	WHERE dept_no = 'd010';
END $$
DELIMITER ;



SHOW TRIGGERS;

DROP TRIGGER test_update;