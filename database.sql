CREATE DATABASE IF NOT EXISTS hijet_db
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE hijet_db;

CREATE TABLE articles (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    title       VARCHAR(255) NOT NULL,
    price       DECIMAL(8,2) NOT NULL,
    image       VARCHAR(255) NOT NULL,
    alt         VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO articles (title, price, image, alt, description) VALUES
('Kartë postare Père-Lachaise',  5.00, 'pictures/article1.jpg', 'Kartë postare Père-Lachaise',     'Kartë postare nga ambjenti i varrezave Père-Lachaise'),
('Magnet Varrezat Père-Lachaise',   5.00, 'pictures/article2.jpg', 'Magnet Varrezat Père-Lachaise',        'Magnet Varrezat Père-Lachaise, nga një prej varreve me skulpturë'),
('Guaskë Stramonita haemastoma', 20.00, 'pictures/article3.jpg', 'Guaskë Stramonita haemastoma',         'Guaskë Stramonita haemastoma, njohur dhe si "guaska shkëmbore me gojë të kuqe" e Floridës, kjo është një specie kërmilli deti grabitqar, një molusk gastropod detar që bën pjesë në familjen Muricidae (familja e kërmijve shkëmborë)'),
('Kartë postare La Sirène',   5.00, 'pictures/article4.jpg', 'Kartë postare La Sirène', 'Kartë postare La Sirène nga artisti Camille Renversade');
