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
                            <th class="font-content-link-4"><p>??????</p></th>
                            <th class="font-content-link-4"><p><b>??????</b></p></th>
                            <th class="font-content-link-4"><p><b>????????????</b></p></th>
                            <th class="font-content-link-4"><p><b>??????</b></p></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $num = 0;$num+=1;
                            $array=array($num,
                            "??????     ",
                            "KBO",
                            "IA ?????????",
                            "[BAT]Front_IA?????????_2021-04-25_v0.2.xlsx");                            
                            hd_jy_table($array);
                            $num+=1;
                            $array=array($num,
                            "??????     ",
                            "METLIFE ??????",
                            "IA ?????????",
                            "0000.[???????????????]IA?????????_2022-03-31_v0.3??????.xlsx");                            
                            hd_jy_table($array);
                            $num+=1;
                            $array=array($num,
                            "??????     ",
                            "?????????",
                            "BM ????????????",
                            "?????????_BM????????????v4.pdf");                            
                            hd_jy_table($array);
                            $num+=1;
                            $array=array($num,
                            "??????     ",
                            "OMC",
                            "GA ?????? ?????????",
                            "?????????_GA???????????????.pdf");                            
                            hd_jy_table($array);
                            $num+=1;
                            $array=array($num,
                            "??????     ",
                            "OMC",
                            "????????? ?????????",
                            "????????????????????????_OMC_2020-05-15_v0.4.pdf");                            
                            hd_jy_table($array);

                            $num+=1;
                            $array=array($num,
                            "??????",
                            "????????? ???",
                            "ERD ??????",
                            "?????????.pdf");                            
                            hd_jy_table($array);
                            $num+=1;
                            $array=array($num,
                            "??????",
                            "ReturM",
                            "api Structure",
                            "ReturM_Structure&Protocol_v0.21.pdf");                            
                            hd_jy_table($array);

                            $num+=1;
                            $array=array($num,
                            "??????",
                            "?????????",
                            "?????? ?????????",
                            "v0.1_????????????_20190728_?????????.pdf");
                            hd_jy_table($array);
                            

                            $num+=1;
                            $array=array($num,
                            "??????",
                            "??????????????? ?????????",
                            "?????????",
                            "(?????????)???????????????_UIUX?????????????????????????????????_???????????????_1???_v0.5.pdf");
                            hd_jy_table($array);
                            
                            $num+=1;
                            $array=array($num,
                            "??????",
                            "????????? ?????? ?????????",
                            "?????????",
                            "[????????????app]UI???????????????_2019-05-03.pdf");
                            hd_jy_table($array);
                            
                            $num+=1;
                            $array=array($num,
                            "??????",
                            "????????? ?????? ?????????",
                            "?????????",
                            "[?????????]???????????????_UI???????????????.pdf");
                            hd_jy_table($array);
                            $num+=1;
                            $array=array($num,
                            "??????",
                            "????????? ????????????",
                            "?????????",
                            "SB_MZ_NatureR_Admin ??????&????????????_20210812_v0.03.pdf");
                            hd_jy_table($array);
                            $num+=1;
                            $array=array($num,
                            "??????",
                            "????????? ?????? ?????????",
                            "?????????",
                            "???????????????_?????????????????????_???????????? _18.12.05_ver0.3.pdf");
                            hd_jy_table($array);
                            
                            $num+=1;
                            $array=array($num,
                            "??????",
                            "SK C&C",
                            "?????????",
                            "SKES ?????? ????????????????????? ????????? ?????? ESS ?????? ?????? UI ????????? 2019 02 20.pdf");
                            hd_jy_table($array);
                            
                            $num+=1;
                            $array=array($num,
                            "??????",
                            "?????? ????????? ?????? ?????????",
                            "?????????",
                            "??????????????????????????????_Web_v1.10.pdf");
                            hd_jy_table($array);
                            
                            $num+=1;
                            $array=array($num,
                            "??????",
                            "?????? ?????????",
                            "?????????",
                            "???????????????_ESS_20181105_v0.8_F.pdf");
                            hd_jy_table($array);
                            
                            
                            $num+=1;
                            $array=array($num,
                            "??????",
                            "KBO",
                            "?????????",
                            "KBO_couponMC??????_20200629.pdf");
                            hd_jy_table($array);

                            $num+=1;
                            $array=array($num,
                            "??????",
                            "KBO",
                            "?????? ?????? ?????? ??????",
                            "BAT_??????.pdf");
                            hd_jy_table($array);
                            
                            $num+=1;
                            $array=array($num,
                            "??????",
                            "KBO",
                            "????????? ????????? ?????????",
                            "[KBO]MZ???????????????_20220412.pdf");
                            hd_jy_table($array);
                            
                            
                            $num+=1;
                            $array=array($num,
                            "???????????????",
                            "????????????????????????",
                            "?????????",
                            "190527_EW_????????? ????????? ???????????? v1.0.pdf");
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