
SELECT CountryCode, `Language`, Percentage
FROM `CountryLanguage`
WHERE IsOfficial='T' AND Percentage > 50;

SELECT Code, Name, Continent, SurfaceArea
FROM country
WHERE Continent = "South America" OR Continent = "Asia";

SELECT CountryCode, `Language`, Percentage
FROM `CountryLanguage`
WHERE IsOfficial != 'T';

SELECT CountryCode, `Language`, Percentage
FROM `CountryLanguage`
WHERE (IsOfficial='T' AND Percentage > 70) OR (IsOfficial='F' AND Percentage < 17);