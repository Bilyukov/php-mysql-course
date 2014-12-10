SELECT Continent, MIN(country.SurfaceArea) AS CountrySurface
FROM world.country
GROUP BY Continent
ORDER BY Continent;

SELECT Continent, MAX(country.SurfaceArea) AS CountrySurface
FROM world.country
GROUP BY Continent
ORDER BY Continent;