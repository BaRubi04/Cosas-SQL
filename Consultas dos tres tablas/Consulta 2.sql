select visitas.idVisitas,jesuita.nombre,maquinas.lugar
from maquinas INNER JOIN visitas
	on maquinas.ip=visitas.ip
	cross join jesuita