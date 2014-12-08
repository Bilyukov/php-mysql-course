SELECT Code, Name, Continent, SurfaceArea
FROM country
WHERE Continent LIKE "South America"
ORDER BY Code;

SELECT Code, Name, Continent, SurfaceArea
FROM country
WHERE Continent LIKE "ASIA"
ORDER BY Code DESC;
