<link rel="stylesheet" href="./style.css">
<?php 
session_start();
if(!isset($_SESSION['logged']) && $_SESSION['logged'] != true){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Recipe App</title>
    <style>
      /* CSS styling for the recipe form */
      body {
        font-family: Arial, sans-serif;
        background-image: linear-gradient(to bottom right, #6c63ff, #2d2f7f);
        background-repeat: no-repeat;
        background-size: cover;
      }
      h1 {
        text-align: center;
        color: #fff;
      }
      form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
      }
      label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
        color: #555;
      }
      input[type="text"], textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        resize: vertical;
        box-sizing: border-box;
      }
      input[type="submit"] {
        background-color: #6c63ff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #564dff;
      }

    </style>
  </head>
  <body>
    <h1>Recipe App</h1>
    <form action="add_recipe.php" method="post">
      <label for="recipe_name">Recipe Name:</label>
      <input type="text" name="recipe_name" id="recipe_name" required><br><br>
      
      <label for="ingredients">Ingredients:</label><br>
      <textarea name="ingredients" id="ingredients" required></textarea><br><br>
      
      <label for="instructions">Instructions:</label><br>
      <textarea name="instructions" id="instructions" placeholder= "Write about your recipe in 500 words or less" required></textarea><br><br>
      
      
      
      <input type="submit" value="Add Recipe">
    </form>
    <button><a href = "display.php">Show recipes</a></button>
  </body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Recipe Page</title>
</head>
<body>
    
    <!-- Add your recipe content here -->
    
    <a href="login.php?action=logout"><button>Logout</button></a> <!-- Add a logout button or link -->
</body>
</html>