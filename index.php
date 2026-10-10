<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <title>Hijet</title>
    <style>

html {
    scroll-behavior: smooth;
}

body {
    background: #f1f1ef;
    color: #111;
    font-family: "Cinzel Decorative";
    overflow-x: hidden;
}

a {
    color: inherit;
    text-decoration: none;
}

img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

h1 em,
h2 em {
    font-family: "Italianno", cursive;
    font-weight: 400;
}

.featured-item {
    display: grid;
    grid-template-columns: 1.5fr 1fr;
    gap: 70px;
    align-items: center;
}

.featured-image {
    height: 600px;
    background: #d0d0ce;
}

.featured-text {
    padding-right: 5vw;
}

.category {
    font-size: 10px;
    letter-spacing: 2px;
    font-weight: 600;
    margin-bottom: 20px;
}

.featured-text h2 {
    font-size: clamp(50px, 6vw, 90px);
    line-height: .92;
    letter-spacing: -4px;
    font-weight: 500;
}

.featured-text > p:not(.category) {
    margin-top: 35px;
    font-size: 16px;
    line-height: 1.7;
    max-width: 400px;
}

.articles {
    background: #171717;
    color: #f1f1ef;
    padding: 50px 0 0 50px;
}

.article-track {
    display: flex;
    gap: 25px;
    overflow-x: none;
    padding-bottom: 30px;
    scrollbar-width: thin;
}

.article-track::-webkit-scrollbar {
    height: 4px;
}

.article-track::-webkit-scrollbar-thumb {
    background: #777;
}

.article-card {
    flex: 0 0 330px;
}

.card-image {
    width: 100%;
    height: 410px;
    margin-bottom: 25px;
    background: #333;
}

.article-card .price {
    color: #999;
    margin-bottom: 10px;
}

.article-card h3 {
    font-size: 25px;
    font-weight: 500;
    letter-spacing: -1px;
}

.read-more {
    margin-top: 15px;
    font-size: 11px;
    color: #888;
}


.cabinet {
    padding: 100px 5vw;
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    background: #d5d5d3;
}

.cabinet-title h2 {
    font-size: clamp(60px, 8vw, 120px);
    line-height: .85;
    font-weight: 500;
    letter-spacing: -6px;
}

.cabinet-description {
    max-width: 330px;
}

.cabinet-description p {
    font-size: 17px;
    line-height: 1.6;
}

.coming-soon {
    margin-top: 35px;
    font-size: 10px !important;
    letter-spacing: 2px;
    font-weight: 600;
}
</style>
</head>

<body>

<?php include 'header.html'; ?>

<main>
        <section class="featured">


            <article class="featured-item">

                <div class="featured-image">

                    <img src="pictures/Père-Lachaise cemetery.jpeg"
                            alt="Artikull i zgjedhur">

                </div>

                <div class="featured-text">

                    <p class="category">
                        Kabineti
                    </p>

                    <h2>
                        Kartolinë nga<br>
                        Varrezat Père-Lachaise
                    </h2>

                    <p>
                        Një shëtitje mes skulpturave mortore dhe
                        historisë.
                    </p><br>

                    <a href="#" class="read-link">
                        Lexo më shumë →
                    </a>

                </div>

            </article>

        </section>


        <!-- ARTICLES -->

        <?php
        require 'db.php';

        $stmt = $pdo->query('SELECT id, title, price, image, alt FROM articles ORDER BY created_at DESC');
        $articles = $stmt->fetchAll();
        ?>

        <section class="articles">
            <div class="article-track">

            <?php foreach ($articles as $article): ?>
                <article class="article-card">

                <div class="card-image">
                        <img src="<?= htmlspecialchars($article['image']) ?>"
                                alt="<?= htmlspecialchars($article['alt']) ?>">
                </div>

                <p class="price"><?= number_format($article['price'], 2) ?> €</p>
                <h3><?= htmlspecialchars($article['title']) ?></h3>

                <a class="read-more" href="artikull.php?id=<?= (int) $article['id'] ?>">
                    Shiko më shumë...
                </a>

            </article>
            <?php endforeach; ?>

            </div>
        </section>

        <section class="cabinet">

            <div class="cabinet-title">

                <h2>
                    Kabineti i<br>
                    <em>Hijeve</em>
                </h2>

            </div>


            <div class="cabinet-description">

                <p>
                    Një koleksion artikujsh për jetën.
                </p>

                <p class="contact">
                    <a href="#">NA KONTAKTONI</a>
                </p>

            </div>

        </section>

    

</main>

<?php include 'footer.html'; ?>
</body>
</html>
