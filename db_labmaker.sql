CREATE DATABASE IF NOT EXISTS labmaker
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE labmaker;

-- ==========================================
-- USUARIO
-- ==========================================

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    telefone VARCHAR(20),
    data_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    tipo_usuario ENUM('ALUNO', 'PROFESSOR', 'ADMIN') NOT NULL,
    ativo BOOLEAN DEFAULT TRUE
);

-- ==========================================
-- CURSO
-- ==========================================

CREATE TABLE curso (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    descricao TEXT,
    area VARCHAR(100),
    carga_horaria INT,
    nivel VARCHAR(50),
    data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- ==========================================
-- TURMA
-- ==========================================

CREATE TABLE turma (
    id INT AUTO_INCREMENT PRIMARY KEY,
    curso_id INT NOT NULL,
    codigo VARCHAR(50),
    semestre VARCHAR(20),
    data_inicio DATE,
    data_fim DATE,
    horario VARCHAR(100),
    status VARCHAR(30),

    CONSTRAINT fk_turma_curso
        FOREIGN KEY (curso_id)
        REFERENCES curso(id)
        ON DELETE CASCADE
);

-- ==========================================
-- PROFESSOR_TURMA
-- ==========================================

CREATE TABLE professor_turma (
    professor_id INT NOT NULL,
    turma_id INT NOT NULL,

    PRIMARY KEY (professor_id, turma_id),

    CONSTRAINT fk_professor_turma_professor
        FOREIGN KEY (professor_id)
        REFERENCES usuario(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_professor_turma_turma
        FOREIGN KEY (turma_id)
        REFERENCES turma(id)
        ON DELETE CASCADE
);

-- ==========================================
-- MATRICULA
-- ==========================================

CREATE TABLE matricula (
    id INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id INT NOT NULL,
    turma_id INT NOT NULL,
    data_matricula DATETIME DEFAULT CURRENT_TIMESTAMP,
    status VARCHAR(30),
    progresso DECIMAL(5,2),

    CONSTRAINT fk_matricula_aluno
        FOREIGN KEY (aluno_id)
        REFERENCES usuario(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_matricula_turma
        FOREIGN KEY (turma_id)
        REFERENCES turma(id)
        ON DELETE CASCADE,

    UNIQUE (aluno_id, turma_id)
);

-- ==========================================
-- MATERIAL
-- ==========================================

CREATE TABLE material (
    id INT AUTO_INCREMENT PRIMARY KEY,
    turma_id INT NOT NULL,
    professor_id INT NOT NULL,
    titulo VARCHAR(150),
    descricao TEXT,
    tipo VARCHAR(50),
    arquivo_url VARCHAR(255),
    data_publicacao DATETIME DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_material_turma
        FOREIGN KEY (turma_id)
        REFERENCES turma(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_material_professor
        FOREIGN KEY (professor_id)
        REFERENCES usuario(id)
        ON DELETE CASCADE
);

-- ==========================================
-- ATIVIDADE
-- ==========================================

CREATE TABLE atividade (
    id INT AUTO_INCREMENT PRIMARY KEY,
    turma_id INT NOT NULL,
    professor_id INT NOT NULL,
    titulo VARCHAR(150),
    descricao TEXT,
    data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP,
    data_entrega DATETIME,
    pontuacao_maxima DECIMAL(5,2),

    CONSTRAINT fk_atividade_turma
        FOREIGN KEY (turma_id)
        REFERENCES turma(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_atividade_professor
        FOREIGN KEY (professor_id)
        REFERENCES usuario(id)
        ON DELETE CASCADE
);

-- ==========================================
-- NOTA
-- ==========================================

CREATE TABLE nota (
    id INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id INT NOT NULL,
    atividade_id INT NOT NULL,
    valor DECIMAL(5,2),
    observacao TEXT,

    CONSTRAINT fk_nota_aluno
        FOREIGN KEY (aluno_id)
        REFERENCES usuario(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_nota_atividade
        FOREIGN KEY (atividade_id)
        REFERENCES atividade(id)
        ON DELETE CASCADE
);

-- ==========================================
-- MENSAGEM
-- ==========================================

CREATE TABLE mensagem (
    id INT AUTO_INCREMENT PRIMARY KEY,
    remetente_id INT NOT NULL,
    destinatario_id INT NOT NULL,
    assunto VARCHAR(150),
    conteudo TEXT,
    data_envio DATETIME DEFAULT CURRENT_TIMESTAMP,
    lida BOOLEAN DEFAULT FALSE,

    CONSTRAINT fk_mensagem_remetente
        FOREIGN KEY (remetente_id)
        REFERENCES usuario(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_mensagem_destinatario
        FOREIGN KEY (destinatario_id)
        REFERENCES usuario(id)
        ON DELETE CASCADE
);

CREATE INDEX idx_usuario_email
ON usuario(email);

CREATE INDEX idx_turma_curso
ON turma(curso_id);

CREATE INDEX idx_matricula_aluno
ON matricula(aluno_id);

CREATE INDEX idx_matricula_turma
ON matricula(turma_id);

CREATE INDEX idx_nota_aluno
ON nota(aluno_id);