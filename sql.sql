CREATE TABLE ab_uzytkowniczy (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
)

CREATE TABLE maszyny (
    id INT AUTO_INCREMENT PRIMARY KEY,
    idUzytkownika INT NOT NULL,
    nazwaMaszyny VARCHAR(100) NOT NULL,
)
