CREATE DATABASE savetext;

USE savetext;

CREATE TABLE notes (
    route_url VARCHAR(100) NOT NULL PRIMARY KEY,
    note_content TEXT,
    saved_at DATETIME
)