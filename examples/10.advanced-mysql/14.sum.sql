SELECT Continent, SUM(country.SurfaceArea) AS ContinentSurface
FROM world.country
GROUP BY Continent
ORDER BY Continent