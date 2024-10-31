<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search product by category</title>
</head>
<body>
  <form>
    <label for="category">
      <select name="category" id="category">
<?php
// 1. (2 คะแนน) เขียนคำสั่ง php เพื่อติดต่อฐานข้อมูล northwind
    $conn = new mysqli(
    'db403-mysql',
    'root',
    'P@ssw0rd',
    'northwind');
    if ($conn->connect_errno) {
      die($conn->connect_error);
    }
// 2. (3 คะแนน) เขียนคำสั่ง php เพื่อดึงข้อมูล CategoryName และ CategoryID จากตาราง categories
      $sql = "SELECT CategoryID, CategoryName FROM categories";
      $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>{$row['CategoryID']}</td>";
          echo "<td>{$row['CategoryName']}</td>";
          echo "</tr>";
      }
?>
// 3. (5 คะแนน) เพิ่ม element option ใน element select เพื่อแสดงตัวเลือกเป็น CategoryName และค่าที่ได้เป็น CategoryID
<option value="CategoryID">CategoryName</option>
<?php
$conn->close();
?>
      </select>
    </label>
    <input type="submit" value="Search" name="submit">
  </form>
</body>
</html>