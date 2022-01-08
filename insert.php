<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Word</title>
    <style media="screen">
      form{
        margin-left: 500px;
      }
      label{
        font-weight: bold;
        font-size: 18px;
      }
      input[type=text]{
        width: 350px;
        padding: 10px;
        font-size: 16px;
      }
      input[type=submit]{
        font-size: 17px;
        font-weight: bold;
        margin-left: 120px;
        padding: 5px;
      }
      table{
        border: 1px solid black;
        border-collapse: collapse;
        width: 500px;
        margin-left: 450px;
        margin-top: 30px;
      }
      td,th{
        border: 1px solid black;
        text-align: center;
        padding: 3px;
      }
    </style>
  </head>
  <body>
    <form class="" action="insert.php" method="post">
      <h1>Insert Word</h1>
      <label for="">Word</label><br>
      <input type="text" name="word" value="" placeholder="Enter Word" required><br><br>
      <label for="">Meaning</label><br>
      <input type="text" name="meaning" value="" placeholder="Enter Meaning" required><br><br>
      <input type="submit" name="insert" value="Insert Word">
    </form>
    <table>
      <tr>
        <th>Word</th>
        <th>Meaning</th>
      </tr>
    <?php
        include 'db.php';
        if (isset($_POST['insert'])) {
          $word=$_POST['word'];
          $meaning=$_POST['meaning'];

          $sql="INSERT INTO dictionary(Word,Meaning) values('$word','$meaning')";
          $query=mysqli_query($conn,$sql);

        }
        $sql1="SELECT * from dictionary";
        $query1=mysqli_query($conn,$sql1);
        while ($info=mysqli_fetch_array($query1)) {
          ?>
          <tr>
            <td><?php echo $info['Word']; ?></td>
            <td><?php echo $info['Meaning']; ?></td>
          </tr>


          <?php
        }
     ?>
     </table>

  </body>
</html>
