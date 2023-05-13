<?php
$conn = mysqli_connect("localhost", "root", "", "loker_website_db");

$category = $_POST['category'];
$location = $_POST['location'];
$salary = $_POST['salary'];

$sql = "SELECT * FROM job_postings WHERE category='$category' AND location='$location' AND salary>='$salary'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id"] . "<br>";
    echo "Title: " . $row["title"] . "<br>";
    echo "Category: " . $row["category"] . "<br>";
    echo "Location: " . $row["location"] . "<br>";
    echo "Salary: " . $row["salary"] . "<br><br>";
  }
} else {
  echo "No results found.";
}

mysqli_close($conn);
?>


<?php
$conn = mysqli_connect("localhost", "root", "", "loker_website_db");

// ambil nilai input filter dari AJAX
$location = $_POST['location'];
$category = $_POST['category'];

// filter data lowongan kerja dari database
if ($location == "" && $category == "") {
  $query = "SELECT * FROM jobs";
} else if ($location == "") {
  $query = "SELECT * FROM jobs WHERE category='$category'";
} else if ($category == "") {
  $query = "SELECT * FROM jobs WHERE location='$location'";
} else {
  $query = "SELECT * FROM jobs WHERE location='$location' AND category='$category'";
}

$result = mysqli_query($conn, $query);

// tampilkan data lowongan kerja yang telah difilter
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='job'>";
    echo "<h3>" . $row['title'] . "</h3>";
    echo "<p>" . $row['location'] . "</p>";
    echo "<p>" . $row['category'] . "</p>";
    echo "<p>" . $row['description'] . "</p>";
    echo "</div>";
  }
} else {
  echo "Tidak ada lowongan kerja yang ditemukan";
}

mysqli_close($conn);
?>