SELECT jesuita.idJesuita, 
       jesuita.nombre, 
       maquinas.lugar
FROM jesuita
LEFT JOIN visitas ON jesuita.idJesuita = visitas.idJesuita
LEFT JOIN maquinas ON visitas.ip = maquinas.ip;
