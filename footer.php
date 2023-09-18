<?
if( !is_404() ) {
    ?>
    <footer class="footer">
      <div class="footer-content">
            <div class="footer-nav">
                <?
                wp_nav_menu(array(
                    'theme_location' => 'block-1',
                    'container'      => '',
                    'container_class'=> '',
                    'menu_class'     => '',
                    'menu_id'     => '',
                    'depth' =>2,
                    'echo' => true,
                    'walker'=> new Foter_Walker_Nav_Menu(),
                    'add_li_class' => '',
                    'add_a_class' => ''
                ));
                ?>
            </div>
            <div class="footer-form">
                <h3><?_e('Залишились запитання?','holybuild');?></h3>
                <p><?_e('Залиште свої контакти і наш менеджер зв’яжеться з вами протягом 10-ти хвилин.','holybuild');?></p>
                <form class="contact-form" action="#">
                    <div class="form-field">
                        <label for="tel"><?_e('Введіть ваш номер телефону','holybuild');?></label>
                        <input data-required="true" class="contact-form-input" type="tel" name="tel" id="callback-form-input-phone"
                               autocomplete="on" value=""  inputmode="tel">
                        <div class="input-message"><?_e('Телефон має містити 12 символів','holybuild');?></div>
                    </div>
                    <button class="form-button form-button-js" type="submit">
                      <!-- <svg viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="37.5" cy="37.5" r="37.5"/>
                        <path d="M10.4762 21L20 11M20 11L10.4762 1M20 11L-4.37114e-07 11"/>
                      </svg> -->
                       <div class="arrow-gold">
                            <svg viewBox="0 0 21 22">
                             <path d="M10.4762 21L20 11M20 11L10.4762 1M20 11L-4.37114e-07 11"/>    
                            </svg>
                        </div>
                        <?_e('Надіслати','holybuild');?>
                    </button>
                   
                </form>
            </div>
            <div class="arrow-up js-btn-up">
                <div class="arrow-white">
                    <svg  width="22" height="21" viewBox="0 0 22 21">
                      <path d="M21 10.5238L11 1M11 1L0.999999 10.5238M11 1L11 21"/>
                    </svg>
                </div>
            </div>
            <div class="footer-rights-reserved">
                <div class="footer-rights">&copy; <?_e('Усі права захищено','holybuild');?> Whale Development</div>
                <div class="footer-dev">
                         <a href="https://smarto.agency/" rel="nofollow" target="_blank">
                            <svg class="icon-logo-footer-smarto-agency" role="presentation">
                               <use xlink:href="#icon-logo-footer-smarto-agency"></use>
                            </svg>
                                 <!-- <img class="footer-smarto-agency-logo" data-src="<?=get_template_directory_uri()?>/assets/images/label_logo_smart_orange_orange.jpg" alt=""> -->
                          </a>
               </div>


            </div>
      </div>
    </footer>

    <?
}
?>

<?php do_action('hook_assets_footer'); ?>
<?php wp_footer(); ?>
<script>


const lazyImages = document.querySelectorAll('img[data-src]:not(.swiper-lazy)');

lazyImages.forEach((imageArgs) => {
  const options = {
    rootMargin: '0px',
    threshold: 0.01,
  };
  const image = imageArgs;
    image.style.opacity = 0;
    image.style.transition = ' .5s ease-out';
    image.addEventListener('load', () => {
      // image.style.opacity = 1;
      image.style.opacity = 1;
      setTimeout(() => {
        image.removeAttribute('data-src');
      }, 1000);
    });
    const target = image;
    const observer = new IntersectionObserver((entries) => {
      /* Content excerpted, show below */
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const lazyImage = entry.target;
            lazyImage.src = lazyImage.dataset.src;
          // image.style.transition = '';
          observer.unobserve(target);
        }
      });
    }, options);
    observer.observe(target);
});
</script>
</body>
</html>