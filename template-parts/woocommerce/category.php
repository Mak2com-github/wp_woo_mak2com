<?php
/*
 * WooCommerce Categories
 */
$pattern = false;
$patternAlt = false;
$patternSimple = false;
if (have_rows('group_hero_banner')) :
    while (have_rows('group_hero_banner')) : the_row();
        $pattern = get_sub_field('pattern_image');
        $patternAlt = get_sub_field('pattern_image_resp');
        $patternSimple = get_sub_field('pattern_image_simple');
    endwhile;
endif;
?>
<div class="relative z-[40]">
    <?php
    if (have_rows('group_hero_banner')) :
        while (have_rows('group_hero_banner')) : the_row();
        $title = get_sub_field('titre');
        $color = get_sub_field('couleur');
    ?>
	<div class="relative z-[11] pt-20 h-screen bg-center-top bg-cover parallax-bg-image" data-parallax-direction="down" data-parallax-speed="0.3" style="background-image: url('<?php if(!empty($pattern['url'])) { echo $pattern['url']; } ?>'); background-color: <?php if (!empty($color)) { echo $color; } ?>">
		<div class="relative z-10 h-2/5 pattern-bg">
			<div class="absolute inset-0 flex items-center justify-center">
				<h1 class="text-xl3 lg:text-xl4 font-title spanHandwritingCapitalize leading-10 lg:leading-[150%] font-black text-classic-green uppercase text-center"><?php if (!empty($title)) { echo $title; } ?></h1>
			</div>
		</div>
        <?php
        $image_url = get_the_post_thumbnail_url();
        ?>
		<div class="custom-class absolute bottom-0 left-0 right-0 h-3/5 bg-[length:140%] lg:bg-cover bg-center bg-no-repeat bg-white rounded-border-lt" style="background-image: url('<?php if (!empty($image_url)) { echo $image_url; } ?>');"></div>
	</div>
    <?php
        endwhile;
    endif;
    ?>

	<?php
    if (have_rows('group_introduction')) :
        while (have_rows('group_introduction')) : the_row();
        $title = get_sub_field('titre');
        $text = get_sub_field('texte');
        $imageBig = get_sub_field('image_big');
        $imageLittle = get_sub_field('image_little');
	?>
    <div class="relative z-[11] bg-white overflow-hidden flex flex-col lg:flex-row lg:justify-center w-full h-auto px-4 lg:px-16 py-16">
        <div class="flex flex-col mb-12 lg:max-w-[450px] lg:mr-16">
            <div class="flex flex-row justify-evenly mb-12">
                <div class="w-fit pt-4">
                    <h2 class="font-title uppercase text-xl3 lg:text-xl5 font-bold text-classic-green leading-10 lg:leading-[150%] spanHandwritingLowercase spanSize70 spanRight"><?php if (!empty($title)) { echo $title; } ?></h2>
                </div>
                <div class="lg:flex lg:flex-col lg:justify-center">
                    <img class="" src="<?= get_stylesheet_directory_uri() ?>/assets/img/label-landais.png" alt="label 100% landais" width="85" height="121">
                </div>
            </div>
            <div class="text-classic-green text-sm font-medium custom-text-classic">
                <?php if (!empty($text)) { echo $text; } ?>
            </div>
        </div>
        <div class="relative max-w-[500px] mx-auto lg:mx-0 lg:py-[5%]">
            <div class="w-4/5 h-40vh min-h-[240px] min-w-[280px] bg-cover bg-no-repeat bg-center float-right rounded-xl" style="background-image: url('<?php if (!empty($imageBig)) { echo $imageBig['url']; } ?>');"></div>
            <div class="w-2/5 h-20vh min-h-[120px] min-w-[130px] bg-cover bg-no-repeat bg-center float-left rounded-xl -mt-24" style="background-image: url('<?php if (!empty($imageLittle)) { echo $imageLittle['url']; } ?>');"></div>
        </div>
        <img class="hidden lg:block w-[400px] absolute -right-72 top-8 opacity-20 -scale-x-100 z-[-1]" src="<?= $patternSimple['url'] ?>" alt="">
    </div>
    <?php
        endwhile;
    endif;
    ?>
    <?php
    if (have_rows('group_presentation')) :
        while (have_rows('group_presentation')) : the_row();
            $color = get_sub_field('color');
            ?>
            <div
                class="scroll-section-container block relative z-[10] bg-cover bg-fixed bg-center bg-no-repeat"
                style="background-color: <?php if (!empty($color)) { echo $color; } ?>;"
                data-bg-url="<?php if(!empty($pattern['url'])) { echo $pattern['url']; } ?>"
                data-bg-alt-url="<?php if(!empty($patternAlt['url'])) { echo $patternAlt['url']; } ?>">
                <div class="h-full block bg-light-effect bg-cover bg-center bg-no-repeat">
                    <div class="scroll-block-buttons-container absolute z-[10] left-2 top-28 flex flex-col">
                    <?php
                    if (have_rows('repeater_presentation')) :
                        $index = 0;
                        $count = 1;
                        while(have_rows('repeater_presentation')) : the_row();
                        ?>
                        <button class="scroll-block-button cursor-pointer border border-classic-green rounded-full px-3.5 font-handwriting text-l text-classic-green font-regular leading-6 my-2 transition duration-300 hover:text-classic-gold hover:bg-classic-green focus:outline-none" data-index="<?= $index ?>">0<?= $count ?></button>
                        <?php
                        $count++;
                        $index++;
                        endwhile;
                    endif;
                    ?>
                    </div>
                    <div class="scroll-section-inner h-full relative">
                        <?php
                        if (have_rows('repeater_presentation')) :
                            while(have_rows('repeater_presentation')) : the_row();
                                $imageLeft = get_sub_field('image_left');
                                $imageCenter = get_sub_field('image_center');
                                $imageRight = get_sub_field('image_right');
                                $title = get_sub_field('titre');
                                $text = get_sub_field('texte');
                                ?>
                                <div class="scroll-block lg:grid lg:grid-cols-5 lg:grid-rows-2 lg:gap-0 fixed z-[4] left-0 top-0 right-0 px-8 pb-16 pt-36 lg:py-36 2xl:px-40">
                                    <div class="grid-area-1 lg:flex lg:flex-col lg:justify-center">
                                        <h2 class="animated w-fit mx-auto lg:mx-0 px-4 text-center lg:text-left font-title text-[40px] lg:text-[50px] xl:text-[60px] 2xl:text-[80px] leading-10 lg:leading-[60px] font-black text-grey-brown uppercase spanHandwritingLowercase spanSize70 spanSize90 spanCenter" style="transition-delay: 0.3s;"><?php if (!empty($title)) { echo $title; } ?></h2>
                                    </div>
                                    <div class="relative h-[150px] lg:h-[250px] 2xl:h-[350px] max-w-[300px] lg:max-w-[500px] 2xl:max-w-[700px] w-full my-4 mx-auto lg:mt-[10%] xl:mt-[10%] 2xl:mt-[15%] 2xl:mr-[15%] grid-area-2">
                                        <img class="animated absolute w-[130px] lg:w-[190px] 2xl:w-[280px] bottom-0 left-0 z-[3]" style="transition-delay: 0.1s;" src="<?php if (!empty($imageLeft)) { echo $imageLeft['url']; } ?>" alt="<?php if (!empty($imageLeft['alt'])) { echo $imageLeft['alt']; } ?>">
                                        <img class="animated absolute w-[130px] lg:w-[190px] 2xl:w-[280px] top-0 left-[30%] z-[2]" style="transition-delay: 0.5s;" src="<?php if (!empty($imageCenter)) { echo $imageCenter['url']; } ?>" alt="<?php if (!empty($imageCenter['alt'])) { echo $imageCenter['alt']; } ?>">
                                        <img class="animated absolute w-[130px] lg:w-[190px] 2xl:w-[280px] -right-2 -bottom-1 z-[4]" style="transition-delay: 0.9s;" src="<?php if (!empty($imageRight)) { echo $imageRight['url']; } ?>" alt="<?php if (!empty($imageRight['alt'])) { echo $imageRight['alt']; } ?>">
                                    </div>
                                    <div class="animated font-sans text-xs lg:text-sm 2xl:text-base font-medium text-grey-brown px-4 lg:px-6 grid-area-3" style="transition-delay: 0.7s;">
                                        <?php if (!empty($text)) { echo $text; } ?>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <img class="hidden w-[250px]" src="<?= get_stylesheet_directory_uri() ?>/assets/img/patterns/simple-pattern.webp" alt="">
                </div>
            </div
        <?php
        endwhile;
    endif;
    ?>
</div>
