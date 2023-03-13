<?php 
    include $_SERVER['DOCUMENT_ROOT']."/project-shinhan/project-shinhanv2/shinhan/www/header.php";

    $query = "select * from s_board order by idx desc";    //역순 출력
    // $query = "select * from s_board order by idx desc limit 5";    //역순 5개 출력
    $result = mysqli_query($conn, $query);
?>
    <main>
        <link rel="stylesheet" href="./css/pr_center_list.css" type="text/css">
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


        <section class="content_start wrap position-relative">
            <h4 class="d-none">보도자료</h4>
            <div class="news_top d-flex align-items-end justify-content-between">
                <p class="d-inline-block">총 게시글 <span>472</span>개</p>
                <select name="search_keyword" id="search_keyword" class="ms-auto">
                    <option value="title">제목</option>
                    <option value="keyword">내용</option>
                </select>
                <input type="search" name="search_window" id="search_window">
                <input type="submit" value="검색">
            </div>

            <table class="news table">

                <?php 
                    while ($rows = mysqli_fetch_assoc($result)) {   //result set에서 레코드(행)를 1개씩 리턴
                ?>

                <tr class="row m-0">
                    <td class="date col-2 py-5">
                        <?php 
                            $date = explode('-', substr($rows['date'],0,10));
                            echo $date[0].'.'.$date[1].'.'.$date[2];
                        ?>
                    </td>
                    <td class="news_item col-9 py-5">
                        <a href="pr_center_view.php?idx=<?php echo $rows['idx'] ?>" title="<?php echo $rows['title'] ?>">
                            <?php echo $rows['title'] ?>
                            <br>
                            <span>
                                <?php echo substr($rows['content'],0,100) ?>
                            </span>
                        </a>
                    </td>
                </tr>

                <?php } ?>
            </table>
            <ul class="pagination d-flex justify-content-center">
                <li class="current-page">
                    <a href="#" title="페이지로 이동">1</a></li>
                <li>
                    <a href="#" title="페이지로 이동">2</a></li>
                <li>
                    <a href="#" title="페이지로 이동">3</a></li>
                <li>
                    <a href="#" title="페이지로 이동">4</a></li>
                <li>
                    <a href="#" title="페이지로 이동">5</a></li>
            </ul>

            <?php
                print_r ($_SERVER['DOCUMENT_ROOT']."/project-shinhan/project-shinhanv2/shinhan/www/header.php");
            ?>

            

            <?php 
                if (isset($_SESSION['userid'])) {
            ?>

            <a href="./pr_center_write.php" title="게시글 작성" class="btn_list write_btn d-inline-block position-absolute">게시글 작성</a>

            <?php } ?>

        </section>

        
    </main>
<?php 
    include $_SERVER['DOCUMENT_ROOT']."/project-shinhan/project-shinhanv2/shinhan/www/footer.php";
?>