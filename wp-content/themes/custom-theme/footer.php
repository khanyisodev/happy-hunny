</main>
<footer>
  <section class="section-footer section-footer-newsletter">
    <div class="container footer-background">
      <div class="newsletter center footer-email">
        <div class="newsletter__wrapper">
          <h3>Stay up to date</h3>
          <div class="newsletter__subheading">
            <p>Whether you want to stay in the loop with Happy Hunny updates or just say “hi” when you miss us, subscribe to our mailing list today.</p>
          </div>
          <div>
            <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="newsletter-form"><input type="hidden" name="form_type" value="customer"><input type="hidden" name="utf8" value="✓">
              <input type="hidden" name="contact[tags]" value="newsletter">
              <div class="newsletter-form__field-wrapper">
                <div class="field">
                  <input id="NewsletterForm--footer" type="email" name="contact[email]" class="field__input" value="" aria-required="true" autocorrect="off" autocapitalize="off" autocomplete="email" placeholder="Email" required="" fdprocessedid="8i8jar">
                  <label class="field__label" for="NewsletterForm--footer">Email</label>
                  <button type="submit" class="newsletter-form__button field__button" name="commit" id="Subscribe" aria-label="Subscribe" fdprocessedid="7s7hgo">Sign me up</button>
                  <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <span>We don’t do spam. While our newsletters are short and always sweet, you can unsubscribe at any time.</span>
        </div>
      </div>
    </div>
  </section>
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="footer-nav">
          <div class="nav">
            <?php wp_nav_menu([
              "menu" => "footer-menu",
              "menu_id" => "footer-menu",
            ]); ?>
          </div>
          <div class="social">
            <a href="https://instagram.com/happyhunnykids" target="_blank" class="icon icon-instagram"><i class="fa fa-instagram icon icon-instagram" aria-hidden="true"></i></a>
            <a href="https://www.facebook.com/Happyhunnykids" target="_blank" class="icon icon-facebook"><i class="fa fa-facebook-square icon icon-facebook" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="footer__content-top page-width">
        </div>
        <div class="footer-addons">
          <div>Copyright © <?php $currentYear = date('Y'); echo $currentYear; ?> <?php the_title() ?> | All rights reserved</div>
          <div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-logo-visa.svg" alt="mastercard">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-logo-mastercard.svg" alt="mastercard">
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js" type="text/javascript" defer=""></script>
<?php wp_footer(); ?>
</div>
</body>
</html>
