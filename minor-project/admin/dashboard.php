<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settings Page</title>
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

.content h2 {
      margin-bottom: 20px;
    }

    .stats {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }

    .stat-box {
      border: 1px solid #e5e5e5;
      padding: 20px;
      background-color: #f9f9f9;
      border-radius: 4px;
    }

    .stat-box h3 {
      margin-bottom: 10px;
      font-size: 24px;
      color: #333;
    }

    .stat-box p {
      font-size: 18px;
      color: #777;
    }
</style>
</head>
<body>
  <header class="header">
    <h1>Dashboard Page</h1>
  </header>
  <nav class="sidebar">
    <ul>
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="user.php">Users</a></li>
      <li><a href="product.php">Product</a></li>
      <li><a href="banner.php">Banner</a></li>
      <li><a href="notice.php">Notice</a></li>
      <li><a href="setting.php" class="active">Settings</a></li>
    </ul>
  </nav>
  <main class="content">
    <h2>Welcome to the Admin Dashboard</h2>
    <p>Here, you can manage your website's content, users, and settings.</p><br><br>

    <div class="stats">
      <div class="stat-box">
        <h3>Total Traffic</h3>
        <p>123,456</p>
      </div>
      <div class="stat-box">
        <h3>Total Users</h3>
        <p>1,234</p>
      </div>
      <div class="stat-box">
        <h3>Active Users</h3>
        <p>567</p>
      </div>
      <div class="stat-box">
        <h3>New Users Today</h3>
        <p>12</p>
      </div>
      <div class="stat-box">
        <h3>Total Products</h3>
        <p>789</p>
      </div>
    </div>
  </main>
</body>
</html>


