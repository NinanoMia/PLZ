<?php 
    include $_SERVER['DOCUMENT_ROOT']."/project-shinhan/project-shinhanv2/shinhan/www/header.php";
?>
    <main>
        <link rel="stylesheet" href="./css/pr_center_write.css" type="text/css">
        <form method="post" action="writePost.php" enctype="multipart/form-data">
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
            
                <table class="news_write w-100">
                    <tr class="row">
                        <th class="col-1">
                            제목
                        </th>
                        <td class="col-10">
                            <input type="text" name="title">
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-1">
                            요약글 1
                        </th>
                        <td class="col-10">
                            <input type="text" name="summary1">
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-1">
                            요약글 2
                        </th>
                        <td class="col-10">
                            <input type="text" name="summary2">
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-1">
                            요약글 3
                        </th>
                        <td class="col-10">
                            <input type="text" name="summary3">
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-1">
                            내용작성
                        </th>
                        <td class="col-10">
                            <textarea name="content" id="text"></textarea>
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-1">
                            
                        </th>
                        <!-- <td class="col-10">
                            <input type="file" name="" id="img_file" class="d-none">
                            <label for="img_file" class="d-block"><span>파일첨부</span>이미지 업로드</label>
                        </td> -->
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
                        <input type="submit" title="게시글 작성" class="btn_list write_btn d-inline-block" value="게시글작성">
                        <input type="reset" title="작성취소" class="btn_list cancel_btn d-inline-block" value="작성취소" onclick="location.replace('./pr_center_list.php');">
                    </div>
                </div>
                
                
            </section>
            
            
        </form>
    </main>
<?php 
    include $_SERVER['DOCUMENT_ROOT']."/project-shinhan/project-shinhan/www/footer.php";
?>