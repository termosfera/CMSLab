<?php

/**
 * @author Juan Andres Moreno Schrott
 */
require_once dirname(dirname(__DIR__)) . '/config.php';
require_once DB_PATH . '/db.php';

$connData = array(
    'host' => DB_HOST,
    'name' => DB_NAME,
    'user' => DB_USER,
    'pass' => DB_PASS,
    'pref' => DB_PREF);

if (isset($_POST['find_article'])) {
    $searchedArticleQuery = "SELECT title, text FROM " . DB_PREF . "article WHERE articleName LIKE '%" . $find_article . "%';";
    $result = $conn->query($searchedArticleQuery);
    if ($result) {
        while ($row = $result->fetch_row()) {
            $searchedArticle = array('title' => $row[0], 'text' => $row[1]);
        }
        $result->close();
    }
    $conn->close();

    echo "<h1 class='title'>" . $searchedArticle['title'] . "</h1>";
    echo "<p class='text'>" . $searchedArticle['text'] . "</p>";
} else {
    $allArticlesQuery = "SELECT title, text FROM " . DB_PREF . "article;";
    $result = $conn->query($allArticlesQuery);
    if ($result) {
        while ($row = $result->fetch_row()) {
            $articles = array('title' => $row[0], 'text' => $row[1]);
        }
        $result->close();
    }
    $conn->close();

    foreach ($articles as $values) {
        echo "<h1 class='title'>" . $articles['title'] . "</h1>";
        echo "<p class='text>" . $articles['text'] . "</p>";
    }
}
?>
