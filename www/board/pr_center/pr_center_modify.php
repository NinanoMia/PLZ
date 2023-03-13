<?php 
    include $_SERVER['DOCUMENT_ROOT']."/project-shinhan/project-shinhanv2/shinhan/www/header.php";

    $idx = $_GET['idx'];
    $query = "SELECT title, summary1, summary2, summary3, content, date from s_board where idx = '$idx'";
    // $query = "SELECT * from s_board where idx = '$idx'";
    // $result = $conn -> query($query);
    $result = mysqli_query($conn, $query);
    $rows = mysqli_fetch_assoc($result);

    $title = $rows['title'];
    $summary1 = $rows['summary1'];
    $summary2 = $rows['summary2'];
    $summary3 = $rows['summary3'];
    $content = $rows['content'];
    $date = $rows['date'];
?>
    <main>
        <link rel="stylesheet" href="./css/pr_center_write.css" type="text/css">
        <form method="post" action="modify_action.php">
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


        <section class="content_start wrap justify-content-center">
            <input type="hidden" name="idx" value="<?= $idx ?>">
                <table class="news_write w-100">
                    <tr class="row">
                        <th class="col-1">
                            제목
                        </th>
                        <td class="col-10">
                            <input type="text" name="title" value="<?= $title ?>">
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-1">
                            요약글 1
                        </th>
                        <td class="col-10">
                            <input type="text" name="summary1" value="<?= $summary1 ?>">
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-1">
                            요약글 2
                        </th>
                        <td class="col-10">
                            <input type="text" name="summary2" value="<?= $summary2 ?>">
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-1">
                            요약글 3
                        </th>
                        <td class="col-10">
                            <input type="text" name="summary3" value="<?= $summary3 ?>">
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-1">
                            내용작성
                        </th>
                        <td class="col-10">
                            <textarea name="content" id="text"><?= $content ?></textarea>
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-1">
                            
                        </th>
                        <td class="col-10">
                            <input type="file" name="" id="img_upload" class="d-none">
                            <label for="img_upload" class="d-block"><span>파일첨부</span>이미지 업로드</label>
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-1">
                            
                        </th>
                        <td class="col-10">
                            <input type="file" name="" id="file_upload" class="d-none">
                            <label for="file_upload" class="d-block"><span>파일첨부</span>파일 업로드</label>
                        </td>
                    </tr>
                </table>
            </section>
            <section class="wrap row justify-content-center">
                <div class="col-12 position-relative">
                    <a href="#" title="보도자료 목록보기" class="btn_list">목록보기</a>
                    <div class="admin_btn_gruop">
                        <input type="submit" class="btn_list write_btn d-inline-block" value="게시글수정">
                        <a href="#" title="작성취소" class="btn_list d-inline-block cancel_btn">작성취소</a>
                    </div>
                </div>
                
                
            </section>
            
            
        </form>
    </main>
<?php 
    include $_SERVER['DOCUMENT_ROOT']."/project-shinhan/project-shinhan/www/footer.php";
?>