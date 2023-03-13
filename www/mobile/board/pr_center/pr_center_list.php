<?php 
    include $_SERVER['DOCUMENT_ROOT']."/project-shinhan/project-shinhanv2/shinhan/m/header.php";

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
                <ul>
                    <li>
                        <a href="#" title="보도자료">보도자료</a>
                        <ul>
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
                    </li>
                    
                </ul>
            </nav>
        </section>
        <section class="content_title wrap">
            <h3>보도자료</h3>
        </section>


        <section class="content_start wrap">
            <h4 class="d-none">보도자료</h4>
            <div class="news_top d-flex justify-content-between flex-wrap">
                <select name="search_keyword" id="search_keyword">
                    <option value="title">제목</option>
                    <option value="keyword">내용</option>
                </select>
                <input type="search" name="search_window" id="search_window">
                <input type="submit" value="검색">
            </div>
            <p class="pb-3">총 게시글 <span>472</span>개</p>
            <ul class="news">

                <?php 
                    while ($rows = mysqli_fetch_assoc($result)) {   //result set에서 레코드(행)를 1개씩 리턴
                ?>

                <li class="text-truncate py-3 news_item">
                    <a href="pr_center_view.php?idx=<?php echo $rows['idx'] ?>" title="<?php echo $rows['title'] ?>">
                        <span class="date">
                            <?php 
                                $date = explode('-', substr($rows['date'],0,10));
                                echo $date[0].'.'.$date[1].'.'.$date[2];
                            ?>
                        </span>
                        <br>
                        <?php echo $rows['title'] ?>
                    </a>
                </li>

                <?php } ?>

            </ul>
            <ul class="pagination d-flex justify-content-center">
                <li class="current-page">
                    <a href="#" title="페이지로 이동">1</a>
                </li>
                <li>
                    <a href="#" title="페이지로 이동">2</a>
                </li>
                <li>
                    <a href="#" title="페이지로 이동">3</a>
                </li>
                <li>
                    <a href="#" title="페이지로 이동">4</a>
                </li>
                <li>
                    <a href="#" title="페이지로 이동">5</a>
                </li>
            </ul>

        </section>

        
    </main>
<?php 
    include $_SERVER['DOCUMENT_ROOT']."/project-shinhan/project-shinhan/m/footer.php";
?>