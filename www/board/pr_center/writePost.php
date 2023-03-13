<?php
    $conn = mysqli_connect('localhost', 'root', '', 'project') or die("connect failed");

    $title = $_POST['title'];           // 제목
    $summary1 = $_POST['summary1'];     // 요약1
    $summary2 = $_POST['summary2'];     // 요약2
    $summary3 = $_POST['summary3'];     // 요약3
    $content = $_POST['content'];       // 내용
    // $img_file = $_FILES['img_file'];    // 이미지
    $date = date('Y.m.d');              // 날짜
    


    // $query = "INSERT INTO s_board (title, summary1, summary2, summary3, content, img_file, date) VALUEs('$title', '$summary1', '$summary2', '$summary3', '$content', '$img_file', '$date')";
    $query = "INSERT INTO s_board (title, summary1, summary2, summary3, content, img_file, date) VALUEs('$title', '$summary1', '$summary2', '$summary3', '$content', '$date')";

    $result = $conn->query($query);

    if($result){
    ?>  <script>
            alert('게시글이 등록되었습니다.');
            location.replace('./pr_center_list.php');
        </script>
    <?php
    } else {
        echo "게시글 등록에 실패했습니다.";
    }

    mysqli_close($conn);
?>