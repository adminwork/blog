<?php

class Category extends DbConnect
{
	public function getAllCategories()
	{
        $result = array();

        $query = "SELECT id, name FROM categories";
        $queryResult = $this->runQuery($query);

        while($row = mysqli_fetch_array($queryResult)) {
            $result[$row['id']] = $row["name"];
        }

        return $result;		
	}
}