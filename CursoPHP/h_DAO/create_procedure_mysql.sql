CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_usuario_insert`(
pUser varchar(22),
pPassword Varchar(22),
pdtcreateUser Varchar(22)
)
BEGIN
INSERT INTO usuario(user, password,dtcreateUser)VALUES(pUser, pPassword,pdtcreateUser);

SELECT * FROM usuario WHERE idUsuario = LAST_INSERT_ID();
END