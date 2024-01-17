-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 08:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `idavaliacao` int(11) NOT NULL,
  `idutilizador` int(11) NOT NULL,
  `idfilme` int(11) NOT NULL,
  `pontuacao` int(11) NOT NULL,
  `comentario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `avaliacoes`
--

INSERT INTO `avaliacoes` (`idavaliacao`, `idutilizador`, `idfilme`, `pontuacao`, `comentario`) VALUES
(1, 1, 1, 5, 'Uma experiência cinematográfica fantástica.'),
(2, 2, 2, 4, 'Muito bom, mas com alguns pontos fracos.'),
(3, 3, 3, 3, 'Mediano, esperava mais da trama.'),
(4, 4, 4, 2, 'Infelizmente, não atendeu às expectativas.'),
(5, 1, 5, 5, 'Excelente! Altamente recomendado.'),
(6, 2, 17, 4, 'Bom filme, vale a pena assistir.'),
(7, 3, 7, 3, 'Regular, poderia ser melhor.'),
(8, 4, 8, 2, 'Decepcionante, faltou substância.'),
(9, 1, 9, 5, 'Incrível, uma obra-prima.'),
(10, 2, 10, 4, 'Muito bom, com atuações sólidas.'),
(11, 3, 11, 3, 'Aceitável, mas com falhas no roteiro.'),
(12, 4, 13, 2, 'Não cumpriu as expectativas.'),
(13, 1, 14, 5, 'Um dos melhores do ano.'),
(14, 2, 15, 4, 'História interessante e bem contada.'),
(15, 3, 16, 3, 'Passável, mas nada excepcional.'),
(16, 4, 17, 2, 'Esperava mais deste filme.'),
(17, 1, 18, 5, 'Uma experiência inesquecível.'),
(18, 2, 15, 4, 'Recomendo, especialmente pela cinematografia.'),
(19, 3, 1, 3, 'Um filme decente com alguns momentos bons.'),
(20, 4, 4, 2, 'Não foi tão bom quanto esperava.');

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `idcategoria` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`idcategoria`, `descricao`) VALUES
(1, 'Ação'),
(2, 'Fantasia'),
(3, 'Aventura'),
(4, 'Thriller'),
(5, 'Crime'),
(6, 'Comédia'),
(7, 'Romance'),
(8, 'Terror'),
(9, 'Mistério'),
(10, 'Suspense');

-- --------------------------------------------------------

--
-- Table structure for table `categoriasfilmes`
--

CREATE TABLE `categoriasfilmes` (
  `idfilme` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categoriasfilmes`
--

INSERT INTO `categoriasfilmes` (`idfilme`, `idcategoria`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 5),
(3, 2),
(3, 8),
(4, 1),
(4, 4),
(5, 1),
(7, 3),
(7, 6),
(8, 3),
(8, 4),
(9, 1),
(9, 2),
(10, 4),
(10, 10),
(11, 8),
(11, 9),
(13, 1),
(13, 2),
(14, 8),
(14, 9),
(15, 8),
(15, 6),
(16, 8),
(16, 9),
(17, 6),
(17, 7),
(18, 1),
(18, 2);

-- --------------------------------------------------------

--
-- Table structure for table `filmes`
--

CREATE TABLE `filmes` (
  `idfilme` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `sinopse` varchar(300) NOT NULL,
  `data` date NOT NULL,
  `destaque` tinyint(1) NOT NULL,
  `trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filmes`
--

INSERT INTO `filmes` (`idfilme`, `nome`, `sinopse`, `data`, `destaque`, `trailer`) VALUES
(1, 'Homem-Aranha No Universo Aranha', 'Após ser atingido por uma teia radioativa, Miles Morales, um jovem negro do Brooklyn, se torna o Homem-Aranha, inspirado no legado do já falecido Peter Parker. Entretanto, ao visitar o túmulo de seu ídolo em uma noite chuvosa, ele é surpreendido com a presença do próprio Peter, vestindo o traje do h', '2018-12-14', 0, 'https://www.youtube.com/embed/g4Hbz2jLxvQ?si=Pi3a78KYaxwOfD8F'),
(2, 'Velocidade Furiosa X', 'Dom Toretto e sua família precisam lidar com o adversário mais letal que já enfrentaram. Alimentada pela vingança, uma ameaça terrível emerge das sombras do passado para destruir o mundo de Dom e todos que ele ama.', '2023-05-19', 1, 'https://www.youtube.com/embed/MvkqTZ7ICR4?si=piXpLv0KJbPE_Mvg'),
(3, 'Doutor Estranho no Multiverso da Loucura', 'O aguardado filme trata da jornada do Doutor Estranho rumo ao desconhecido. Além de receber ajuda de novos aliados místicos e outros já conhecidos do público, o personagem atravessa as realidades alternativas incompreensíveis e perigosas do Multiverso para enfrentar um novo e misterioso adversário.', '2022-05-06', 1, 'https://www.youtube.com/embed/aWzlQ2N6qqg?si=Nu7JI_NLXUq0uXbB'),
(4, 'Missão Impossível - Fallout', 'Em uma perigosa tarefa para recuperar plutônio roubado, Ethan Hunt opta por salvar sua equipe em vez de completar a missão. Com isso, armas nucleares caem nas mãos de agentes altamente qualificados e que pertencem a uma rede mortal que deseja destruir a civilização. Agora, com o mundo em risco, Etha', '2018-08-02', 0, 'https://www.youtube.com/embed/wb49-oV0F78?si=TASQKng914PAlbEO'),
(5, 'Pantera Negra', 'Conheça a história de T\'Challa, príncipe do reino de Wakanda, que perde o seu pai e viaja para os Estados Unidos, onde tem contato com os Vingadores. Entre as suas habilidades estão a velocidade, inteligência e os sentidos apurados.', '2018-02-14', 0, 'https://www.youtube.com/embed/xjDjIWPwcPU?si=Xx5A6BxD_5JoG6x8'),
(7, 'Jumanji O Nível Seguinte', 'Spencer volta ao mundo fantástico de Jumanji. Os amigos Martha, Fridge e Bethany entram no jogo e tentam trazê-lo para casa. A turma descobre ainda mais obstáculos e perigos a serem superados.', '2019-12-13', 0, 'https://www.youtube.com/embed/rBxcF-r9Ibs?si=JpLV1GSSJc0c5Ue8'),
(8, 'A Sociedade da Neve', 'Em 1972, um voo vindo do Uruguai colide com uma geleira nos Andes. Apenas 29 dos seus 45 passageiros sobreviveram ao acidente. Presos em um dos ambientes mais hostis do planeta, eles são forçados a lutar pelas suas vidas.', '2023-12-13', 0, 'https://www.youtube.com/embed/pDak4qLyF4Q?si=nST_DhpXmriq8M2k'),
(9, 'Aquaman e o Reino Perdido', 'Um antigo poder é libertado e o herói Aquaman precisa fazer um perigoso acordo com um aliado improvável para proteger Atlântida e o mundo de uma devastação irreversível.', '2023-12-21', 0, 'https://www.youtube.com/embed/FV3bqvOHRQo?si=F6ruhvcW9E_6MIa-'),
(10, 'Oppenheimer', 'O físico J. Robert Oppenheimer trabalha com uma equipe de cientistas durante o Projeto Manhattan, levando ao desenvolvimento da bomba atômica.', '2023-07-21', 1, 'https://www.youtube.com/embed/uYPbbksJxIg?si=o7mIUzzNe5hZnoCm'),
(11, 'Feriado Sangrento', 'Um maníaco empunhando um machado aterroriza os moradores de Plymouth, Massachusetts, depois que um motim durante a Black Friday termina em tragédia. O assassino escolhe as vítimas uma a uma e as mortes aparentemente aleatórias logo revelam um plano muito maior e sinistro.', '2023-11-17', 1, 'https://www.youtube.com/embed/KbU50SdL8zA?si=cQa0XZE_HzJs7YtM'),
(13, 'Guardiões da Galáxia', 'O aventureiro do espaço Peter Quill torna-se presa de caçadores de recompensas depois que rouba a esfera de um vilão traiçoeiro, Ronan. Para escapar do perigo, ele faz uma aliança com um grupo de quatro extraterrestres. Quando Quill descobre que a esfera roubada possui um poder capaz de mudar os rum', '2014-08-07', 0, 'https://www.youtube.com/embed/d96cjJhvlMA?si=_oZhR6MMdFckzR5N'),
(14, 'Invocação do Mal', 'Um casal de investigadores paranormais, Ed e Lorraine Warren, é chamado para ajudar uma família assombrada por atividades paranormais em sua nova casa.', '2013-09-19', 0, 'https://www.youtube.com/embed/GQrrXceHn2E?si=lKR7GrmA_iAI6vkA'),
(15, 'Corra!', 'Chris é um jovem fotógrafo negro que está prestes a conhecer os pais de Rose, sua namorada caucasiana. Na luxuosa propriedade dos pais dela, Chris percebe que a família esconde algo muito perturbador.', '2017-02-24', 0, 'https://www.youtube.com/embed/DzfpyUB60YY?si=rW50MfVVoBFgMR_h'),
(16, 'IT A Coisa', 'Um grupo de crianças se une para investigar o misterioso desaparecimento de vários jovens em sua cidade. Eles descobrem que o culpado é Pennywise, um palhaço cruel que se alimenta de seus medos e cuja violência teve origem há vários séculos.', '2017-09-08', 0, 'https://www.youtube.com/embed/xKJmEC5ieOk?si=v-41fgxFFd2X4bkY'),
(17, 'O Pai da Noiva', 'Um pai deve lidar com o casamento de sua filha e com vários relacionamentos dentro de sua família.', '2022-06-16', 0, 'https://www.youtube.com/embed/s4L-jBx0eRU?si=MFAgSx1hkRpW1q94'),
(18, 'Mulan', 'Para salvar seu pai doente de servir no Exército Imperial, uma jovem destemida se disfarça de homem para lutar contra os invasores do norte da China.', '2020-07-24', 1, 'https://www.youtube.com/embed/KK8FHdFluOQ?si=0jANimblzBAEmPIW'),
(19, 'Gladiador 2', '', '2024-11-22', 0, ''),
(20, 'Kraven O Caçador', '', '2024-08-30', 0, ''),
(21, 'Garfield O Filme', '', '2024-05-23', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `utilizadores`
--

CREATE TABLE `utilizadores` (
  `idutilizador` int(11) NOT NULL,
  `utilizador` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilizadores`
--

INSERT INTO `utilizadores` (`idutilizador`, `utilizador`, `email`, `password`) VALUES
(1, 'Joana', 'joana@gmail.com', '$2y$10$9mNsssKwzByP8jHIZ4jSHON0hB/24b0qV07BxCJ5owSPzFKv.6jPG'),
(2, 'Rui', 'rui@gmail.com', '$2y$10$aUhYKHa3KU8D5bamR5.hkOo7.L1r4yHwVEU1iqSOG7c.rxIIBwG26'),
(3, 'Pedro', 'pedro@outlook.pt', '$2y$10$9sAEv.dxdNSV1f61NmEg5.aAiJPVbUN0RNj723bzhwZEe/rfyKFkO'),
(4, 'Mafalda', 'mafalda@gmail.com', '$2y$10$.gQCmNf2p1HYzDxIa38zJ.KcVE3kF.MX1xXJK8nCU6vGLL66YcrHK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`idavaliacao`),
  ADD KEY `idutilizador` (`idutilizador`),
  ADD KEY `idfilme` (`idfilme`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indexes for table `categoriasfilmes`
--
ALTER TABLE `categoriasfilmes`
  ADD KEY `fk_filme` (`idfilme`),
  ADD KEY `fk_categoria` (`idcategoria`);

--
-- Indexes for table `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`idfilme`);

--
-- Indexes for table `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`idutilizador`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `idavaliacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `filmes`
--
ALTER TABLE `filmes`
  MODIFY `idfilme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `idutilizador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD CONSTRAINT `avaliacoes_ibfk_1` FOREIGN KEY (`idutilizador`) REFERENCES `utilizadores` (`idutilizador`),
  ADD CONSTRAINT `avaliacoes_ibfk_2` FOREIGN KEY (`idfilme`) REFERENCES `filmes` (`idfilme`);

--
-- Constraints for table `categoriasfilmes`
--
ALTER TABLE `categoriasfilmes`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`idcategoria`) REFERENCES `categorias` (`idcategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_filme` FOREIGN KEY (`idfilme`) REFERENCES `filmes` (`idfilme`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
