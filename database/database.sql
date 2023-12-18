CREATE TABLE Categoria (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(80) NOT NULL,
		criado_em TIMESTAMP NOT NULL DEFAULT current_timestamp(),
    atualizado_em TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE Produto (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(80) NOT NULL,
    marca VARCHAR(60) NOT NULL,
    peso VARCHAR(20) NOT NULL,
    imagem VARCHAR(500),
    categoria_id BIGINT NOT NULL,
		criado_em TIMESTAMP NOT NULL DEFAULT current_timestamp(),
    atualizado_em TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP, 

    FOREIGN KEY (categoria_id) REFERENCES Categoria(id)
);

CREATE TABLE Empresa (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(150) NOT NULL,
    imagem_logo VARCHAR(500), 
    imagem_empresa VARCHAR(500),
		criado_em TIMESTAMP NOT NULL DEFAULT current_timestamp(),
    atualizado_em TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE Preco (
    preco FLOAT NOT NULL,
    produto_id BIGINT NOT NULL, 
    empresa_id BIGINT NOT NULL,
		criado_em TIMESTAMP NOT NULL DEFAULT current_timestamp(),
    atualizado_em TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP,

    FOREIGN KEY (produto_id) REFERENCES Produto(id),
    FOREIGN KEY (empresa_id) REFERENCES Empresa(id)
);