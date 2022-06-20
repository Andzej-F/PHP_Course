<?php

require "includes/database.php";

$conn = getDB();

$sql = "SELECT *  
        FROM article
        ORDER BY published_at;";

$results = mysqli_query($conn, $sql);

if ($results === false) {
} else {
  $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
?>

<?php require "includes/header.php"; ?>

<?php if (empty($articles)) : ?>
  <p>No articles found.</p>
<?php else : ?>
  <ul>
    <?php foreach ($articles as $key => $article) : ?>
      <li>
        <article>
          <h2><a href="article.php?id=<?= $article["id"]; ?> "><?= htmlspecialchars($article["title"]); ?></a></h2>
          <p><?= htmlspecialchars($article["content"]); ?></p>
        </article>
      </li>
    <?php endforeach; ?>
  </ul>

<?php endif; ?>

<?php require "includes/footer.php"; ?>