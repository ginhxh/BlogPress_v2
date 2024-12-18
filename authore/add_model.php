<?php 
declare(strict_types=1);
function set_articls(object $pdo, string $title, string $content_txt,string $author_id) {
    $query = 'INSERT INTO article (title,content,author_id)
VALUES (:title,:content,:author_id);';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':title',$title );
    $stmt->bindParam(':content',$content_txt );
    $stmt->bindParam(':author_id',$author_id );
    $stmt->execute();

}