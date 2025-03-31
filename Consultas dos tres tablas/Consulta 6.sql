SELECT maquinas.lugar, jesuita.nombre
FROM maquinas
LEFT JOIN visitas ON maquinas.ip = visitas.ip
LEFT JOIN jesuita ON visitas.idJesuita = jesuita.idJesuita;
