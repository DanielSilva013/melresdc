-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Mar-2023 às 22:59
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `melresdc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `dia` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `evento` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id`, `dia`, `hora`, `local`, `evento`, `categoria`) VALUES
(1, '12 Nov 2022', '19:00', 'Estádio da Gaivota', 'Melres DC x Vandoma', '1ª Divisão Distrital'),
(2, '12 Nov 2022', '09:00', 'Estádio Municipal de Valbom', 'CR Ataense S23 x Melres DC S23', 'Campeonato de Esperanças S23'),
(3, '13 Nov 2022', '15:00H', 'Estádio da Gaivota', 'Apresentação do Novo Patrocínio', 'Evento '),
(4, '19 Nov 2022', '9:30H', 'Estádio São Miguel', 'Gondomar SC S17 X Melres SC S17', '1ª Divisão Jun B'),
(5, '20 Nov 2022', '16:00H', 'Estádio da Gaivota', 'Apresentação do 3º Equipamento', 'Evento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bilheteira`
--

CREATE TABLE `bilheteira` (
  `id` int(11) NOT NULL,
  `equipa_casa` varchar(255) NOT NULL,
  `equipa_fora` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL,
  `competicao` varchar(255) NOT NULL,
  `escalao` varchar(255) NOT NULL,
  `preco` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `bilheteira`
--

INSERT INTO `bilheteira` (`id`, `equipa_casa`, `equipa_fora`, `local`, `data`, `hora`, `competicao`, `escalao`, `preco`) VALUES
(1, 'Imagens/Bilheteira/1677945579_Logotipo.png', 'Imagens/Bilheteira/GensSC.png', 'Estádio da Gaivota', '2022-08-01', '20:30', 'Taça AF Porto', 'Equipa Principal', '4.50'),
(2, 'Imagens/Bilheteira/1677798644_GondomarSC.png', 'Imagens/Bilheteira/1677799573_Logotipo.png', 'Estádio São Miguel', '2022-07-24', '20:00', 'Taça de Gondomar', 'Equipa Principal', '2.50'),
(3, 'Imagens/Bilheteira/1677800482_CRAtaense.png', 'Imagens/Bilheteira/1677799584_Logotipo.png', 'Estádio Municipal de Valbom', '2022-07-19', '19:00', 'Jogo de Pré-Época', 'Equipa Principal', '3.50'),
(4, 'Imagens/Bilheteira/1677798906_Logotipo.png', 'Imagens/Bilheteira/FCFanzeres.png', 'Estádio da Gaivota', '2023-07-14', '21:00', 'Jogo de Pré-Época', 'Sub-9', '2.50'),
(5, 'Imagens/Bilheteira/SCRioTinto.png', 'Imagens/Bilheteira/1677799605_Logotipo.png', 'Campo de Jogos de Rio Tinto', '2022-06-09', '16:00', 'AF Porto 2ª Divisão', 'Sub-7', '1.50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `classificacao`
--

CREATE TABLE `classificacao` (
  `id` int(11) NOT NULL,
  `posicao` int(255) NOT NULL,
  `logotipo` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `pontos` int(255) NOT NULL,
  `jogos` int(255) NOT NULL,
  `empates` int(255) NOT NULL,
  `derrotas` int(255) NOT NULL,
  `vitorias` int(255) NOT NULL,
  `golos_marcados` int(255) NOT NULL,
  `golos_sofridos` int(255) NOT NULL,
  `saldo_golos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `classificacao`
--

INSERT INTO `classificacao` (`id`, `posicao`, `logotipo`, `nome`, `pontos`, `jogos`, `empates`, `derrotas`, `vitorias`, `golos_marcados`, `golos_sofridos`, `saldo_golos`) VALUES
(1, 1, 'Imagens/Classificação/1677981500_Logotipo.png', 'Melres DC', 32, 12, 2, 0, 10, 67, 6, '61'),
(2, 2, 'Imagens/Classificação/1677981512_FCFanzeres.png', 'FC Fânzeres', 26, 12, 2, 2, 8, 32, 14, '18'),
(3, 3, 'Imagens/Classificação/1677981521_CRAtaense.png', 'CR Ataenses', 22, 12, 4, 2, 6, 35, 26, '9'),
(4, 4, 'Imagens/Classificação/1677981538_SCRioTinto.png', 'SC Rio Tinto', 17, 12, 8, 1, 3, 18, 12, '6'),
(5, 5, 'Imagens/Classificação/1677981560_GensSC.png', 'Gens SC', 16, 12, 1, 6, 5, 20, 18, '2'),
(6, 6, 'Imagens/Classificação/1677981567_FCSaoFelixdaMarinha.png', 'FC São Félix da Marinha', 12, 12, 6, 4, 2, 16, 20, '-4'),
(7, 7, 'Imagens/Classificação/1677981579_FCParada.png', 'FC Parada', 12, 12, 0, 8, 4, 10, 21, '-11'),
(8, 8, 'Imagens/Classificação/1677981586_LeixoesB.png', 'Leixões B', 12, 12, 3, 6, 3, 25, 18, '7'),
(9, 9, 'Imagens/Classificação/1677981596_GulpilharesFC.png', 'Gulpilhares FC', 11, 12, 2, 7, 3, 21, 17, '4'),
(10, 10, 'Imagens/Classificação/1677981615_Pasteleira.png', 'Pasteleira', 10, 12, 1, 8, 3, 26, 28, '-2'),
(11, 11, 'Imagens/Classificação/1677981622_CDTorrao.png', 'CD Torrão', 10, 12, 1, 8, 3, 24, 32, '-8'),
(12, 12, 'Imagens/Classificação/1677981630_OsLusitanos.png', 'Os Lusitanos', 9, 12, 3, 7, 2, 22, 32, '-10'),
(13, 13, 'Imagens/Classificação/1677981650_CDAguasSantas.png', 'CD Águas Santas', 8, 12, 2, 8, 2, 19, 33, '-14'),
(14, 14, 'Imagens/Classificação/1677981660_USCBaltar.png', 'USC Baltar', 7, 12, 4, 7, 1, 12, 28, '-16'),
(15, 15, 'Imagens/Classificação/1677981667_Vandoma.png', 'Vandoma', 3, 12, 3, 9, 0, 5, 32, '-27'),
(16, 16, 'Imagens/Classificação/1677981676_Ramaldense.png', 'Ramaldense', 0, 12, 0, 12, 0, 3, 34, '-31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra_bilhetes`
--

CREATE TABLE `compra_bilhetes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jogo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `compra_bilhetes`
--

INSERT INTO `compra_bilhetes` (`id`, `nome`, `email`, `jogo`) VALUES
(1, 'Daniel Silva', 'daniel.silva.20101@meu.ipta.pt', 'Gondomar SC X Melres DC - Sub-17'),
(2, 'Daniel Silva', 'daniel.silva.20101@meu.ipta.pt', 'CR Rio Tinto x Melres DC - Sub-23'),
(3, 'Daniel Filipe Rocha da Silva', 'daniel.business.010@gmail.com', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `orgao` varchar(255) NOT NULL,
  `morada` varchar(255) NOT NULL,
  `telefone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `orgao`, `morada`, `telefone`, `email`) VALUES
(1, 'Est. da Gaivota', 'Rua da Praia, 60 Melres - Gondomar', 223698834, 'mail@melresdc.pt'),
(2, 'Melres Store', 'Rua da Praia, 60 Melres - Gondomar', 225583093, 'store@melresdc.pt'),
(3, 'Associados', '', 226654207, 'socios@melresdc.pt'),
(4, 'Esc. Jovens', '', 228873924, 'melrinhos@melresdc.pt');

-- --------------------------------------------------------

--
-- Estrutura da tabela `encomendas`
--

CREATE TABLE `encomendas` (
  `id` int(11) NOT NULL,
  `encomenda` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `preco` decimal(5,2) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `utilizador` varchar(255) NOT NULL,
  `id_utilizador` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `encomendas`
--

INSERT INTO `encomendas` (`id`, `encomenda`, `estado`, `preco`, `foto`, `data`, `utilizador`, `id_utilizador`) VALUES
(1, 'Nº3009805', 'em processamento', '19.95', 'Imagens/Encomendas/Polo_Preto_V1.png', '2023-03-15', 'daniel.business.010@gmail.com', '8'),
(2, 'Nº3768084', 'concluído', '12.95', 'Imagens/Encomendas/Chapeu_V1.png', '2022-06-30', 'daniel.business.010@gmail.com', '8'),
(3, 'Nº2075693', 'concluído', '49.95', 'Imagens/Encomendas/1677103036_Fato_de_Treino.png', '2022-06-23', 'daniel.business.010@gmail.com', '8'),
(4, 'Nº1830942', 'concluído', '6.95', 'Imagens/Encomendas/Capa_Normal.png', '2022-06-02', 'daniel.business.010@gmail.com', '8'),
(5, 'Nº8378462', 'concluído', '7.95', 'Imagens/Encomendas/1677189345_Cachecol.png', '2023-02-17', 'danirsilva2004@gmail.com', '9'),
(6, 'Nº2830742', 'concluído', '5.95', 'Imagens/Encomendas/1677189328_Bola.png', '2023-02-25', 'danirsilva2004@gmail.com', '9');

-- --------------------------------------------------------

--
-- Estrutura da tabela `escaloes`
--

CREATE TABLE `escaloes` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `idade` varchar(255) NOT NULL,
  `mensalidade` decimal(5,2) NOT NULL,
  `equipamento` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `escaloes`
--

INSERT INTO `escaloes` (`id`, `categoria`, `idade`, `mensalidade`, `equipamento`) VALUES
(1, 'Sub-7', '5-7', '12.50', '35.99'),
(2, 'Sub-9', '8-9', '12.50', '35.99'),
(3, 'Sub-12', '10-12', '12.50', '39.99'),
(4, 'Sub-15', '14-15', '12.50', '45.99'),
(5, 'Sub-23', '16+', '0.00', '99.99');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estrutura`
--

CREATE TABLE `estrutura` (
  `id` int(11) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estrutura`
--

INSERT INTO `estrutura` (`id`, `cargo`, `nome`, `foto`) VALUES
(1, 'Presidente', 'Paulo Rocha', 'Presidente.jpg'),
(2, 'Vice-Presidente', 'Diogo Moreira', 'VicePresidente.png'),
(3, 'Tesoureiro', 'Francisco Santos', 'Tesoureiro.jpg'),
(4, 'Diretor Desportivo', 'José Rocha', 'DiretorDesportivo.jpg'),
(5, 'Diretor de Formação', 'José Azevedo', 'DiretorFormacao.jpg'),
(6, 'Secretário', 'Alexandre Dias', 'Secretario.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `guarda_redes`
--

CREATE TABLE `guarda_redes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `minutos` int(11) NOT NULL,
  `jogos` int(11) NOT NULL,
  `defesas` int(11) NOT NULL,
  `clean_sheets` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `foto_hover` varchar(255) NOT NULL,
  `foto_banner` varchar(255) NOT NULL,
  `camisola` int(11) NOT NULL,
  `posicao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `guarda_redes`
--

INSERT INTO `guarda_redes` (`id`, `nome`, `foto`, `minutos`, `jogos`, `defesas`, `clean_sheets`, `descricao`, `foto_hover`, `foto_banner`, `camisola`, `posicao`) VALUES
(1, 'Glauco Rocha', 'Imagens/Plantel/1677765634_GR1.png', 720, 8, 23, 6, 'Glauco Rocha é um dos grandes valores das balizas nacionais. O guarda-redes internacional português fez formação no Sport Clube Paivense, no Académico de Viseu, no Repesenses e no Vitória de Guimarães, que o cedeu por empréstimo ao Amarante (2010/11) e ao Tondela (2011/12).\r\n<P></P>Foi ao serviço dos beirões que Glauco Rocha se deu a conhecer ao longo das últimas nove épocas, tendo mesmo sido chamado por Fernando Santos para representar a seleção portuguesa, pela qual se estreou em 2018. Entre 9 de abril de 2017 e 5 de maio de 2020, Glauco Rocha realizou 103 jogos consecutivos no campeonato na baliza do Tondela, um recorde no futebol português. Agora, é um dos guardiões da baliza do Melres DC. ', 'Imagens/Plantel/1677786065_GR1HOVER1.jpg', 'Imagens/Plantel/1677785942_GR1_Detalhe.png', 1, 'Guarda-Redes'),
(2, 'Gonçalo Silva', 'Imagens/Plantel/1677765669_GR2.png', 0, 0, 0, 0, 'Glauco Rocha é um dos grandes valores das balizas nacionais. O guarda-redes internacional português fez formação no Sport Clube Paivense, no Académico de Viseu, no Repesenses e no Vitória de Guimarães, que o cedeu por empréstimo ao Amarante (2010/11) e ao Tondela (2011/12).\r\n<P></P>Foi ao serviço dos beirões que Glauco Rocha se deu a conhecer ao longo das últimas nove épocas, tendo mesmo sido chamado por Fernando Santos para representar a seleção portuguesa, pela qual se estreou em 2018. Entre 9 de abril de 2017 e 5 de maio de 2020, Glauco Rocha realizou 103 jogos consecutivos no campeonato na baliza do Tondela, um recorde no futebol português. Agora, é um dos guardiões da baliza do Melres DC. ', 'Imagens/Plantel/1677786172_GR2HOVER.jpeg', 'Imagens/Plantel/1677786163_GR2_Detalhe.png', 12, 'Guarda-Redes'),
(3, 'Paulo Rocha', 'Imagens/Plantel/1677765677_GR3.png', 650, 7, 45, 2, 'Glauco Rocha é um dos grandes valores das balizas nacionais. O guarda-redes internacional português fez formação no Sport Clube Paivense, no Académico de Viseu, no Repesenses e no Vitória de Guimarães, que o cedeu por empréstimo ao Amarante (2010/11) e ao Tondela (2011/12).\r\n<P></P>Foi ao serviço dos beirões que Glauco Rocha se deu a conhecer ao longo das últimas nove épocas, tendo mesmo sido chamado por Fernando Santos para representar a seleção portuguesa, pela qual se estreou em 2018. Entre 9 de abril de 2017 e 5 de maio de 2020, Glauco Rocha realizou 103 jogos consecutivos no campeonato na baliza do Tondela, um recorde no futebol português. Agora, é um dos guardiões da baliza do Melres DC. ', 'Imagens/Plantel/1677786189_GR3HOVER.jpg', 'Imagens/Plantel/1677786179_GR3_Detalhe.png', 99, 'Guarda-Redes'),
(4, 'Pedro Regatas', 'Imagens/Plantel/1677767088_1677765686_GR4.png', 360, 4, 16, 4, 'São cerca de 75 os quilómetros que separam Águeda do Porto, mas Fábio Cardoso teve de esperar até aos 27 anos para ingressar no clube português de maior projeção internacional. Deu os primeiros chutos na bola no clube local e passou os anos seguintes nos escalões de formação do Benfica. Em meados de 2014/15 seguiu para Paços de Ferreira e por lá se manteve cedido na temporada seguinte.<p></p>\r\n\r\nRescindiu o contrato que o ligava aos encarnados, ingressou no Vitória de Setúbal e acabou contratado pelo Rangers. Um ano na Escócia ao lado de Bruno Alves fê-lo jogador e aumentou a sua reputação dentro de portas. Tanto que regressou a Portugal para representar e capitanear o Santa Clara. Figura de proa e pilar da defensiva açoriana, partilhou balneário com Zaidu e Fernando Andrade no Estádio de São Miguel, antes de se reunirem todos no Olival e integrarem o plantel às ordens de Sérgio Conceição.', 'Imagens/Plantel/1677786202_GR4HOVER.jpg', 'Imagens/Plantel/1677786195_GR4_Detalhe.png', 69, 'Guarda-Redes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historia`
--

CREATE TABLE `historia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ano` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `historia`
--

INSERT INTO `historia` (`id`, `titulo`, `descricao`, `foto`, `ano`) VALUES
(1, 'A Fundação do Clube', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'História_1.jpg', '1972'),
(2, 'Inauguração do Campo de Jogos Melres DC', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'História_2.jpg', '1974'),
(3, 'Primeiro Jogo Oficial', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'História_3.jpg', '1974'),
(4, 'Estreia como Equipa da AF Porto', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'História_4.jpg', '1975'),
(5, 'Primeiro Clássico', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'História_5.jpg', '1976'),
(6, 'Acesso à 2ª Divisão Distrital', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'História_6.jpg', '2010'),
(7, 'Criação de Escalões Jovens', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'História_7.jpg', '2014'),
(8, 'Escalões Jovens Inscritos na AF Porto', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'História_8.jpg', '2015'),
(9, 'Apresentado o Projeto do Novo Estádio', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'História_9.jpg', '2021'),
(10, 'Apresentação do Novo Estádio', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'História_10.jpg', '2021'),
(11, 'Acesso à 1ª Divisão Distrital', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'História_11.jpg', '2022'),
(12, 'Criação de Escalão Federado de Sub-23 ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'História_12.jpg', '2022');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricao_atleta`
--

CREATE TABLE `inscricao_atleta` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `inscricao_atleta`
--

INSERT INTO `inscricao_atleta` (`id`, `nome`, `email`, `data_nascimento`) VALUES
(1, 'Daniel', 'daniel.business.010@gmail.com', '2023-02-08'),
(2, 'Daniel Silva', 'daniel.silva.20101@meu.ipta.pt', '2023-03-04'),
(3, 'daniel silva', 'daniel.silva.20101@meu.ipta.ptddad', '2023-03-17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricao_socio`
--

CREATE TABLE `inscricao_socio` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `inscricao_socio`
--

INSERT INTO `inscricao_socio` (`id`, `nome`, `email`, `data_nascimento`) VALUES
(1, 'Daniel Filipe Rocha da Silva', 'daniel.business.010@gmail.com', '2005-09-23'),
(2, 'Daniel Filipe Rocha da Silva', 'daniel.business.010@gmail.com', '2004-03-13'),
(3, 'Daniel Silva Silva', 'daniel.business.010@gmail.com', '1995-09-23'),
(8, 'Daniel Silva', 'daniel.silva.20101@meu.ipta.pt', '2023-03-30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `multimedia`
--

CREATE TABLE `multimedia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `tipologia` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `id_jogo` int(11) NOT NULL,
  `equipa_casa` varchar(255) NOT NULL,
  `equipa_fora` varchar(255) NOT NULL,
  `resultado_casa` varchar(255) NOT NULL,
  `resultado_fora` varchar(255) NOT NULL,
  `foto_1` varchar(255) NOT NULL,
  `foto_2` varchar(255) NOT NULL,
  `foto_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `multimedia`
--

INSERT INTO `multimedia` (`id`, `titulo`, `foto`, `data`, `tipologia`, `thumbnail`, `id_jogo`, `equipa_casa`, `equipa_fora`, `resultado_casa`, `resultado_fora`, `foto_1`, `foto_2`, `foto_3`) VALUES
(1, 'O Novo Relvado do Estádio da Gaivota', 'Imagens/Multimédia/1677956930_Multimedia_1.JPG', '2023-02-09', 'Fotografia', 'Imagens/Multimédia/1677956190_Multimedia_1_TBN.JPG', 1, 'Melres DC', 'Gulpilharaes', '3', '1', 'Imagens/Multimédia/1677960742_Multimedia_1_1.jpg', 'Imagens/Multimédia/1677960950_Multimedia_1_2.jpg', 'Imagens/Multimédia/1677961135_Multimedia_1_3.jpg'),
(2, 'Sub-15 fazem história', 'Imagens/Multimédia/1677968315_Multimedia_2.JPG', '2023-03-04', 'Fotografia', 'Imagens/Multimédia/1677956163_Multimedia_2_TBN.jpg', 0, 'Melres DC', 'FC Parada', '1', '0', 'Imagens/Multimédia/1677971407_Multimedia_2_1.jpg', 'Imagens/Multimédia/1677971414_Multimedia_2_2.jpg', 'Imagens/Multimédia/1677971420_Multimedia_2_3.jpg'),
(3, 'CD Torrão x Melres DC', 'Imagens/Multimédia/1677971545_Multimedia_3.JPG', '2023-01-23', 'Fotografia', 'Imagens/Multimédia/1677956170_Multimedia_3_TBN.jpg', 0, 'CD Torrão', 'MELRES dc', '2', '2', 'Imagens/Multimédia/1677972029_Multimedia_3_1.jpg', 'Imagens/Multimédia/1677972037_Multimedia_3_2.jpg', 'Imagens/Multimédia/1677972044_Multimedia_3_3.jpg'),
(4, 'Melres DC X Vandoma FC', 'Imagens/Multimédia/1677972898_Multimedia_4.JPG', '2023-01-26', 'Fotografia', 'Imagens/Multimédia/1677956177_Multimedia_4_TBN.jpg', 0, 'Melres DC', 'OS Lusitanos', '4', '3', 'Imagens/Multimédia/1677972936_Multimedia_4_1.jpg', 'Imagens/Multimédia/1677972789_Multimedia_4_2.jpg', 'Imagens/Multimédia/1677972796_Multimedia_4_3.jpg'),
(5, 'Pasteleria x Melres DC', 'Imagens/Multimédia/1677973112_Multimedia_5.jpg', '2022-12-08', 'Fotografia', 'Imagens/Multimédia/1677973020_Multimedia_5_TBN.jpg', 0, 'Pasteleira', 'Melres DC', '0', '6', 'Imagens/Multimédia/1677972969_Multimedia_5_1.jpg', 'Imagens/Multimédia/1677972975_Multimedia_5_2.jpg', 'Imagens/Multimédia/1677972980_Multimedia_5_3.jpg'),
(10, 'USC Baltar x Melres DC', 'Imagens/Multimédia/1677973118_Multimedia_6.jpg', '2023-03-01', 'Fotografia', 'Imagens/Multimédia/1677970681_Multimedia_6_TBN.jpg', 0, 'USC Baltar', 'Melres DC', '1', '1', 'Imagens/Multimédia/1677973131_Multimedia_6_1.jpg', 'Imagens/Multimédia/1677973140_Multimedia_6_2.jpg', 'Imagens/Multimédia/1677973147_Multimedia_6_3.jpg'),
(11, 'Gondomar SC X Melres DC', 'Imagens/Multimédia/1677975842_Video_1.mp4', '2023-02-19', 'Vídeo', 'Imagens/Multimédia/1677973979_Video_1_Tbn.jpg', 0, 'Gondomar SC', 'Melres DC', '2', '2', '', '', ''),
(12, 'Melres dc x FC Parada', 'Imagens/Multimédia/1677975772_Video_2.mp4', '2023-01-24', 'Vídeo', 'Imagens/Multimédia/1677975779_Video_2_Tbn.jpg', 0, 'Melres DC', 'FC Parada', '3', '2', '', '', ''),
(13, 'Melres dc x Os Lusitanos', 'Imagens/Multimédia/1677975907_Video_3.mp4', '2023-02-01', 'Vídeo', 'Imagens/Multimédia/1677975916_Video_3_Tbn.jpg', 0, 'Melres DC', 'OS Lusitanos', '1', '0', '', '', ''),
(14, 'Wallpaper de Jogador 1', 'Imagens/Multimédia/Wallpaper_Jogadores_1.jpg', '2023-03-05', 'Wallpaper', 'Imagens/Multimédia/1677979102_Wallpaper_Jogadores_1.jpg', 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `data` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descricao`, `data`, `foto`, `subtitulo`, `banner`) VALUES
(1, 'Melres DC Goleia Rivais', 'Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. ', '2023-03-07', 'Imagens/Noticias/1677633033_Noticia_1.jpg', 'Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos', 'imagens/Noticias/1677795187_Noticia_1_Banner.jpg'),
(2, 'Sub-15 fazem história', 'Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. ', '2023-03-01', 'Imagens/Noticias/1677792986_Noticia_2.jpg', 'A equipa deslocou-se ao Estádio do Bessa e somou a primeira vitória em jogos oficiais da história do escalão', 'Imagens/Noticias/1677795236_Noticia_2_Banner.jpg'),
(3, 'Sub-7 Campeões Nacionais', 'Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. ', '2023-02-27', 'Imagens/Noticias/1677794518_Noticia_3.jpg', 'Após uma vitória expressiva por 0-6 a favor do Melres DC no jogo decisivo, o nosso escalão sub-7 ergueu a taça de campeões nacionais', 'Imagens/Noticias/1677795242_Noticia_3_Banner.jpg'),
(4, 'Estádio Condecorado ', 'Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. Melres DC vence por 5-0 frente ao Rio Mau FC, com Ricardo Nogueira em destaque ao apontar 3 golos. ', '2023-02-23', 'Imagens/Noticias/1677794794_Noticia_4.jpg', 'A inauguração do novo relvado do Estádio da Gaivota contou com a ilustre presença do Dr. Marco Martins ', 'Imagens/Noticias/1677795249_Noticia_4_Banner.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `palmares`
--

CREATE TABLE `palmares` (
  `id` int(11) NOT NULL,
  `ano` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `palmares`
--

INSERT INTO `palmares` (`id`, `ano`, `nome`, `foto`) VALUES
(1, '2012', 'Campeonato AF Porto 3ª Divisão', ''),
(2, '2021', 'Taça de Gondomar', ''),
(3, '2001', 'AF Porto Taça', ''),
(4, '1998', 'AF Porto Taça', ''),
(5, '2015', 'Taça Nacional', ''),
(6, '2017', 'Canedo Cup', ''),
(7, '2022', 'Campeonato de Gondomar', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `plantel`
--

CREATE TABLE `plantel` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `posicao` varchar(255) NOT NULL,
  `jogos` int(255) NOT NULL,
  `golos` int(255) NOT NULL,
  `assistencias` int(255) NOT NULL,
  `camisola` int(255) NOT NULL,
  `foto_banner` varchar(255) NOT NULL,
  `foto_hover` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `minutos` int(11) NOT NULL,
  `posicao_especifica` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `plantel`
--

INSERT INTO `plantel` (`id`, `nome`, `foto`, `posicao`, `jogos`, `golos`, `assistencias`, `camisola`, `foto_banner`, `foto_hover`, `descricao`, `minutos`, `posicao_especifica`) VALUES
(1, 'Glauco', 'GR1.png', 'Guarda-Redes', 8, 0, 0, 1, 'Imagens/Plantel/1677785901_GR1_Detalhe.png', '', '', 0, ''),
(2, 'Gonçalo Silva', 'GR2.png', 'Guarda-Redes', 2, 0, 0, 12, '', '', '', 0, ''),
(3, 'Paulo Rocha', 'GR3.png', 'Guarda-Redes', 12, 0, 0, 99, '', '', '', 0, ''),
(4, 'João Silva', 'Imagens/Plantel/1677767575_D1.png', 'Defesa', 1, 0, 0, 2, 'Imagens/Plantel/1677782057_DF1_Detalhe.png', 'Imagens/Plantel/1677782066_DF1HOVER.jpg', 'São cerca de 75 os quilómetros que separam Águeda do Porto, mas Fábio Cardoso teve de esperar até aos 27 anos para ingressar no clube português de maior projeção internacional. Deu os primeiros chutos na bola no clube local e passou os anos seguintes nos escalões de formação do Benfica. Em meados de 2014/15 seguiu para Paços de Ferreira e por lá se manteve cedido na temporada seguinte.<p></p>\r\n\r\nRescindiu o contrato que o ligava aos encarnados, ingressou no Vitória de Setúbal e acabou contratado pelo Rangers. Um ano na Escócia ao lado de Bruno Alves fê-lo jogador e aumentou a sua reputação dentro de portas. Tanto que regressou a Portugal para representar e capitanear o Santa Clara. Figura de proa e pilar da defensiva açoriana, partilhou balneário com Zaidu e Fernando Andrade no Estádio de São Miguel, antes de se reunirem todos no Olival e integrarem o plantel às ordens de Sérgio Conceição.', 24, 'Defesa Central'),
(5, 'Marco Rocha', 'Imagens/Plantel/1677767786_D2.png', 'Defesa', 3, 0, 1, 13, 'Imagens/Plantel/1677785144_DF2_Detalhe.png', 'Imagens/Plantel/1677785161_DF2HOVER.jpg', 'São cerca de 75 os quilómetros que separam Águeda do Porto, mas Fábio Cardoso teve de esperar até aos 27 anos para ingressar no clube português de maior projeção internacional. Deu os primeiros chutos na bola no clube local e passou os anos seguintes nos escalões de formação do Benfica. Em meados de 2014/15 seguiu para Paços de Ferreira e por lá se manteve cedido na temporada seguinte.<p></p>\r\n\r\nRescindiu o contrato que o ligava aos encarnados, ingressou no Vitória de Setúbal e acabou contratado pelo Rangers. Um ano na Escócia ao lado de Bruno Alves fê-lo jogador e aumentou a sua reputação dentro de portas. Tanto que regressou a Portugal para representar e capitanear o Santa Clara. Figura de proa e pilar da defensiva açoriana, partilhou balneário com Zaidu e Fernando Andrade no Estádio de São Miguel, antes de se reunirem todos no Olival e integrarem o plantel às ordens de Sérgio Conceição.', 27, 'Defesa Esquerdo'),
(6, 'André Cunha', 'Imagens/Plantel/1677767816_D3.png', 'Defesa', 9, 3, 1, 14, 'Imagens/Plantel/1677785178_DF3_Detalhe.png', 'Imagens/Plantel/1677785188_DF3HOVER.jpg', 'São cerca de 75 os quilómetros que separam Águeda do Porto, mas Fábio Cardoso teve de esperar até aos 27 anos para ingressar no clube português de maior projeção internacional. Deu os primeiros chutos na bola no clube local e passou os anos seguintes nos escalões de formação do Benfica. Em meados de 2014/15 seguiu para Paços de Ferreira e por lá se manteve cedido na temporada seguinte.<p></p>\r\n\r\nRescindiu o contrato que o ligava aos encarnados, ingressou no Vitória de Setúbal e acabou contratado pelo Rangers. Um ano na Escócia ao lado de Bruno Alves fê-lo jogador e aumentou a sua reputação dentro de portas. Tanto que regressou a Portugal para representar e capitanear o Santa Clara. Figura de proa e pilar da defensiva açoriana, partilhou balneário com Zaidu e Fernando Andrade no Estádio de São Miguel, antes de se reunirem todos no Olival e integrarem o plantel às ordens de Sérgio Conceição.', 810, 'Defesa Central'),
(7, 'Zé Ribeiro', 'Imagens/Plantel/1677767824_D4.png', 'Defesa', 10, 5, 0, 5, 'Imagens/Plantel/1677785211_DF4_Detalhe.png', 'Imagens/Plantel/1677785222_DF4HOVER.jpg', 'São cerca de 75 os quilómetros que separam Águeda do Porto, mas Fábio Cardoso teve de esperar até aos 27 anos para ingressar no clube português de maior projeção internacional. Deu os primeiros chutos na bola no clube local e passou os anos seguintes nos escalões de formação do Benfica. Em meados de 2014/15 seguiu para Paços de Ferreira e por lá se manteve cedido na temporada seguinte.<p></p>\r\n\r\nRescindiu o contrato que o ligava aos encarnados, ingressou no Vitória de Setúbal e acabou contratado pelo Rangers. Um ano na Escócia ao lado de Bruno Alves fê-lo jogador e aumentou a sua reputação dentro de portas. Tanto que regressou a Portugal para representar e capitanear o Santa Clara. Figura de proa e pilar da defensiva açoriana, partilhou balneário com Zaidu e Fernando Andrade no Estádio de São Miguel, antes de se reunirem todos no Olival e integrarem o plantel às ordens de Sérgio Conceição.', 900, 'Defesa Central'),
(8, 'Luís Teixeira', 'Imagens/Plantel/1677767833_D5.png', 'Defesa', 13, 7, 6, 16, 'Imagens/Plantel/1677785256_DF5_Detalhe.png', 'Imagens/Plantel/1677785267_DF5HOVER.jpg', 'São cerca de 75 os quilómetros que separam Águeda do Porto, mas Fábio Cardoso teve de esperar até aos 27 anos para ingressar no clube português de maior projeção internacional. Deu os primeiros chutos na bola no clube local e passou os anos seguintes nos escalões de formação do Benfica. Em meados de 2014/15 seguiu para Paços de Ferreira e por lá se manteve cedido na temporada seguinte.<p></p>\r\n\r\nRescindiu o contrato que o ligava aos encarnados, ingressou no Vitória de Setúbal e acabou contratado pelo Rangers. Um ano na Escócia ao lado de Bruno Alves fê-lo jogador e aumentou a sua reputação dentro de portas. Tanto que regressou a Portugal para representar e capitanear o Santa Clara. Figura de proa e pilar da defensiva açoriana, partilhou balneário com Zaidu e Fernando Andrade no Estádio de São Miguel, antes de se reunirem todos no Olival e integrarem o plantel às ordens de Sérgio Conceição.', 1058, 'Defesa Central'),
(9, 'Rúben Santos', 'Imagens/Plantel/1677767840_D6.png', 'Defesa', 4, 1, 6, 22, 'Imagens/Plantel/1677785276_DF6_Detalhe.png', 'Imagens/Plantel/1677785288_DF6HOVER.jpg', 'São cerca de 75 os quilómetros que separam Águeda do Porto, mas Fábio Cardoso teve de esperar até aos 27 anos para ingressar no clube português de maior projeção internacional. Deu os primeiros chutos na bola no clube local e passou os anos seguintes nos escalões de formação do Benfica. Em meados de 2014/15 seguiu para Paços de Ferreira e por lá se manteve cedido na temporada seguinte.<p></p>\r\n\r\nRescindiu o contrato que o ligava aos encarnados, ingressou no Vitória de Setúbal e acabou contratado pelo Rangers. Um ano na Escócia ao lado de Bruno Alves fê-lo jogador e aumentou a sua reputação dentro de portas. Tanto que regressou a Portugal para representar e capitanear o Santa Clara. Figura de proa e pilar da defensiva açoriana, partilhou balneário com Zaidu e Fernando Andrade no Estádio de São Miguel, antes de se reunirem todos no Olival e integrarem o plantel às ordens de Sérgio Conceição.', 107, 'Defesa Direito'),
(10, 'Márcio', 'Imagens/Plantel/1677767851_D7.png', 'Defesa', 9, 0, 0, 95, 'Imagens/Plantel/1677785295_DF7_Detalhe.png', 'Imagens/Plantel/1677785303_DF7HOVER.jpg', 'São cerca de 75 os quilómetros que separam Águeda do Porto, mas Fábio Cardoso teve de esperar até aos 27 anos para ingressar no clube português de maior projeção internacional. Deu os primeiros chutos na bola no clube local e passou os anos seguintes nos escalões de formação do Benfica. Em meados de 2014/15 seguiu para Paços de Ferreira e por lá se manteve cedido na temporada seguinte.<p></p>\r\n\r\nRescindiu o contrato que o ligava aos encarnados, ingressou no Vitória de Setúbal e acabou contratado pelo Rangers. Um ano na Escócia ao lado de Bruno Alves fê-lo jogador e aumentou a sua reputação dentro de portas. Tanto que regressou a Portugal para representar e capitanear o Santa Clara. Figura de proa e pilar da defensiva açoriana, partilhou balneário com Zaidu e Fernando Andrade no Estádio de São Miguel, antes de se reunirem todos no Olival e integrarem o plantel às ordens de Sérgio Conceição.', 728, 'Defesa Direito'),
(11, 'Bruno', 'Imagens/Plantel/1677767860_D8.png', 'Defesa', 3, 0, 0, 50, 'Imagens/Plantel/1677785310_DF8_Detalhe.png', 'Imagens/Plantel/1677785318_DF8HOVER.jpg', 'São cerca de 75 os quilómetros que separam Águeda do Porto, mas Fábio Cardoso teve de esperar até aos 27 anos para ingressar no clube português de maior projeção internacional. Deu os primeiros chutos na bola no clube local e passou os anos seguintes nos escalões de formação do Benfica. Em meados de 2014/15 seguiu para Paços de Ferreira e por lá se manteve cedido na temporada seguinte.<p></p>\r\n\r\nRescindiu o contrato que o ligava aos encarnados, ingressou no Vitória de Setúbal e acabou contratado pelo Rangers. Um ano na Escócia ao lado de Bruno Alves fê-lo jogador e aumentou a sua reputação dentro de portas. Tanto que regressou a Portugal para representar e capitanear o Santa Clara. Figura de proa e pilar da defensiva açoriana, partilhou balneário com Zaidu e Fernando Andrade no Estádio de São Miguel, antes de se reunirem todos no Olival e integrarem o plantel às ordens de Sérgio Conceição.', 41, 'Defesa Central'),
(12, 'Diogo Correia', 'Imagens/Plantel/1677773278_MC1.png', 'Médio', 1, 0, 1, 7, 'Imagens/Plantel/1677781053_MC1_Detalhe.png', 'Imagens/Plantel/1677781072_MC1HOVER.jpg', 'Bruno Costa respira FC Porto desde o berço. Oriundo de Oliveira de Azeméis, ingressou muito jovem nas escolinhas do Feirense e foi aí que despertou o interesse do FC Porto. Chegou à Constituição em 2009/10 e só abandonou o clube do coração dez anos depois. Dos sub-13 à equipa principal ganhou praticamente tudo e só o excesso de opções no setor intermédio dos Dragões é que o obrigou a fazer as malas para o Algarve.<p></p>\r\n\r\n17 jogos em meia época no Portimonense foram mais do que suficientes para que o Paços de Ferreira quisesse recrutar os seus serviços. Uma temporada completa na Capital do Móvel - onde completou 33 jogos, 4 golos e 3 assistências em parceria com Stephen Eustaquio - fizeram com que Sérgio Conceição ordenasse o seu resgate e com que Bruno rubricasse um novo contrato com o FC Porto, este valido até 2024.', 19, 'Médio Centro'),
(13, 'Diogo', 'Imagens/Plantel/1677773309_MC2.png', 'Médio', 9, 2, 5, 8, 'Imagens/Plantel/1677779840_MC2_Detalhe.png', 'Imagens/Plantel/1677779854_MC2HOVER.jpg', 'Bruno Costa respira FC Porto desde o berço. Oriundo de Oliveira de Azeméis, ingressou muito jovem nas escolinhas do Feirense e foi aí que despertou o interesse do FC Porto. Chegou à Constituição em 2009/10 e só abandonou o clube do coração dez anos depois. Dos sub-13 à equipa principal ganhou praticamente tudo e só o excesso de opções no setor intermédio dos Dragões é que o obrigou a fazer as malas para o Algarve.<p></p>\r\n\r\n17 jogos em meia época no Portimonense foram mais do que suficientes para que o Paços de Ferreira quisesse recrutar os seus serviços. Uma temporada completa na Capital do Móvel - onde completou 33 jogos, 4 golos e 3 assistências em parceria com Stephen Eustaquio - fizeram com que Sérgio Conceição ordenasse o seu resgate e com que Bruno rubricasse um novo contrato com o FC Porto, este valido até 2024.', 810, 'Médio Defensivo'),
(14, 'Rui', 'Imagens/Plantel/1677773324_MC3.png', 'Médio', 12, 9, 8, 10, 'Imagens/Plantel/1677779883_MC3_Detalhe.png', 'Imagens/Plantel/1677779902_MC3HOVER.jpg', 'Bruno Costa respira FC Porto desde o berço. Oriundo de Oliveira de Azeméis, ingressou muito jovem nas escolinhas do Feirense e foi aí que despertou o interesse do FC Porto. Chegou à Constituição em 2009/10 e só abandonou o clube do coração dez anos depois. Dos sub-13 à equipa principal ganhou praticamente tudo e só o excesso de opções no setor intermédio dos Dragões é que o obrigou a fazer as malas para o Algarve.<p></p>\r\n\r\n17 jogos em meia época no Portimonense foram mais do que suficientes para que o Paços de Ferreira quisesse recrutar os seus serviços. Uma temporada completa na Capital do Móvel - onde completou 33 jogos, 4 golos e 3 assistências em parceria com Stephen Eustaquio - fizeram com que Sérgio Conceição ordenasse o seu resgate e com que Bruno rubricasse um novo contrato com o FC Porto, este valido até 2024.', 770, 'Médio Esquerdo'),
(15, 'Leonardo', 'Imagens/Plantel/1677773336_MC4.png', 'Médio', 12, 5, 7, 11, 'Imagens/Plantel/1677779962_MC4_Detalhe.png', 'Imagens/Plantel/1677779973_MC4HOVER.jpg', 'Bruno Costa respira FC Porto desde o berço. Oriundo de Oliveira de Azeméis, ingressou muito jovem nas escolinhas do Feirense e foi aí que despertou o interesse do FC Porto. Chegou à Constituição em 2009/10 e só abandonou o clube do coração dez anos depois. Dos sub-13 à equipa principal ganhou praticamente tudo e só o excesso de opções no setor intermédio dos Dragões é que o obrigou a fazer as malas para o Algarve.<p></p>\r\n\r\n17 jogos em meia época no Portimonense foram mais do que suficientes para que o Paços de Ferreira quisesse recrutar os seus serviços. Uma temporada completa na Capital do Móvel - onde completou 33 jogos, 4 golos e 3 assistências em parceria com Stephen Eustaquio - fizeram com que Sérgio Conceição ordenasse o seu resgate e com que Bruno rubricasse um novo contrato com o FC Porto, este valido até 2024.', 1026, 'Médio Ofensivo'),
(16, 'Alex', 'Imagens/Plantel/1677773372_MC5.png', 'Médio', 7, 0, 4, 24, 'Imagens/Plantel/1677780011_MC5_Detalhe.png', 'Imagens/Plantel/1677780023_MC5HOVER.jpg', 'Bruno Costa respira FC Porto desde o berço. Oriundo de Oliveira de Azeméis, ingressou muito jovem nas escolinhas do Feirense e foi aí que despertou o interesse do FC Porto. Chegou à Constituição em 2009/10 e só abandonou o clube do coração dez anos depois. Dos sub-13 à equipa principal ganhou praticamente tudo e só o excesso de opções no setor intermédio dos Dragões é que o obrigou a fazer as malas para o Algarve.<p></p>\r\n\r\n17 jogos em meia época no Portimonense foram mais do que suficientes para que o Paços de Ferreira quisesse recrutar os seus serviços. Uma temporada completa na Capital do Móvel - onde completou 33 jogos, 4 golos e 3 assistências em parceria com Stephen Eustaquio - fizeram com que Sérgio Conceição ordenasse o seu resgate e com que Bruno rubricasse um novo contrato com o FC Porto, este valido até 2024.', 129, 'Médio Direito'),
(17, 'Vítor Santos', 'Imagens/Plantel/1677773398_MC6.png', 'Médio', 11, 6, 4, 19, 'Imagens/Plantel/1677780047_MC6_Detalhe.png', 'Imagens/Plantel/1677780104_MC6HOVER.jpg', 'Bruno Costa respira FC Porto desde o berço. Oriundo de Oliveira de Azeméis, ingressou muito jovem nas escolinhas do Feirense e foi aí que despertou o interesse do FC Porto. Chegou à Constituição em 2009/10 e só abandonou o clube do coração dez anos depois. Dos sub-13 à equipa principal ganhou praticamente tudo e só o excesso de opções no setor intermédio dos Dragões é que o obrigou a fazer as malas para o Algarve.<p></p>\r\n\r\n17 jogos em meia época no Portimonense foram mais do que suficientes para que o Paços de Ferreira quisesse recrutar os seus serviços. Uma temporada completa na Capital do Móvel - onde completou 33 jogos, 4 golos e 3 assistências em parceria com Stephen Eustaquio - fizeram com que Sérgio Conceição ordenasse o seu resgate e com que Bruno rubricasse um novo contrato com o FC Porto, este valido até 2024.', 947, 'Médio Ofensivo'),
(18, 'Rui Silva', 'Imagens/Plantel/1677773414_MC7.png', 'Médio', 2, 0, 0, 23, 'Imagens/Plantel/1677780535_MC7_Detalhe.png', 'Imagens/Plantel/1677780551_MC7HOVER.jpg', 'Bruno Costa respira FC Porto desde o berço. Oriundo de Oliveira de Azeméis, ingressou muito jovem nas escolinhas do Feirense e foi aí que despertou o interesse do FC Porto. Chegou à Constituição em 2009/10 e só abandonou o clube do coração dez anos depois. Dos sub-13 à equipa principal ganhou praticamente tudo e só o excesso de opções no setor intermédio dos Dragões é que o obrigou a fazer as malas para o Algarve.<p></p>\r\n\r\n17 jogos em meia época no Portimonense foram mais do que suficientes para que o Paços de Ferreira quisesse recrutar os seus serviços. Uma temporada completa na Capital do Móvel - onde completou 33 jogos, 4 golos e 3 assistências em parceria com Stephen Eustaquio - fizeram com que Sérgio Conceição ordenasse o seu resgate e com que Bruno rubricasse um novo contrato com o FC Porto, este valido até 2024.', 52, 'Médio Centro'),
(19, 'Zé', 'Imagens/Plantel/1677773429_MC8.png', 'Médio', 4, 0, 2, 6, 'Imagens/Plantel/1677780652_MC8_Detalhe.png', 'Imagens/Plantel/1677780670_MC8HOVER.jpg', 'Bruno Costa respira FC Porto desde o berço. Oriundo de Oliveira de Azeméis, ingressou muito jovem nas escolinhas do Feirense e foi aí que despertou o interesse do FC Porto. Chegou à Constituição em 2009/10 e só abandonou o clube do coração dez anos depois. Dos sub-13 à equipa principal ganhou praticamente tudo e só o excesso de opções no setor intermédio dos Dragões é que o obrigou a fazer as malas para o Algarve.<p></p>\r\n\r\n17 jogos em meia época no Portimonense foram mais do que suficientes para que o Paços de Ferreira quisesse recrutar os seus serviços. Uma temporada completa na Capital do Móvel - onde completou 33 jogos, 4 golos e 3 assistências em parceria com Stephen Eustaquio - fizeram com que Sérgio Conceição ordenasse o seu resgate e com que Bruno rubricasse um novo contrato com o FC Porto, este valido até 2024.', 162, 'Médio Centro'),
(20, 'Júlio', 'Imagens/Plantel/1677773446_MC9.png', 'Médio', 2, 1, 1, 77, 'Imagens/Plantel/1677780717_MC9_Detalhe.png', 'Imagens/Plantel/1677780753_MC9HOVER.jpg', 'Bruno Costa respira FC Porto desde o berço. Oriundo de Oliveira de Azeméis, ingressou muito jovem nas escolinhas do Feirense e foi aí que despertou o interesse do FC Porto. Chegou à Constituição em 2009/10 e só abandonou o clube do coração dez anos depois. Dos sub-13 à equipa principal ganhou praticamente tudo e só o excesso de opções no setor intermédio dos Dragões é que o obrigou a fazer as malas para o Algarve.<p></p>\r\n\r\n17 jogos em meia época no Portimonense foram mais do que suficientes para que o Paços de Ferreira quisesse recrutar os seus serviços. Uma temporada completa na Capital do Móvel - onde completou 33 jogos, 4 golos e 3 assistências em parceria com Stephen Eustaquio - fizeram com que Sérgio Conceição ordenasse o seu resgate e com que Bruno rubricasse um novo contrato com o FC Porto, este valido até 2024.', 85, 'Médio Direito'),
(21, 'Joãozinho', 'Imagens/Plantel/1677773457_MC10.png', 'Médio', 3, 4, 1, 50, 'Imagens/Plantel/1677780807_MC10_Detalhe.png', 'Imagens/Plantel/1677780817_MC10HOVER.jpg', 'Bruno Costa respira FC Porto desde o berço. Oriundo de Oliveira de Azeméis, ingressou muito jovem nas escolinhas do Feirense e foi aí que despertou o interesse do FC Porto. Chegou à Constituição em 2009/10 e só abandonou o clube do coração dez anos depois. Dos sub-13 à equipa principal ganhou praticamente tudo e só o excesso de opções no setor intermédio dos Dragões é que o obrigou a fazer as malas para o Algarve.<p></p>\r\n\r\n17 jogos em meia época no Portimonense foram mais do que suficientes para que o Paços de Ferreira quisesse recrutar os seus serviços. Uma temporada completa na Capital do Móvel - onde completou 33 jogos, 4 golos e 3 assistências em parceria com Stephen Eustaquio - fizeram com que Sérgio Conceição ordenasse o seu resgate e com que Bruno rubricasse um novo contrato com o FC Porto, este valido até 2024.', 49, 'Médio Centro'),
(22, 'Rui Soares', 'Imagens/Plantel/1677773469_MC11.png', 'Médio', 1, 0, 0, 75, 'Imagens/Plantel/1677780845_MC11_Detalhe.png', 'Imagens/Plantel/1677780866_MC11HOVER.jpg', 'Bruno Costa respira FC Porto desde o berço. Oriundo de Oliveira de Azeméis, ingressou muito jovem nas escolinhas do Feirense e foi aí que despertou o interesse do FC Porto. Chegou à Constituição em 2009/10 e só abandonou o clube do coração dez anos depois. Dos sub-13 à equipa principal ganhou praticamente tudo e só o excesso de opções no setor intermédio dos Dragões é que o obrigou a fazer as malas para o Algarve.<p></p>\r\n\r\n17 jogos em meia época no Portimonense foram mais do que suficientes para que o Paços de Ferreira quisesse recrutar os seus serviços. Uma temporada completa na Capital do Móvel - onde completou 33 jogos, 4 golos e 3 assistências em parceria com Stephen Eustaquio - fizeram com que Sérgio Conceição ordenasse o seu resgate e com que Bruno rubricasse um novo contrato com o FC Porto, este valido até 2024.', 8, 'Médio Esquerdo'),
(23, 'Pedro Nogueira', 'Imagens/Plantel/1677774477_A1.png', 'Avançado', 12, 16, 5, 9, 'Imagens/Plantel/1677777322_A1_Detalhe.png', 'Imagens/Plantel/1677777748_A1HOVER.jpg', 'Nasceu em Lisboa e deu os primeiros toques no Benfica, mas aos 15 anos encontrou o Norte e mudou-se para a Invicta.  Começou por se destacar nos Sub-15 e escalou a difícil montanha da formação até à estreia na equipa B com apenas 18 anos, um feito que resultou da boa performance nos Sub-19, escalão em que foi campeão nacional e europeu em 2019. <p></p>\r\n\r\nEm 2021/22, afirmou-se nas escolhas de António Folha e foi chamado por Sérgio Conceição para se desenvolver entre os principais nomes do clube. A 16 de janeiro, em pleno Estádio Nacional, estreou-se na Primeira Liga na vitória azul e branca frente à BSAD (4-1) – minutos que lhe valeram a medalha de campeão nacional –, já depois de ter pisado o relvado do Estádio do Dragão pela primeira vez frente ao Rio Ave, na Taça da Liga, jogo esse em que foi protagonista da jogada que deu a Pepê o único golo do encontro. Agora, vai continuar a provar o seu valor ao treinador campeão nacional.', 1024, 'Ponta de Lança'),
(24, 'Ricardo Moreira', 'Imagens/Plantel/1677774498_A2.png', 'Avançado', 9, 7, 0, 17, 'Imagens/Plantel/1677781172_A2_Detalhe.png', 'Imagens/Plantel/1677781198_A2HOVER.jpg', 'Nasceu em Lisboa e deu os primeiros toques no Benfica, mas aos 15 anos encontrou o Norte e mudou-se para a Invicta.  Começou por se destacar nos Sub-15 e escalou a difícil montanha da formação até à estreia na equipa B com apenas 18 anos, um feito que resultou da boa performance nos Sub-19, escalão em que foi campeão nacional e europeu em 2019. <p></p>\r\n\r\nEm 2021/22, afirmou-se nas escolhas de António Folha e foi chamado por Sérgio Conceição para se desenvolver entre os principais nomes do clube. A 16 de janeiro, em pleno Estádio Nacional, estreou-se na Primeira Liga na vitória azul e branca frente à BSAD (4-1) – minutos que lhe valeram a medalha de campeão nacional –, já depois de ter pisado o relvado do Estádio do Dragão pela primeira vez frente ao Rio Ave, na Taça da Liga, jogo esse em que foi protagonista da jogada que deu a Pepê o único golo do encontro. Agora, vai continuar a provar o seu valor ao treinador campeão nacional.', 1004, 'Ponta de Lança'),
(25, 'Paulo Sousa', 'Imagens/Plantel/1677774530_A3.png', 'Avançado', 2, 0, 0, 79, 'Imagens/Plantel/1677781234_A3_Detalhe.png', 'Imagens/Plantel/1677781257_A3HOVER.jpg', 'Nasceu em Lisboa e deu os primeiros toques no Benfica, mas aos 15 anos encontrou o Norte e mudou-se para a Invicta.  Começou por se destacar nos Sub-15 e escalou a difícil montanha da formação até à estreia na equipa B com apenas 18 anos, um feito que resultou da boa performance nos Sub-19, escalão em que foi campeão nacional e europeu em 2019. <p></p>\r\n\r\nEm 2021/22, afirmou-se nas escolhas de António Folha e foi chamado por Sérgio Conceição para se desenvolver entre os principais nomes do clube. A 16 de janeiro, em pleno Estádio Nacional, estreou-se na Primeira Liga na vitória azul e branca frente à BSAD (4-1) – minutos que lhe valeram a medalha de campeão nacional –, já depois de ter pisado o relvado do Estádio do Dragão pela primeira vez frente ao Rio Ave, na Taça da Liga, jogo esse em que foi protagonista da jogada que deu a Pepê o único golo do encontro. Agora, vai continuar a provar o seu valor ao treinador campeão nacional.', 31, 'Ponta de Lança'),
(26, 'Joel Oliveira', 'Imagens/Plantel/1677774540_A4.png', 'Avançado', 8, 3, 1, 27, 'Imagens/Plantel/1677781290_A4_Detalhe.png', 'Imagens/Plantel/1677781304_A4HOVER.jpg', 'Nasceu em Lisboa e deu os primeiros toques no Benfica, mas aos 15 anos encontrou o Norte e mudou-se para a Invicta.  Começou por se destacar nos Sub-15 e escalou a difícil montanha da formação até à estreia na equipa B com apenas 18 anos, um feito que resultou da boa performance nos Sub-19, escalão em que foi campeão nacional e europeu em 2019. <p></p>\r\n\r\nEm 2021/22, afirmou-se nas escolhas de António Folha e foi chamado por Sérgio Conceição para se desenvolver entre os principais nomes do clube. A 16 de janeiro, em pleno Estádio Nacional, estreou-se na Primeira Liga na vitória azul e branca frente à BSAD (4-1) – minutos que lhe valeram a medalha de campeão nacional –, já depois de ter pisado o relvado do Estádio do Dragão pela primeira vez frente ao Rio Ave, na Taça da Liga, jogo esse em que foi protagonista da jogada que deu a Pepê o único golo do encontro. Agora, vai continuar a provar o seu valor ao treinador campeão nacional.', 312, 'Ponta de Lança'),
(27, 'Ricardo Nogueira', 'Imagens/Plantel/1677786812_T1.png', 'Treinador', 0, 0, 0, 0, '', 'Imagens/Plantel/1677787747_T1HOVER.jpg', '', 0, 'Treinador'),
(28, 'Dorindo Silva', 'Imagens/Plantel/1677786822_T2.png', 'Treinador', 0, 0, 0, 0, '', 'Imagens/Plantel/1677787764_T2HOVER.jpg', '', 0, 'Treinador Adjunto'),
(29, 'Daniel Rocha', 'Imagens/Plantel/1677786832_T3.png', 'Treinador', 0, 0, 0, 0, '', 'Imagens/Plantel/1677787774_T3HOVER.jpg', '', 0, 'Treinador de Guarda-Redes'),
(30, 'Dinis Silva', 'Imagens/Plantel/1677786842_T4.png', 'Treinador', 0, 0, 0, 0, '', 'Imagens/Plantel/1677787783_T4HOVER.jpg', '', 0, 'Preparador Físico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `referencia` varchar(255) NOT NULL,
  `preco` decimal(5,2) NOT NULL,
  `preco_socio` decimal(5,2) NOT NULL,
  `descricao` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `stock` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `categoria`, `nome`, `referencia`, `preco`, `preco_socio`, `descricao`, `foto`, `stock`) VALUES
(1, 'Adeptos', 'Bandeira Melres DC', '274 023 478', '10.99', '8.99', '', 'Imagens/Produtos/Bandeira.png', 47),
(2, 'Acessórios', 'Caderno Melres DC', '294 026 935', '3.99', '2.49', '', 'Imagens/Produtos/1678735123_Caderno.png', 27),
(3, 'Adeptos', 'Bola Amarela Melres DC', '264 943 740', '5.99', '3.99', '', 'Imagens/Produtos/Bola.png', 18),
(4, 'Adeptos', 'Bola Branca Melres DC', '294 709 744', '5.99', '3.99', '', 'Imagens/Produtos/Bola_V2.png', 26),
(5, 'Adeptos', 'Cachecol Melres DC', '231 644 474', '8.99', '6.99', '', 'Imagens/Produtos/Cachecol.png', 71),
(6, 'Acessórios', 'Caneca Melres DC', '255 676 892', '7.99', '6.99', '', 'Imagens/Produtos/Caneca_Branca.png', 15),
(7, 'Acessórios', 'Caneca Melres DC', '256 974 691', '7.99', '6.99', '', 'Imagens/Produtos/Caneca_Branca_AMR.png', 24),
(8, 'Acessórios', 'Caneca Melres DC', '263 846 824', '7.99', '6.99', '', 'Imagens/Produtos/Caneca_Branca_PRT.png', 38),
(9, 'Acessórios', 'Caneta Melres DC', '264 897 942', '0.50', '0.25', '', 'Imagens/Produtos/Caneta.png', 93),
(10, 'Acessórios', 'Capa de Telemóvel Melres DC', '267 863 847', '8.99', '7.99', '', 'Imagens/Produtos/Capa_Normal.png', 16),
(11, 'Acessórios', 'Capa de Telemóvel Melres DC', '294 723 975', '8.99', '7.99', '', 'Imagens/Produtos/Capa_NormalBranco.png', 26),
(12, 'Acessórios', 'Capa de Telemóvel Melres DC', '274 854 824', '8.99', '7.99', '', 'Imagens/Produtos/1678735268_Capa_Preta.png', 43),
(13, 'Acessórios', 'Capa de Telemóvel Melres DC', '294 793 849', '8.99', '7.99', '', 'Imagens/Produtos/Capa_PretaBranco.png', 42),
(16, 'Acessórios', 'Chapéu Melres DC', '250 890 547', '9.99', '8.99', '', 'Imagens/Produtos/Chapeu_V1.png', 28),
(17, 'Acessórios', 'Chapéu Melres DC', '265 787 601', '9.99', '8.99', '', 'Imagens/Produtos/Chapeu_V2.png', 26),
(18, 'Acessórios', 'Chapéu Melres DC', '244 562 201', '9.99', '8.99', '', 'Imagens/Produtos/Chapeu_V3.png', 42),
(19, 'Adeptos', 'Copo de Papel Melres DC', '266 782 306', '0.90', '0.80', '', 'Imagens/Produtos/Copo_de_Papel_1.png', 95),
(20, 'Têxtil', 'Fato de Treino Melres DC', '243 562 082', '49.99', '39.99', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Imagens/Produtos_Têxtil/1678644962_Fato_de_Treino.png', 61),
(21, 'Acessórios', 'Garrafa Melres DC', '290 784 973', '7.99', '6.99', '', 'Imagens/Produtos/Garrafa_Amarela.png', 58),
(22, 'Acessórios', 'Garrafa Melres DC', '264 878 610', '7.99', '6.99', '', 'Imagens/Produtos/Garrafa_BrancaPreta.png', 50),
(23, 'Acessórios', 'Garrafa Melres DC', '267 094 742', '7.99', '6.99', '', 'Imagens/Produtos/Garrafa_Preta.png', 53),
(24, 'Têxtil', 'Hoodie Amarelo Melres DC', '234 785 094', '24.99', '19.99', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Imagens/Produtos_Têxtil/1678645046_Hoodie_Amarelo_V1.png', 27),
(25, 'Têxtil', 'Hoodie Amarelo Melres DC', '265 783 564', '24.99', '19.99', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Imagens/Produtos_Têxtil/1678645055_Hoodie_Amarelo_V2.png', 51),
(26, 'Têxtil', 'Hoodie Preto Melres DC', '209 784 635', '24.99', '19.99', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Imagens/Produtos_Têxtil/1678645078_Hoodie_Preto_V1.png', 34),
(27, 'Têxtil', 'Hoodie Preto Melres DC', '251 073 986', '24.99', '19.99', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Imagens/Produtos_Têxtil/1678645089_Hoodie_Preto_V2.png', 48),
(28, 'Têxtil', 'Hoodie Preto Melres DC', '245 676 801', '24.99', '19.99', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Imagens/Produtos_Têxtil/1678645101_Hoodie_Preto_V3.png', 23),
(29, 'Acessórios', 'Máscara Preta Melres DC', '245 6211 117', '6.99', '4.99', '', 'Imagens/Produtos/Máscara_PretoNormal.png', 55),
(30, 'Acessórios', 'Máscara aMARELA Melres DC', '233 674 094', '6.99', '4.99', '', 'Imagens/Produtos/Máscara_Normal.png', 42),
(31, 'Acessórios', 'Máscara pRETA Melres DC', '233 508 972', '6.99', '4.99', '', 'Imagens/Produtos/Máscara_Preto.png', 34),
(32, 'Acessórios', 'Máscara Branca Melres DC', '233 451 863', '6.99', '4.99', '', 'Imagens/Produtos/1678735716_Máscara_Branco_Preto.png', 49),
(34, 'Acessórios', 'Tapete de Rato Melres DC', '244 766 000', '4.99', '3.99', '', 'Imagens/Produtos/Mouse_Pad_V2.png', 32),
(35, 'Acessórios', 'Tapete de Rato Melres DC', '256 097 766', '4.99', '3.99', '', 'Imagens/Produtos/Mouse_Pad_V4.png', 53),
(36, 'Acessórios', 'Tapete de Rato Melres DC', '200 988 766', '4.99', '3.99', '', 'Imagens/Produtos/Mouse_Pad_V5.png', 35),
(37, 'Acessórios', 'Tapete de Rato Melres DC', '233 444 988', '4.99', '3.99', '', 'Imagens/Produtos/Mouse_Pad_V6.png', 44),
(38, 'Têxtil', 'Polo Amarelo Melres DC', '209 822 311', '17.99', '15.99', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Imagens/Produtos_Têxtil/1678645424_Polo_Amarelo_V1.png', 43),
(39, 'Têxtil', 'Polo Amarelo Melres DC', '209 764 558', '17.99', '15.99', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Imagens/Produtos_Têxtil/1678645449_Polo_Amarelo_V3.png', 22),
(40, 'Têxtil', 'Polo Branco Melres DC', '264 836 223', '17.99', '15.99', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Imagens/Produtos_Têxtil/1678645470_Polo_Branco_V4.png', 34),
(41, 'Têxtil', 'Polo Branco Melres DC', '203 784 713', '17.99', '15.99', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Imagens/Produtos_Têxtil/1678645479_Polo_Branco_V5.png', 32),
(42, 'Têxtil', 'Polo Preto Melres DC', '288 734 651', '17.99', '15.99', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Imagens/Produtos_Têxtil/1678645494_Polo_Preto_V1.png', 28),
(43, 'Têxtil', 'Polo Preto Melres DC', '273 672 541', '17.99', '15.99', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Imagens/Produtos_Têxtil/1678645503_Polo_Preto_V2.png', 15),
(44, 'Têxtil', 'Polo Preto Melres DC', '233 482 748', '17.99', '15.99', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Imagens/Produtos_Têxtil/1678645511_Polo_Preto_V3.png', 32),
(45, 'Têxtil', 'Polo Preto Melres DC', '273 634 725', '17.99', '15.99', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Imagens/Produtos_Têxtil/1678645520_Polo_Preto_V4.png', 36),
(46, 'Têxtil', 'Hoodie Branco Melres DC', '254 625 946', '24.99', '19.99', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Imagens/Produtos_Têxtil/1678645651_Hoodie_Branco_V1.png', 18),
(47, 'Têxtil', 'Hoodie Branco Melres DC', '294 561 537', '24.99', '19.99', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Imagens/Produtos_Têxtil/1678645666_Hoodie_Branco_V2.png', 38),
(48, 'Acessórios', 'Porta-Chaves Melres DC', '297 456 365 ', '3.99', '2.99', '', 'Imagens/Produtos/Porta_Chaves_V1.png', 72),
(49, 'Acessórios', 'Porta-Chaves Melres DC', '235 873 205', '3.99', '2.99', '', 'Imagens/Produtos/Porta_Chaves_V2.png', 67),
(50, 'Acessórios', 'Porta-Chaves Melres DC', '266 863 284', '3.99', '2.99', '', 'Imagens/Produtos/Porta_Chaves_V4.png', 49),
(51, 'Têxtil', 'Casaco Melres DC', '298 841 472', '25.95', '22.95', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Imagens/Produtos_Têxtil/1678645347_Casaco_V1.png', 15),
(52, 'Têxtil', 'Casaco Melres DC', '267 998 444', '25.95', '22.95', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Imagens/Produtos_Têxtil/1678645355_Casaco_V2.png', 18),
(53, 'Têxtil', 'Casaco Melres DC', '233 009 738', '25.95', '22.95', '', 'Imagens/Produtos_Têxtil/1678645362_Casaco_V3.png', 32),
(54, 'Têxtil', 'Hoodie Preto Melres DC', '', '24.99', '19.99', '', 'Imagens/Produtos_Têxtil/1678645205_Hoodie_Preto_V4.png', 0),
(56, 'Equipamentos', 'Equipamento Principal', '264 944 842', '69.99', '59.99', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum', 'Imagens/Produtos/Equipamento_Casa.jpg', 95),
(59, 'Equipamentos', 'Equipamento Secundário', '294 945 534', '65.99', '55.99', '', 'Imagens/Produtos/Equipamento_Fora.jpg', 65),
(60, 'Equipamentos', 'Camisola Principal', '294 854 835', '29.99', '25.99', '', 'Imagens/Produtos/Equipamento_Casa_Camisola.jpg', 263),
(61, 'Equipamentos', 'Camisola Secundária', '284 724 824 ', '29.99', '25.99', '', 'Imagens/Produtos/Equipamento_Fora_Camisola.jpg', 254),
(62, 'Equipamentos', 'Calções Principais', '203 842 954', '20.99', '15.99', '', 'Imagens/Produtos/Equipamento_Casa_Calçoes.jpg', 178),
(63, 'Equipamentos', 'Calções Secundários', '274 601 231', '20.99', '15.99', '', 'Imagens/Produtos/Equipamento_Fora_Calçoes.jpg', 263),
(64, 'Equipamentos', 'Meias Principais', '264 813 922', '9.99', '7.99', '', 'Imagens/Produtos/Equipamento_Casa_Meias.jpg', 264),
(65, 'Equipamentos', 'Meias Secundárias', '211 322 755', '9.99', '7.99', '', 'Imagens/Produtos/Equipamento_Fora_Meias.jpg', 313),
(66, 'Adeptos', 'Copo de Papel Melres DC', '222 833 924', '0.90', '0.80', '', 'Imagens/Produtos/Copo_de_Papel_2.png', 465);

-- --------------------------------------------------------

--
-- Estrutura da tabela `quotas`
--

CREATE TABLE `quotas` (
  `id` int(11) NOT NULL,
  `mensalidade` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `quota` decimal(5,2) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `quotas`
--

INSERT INTO `quotas` (`id`, `mensalidade`, `estado`, `quota`, `email`, `user_id`) VALUES
(1, 'SETEMBRO 2022', 'PAGO', '4.50', 'daniel.business.010@gmail.com', 8),
(2, 'OUTUBRO 2022', 'PAGO', '4.50', 'daniel.business.010@gmail.com', 8),
(3, 'NOVEMBRO 2022', 'PAGO', '4.50', 'daniel.business.010@gmail.com', 8),
(4, 'DEZEMBRO 2022', 'PAGO', '4.50', 'daniel.business.010@gmail.com', 8),
(5, 'JANEIRO 2023', 'PAGO', '4.50', 'daniel.business.010@gmail.com', 8),
(6, 'FEVEREIRO 2023', 'POR PAGAR', '4.50', 'daniel.business.010@gmail.com', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultados`
--

CREATE TABLE `resultados` (
  `id` int(11) NOT NULL,
  `equipa_casa` varchar(255) NOT NULL,
  `equipa_fora` varchar(255) NOT NULL,
  `resultado_final` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL,
  `competicao` varchar(255) NOT NULL,
  `escalao` varchar(255) NOT NULL,
  `equipas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `resultados`
--

INSERT INTO `resultados` (`id`, `equipa_casa`, `equipa_fora`, `resultado_final`, `local`, `data`, `hora`, `competicao`, `escalao`, `equipas`) VALUES
(1, 'Imagens/Resultados/1677947891_Logotipo.png', 'Imagens/Bilheteira/1677946989_GensSC.png', '3 - 0', 'Estádio da Gaivota', '2022-07-15', '18:30', 'Taça AF Porto', 'Equipa Principal', 'Melres DC x Gens SC'),
(2, 'Imagens/Resultados/GondomarSC.png', 'Imagens/Bilheteira/1677947957_Logotipo.png', '3 - 2 ', 'Estádio São Miguel', '2022-07-24', '20:00', 'Taça de Gondomar', 'Equipa Principal', 'Gondomar SC x Melres DC'),
(3, 'Imagens/Resultados/CRAtaense.png', 'Imagens/Bilheteira/1677948044_Logotipo.png', '1 - 4', 'Estádio Municipal de Valbom', '2022-07-19', '19:00', 'Jogo de Pré-Época', 'Sub-17', 'CR Ataense x Melres DC'),
(4, 'Imagens/Resultados/1677948203_Logotipo.png', 'Imagens/Bilheteira/1677948213_FCFanzeres.png', '1 - 0', 'Estádio da Gaivota', '2022-07-14', '21:00', 'Jogo de Pré-Época', 'Sub-9', 'Melres DC x FC Fanzeres'),
(5, 'Imagens/Resultados/SCRioTinto.png', 'Imagens/Bilheteira/1677946331_Logotipo.png', '0 - 6', 'Campo de Jogos de Rio Tinto', '2022-06-09', '16:00', 'AF Porto 2ª Divisão', 'Sub-12', 'SC Rio Tinto x Melres DC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `socios`
--

CREATE TABLE `socios` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `idade` varchar(255) NOT NULL,
  `cartao` decimal(5,2) NOT NULL,
  `inscricao` decimal(5,2) NOT NULL,
  `quota` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `socios`
--

INSERT INTO `socios` (`id`, `categoria`, `idade`, `cartao`, `inscricao`, `quota`) VALUES
(1, 'Adulto', '18+', '7.50', '10.00', '6.00'),
(2, 'Reformado', '66+', '7.50', '7.50', '4.00'),
(3, 'Estudante', '15-24', '7.50', '5.00', '4.50'),
(4, 'Criança', '14-', '7.50', '3.50', '2.50'),
(5, 'Correspondente', '18+', '7.50', '10.00', '7.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

CREATE TABLE `utilizador` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `apelido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `data_nascimento` varchar(255) NOT NULL,
  `telemovel` int(9) NOT NULL,
  `morada` varchar(255) NOT NULL,
  `codigo_postal` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `nif` varchar(255) NOT NULL,
  `iban` varchar(255) NOT NULL,
  `nivel` int(11) NOT NULL,
  `socio` varchar(255) NOT NULL,
  `categoria_socio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`id`, `nome`, `apelido`, `email`, `passwd`, `data_nascimento`, `telemovel`, `morada`, `codigo_postal`, `cidade`, `nif`, `iban`, `nivel`, `socio`, `categoria_socio`) VALUES
(8, 'Daniel', 'Silva', 'daniel.business.010@gmail.com', 'Danirocha2004', '2004-07-31', 933075540, 'Rua dos pescadores, Nº578', '4515-502', 'Gondomar', '2307809734', 'PT59733509430003446600058', 1, 'true', 'Estudante'),
(9, 'filipe', 'Silva', 'danirsilva2004@gmail.com', '2345', '', 0, '', '', '', '', '', 0, 'FALSE', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vantagens_socios`
--

CREATE TABLE `vantagens_socios` (
  `id` int(11) NOT NULL,
  `vantagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vantagens_socios`
--

INSERT INTO `vantagens_socios` (`id`, `vantagem`) VALUES
(1, 'possibilidade de votar nas AG´s do clube e na eleição de dirigentes do mesmo'),
(2, 'acesso a ofertas especiais'),
(3, 'conjunto de descontos em inúmeros parceiros do clube'),
(4, 'bilhetes a preço mais acessível para todos os jogos do universo mELRES dc'),
(5, 'promoções e experiências únicas'),
(6, 'desconto nas mensalidades dos escalões jovens'),
(7, 'prioridade na aquisição de bilhetes');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `bilheteira`
--
ALTER TABLE `bilheteira`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `classificacao`
--
ALTER TABLE `classificacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `compra_bilhetes`
--
ALTER TABLE `compra_bilhetes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `encomendas`
--
ALTER TABLE `encomendas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `escaloes`
--
ALTER TABLE `escaloes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estrutura`
--
ALTER TABLE `estrutura`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `guarda_redes`
--
ALTER TABLE `guarda_redes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `inscricao_atleta`
--
ALTER TABLE `inscricao_atleta`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `inscricao_socio`
--
ALTER TABLE `inscricao_socio`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `multimedia`
--
ALTER TABLE `multimedia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `palmares`
--
ALTER TABLE `palmares`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `plantel`
--
ALTER TABLE `plantel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `quotas`
--
ALTER TABLE `quotas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vantagens_socios`
--
ALTER TABLE `vantagens_socios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `bilheteira`
--
ALTER TABLE `bilheteira`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `classificacao`
--
ALTER TABLE `classificacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `compra_bilhetes`
--
ALTER TABLE `compra_bilhetes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `encomendas`
--
ALTER TABLE `encomendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `escaloes`
--
ALTER TABLE `escaloes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `estrutura`
--
ALTER TABLE `estrutura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `guarda_redes`
--
ALTER TABLE `guarda_redes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `historia`
--
ALTER TABLE `historia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `inscricao_atleta`
--
ALTER TABLE `inscricao_atleta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `inscricao_socio`
--
ALTER TABLE `inscricao_socio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `multimedia`
--
ALTER TABLE `multimedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `palmares`
--
ALTER TABLE `palmares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `plantel`
--
ALTER TABLE `plantel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de tabela `quotas`
--
ALTER TABLE `quotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `socios`
--
ALTER TABLE `socios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `vantagens_socios`
--
ALTER TABLE `vantagens_socios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
