<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
include('function.php');
/*
$real_hostname="3.36.83.6";
$real_username="cfgaussroot";
$real_password="autoset";




$real_name="Myjob";

$real_sock = mysqli_connect($real_hostname, $real_username, $real_password, $real_name);
$real_db = mysqli_select_db($real_sock, $real_name) or die ("데이터베이스 서버에 연결할 수 없습니다.");
mysqli_set_charset($real_sock, 'utf8'); 
*/
function replace_texts($text){
	$text = str_replace('"' , '\"', $text);
	$text = str_replace("'" , "\'", $text);	
	return $text;

}


function table_td_text($text,$names,$value){
	echo '	<tr>
				<th>'.$text.'</th>
				<td colspan="3">
					<input type="text" class="form-control" id="bannerSj" name="'.$names.'" value="'.$value.'" />
				</td>
 			</tr>';
	}	

function replace_text($text){
	$text = str_replace('"' , '\"', $text);
	$text = str_replace("'" , "\'", $text);	
	return $text;

}





function index_table_th($value,$values){
  echo '<th data-field="data_'.$value.'" data-sortable="true">'.$values.'</th>';

}
function Cutie_hd_td($value,$values){
  return '<td data-field="data_'.$value.'" data-sortable="true">'.$values.'</td>';

} 
function Cutie_hd_td2($value,$values){
  echo  '<td data-field="data_'.$value.'" data-sortable="true">'.$values.'</td>';

}



function index_table_admin($array){
echo "<tr>"	;
$num = 0;
$num += 1;
$values = $array[0];
Cutie_hd_td2($num,$values);
$num += 1;
$values = $array[1];
Cutie_hd_td2($num,$values);
$num += 1;
$values = "<a href='".$array[2]."' class='btn btn-primary' target='_blank'>보기<a/>";
Cutie_hd_td2($num,$values);
$num += 1;
$values = "공사중";
Cutie_hd_td2($num,$values);
$num += 1;
$values = $array[3];
Cutie_hd_td2($num,$values);
echo "</tr>"	;

}



function index_table_admin3($array){
    echo "<tr>"	;
    $num = 0;
    $num += 1;
    $values = $array[0];
    Cutie_hd_td2($num,$values);
    $num += 1;
    $values = $array[1];
    Cutie_hd_td2($num,$values);
    $num += 1;
    $values = "<a href='".$array[2]."' class='btn btn-primary' target='_blank'>보기<a/>";
    Cutie_hd_td2($num,$values);
    $values = "<a href='".$array[4]."' class='btn btn-primary' target='_blank'>보기<a/>";
    Cutie_hd_td2($num,$values);
    
    $num += 1;
    $values = $array[3];
    Cutie_hd_td2($num,$values);
    echo "</tr>"	;
    
    }


function index_table_admin2($array){
echo "<tr>"	;
$num = 0;
$num += 1;
$values = $array[0];
Cutie_hd_td2($num,$values);
$num += 1;
$values = $array[1];
Cutie_hd_td2($num,$values);
$num += 1;
$values = "공사중";
Cutie_hd_td2($num,$values);
$values = "공사중";
Cutie_hd_td2($num,$values);
$num += 1;
$values = $array[3];
Cutie_hd_td2($num,$values);
echo "</tr>"	;

}


function wysisyg($headline,$subtext){
?>    
<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/wysiwyg-rte/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/wysiwyg-rte/clientlibs.min.css" type="text/css">

    
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8  responsive-columns">
                <div class="richtext richtext-wysiwyg">
                  
                <?php
                    if($headline=='' or Null){}
                    else{
                ?>
<h2><span class="font-subhead-2"><?php echo $headline?></span></h2>
<?php 
}
?>
<p><?php echo $subtext?></p>
<p></p>
<!--
<p>Financial health 및 금융포용 분야 내 혁신적인 솔루션을 가진 사회혁신 조직을 선정하여 경영진단 멘토링 전문분야별 컨설팅, IR 컨설팅 등을 제공을 통해 비즈니스 역량강화를 지원하고 임팩트 투자를 연계하여 사회적 가치 실현과 재무적 수익 창출을 돕습니다.</p>
<p><span class="rte-smart-highlight">다양한 금융솔루션을 가진 팀들의 역랑을 강화하고, 건강한 금융사회를 설계해 나가는 사회혁신 프로그램, Inclusion Plus</span>입니다.</span></p>
-->

                </div>
            </div>
        </div>
    </div>

<?php 
}

function Divider($headline,$colsize,$mdsize){
    ?>
       
    <script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/divider/clientlibs.min.js" defer></script>
    <link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/divider/clientlibs.min.css" type="text/css">
        
    <div class="divider parbase">
        <section id="divider-1874135748" class="divider component component__spacing-bottom " role="region" aria-labelledby="divider-1874135748--labelledby">
        <div id="divider-1874135748--labelledby" class="d-none" aria-hidden="true"></div>
        <div class="container">
            <div class="row">
                <div class="col-<?php echo $colsize?> offset-md-<?php echo $mdsize?> responsive-columns">
                    <div class="divider__line gradient">
                    </div>      
                        <?php 
                        
                            if($headline=='' or Null ){}
                            else{
                        ?>          
                        <div class="divider__copy richtext richtext-wysiwyg">
                            <p><?php echo $headline?></p>
    
                        </div>   
                        <?php
                            }
                        ?>            
                </div>
            </div>
        </div>
        </section></div>
    
    <?php 
    }
    

    
function Divider2($headline,$colsize,$mdsize){
    ?>
       
    <script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/divider/clientlibs.min.js" defer></script>
    <link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/divider/clientlibs.min.css" type="text/css">
        
    <div class="divider parbase">
        <section id="divider-1874135748" class="divider component component__spacing-bottom " role="region" aria-labelledby="divider-1874135748--labelledby">

        <div id="divider-1874135748--labelledby" class="d-none" aria-hidden="true"></div>
        <div class="container">
            <div class="row">
                <div class="col-<?php echo $colsize?> offset-md-<?php echo $mdsize?> responsive-columns">
                
                    <div class="divider__line gradient"><br><h2><span class="font-subhead-2"><?php echo $headline?></span></h2>      </div>      
                        
                </div>
            </div>
        </div>
        </section></div>
    
    <?php 
    }
    
    

function JumpLinks($main_text,$link,$sub_text){
?>  
<div class="lead-gen-breaker parbase">
   
<script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/lead-gen-breaker/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/lead-gen-breaker/clientlibs.min.css" type="text/css">
<section id="jump-link-gen" class="lead-gen-breaker component component__spacing-bottom " role="region" aria-labelledby="jump-link-gen--labelledby">
<div id="jump-link-gen--labelledby" class="d-none" aria-hidden="true">jump link gen</div>
<div class="container-fluid lead-gen-breaker__bar">
    <div class="row row-no-gutters">
        <div class="filmstrip__container">
            <div class="filmstrip__container-barOne"></div>
            <div class="filmstrip__container-barTwo"></div>
            <div class="filmstrip__container-barThree"></div>
        </div>
    </div>
</div>
<div class="container lead-gen-breaker__content">
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            
                <h2 class="lead-gen-breaker__title">
                <?php echo $main_text?>
                </h2>
            
            
                <a class="lead-gen-breaker__cta btn-brand-1st" href="<?php echo $link?>" target="_self" data-link="true"><?php echo $sub_text?></a>               
            
        </div>
    </div>
</div>
<?php
}


function ProductPromoBreaker_left($array){

?>



    
<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/content-promo-banner/clientlibs.min.css" type="text/css">
<script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/content-promo-banner/clientlibs.min.js" defer></script>
<div class="component content-promo-banner component__spacing-bottom ">
    <div class="container content-promo-banner__container gray image-left">
        <div class="row">
            <div class="col-12 ">
                <div class="content-promo-banner__background">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 content-promo-banner__image-column ">
                            <div class="content-promo-banner__image bg" data-desktop-src="<?php echo $array[0]?>" data-mobile-src="<?php echo $array[0]?>">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-7 content-promo-banner__content-column">
                            <div class="content-promo-banner__content link">
                                

                                    <?php 
                                        if($array[1]=="" or null){}
                                        else{
                                            echo  '<div class="content-promo-banner__eyebrow font-eyebrow-1"><p>'.$array[1].'</p></div>';
                                        }

                                        if($array[2]=="" or null){}
                                        else{
                                            echo  '<div class="content-promo-banner__headline font-header-4 font-header-5-sm font-header-4-md"><p>'.$array[2].'</p></div>';
                                        }

                                        if($array[3]=="" or null){}
                                        else{
                                            echo  '<div class="content-promo-banner__copy font-body-1 font-body-3-sm">'.$array[3].'</div>';
                                        }

                                        if($array[4]=="" or null){}
                                        else{
                                            echo  '<div class="content-promo-banner__cta-link">
                                            <a class="font-cta-1" href="'.$array[4].'" target="_self">
                                                <span>'.$array[5].'</span>
                                                <svg class="icon icon-chevron-right">
                                                    <use xlink:href="/static/images/icons-metlife.svg#icon-chevron-right"></use>
                                                </svg>
                                            </a>
                                        </div>';
                                        }

                                        


                                    ?>
                                
                                
                                    
                                        
                                
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>        
            <div class="content-promo-banner__color-bar"></div>        
    </div>
</div></div>

<?php
}

function ContentPromoBannerLeft($array){
?>
<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/content-promo-banner/clientlibs.min.css" type="text/css">
<script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/content-promo-banner/clientlibs.min.js" defer></script>





<div class="component content-promo-banner component__spacing-bottom ">
    <div class="container content-promo-banner__container white image-right">
        <div class="row ">
            <div class="col-12 ">
                <div class="content-promo-banner__background">
                    <div class="row">
                        <div class="col-12 col-sm-7 col-md-4   content-promo-banner__image-column d-sm-none">
                            <div class="content-promo-banner__image bg" data-desktop-src="<?php echo $array[0]?>" data-mobile-src="<?php echo $array[0]?>">                            </div>
                        </div>
                        <div class="col-12 col-sm-7 col-md-7 content-promo-banner__content-column">
                            <div class="content-promo-banner__content button">
                                    <?php
                                        if($array[1]==Null or ""){}
                                        else{
                                         echo '<div class="content-promo-banner__eyebrow font-eyebrow-1">
                                                <p>'.$array[1].'<br /></p>
                                            </div>' ;  
                                        }
                                        if($array[2]==Null or ""){}
                                        else{
                                         echo '<div class="content-promo-banner__headline font-header-4 font-header-5-sm font-header-4-md">
                                                <h5><b>'.$array[2].'</b></h5>
                                            </div>' ;  
                                        }
                                        if($array[3]==Null or ""){}
                                        else{
                                         echo '   <div class="content-h2romo-banner__copy font-body-1 font-body-3-sm">
                                                <p>'.$array[3].'<br /></p>
                                            </div>' ;  
                                        }
                                        if($array[4]==Null or ""){}
                                        else{
                                         echo '<div class="content-promo-banner__cta-button">
                                                <a class="btn-brand-8th" href="'.$array[4].'" target="_self" role="button">'.$array[5].'</a>
                                            </div>' ;  
                                        }
                                        
                                    ?>                       
                                    
                                        
                                    
                                    
                                
                            </div>
                        </div>
                        
                            <div class="col-12 col-sm-7 col-md-4  content-promo-banner__image-column d-none d-sm-block">
                                <div class="content-promo-banner__image bg" data-mobile-src="<?php echo $array[0]?>" data-desktop-src="<?php echo $array[0]?>">
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
            <div class="content-promo-banner__color-bar "></div>
        
    </div>
</div>
<p>
<?php 
}
function ContentPromoBannerRight($array){

?>

<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/content-promo-banner/clientlibs.min.css" type="text/css">
<script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/content-promo-banner/clientlibs.min.js" defer></script>
<div class="component content-promo-banner component__spacing-bottom ">
    <div class="container content-promo-banner__container gray image-left">
        <div class="row">
            <div class="col-11">
                <div class="content-promo-banner__background">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 content-promo-banner__image-column ">
                            
                        <div class="content-promo-banner__image bg" data-desktop-src="<?php echo $array[0]?>" data-mobile-src="<?php echo $array[0]?>">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-7 content-promo-banner__content-column">
                            <div class="content-promo-banner__content link">
                                
                            <?php
                                        if($array[1]==Null or ""){}
                                        else{
                                         echo '<div class="content-promo-banner__eyebrow font-eyebrow-1">
                                                <p>'.$array[1].'<br /></p>
                                            </div>' ;  
                                        }
                                        if($array[2]==Null or ""){}
                                        else{
                                         echo '<div class="content-promo-banner__headline font-header-4 font-header-5-sm font-header-4-md">
                                                <h3>'.$array[2].'</h3>
                                            </div>' ;  
                                        }
                                        if($array[3]==Null or ""){}
                                        else{
                                         echo '   <div class="content-promo-banner__copy font-body-1 font-body-3-sm">
                                                <p>'.$array[3].'<br /></p>
                                            </div>' ;  
                                        }
                                        if($array[4]==Null or ""){}
                                        else{
                                         echo '<div class="content-promo-banner__cta-button">
                                                <a class="btn-brand-8th" href="'.$array[4].'" target="_self" role="button">'.$array[5].'</a>
                                            </div>' ;  
                                        }
                                        
                                    ?>           
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
      
        
    </div>
</div>





<?php
}

function callout($t1,$t2,$t3){

    ?>

    
<div class="callout-card parbase">
<script type="text/javascript" src="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/callout-card/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://design.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/callout-card/clientlibs.min.css" type="text/css">
<section id="callout-card-2034586178" class="callout-card component component__spacing-bottom " role="region" aria-labelledby="callout-card-2034586178--labelledby">
<div class="container">
    <div class="row">
        <div class="col-12   responsive-columns">
            <div class="callout-card__content">
                <div class="callout-card__headline">
                    
                    <span id="callout-card-2034586178--labelledby" class="callout-card__headline-text">
                    <?php echo $t1?>
                    </span>
                </div>
                <div class="callout-card__body font-body-1"><?php echo $t2?></div>
                <a class="callout-card__link" href="/Myjob/data/<?php echo $t3?>" target="_self">
                    <span class="callout-card__link-text">대표 기획서 확인하기</span>
                    <svg class="icon icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false">
                        <use xlink:href="/static/images/icons-metlife.svg#icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
</section>











<?php
}

function ValueProp($title,$item_array){
    ?>
    <script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/value-prop/clientlibs.min.js" defer></script>
    <link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/value-prop/clientlibs.min.css" type="text/css">
    
    <section class="component value-prop component__spacing-bottom   " role="region" aria-labelledby="value_prop_1311114780--labelledby">
        <div id="value_prop_1311114780--labelledby" class="d-none" aria-hidden="true"></div>
        <div class="gradiant-div"></div>
        <div class="value-prop__wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-11 offset-md-1 value-prop__bar">
                        <div class="value-prop__border"></div>
                    </div>
                </div>
                <div class="header_panel row">                
                        <h2 class="col-8 offset-md-1 font-header-4 font-header-4-sm font-header-2-md value-prop__title">
                            <p><?php echo $title?></p>
    
                        </h2>
                    
                    <div class="col-4 col-md-2 value-prop__controls">
                        <a class="carousel-control left js-leftClick" href="JavaScript:void(0);" role="button" tabindex="0" aria-label="Prev">
                            <svg class="icon brand-4th" aria-hidden="true" tabindex="-1" focusable="false">
                                <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-left" aria-hidden="true" tabindex="-1" focusable="false"></use>
                            </svg>
                        </a>
                        <span class="updatepipe"></span>
                        <a class="carousel-control right js-rightClick" href="JavaScript:void(0);" role="button" tabindex="0" aria-label="Next">
                            <svg class="icon brand-4th" aria-hidden="true" tabindex="-1" focusable="false">
                                <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 offset-md-1 col-lg-11-offset-1-right-edge carousel-4-items no-carousel value-prop__item-container" data-aos="fade-left" data-aos-delay="350" data-aos-duration="750">
                        
                            <div class="value-prop__item col-md-3">
                                <div class="value-prop__container">
                                
                                        <div class="value-prop__item__bg">
                                            <img src="/METLIFE_PROTOTYPE/img/p_endowment_≤120p.png" alt="" aria-hidden="true"/>
                                        </div>
                                    
                                    <div class="value-prop__item__content  ">
                                        
                                            <div class="value-prop__item-image-title font-cta-2 font-content-link-1-sm">
                                                <p><b><?php echo $item_array[0][0]?></b></p>
    
                                            </div>
                                        
                                        <div class="value-prop__item__description font-body-2 font-body-2-sm">
                                            <p><?php echo $item_array[0][1]?></p>
    
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        
                            <div class="value-prop__item col-md-3">
                                <div class="value-prop__container">
                                
                                        <div class="value-prop__item__bg">
                                            <img src="/METLIFE_PROTOTYPE/img/utility-1_clock_≤120p.png" alt="" aria-hidden="true"/>
                                        </div>
                                    
                                    <div class="value-prop__item__content  ">
                                        
                                            <div class="value-prop__item-image-title font-cta-2 font-content-link-1-sm">
                                                <p><b><?php echo $item_array[1][0]?>    </b></p>
    
                                            </div>
                                        
                                        <div class="value-prop__item__description font-body-2 font-body-2-sm">
                                            <p><?php echo $item_array[1][1]?>    </p>
    
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        
                            <div class="value-prop__item col-md-3">
                                <div class="value-prop__container">
                                
                                        <div class="value-prop__item__bg">
                                            <img src="/METLIFE_PROTOTYPE/img/hr_beneficiary-designation_≤120p.png" alt="" aria-hidden="true"/>
                                        </div>
                                    
                                    <div class="value-prop__item__content  ">
                                        
                                            <div class="value-prop__item-image-title font-cta-2 font-content-link-1-sm">
                                                <p><b><?php echo $item_array[2][0]?>        </b></p>
    
                                            </div>
                                        
                                        <div class="value-prop__item__description font-body-2 font-body-2-sm">
                                            <p><?php echo $item_array[2][1]?>        </p>
    
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <?php 
    }
    function ValueProp_value($title,$item_array){
        ?>
        <script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/value-prop/clientlibs.min.js" defer></script>
        <link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/value-prop/clientlibs.min.css" type="text/css">
        
        <section class="component value-prop component__spacing-bottom   " role="region" aria-labelledby="value_prop_1311114780--labelledby">
            <div id="value_prop_1311114780--labelledby" class="d-none" aria-hidden="true"></div>
            <div class="gradiant-div"></div>
            <div class="value-prop__wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-11 offset-md-1 value-prop__bar">
                            <div class="value-prop__border"></div>
                        </div>
                    </div>
                    <div class="header_panel row">                
                            <h2 class="col-8 offset-md-1 font-header-4 font-header-4-sm font-header-2-md value-prop__title">
                                <p><?php echo $title?></p>
        
                            </h2>
                        
                        <div class="col-4 col-md-2 value-prop__controls">
                            <a class="carousel-control left js-leftClick" href="JavaScript:void(0);" role="button" tabindex="0" aria-label="Prev">
                                <svg class="icon brand-4th" aria-hidden="true" tabindex="-1" focusable="false">
                                    <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-left" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                </svg>
                            </a>
                            <span class="updatepipe"></span>
                            <a class="carousel-control right js-rightClick" href="JavaScript:void(0);" role="button" tabindex="0" aria-label="Next">
                                <svg class="icon brand-4th" aria-hidden="true" tabindex="-1" focusable="false">
                                    <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 offset-md-1 col-lg-11-offset-1-right-edge carousel-4-items no-carousel value-prop__item-container" data-aos="fade-left" data-aos-delay="350" data-aos-duration="750">
                            
                                <div class="value-prop__item col-md-3">
                                    <div class="value-prop__container">
                                    
                                            <div class="value-prop__item__bg">
                                                <img src="/METLIFE_PROTOTYPE/img/p_endowment_≤120p.png" alt="" aria-hidden="true"/>
                                            </div>
                                        
                                        <div class="value-prop__item__content  ">
                                            
                                                <div class="value-prop__item-image-title font-cta-2 font-content-link-1-sm">
                                                    <p><b>봉사자</b></p>
        
                                                </div>
                                            
                                            <div class="value-prop__item__description font-body-2 font-body-2-sm">
                                                <p><?php echo $item_array[0]?> 명</p>
        
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            
                                <div class="value-prop__item col-md-3">
                                    <div class="value-prop__container">
                                    
                                            <div class="value-prop__item__bg">
                                                <img src="/METLIFE_PROTOTYPE/img/utility-1_clock_≤120p.png" alt="" aria-hidden="true"/>
                                            </div>
                                        
                                        <div class="value-prop__item__content  ">
                                            
                                                <div class="value-prop__item-image-title font-cta-2 font-content-link-1-sm">
                                                    <p><b>봉사시간   </b></p>
        
                                                </div>
                                            
                                            <div class="value-prop__item__description font-body-2 font-body-2-sm">
                                                <p><?php echo $item_array[1]?> 시간   </p>
        
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            
                                <div class="value-prop__item col-md-3">
                                    <div class="value-prop__container">
                                    
                                            <div class="value-prop__item__bg">
                                                <img src="/METLIFE_PROTOTYPE/img/hr_beneficiary-designation_≤120p.png" alt="" aria-hidden="true"/>
                                            </div>
                                        
                                        <div class="value-prop__item__content  ">
                                            
                                                <div class="value-prop__item-image-title font-cta-2 font-content-link-1-sm">
                                                    <p><b>수혜자   </b></p>
        
                                                </div>
                                            
                                            <div class="value-prop__item__description font-body-2 font-body-2-sm">
                                                <p><?php echo $item_array[2]?> 명</p>
        
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
        <?php 
        }

function relatedcontentrecirc($title,$want_array){
                    
?>
   
<script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/related-content-recirc-variations/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/related-content-recirc-variations/clientlibs.min.css" type="text/css">
   
<section id="related-content-recirc-variations_related_content_reci_1437122540" class="related-content-recirc-variations recirc-variations component component__spacing-bottom bg series " aria-labelledby="related_content_reci_1437122540--labelledby">


<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-11 offset-md-1 col-lg-11-offset-1-right-edge col-padding-right-none filmstrip__container">
            <div class="filmstrip__container-barOne"></div>
            <div class="filmstrip__container-barTwo"></div>
            <div class="filmstrip__container-barThree"></div>
        </div>
        <div class="col-12 col-md-11 offset-md-1 col-lg-11-offset-1-right-edge col-padding-right-none recirc-variations--carousel ">
            <div class="row recirc-variations--carousel__heading">
                <div class="col-8 recirc-variations--header" id="related_content_reci_1437122540--labelledby"><?php echo $title?></div>
                <div class="col-4 recirc-variations--indicators">
                    <button class="carousel-control left js-leftClick">
                        <svg class="icon brand-4th" aria-hidden="true" tabindex="-1" focusable="false">
                            <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-left" aria-hidden="true" tabindex="-1" focusable="false"></use>
                        </svg>
                    </button>
                    <span class="updatepipe"></span>
                    <button class="carousel-control right js-rightClick">
                        <svg class="icon brand-4th" aria-hidden="true" tabindex="-1" focusable="false">
                            <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 recirc-content-items" aria-live="assertive" aria-atomic="true">
                    
                        <?php 
                            for($i = 0 ; $i < count($want_array);$i++){
                                $temp = $want_array[$i];
                        ?>
                            <div class="item">
                                <div class="recirc-content-items--left bg" style="background-image: url('<?php echo $temp[0]?>')"></div>
                                <div class="recirc-content-items--right">
                                    <div class="recirc-variations--eyebrow">Eyebrow</div>
                                    <div class="recirc-variations--title">
                                        <a href="<?php echo $temp[1]?>'" target="_self"><?php echo $temp[2]?></a>
                                    </div>
                                    
                                        <p class="recirc-variations--subcaption"><?php echo $temp[3]?>'</p>
                                    
                                    
                                        <div class="recirc-variations--readTime"><?php echo $temp[4]?>'</div>
                                    
                                </div>
                            </div>
                        <?php
                            }
                            ?>
                        
                    
                </div>
            </div>
        </div>
        <div class="col-12 col-md-11 offset-md-1 col-lg-11-offset-1-right-edge col-padding-right-none filmstrip__container">
            <div class="filmstrip__container-barOne"></div>
            <div class="filmstrip__container-barTwo"></div>
            <div class="filmstrip__container-barThree"></div>
        </div>
    </div>
</div>

    
</section></div>
<?php
}

function ValueProp_array($title,$item_array){
?>
<div class="content-parsys parsys">
    <div class="value-prop parbase">
<script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/value-prop/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/value-prop/clientlibs.min.css" type="text/css">

<section class="component value-prop component__spacing-bottom   " role="region" aria-labelledby="value_prop--labelledby" aria-roledescription="carousel">
    <div id="value_prop--labelledby" class="d-none" aria-hidden="true"></div>
    <div class="gradiant-div"></div>
    <div class="value-prop__wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-11 offset-md-1 value-prop__bar">
                    <div class="value-prop__border"></div>
                </div>
            </div>
            <div class="header_panel row">
                
                    <h2 class="col-8 offset-md-1 font-header-4 font-header-4-sm font-header-2-md value-prop__title"><p><?php echo $title?></p>                    </h2>
                
                <div class="col-4 col-md-2 value-prop__controls">
                    <a class="carousel-control left js-leftClick" href="#" role="button" tabindex="0" aria-label="Prev">
                        <svg class="icon brand-4th" aria-hidden="true" tabindex="-1" focusable="false">
                            <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-left" aria-hidden="true" tabindex="-1" focusable="false"></use>
                        </svg>
                    </a>
                    <span class="updatepipe"></span>
                    <a class="carousel-control right js-rightClick" href="#" role="button" tabindex="0" aria-label="Next">
                        <svg class="icon brand-4th" aria-hidden="true" tabindex="-1" focusable="false">
                            <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-right" aria-hidden="true" tabindex="-1" focusable="false"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 offset-md-1 col-lg-11-offset-1-right-edge carousel-4-items carousel-4-items value-prop__item-container" data-aos="fade-left" data-aos-delay="350" data-aos-duration="750" aria-live="assertive" aria-atomic="true">
                    
                        <?php
                            for($i = 0 ; $i < count($item_array);$i++){
                                $temps = $item_array[$i];
                        ?>
                        <div class="value-prop__item ">
                            <div class="value-prop__container">
                                    <?php 
                                        if($temps[0]==null){}
                                        else{
                                    ?>
                                    <div class="value-prop__item__bg"><img src="<?php echo $temps[0]?>" alt="" aria-hidden="true"/></div>                                
                                    <?php
                                        }
                                    ?>
                                <div class="value-prop__item__content  ">                                    
                                    <div class="value-prop__item-image-title font-cta-2 font-content-link-1-sm"><p><?php echo $temps[1]?></p></div>
                                    <div class="value-prop__item__description font-body-2 font-body-2-sm"><p><?php echo $temps[2]?></p></div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section></div>



<?php 
}

function QuoteFeatureBreaker($array){
?>
<div class="quote-breaker parbase">
<script type="text/javascript" src="https://www.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/quote-breaker/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://www.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/quote-breaker/clientlibs.min.css" type="text/css">
<div class="quote-breaker component component__spacing-bottom ">
<div class="container quote-breaker-container">
    <div class="row">
        <div class="col-12 col-md-10 offset-md-1">
                        <div class="row quote-breaker-imagetext-section quote-breaker-imagetext-section-nogradient">
                            <div class="col-12 col-sm-6 col-md-6 quote-breaker-image-mobile-spacing">
                                <div class="quote-breaker__image quote-breaker-image-nogradient" style="background-image:url('<?php echo $array[0]?>')"></div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6  quote-breaker-content">
                                <div class="quote-icon-start" aria-hidden="true">
                                    <span></span>
                                </div>
                                <blockquote class="offset-md-1 quote-breaker-quote-text font-desc-2">           <?php echo $array[1]?>                                </blockquote>
                                <div class="quote-breaker-author-config">
                                    <div class="quote-breaker-author">
                                        <div class="author-name font-byline-1">                                        <?php echo $array[2]?>                                        </div>
                                        <div class="author-jobtitle">
                                            <div class="author-job font-byline-2">                                            <?php echo $array[3]?>                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
        </div>
    </div>    
    </div>
    </div></div>
    <?php }
    
    
    function VideoPromo($array){   
    
    ?>
        <div class="video-promo parbase">
                <script type="text/javascript"
                    src="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/video-promo/clientlibs.min.js"
                    defer></script>
                <link rel="stylesheet"
                    href="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/video-promo/clientlibs.min.css"
                    type="text/css">
                <div class="video-promo component component__spacing-bottom  ">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-10 offset-md-1">
                                <div class="video-promo__container">
                                    <div class="video-promo__container--background "></div>
                                    <div class="video-promo__content">
                                        <h2
                                            class="video-promo__content--title font-header-4 font-header-5-sm font-header-4-md"><?php echo $array[0]?></h2>
                                        <div class="video-promo__content--copy font-body-1 font-body-3-sm">
                                            <p><?php echo $array[1]?></p>
                                        </div>
                                        <div class="video-promo__content--cta font-cta-5 ">
                                            <a href="<?php echo $array[2]?>" target="_blank" aria-label="크게 보기">
                                                <span> <span><?php echo $array[3]?></span></span>
                                                <svg class="icon icon-chevron-right" aria-hidden="true" tabindex="-1"
                                                    focusable="false">
                                                    <use xlink:href="/METLIFE_PROTOTYPE/css/icons-metlife.svg#icon-chevron-right"
                                                        aria-hidden="true" tabindex="-1" focusable="false"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="video_container" role="region">
                                        <div class="videoWrapper videoWrapper--youtube">

                                        <iframe id="player1" width="100%" height="100%" src="<?php echo $array[4]?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php 
    }





function VisualProductCard3($title,$array){
?>
<div class="visual-product-card parbase">
<script type="text/javascript" src="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/visual-product-card/clientlibs.min.js" defer></script>
<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/visual-product-card/clientlibs.min.css" type="text/css">
<section id="visual-product-card-1747211936" class="visual-product-card component component__spacing-bottom " role="region" aria-labelledby="visual-product-card-1747211936--labelledby">
<div class="container">

    <div class="row">
        <div class="col-11  offset-md-1  responsive-columns">
            <div class="row">
                <div class="col-12">
                    <div class="visual-product-card__eyebrow-container">
                        <div id="visual-product-card-1747211936--labelledby" class="visual-product-card__eyebrow"><?php echo $title?></div>
                        <div class="visual-product-card__eyebrow-gradient-bar"></div>
                    </div>
                </div>
            </div>
            
                <div class="row">
                        <?php
                            for($i = 0 ; $i < count($array);$i++){
                                $temp = $array[$i];
                        
                        ?>                
                        <div class="col-12 col-sm-4 visual-product-card__card-columns">
                            <a class="visual-product-card__card-container image gray" href="<?php echo $temp[0]; ?>" target="_self">
                                <div class="visual-product-card__image-container">
                                                            <div class="visual-product-card__image bg" style="background-image: url('<?php echo $temp[1]; ?>');"></div>
                                </div>
                                <div class="visual-product-card__content-container">
                                    <div class="visual-product-card__gradient-bar"></div>
                                    <div class="visual-product-card__title-container"><h2 class="visual-product-card__title"><?php echo $temp[2]; ?></h2></div>
                                    <div class="visual-product-card__supporting-copy-container">
                                    <div class="visual-product-card__supporting-copy richtext"><?php echo $temp[3]; ?> </div>
        
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php 
                            }
                        ?>
                    
                </div>
            

        </div>
    </div>
</div>
<?php 
}

function CliffNotes($title,$array){
?>


<link rel="stylesheet" href="https://evolution.metlife.com/etc.clientlibs/MetlifeMarketCore/components/content/global/cliff-notes/clientlibs.min.css" type="text/css">

<div class="component cliff-notes component__spacing-bottom ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <div class="row cliff-notes__container">
                    <h3 class="col-12 col-sm-4 col-md-5 cliff-notes__title"><?php echo $title?>
                        
                    </h3>
                    <div class="col-12 col-sm-8 col-md-7 cliff-notes__bullets">
                        <ul class="cliff-notes__bullets-list">
                            <?php
                                for($i=0; $i < count($array);$i++){
                                    echo "<li>".$array[$i]."</li>";

                                }
                            ?>                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
}

?>