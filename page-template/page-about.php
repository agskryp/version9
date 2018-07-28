<?php
  /* Template Name: About Page */

  get_header(); 
?>


<div id="primary" class="content-area">
  <main id="main" class="site-main about-page content-page">
    <header class="entry-header text-center">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>
    
    <div class="entry-content">
      <p>
        Hello, my name is Andrew Skrypnyk.  I am web designer &amp; developer from Toronto, Ontario, Canada.  I am passionate about writing clean and concise code, building beautiful and bug-free pages, and creating responsive, easy to navigate, user friendly websites.
      </p>

      <p>
        Since taking night class at a community college in 2013, I've been enhancing my skills on web development.  Learning the basics of HTML and CSS, I've taken my studies out of the classroom and moved them online.  Reading articles on the latest library, viewing other developer demos, and researching the best way of initializing scripts .  I'm continually keeping my tools and skills sharp.
      </p>

      <p>
        My personal workstation is a simple MacBook Air.  Locally running a virtual machine, I do my coding in <a href="http://brackets.io/" target="_blank" rel="noopener">Brackets</a>.  Browser of choice is Chrome, but I do keep other major browsers around for testing.  I pull and push repo projects with GitKraken, and use FileZilla for uploading files to the web.  For any and all kinds of photos and image modifications, I play with Photoshop.
      </p>

      <p>
        The purpose of this web site is to keep a record of and show off past projects I’ve been involved with.  From time to time, I’ll <a href="<?php echo esc_url( __( AG_BLOG, 'version9' ) ); ?>">blog</a> about my experience with these projects, write tutorials, deconstruct code, talk about something new I’ve come across, and anything else related to the world of the web.
      </p>

      <p>
        When I’m not lost in web building, I enjoy watching all types of cinema, listening to and producing a wide variety of music, drawing and writing comic strips, running or cycling when the weather is nice, solving sudoku / other puzzles, and starting a game of chess with queen’s gambit.
      </p>

      <p class="text-center resume-link">
        <a href="<?php echo get_template_directory_uri() . AG_RESUME; ?>">
          View my resume
        </a>
      </p>

      <h2>
        Contact
      </h2>

      <p>
        Want to know more?  Fill out the form below.  I'm happy to answer any questions and usually reply within 24 hours.
      </p>
      
      <?php 
        while ( have_posts() ) :
          the_post();
            
          the_content();
        endwhile;
      ?>
    </div>
  </main>
  
  <?php
    get_sidebar();

    get_footer();
  ?>
</div>
