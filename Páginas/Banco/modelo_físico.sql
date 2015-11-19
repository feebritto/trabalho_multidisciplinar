CREATE TABLE user_aluno(
	id_aluno integer,
	nome_aluno varchar(30),
	sobrenome_aluno varchar(30),
	email varchar(20),
	senha varchar(10),
	PRIMARY KEY (id_aluno)
	FOREIGN KEY (cursando) REFERENCES curso(id_curso)
)


CREATE TABLE curso(
	id_curso integer,
	nome varchar(10),
	duracao integer,
	status varchar(10),
	disciplinas varchar(10),
	PRIMARY KEY (id_curso),
	
)

CREATE TABLE disciplina(
	id_disciplina integer,
	nome varchar(10),
	PRIMARY KEY(id_disciplina)
	FOREIGN KEY(id_disciplinas) REFERENCES curso(disciplina)	
)
	
CREATE TABLE professor(
	id_professor integer,
	nome varchar(30),
	RG varchar(10),
	data_nascimento date,
	email varchar(15),
	telefone integer,
	endereco varchar(30),
	cidade varchar(15),
	estado varchar(2),
	pais varchar(20),
	curso_ministrado varchar(30),
	PRIMARY KEY (id_professor),
	FOREIGN KEY (curso_ministrado) REFERENCES curso(id_curso)	
)

-- Repositório para armaazenar o conteúdo das disciplinas e dos cursos
CREATE TABLE inventario(
	
)