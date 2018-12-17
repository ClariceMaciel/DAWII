-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Dez-2018 às 13:37
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arquinuv`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE `artigos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `data_pub` date DEFAULT NULL,
  `num_pag` int(11) DEFAULT NULL,
  `descricao` text,
  `arquivo` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_cat` int(11) DEFAULT NULL,
  `v_previa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`id`, `titulo`, `data_pub`, `num_pag`, `descricao`, `arquivo`, `imagem`, `id_user`, `id_cat`, `v_previa`) VALUES
(8, 'Análise e Interpretação da Paisagem na Dinâmica UR', '2009-11-27', 20, 'O presente trabalho tem por objetivo mostrar a importância da alfabetização geográfica no ensino de geografia na Educação Básica da Rede Pública do Estado do Paraná através do estudo das paisagens.<br><br> \r\n\r\nCom intuito de proporcionar ao aluno o desenvolvimento de um pensar geográfico a partir da 5ª série, num processo contínuo nas séries seguintes. As atividades estão organizadas de forma que possibilita uma leitura geral do espaço geográfico com análise e reflexão de diferentes paisagens de espaços e temporalidades diversos para uma leitura do lugar de vivência do aluno, a paisagem urbana de Maringá – PR.<br><br>\r\n\r\nPalavras Chave: Espaço Geográfico, Sociedade, Alfabetização\r\n\r\n<br><br>\r\nAutor: Jacira Razboni', '2127-8.pdf', 'art.JPG', 6, 1, 'A experiência humana se dá na construção dos espaços e na interação com a paisagem. A compreensão da organização espacial criada e recriada por uma sociedade passa por uma leitura da paisagem que implica um processo de decodificação dos elementos, símbolos e significados nela expressos.\r\n<br><br>\r\n2 A paisagem é moldada segundo as características econômicas, históricas, sociais, culturais e tecnológicas da sociedade que nela se insere. Todavia, a sociedade também se impregna dos elementos da paisagem que integram sua vida cotidiana, num processo de intensa interatividade. Interpretar a realidade geográfica é fazer a leitura das marcas que a sociedade imprime em seu meio na organização dos espaços e na criação de suas paisagens.\r\n<br><br>\r\nContudo, da mesma forma que precisamos aprender o significado dos códigos da escrita para que possamos fazer a leitura e interpretação de um texto escrito, para decodificar a paisagem também é preciso aprendizado que envolve o desenvolvimento de diversas habilidades tais como: observação atenta, indagação, comparação, descrição, reflexão, análise e identificação para se construir uma compreensão do mundo através da paisagem. '),
(9, 'Psicologia como disciplina científica e discurso.', '2003-06-03', 7, 'A Psicologia é definida habitualmente como ciência do comportamento, mas necessita uma revisão de seus pressupostos. Há dificuldades na própria definição de comportamento e ela representa o predomínio das correntes neopositivistas e materialistas.\r\n<br><br>\r\nIsto levou as disciplinas ou escolas psicológicas que tratavam a questão dentro do âmbito de uma psicologia introspectiva e subjetiva ou da alma a se afastarem, gerando vazios e contradições, presentes no campo teórico, profissional, acadêmico e de formação. \r\n<br><br>\r\nPalavras Chave: Ciência do comportamento, Formação Profissional.\r\n<br><br>\r\nAutores: Carlos Augusto, Rafael Raffaelli ', 'v8n1a05.pdf', 'psi.JPG', 6, 1, 'A Psicologia, cuja definição habitual é a de “ciência do comportamento”, necessita uma revisão de seus pressupostos básicos. O cunho comportamentalista dessa definição é evidente e representa o predomínio histórico das correntes neopositivistas e materialistas no campo psicológico, contrapondo-se à própria etimologia da palavra Psicologia, que significa estudo da alma. \r\n<br><br>\r\nEsse é, talvez, um dos poucos casos em que uma ciência não é definida de acordo com a sua etimologia, afinal a Biologia estuda a vida, a Geologia a Terra, e assim por diante. Esse predomínio torna-se claro desde a afirmação da psicologia científica enquanto um ramo da biologia e da fisiologia, apoiada nas perspectivas epistemológicas derivadas da física clássica, aceitando-se implicitamente o primado da matéria sobre o espírito. '),
(10, 'Tecnologia da Informação e o desempenho competitiv', '2010-10-10', 14, 'A tecnologia está mudando de forma acelerada o mundo. E esse novo mundo será, em grande medida, moldado pela convergência digital, resultante da fusão das Tecnologias da Informação (TI), das telecomunicações e da multimídia.\r\n<br><br>\r\nUm dos motivos que norteou a escolha do tema foi o fato de que a tecnologia passou a ser, de fato, a mais poderosa alavanca de transformação da sociedade, em âmbito global, e continuará, sem dúvida, a produzir mudanças econômicas, sociais, políticas e culturais. \r\n<br><br>\r\nObjetivou-se desta forma, avaliar de que maneira a organização pode utilizar a Tecnologia da Informação de modo a desenvolver vantagens competitivas, e especificamente, listar os benefícios que o uso da Tecnologia da Informação pode trazer para uma organização e identificar as mudanças que podem ocorrer numa organização com o uso da Tecnologia da Informação. \r\n<br><br>\r\nPalavras Chave: Tecnologia da Informação, Vantagem Competitiva.\r\n<br><br>\r\nAutor: Maria de Fátima, Jociely Santos.\r\n\r\n', 'tec.pdf', 'tec.JPG', 6, 1, 'A revolução da informação vem se acelerando nos últimos anos, podendo trazer muitos benefícios para o desenvolvimento da sociedade, desde que possa se conseguir obter um equilíbrio entre a informação, o conhecimento e a sabedoria. \r\n<br><br>\r\nA informação é um poderosos recurso para as organizações que permite a estas um perfeito alinhamento estratégico por meio de fluxos bidirecionais entre a empresa e o macroambiente, além disso, ela cria condições para que os objetivos da empresa sejam viabilizados e sua missão seja cumprida. Com o fluxo informacional, as empresas garantem o elo que une e coordena seus componentes, o que propicia a manutenção do equilíbrio e da integração em um ambiente em constante mutação.\r\n<br><br>\r\n A integração da informação e do uso de novas tecnologias gera para as empresas um diálogo mais eficaz entre seus setores e entre a empresa e o ambiente na qual está inserida. E a tecnologia dentro das organizações é, atualmente, um dos principais recursos utilizados na geração da informação integrada, por permitir níveis de confiabilidade e rapidez exigidos para o seu uso eficiente e efetivo. '),
(11, 'Testando inserir com usuário logado', '2018-12-09', 3, 'testando inserir com user logado', 'certificado digital.pdf', '14925796_10155408129918294_4813076551617904969_n.jpg', 7, 3, 'testando com user logado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigo_user`
--

CREATE TABLE `artigo_user` (
  `id_user` int(11) DEFAULT NULL,
  `id_artigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(1, 'Artigo Científico'),
(3, 'Pôster Acadêmico'),
(4, 'Resumo'),
(5, 'Resenha'),
(6, 'Relatório'),
(7, 'Monografia'),
(8, 'Dissertação'),
(9, 'Tese');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `senha` tinytext NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `tipo`) VALUES
(1, 'clarice', 'clarice.k.maciel98@hotmail.com', '1234', 'usuario'),
(2, 'Frodo', 'frodo@lord.com', '43210', 'usuario'),
(3, 'Fulano Amarelo', 'amarelo@fulano.com', 'amarelo', 'usuario'),
(4, 'ClariceMaciel', 'clarice.k.maciel98@hotmail.com', '0123', 'administrador'),
(5, 'obi-wan', 'obi@kenobi.com', '9f8e8ed4a01ed7432b9394d627922ae3bb0a4fbe', 'usuario'),
(6, 'spock', 'spock@starteck.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'administrador'),
(7, 'sherlock', 'sherlock@holmes.com', '9f8e8ed4a01ed7432b9394d627922ae3bb0a4fbe', 'usuario'),
(8, 'Darth Vader', 'darth@vader.com', '63ab910cb3a7bc89faae5a46aa337aa22f5f4d30', 'usuario');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Indexes for table `artigo_user`
--
ALTER TABLE `artigo_user`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_artigo` (`id_artigo`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artigos`
--
ALTER TABLE `artigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `artigos`
--
ALTER TABLE `artigos`
  ADD CONSTRAINT `artigos_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `artigos_ibfk_2` FOREIGN KEY (`id_cat`) REFERENCES `categoria` (`id`);

--
-- Limitadores para a tabela `artigo_user`
--
ALTER TABLE `artigo_user`
  ADD CONSTRAINT `artigo_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `artigo_user_ibfk_2` FOREIGN KEY (`id_artigo`) REFERENCES `artigos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
