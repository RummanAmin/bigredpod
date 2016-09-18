<?php get_header(); ?>

  <div class="band header">
    <section class="layout">
      <h1><?php the_title(); ?></h1>
      <h2><?php the_field('introduction'); ?></h2>
    </section>
  </div>

  <div class="band main">
    <section class="layout">
      <article>
        <h3><a href="http://www.subsmart.co.uk">Subsmart</a></h3>
        <p>If there is one thing we know, it’s what it’s like to be a student. The struggles, the financial strains, the lack of time and sometimes, the loss of motivation. Subsmart will remove some of that stuff you have to think about and make life easier – the way we wish it was for us, not so long ago.</p>
        <p>Our aim is to help students get their hands on the best deals, we’ll be scouring the web on your behalf and post the best deals on here. If you’d like to share an offer here, just give us a shout.</p>
        <a href="http://www.subsmart.co.uk">Read more</a>
      </article>
      <article>
      <a href="http://www.subsmart.co.uk" class="partner-logo"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/logos/subsmart.png" alt="Subsmart"></a>
      </article>
    </section>
  </div>

  <div class="band main">
    <section class="layout">
      <article>
        <h3><a href="http://www.bytebubble.co.uk">ByteBubble</a></h3>
        <p>We’re ByteBubble, an Independent Digital Agency from London. We work with a diverse range of companies, brands and partners across multiple platforms. We help clients bring their ideas to life.</p>
        <p>We love to make things simpler, smarter, more helpful, more beautiful and more fun. We've worked with startups, charities and large corporations; helping them with intuitive solutions.</p>
        <a href="http://www.bytebubble.co.uk">Read more</a>
      </article>
      <article>
      <a href="http://www.bytebubble.co.uk" class="partner-logo"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/logos/bytebubble.png" class="bb-logo" alt="Bytebubble"></a>
      </article>
    </section>
  </div>

  <div class="band main">
    <section class="layout">
      <article>
        <h3><a href="/about">BigRedPod</a></h3>
        <p>The BigRedPod is a weekly podcast all about Manchester United Football Club. Each week we’ll have plenty of debate, reaction and opinion on the weekend's football.</p>
        <p>New episodes go live each and every Monday. You can find the BigRedPod on iTunes and Audioboom, so please subscribe today.</p>
        <a href="/about">Read more</a>
      </article>
      <article>
      <a href="/about" class="partner-logo"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/logos/bigredpod.png" alt="bigredpod"></a>
      </article>
    </section>
  </div>

  <div class="band main">
    <section class="layout">
      <article>
        <h3><a href="http://dpmpod.com">DPM Podcast</a></h3>
        <p>A new podcast discussing the trials and tribulations of a Digital Project Manager. Launching January 2017, we'll hope to shine some light on a incredibly exciting field.</p>
        <p>New episodes go out twice a month. You'll find the DPM Podcast on iTunes and Audioboom, so please keep an eye out for it.</p>
        <a href="#">Read more</a>
      </article>
      <article>
      <a href="http://dpmpod.com" class="partner-logo"><img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/logos/dpm.jpg" alt="DPM Podcast"></a>
      </article>
    </section>
  </div>

<?php get_footer(); ?>