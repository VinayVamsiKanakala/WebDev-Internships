<?php
include "db_conn.php";

// Retrieve the course ID from the URL
$course_id = $_GET['course_id'];

$sql = "SELECT courses.course_id, courses.course_title, videos.video_id, videos.video_title, videos.video_url
        FROM courses
        LEFT JOIN videos ON courses.course_id = videos.course_id
        WHERE courses.course_id = $course_id
        ORDER BY videos.video_id";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $current_course_id = null;

    while ($row = mysqli_fetch_assoc($result)) {
        if ($current_course_id !== $row['course_id']) {
            // New course, display course title
            echo "<h2>{$row['course_title']}</h2>";
            $current_course_id = $row['course_id'];
        }

        // Display video information
        echo "<h3>{$row['video_title']}</h3>";
        echo "<video width='400' controls>";
        echo "  <source src='uploads/{$row['video_url']}' type='video/mp4'>";
        echo "  Your browser does not support the video tag.";
        echo "</video><br>";
    }
} else {
    echo "<p>No videos available for this course</p>";
}

mysqli_close($conn);
?>
