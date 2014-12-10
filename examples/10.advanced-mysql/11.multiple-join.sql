SELECT c.Code, c.Name, c.Continent, t.Name AS `City Name`, t.Population AS `City Population`, l.Language AS 'Country Language'
FROM world.country AS c
JOIN world.city AS t ON t.CountryCode = c.Code
JOIN world.countrylanguage AS l ON l.CountryCode = c.Code
WHERE t.Population < 1000
ORDER BY t.Population DESC;