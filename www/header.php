
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'project') or die("connect failed");
    session_start();
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>신한금융지주</title>
    
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- reset.css -->
    <link rel="stylesheet" href="/project-shinhan/project-shinhanv2/shinhan/www/css/reset.css" type="text/css">
    <!-- common.css -->
    <link rel="stylesheet" href="/project-shinhan/project-shinhanv2/shinhan/www/css/common.css" type="text/css">
    <!-- base.css -->
    <link rel="stylesheet" href="/project-shinhan/project-shinhanv2/shinhan/www/css/base.css" type="text/css">
    <!-- common.js -->
    <script src="/project-shinhan/project-shinhanv2/shinhan/www/js/common.js" defer></script>
</head>
<body>
    <header class="d-flex align-items-center">
        <h1>
            <a href="./index.html" title="메인페이지 이동">
                <img src="/project-shinhan/project-shinhanv2/shinhan/www/images/logo_white.png" alt="신한금융지주회사 로고">
            </a>
        </h1>
        <nav class="gnb">
            <ul class="depth_01 d-flex justify-content-end">
                <li>
                    <a href="#" title="회사소개">회사소개</a>
                    <ul class="depth_02">
                        <li><a href="#" title="신한WAY 2.0">신한WAY 2.0</a></li>
                        <li><a href="#" title="CEO">CEO</a></li>
                        <li><a href="#" title="연혁">연혁</a></li>
                        <li><a href="#" title="지주회사 조직도">지주회사 조직도</a></li>
                        <li><a href="#" title="그룹회사소개">그룹회사소개</a></li>
                        <li><a href="#" title="윤리경영">윤리경영</a></li>
                        <li><a href="#" title="CI">CI</a></li>
                        <li><a href="#" title="회사위치">회사위치</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" title="기업지배구조">기업지배구조</a>
                    <ul class="depth_02">
                        <li><a href="#" title="주주현황">주주현황</a></li>
                        <li><a href="#" title="주주총회">주주총회</a></li>
                        <li><a href="#" title="이사회">이사회</a></li>
                        <li><a href="#" title="관련규정">관련규정</a></li>
                        <li><a href="#" title="이사회공시">이사회공시</a></li>
                        <li><a href="#" title="기타">기타</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" title="IR투자자정보">IR투자자정보</a>
                    <ul class="depth_02">
                        <li><a href="#" title="Overview">Overview</a></li>
                        <li><a href="#" title="공시정보">공시정보</a></li>
                        <li><a href="#" title="재무정보">재무정보</a></li>
                        <li><a href="#" title="주가정보">주가정보</a></li>
                        <li><a href="#" title="IR일정">IR일정</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" title="ESG">ESG</a>
                    <ul class="depth_02">
                        <li><a href="#" title="ESG 추진체계">ESG 추진체계</a></li>
                        <li><a href="#" title="ESG 경영">ESG 경영</a></li>
                        <li><a href="#" title="ESG 성과">ESG 성과</a></li>
                        <li><a href="#" title="ESG Reporting">ESG Reporting</a></li>
                        <li><a href="#" title="ESG 정보"></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" title="PR센터">PR센터</a>
                    <ul class="depth_02">
                        <li><a href="#" title="보도자료">보도자료</a></li>
                        <li><a href="#" title="주요수상내역">주요수상내역</a></li>
                        <li><a href="#" title="그룹광고">그룹광고</a></li>
                        <li><a href="#" title="그룹 캐릭터 소개">그룹 캐릭터 소개</a></li>
                        <li><a href="#" title="스포츠 스폰서십">스포츠 스폰서십</a></li>
                        <li><a href="#" title="신한인">신한인</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <ul class="language ms-auto">
            <li>
                <a href="#" title="KOR">KOR</a>
                <ul>
                    <li><a href="#" title="ENG">ENG</a></li>
                    <li><a href="#" title="JPN">JPN</a></li>
                </ul>
            </li>
            
        </ul>
    </header>
    <aside>
        <div class="gnb_toggle_btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav class="gnb_toggle">
            <ul class="depth_01 d-flex">
                <li>
                    <a href="#" title="회사소개">회사소개</a>
                    <ul class="depth_02">
                        <li>
                            <a href="#" title="신한WAY 2.0">신한WAY 2.0</a>
                            <ul class="depth_03">
                                <li><a href="#" title="그룹미션">그룹미션</a></li>
                                <li><a href="#" title="그룹비전">그룹비전</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="CEO">CEO</a>
                            <ul class="depth_03">
                                <li><a href="#" title="인사말">인사말</a></li>
                                <li><a href="#" title="프로필">프로필</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="연혁">연혁</a>
                            <ul class="depth_03">
                                <li><a href="#" title="그룹성장과정">그룹성장과정</a></li>
                                <li><a href="#" title="연혁">연혁</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="지주회사 조직도">지주회사 조직도</a>
                        </li>
                        <li>
                            <a href="#" title="그룹회사소개">그룹회사소개</a>
                            <ul class="depth_03">
                                <li><a href="#" title="사업라인">사업라인</a></li>
                                <li><a href="#" title="제휴사 소개">제휴사 소개</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="윤리경영">윤리경영</a>
                            <ul class="depth_03">
                                <li><a href="#" title="신한人 윤리">신한人 윤리</a></li>
                                <li><a href="#" title="그룹윤리강령">그룹윤리강령</a></li>
                                <li><a href="#" title="협력회사 행동규범">협력회사 행동규범</a></li>
                                <li><a href="#" title="인권선언서">인권선언서</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="CI">CI</a>
                            <ul class="depth_03">
                                <li><a href="#" title="CI STORY">CI STORY</a></li>
                                <li><a href="#" title="SYMBOL & LOGO">SYMBOL &amp; LOGO</a></li>
                                <li><a href="#" title="COLOR & SIGNATURE">COLOR &amp; SIGNATURE</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="회사위치">회사위치</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" title="기업지배구조">기업지배구조</a>
                    <ul class="depth_02">
                        <li>
                            <a href="#" title="주주현황">주주현황</a>
                            <ul class="depth_03">
                                <li><a href="#" title="주주분포">주주분포</a></li>
                                <li><a href="#" title="총 주식수">총 주식수</a></li>
                                <li><a href="#" title="배당현황">배당현황</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="주주총회">주주총회</a>
                        </li>
                        <li>
                            <a href="#" title="이사회">이사회</a>
                            <ul class="depth_03">
                                <li><a href="#" title="이사회 의장 메시지">이사회 의장 메시지</a></li>
                                <li><a href="#" title="구성현황">구성현황</a></li>
                                <li><a href="#" title="이사회내 위원회">이사회내 위원회</a></li>
                                <li><a href="#" title="이사회의 주요활동 내역">이사회의 주요활동 내역</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="관련규정">관련규정</a>
                            <ul class="depth_03">
                                <li><a href="#" title="정관">정관</a></li>
                                <li><a href="#" title="이사회 규정">이사회 규정</a></li>
                                <li><a href="#" title="이사 독립성 Guidelines">이사 독립성 Guidelines</a></li>
                                <li><a href="#" title="이사회 다양성 Guidelines">이사회 다양성 Guidelines</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="이사회공시">이사회공시</a>
                        </li>
                        <li>
                            <a href="#" title="기타">기타</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" title="IR투자자정보">IR투자자정보</a>
                    <ul class="depth_02">
                        <li>
                            <a href="#" title="Overview">Overview</a>
                        </li>
                        <li>
                            <a href="#" title="공시정보">공시정보</a>
                            <ul class="depth_03">
                                <li><a href="#" title="국내공시">국내공시</a></li>
                                <li><a href="#" title="해외공시">해외공시</a></li>
                                <li><a href="#" title="경영공시">경영공시</a></li>
                                <li><a href="#" title="사업보고서">사업보고서</a></li>
                                <li><a href="#" title="감사보고서">감사보고서</a></li>
                                <li><a href="#" title="공고">공고</a></li>
                                <li><a href="#" title="공시규정">공시규정</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="재무정보">재무정보</a>
                            <ul class="depth_03">
                                <li><a href="#" title="실적발표자료">실적발표자료</a></li>
                                <li><a href="#" title="신한금융지주회사">신한금융지주회사</a></li>
                                <li><a href="#" title="재무제표">재무제표</a></li>
                                <li><a href="#" title="Fact Book">Fact Book</a></li>
                                <li><a href="#" title="영업보고서">영업보고서</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="주가정보">주가정보</a>
                            <ul class="depth_03">
                                <li><a href="#" title="국내주가">국내주가</a></li>
                                <li><a href="#" title="해외주가(ADR)">해외주가(ADR)</a></li>
                                <li><a href="#" title="종합주가지수 대비">종합주가지수 대비</a></li>
                                <li><a href="#" title="은행업종지수 대비">은행업종지수 대비</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="IR일정">IR일정</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" title="ESG">ESG</a>
                    <ul class="depth_02">
                        <li>
                            <a href="#" title="ESG 추진체계">ESG 추진체계</a>
                            <ul class="depth_03">
                                <li><a href="#" title="ESG 전략 프레임워크">ESG 전략 프레임워크</a></li>
                                <li><a href="#" title="ESG 전략방향">ESG 전략방향</a></li>
                                <li><a href="#" title="ESG 거버넌스">ESG 거버넌스</a></li>
                                <li><a href="#" title="ESG Invitation">ESG Invitation</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="ESG 경영">ESG 경영</a>
                            <ul class="depth_03">
                                <li><a href="#" title="Environmental">Environmental</a></li>
                                <li><a href="#" title="Social">Social</a></li>
                                <li><a href="#" title="Governance">Governance</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="ESG 성과">ESG 성과</a>
                            <ul class="depth_03">
                                <li><a href="#" title="ESG 발자취">ESG 발자취</a></li>
                                <li><a href="#" title="ESG 대외평가">ESG 대외평가</a></li>
                                <li><a href="#" title="글로벌 이니셔티브">글로벌 이니셔티브</a></li>
                                <li><a href="#" title="CSR HISTORY">CSR HISTORY</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="ESG Reporting">ESG Reporting</a>
                            <ul class="depth_03">
                                <li><a href="#" title="ESG 보고서">ESG 보고서</a></li>
                                <li><a href="#" title="ESG Factbook">ESG Factbook</a></li>
                                <li><a href="#" title="ESG 공개자료">ESG 공개자료</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="ESG 정보">ESG 정보</a>
                            <ul class="depth_03">
                                <li><a href="#" title="중대성 평가">중대성 평가</a></li>
                                <li><a href="#" title="이해관계자 참여">이해관계자 참여</a></li>
                                <li><a href="#" title="그룹 인권 보고">그룹 인권 보고</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" title="PR센터">PR센터</a>
                    <ul class="depth_02">
                        <li>
                            <a href="#" title="보도자료">보도자료</a>
                        </li>
                        <li>
                            <a href="#" title="주요수상내역">주요수상내역</a>
                        </li>
                        <li>
                            <a href="#" title="그룹광고">그룹광고</a>
                            <ul class="depth_03">
                                <li><a href="#" title="영상광고">영상광고</a></li>
                                <li><a href="#" title="지면광고">지면광고</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="그룹 캐릭터 소개">그룹 캐릭터 소개</a>
                        </li>
                        <li>
                            <a href="#" title="스포츠 스폰서십">스포츠 스폰서십</a>
                            <ul class="depth_03">
                                <li><a href="#" title="스포츠 스폰서십 소개">스포츠 스폰서십 소개</a></li>
                                <li><a href="#" title="신한동해오픈">신한동해오픈</a></li>
                                <li><a href="#" title="신한금융그룹 소속 골퍼">신한금융그룹 소속 골퍼</a></li>
                                <li><a href="#" title="신한은행 에스버드 여자농구단">신한은행 에스버드 여자농구단</a></li>
                                <li><a href="#" title="신한은행 SOL KBO리그">신한은행 SOL KBO리그</a></li>
                                <li><a href="#" title="대한민국 국가대표팀 후원">대한민국 국가대표팀 후원</a></li>
                                <li><a href="#" title="신한 루키 스폰서십">신한 루키 스폰서십</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="신한인">신한인</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>
    