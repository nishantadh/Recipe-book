<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $recipe_name = $_POST['recipe_name'];
  $ingredients = $_POST['ingredients'];
  $instructions = $_POST['instructions'];
  $image_url = $_POST['image_url'];

  // Validate the form data
  $errors = array();
  if (empty($recipe_name)) {
    $errors[] = 'Recipe name is required';
  }
  if (empty($ingredients)) {
    $errors[] = 'Ingredients are required';
  }
  if (empty($instructions)) {
    $errors[] = 'Instructions are required';
  }
//   if (empty($image_url)) {
//     $errors[] = 'Instructions are required';
//   }

  // If there are no errors, save the recipe to the database or file
  if (empty($errors)) {
    $hostname="localhost";
    $username="root";
    $password="";
    $database="recipe";
    $conn=mysqli_connect($hostname,$username,$password ,$database);
    
    $query="insert into recipes(recipe_name,ingredients,instruction)
            values('". $_POST['recipe_name']."','".$_POST['ingredients']."','". $_POST['instructions']."')";
    if ($conn->query($query)==true) {
        echo "Data inserted";
    }else{
        echo "failed";
    }

    // Connect to the database or open the file
    // Save the recipe data
    // Redirect the user to the recipe page
    header('Location: recipe.php');
    exit();
  }
}
?>
