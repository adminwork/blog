<?php

class Post extends DbConnect
{
	const POST_TABLE = 'post';

	public function getPostById($id)
    {
        $result = array();
        $id = mysqli_real_escape_string($this -> conn,$id);
        $query = "SELECT * FROM ".self::POST_TABLE." WHERE category_id = $id";
        $queryResult = $this->runQuery($query);

        while($row = mysqli_fetch_array($queryResult)) {
            $result[$row['id']] = $row;
        }

        return $result ;

    }

    public function getPostByCategoryId($categoryId, $limit = false)

	{
		$result = array();
        $categoryId = mysqli_real_escape_string($this -> conn,$categoryId);
        $query = "SELECT * FROM ".self::POST_TABLE." WHERE id = $categoryId";
        $queryResult = $this->runQuery($query);

        while($row = mysqli_fetch_array($queryResult)) {
        	$result = $row;
        }

        return $result;
	}

	public function getPostByUserId($userId)
	{
		$result = array();
        $query = "SELECT * FROM ".self::POST_TABLE." WHERE author_id = $userId";
        $queryResult = $this->runQuery($query);

        while($row = mysqli_fetch_array($queryResult)) {
        	$result = $row;
        }
        
        return $result;
	}

	public function getFiveLastPosts($limit=5)
    {
        $result = array();

        $query = "SELECT * FROM ".self::POST_TABLE."  ORDER BY create_at DESC LIMIT $limit";
        $queryResult = $this->runQuery($query);

        while($row = mysqli_fetch_array($queryResult)) {
            $result[$row['id']] = $row;
        }
        
        return $result;
    }
}