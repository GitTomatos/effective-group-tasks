SELECT authors.name FROM books_authors
JOIN authors ON (books_authors.author_id = authors.id)
GROUP BY authors.name
HAVING COUNT (books_authors.author_id) <= 6
ORDER BY COUNT (authors.name)