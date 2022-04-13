<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portfolio</title>
	<link rel="stylesheet" href="css/jquery.fullPage.css">
	<link rel="stylesheet" href="css/setup.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
</head>
<body>
        <header>
            <ul id="menu">
                <li data-menuanchor="Home" class="active">
                    <a href="#Home"></a>
                </li>
                <li data-menuanchor="Aboutme">
                    <a href="#Aboutme"></a>
                </li>
                <li data-menuanchor="Ability">
                    <a href="#Ability"></a>
                </li>
                <li data-menuanchor="Career">
                    <a href="#Career"></a>
                </li>
                <li data-menuanchor="Contact">
                    <a href="#Contact"></a>
                </li>
            </ul>
        </header>
        
        
        <div id="fullpage">
        
            <div class="section active" id="section0">
                <div class="left">
                    <div class="title">2022 PORTFOLIO</div>
                </div>

                <div class="text">
                    <div id="text">WELCOME TO <br> MY PORTFOLIO
                        <img src="img/hand.png" alt="">
                    </div><br>
                    <div id="intro"></div>
                </div>
                <!-- <img src="img/emo.png" alt="" class="char"> -->
                <div class="bottom">
                    <div class="scroll"></div>
                    <div class="down">Scroll Down</div>
                </div>
            </div>
            
            <div class="section" id="section1">
                <div class="left">
                    <div class="title">ABOUT ME</div>
                </div>

                <div class="wrap">
                    <div class="main">
                        <img src="img/emo1.png" alt="">WHO AM I?
                    </div>
                    <div class="sub">지금 우리가 함께 일해야 할 이유 <span></span>3가지 ✔</div>
                    <ul class="grid">
                        <li>
                            <img src="img/pos.png" alt="">
                            <div class="key">Enthusiastic</div>
                            <div class="expl">개발에 대한 열정이 가득해요! </div>
                            <div class="span">프로그래머 2년차, 아직 배우고 싶은 영역이 많아요. <br> 새로운 것을 배우는 것을 즐기며 다양한 개발 경험을 <br> 꿈꾸고 있어요. 필요한 기술 스택은 무엇이든 <br> 배울 준비가 되어 있어요.</div>
                        </li>
                        <li>
                            <img src="img/sunny.png" alt="">
                            <div class="key">Outgoing</div>
                            <div class="expl">활발하고 사람들과 잘 어울려요! </div>
                            <div class="span">개발 능력만큼이나 중요한 건 소통과 협업 스킬! <br> 밝은 성격으로 팀에 잘 녹아들 수 있어요. <br> 저의 이런 성격은 팀의 분위기를 더욱 밝혀줄거에요.</div>
                        </li>
                        <li>
                            <img src="img/resp.png" alt="">
                            <div class="key">Responsible</div>
                            <div class="expl">맡은 일은 끝까지 책임져요!</div>
                            <div class="span">저 자신과의 싸움에서 져본 적이 없어요. <br> 책임감이 강하고 한번 시작한 일은 마무리를 지어야 <br> 직성이 풀리는 성격이에요. 도중 포기란 없어요!</div>
                        </li>
                    </ul>
                </div>
                
            </div>
            
            <div class="section" id="section2">
                <div class="left">
                    <div class="title">ABILITY</div>
                </div>

                <div class="wrap">
                    
                    <div class="main">
                        <img src="img/emo2.png" alt="">
                        <div>WHAT DO I DO?</div>
                    </div>
                    <div class="sub">저는 이런 것들을 업무에 바로 사용할 수 있어요!</div>
                    <ul class="skill">
                        <li>
                            <div>
                                <div class="sort">Front-end</div>
                                <img src="./img/html.png" alt="">
                                <img src="./img/css.png" alt="">
                                <img src="./img/js.png" alt="" style="width:128px">
                                <img src="./img/jquery.png" alt="" style="width:200px">
                            </div>
                            <div>
                                <div class="sort">Back-end & DB</div>
                                <img src="./img/php.png" alt="">
                                <img src="./img/ci.png" alt="" style="width:120px">
                                <img src="./img/mysql.png" alt="" style="width:160px">
                                <img src="./img/mongo.png" alt="" style="width:128px">
                            </div>
                        </li>
                        <li>
                            <canvas id="chart"></canvas>
                        </li>
                    </ul>
                    
                    
                </div>
            </div>
            
            <div class="section" id="section3">
                <div class="left">
                    <div class="title">Career</div>
                </div>

                <div class="wrap">
                    <div class="main">
                        <img src="./img/emo3.png" alt="">
                        What Have I Done?
                    </div>

                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"> 
                                <div class="pro">
                                    <img src="./img/pro1.JPG" alt="">
                                    <div class="intro">스마트팩토리 <br> EMS 에너지 관리 시스템</div>
                                </div>
                                <ul class="list">
                                    <li class="line">소개</li>
                                    <li>스마트팩토리 사업의 일원으로 EMS 에너지 관리 시스템 개발</li>
                                    <li class="line">기여도</li>
                                    <li>🎨 Design <span>100%</span><br>📊 Front-end <span>100%</span> <br> 💻 Back-end <span>50%</span> (기존에 있는 백엔드 소스를 보수 및 재사용)</li>
                                    <li class="line">사용기술</li>
                                    <li>Javascript, Ajax, php(CI), MongoDB</li>
                                    <li class="line">주요업무</li>
                                    <li>-  각 장비와 전체 전력 사용량을 실시간으로 모니터링 <br>-  전력 사용량의 패턴을 분석하고 예측, 비교함</li>
                                    <li class="line">유익</li>
                                    <li>- 입사 후 첫 프로젝트로서 클라이언트와 서버간의 데이터 통신에 능숙해짐 <br> -  MongoDB로 데이터를 다루는 데 익숙해짐</li>
                                </ul>
                            </div>
                            <div class="swiper-slide"> 
                                <div class="pro">
                                    <img src="./img/pro2.JPG" alt="">
                                    <div class="intro">부산 기장 동남권 원자력 병원 <br>환자 대기 시스템</div>
                                </div>
                                <ul class="list">
                                    <li class="line">소개</li>
                                    <li>환자 대기 시스템, 대합실 화면, CMS 관리자 페이지 제작</li>
                                    <li class="line">기여도</li>
                                    <li>🎨 Design <span>100%</span><br>📊 Front-end <span>100%</span></li>
                                    <li class="line">사용기술</li>
                                    <li>Javascript, Jquery, Ajax</li>
                                    <li class="line">주요업무</li>
                                    <li>- 화면 디자인 및 페이지 퍼블리싱 <br>-  Ajax 데이터 통신 </li>
                                    <li class="line">유익</li>
                                    <li>- CMS 관리자 페이지 개발 경험</li>
                                </ul>
                            </div>
                            <div class="swiper-slide"> 
                                <div class="pro">
                                    <img src="./img/pro3.png" alt="">
                                    <div class="intro">모바일 부고장 및 조문 시스템 Moment 프로그램</div>
                                </div>
                                <ul class="list">
                                    <li class="line">소개</li>
                                    <li>모바일 부고장과 CMS 페이지 개발</li>
                                    <li class="line">기여도</li>
                                    <li>🎨 Design <span>100%</span><br>📊 Front-end <span>100%</span><br>💻 Back-end <span>100%</span></li>
                                    <li class="line">사용기술</li>
                                    <li>Javascript, Ajax, php(CI), Mysql</li>
                                    <li class="line">주요업무</li>
                                    <li>- 장례식 관리자가 등록함과 동시에 모바일 부고장 링크 생성 <br>-  조문 메시지 기능 구현 </li>
                                    <li class="line">유익</li>
                                    <li>-입사 이후 첫 단독으로 진행한 프로젝트로서 풀스택 경험<br>- 프레임워크 Codeigniter와 MVC 디자인 패턴을 익힘 <br>- 테이블의 구조를 짜고 Mysql을 다루는 데 익숙해짐</li>
                                </ul>
                            </div>
                            <div class="swiper-slide"> 
                                <div class="pro">
                                    <img src="./img/pro4.JPG" alt="">
                                    <div class="intro">Moment 자사 홈페이지 제작</div>
                                </div>
                                <ul class="list">
                                    <li class="line">소개</li>
                                    <li>모바일 부고장 Moment의 자사 홈페이지 제작 <br><a href="http://www.mots.co.kr">mots.co.kr</a></li>
                                    <li class="line">기여도</li>
                                    <li>🎨 Design <span>100%</span><br>📊 Front-end <span>100%</span></li>
                                    <li class="line">사용기술</li>
                                    <li>HTML, CSS, Javascript, Jquery</li>
                                    <li class="line">주요업무</li>
                                    <li>- 웹디자인 및 퍼블리싱</li>
                                    <li class="line">유익</li>
                                    <li>- 최신 웹사이트 트렌드와 웹디자인의 감각을 키움</li>
                                </ul>
                            </div>
                            <div class="swiper-slide"> 
                                <div class="pro">
                                    <img src="./img/pro5.JPG" alt="">
                                    <div class="intro">한국동서발전 지원사업 <br>187개소 에너지 관리 시스템</div>
                                </div>
                                <ul class="list">
                                    <li class="line">소개</li>
                                    <li>한국동서발전과 연계된 187개 공장의 에너지 관리 시스템 개발</li>
                                    <li class="line">기여도</li>
                                    <li>🎨 Design <span>100%</span><br>📊 Front-end <span>100%</span><br>💻 Back-end <span>100%</span></li>
                                    <li class="line">사용기술</li>
                                    <li>HTML, CSS, Javascript, Jquery</li>
                                    <li class="line">주요업무</li>
                                    <li>- 웹디자인 및 퍼블리싱</li>
                                    <li class="line">유익</li>
                                    <li>- 최신 웹사이트 트렌드와 웹디자인의 감각을 키움</li>
                                </ul>
                            </div>
                        </div>
                        <div class="swiper-button-next btn b1"></div>
                        <div class="swiper-button-prev btn b2"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            
            <div class="section" id="section4">
                <div class="left">
                    <div class="title">Contact me</div>
                </div>

                <div class="wrap">
                </div>
            </div>
            
        </div>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.fullpage.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
	$(document).ready(function() {
        $('#fullpage').fullpage({
          sectionsColor: ['rgb(137, 136, 255)', '#fff', '#f5f5f5', '#fff', 'rgb(137, 136, 255)'],
          anchors: ['Home', 'Aboutme', 'Ability', 'Career', 'Contact'],
          menu: '#menu',
        });

        var text = document.getElementById("intro");
        var typewriter = new Typewriter(text, {
            loop: false
        });
        typewriter.typeString("안녕하세요, 만나서 반갑습니다 :)<br>매일 성장하는 웹 프로그래머 엄채원입니다.").start();
    });  

    var swiper = new Swiper(".swiper", {
        slidesPerView: 3,
        spaceBetween: 50,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        }
    });

    new Chart(document.getElementById("chart"), {
        type: 'horizontalBar',
        data: {
            labels: ['html', 'CSS3', 'Javascript', 'Jquery', 'php', 'Codeigniter', 'Mysql', 'MongoDB'],
            datasets: [{
                data: [100, 100, 90, 100, 80, 80, 80, 80],
                borderColor: "rgba(137, 136, 255, 1)",
                backgroundColor: "rgba(137, 136, 255, 0.8)",
                fill: true,
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            tooltips: {
                callbacks: {
                    label: function (tooltipItem, data) {
                        var value = data.datasets[0].data[tooltipItem.index];
                        return value + '%';
                    }
                },
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    afterTickToLabelConversion : function(q){
                        for(var tick in q.ticks){
                            q.ticks[tick] += '%';
                        }
                    },
                    ticks: {
						beginAtZero: true,
                        maxTicksLimit: 5,
					}
                }],
                yAxes: [{
                    display: true,
                    ticks: {
                        autoSkip: false,
						fontSize : 15,
                    }
                }]
            }
        }
    });
</script>
</html>