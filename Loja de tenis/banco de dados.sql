CREATE TABLE marca (
  id_marca INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_marca VARCHAR(45) NOT NULL,
  PRIMARY KEY(id_marca)
);

CREATE TABLE produto (
  id_produto INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  marca_id_marca INTEGER UNSIGNED NOT NULL,
  nome_produto VARCHAR(45) NOT NULL,
  cor_produto VARCHAR(20) NULL,
  tamanho_produto INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(id_produto),
  INDEX produto_FKIndex1(marca_id_marca)
);


