<?php
/**
 * Template Name: New Locations Page (2024)
 * Template Post Type: locations
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();

while ( have_posts() ) :
    the_post();
    ?>

    <div class="tailwind">

        <?php /* Title Bar */ ?>
        <div class="container max-w-[1440px]  md:m-auto flex md:justify-between md:my-4 md:px-8 md:flex-row relative">
            <div class="absolute top-6 md:static px-6 md:px-0 md:text-left text-center w-full z-10">
                <h1 class="md:text-pacific   text-white   md:text-4xl text-2xl font-black leading-10">
                    <?= the_title() ?>
                </h1>
                <div class="md:flex hidden gap-6 ">
                    <div>
                        <i class="fas fa-star fa-lg text-bb-yellow mr-1"></i>
                        <span class="font-bold">4.9</span> (28 reviews)
                    </div>
                    <div>
                        <i class="far fa-clock fa-lg mr-1"></i>
                            <span class="font-bold">6.30am - 6.30pm </span>
                            |
                            <span> Monday – Friday</span>
                    </div>
                </div>
            </div>
            <div class="md:flex hidden md:flex-row md:gap-6 md:justify-end md:items-center">
                <div class="w-32">
                    <img src="https://www.busybees.edu.au/uploads/2022/11/meeting-png-crop.png" alt="">
                </div>
                <div class="w-32 mt-4 hidden xl:block">
                    <img class="w-full" src="https://www.busybees.edu.au//uploads/2024/07/kindergarten.png" alt="">
                </div>
            </div>
        </div>

        <?php /* Banner Image */ ?>
        <div class="relative">
            <img class="w-full h-[250px] md:h-[450px] lg:h-[600px] object-cover" src="https://www.busybees.edu.au/uploads/2019/05/Busy-Bees-Bellmere_Researchers_193757_1200px.webp" alt="" />
            <div class="absolute h-[250px] md:hidden inset-0 bg-black opacity-50"></div>
        </div> 

        <?php /* Vacancies Section */ ?>
        <div class="container md:px-8 px-6 m-auto hidden md:flex justify-center gap-8 relative">
            <div class="w-64 mt-8 flex flex-col gap-4">
                <a class="btn-pacific" href="#">
                    Book a Tour
                </a>
                <a class="btn-yellow" href="#">
                    Enquire Now
                </a>
                <a class="text-center text-inherit hover:text-black" href="tel:1300 851 331">
                    <i class="fas fa-fw fa-phone-alt mr-1"></i>
                    1300 851 331
                </a>
                <a class="text-center text-inherit hover:text-black" href="mailto:temp@temp.com">
                    <i class="far fa-fw fa-envelope mr-1"></i>
                    Email Centre
                </a>
            </div>
            <div class="grow max-w-[900px] xl:-mt-8 mt-0 gap-8">
                <div class="relative flex flex-col gap-2 bg-white rounded-3xl shadow-box my-8 pt-8 px-6 pb-4">
                
                    <div class="w-64 absolute -top-5 left-1/2 bg-white rounded-full border-solid border-2 border-pacific text-sm font-bold -translate-x-1/2 py-2 px-8">
                        <i class="fas fa-check fa-lg text-pacific mr-3"></i>
                        Vacancies Available
                    </div>
                    <div class="max-w-96 flex flex-col justify-start gap-2">
                        <div><i class="fas fa-map-marker-alt"></i><span class="ml-2">19 – 21 Point Cook Road, Altona Meadows VIC 3028</span></div>  
                            <div class="flex flex-row gap-2">
                                <i class="fas fa-parking"></i>
                                <i class="fas fa-subway"></i>
                                <i class="fas fa-bus"></i>
                                <i class="fas fa-wheelchair"></i>
                            </div>  
                    </div>
                    <div class="flex flex-col justify-start relative">
                        <div>
                            <div>
                                <i class="fas fa-arrow-right"></i>
                                Send contact details via SMS
                            </div>
                            <div>
                                <i class="far fa-star"></i>
                                Long day care 0 – 6 years
                            </div>
                            <div>
                                <i class="far fa-star"></i>
                                Kindergarten 3 – 6 years
                            </div>
                        </div>
                        <div class="w-32 mt-4 block xl:hidden absolute right-0">
                            <img class="w-full" src="https://www.busybees.edu.au//uploads/2024/07/kindergarten.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php /* Vacancies Mobile Section */ ?>
        <div class="md:hidden px-6 -mt-12">
            <div class="relative bg-white rounded-3xl shadow-box w-full sm:px-8 py-8 px-6">
                <div class="sm:w-60 w-[85%] absolute sm:-top-5 -top-6 left-1/2 bg-white rounded-full border-solid border-2 border-pacific text-xs text-center font-bold -translate-x-1/2 py-3 px-8">
                    <i class="fas fa-check fa-lg text-pacific mr-2"></i>
                    Vacancies Available
                </div>

                <div class="w-full flex flex-wrap flex-col sm:flex-row sm:gap-4 gap-3 sm:mt-0 mt-2">
                    <a class="btn-pacific" href="#">
                        Book a Tour
                    </a>
                    <a class="btn-yellow" href="#">
                        Enquire Now
                    </a>
                </div>
                <div class="flex flex-col w-full gap-2 mt-5">
                    <a class="text-left text-inherit hover:text-black" href="tel:1300 851 331">
                        <i class="fas fa-fw fa-phone-alt mr-1"></i>
                        1300 851 331
                    </a>
                    <a class="text-left text-inherit hover:text-black" href="mailto:temp@temp.com">
                        <i class="far fa-fw fa-envelope mr-1"></i>
                        Email Centre
                    </a>
                   
                    <div class="flex flex-row items center gap-2">
                        <i class="far fa-clock fa-fw mt-1"></i>
                        <div class="flex flex-col">
                            <span>6.30am - 6.30pm </span>
                            <span> Monday – Friday</span>
                        </div>
                    </div>

                    <div class="flex gap-2">
                        <i class="fas fa-fw fa-map-marker-alt mt-1"></i>
                        <div>
                            <span>19 – 21 Point Cook Road, Altona Meadows VIC 3028</span>
                            <div class="flex flex-row gap-2">
                                <i class="fas fa-parking"></i>
                                <i class="fas fa-subway"></i>
                                <i class="fas fa-bus"></i>
                                <i class="fas fa-wheelchair"></i>
                            </div>  
                        </div>  
                    </div> 
                    <div>
                            <i class="fas fa-fw fa-arrow-right"></i>
                            Send contact details via SMS
                        </div>
                        <div>
                            <i class="far fa-fw fa-star"></i>
                            Long day care 0 – 6 years
                        </div>
                        <div>
                            <i class="far fa-fw fa-star"></i>
                            Kindergarten 3 – 6 years
                        </div>
                    <div>
                        <i class="fas fa-star fa-fw text-bb-yellow mr-1"></i>
                        <span class="font-bold">4.9</span> (28 reviews)
                    </div>
                    <div class="flex flex-wrap flex-row justify-center items-center gap-4">
                        <div class="w-32">
                            <img src="https://www.busybees.edu.au/uploads/2022/11/meeting-png-crop.png" alt="">
                        </div>
                        <div class="w-32 sm:mt-4">
                            <img class="w-full" src="https://www.busybees.edu.au//uploads/2024/07/kindergarten.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <?php /* Promotion */ ?>
        <div class="container m-auto">
            <div>
                <h3>
                    25% Discount
                    on Mondays & Fridays*
                </h3>
                *T&Cs Apply
            </div>
            <div>
                <h3>Limited Time Offer</h3>
                <a href="">Learn More</a>
                <a href="">Book a Tour</a>
            </div>
        </div>

        <?php /* Description */ ?>
        <div class="container m-auto">
            <h2>
                Explore our Childcare & Kindergarten.
            </h2>
            <div>
                <div>
                    <img src="https://www.busybees.edu.au/uploads/2019/05/Busy-Bees-Bellmere_Researchers_193757_1200px.webp" alt="">
                    <img src="https://www.busybees.edu.au/uploads/2019/05/Busy-Bees-Bellmere_Researchers_193757_1200px.webp" alt="">
                    <img src="https://www.busybees.edu.au/uploads/2019/05/Busy-Bees-Bellmere_Researchers_193757_1200px.webp" alt="">
                </div>
                <div>
                    <p>
                        Looking for childcare they’ll adore? Busy Bees at Altona Meadows is on the south-west of
                        Melbourne in the suburb of Altona Meadows.
                    </p>
                    <p>
                        Come see our state-of-the-art facilities including nurturing learning environments, an
                        adventurous playground — with sandpit, slide, fort, climbing equipment, cubby houses and a
                        community garden — and an expertly designed Kindergarten.
                    </p>
                    <p>
                        Book an obligation-free tour to explore our Altona Meadows Childcare and Kindergarten, and meet
                        the team.
                    </p>
                </div>
            </div>
        </div>

        <?php /* Buzzworth Features */ ?>
        <div>
            <div class="container m-auto">
                <h3>Buzzworth Features.</h3>
                <div>
                    Our centre offers a diverse range of exciting features to keep your child engaged,
                    learning new skills and boosting confidence for a bright future.
                </div>
            </div>
            <div>
                <?php foreach(range(0,4) as $index): ?>
                    <div>
                        <div>
                            <img src="https://www.busybees.edu.au/uploads/2019/05/Busy-Bees-Bellmere_Researchers_193757_1200px.webp" alt="">
                        </div>
                        <div>
                            <h4>
                                STEAM Program <?= $index ?>
                            </h4>
                            <p>
                                An exciting STEAM program ignites your child's curiosity with Science, Technology,
                                Engineering, Arts and Mathematics.
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


        <?php /* Information Pack */ ?>
        <div class="container m-auto">
            <a href="">
                Download Information Pack
            </a>
        </div>


        <?php /* TABS: Start */ ?>
        <div class="container m-auto">
            <div>
                <ul class="" id="" role="tablist">
                    <li class="" role="presentation">
                        <a class="" href="#inclusions" role="tab" aria-controls="inclusions" aria-selected="true">
                            Inclusions
                        </a>
                    </li>
                </ul>
            </div>

            <?php /* Inclusions */ ?>
            <div id="inclusions">
                <h3>Thrive in Our Hive.</h3>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Metus dictum at tempor commodo.
                    </p>
                    <p>
                        Volutpat maecenas volutpat blandit aliquam etiam erat velit. Adipiscing tristique risus nec
                        feugiat in fermentum posuere. Egestas dui id ornare arcu. Lobortis mattis aliquam faucibus
                        purus. Dui vivamus arcu felis bibendum ut tristique et egestas. Arcu cursus vitae congue
                        mauris rhoncus. Diam sollicitudin tempor id eu nisl nunc mi ipsum faucibus.
                    </p>
                </div>
                <div>
                    <?php foreach(range(0,4) as $index): ?>
                        <div>
                            <h5>
                                All-inclusive Care
                            </h5>
                            <?php foreach(range(0,4) as $child_index): ?>
                                <div>
                                    <i class="fas fa-check"></i>
                                    <span>
                                Nappies, wipes & bedding <?= $child_index ?>
                            </span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <?php /* Curriculum */ ?>
            <div id="curriculum">
                <h3>Here Every Step of the way.</h3>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Metus dictum at tempor commodo.
                    </p>
                </div>
                <div>
                    <?php foreach(range(0,3) as $index): ?>
                        <div>
                            <div>
                                <img src="https://www.busybees.edu.au/uploads/2019/05/Busy-Bees-Bellmere_Researchers_193757_1200px.webp" alt="">
                            </div>
                            <div>
                                <h4>
                                    Nursery <?= $index ?>
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Metus dictum at tempor commodo.
                                </p>
                                <div>
                                    <a href="">Explore Nursery</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <?php /* Fees */ ?>
            <div id="fees">
                <h3>Daily Fees.</h3>
                <div>
                    <div>
                        <?php foreach(range(0,3) as $index): ?>
                            <div>
                                <div>
                                    <?= $index ?> years
                                </div>
                                <div>
                                    $154.50
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div>
                        <p>
                            Life’s stressful enough without you trying to understand confusing childcare fees and the
                            Child Care Subsidy (CCS). We’re here to simplify your life with transparent fees and
                            flexible options.
                        </p>
                        <div>
                            <a href="">Estimate Subsidy</a>
                        </div>
                        <div>
                            <a href="">Free Kindy Information</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php /* Our Team */ ?>
            <div id="our-team">
                <h3>Meet our Team.</h3>
                <div>
                    <?php foreach(range(0,3) as $index): ?>
                        <div>
                            <div>
                                <img src="https://www.busybees.edu.au/uploads/2019/05/Busy-Bees-Bellmere_Researchers_193757_1200px.webp" alt="">
                                <h4>
                                    Insert Name <?= $index ?><br/>
                                    Service Manager
                                </h4>
                            </div>
                            <div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Metus dictum at tempor commodo.
                                    Volutpat maecenas volutpat blandit aliquam etiam erat velit. Adipiscing tristique
                                    risus nec feugiat in fermentum posuere. Metus dictum at tempor commodo. Volutpat
                                    maecenas volutpat blandit aliquam etiam erat velit. Adipiscing tristique risus nec
                                    feugiat in fermentum posuere.
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
        <?php /* TABS: End */ ?>

        <?php /* Reviews */ ?>
        <div class="container m-auto">
            <h3>What our Families say.</h3>
            <div>
                <?php foreach(range(0,3) as $index): ?>
                    <div>
                        <div>
                            Jessica Taylor <?= $index ?>
                        </div>
                        <div>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div>
                            <p>
                                My little one has been going here since she was 12 months, now 2.5 years old. The Centre
                                has had some changes throughout that time but we have no complaints.
                            </p>
                            <a href="">Read More</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <?php /* Footer Bar */ ?>
        <div class="container m-auto">
            <h3>Join our Hive</h3>
            <div>
                <div>
                    Book a Tour
                </div>
                <div>
                    Enquire Now
                </div>
                <div>
                    <a href="tel:1300 851 331">
                        <i class="fas fa-phone-alt"></i>
                        1300 851 331
                    </a>
                </div>
            </div>
        </div>

    </div>

<?php
endwhile;

get_footer();
