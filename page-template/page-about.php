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
        Hello, my name is Andrew Skrypnyk.  I am web designer &amp; developer from Toronto, Ontario, Canada.  I am passionate about writing clean and concise code, building beautiful and bug-free pages, and creating responsive, easily navigatable, user friendly websites.
      </p>

      <p>
        Starting in January of 2013, I've taken night classes at a community college in 2013, learning the basics of HTML and CSS.  Since then I've been enhancing my skills on web development by taking my studies from the classroom and onto the internet.  Whether it's reading articles on the latest library, viewing and toying with another developers demo, or researching the best way of initializing scripts, I'm continually keeping my tools and skill set sharp.
      </p>

      <p>
        My personal workstation is a simple <a href="https://www.apple.com/ca/macbook-air/" target="_blank" rel="nofollow">MacBook Air</a>.  Locally running a <a href="https://www.vagrantup.com/" target="_blank" rel="nofollow">Vagrant's virtualbox</a>, I do my coding in <a href="http://brackets.io/" target="_blank" rel="noopener">Brackets</a>.  Browser of choice is <a href="https://www.google.com/chrome/" target="_blank" rel="nofollow">Google Chrome</a>, but I keep other major browsers around for testing.  I pull and push repo projects with <a href="https://www.gitkraken.com/" target="_blank" rel="nofollow">Axosoft's GitKraken</a>, and use <a href="https://filezilla-project.org/" target="_blank" rel="nofollow">FileZilla</a> for uploading files to the web.  For any and all kinds of photos and image modifications, I play with <a href="https://www.photoshop.com/" target="_blank" rel="nofollow">Adobe Photoshop</a>.
      </p>

      <p>
        The purpose of this web site is to keep a record of and show off <a href="<?php echo esc_url( __( AG_PORTFOLIO, 'version9' ) ); ?>">past projects</a> I’ve been involved with.  From time to time, I’ll <a href="<?php echo esc_url( __( AG_BLOG, 'version9' ) ); ?>">blog</a> about my experience with these projects, write tutorials, deconstruct code, talk about something new I’ve come across, or anything else that's related to the world of the web.
      </p>

      <p>
        When I’m not lost in web building, I can found running or cycling when the weather is nice, listening to a variety of music, watching classic and contempoary films, reading on public transit, solving sudoku / other puzzles, and starting a game of chess with D2 - rD4.
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
