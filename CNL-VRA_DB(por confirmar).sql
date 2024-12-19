CREATE TABLE `usuario` (
	`id_usuario` VARCHAR(100) NOT NULL UNIQUE,
	`nombre` VARCHAR(100) NOT NULL,
	`correo` VARCHAR(100) NOT NULL,
	`contrasena` VARCHAR(100) NOT NULL,
	`estado` BOOLEAN NOT NULL COMMENT '1 - habilitado / 0 - deshabilitado',
	`cat_cont_id` VARCHAR(50) NOT NULL COMMENT 'contratado, nombrado, etc',
	PRIMARY KEY(`id_usuario`)
);


CREATE TABLE `ciclo` (
	`id_ciclo` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	`nombre` VARCHAR(50) NOT NULL,
	`fecha_lim_plan` VARCHAR(50) NOT NULL,
	`fecha_aviso_plan` VARCHAR(50) NOT NULL,
	`fecha_lim_carga` VARCHAR(50) NOT NULL,
	`fecha_aviso_carga` VARCHAR(50) NOT NULL,
	PRIMARY KEY(`id_ciclo`)
);


CREATE TABLE `rol` (
	`id_rol` INTEGER NOT NULL UNIQUE,
	`nombre` VARCHAR(100) NOT NULL,
	PRIMARY KEY(`id_rol`)
);


CREATE TABLE `actividad` (
	`id_actividad` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	`nombre` VARCHAR(150) NOT NULL,
	`bloque` VARCHAR(100) NOT NULL COMMENT 'tipo de actividad',
	`horas` NUMERIC NOT NULL COMMENT 'ejm: 2',
	`doc_evidencia` VARCHAR(100) NOT NULL,
	`situacion` VARCHAR(100) NOT NULL COMMENT 'plan / evidencia',
	`usuario_id` VARCHAR(100) NOT NULL,
	`ciclo_id` INTEGER NOT NULL COMMENT 'ejm: 24-1, 24-2',
	PRIMARY KEY(`id_actividad`)
);


CREATE TABLE `revision` (
	`id_revision` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	`fecha` VARCHAR(50) NOT NULL,
	`hora` VARCHAR(50) NOT NULL,
	`profesor_id` VARCHAR(100) NOT NULL,
	`dir_dep_id` VARCHAR(100) NOT NULL,
	`actividad_id` INTEGER NOT NULL,
	PRIMARY KEY(`id_revision`)
);


CREATE TABLE `carga_horaria` (
	`id_carga_hor` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	`horas_lectivas` NUMERIC NOT NULL,
	`horas_no_lectivas` NUMERIC NOT NULL,
	`fecha` VARCHAR(50) NOT NULL,
	`ciclo_id` INTEGER NOT NULL,
	`usuario_id` VARCHAR(100) NOT NULL,
	PRIMARY KEY(`id_carga_hor`)
);


CREATE TABLE `categoria_contrato` (
	`id_cat_cont` VARCHAR(50) NOT NULL UNIQUE,
	`condicion` VARCHAR(100) NOT NULL,
	`contrato` VARCHAR(100) NOT NULL,
	PRIMARY KEY(`id_cat_cont`)
);


CREATE TABLE `rol_usuario` (
	`rol_id` INTEGER NOT NULL UNIQUE,
	`usuario_id` VARCHAR(100) NOT NULL,
	PRIMARY KEY(`rol_id`, `usuario_id`)
);


CREATE TABLE `departamento` (
	`id_departamento` VARCHAR(50) NOT NULL UNIQUE,
	`nombre` VARCHAR(100) NOT NULL,
	`escuela_id` INTEGER NOT NULL,
	PRIMARY KEY(`id_departamento`)
);


CREATE TABLE `facultad` (
	`id_facultad` VARCHAR(50) NOT NULL UNIQUE,
	`nombre` VARCHAR(100) NOT NULL,
	PRIMARY KEY(`id_facultad`)
);


CREATE TABLE `escuela` (
	`id_escuela` VARCHAR(50) NOT NULL UNIQUE,
	`nombre` VARCHAR(100) NOT NULL,
	`facultad_id` VARCHAR(50) NOT NULL,
	PRIMARY KEY(`id_escuela`)
);


CREATE TABLE `facultad_usuario` (
	`facultad_id` VARCHAR(50) NOT NULL UNIQUE,
	`usuario_id` VARCHAR(100) NOT NULL,
	PRIMARY KEY(`facultad_id`, `usuario_id`)
);


CREATE TABLE `escuela_usuario` (
	`escuela_id` VARCHAR(50) NOT NULL UNIQUE,
	`usuario_id` VARCHAR(100) NOT NULL,
	PRIMARY KEY(`escuela_id`, `usuario_id`)
);


CREATE TABLE `depertamento_usuario` (
	`departamento_id` VARCHAR(50) NOT NULL UNIQUE,
	`usuairo_id` VARCHAR(100) NOT NULL,
	PRIMARY KEY(`departamento_id`, `usuairo_id`)
);


ALTER TABLE `actividad`
ADD FOREIGN KEY(`usuario_id`) REFERENCES `usuario`(`id_usuario`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `actividad`
ADD FOREIGN KEY(`ciclo_id`) REFERENCES `ciclo`(`id_ciclo`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `revision`
ADD FOREIGN KEY(`profesor_id`) REFERENCES `usuario`(`id_usuario`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `revision`
ADD FOREIGN KEY(`dir_dep_id`) REFERENCES `usuario`(`id_usuario`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `revision`
ADD FOREIGN KEY(`actividad_id`) REFERENCES `actividad`(`id_actividad`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `carga_horaria`
ADD FOREIGN KEY(`ciclo_id`) REFERENCES `ciclo`(`id_ciclo`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `carga_horaria`
ADD FOREIGN KEY(`usuario_id`) REFERENCES `usuario`(`id_usuario`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `usuario`
ADD FOREIGN KEY(`cat_cont_id`) REFERENCES `categoria_contrato`(`id_cat_cont`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `rol_usuario`
ADD FOREIGN KEY(`usuario_id`) REFERENCES `usuario`(`id_usuario`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `rol_usuario`
ADD FOREIGN KEY(`rol_id`) REFERENCES `rol`(`id_rol`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `facultad_usuario`
ADD FOREIGN KEY(`facultad_id`) REFERENCES `facultad`(`id_facultad`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `facultad_usuario`
ADD FOREIGN KEY(`usuario_id`) REFERENCES `usuario`(`id_usuario`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `escuela`
ADD FOREIGN KEY(`facultad_id`) REFERENCES `facultad`(`id_facultad`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `departamento`
ADD FOREIGN KEY(`escuela_id`) REFERENCES `escuela`(`id_escuela`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `escuela_usuario`
ADD FOREIGN KEY(`escuela_id`) REFERENCES `escuela`(`id_escuela`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `escuela_usuario`
ADD FOREIGN KEY(`usuario_id`) REFERENCES `usuario`(`id_usuario`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `depertamento_usuario`
ADD FOREIGN KEY(`departamento_id`) REFERENCES `departamento`(`id_departamento`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `depertamento_usuario`
ADD FOREIGN KEY(`usuairo_id`) REFERENCES `usuario`(`id_usuario`)
ON UPDATE NO ACTION ON DELETE NO ACTION;