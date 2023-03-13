<?php
    $conn = mysqli_connect('localhost', 'root', '', 'project') or die("connect failed");
    $idx = $_GET['idx'];

    $query = "SELECT * FROM s_board where idx = '$idx'";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_fetch_assoc($result);

    $query1 = "DELETE FROM s_board WHERE idx = '$idx'";
    $result1 = mysqli_query($conn, $query1);

?>
<script>
    alert('게시글이 삭제되었습니다.');
    location.replace('./pr_center_list.php');
</script>