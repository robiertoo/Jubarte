CREATE DATABASE jubarte;
USE jubarte;

CREATE TABLE historia
(
	id INT AUTO_INCREMENT PRIMARY KEY,
	titulo VARCHAR(50) NOT NULL,
	texto TEXT NOT NULL,
	audio VARCHAR(100),
	imagem VARCHAR(100),
	video VARCHAR(100),
	criado DATETIME,
	modificado DATETIME
);

CREATE TABLE comentario
(
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(100),
	texto TEXT NOT NULL,
	video VARCHAR(100),
	criado DATETIME
);

CREATE TABLE historia_comentario
(
	historia_id INT NOT NULL,
	comentario_id INT NOT NULL,
	PRIMARY KEY (historia_id, comentario_id),
	FOREIGN KEY historia_key(historia_id) REFERENCES historia(id),
	FOREIGN KEY comentario_key(comentario_id) REFERENCES comentario(id)
);