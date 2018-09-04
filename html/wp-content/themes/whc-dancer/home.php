<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: Home template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package whc-dancerunified
 */

get_header();
?>
<div id="Section1"> 
<section >
    <div class="container text-center" style="
    padding: 3rem;
    ">
            <?php
            $Section1Args = array(
                'post_type' => 'section1',
                'posts_per_page' => 3,
                'order' => 'ACS'
            );
            $section1 = new WP_Query($Section1Args);
            ?>
            <?php if($section1 -> have_posts()): while($section1 -> have_posts()): $section1 -> the_post() ?>
            
            <div class="col-md-12">
                <div class="img-box">
                    <?php the_post_thumbnail(); ?>
                    </div>
            <button class="btn btn-lg">
                I'm a Dancer
            </button>
            <button class="btn btn-lg text-mute">
                I'm a Coach
            </button>
            </div>  
            <?php endwhile; endif; ?>

    </div>
    <div id="Snippet" class="col-12"> </div>

</section>
        
</div>
<section id="Section2">
    <div class="container text-center">
        <div class="row">
    <?php
            $Section2Args = array(
                'post_type' => 'section2',
                'posts_per_page' => 3,
                'order' => 'ACS'
            );
            $section2 = new WP_Query($Section2Args);
            ?>
            <?php if($section2 -> have_posts()): while($section2 -> have_posts()): $section2 -> the_post() ?>
            
            <div class="col-md-6">
            <div class="img-box">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
            <div class="col-md-6">
                
            <h1 id="whydancer">
                <?php the_title(); ?>
            </h1>

            <div id="para">

                <?php the_content(); ?>
                <?php endwhile; endif; ?>
                
            </div>
            </div>  
        </div>
    </div>
    <div id="Snippet2"></div>
</section>

<section id="Section3">
 
    <div class="container text-center" style="
    padding-top: 1rem;
    ">
        <div class="row text-center">       
            <div class="col-lg-6 coaches text-center" style="
                padding-top: 1rem;
                border-right: 1px solid white;
                ">
                <div class="row">
                    <h1 class="text-center" style="
                    padding: 1rem;
                    "> 
                        How Does it Work for Coaches
                    </h1>
                       <!-- header  -->

                           <?php
            $leftArgs = array(
                'post_type' => 'left',
                'posts_per_page' => 4,
                'order' => 'ACS'
            );
            $left = new WP_Query($leftArgs);
            ?>
            <?php if($left -> have_posts()): while($left -> have_posts()): $left -> the_post()
             ?>

                       <!-- Where loop starts -->
                    <div class="col-md-6 text-center">
                        <div class="img-fluid">
                           <?php the_post_thumbnail() ?>
                        </div>
                        <p>
                           <?php the_content() ?>
                        </p>
                    </div>
                           <?php endwhile; endif; ?>

                    </div>
               </div>
            
               <div class="col-lg-6 dancers" style="
        padding: 1rem;
        ">
                   <div class="row">
                       <h1 class="text-center" style="
                       padding: 1rem;
                       "> 
                           How Does it Work for Dancers
                         </h1>
                       <!-- header  -->

                           <?php
            $rightArgs = array(
                'post_type' => 'right',
                'posts_per_page' => 4,
                'order' => 'ACS'
            );
            $right = new WP_Query($rightArgs);
            ?>
            <?php if($right -> have_posts()): while($right -> have_posts()): $right -> the_post()
             ?>

                       <!-- Where loop starts -->
                    <div class="col-md-6 text-center">
                       <div class="img-fluid">
                           <?php the_post_thumbnail() ?>
                        </div>
                       <p>
                           <?php the_content() ?>
                        </p>
                           </div>

                           <?php endwhile; endif; ?>

                    </div>
               </div>

            </div>
        </div>
        <div class="col-md-12 text-center" style="
        padding: 2rem;
        ">
        <button id="sign" class="btn btn-lg"> SIGN UP NOW </button>
        </div>
    </div>
</section>

<section id="Section4">
    <div class="container text-center">
     <!-- first row! -->
     <div class="broswerheader">
            <h1>Browse Style</h1>
     </div>
        <div class="row">
            <?php
                $IconArgs = array(
                    'post_type' => 'icon',
                    'posts_per_page' => 4,
                    'order' => 'ACS'
                );
                $icon = new WP_Query($IconArgs);
                ?>
                <?php if($icon -> have_posts()): while($icon -> have_posts()): $icon -> the_post() ?>
                
                <div class="col-md-3">
                    <div id="img">
                        <?php the_post_thumbnail(); ?>
                    </div>

                    <div class="text">
                        <?php the_title(); ?>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
        <!-- first row end! -->
       
       <!-- second row starts! -->
       <div class="row">
            <?php
                $Icon2Args = array(
                    'post_type' => 'icon2',
                    'posts_per_page' => 4,
                    'order' => 'ACS'
                );
                $icon2 = new WP_Query($Icon2Args);
                ?>
                <?php if($icon2 -> have_posts()): while($icon2 -> have_posts()): $icon2 -> the_post() ?>
                
                <div class="col-md-3">
                    <div id="img">
                        <?php the_post_thumbnail(); ?>
                    </div>

                    <div class="text">
                        <?php the_title(); ?>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
       <!-- second row end! -->
    </div>
</section>

<section id="Section5">
    <div class="contianer text-center">
        <h3>
            Every Dancer Deserves a Turn at the Front of the Stage
        </h3>
        <h2>
        ARE YOU READY?
        </h2>
        <button class="btn btn-lg text-mute">
            SIGN UP NOW
        </button>
    </div>
    <div id="Snippet"></div>
</section>

<section id="Section6">
    <div class="row text-center">
        <div class="col-md-6" style="
        color: #ff7aa2;
        padding-top: 3rem;
        ">
        <?php
            $left1Args = array(
                'post_type' => 'left1',
                'posts_per_page' => 4,
                'order' => 'ACS'
            );
            $left1 = new WP_Query($left1Args);
            ?>
            <?php if($left1 -> have_posts()): while($left1 -> have_posts()): $left1 -> the_post()
             ?>
            <h2>
                <?php the_title(); ?>
            </h2>
            <p style="
            font-size: 23px;
            ">
            <?php the_content(); ?>
            </p>
            <button id="learn" class="btn btn-lg text-mute">
            LEARN MORE
            </button>
        <?php endwhile; endif; ?>
        </div>
        <div class="col-md-6">
            <?php
                $right1Args = array(
                    'post_type' => 'right1',
                    'posts_per_page' => 4,
                    'order' => 'ACS'
                );
                $right1 = new WP_Query($right1Args);
                ?>
                <?php if($right1 -> have_posts()): while($right1 -> have_posts()): $right1 -> the_post()
                ?>
            <div class="img">
                <?php the_post_thumbnail();?> 
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
    <div id="Snippet"></div>
</section>

<section id="Section7" style="
background-color: #9e4ac3;
">
    <div class="text-center">
    <?php
                $bottomArgs = array(
                    'post_type' => 'bottom',
                    'posts_per_page' => 4,
                    'order' => 'ACS'
                );
                $bottom = new WP_Query($bottomArgs);
                ?>
                <?php if($bottom -> have_posts()): while($bottom -> have_posts()): $bottom -> the_post()
                ?>
        <h1>
            <?php the_title(); ?>
        </h1>
        <p>
            <?php the_content(); ?>
        </p>
        <button class="btn btn-lg text-mute" style="
        margin: 4rem;
        ">
            Learn More
        </button>
        <div class="col-md-12" style="
        
        ">
            <?php the_post_thumbnail(); ?>
        </div>
        <?php endwhile; endif; ?>
    </div>
</section>
<?php

get_footer();

