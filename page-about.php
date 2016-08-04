<?php get_header(); ?>

<div class="band header">
  <section class="layout">
    <h2>Reaction, Debate and Discussion</h2>
    <h1>A unique and opinionated take on MUFC</h1>
    <a href="/podcasts" class="button ">Listen Now<span class="icon-play2"></span></a>
    <a href="https://www.twitter.com/bigredpod" class="button">Follow Us<span class="icon-arrow-right2"></span></a>
    <div class="scroll-down">
      <p>Scroll down</p>
      <a class="icon-down" href="#scroll-down"></a>
    </div>
  </section>
</div>

<a name="scroll-down"></a>
<div class="band intro">
  <section class="layout">
    <article>
      <ul class="details">
        <li class="strong">Podcast Details</li>
        <li><strong>Schedule</strong><br>Weekly on Mondays</li>
        <li><strong>Format</strong><br>Match Reaction, Opinion, Q&amp;A</li>
        <li><strong>Platforms</strong><br>iTunes, Audioboom, Web</li>
        <li><strong>Social Media</strong><br>
          <ul class="social-media">
            <li><a href="https://twitter.com/bigredpod" class="icon-twitter"></a></li>
            <li><a href="https://www.facebook.com/bigredpod" class="icon-facebook"></a></li>
            <li><a href="https://www.instagram.com/bigredpod" class="icon-instagram"></a></li>
            <li><a href="http://bigredpod.com/feed/podcast/" class="icon-rss2"></a></li>
            <li><a href="https://audioboom.com/bigredpod" class="icon-podcast"></a></li>
          </ul>
        </li>
        <li><a href="https://itunes.apple.com/gb/podcast/bigredpod/id1140949515">Subscribe</a></li>
      </ul>
    </article>
    <article class="story-background">
      <div>
        <h3>A brief introduction to the BigRedPod</h3>
        <p>The BigRedPod is a weekly podcast all about Manchester United Football Club. Each week we'll have plenty of debate, reaction and opinion on the weekend&#39;s football. We'll also be answering plenty of questions from listeners, so start sending them in today.</p>

        <p>We started the BigRedPod because we love talking about United and we love listening to fan's opinions. So we thought it's about time we started sharing our own thoughts with other United fans as well.</p>

        <p>New episodes go live each and every Monday. You can find the BigRedPod on iTunes and Audioboom, so please subscribe today.</p>
      </div>
    </article>
  </section>
</div>

<div class="band main">
  <div class="title layout">
    <h3>Social Media</h3>
    <p>There's always something goin on in Twitter and we're always right in heart of the discussion, so please check us on on there <a href="https://www.twitter.com/bigredpod">@bigredpod</a>. You'll find our latest tweets below.</p>
  </div>
  <section class="layout">
    <?php echo do_shortcode('[db_twitter_feed]'); ?>
  </section>
</div>

<?php get_footer(); ?>