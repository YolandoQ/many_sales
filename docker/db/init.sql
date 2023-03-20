CREATE DATABASE IF NOT EXISTS `many_sales`;

USE `many_sales`;

-- Criação da tabela de colaboradores
CREATE TABLE IF NOT EXISTS `colaboradores` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(50) NOT NULL,
    `senha` CHAR(32) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `telefone` VARCHAR(20),
    `tipo` ENUM('colaborador', 'fornecedor') NOT NULL,
    `ativo` BOOLEAN NOT NULL DEFAULT true,
    PRIMARY KEY (`id`)
);

-- Criação da tabela de ips_bloqueados
CREATE TABLE IF NOT EXISTS `ips_bloqueados` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `ip` VARCHAR(50) NOT NULL,
    `colaborador_id` INT NOT NULL,
    `ultimo_login` DATETIME,
    `num_tentativas` INT NOT NULL DEFAULT 0,
    `bloqueado` BOOLEAN NOT NULL DEFAULT false,
    `bloqueado_ate` DATETIME,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`colaborador_id`) REFERENCES colaboradores(`id`)
);

-- Criação da tabela de endereços dos colaboradores
CREATE TABLE IF NOT EXISTS `enderecos` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `colaborador_id` INT NOT NULL,
    `cep` VARCHAR(9) NOT NULL,
    `rua` VARCHAR(100) NOT NULL,
    `numero` VARCHAR(10),
    `complemento` VARCHAR(50),
    `cidade` VARCHAR(50) NOT NULL,
    `estado` CHAR(2) NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`colaborador_id`) REFERENCES colaboradores(`id`)
);

-- Criação da tabela de produtos
CREATE TABLE IF NOT EXISTS `produtos` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(50) NOT NULL,
    `descricao` TEXT,
    `preco` DECIMAL(10,2) NOT NULL,
    `ativo` BOOLEAN NOT NULL DEFAULT true,
    `fornecedor_id` INT NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`fornecedor_id`) REFERENCES colaboradores(`id`)

);

-- Criação da tabela de pedidos de compra
CREATE TABLE IF NOT EXISTS `pedidos` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `colaborador_id` INT NOT NULL,
    `observacoes` TEXT,
    `status` ENUM('ativo', 'finalizado') NOT NULL DEFAULT 'ativo',
    PRIMARY KEY (`id`),
    FOREIGN KEY (`colaborador_id`) REFERENCES colaboradores(`id`)
);

-- Criação da tabela de itens dos pedidos de compra
CREATE TABLE IF NOT EXISTS `itens_pedido` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `pedido_id` INT NOT NULL,
    `produto_id` INT NOT NULL,
    `quantidade` INT NOT NULL,
    `preco_unitario` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`pedido_id`) REFERENCES pedidos(`id`),
    FOREIGN KEY (`produto_id`) REFERENCES produtos(`id`)
);

-- Criação da tabela de permissões de tela
    CREATE TABLE IF NOT EXISTS `permissoes` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `colaborador_id` INT NOT NULL,
    `modulo` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`colaborador_id`) REFERENCES colaboradores(`id`)
);

-- Criação da tabela de log
CREATE TABLE IF NOT EXISTS `logs` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `acao` VARCHAR(50) NOT NULL,
    `usuario_id` INT NOT NULL,
    `data_hora` DATETIME NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`usuario_id`) REFERENCES colaboradores(`id`)
);

