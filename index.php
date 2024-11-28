<?php get_header(); ?>

<!--پایان هدر (تکمیل ایندکس)-->

<div class="body-head-index">
    <div class="contain dc">
    <div class="headconhed">
        <h2>برخی از محصولات پـارس نهـال</h2>
        <p>بزرگترین مرکز ارائه دهنده نهال های شناسنامه دار </p>
    </div>
        
        <div class="arthed">
            <article>
                <a  class="a-img-art" href=""> <img src="img/1.png" alt="alt text" title="title text">
                </a>
                <a  class="a-tit-art" href=""> <h2>نهال گردو </h2> </a>
                <p>یک باغ خوب نیاز به یک نهال خوب داره با ما تماس بگیر بصورت رایگان مشاوره بگیر</p>
                <a href="#" class="a-art-mor">لیست نـهال گـردو</a>
            </article>



            <article>
                <a  class="a-img-art" href=""> <img src="img/2.png" alt="alt text" title="title text">
                </a>
                <a  class="a-tit-art" href=""> <h2>نهال گردو </h2> </a>
                <p>یک باغ خوب نیاز به یک نهال خوب داره با ما تماس بگیر بصورت رایگان مشاوره بگیر</p>
                <a href="#" class="a-art-mor">لیست نـهال گـردو</a>
            </article>



            <article>
                <a  class="a-img-art" href=""> <img src="img/3.png" alt="alt text" title="title text">
                </a>
                <a  class="a-tit-art" href=""> <h2>نهال گردو </h2> </a>
                <p>یک باغ خوب نیاز به یک نهال خوب داره با ما تماس بگیر بصورت رایگان مشاوره بگیر</p>
                <a href="#" class="a-art-mor">لیست نـهال گـردو</a>
            </article>




            <article>
                <a  class="a-img-art" href=""> <img src="img/4.png" alt="alt text" title="title text">
                </a>
                <a  class="a-tit-art" href=""> <h2>نهال گردو </h2> </a>
                <p>یک باغ خوب نیاز به یک نهال خوب داره با ما تماس بگیر بصورت رایگان مشاوره بگیر</p>
                <a href="#" class="a-art-mor">لیست نـهال گـردو</a>
            </article>

        </div>


    </div>
    <div class="callfor">
 <h4>دنبال نهال کمیاب میگردی ؟  با ما تماس بگیری <b>[ 09380777108 ]</b></h4>
        <a href="#">تماس فوری</a>
    </div>
</div>
<div class="body-container-index">
    <div class="contain dsds">
        <div class="head-body-center">
            <h3>
                نهال های پر فروش
            </h3>

            <ul>
                <li><a href="#">سیب</a> </li>
                <li><a href="#">گلابی</a> </li>
                <li><a href="#">گردو</a> </li>
                <li><a href="#">بادام</a> </li>
                <li><a href="#">انجیر</a> </li>
                <li><a href="#">سیب</a> </li>
                <li><a href="#">گلابی</a> </li>
                <li><a href="#">گردو</a> </li>
                <li><a href="#">بادام</a> </li>
                <li><a href="#">انجیر</a> </li>
                <li><a href="#">گلابی</a> </li>
                <li><a href="#">گردو</a> </li>
                <li><a href="#">گردو</a> </li>
                <li><a href="#">بادام</a> </li>
                <li><a href="#">انجیر</a> </li>
                <li><a href="#">سیب</a> </li>
                <li><a href="#">گلابی</a> </li>
                <li><a href="#">گردو</a> </li>
                <li><a href="#">بادام</a> </li>
                <li><a href="#">انجیر</a> </li>
                <li><a href="#">گلابی</a> </li>




            </ul>
        </div>

        <div class="index-articel">
        <?php
$args = array(
    'post_type' => 'product',
    'posts_per_page' =>12,
);
$my_query = new WP_Query($args);
while ($my_query->have_posts()):
$my_query->the_post();
$do_not_duplicate = $post->ID;?>
            <article >
            <a href="<?php the_permalink() ?>">  <header>
                   <?php the_post_thumbnail( 'productpicture' ); ?>
                </header> </a>
                <div class="index-art-body">
                <a href="<?php the_permalink() ?>"> <h2> <?php the_title(); ?></h2> </a>

                    <table style="width:100%">
                        <tr>
                            <th>شروع باردهی </th>
                            <td>از سال اول</td>
                        </tr>
                        <tr>
                            <th>عمر اقتصادی</th>
                            <td>120 سال </td>
                        </tr>
                    </table>
                    <div class="price-index">

                        <b>
                        <?php if ( $price_html = $product->get_price_html() ) : ?>
  <?php echo $price_html; ?>
<?php endif; ?>

                        </b>
                    </div>

                    <div  class="mojod-index">
                        <b>
                            موجود
                        </b>
                    </div>
                </div>

                <footer>
                    <a href="<?php the_permalink() ?>"> مشخصات + خرید </a>
                </footer>
            </article>
            <?php endwhile; wp_reset_postdata(); ?>
           

        </div>
<div class="center-more-link">
    <a  class="a-more-art-index" href="#"> [   مشاهده کل نهال های موجود ]  </a>

</div>

    </div>


    <div class="cuach">
        <div class="contain">
            <div class="right-quch">
                <img src="img/index-woman.png" alt="پارس نهال">
            </div>
            <div class="left-quch">
                <h3>سوالاتی که ممکن است در باره <br> ما داشته باشید</h3>
                <p>برخی از سوالات شما را در باره پارس نهال به شما داده ایم ولی اگر کافی نیست میتونید از قسمت پرسش پاسخ از
                    ما سوال کنید و راهنماییتون کنیم  که بهترین محصول رو داشته باشید ..</p>

                <div class="mom-lunch">
                    <b>
                        چگونه از شما خرید کنیم ؟
                    </b>
                    <p>
                        بله برای خرید های بالای 5 ملیون تومان هزینه ارسال دریافت نمیشود  همچنین برای خرید های بالای ده ملیون
                        تومان 5 نهال هدیه برای شما ارسال میشود
                    </p>
                </div>

                <div class="mom-lunch">
                    <b>
                        چگونه از شما خرید کنیم ؟
                    </b>
                    <p>
                        بله برای خرید های بالای 5 ملیون تومان هزینه ارسال دریافت نمیشود  همچنین برای خرید های بالای ده ملیون
                        تومان 5 نهال هدیه برای شما ارسال میشود
                    </p>
                </div>

                <div class="mom-lunch">
                    <b>
                        چگونه از شما خرید کنیم ؟
                    </b>
                    <p>
                        بله برای خرید های بالای 5 ملیون تومان هزینه ارسال دریافت نمیشود  همچنین برای خرید های بالای ده ملیون
                        تومان 5 نهال هدیه برای شما ارسال میشود
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="free-tree">
        <h2>  نهال رایگان میخای ؟</h2>
        <p> شماره تماستو  ثبت کن و نهال رایگان هدیه بگیر از طرف ما  </p>
        <form class="fonrmm">
            <input  class="type-number" placeholder="09123456789" type="text">
            <button>ثبت</button>
            <div class="khat"></div>
        </form>
    </div>

    <div class=" contain conect">
        <div class="head-conect">
            <h3>تماس با کارشناسان پارس نهال </h3>
            <p>برای مشاوره یا کارشناسان یا خرید تماس بگیرد</p>
        </div>
        <div class="content-box-mom">

            <div class="content-box">
                <img src="img/karshenas1.jpg" alt="">
                <h4>فرشاد فرجی </h4>
                <p>کارشنان فروش »  09380777108</p>
                <div class="icon-social-content">
                    <a href="" class="a-ins-content"><img src="img/03.svg" alt=""></a>
                    <a href="" class="a-tel-content"><img src="img/02.svg" alt=""></a>
                    <a href="" class="a-wht-content"><img src="img/01.svg" alt=""></a>

                </div>
                <div class="msg-call-mom">
                    <a href="#" class="call-content">ارسال پیغام</a>
                    <a href="#" class="call-content">تماس </a>

                </div>
            </div>
            <div class="content-box">
                <img src="img/karshenas2.jpg" alt="">
                <h4>فرشاد فرجی </h4>
                <p>کارشنان فروش »  09380777108</p>
                <div class="icon-social-content">
                    <a href="" class="a-ins-content"><img src="img/03.svg" alt=""></a>
                    <a href="" class="a-tel-content"><img src="img/02.svg" alt=""></a>
                    <a href="" class="a-wht-content"><img src="img/01.svg" alt=""></a>

                </div>
                <div class="msg-call-mom">
                    <a href="#" class="call-content">ارسال پیغام</a>
                    <a href="#" class="call-content">تماس </a>

                </div>
            </div>
            <div class="content-box">
                <img src="img/karshenas3.jpg" alt="">
                <h4>فرشاد فرجی </h4>
                <p>کارشنان فروش »  09380777108</p>
                <div class="icon-social-content">
                    <a href="" class="a-ins-content"><img src="img/03.svg" alt=""></a>
                    <a href="" class="a-tel-content"><img src="img/02.svg" alt=""></a>
                    <a href="" class="a-wht-content"><img src="img/01.svg" alt=""></a>

                </div>
                <div class="msg-call-mom">
                    <a href="#" class="call-content">ارسال پیغام</a>
                    <a href="#" class="call-content">تماس </a>

                </div>
            </div>
            <div class="content-box">
                <img src="img/karshenas4.jpg" alt="">
                <h4>فرشاد فرجی </h4>
                <p>کارشنان فروش »  09380777108</p>
                <div class="icon-social-content">
                    <a href="" class="a-ins-content"><img src="img/03.svg" alt=""></a>
                    <a href="" class="a-tel-content"><img src="img/02.svg" alt=""></a>
                    <a href="" class="a-wht-content"><img src="img/01.svg" alt=""></a>

                </div>
                <div class="msg-call-mom">
                    <a href="#" class="call-content">ارسال پیغام</a>
                    <a href="#" class="call-content">تماس </a>

                </div>
            </div>

        </div>

        <div class="text-footer">
            <h3 class="title-footer">سوالات شما در باره خرید نهال</h3>
            <article class="matn-index">
                <h1>چگونه اینترنتی نهال بخریم ؟</h1>
                <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای
                    علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                    دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </p>
                <h2>چگونه اینترنتی نهال بخریم ؟</h2>
                <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحانینی
                    دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </p>
                <h3>چگونه اینترنتی نهال بخریم ؟</h3>
                <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برایوزمان مورد نیاز شامل حروفچینی
                    دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </p>
                <h4>چگونه اینترنتی نهال بخریم ؟</h4>
                <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای
                    علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                    دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </p>
            </article>
        </div>
    </div>

</div>

<?php get_footer();?>