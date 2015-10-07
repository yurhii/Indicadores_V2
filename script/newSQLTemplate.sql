--CONSULTA PRINCIPAL
--CONSULTA PARA VER INDICADOR CON SECTOR
SELECT a.idformindicador, b.idrepterritorial,b.nombre, b.codigo ,c.nombre, e.idfuenteinformacion, fi.nombre,
	g.sigla,date_part('year',e.fechadatoini)::CHARACTER VARYING
	FROM formindicador a, repterritorial b, formula c ,formvarterri e,indicador f, unidadmedida g, fuenteinformacion fi
	WHERE a.idrepterritorial = b.idrepterritorial	
	AND a.idformula = c.idformula
	AND a.idformindicador = e.idformindicador
	AND c.idformula = f.idformula
	AND f.idunidadmedida = g.idunidadmedida
	and b.idrepterritorial = a.idrepterritorial
	and fi.idfuenteinformacion = e.idfuenteinformacion		
	GROUP BY fi.nombre,a.idformindicador,b.idrepterritorial,b.nombre,b.codigo,c.nombre,
					e.idfuenteinformacion, c.formula,a.idrepterritorial,e.idfuenteinformacion,
					e.idmetodocaptura,g.sigla,e.fechadatoini;

--CONSULTA PARA SECTOR
SELECT f.idfuenteinformacion, rt.idrepterritorial,f.nombre, f.idtipofuenteinfo,f.sigla, rt.nombre
FROM repterritorial rt 
			INNER JOIN elemento el on rt.idrepterritorial = el.idrepterritorial and rt.codigo = '030000'			
			INNER JOIN elemento_has_fuenteinfo elf on elf.idelemento = el.idelemento
			INNER JOIN fuenteinformacion f on f.idfuenteinformacion = elf.idfuenteinformacion and f.idtipofuenteinfo = 1
GROUP BY f.idfuenteinformacion, rt.nombre,rt.idrepterritorial
ORDER BY f.idfuenteinformacion;
