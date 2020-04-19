# 1st query
SELECT w.lastname, w.firstname, p.role, t.name 
FROM wizard w
INNER JOIN player p ON w.id = p.wizard_id
INNER JOIN team t ON t.id = p.team_id
ORDER BY t.name, p.role, w.lastname, w.firstname;


# 2nd query
SELECT w.firstname, w.lastname, p.role
FROM wizard w
JOIN player p ON p.wizard_id = w.id
WHERE p.role = 'seeker'
ORDER BY w.lastname, w.firstname;

#3 3rd query
SELECT w.firstname, w.lastname
FROM wizard w
LEFT JOIN player p
ON p.wizard_id = w.id
WHERE wizard_id IS NULL;
