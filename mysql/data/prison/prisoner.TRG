TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `PRIS` AFTER INSERT ON `prisoner` FOR EACH ROW INSERT INTO prisonerinfo VALUES(NEW.PRISONER_ID,NEW.F_NAME,NEW.L_NAME,NEW.DATE_IN)'
sql_modes=1342177280
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='utf8_general_ci'
