(
	SELECT CountryCode, IsOfficial, Percentage
	FROM world.countrylanguage
	WHERE Percentage > 17 AND Percentage < 20
) UNION 
(
	SELECT CountryCode, IsOfficial, Percentage
	FROM world.countrylanguage
	WHERE Percentage > 80 AND Percentage < 85
)
ORDER BY CountryCode
