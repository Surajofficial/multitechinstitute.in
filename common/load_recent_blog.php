<?php if (!defined('URL')) define("URL", "http://multitech/multi.in/blog/"); ?>
<?php
include '../admin/conn.php';
$cat = $_POST['cat'];
if (isset($_POST['id'])) {
    $title = $_POST['id'];

    $query = "SELECT * FROM blog where title LIKE '%$title%'  and status = 'live' order by RAND ( ) desc limit 10";
} else {
    $query = "SELECT * FROM blog where category = '$cat' and status = 'live' order by RAND ( ) limit 10";
}
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $category = ($row['url'] == $_POST['filename']) ? 'active' : '';
        echo '<li class="' . $category . '"><a href="' . URL . $row['url'] . '"><i
        class="fas fa-angle-double-right"></i>' . explode('|', $row['title'])[0] . '</a></li>';
    }
}
?>
 