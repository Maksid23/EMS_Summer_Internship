<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <style>
        :root {
  --primary-color: #4CAF50; /* Default primary color */
  --secondary-color: #FFC107; /* Default secondary color */
}
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #F4F4F4;
}
.header {
  background-color: var(--primary-color);
  color: white;
  padding: 1em;
  text-align: center;
}
.navbar {
  background-color: var(--secondary-color);
  padding: 1em;
}
.navbar ul {
  list-style-type: none;
  padding: 0;
}
.navbar li {
  display: inline;
  margin: 0 10px;
}
.navbar a {
  color: white;
  text-decoration: none;
}
.main-content {
  display: flex;
  justify-content: space-around;
  padding: 2em;
}
.card {
  background-color: white;
  padding: 1em;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  width: 30%;
}
.footer {
  background-color: var(--primary-color);
  color: white;
  text-align: center;
  padding: 1em;
  position: fixed;
  width: 100%;
  bottom: 0;
}
        </style>
</head>
<body>
    <header class="header">
        <h1>Welcome, [Student Name]</h1>
    </header>
    <nav class="navbar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Assignments</a></li>
            <li><a href="#">Grades</a></li>
            <li><a href="#">Schedule</a></li>
            <li><a href="#">Profile</a></li>
        </ul>
    </nav>
    <main class="main-content">
        <section class="card">
            <h2>Upcoming Assignments</h2>
            <p>No assignments due soon!</p>
        </section>
        <section class="card">
            <h2>Recent Grades</h2>
            <p>No grades available.</p>
        </section>
        <section class="card">
            <h2>Schedule</h2>
            <p>No events scheduled.</p>
        </section>
    </main>
    <footer class="footer">
        <p>&copy; 2024 School Dashboard</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>