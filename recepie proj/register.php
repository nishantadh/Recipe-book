<style>
    /* Body Styles */
    body {
        background-image: linear-gradient(to bottom right, #6c63ff, #2d2f7f);
        background-repeat: no-repeat;
        background-size: cover;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    /* Form Styles */
    form {
        background-color: #fff;
        border-radius: 5px;
        padding: 20px;
        max-width: 300px;
        width: 100%;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #333;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
        padding: 5px;
        width: 100%;
    }

    input[type="submit"] {
        background-color: #6c63ff;
        border: none;
        border-radius: 3px;
        color: #fff;
        cursor: pointer;
        font-size: 16px;
        padding: 10px;
        width: 100%;
    }

    input[type="submit"]:hover {
        background-color: #564dff;
    }

    .back-button {
        color: #6c63ff;
        text-decoration: none;
        margin-top: 10px;
        display: block;
        text-align: center;
    }

    .back-button:hover {
        color: #564dff;
    }
</style>

<table>
    <td>
        <form method="post" action="insert.php">
            <h2>Registration</h2> <!-- Added Registration heading -->
            <label>Name:</label>
            <input type="text" name="name"><br><br>

            <label for="Username">Username</label>
            <input type="Text" id="username" name="username">
            <br>
            <br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email">

            <label for="password">Password</label>
            <input type="password" id="password" name="password">

            <input type="submit">&nbsp;&nbsp;&nbsp;
            <a href="login.php" class="back-button">Back to Login</a>

        </form>
    </td>
</table>
