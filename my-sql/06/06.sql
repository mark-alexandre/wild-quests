# 1st request

SELECT t.name school_name,
COUNT(w.id) AS nb_students
FROM wizard w
LEFT JOIN player p ON w.id = p.wizard_id
LEFT JOIN team t ON t.id = p.team_id
GROUP BY t.name
ORDER BY nb_students DESC;

# 2nd request

SELECT t.name school_name,
COUNT(w.id) AS nb_students
FROM wizard w
LEFT JOIN player p ON w.id = p.wizard_id
LEFT JOIN team t ON t.id = p.team_id
GROUP BY t.name
HAVING nb_students > 14;

# 3rd request

SELECT w.lastname, w.firstname
FROM wizard w
LEFT JOIN player p ON p.wizard_id = w.id
WHERE DAYNAME(p.enrollment_date) = 'Monday';
