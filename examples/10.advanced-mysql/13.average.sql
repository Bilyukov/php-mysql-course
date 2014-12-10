SELECT Continent, AVG(country.SurfaceArea)
FROM world.country
GROUP BY Continent