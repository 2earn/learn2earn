CREATE TRIGGER `after_update_user_instructor_learn` AFTER UPDATE ON `become_instructors`
    FOR EACH ROW BEGIN
    DECLARE  mob varchar(255);
    select mobile into mob from users where id=new.user_id;
    if new.status='accept' THEN
    update dev_2earn.users set instructor=2 where fullphone_number=concat('00',mob);
end if;
END
