CREATE TABLE Categoria (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(80) NOT NULL
);

CREATE TABLE Produto (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(80) NOT NULL,
    marca VARCHAR(60) NOT NULL,
    peso VARCHAR(20) NOT NULL, 
    imagem VARCHAR(255),
    categoria_id BIGINT NOT NULL, 

    FOREIGN KEY (categoria_id) REFERENCES Categoria(id)
);

CREATE TABLE Empresa (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(150) NOT NULL,
    imagem_logo VARCHAR(255), 
    imagem_empresa VARCHAR(255) 
);

CREATE TABLE Preco (
    preco FLOAT NOT NULL,
    produto_id BIGINT NOT NULL,
    empresa_id BIGINT NOT NULL,

    FOREIGN KEY (produto_id) REFERENCES Produto(id),
    FOREIGN KEY (empresa_id) REFERENCES Empresa(id)
);