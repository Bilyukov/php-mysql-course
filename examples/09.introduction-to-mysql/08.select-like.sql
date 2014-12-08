SELECT Code, Name, Continent, SurfaceArea
FROM country
WHERE Continent LIKE "South America";

SELECT Code, Name, Continent, SurfaceArea
FROM country
WHERE Continent LIKE "A%";

SELECT Code, Name, Continent, SurfaceArea
FROM country
WHERE Continent LIKE "%America";

SELECT Code, Name, Continent, SurfaceArea
FROM country
WHERE Name LIKE "%An%";
