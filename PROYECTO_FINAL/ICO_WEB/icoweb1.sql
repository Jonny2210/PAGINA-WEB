DROP DATABASE IF EXISTS `icoweb1`;
CREATE DATABASE IF NOT EXISTS `icoweb1` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
  
  USE `icoweb1`; 
  
CREATE TABLE IF NOT EXISTS `registro` (
`numero` int(11) NOT NULL AUTO_INCREMENT,  
`nombre` text not null,
`apellido` text not null,
`edad` int(3) not null,
`pais` text not null,
`telefono` varchar (10) not null,
`correo` text not null,
`nombre_usuario` text not null,
`password` varchar (8) not null,
`fecha_registro` datetime not null default current_timestamp,
`permisos` int (11) not null default '2',
 PRIMARY KEY (`numero`)
)engine=Innodb default charset=utf8;



ALTER TABLE `icoweb1`.`registro` 
ADD PRIMARY KEY (`numero`);


insert into `registro`(`nombre`, `apellido`,`edad`,`pais`,`telefono`,`correo`,`nombre_usuario`,`password`,`fecha_registro`,`permisos`)values('Jonathan','Espejel','20','México','5510810394','jonathan@gmail.com','jonny2210','123456','2024-11-18 08:53:00',2);
insert into `registro`(`nombre`, `apellido`,`edad`,`pais`,`telefono`,`correo`,`nombre_usuario`,`password`,`fecha_registro`,`permisos`)values('Daniela','Morales','21','México','5523467890','daniela@gmail.com','danny1909','123456','2024-11-18 08:55:00',2);