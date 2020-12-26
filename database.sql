CREATE DATABASE benditaempanada
	DEFAULT CHARACTER SET utf8;
USE benditaempanada;
CREATE TABLE productos(
        id INT NOT NULL UNIQUE AUTO_INCREMENT,
        nombre VARCHAR(255),
        price VARCHAR(255),
        img VARCHAR(500),
        descripcion VARCHAR(300)
);
CREATE TABLE newsleatter(
	id_usuario INT NOT NULL UNIQUE AUTO_INCREMENT,
	email VARCHAR(255) NOT NULL
);
CREATE TABLE contacto(
        id_contacto INT NOT NULL UNIQUE AUTO_INCREMENT,
        email VARCHAR(255) NOT NULL,
	nombre VARCHAR(255),
        mensaje VARCHAR(300)
);


INSERT INTO `productos` (`id`, `nombre`, `price`, `img`, `descripcion`) VALUES (NULL, 'Lorem', '6.000', 'https://static.wixstatic.com/media/2285c6_be96de8868b942979a0180649d66d80c~mv2.png/v1/fill/w_232,h_232,usm_1.20_1.00_0.01/file.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu.'),
(NULL, 'ipsum', '2.000', 'https://static.wixstatic.com/media/2285c6_3851cc4372164b49913edd49bac94870~mv2.png/v1/fill/w_232,h_232,usm_1.20_1.00_0.01/file.webp', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(NULL, 'dolor', '5.000', 'https://static.wixstatic.com/media/2285c6_dd5fbc25d15f47bd8e4c722a88c6cceb~mv2.png/v1/fill/w_232,h_232,usm_1.20_1.00_0.01/file.webp', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
(NULL, 'sit', '3.000', 'https://static.wixstatic.com/media/2285c6_929ecf51cae745a9bf8a61b0229d22e6~mv2.png/v1/fill/w_232,h_232,usm_1.20_1.00_0.01/file.webp', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(NULL, 'amet', '10.000', 'https://static.wixstatic.com/media/2285c6_9030674e9b614f59a57237c2c10a884d~mv2.png/v1/fill/w_232,h_232,usm_1.20_1.00_0.01/file.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu.'),
(NULL, 'consectetur', '12.000', 'https://static.wixstatic.com/media/2285c6_7ea1950b29a141ffa9877e1bbc7a2160~mv2.png/v1/fill/w_232,h_232,usm_1.20_1.00_0.01/file.webp', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

/**
 * Author:  Juan David Polo
 * Created: 25/12/2020
 */

