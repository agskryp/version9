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
        Hello, my name is Andrew Skrypnyk.  I am web designer &amp; developer from Toronto, Ontario, Canada.  I am passionate about writing clean and concise code, building beautiful and bug-free pages, and creating responsive, user friendly websites.
      </p>

      <p>
        In January of 2013, I began taking night classes at a community college where I was learning the basics of HTML and CSS.  Since then I've been enhancing my skills on web development by taking my studies from the classroom to the internet.  Whether it's reading about the latest libraries, or toying with another developers project, I'm continually keeping my tools and skill set sharp.
      </p>

      <p>
        My personal workstation is a simple <a href="https://www.apple.com/ca/macbook-air/" target="_blank" rel="noopener">MacBook Air</a>.  Locally running <a href="https://www.vagrantup.com/" target="_blank" rel="noopener">Vagrant's virtualbox</a>, I do my coding in <a href="http://brackets.io/" target="_blank" rel="noopener">Brackets</a>.  Browser of choice is <a href="https://www.google.com/chrome/" target="_blank" rel="noopener">Google Chrome</a>, but I keep other major browsers around for testing.  I pull and push repo projects with <a href="https://www.gitkraken.com/" target="_blank" rel="noopener">Axosoft's GitKraken</a>, and use <a href="https://filezilla-project.org/" target="_blank" rel="noopener">FileZilla</a> for uploading files to the web.  For any and all kinds of photos and image modifications, I play with <a href="https://www.photoshop.com/" target="_blank" rel="noopener">Adobe Photoshop</a>.
      </p>

      <p>
        The purpose of this web site is to keep a record of and show off <a href="<?php echo esc_url( AG_PORTFOLIO ); ?>">past projects</a> I’d been involved with.  From time to time, I’ll <a href="<?php echo esc_url( AG_BLOG ); ?>">blog</a> about my experience with these projects, write tutorials, deconstruct code, or talk about something new I’ve come across.
      </p>

      <p>
        When I’m not lost in web building, I can found jogging around my local neighborhood, cycling when the weather is nice, watching classic and contemporary films, solving sudoku puzzles, or beginning a game of chess with D2 - D4.
      </p>

      <p class="text-center resume-link">
        <a href="<?php echo get_template_directory_uri() . AG_RESUME; ?>">View my resume</a>
      </p>

      <h2>Contact</h2>

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
