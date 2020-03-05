<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
  </head>
  <body>

    <form method="post">
      <input type="text" name="$x" placeholder="Number 1">
      <input type="text" name="$y" placeholder="Number 2">
      <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
      </select>
      <br>
      <button type="submit" name="submit">Calculate</button>
    </form>

    <p>The answer is:</p>

    <?php


      if (isset($_POST['submit'])) {

        $result1 = $_POST['$x'];
        $result2 = $_POST['$y'];
        $operator = $_POST['operator'];


        switch ($operator) {
          case "None":
            echo "You need to select an operator!";
            break;
          case "Add":
            echo $result1 + $result2;
            break;
          case "Subtract":
            echo $result1 - $result2;
            break;
          case "Multiply":
            echo $result1 * $result2;
            break;
          case "Divide":
            echo $result1 / $result2;
            break;
          default:
            echo "Error!";
            break;
        }
      }
    ?>

<style>
body {
  background-color: red;
}
button{
  color: blue;

}
form {
  text-align: center;
  font-family:sans-serif;

}
p{
  text-align: center;
  text-decoration: underline;
  text-emphasis-color: Green;
}

</style>
  </body>
</html>
