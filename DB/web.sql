-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 07:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `url_img` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description`, `url_img`) VALUES
(1, 'Somos una startup dedicada al desarrollo de nuevas tecnologías enfocadas en el la Inteligencia Artificial. Nuestro objetivo es revolucionar todo el campo del machine learning con el unico proposito de ayudar a la humanidad mediante nuestro trabajo, distribuyendo nuestros resultados y estudios por los diferentes medios como papers, conferencias, redes social y otros medios informativos.', 'img/startup.jpg'),
(2, 'Conocemos el potencial del Open Source (softfware de código libre) y de toda la comunidad de desarrolladores, por ende abriremos el código de la mayoría de nuestros proyectos, las contribuciones mas relevantes e interesantes serán añadidas y notificadas a todos. En un futuro no muy lejano hemos contemplado premiar y dar a conocer los miembros mas destacados de nuestra comunidad.', 'img/code22.jpg'),
(3, 'Nosotros hemos desarrollado varios proyectos para incentivar a aprender y estudiar los diferentes campos del desarrollo de software. Nuestra visión del futuro con esto es dar a conocer la importancia de saber programar, y como esto cambia nuestras vidas al tener que aprender algo nuevo cada dia.', 'img/coding.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `email` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`) VALUES
(1, 'test', 'test@test.com');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` text NOT NULL,
  `url_img` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `title`, `description`, `url_img`) VALUES
(1, 'Los niveles de conducion autonoma', 'La NHTSA (Administración Nacional de Seguridad del Tráfico ) creó una escala con cinco niveles de automatización, de 0 a 4, focalizándose principalmente en las capacidades del vehículo de conducirse por sí mismo. Aqui te explicamos porque estamos todavia ', 'img/galeria/auto.jpg'),
(2, 'Por qué GPT-3, el nuevo modelo de lenguaje de Open', 'GPT-3 es el modelo de lenguaje más poderoso creado hasta ahora. Es decir, una inteligencia artificial, un modelo de machine learning que analiza texto o datos para ofrecer predicciones de palabras en función de todas las palabras anteriores. Es lo que se ', 'img/galeria/openai2.jpg'),
(3, 'El futuro de las imagines? Pix2Pix', 'Pix2Pix es una arquitectura de traducción de imagen a imagen condicional que utiliza un objetivo GAN condicional combinado con una pérdida de reconstrucción. El objetivo de GAN condicional para las imágenes observadas x, las imágenes de salida y y el vect', 'img/galeria/code3.jpg'),
(4, 'Aprendizaje automático', 'El aprendizaje automático es un tipo de inteligencia artificial (AI) que proporciona a las computadoras la capacidad de aprender, sin ser programadas explícitamente. El aprendizaje automático se centra en el desarrollo de programas informáticos que pueden', 'img/galeria/machine.jpg'),
(5, 'El futuro de Machine Learning', 'La evolución de esta tecnología aporta una gran innovación en distintas áreas y servicios que se ofrecen actualmente. Actualmente, encontramos Machine Learning en distintos ámbitos y que aportan una inmensidad a la humanidad.', 'img/galeria/machineLearning3.png'),
(6, 'Cual es la diferencia entre Deep Learning y Machin', 'El Deep Learning es una subclase de algoritmos de Machine Learning cuya peculiaridad es un mayor nivel de complejidad. Entonces, Deep Learning pertenece al Machine Learning y no son conceptos absolutamente opuestos. Nos referimos al aprendizaje superficia', 'img/galeria/deep.png'),
(7, 'El piloto automatico de Tesla', 'Las características avanzadas de seguridad y comodidad del Piloto automático se han diseñado para ayudarle con las partes más agotadoras de la conducción. El Piloto automático introduce nuevas funciones y mejora la funcionalidad existente para hacer que s', 'img/galeria/tesla.jpg'),
(8, 'Un robot en China debutó como conductor de noticia', 'La agencia Xinhua añadió que el conductor virtual es ya un miembro de su equipo que puede trabajar las 24 horas en su sitio en internet y otras plataformas electrónicas, con reducción de costos de producción y mejora en la eficiencia.', 'img/galeria/robot2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `paragraph` text NOT NULL,
  `url_img` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `paragraph`, `url_img`) VALUES
(1, 'Inteligencia Artificial', 'La Inteligencia Artificial (IA) es la combinación de algoritmos planteados con el propósito de crear máquinas que presenten las mismas capacidades que el ser humano. Tipos de AI segun Stuart Russell y Peter Norvig que clasificaron cuatro tipos: sistemas que piensan como humanos, como por ejemplo las redes neuronales artificiales. Sistemas que actúan como humanos, como los robots. Sistemas que usan la lógica racional, como los sistemas expertos, y sistemas que actúan racionalmente, como los agentes inteligentes.', 'img/roboto1.jpg'),
(2, 'Desarrollo de Inteligencia Artificial', 'El desarrollo de la inteligencia o Artificial Intelligence (AI) ha revolucionado el inmensa cantidad de campos, porque hace posible que las máquinas aprendan de la experiencia, se ajusten a las nuevas entradas y realicen tareas similares a las de los humanos. La mayoría de los ejemplos de IA que visualizan hoy, desde computadoras que juegan al ajedrez hasta autos sin conductor, dependen en gran medida del aprendizaje profundo y el procesamiento del lenguaje natural</span> como veremos mas adelante.', 'img/code2.jpg'),
(3, 'OpenAI', 'OpenAI es una compañía de investigación de inteligencia artificial (IA) sin fines de lucro que tiene como objetivo promover y desarrollar inteligencia artificial amigable de tal manera que beneficie a la humanidad en su conjunto. La organización tiene como objetivo \"colaborar libremente\" con otras instituciones e investigadores al hacer sus patentes e investigaciones abiertas al público. Esta compañia ha revolucionado todo este campo con avances tan grandes como: GPT-3 e ImageNet y entre otros proyectos bastantes interesantes.', 'img/openai.jpg'),
(4, 'Automoviles autonomos', 'también conocidos como sin conductor, es aquel que es capaz de detectar su entorno y operar sin la colaboración humana. Por lo cual no requiere la participación de un pasajero humano tome el control del mismo. Dandole la capacidad tal que el  vehículo puede ir de un lugar a otro y realizar una serie de maniobras como si fuese un conductor humano.', 'img/Autonomous-car-761x430.jpg'),
(5, 'El campo del Deep Learning', 'El Deep Learning o Aprendizaje profundo es un conjunto de algoritmos de aprendizaje automático que intenta modelar abstracciones de alto nivel en datos usando arquitecturas computacionales que admiten transformaciones no lineales múltiples e iterativas de datos expresados en forma matricial o tensorial. El Deep Learning ha llamado mucho la atención por su tencial utilidad en distintos tipos de aplicaciones en el “mundo real” (pueden aplicarse con éxito a grandes volúmenes de datos para el descubrimiento y aplicación de conocimiento.', 'img/imagen.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
