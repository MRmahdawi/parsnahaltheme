<footer class="footer-all">
    <div class="contain foot ">
        <div class="footer-one">
            <div class="logofooter">
            <a href="#"><img  alt="Alt Img" title="Title Img" src="<?php bloginfo('template_url');?>/img/logo.png"></a>
            </div>
            <p>
               <?php bloginfo('description');?>
            </p>
        </div>

        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer-site')) : else : ?><?php endif; ?>


    
        <div class="footer-tow">
            <div class="title-footer">
                <h3> سوالی داری زنگ بزن :) </h3>
            </div>
            <div class="number-footer">
                <div class="num"><b>مهندس فرجی (فروش)</b> </div>
                <div class="num">09380777108</div>
            </div>


            <div class="number-footer">
                <div class="num"><b>مهندس پور محمد</b> </div>
                <div class="num">09380777108</div>
            </div>


            <div class="number-footer">
                <div class="num"><b>مهندس پور محمد</b> </div>
                <div class="num">09380777108</div>
            </div>



        </div>

    </div>
    <div class="f-a-r-s-h-a-d">
        پارس نهال بزرگترین مرکز تولید و تکثیر نهال در کشور
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>