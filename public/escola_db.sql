-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Ago-2022 às 17:33
-- Versão do servidor: 8.0.29
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `datadenasc` date NOT NULL,
  `sexo` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nomedamae` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nomedopai` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nacionalidade` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `naturalidade` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nee` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tipo_nee` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cor_raca` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `data_cadastro` date DEFAULT NULL,
  `data_alteracao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `datadenasc`, `sexo`, `nomedamae`, `nomedopai`, `nacionalidade`, `naturalidade`, `nee`, `tipo_nee`, `cor_raca`, `data_cadastro`, `data_alteracao`) VALUES
(6, 'FULANO DE TAL DA SILVA', '2022-08-02', 'MASCULINO', 'FULANA', 'FULANO', 'BRASILEIRA', 'ARACATI-CE', 'NAO', '', 'NAO DECLARADA', '2022-07-04', '2022-08-19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_aluno`
--

CREATE TABLE `dados_aluno` (
  `id` int NOT NULL,
  `idaluno` int NOT NULL,
  `certidao` varchar(50) DEFAULT NULL,
  `rg_aluno` varchar(30) DEFAULT NULL,
  `cpf_aluno` varchar(14) DEFAULT NULL,
  `contato1` varchar(15) DEFAULT NULL,
  `contato2` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `transpescolar` varchar(3) DEFAULT NULL,
  `bolsafamilia` varchar(3) DEFAULT NULL,
  `nis` varchar(11) DEFAULT NULL,
  `cartaosus` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `dados_aluno`
--

INSERT INTO `dados_aluno` (`id`, `idaluno`, `certidao`, `rg_aluno`, `cpf_aluno`, `contato1`, `contato2`, `email`, `endereco`, `bairro`, `cep`, `cidade`, `transpescolar`, `bolsafamilia`, `nis`, `cartaosus`) VALUES
(6, 5, '9999999999999', '9999999999', '', '(85) 98139-7139', '(85) 98139-7139', '', 'forquilha', 'forquilha', '62800-000', 'aracati-ce', 'NAO', 'NAO', '9999999999', '9999999999999999'),
(7, 6, '9999999999999', '9999999999', '999.999.999-99', '(85) 98139-7139', '(85) 98139-7139', 'bosco1410@gmail.com', 'forquilha', 'forquilha', '62800-000', 'aracati-ce', 'SIM', 'NAO', '9999999999', '9999999999999999');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enturmacao`
--

CREATE TABLE `enturmacao` (
  `id` int NOT NULL,
  `idaluno` int NOT NULL,
  `nome` varchar(100) NOT NULL,
  `idturma` int NOT NULL,
  `turma` varchar(100) NOT NULL,
  `numero` int DEFAULT NULL,
  `tipo_matricula` varchar(50) NOT NULL,
  `tipo_movimento` varchar(50) NOT NULL,
  `sit_atual` varchar(50) NOT NULL,
  `data_transf` date DEFAULT NULL,
  `data_matricula` date DEFAULT NULL,
  `anoletivo` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas`
--

CREATE TABLE `notas` (
  `id` int NOT NULL,
  `idaluno` int NOT NULL,
  `nome` varchar(100) NOT NULL,
  `idturma` int NOT NULL,
  `turma` varchar(100) NOT NULL,
  `numero` int DEFAULT NULL,
  `periodo` varchar(50) NOT NULL,
  `art` decimal(15,2) DEFAULT NULL,
  `cie` decimal(15,2) DEFAULT NULL,
  `ef` decimal(15,2) DEFAULT NULL,
  `er` decimal(15,2) DEFAULT NULL,
  `geo` decimal(15,2) DEFAULT NULL,
  `his` decimal(15,2) DEFAULT NULL,
  `le` decimal(15,2) DEFAULT NULL,
  `por` decimal(15,2) DEFAULT NULL,
  `mat` decimal(15,2) DEFAULT NULL,
  `anoletivo` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacao_escolar`
--

CREATE TABLE `situacao_escolar` (
  `id` int NOT NULL,
  `idaluno` int NOT NULL,
  `idcenso` varchar(12) DEFAULT NULL,
  `sige` varchar(10) DEFAULT NULL,
  `situacao` varchar(30) DEFAULT NULL,
  `idturma` int NOT NULL,
  `turma` varchar(100) DEFAULT NULL,
  `aluno_enturmado` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `situacao_escolar`
--

INSERT INTO `situacao_escolar` (`id`, `idaluno`, `idcenso`, `sige`, `situacao`, `idturma`, `turma`, `aluno_enturmado`) VALUES
(3, 5, '999999999999', '9999999999', 'APROVADO', 9, '1º ANO', 'SIM'),
(4, 6, '999999999999', '9999999999', 'APROVADO', 11, '3º ANO', 'SIM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `id` int NOT NULL,
  `nome` varchar(100) NOT NULL,
  `turno` varchar(10) NOT NULL,
  `nivel` varchar(100) NOT NULL,
  `etapa` varchar(100) NOT NULL,
  `modalidade` varchar(100) NOT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_termino` time DEFAULT NULL,
  `anoletivo` varchar(4) NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`id`, `nome`, `turno`, `nivel`, `etapa`, `modalidade`, `hora_inicio`, `hora_termino`, `anoletivo`, `data`) VALUES
(9, '1º ANO', 'TARDE', 'ENSINO FUNDAMENTAL', 'ANOS INICIAIS', 'ENSINO REGULAR', '13:00:00', '17:00:00', '2022', '2022-08-14'),
(10, '2º ANO', 'MANHA', 'ENSINO FUNDAMENTAL', 'ANOS INICIAIS', 'ENSINO REGULAR', '07:00:00', '11:00:00', '2022', '2022-08-14'),
(11, '3º ANO', 'MANHA', 'ENSINO FUNDAMENTAL', 'ANOS INICIAIS', 'ENSINO REGULAR', '07:00:00', '11:00:00', '2022', '2022-08-14'),
(12, '4º ANO', 'TARDE', 'ENSINO FUNDAMENTAL', 'ANOS INICIAIS', 'ENSINO REGULAR', '13:00:00', '17:00:00', '2022', '2022-08-14'),
(13, '5º ANO', 'MANHA', 'ENSINO FUNDAMENTAL', 'ANOS INICIAIS', 'ENSINO REGULAR', '07:00:00', '11:00:00', '2022', '2022-08-14'),
(14, '6º ANO', 'MANHA', 'ENSINO FUNDAMENTAL', 'ANOS FINAIS', 'ENSINO REGULAR', '07:00:00', '11:00:00', '2022', '2022-08-14'),
(15, '7º ANO', 'MANHA', 'ENSINO FUNDAMENTAL', 'ANOS FINAIS', 'ENSINO REGULAR', '07:00:00', '11:00:00', '2022', '2022-08-14'),
(16, '8º ANO', 'TARDE', 'ENSINO FUNDAMENTAL', 'ANOS FINAIS', 'ENSINO REGULAR', '13:00:00', '17:00:00', '2022', '2022-08-14'),
(17, '9º ANO A', 'TARDE', 'ENSINO FUNDAMENTAL', 'ANOS FINAIS', 'ENSINO REGULAR', '13:00:00', '17:00:00', '2022', '2022-08-14'),
(18, '9º ANO B', 'TARDE', 'ENSINO FUNDAMENTAL', 'ANOS FINAIS', 'ENSINO REGULAR', '13:00:00', '17:00:00', '2022', '2022-08-14'),
(19, 'CRIANCAS BEM PEQUENAS 3 ANOS A', 'MANHA', 'EDUCACAO INFANTIL', 'EDUCACAO INFANTIL', 'ENSINO REGULAR', '07:00:00', '11:00:00', '2022', '2022-08-14'),
(20, 'CRIANCAS BEM PEQUENAS 3 ANOS B', 'MANHA', 'EDUCACAO INFANTIL', 'EDUCACAO INFANTIL', 'ENSINO REGULAR', '07:00:00', '11:00:00', '2022', '2022-08-14'),
(21, 'CRIANCAS PEQUENAS 4 ANOS', 'TARDE', 'EDUCACAO INFANTIL', 'EDUCACAO INFANTIL', 'ENSINO REGULAR', '13:00:00', '17:00:00', '2022', '2022-08-14'),
(22, 'CRIANCAS PEQUENAS 5 ANOS A', 'MANHA', 'EDUCACAO INFANTIL', 'EDUCACAO INFANTIL', 'ENSINO REGULAR', '07:00:00', '11:00:00', '2022', '2022-08-14'),
(23, 'CRIANCAS PEQUENAS 5 ANOS B', 'TARDE', 'EDUCACAO INFANTIL', 'EDUCACAO INFANTIL', 'ENSINO REGULAR', '13:00:00', '17:00:00', '2022', '2022-08-14');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `dados_aluno`
--
ALTER TABLE `dados_aluno`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idaluno` (`idaluno`);

--
-- Índices para tabela `enturmacao`
--
ALTER TABLE `enturmacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `situacao_escolar`
--
ALTER TABLE `situacao_escolar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idaluno` (`idaluno`);

--
-- Índices para tabela `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `dados_aluno`
--
ALTER TABLE `dados_aluno`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `enturmacao`
--
ALTER TABLE `enturmacao`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `situacao_escolar`
--
ALTER TABLE `situacao_escolar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `turmas`
--
ALTER TABLE `turmas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
