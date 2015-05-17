use Blog;

CREATE TABLE blog_entries 
(
	entrydate TIMESTAMP PRIMARY KEY,
	entrytitle VARCHAR(100),
	entrytext TEXT
);