<?php 

namespace DAO;

use Models\Category as Category;

interface Icategory{

    function getAllcategory();
    function addCategory(Category $category);
    function DeleteCategory($id_category);
    function ModifyCategory($id_category,$name);
    function GetCategoryForId($id_category);

}

?>