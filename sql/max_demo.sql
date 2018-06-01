-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2018 at 02:15 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `max_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes_correo`
--

CREATE TABLE `clientes_correo` (
  `id` int(11) NOT NULL,
  `correo` varchar(65) NOT NULL,
  `fecha_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientes_correo`
--

INSERT INTO `clientes_correo` (`id`, `correo`, `fecha_registro`) VALUES
(1, 'gino_siancas04@hotmail.com', '2018-04-26 03:21:56'),
(2, 'omar@mda.pe', '2018-04-26 03:22:07'),
(3, 'erwin@mda.pe', '2018-04-26 03:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `franquicias`
--

CREATE TABLE `franquicias` (
  `franquicia_id` int(11) NOT NULL,
  `fullname` varchar(55) NOT NULL,
  `email` varchar(65) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `date_register` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `franquicias`
--

INSERT INTO `franquicias` (`franquicia_id`, `fullname`, `email`, `telephone`, `message`, `date_register`) VALUES
(1, 'Gino Siancas', 'ginito_lee@hotmail.com', '983998008', 'hola', '2018-04-26 03:22:50'),
(2, 'omar audin', 'omar@mda.pe', '985594488', 'hola', '2018-04-26 03:23:04'),
(3, 'Gino Siancas', 'ginito_lee@hotmail.com', '983998008', 'hola there!', '2018-04-29 21:15:18'),
(4, 'Gino Siancas', 'ginito_lee@hotmail.com', '983998008', 'rffefwefwefwefrnrn', '2018-05-20 04:18:22');

-- --------------------------------------------------------

--
-- Table structure for table `reservas`
--

CREATE TABLE `reservas` (
  `reserve_id` int(11) NOT NULL,
  `fullname` varchar(65) NOT NULL,
  `email` varchar(55) NOT NULL,
  `telephone` int(11) NOT NULL,
  `service` varchar(109) NOT NULL,
  `message` text NOT NULL,
  `time_date_reserva` varchar(30) NOT NULL,
  `time_register` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservas`
--

INSERT INTO `reservas` (`reserve_id`, `fullname`, `email`, `telephone`, `service`, `message`, `time_date_reserva`, `time_register`) VALUES
(1, 'Gino Siancas', 'ginito_lee@hotmail.com', 983998008, 'servicio 2', 'hola', '04/27/2018', '2018-04-26 03:23:57'),
(2, 'Katrin briem', 'guadalupemian@yahoo.com', 3432423, 'servicio 2', 'hola', '04/26/2018', '2018-04-26 03:24:15'),
(3, 'Gino Siancas', 'ginito_lee@hotmail.com', 983998008, 'Lifting de PestaÃ±as', 'hola que tal', '04/26/2018', '2018-04-26 04:08:42'),
(4, 'Gino Siancas', 'ginito_lee@hotmail.com', 983998008, 'corporal facial', 'hey there buddies!', '05/31/2018', '2018-05-24 23:59:17'),
(5, 'omar audin', 'gino_siancas04@hotmail.com', 423423, '', 'hefhefhe', '05/30/2018', '2018-05-25 00:01:56'),
(6, 'Gino Siancas3', 'gino_siancas04@hotmail.com', 423423, '', 'ffererfer', '05/29/2018', '2018-05-25 00:03:10'),
(7, 'omar audin', 'gino_siancas04@hotmail.com', 983998008, ' cejas pestanas corporal facial', 'rvrvrn', '05/24/2018', '2018-05-25 00:45:27'),
(8, 'gino siancas', 'gino_siancas04@hotmail.com', 3432423, ' cejas pestanas - corporal facial -', 'vrfvvern', '06/27/2018', '2018-05-25 00:47:44');

-- --------------------------------------------------------

--
-- Table structure for table `search_content`
--

CREATE TABLE `search_content` (
  `id` int(11) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  `page` varchar(255) NOT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search_content`
--

INSERT INTO `search_content` (`id`, `path`, `page`, `content`) VALUES
(1, 'index.php', 'home', '¿QUIÉNES SOMOS? Somos un centro especializado en el cuidado de tu cuerpo, pestañas y cejas. Buscamos reafirmar y resaltar tu belleza natural, a través de tratamientos y equipos de primer nivel, bajo la supervisión de nuestros asesores. Somos tu fuente vital de renovación. Misión Resaltar la belleza presente en ti. Visión Ser tu centro de protección y renovación vital.\r\nCEJAS Y PESTAÑAS FACIALES Y CORPORALES'),
(2, 'cejas-pestanas.php', 'cejas pesta&ntildeas', 'CEJAS Y PESTAÑAS \r\n\r\nExtensiones de pestañas\r\nLas extensiones son adheridas una a una a tus pestañas naturales para un acabado impecable, sin cargarla o causar daño. Requieren ser retocadas cada 2 o 3 semanas en nuestras instalaciones.\r\n\r\nLifting de Pestañas\r\nTambién conocido como LBL Lashes B-Lift (Levantamiento, volumen, largo y uso de B Pantenol), trabaja sobre la raíz de las pestañas naturales, dándoles la sensación de ser más largas y gruesas. Asimismo, con el teñido superior en el tratamiento, tendrás un efecto de rímel.\r\n\r\nMicroblading de pestañas\r\nSe realiza sobre la línea de nacimiento de la pestaña, casi la parte interna del párpado. Cubre los espacios en blanco que hay entre las pestañas. Se aplica anestesia en el tratamiento.\r\n\r\nMicroblading de cejas\r\nConsiste en imitar pelito por pelito en la dirección original del crecimiento de la cejas, partiendo de un diseño acorde a las facciones del rostro, completando las partes donde hay poco o nulo volumen.\r\n\r\nDiseño y definición de cejas\r\nSe rediseña la forma de las cejas mediante medidas especiales de acuerdo a la forma del rostro. Incluye depilación y teñido a fin de resaltarlas, logrando cubrir los espacios entre los pelitos con precisión, sin maltratar pieles sensibles.\r\n\r\nTestimonios\r\n¡No hay secretos! Tú también puedes tener una mirada perfecta, dándole a tus pestañas y cejas un look radiante. Pruébalo y cuéntanos cómo te fue!\r\n\r\nTratamientos\r\nTenemos una gama de productos que beneficiarán a tus cejas y pestañas, dándole más fuerza y pronunciamiento en sus formas. Ten una asesoría personalizada gratuita para conocer tu estado y orientarte al tratamiento que es para ti.\r\n\r\nPREGUNTAS FRECUENTES'),
(4, 'faciales-corporales.php', 'faciales corporales', 'FACIALES CORPORALES\r\n\r\nHydrafacial\r\nEs un cóctel de sueros con vitaminas, antioxidantes y ácido hialurónico que aportan tersura y elasticidad gracias a la combinación de cuatro tratamientos en uno: desintoxica, rejuvenece, protege e hidrata la piel.\r\n\r\nHydra-System\r\nSon micro corrientes eléctricas que actúan en lo más profundo de la piel para regenerar las células. Aplica restricciones para personas con prótesis metálicas, marcapasos y problemas con el acné.\r\n\r\nAntioxidante (Vitamina C)\r\nConsta de la aplicación de Serum + cremas + mascarilla y corrientes eléctricas que atacan los signos del envejecimiento. Desde las primeras aplicaciones el cutis recupera tersura y firmeza. Al mismo tiempo la vitamina C proporciona luminosidad disimulando los signos del cansancio y estrés en la piel.\r\n\r\nVelox – Tratamiento reductor\r\nSe trata de un sistema que trabaja por medio de programas de ultrasonido, lo que garantiza una terapia combinada para reducir así todas tus medidas.\r\n\r\nCarboxiterapia\r\nTécnica aplicada para combatir la celulitis, la flacidez y la grasa localizada. Este tratamiento es muy poco invasivo que consiste en la aplicación de CO2 a través de vías subcutáneas mediante pequeñas infiltraciones en los tejidos afectos.\r\n\r\nTestimonios\r\n¡No hay secretos! Tú también puedes tener una mirada perfecta, dándole a tus pestañas y cejas un look radiante. Pruébalo y cuéntanos cómo te fue!\r\n\r\nTratamientos\r\nResalta tu belleza natural con nuestros tratamientos que te ayudarán a mantener un hermoso cutis y una radiante piel. Gracias a nuestros productos y tecnología garantizamos bienestar y grandes resultados. Contáctanos y recibe una asesoría gratuita, nuestros asesores te dirán que método te favorece.\r\n\r\nPREGUNTAS FRECUENTES'),
(5, 'franquicias.php', 'franquicias', 'FRANQUICIAS\r\nSomos un centro especializado en el cuidado de tus cejas, pestañas y cuerpo. Queremos que seas parte de nuestro exito, herendando nuestras técnicas y flujo de trabajo para asegurar tu inversion #FranquiciaMax.'),
(6, 'reservas.php', 'reservas', 'RESERVAS\r\nEste formulario está sujeto a disponibilidad de fechas y horarios. Nuestros especialistas evaluarán el estado natural de cuerpo, nuestras especialistas realizan una evaluación inicial, donde recomendamos el mejor tratamiento para ti.\r\n\r\n¡Déjanos tus datos y te llamamos!\r\n\r\n¿CÓMO LLEGAR?'),
(7, 'trabajos.php', 'trabajos', 'TRABAJA CON NOSOTROS\r\nLlena tus datos y se parte de la familia #FamiliaMax Mucha Suerte!');

-- --------------------------------------------------------

--
-- Table structure for table `trabajos`
--

CREATE TABLE `trabajos` (
  `id` int(11) NOT NULL,
  `fullname` varchar(55) NOT NULL,
  `dni` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `district` varchar(65) NOT NULL,
  `telephone` int(11) NOT NULL,
  `cv` varchar(225) NOT NULL,
  `registered_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trabajos`
--

INSERT INTO `trabajos` (`id`, `fullname`, `dni`, `email`, `district`, `telephone`, `cv`, `registered_date`) VALUES
(1, 'Gino Siancas', 71141389, 'gino_siancas04@hotmail.com', 'Los Angeles', 983998008, 'Abril15GinoSiancasCV.docx', '2018-04-26 03:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(0, 'tester', 'tester123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes_correo`
--
ALTER TABLE `clientes_correo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `franquicias`
--
ALTER TABLE `franquicias`
  ADD PRIMARY KEY (`franquicia_id`);

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`reserve_id`);

--
-- Indexes for table `search_content`
--
ALTER TABLE `search_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trabajos`
--
ALTER TABLE `trabajos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes_correo`
--
ALTER TABLE `clientes_correo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `franquicias`
--
ALTER TABLE `franquicias`
  MODIFY `franquicia_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `reserve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `search_content`
--
ALTER TABLE `search_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trabajos`
--
ALTER TABLE `trabajos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
