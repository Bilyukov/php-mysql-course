SELECT k.KinderGarderID, k.Name, k.Phone, c.ChildID, c.Name, c.Age
FROM kindergarder.kindergarder AS k
JOIN kindergarder.children AS c ON c.KinderGarderID = k.KinderGarderID
WHERE c.Age	< 6
ORDER BY c.Age DESC
