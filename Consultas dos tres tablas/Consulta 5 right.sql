SELECT jesuita.idJesuita, jesuita.nombre, maquinas.lugar
FROM visitas
RIGHT JOIN jesuita ON visitas.idJesuita = jesuita.idJesuita
RIGHT JOIN maquinas ON visitas.ip = maquinas.ip;
