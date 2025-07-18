<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      padding: 40px;
      background-color: #fffaf4;
    }
    h2 {
      color: #D7263D;
    }
    ul {
      margin-top: 30px;
      list-style-type: none;
      padding: 0;
    }
    li {
      margin-bottom: 20px;
    }
    a {
      background-color: #ffc107;
      padding: 12px 25px;
      border-radius: 20px;
      text-decoration: none;
      color: #000;
      font-weight: 600;
    }
    a:hover {
      background-color: #e0a800;
    }
  </style>
</head>
<body>
  <h2>Welcome, Admin!</h2>
  <p>Email: <?php echo $_SESSION['admin_email']; ?></p>

  <ul>
    <li><a href="recipe_requests.php">📥 Review Uploaded Recipes</a></li>
    <li><a href="review_comments.php">💬 Moderate User Comments</a></li>
    <li><a href="admin_logout.php">🚪 Logout</a></li>
  </ul>
</body>
</html>
