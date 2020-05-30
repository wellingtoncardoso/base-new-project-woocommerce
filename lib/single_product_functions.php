<?php

add_action('woocommerce_after_single_product_summary', 'print_something_below_short_description');
function print_something_below_short_description(){
  ?>
  <div class="container description-single">
    <div class="row">
      <div class="col-12 col-md-5 column-1">
        <div class="card-thumb"><img  src="<?php the_field('product_image_top'); ?>" ></div>
        <div class="card">
          <div><h5>Selos e Certificações</h5></div>
          <?php $i = 0; ?>
          <?php 
          $news = get_field('add_product_certification');
          if($news){
            foreach($news as $news_desc){ ?>    
              <div class="mb-3" >
                <div class="row no-gutters">
                  <div class="col-md-12">
                    <img src="<?php echo $news_desc['product_certification_image'];?>" class="card-img" alt="[Selos e Certificações]">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <div class="card-text">
                        <?php echo $news_desc['product_certification_content'];?>
                      </div>
                      <a href="<?php echo $news_desc['product_certification_btn_link'];?>" class="more"><?php echo $news_desc['product_certification_btn'];?> <img style="padding-left: 10px;" src="<?php echo get_template_directory_uri(); ?>/img/arrow-grey.svg"></a>
                    </div>
                  </div>
                </div>
              </div>  
              <?php if(++$i == -1) break; ?>
            <?php } ?>
          <?php } ?>      
        </div>
      </div>
      <div class="col-12 col-md-7 column-2">
        <div class="card-body-content">
          <h5 class="card-title"><?php the_field('product_title'); ?></h5>
          <?php the_field('product_content'); ?>
        </div>
      </div>
      <div class="col-12 col-md-5  column-1">
        <div class="card-thumb"><img src="<?php the_field('product_accordion_image') ?>"></div>
      </div>
      <div class="col-12 col-md-7  column-2">
        <h5 class="card-title"><?php the_field('product_accordion_title');?></h5>
        <div class="accordion" id="accordionExample">

          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <?php the_field('add_product_accordion_title_1') ?>
                </button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <?php the_field('add_product_accordion_content_1') ?>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <?php the_field('add_product_accordion_title_2') ?>
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <?php the_field('add_product_accordion_content_2') ?>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <?php the_field('add_product_accordion_title_3') ?>
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <?php the_field('add_product_accordion_content_3') ?>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingFour">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <?php the_field('add_product_accordion_title_4') ?>
                </button>
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
                <?php the_field('add_product_accordion_content_4') ?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <?php
}

