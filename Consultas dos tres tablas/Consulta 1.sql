select visitas.idVisitas,jesuita.nombre
from maquinas INNER JOIN visitas
	on maquinas.ip=visitas.ip
	cross join jesuita