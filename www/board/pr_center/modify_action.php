<?php
    $conn = mysqli_connect('localhost', 'root', '', 'project') or die("connect failed");

    $idx = $_POST['idx'];

    $title = $_POST['title'];
    $summary1 = $_POST['summary1'];
    $summary2 = $_POST['summary2'];
    $summary3 = $_POST['summary3'];
    $content = $_POST['content'];
    $date = date('Y.m.d');  

    $query = "UPDATE s_board set title='$title', summary1='$summary1', summary2='$summary2', summary3='$summary3', content='$content', date='$date' WHERE idx='$idx'";
    // $result = $conn -> query($query);
    $result = mysqli_query($conn, $query);

    if($result){
        ?>  <script>
                alert('게시글이 수정되었습니다.');
                location.replace('./pr_center_view.php?idx=<?= $idx ?>');
            </script>
        <?php
        } else {
            echo "다시 시도해주세요.";
        }

?>