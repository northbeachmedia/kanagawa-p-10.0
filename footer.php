<footer>

  <div class="footer-top">

    <div id="contact"></div>

    <div class="footer-form">

      <div class="footer-title">
        <h2>Let's get in touch</h2>
        <p>Want to talk marketing? Or just have a coffee? I'm excited to chat with you.</p>
      </div>

      <?php
        if( function_exists('ninja_forms_display_form') ) {
          ninja_forms_display_form(2);
        }
      ?>

      <div class="footer-social">
        <p>If forms aren't your thing, connect through <a target="_blank" href="https://www.linkedin.com/in/degrootcanada/">LinkedIn</a>.</p>
      </div>

    </div>

  </div>

  <div class="footer-bottom">

    <div class="footer-navigation">

      <div class="flex-container">
        <div class="flex-item-1">
          <ul>
            <li><a href="#home-page">home</a></li>
            <li><a href="#about-page">about</a></li>
            <li><a href="#words-page">words</a></li>
          </ul>
        </div>
        <div class="flex-item-2">
          <ul>
            <li><a href="#work-page">work</a></li>
            <li><a href="#contact">contact</a></li>
            <li><a target="_blank" href="https://open.spotify.com/user/v947bxvsytdi3v5510lhcqtqa">spotify</a></li>
          </ul>
        </div>
        <div class="flex-item-3">
          <ul>
            <li><a target="_blank" href="https://www.instagram.com/degrootcanada/">instagram</a></li>
            <li><a href="<?php echo get_option('home'); ?>/privacy-policy">privacy</a></li>
            <li><a href="<?php echo get_option('home'); ?>/terms">terms</a></li>
          </ul>
        </div>
      </div>

    </div> <!-- .footer-navigation -->

  </div> <!-- .footer-bottom -->

    <!-- contact modal -->
    <div class="modal fade" id="contactmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="contact-form">

              <div class="contact-title">
                <h2>Let's get in touch</h2>
                <p>Want to talk marketing? Or just have a coffee? I'm excited to chat with you.</p>
              </div>

              <?php
                if( function_exists('ninja_forms_display_form') ) {
                  ninja_forms_display_form(3);
                }
              ?>

              <div class="contact-social">
                <p>If forms aren't your thing, connect through <a target="_blank" href="https://www.linkedin.com/in/degrootcanada/">LinkedIn</a>.</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

</footer>

<?php wp_footer(); ?>

  </body>
</html>
