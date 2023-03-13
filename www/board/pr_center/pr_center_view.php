<?php 
    include $_SERVER['DOCUMENT_ROOT']."/project-shinhan/project-shinhanv2/shinhan/www/header.php";

    $idx = $_GET['idx'];
    // $query = "SELECT title, summary1, summary2, summary3, content, img_file, date from s_board where idx = '$idx'";
    $query = "SELECT title, summary1, summary2, summary3, content, date from s_board where idx = '$idx'";
    // $result = $conn -> query($query);
    $result = mysqli_query($conn, $query);
    $rows = mysqli_fetch_assoc($result);


?>
    <main>
        <link rel="stylesheet" href="./css/pr_center_view.css" type="text/css">
        <form method="post">
        <section class="spot_visual">
            <div class="typo">
                <h2>PR센터</h2>
                <p>
                    신한금융그룹의 새로운 소식과 그룹사들의
                    <br>
                    다양한 활동을 전해드립니다.
                </p>
            </div>

            <nav class="lnb_depth_02">
                <ul class="d-flex">
                    <li class="on">
                        <a href="#" title="보도자료">보도자료</a>
                    </li>
                    <li>
                        <a href="#" title="주요수상내역">주요수상내역</a>
                    </li>
                    <li>
                        <a href="#" title="그룹광고">그룹광고</a>
                    </li>
                    <li>
                        <a href="#" title="그룹캐릭터소개">그룹캐릭터소개</a>
                    </li>
                    <li>
                        <a href="#" title="스포츠스폰서십">스포츠스폰서십</a>
                    </li>
                    <li>
                        <a href="#" title="신한인">신한인</a>
                    </li>
                </ul>
            </nav>
        </section>
        <section class="content_title wrap">
            <nav class="lnb_depth_03">
                <ul class="d-flex justify-content-end">
                    <li class="on">
                        <a href="#" title="테스트1">테스트1</a>
                    </li>
                    <li>
                        <a href="#" title="테스트2">테스트2</a>
                    </li>
                </ul>
            </nav>
            <h3>보도자료</h3>
        </section>


        <section class="content_start wrap row justify-content-center">
            <article class="col-10 d-flex align-items-center justify-content-between news_title">
                <h4><?php echo $rows['title'] ?></h4>
                <span class="date">
                    <?php 
                        $date = explode('-', substr($rows['date'],0,10));
                        echo $date[0].'.'.$date[1].'.'.$date[2];
                    ?>
                </span>
            </article>
            
        </section>
        <section class="wrap row justify-content-center">
            <article class="col-10">
                <ul class="summary">
                    <li>
                        <?php echo $rows['summary1'] ?>
                    </li>
                    <li>
                        <?php echo $rows['summary2'] ?>
                    </li>
                    <li>
                        <?php echo $rows['summary3'] ?>
                    </li>
                </ul>
                <p class="text">
                    <?php echo $rows['content'] ?>
                </p>
                <div class="img_area">
                    <img src="./images/news_img_01.jpg" alt="" class="img-fluid">
                </div>
                <div class="attachment">
                    <a href="#" title="신한금융그룹, 『신한 스퀘어브릿지 제주』 2기 성과 공유회 개최.hwo">신한금융그룹, 『신한 스퀘어브릿지 제주』 2기 성과 공유회 개최.hwp
                    <span>다운로드</span>
                    </a>
                </div>
            </article>
            <article class="col-12">
                <ul class="news_list">
                    <li class="next_news row">
                        <span class="col">
                            다음글
                        </span>
                        <a href="#" title="" class="col-11 d-inline-flex">
                            신한금융, ‘블룸버그 양성평등 지수’ 국내 최초 5년 연속 편입
                            <span class="date ms-auto">
                                2017.09.17
                            </span>
                        </a>
                    </li>
                    <li class="prev_news row">
                        <span class="col">
                            이전글
                        </span>
                        <a href="#" title="" class="col-11 d-inline-flex">
                            신한금융, 국내 금융그룹 최초 그룹 통합 데이터 플랫폼 ‘신한 원 데이터’ 구축
                            <span class="date ms-auto">
                                2017.09.17
                            </span>
                        </a>
                    </li>
                </ul>
            </article>

            <a href="#" title="보도자료 목록보기" class="btn_list">목록보기</a>

            <?php
                // if (isset($_SESSION['userid']) and $_SESSION['userid'] == $rows['id']) { ?>
                    <button class="read_btn1" onclick="location.href='pr_center_modify.php?idx=<?= $idx ?>'">수정하기</button>

                    <button class="read_btn1" onclick="ask();">삭제하기</button>

                <script>
                    function ask() {
                        if (confirm("게시글을 삭제하시겠습니까?")) {
                            window.location = "delete.php?idx=<?= $idx ?>";
                        }
                    }
                </script>

            <?php 
        // } 
        ?>



        </section>

            </form>
    </main>
    <?php 
    include $_SERVER['DOCUMENT_ROOT']."/project-shinhan/project-shinhan/www/footer.php";
?>