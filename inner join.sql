SELECT usuarios.*, permisos.fk_id_rol, roles.rol
FROM usuarios
INNER JOIN permisos ON usuarios.documento = permisos.documento
INNER JOIN roles ON permisos.fk_id_rol = roles.id_rol;


/*inner join para mirar estado de las solicitudes de los usuarios */
SELECT usuarios.nombres, usuarios.apellidos, solicitudes.fecha, solicitudes.hora, estado_solicitudes.estado_solicitud
FROM usuarios
INNER JOIN solicitudes ON usuarios.documento = solicitudes.fk_documento
INNER JOIN estado_solicitudes ON solicitudes.fk_cod_estado_solicitud = estado_solicitudes.cod_estado_solicitudes;

/*inner join para mirar estado de las solicitudes de usuario en especifico */
SELECT usuarios.nombres, usuarios.apellidos, solicitudes.fecha, solicitudes.hora, estado_solicitudes.estado_solicitud
FROM usuarios
INNER JOIN solicitudes ON usuarios.documento = solicitudes.fk_documento
INNER JOIN estado_solicitudes ON solicitudes.fk_cod_estado_solicitud = estado_solicitudes.cod_estado_solicitudes
WHERE usuarios.documento = 'documento_del_usuario';



/*lef join para mirar estado de las solicitudes de usuarios si un horario nbo tiene un estado asociado se muestra un valor null */
SELECT u.documento, h.fecha, h.hora, es.estado_solicitud
FROM usuarios u
LEFT JOIN solicitudes h ON u.documento = h.fk_documento
LEFT JOIN estado_solicitudes es ON h.fk_cod_estado_solicitud = es.cod_estado_solicitudes;


/*inner join join para 3 tablas donde nos muestra su marca y categoria (es casi igual que ver el inventario desde la pagina)*/
SELECT m.*, marca.marca, categoria.categoria_maquina 
FROM maquinas m 
INNER JOIN marcas marca ON m.fk_marca = marca.cod_marca 
INNER JOIN categorias_maquinas categoria ON m.fk_categoria = categoria.cod_categoria;
