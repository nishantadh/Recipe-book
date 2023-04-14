<?php
// Connect to the database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'recipe';
$conn = mysqli_connect($host, $user, $password, $dbname);
if ($conn->connect_error) {
  die('Connection failed');
}

// Retrieve the recipe data from the database
$sql = 'SELECT * FROM recipes';
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Recipe App - Recipes</title>
    <style>
      /* CSS styling for the recipe page */
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
    <div class="container">
      <h1>Recipe App - Recipes</h1>
      <?php while ($row = $result->fetch_assoc()): ?>
        <div class="recipe">
          <div class="recipe-name"><?= $row['recipe_name'] ?></div>
          <!-- <img class="recipe-img" src="<?= $row['image_url'] ?>"> -->
          <div class="recipe-details">
            <div class="recipe-ingredients"><?= nl2br($row['ingredients']) ?></div>
            <div class="recipe-instructions"><?= nl2br($row['instruction']) ?></div>
          </div>
          <?php echo"<a href='delete.php?id=".$row['id']."'> Delete</a>"?>
        </div>
      <?php endwhile ?>
    </div>
    <button><a href = recipe.php>Back</a></button>
  </body>
</html>
