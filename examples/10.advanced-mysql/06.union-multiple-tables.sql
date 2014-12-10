(
	SELECT CountryCode AS `Code`, Percentage AS 'Info'
	FROM world.countrylanguage
	WHERE Percentage > 50 AND Percentage < 55
) UNION 
(
	SELECT `Code`, Continent AS `Info`
	FROM world.country
	WHERE Continent LIKE '%America'
)
ORDER BY `Code`
