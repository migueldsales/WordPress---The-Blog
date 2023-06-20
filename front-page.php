<?php 
  /*
  Template Name: Home
  */
?>










<?php get_header();?>
<section class="banner">
      <div class="container">
        <div class="banner__wrapper">
          <h1><?php echo get_field('banner_title');?></h1>
          <div class="banner__grid">
            <div class="banner__main">

            <?php 
              $newQuery = new WP_Query(array(
                'post_type' => 'blogPost',
                'posts_per_page' => 1,
                'tax_query ' => array(
                  array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => 'main',
                  ),
                ),
              ));
            ?>
            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post()?>
              <!-- // Check kung may laman ang post sa $newQuery -->
            
              <article class="banner__story">
                <?php echo get_the_post_thumbnail();?>
                <img src="<?php echo get_template_directory_uri();?>./img/img-1.jpeg" alt="" />
                <div class="banner__story__content">
                  <small><?php echo get_the_Date("M d, Y");?></small>
                  <h2><?php the_title();?></h2>
                  <p>
                    <?php the_excerpt();?>
                  </p>
                  <a href="#">Read More...</a>
                </div>
              </article>
              <?php 
                endwhile;
              else:
                echo "There is no content!";
              endif;
              wp_reset_postdata();
              ?>
            </div>

            <div class="banner__sidebar">
            <?php $newQuery = new WP_Query(array(
                'post_type' => 'blogPost',
                'posts_per_page' => 4,
                'tax_query ' => array(
                  array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => 'mini',
                  ),
                ),
              ));
            ?>
            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post()?>
              <div class="card__sm">
              <?php echo get_the_post_thumbnail();?>
                <img src="<?php echo get_template_directory_uri();?>./img/img-3.jpeg" alt="" />
                <div class="card__sm__content">
                <small><?php echo get_the_Date("M d, Y");?></small>
                  <h3><?php echo wp_trim_words(get_the_title(), 6);?></h3>
                  <a href="#">Read More...</a>
                </div>
              </div>
              <?php 
                endwhile;
              else:
                echo "There is no content!";
              endif;
              wp_reset_postdata();
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="latest">
      <div class="container">
        <h2>Latest Story</h2>
        <div class="latest__wrapper">
          <div class="card__md">
            <img src="<?php echo get_template_directory_uri();?>./img/img-6.jpeg" alt="" />
            <div class="card__md__content">
              <ul>
                <li><small>May 21, 2010</small></li>
                <li><small>Fashion</small></li>
              </ul>
              <h3>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Corporis, praesentium.
              </h3>

              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Corporis voluptates debitis qui praesentium hic deleniti eos
                sequi adipisci accusamus dolorem.
              </p>
              <a href="#">Read More...</a>
            </div>
          </div>

          <div class="card__md">
            <img src="<?php echo get_template_directory_uri();?>./img/img-7.jpeg" alt="" />
            <div class="card__md__content">
              <ul>
                <li><small>May 21, 2010</small></li>
                <li><small>Fashion</small></li>
              </ul>
              <h3>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Corporis, praesentium.
              </h3>

              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Corporis voluptates debitis qui praesentium hic deleniti eos
                sequi adipisci accusamus dolorem.
              </p>
              <a href="#">Read More...</a>
            </div>
          </div>

          <div class="card__md">
            <img src="<?php echo get_template_directory_uri();?>./img/img-8.jpeg" alt="" />
            <div class="card__md__content">
              <ul>
                <li><small>May 21, 2010</small></li>
                <li><small>Fashion</small></li>
              </ul>
              <h3>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Corporis, praesentium.
              </h3>

              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Corporis voluptates debitis qui praesentium hic deleniti eos
                sequi adipisci accusamus dolorem.
              </p>
              <a href="#">Read More...</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="feature">
      <div class="feature__content">
        <h2>Feature New</h2>
        <h3 class="block__header">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        </h3>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga id
          perferendis quisquam error culpa non iure blanditiis placeat rem
          itaque autem nihil ducimus
        </p>
      </div>

      <div class="container">
        <div class="feature__img">
          <img src="<?php echo get_template_directory_uri();?>./img/img-9.jpeg" alt="" />
        </div>
      </div>

      <div class="container">
        <div class="feature__wrapper">
          <div class="feature__main">
            <article class="card__lg">
              <img src="<?php echo get_template_directory_uri();?>./img/img-10.jpeg" alt="" />
              <div class="card__lg__content">
                <small>Oct 2, 2022</small>
                <h3>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique, eligendi?
                </h3>
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Alias in deserunt voluptatum ad laboriosam, aliquam quis fuga
                  perspiciatis hic praesentium ea quae nemo aperiam aut sit
                  recusandae ipsa? Repellendus, quos.
                </p>
                <a href="#">Read More...</a>
              </div>
            </article>

            <article class="card__lg">
              <img src="<?php echo get_template_directory_uri();?>./img/img-11.jpeg" alt="" />
              <div class="card__lg__content">
                <small>Oct 2, 2022</small>
                <h3>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique, eligendi?
                </h3>
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Alias in deserunt voluptatum ad laboriosam, aliquam quis fuga
                  perspiciatis hic praesentium ea quae nemo aperiam aut sit
                  recusandae ipsa? Repellendus, quos.
                </p>
                <a href="#">Read More...</a>
              </div>
            </article>

            <article class="card__lg">
              <img src="<?php echo get_template_directory_uri();?>./img/img-12.jpeg" alt="" />
              <div class="card__lg__content">
                <small>Oct 2, 2022</small>
                <h3>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique, eligendi?
                </h3>
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Alias in deserunt voluptatum ad laboriosam, aliquam quis fuga
                  perspiciatis hic praesentium ea quae nemo aperiam aut sit
                  recusandae ipsa? Repellendus, quos.
                </p>
                <a href="#">Read More...</a>
              </div>
            </article>
          </div>
          <div class="feature__sidebar">
            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>
            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>

            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>

            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>

            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>

            <div class="card__mini">
              <small>Oct 21, 2022</small>
              <h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia,
                sit.
              </h4>
              <a href="#">Read More ...</a>
            </div>
          </div>
        </div>
      </div>
    </section>






<?php get_footer();?>