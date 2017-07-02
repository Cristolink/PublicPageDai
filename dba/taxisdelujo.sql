
CREATE DATABASE taxisdelujo;


CREATE TABLE `usuario` (
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `nombre_usuario` varchar(20) COLLATE utf8_bin NOT NULL,
  `clave_usuario` varchar(20) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `correo` varchar(100) COLLATE utf8_bin NOT NULL,
  `nombre_empresa` varchar(100) COLLATE utf8_bin NOT NULL,
  `rut_empresa` varchar(30) COLLATE utf8_bin NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `clave_usuario`, `nombre`, `correo`, `nombre_empresa`, `rut_empresa` ) VALUES
(1, 'Cristolink', 'asdf', 'Cristobal', 'cristobal.godoi@gmail.com, 'Godoi y asociados', '111111111');



ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);




ALTER TABLE `usuario`
  MODIFY `id_usuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
