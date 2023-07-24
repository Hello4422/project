// <?php require 'db.php'; ?>

// <?php 


// class Post{

	

// //CREATE POST
// 	public function insertPost($title,$content){

// 		global $pdo;

// 		$stmt = $pdo->prepare('INSERT INTO user_post (title,content) VALUES (?,?)');

// 		$stmt->execute([

// 			$title,
// 			$content 
		

// 		]);

// 		return $pdo->lastInsertId();
// 	}


// //READ POST


// 	public function readAllPost($fetchType = PDO::FETCH_OBJ){

// 		global $pdo;

// 		$stmt = $pdo->prepare('SELECT * FROM user_post ORDER BY id DESC');
// 		$stmt->execute();

// 		return $stmt->fetchAll($fetchType);

// 	}

// 	public function readPostById($id, $fetchType = PDO::FETCH_OBJ){

// 		global $pdo;

// 		$stmt = $pdo->prepare('SELECT * FROM user_post WHERE id=?');
		
// 		$stmt->execute([$id]);

// 		return $stmt->fetch($fetchType);

// 	}


// 	//UPDATE POST


// 	public function updatePost($id,$title,$content){

// global $pdo;

// $stmt = $pdo->prepare('UPDATE user_post SET title=?, content=? WHERE id=?');

// $stmt->execute([

// $title,
// $content,
// $id

// ]);


// 	}





// public function deletePost($id){

// 	global $pdo;

// 	$stmt = $pdo->prepare("DELETE FROM user_post WHERE id=?");

// 	$stmt->execute([$id]);
// }
// <div></div>
// }





<?php
require 'db.php';

class Post{
    // ...

    // CREATE POST
    public function insertPost($title, $content){
        global $pdo;

        try {
            $stmt = $pdo->prepare('INSERT INTO user_post (title, content) VALUES (?, ?)');
            $stmt->execute([$title, $content]);
            return $pdo->lastInsertId();
        } catch (PDOException $e) {
            // Handle the exception, you can log it or return an error message
            return false;
        }
    }

    // READ POST
    public function readAllPost($fetchType = PDO::FETCH_OBJ){
        global $pdo;

        try {
            $stmt = $pdo->prepare('SELECT * FROM user_post ORDER BY id DESC');
            $stmt->execute();
            return $stmt->fetchAll($fetchType);
        } catch (PDOException $e) {
            // Handle the exception, you can log it or return an error message
            return false;
        }
    }

    public function readPostById($id, $fetchType = PDO::FETCH_OBJ){
        global $pdo;

        try {
            $stmt = $pdo->prepare('SELECT * FROM user_post WHERE id=?');
            $stmt->execute([$id]);
            return $stmt->fetch($fetchType);
        } catch (PDOException $e) {
            // Handle the exception, you can log it or return an error message
            return false;
        }
    }

    // UPDATE POST
    public function updatePost($id, $title, $content){
        global $pdo;

        try {
            $stmt = $pdo->prepare('UPDATE user_post SET title=?, content=? WHERE id=?');
            $stmt->execute([$title, $content, $id]);
            // You can return true here to indicate a successful update
            return true;
        } catch (PDOException $e) {
            // Handle the exception, you can log it or return an error message
            return false;
        }
    }

    public function deletePost($id){
        global $pdo;

        try {
            $stmt = $pdo->prepare("DELETE FROM user_post WHERE id=?");
            $stmt->execute([$id]);
            // You can return true here to indicate a successful deletion
            return true;
        } catch (PDOException $e) {
            // Handle the exception, you can log it or return an error message
            return false;
        }
    }
}
?>
