<?php 
    
    include_once('lib/dbcon.php');
    include_once('head.php');
  
?>




    
<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/divider/clientlibs.min.js" defer></script>    
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/divider/clientlibs.min.css" type="text/css">


    
    
<div class="text-insight-breaker parbase">




    
<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/text-insight-breaker/clientlibs.min.css" type="text/css">
<script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/text-insight-breaker/clientlibs.min.js" defer></script>

<section id="text-insight-breaker-824870487" class="text-insight-breaker component bg " role="region" aria-labelledby="text-insight-breaker-824870487--labelledby">
    <div class="container">
        <div class="row text-insight-breaker__content" data-aos="fade-up" data-aos-delay="500" data-aos-duration="500" data-aos-anchor-placement="top-bottom">
            <div class="col-12 offset-sm-2 col-sm-8 col-md-9 offset-md-1 responsive-columns">
                
                <div class="text-insight-breaker__content-copy">
                    <p>The start of my career <br> Since 2014.0.1</p>

                </div>
                
            </div>
        </div>
    </div>
</section>

</div>

<?php 
    function hd_jy_table($array){
?>
  
  <tr>
       <td class="font-meta-1"><p><?php echo $array[0]?></p></td>
       <td class="font-body-2"><p>
        
        <a href ='/Myjob/data/<?php echo $array[4]?>'>veiw</a>
        
        </p></td>
       <td class="font-body-2"><p><?php echo $array[1]?></p></td>
       <td class="font-body-2"><p><?php echo $array[2]?></p></td>
       <td class="font-body-2"><p><?php echo $array[3]?></p></td>
     
  </tr>


<?php
}
?>



    
<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/product-info-table/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/product-info-table/clientlibs.min.css" type="text/css">







<section id="product-info-table-498403871" class="product-info-table component component__spacing-bottom richtext " role="region" aria-labelledby="product-info-table-498403871--labelledby">
    <div id="product-info-table-498403871--labelledby" class="d-none" aria-hidden="true">Product Info Table</div>
    <div class="container">
        <div class="row">
            <div class="col-12 responsive-columns product-info-table__container">
                <table>
                    <thead>
                        <tr>
                            <th class="font-content-link-4"><p><b>No</b></p></th>
                            <th class="font-content-link-4"><p>보기</p></th>
                            <th class="font-content-link-4"><p><b>단계</b></p></th>
                            <th class="font-content-link-4"><p><b>프로젝트</b></p></th>
                            <th class="font-content-link-4"><p><b>구분</b></p></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $num = 0;$num+=1;
                            $array=array($num,
                            "분석     ",
                            "KBO",
                            "IA 정의서",
                            "[BAT]Front_IA정의서_2021-04-25_v0.2.xlsx");                            
                            hd_jy_table($array);
                            $num+=1;
                            $array=array($num,
                            "분석     ",
                            "METLIFE 재단",
                            "IA 정의서",
                            "0000.[메트라이프]IA정의서_2022-03-31_v0.3기존.xlsx");                            
                            hd_jy_table($array);
                            $num+=1;
                            $array=array($num,
                            "분석     ",
                            "복덕판",
                            "BM 시나리오",
                            "윤희동_BM시나리오v4.pdf");                            
                            hd_jy_table($array);
                            $num+=1;
                            $array=array($num,
                            "분석     ",
                            "OMC",
                            "GA 분석 보고서",
                            "윤희동_GA분석보고서.pdf");                            
                            hd_jy_table($array);
                            $num+=1;
                            $array=array($num,
                            "분석     ",
                            "OMC",
                            "주문서 상태값",
                            "프로젝트상태변화_OMC_2020-05-15_v0.4.pdf");                            
                            hd_jy_table($array);

                            $num+=1;
                            $array=array($num,
                            "설계",
                            "복덕판 앱",
                            "ERD 분석",
                            "복덕판.pdf");                            
                            hd_jy_table($array);
                            $num+=1;
                            $array=array($num,
                            "설계",
                            "ReturM",
                            "api Structure",
                            "ReturM_Structure&Protocol_v0.21.pdf");                            
                            hd_jy_table($array);

                            $num+=1;
                            $array=array($num,
                            "설계",
                            "복덕판",
                            "정책 정의서",
                            "v0.1_회원정책_20190728_윤희동.pdf");
                            hd_jy_table($array);
                            

                            $num+=1;
                            $array=array($num,
                            "기획",
                            "메트라이프 리뉴얼",
                            "기획서",
                            "(관리자)메트라이프_UIUX글로벌가이드준수리뉴얼_화면설계서_1차_v0.5.pdf");
                            hd_jy_table($array);
                            
                            $num+=1;
                            $array=array($num,
                            "기획",
                            "서울시 미니 태양광",
                            "기획서",
                            "[설치기사app]UI작업지시서_2019-05-03.pdf");
                            hd_jy_table($array);
                            
                            $num+=1;
                            $array=array($num,
                            "기획",
                            "서울시 미니 태양광",
                            "기획서",
                            "[윤희동]미니태양광_UI작업지시서.pdf");
                            hd_jy_table($array);
                            $num+=1;
                            $array=array($num,
                            "기획",
                            "네이쳐 리퍼블릭",
                            "기획서",
                            "SB_MZ_NatureR_Admin 현황&통계관리_20210812_v0.03.pdf");
                            hd_jy_table($array);
                            $num+=1;
                            $array=array($num,
                            "기획",
                            "부동산 전자 상거래",
                            "기획서",
                            "부동산거래_전자계약시스템_전자서명 _18.12.05_ver0.3.pdf");
                            hd_jy_table($array);
                            
                            $num+=1;
                            $array=array($num,
                            "기획",
                            "SK C&C",
                            "기획서",
                            "SKES 전사 통합합자원관리 플랫폼 구축 ESS 대쉬 보드 UI 기획서 2019 02 20.pdf");
                            hd_jy_table($array);
                            
                            $num+=1;
                            $array=array($num,
                            "기획",
                            "가나 에너지 코인 거래서",
                            "기획서",
                            "가나에너지코인거래소_Web_v1.10.pdf");
                            hd_jy_table($array);
                            
                            $num+=1;
                            $array=array($num,
                            "기획",
                            "누리 텔레콤",
                            "기획서",
                            "누리텔레콤_ESS_20181105_v0.8_F.pdf");
                            hd_jy_table($array);
                            
                            
                            $num+=1;
                            $array=array($num,
                            "운영",
                            "KBO",
                            "기획서",
                            "KBO_couponMC수정_20200629.pdf");
                            hd_jy_table($array);

                            $num+=1;
                            $array=array($num,
                            "운영",
                            "KBO",
                            "운영 업무 설명 문서",
                            "BAT_업무.pdf");
                            hd_jy_table($array);
                            
                            $num+=1;
                            $array=array($num,
                            "운영",
                            "KBO",
                            "시스템 인프라 설명서",
                            "[KBO]MZ시스템소개_20220412.pdf");
                            hd_jy_table($array);
                            
                            
                            $num+=1;
                            $array=array($num,
                            "최종보고서",
                            "서울시미니태양광",
                            "기획서",
                            "190527_EW_태양광 플랫폼 최종보고 v1.0.pdf");
                            hd_jy_table($array);
                            
                            
                            
                            


                            
                            
                            
                        
                        ?>
                  
                          
                            
                        
                                                        
                        
                    </tbody>
                </table>
            </div>
            
                <div class="product-info-table__overlay" tabindex="0">Read More
                    <svg class="icon icon-plus" aria-hidden="true" tabindex="-1" focusable="false">
                        <title>Read More</title>
                        <use xlink:href="/static/images/icons-metlife.svg#icon-plus-cxd" aria-hidden="true" tabindex="-1" focusable="false"></use>
                    </svg>
                </div>
            
        </div>
    </div>
</section></div>
<?php   include_once('footer.php');?>