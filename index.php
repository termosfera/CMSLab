<?php

if (!file_exists(dirname(__FILE__) . '/config.php')) {
    header('location:installation/install-form.php');
    exit();
}

include('header.php');
//------------------------------------------------------------------------------
require_once 'config.php';
require_once 'db/db.php';

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (isset($_POST['find_article'])) {
    $find_article = filter_input(INPUT_POST, 'find_article');
    $searchedArticleQuery = "SELECT title, text FROM " . DB_PREF . 
            "article WHERE title LIKE '%" . $find_article . "%';";
    $searchedArticle = array();
    
    $result = $conn->query($searchedArticleQuery);
    
    if ($result) {
        while ($row = $result->fetch_row()) {
            $article = array('title' => $row[0], 'text' => $row[1]);
            array_push($searchedArticle, $article);
        }
        $result->close();
    }
    $conn->close();

    for ($i = 0; $i < count($searchedArticle); $i++) {
        echo "<div id='articles-container'>";
        echo '<hr>';
        echo "<h3 class='title'>" . $searchedArticle[$i]['title'] . "</h3>";
        echo "<p class='text'>" . $searchedArticle[$i]['text'] . "</p>";
        echo '<hr>';
        echo "</div>";
    }
} else {
    $allArticlesQuery = "SELECT title, text FROM " . DB_PREF . "article;";
    $allArticles = array();
    
    $result = $conn->query($allArticlesQuery);
        
    if ($result) {
        while ($row = $result->fetch_row()) {
            $article = array('title' => $row[0], 'text' => $row[1]);
            array_push($allArticles, $article);
        }
        $result->close();
    }
    $conn->close();

    for ($i = 0; $i < count($allArticles); $i++) {
        echo "<div id='articles-container'>";
        echo '<hr>';
        echo "<h3 class='title'>" . $allArticles[$i]['title'] . "</h3>";
        echo "<p class='text'>" . $allArticles[$i]['text'] . "</p>";
        echo '<hr>';
        echo "</div>";
    }
}
//------------------------------------------------------------------------------
include('footer.php');
?>
