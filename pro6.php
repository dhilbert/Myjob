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
                    <p>jira Rest API를 이용한 업무 분석</p>

                </div>
                
            </div>
        </div>
    </div>
</section>

</div>




<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/table-content/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/table-content/clientlibs.min.css" type="text/css">



<?php 
    function hd_jy_again($t,$array){
?>
        <div class="row table-content_category_border">
        <div class="col-5 col-sm-4 col-md-3 font-body-2 table-content_category_title"><?php echo $t?></div>
        <div class="col-7 col-sm-8 col-md-9 font-body-2 table-content_category_copy" title="Vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli.">
        <?php 
        
                for($i= 0 ; $i < count($array);$i++){

                    echo "<li>".$array[$i]."</li>";
                }
        
        ?>


    </div>

    </div>
<?php


    }


?>



<section id="table-content-1178572639" class="table-content component component__spacing-bottom " role="region" aria-labelledby="table-content-1178572639--labelledby">
    <div class="container table-content_container">
        
        <div class="col-12 col-sm-8 offset-sm-2 responsive-columns table-content_wrapper">
            <div class="col-12 table-content_wrapper_content">
            <h5 id="table-content-1178572639--labelledby" class="col-12 font-eyebrow-4 font-subhead-desc-4-sm table-content_header">기획 요약</h5>
                <!--
                <h5 id="table-content-1178572639--labelledby" class="col-12 font-eyebrow-4 font-subhead-desc-4-sm table-content_header"><span class="font-header-5">학력</span> 최종 대학원 <font color = 'orange'>석사</font> 졸업</h5>
-->
                <div class="row table-content_category">
                    <?php
                    
                    $t='기획 의도';
                    $array = array('작업자 공수 확인','작업자의 업무 분석 및 작업 항목 별 공수 확인 '                    );
                    hd_jy_again($t,$array);

                    $t='기획 상세';
                    $array = array('Jira open API를 통해, 작업 공수 등의 통계 진행한다.','작업 / 프로젝트 항목 별 공수를 확인한다. '                    );
                    hd_jy_again($t,$array);
                    $t='기대 효과';
                    $array = array('단계별 작업 공수 확인 가능하다. ','작업자별 업무 공수를 확인 할수 있다.','역량에 맞은 업무를 배정하여, 효율적인 프로젝트 관리가 가능하다.'                    );
                    hd_jy_again($t,$array);

                    
                    ?>
                      
                    
                
            </div>
            <div class="table-content-gradientback d-none"></div>
            <div class="table-content-showmore-section d-none">
                <div class="row">
                    <div class="col-12 text-center">
                        <span class="table-content__show-more font-content-link-4" tabindex="0" role="button" aria-label="Read More">
                            Read More
                            <svg class="icon icon-plus" aria-hidden="true" tabindex="-1" focusable="false">
                                <use xlink:href="/static/images/icons-metlife.svg#icon-plus" aria-hidden="true" tabindex="-1" focusable="false"></use>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section></div>
<?php 
    $headline = 'Bluepoint';
    $colsize = '12';
    $mdsize = '1';
    Divider($headline,$colsize,$mdsize);




?>



<style>
.note {
  font-size: 120%;
  color: red;
}
</style>
</head>
<body>

<h1>My <span class="note">Important</span> Heading</h1>
<p>This is some <span class="note">important</span> text.</p>




<?php   include_once('footer.php');?>