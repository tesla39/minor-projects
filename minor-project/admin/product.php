<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post Page</title>
  <style>
    * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
  display: flex;
  min-height: 100vh;
  padding-top: 60px;
}

.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
  width: 100%;
  position: fixed;
  top: 0;
  z-index: 100;
}

.sidebar {
  background-color: #333;
  width: 200px;
  min-height: calc(100vh - 60px);
  padding: 20px 0;
  position: fixed;
}

.sidebar ul {
  list-style-type: none;
}

.sidebar li {
  margin-bottom: 10px;
}

.sidebar a {
  text-decoration: none;
  color: #fff;
  display: block;
  padding: 5px 10px;
}

.sidebar a:hover, .sidebar a.active {
  background-color: #555;
}

.content {
  flex-grow: 1;
  padding: 20px;
  margin-left: 200px;
}

form {
      width: 700px;
     
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 12px;
    }

    th {
      background-color:  #141415;
      color: #fff;
    }

    input[type="text"] {
      width: 100%;
      padding: 6px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      background-color:  #141415;
      color: white;
      padding: 8px 16px;
      margin: 8px 4px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color:  #4d4d4e;
    }

</style>
</head>
<body>
  <header class="header">
    <h1>Product Page</h1>
  </header>
  <nav class="sidebar">
    <ul>
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="user.php">Users</a></li>
      <li><a href="product.php">Product</a></li>
      <li><a href="banner.php">Banner</a></li>
      <li><a href="setting.php">Settings</a></li>
    </ul>
  </nav>

  <main class="content">
  <form enctype="multipart/form-data" action="p_update.php" method="post">
    <center>
      <table border="1">
        <tr>
          <th colspan="2">Product Table Operation</th>
        </tr>
        
        <tr>
          <td>Product ID</td>
          <td><input type="text" name="product_id" id="product_id" placeholder="Update existing, or leave blank for new"></td>
        </tr>
        <tr>
        <tr>
          <td>Product Name</td>
          <td><input type="text" name="product_name" id="product_name" placeholder="Update existing, or leave blank for new"></td>
        </tr>
          <td> New Product ID</td>
          <td><input type="text" name="new_id" id="new_id" placeholder="Insert new value"></td>
        </tr>
       
        <tr>
          <td> New Product Name</td>
          <td><input type="text" name="newname" id="newname" placeholder="Insert new value"></td>
        </tr>
        <tr>
          <td>Product image</td>
          <td><input type="FILE"  name="product_image" id="product_image"></td>
        </tr>
        <tr>
          <td>Product Description</td>
          <td><input type="text" name="product_description" id="product_description"></td>
        </tr>
        <tr>
          <td>Selling Price</td>
          <td><input type="number" step="1" name="price" id="price"></td>
        </tr>
        <tr>
          <td>Net Price</td>
          <td><input type="number" step="1" name="netprice" id="netprice"></td>
        </tr>
        <tr>
          <td>Discount</td>
          <td><input type="number" step="1" name="discount" id="discount"></td>
        </tr>
        <tr>
          <td>Stock</td>
          <td><input type="number" name="stock" id="stock"></td>
        </tr>
      </table>
      <input type="submit" value="Insert" name="btnInsert" onclick="return validateForm('btnModify')" />
      <input type="submit" value="Modify" name="btnModify" onclick="return validateForm('btnModify')" />
      <input type="submit" value="Delete" name="btndel" onclick="return validateForm('btnDelete')" />
      <input type="submit" value="Show" name="btnShow" onclick="return validateForm('btnShow')" />
    </center>
  </form>
</main>
  </form>
  </main>
  <script>
    function validateForm(btnName) {
      if (btnName !== 'btnShow') {
        const username = document.getElementById('username').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        if (!username || !email || !password) {
          alert('Please fill in all the fields.');
          return false;
        }
      }
      return true;
    }
  </script>
</body>
</html>