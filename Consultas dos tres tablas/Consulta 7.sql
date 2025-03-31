SELECT maquinas.lugar
FROM maquinas
LEFT JOIN visitas ON maquinas.ip = visitas.ip
WHERE visitas.idJesuita IS NULL;
