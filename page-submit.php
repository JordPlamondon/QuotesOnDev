<?php
get_header(); ?>
<div class= "content-area">
<main id="main" class= "site-main">
  <section>
    <header>
    <?php the_title('<h1 class="entry-title>"', '</h1>'); ?>
    </header>
    
    <?php if( is_user_logged_in() && current_user_can('edit_posts' ) ): ?>
    <div class="quotes-submission-wrapper">
    <form name="quoteForm" id="quote-submission-form" >
      <div class="author-container">
        <label for="quote-author">Author of Quote</label>
        <input type="text" name="quote_author" id="quote-author" >
      </div>
      <div>
        <label for="quote-content">Quote</label>
        <textarea rows="3" cols="20" name="quote_content" id="quote-content" ></textarea>
      </div>
      <div>
        <label for="quote-source">Where did u find this quote?(e.g. book name)</label>
        <input type="url" name="quote_source" id="quote-source" ></input>
      </div>
      <div>
        <label for="quote-source-url">Provide the source of the URL of the quote, if available</label>
        <input type="url" name="quote_source-url" id="quote-source-url" ></teaxtarea>
      </div>
      <input type="submit" value="submit quote" id="submit-quote">      
      </form>
      <p class="submit-success-message" style></p>
    </div>
    <?php else:?>
      <p>Sorry, you must be logged in to submit a quote!</p>
      <p><?php echo sprintf('<a href= "%1s">%2s</a>',
      esc_url( wp_login_url()) , 'Click here to login.' );?></p>
    <?php endif;?>
  </section>
</main>
</div>

<?php get_footer(); ?>