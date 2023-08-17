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

.settings-form {
  display: flex;
  flex-direction: column;
}

.settings-form label {
  font-weight: bold;
  margin-top: 10px;
}

.settings-form input, .settings-form select {
  padding: 5px;
  margin-top: 5px;
}

.settings-form button {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  font-size: 16px;
  margin-top: 20px;
}

.settings-form button:hover {
  background-color: #0056b3;
}
</style>
</head>
<body>
  <header class="header">
    <h1>Settings Page</h1>
  </header>
  <nav class="sidebar">
    <ul>
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="user.php">Users</a></li>
      <li><a href="product.php">Product</a></li>
      <li><a href="banner.php">Banner</a></li>
      <li><a href="setting.php" class="active">Settings</a></li>
    </ul>
  </nav>
  <main class="content">
    <form class="settings-form">
      <h2>General Settings</h2>
      <label for="site-title">Site Title:</label>
      <input type="text" id="site-title" name="site-title" value="My Site">
      
      <label for="email">Admin Email:</label>
      <input type="email" id="email" name="email" value="admin@example.com">

      <label for="timezone">Timezone:</label>
      <select id="timezone" name="timezone">
        <option value="UTC">UTC</option>
        <option value="America/New_York">America/New_York</option>
        <!-- Add more timezone options here -->
      </select>
      
      <button type="submit">Save Changes</button>
    </form>
  </main>
</body>
</html>