<div class="paddedBottom">
  <div class="pageWidth centerText">
    <h2>Earth Tones</h2>
  </div>
  <div class="pageWidth colorGrid wrappedFlexContainer">
  <?php if (get_field('earth_color_1')): ?>
    <div class="perfundo">
    <a class="perfundo__link" href="#earth-img1">
      <?php
      $imageID = get_field('earth_color_1')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
      ?>
    </a>
    <div id="earth-img1" class="perfundo__overlay fadeIn">
      <figure class="perfundo__content perfundo__figure">
        <?php
        $imageID = get_field('earth_color_1')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
        ?>
      </figure>
      <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
        <?php get_template_part('/inc/lightbox/close'); ?>
      </a>
      <a class="perfundo__next perfundo__control" href="#earth-img2">
        <?php get_template_part('/inc/lightbox/next'); ?>
      </a>
    </div>
  </div>
  <?php endif;?>
  <?php if (get_field('earth_color_2')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#earth-img2">
    <?php
    $imageID = get_field('earth_color_2')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="earth-img2" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('earth_color_2')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#earth-img3">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#earth-img1">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('earth_color_3')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#earth-img3">
    <?php
    $imageID = get_field('earth_color_3')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="earth-img3" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('earth_color_3')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#earth-img4">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#earth-img2">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('earth_color_4')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#earth-img4">
    <?php
    $imageID = get_field('earth_color_4')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="earth-img4" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('earth_color_4')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#earth-img5">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#earth-img3">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('earth_color_5')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#earth-img5">
    <?php
    $imageID = get_field('earth_color_5')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="earth-img5" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('earth_color_5')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#earth-img6">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#earth-img4">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('earth_color_6')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#earth-img6">
    <?php
    $imageID = get_field('earth_color_6')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="earth-img6" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('earth_color_6')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#earth-img7">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#earth-img5">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('earth_color_7')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#earth-img7">
    <?php
    $imageID = get_field('earth_color_7')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="earth-img7" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('earth_color_7')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#earth-img8">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#earth-img6">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('earth_color_8')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#earth-img8">
    <?php
    $imageID = get_field('earth_color_8')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="earth-img8" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('earth_color_8')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#earth-img9">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#earth-img7">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('earth_color_9')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#earth-img9">
    <?php
    $imageID = get_field('earth_color_9')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="earth-img9" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('earth_color_9')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#earth-img10">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#earth-img8">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('earth_color_10')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#earth-img10">
    <?php
    $imageID = get_field('earth_color_10')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="earth-img10" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('earth_color_10')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__next perfundo__control" href="#earth-img11">
      <?php get_template_part('/inc/lightbox/next'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#earth-img9">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  <?php if (get_field('earth_color_11')): ?>
    <div class="perfundo">
      <a class="perfundo__link" href="#earth-img11">
        <?php
        $imageID = get_field('earth_color_11')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
        ?>
      </a>
    <div id="earth-img11" class="perfundo__overlay fadeIn">
      <figure class="perfundo__content perfundo__figure">
        <?php
        $imageID = get_field('earth_color_11')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
        ?>
      </figure>
      <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
        <?php get_template_part('/inc/lightbox/close'); ?>
      </a>
      <a class="perfundo__next perfundo__control" href="#earth-img12">
        <?php get_template_part('/inc/lightbox/next'); ?>
      </a>
      <a class="perfundo__prev perfundo__control" href="#earth-img10">
        <?php get_template_part('/inc/lightbox/prev'); ?>
      </a>
    </div>
    </div>
  <?php endif;?>
  <?php if (get_field('earth_color_12')): ?>
    <div class="perfundo">
      <a class="perfundo__link" href="#earth-img12">
        <?php
        $imageID = get_field('earth_color_12')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
        ?>
      </a>
    <div id="earth-img12" class="perfundo__overlay fadeIn">
      <figure class="perfundo__content perfundo__figure">
        <?php
        $imageID = get_field('earth_color_12')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
        ?>
      </figure>
      <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
        <?php get_template_part('/inc/lightbox/close'); ?>
      </a>
      <a class="perfundo__next perfundo__control" href="#earth-img13">
        <?php get_template_part('/inc/lightbox/next'); ?>
      </a>
      <a class="perfundo__prev perfundo__control" href="#earth-img11">
        <?php get_template_part('/inc/lightbox/prev'); ?>
      </a>
    </div>
    </div>
  <?php endif;?>
  <?php if (get_field('earth_color_13')): ?>
    <div class="perfundo">
      <a class="perfundo__link" href="#earth-img13">
        <?php
        $imageID = get_field('earth_color_13')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
        ?>
      </a>
    <div id="earth-img13" class="perfundo__overlay fadeIn">
      <figure class="perfundo__content perfundo__figure">
        <?php
        $imageID = get_field('earth_color_13')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
        ?>
      </figure>
      <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
        <?php get_template_part('/inc/lightbox/close'); ?>
      </a>
      <a class="perfundo__next perfundo__control" href="#earth-img14">
        <?php get_template_part('/inc/lightbox/next'); ?>
      </a>
      <a class="perfundo__prev perfundo__control" href="#earth-img12">
        <?php get_template_part('/inc/lightbox/prev'); ?>
      </a>
    </div>
    </div>
  <?php endif;?>
  <?php if (get_field('earth_color_14')): ?>
    <div class="perfundo">
      <a class="perfundo__link" href="#earth-img14">
        <?php
        $imageID = get_field('earth_color_14')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
        ?>
      </a>
    <div id="earth-img14" class="perfundo__overlay fadeIn">
      <figure class="perfundo__content perfundo__figure">
        <?php
        $imageID = get_field('earth_color_14')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
        ?>
      </figure>
      <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
        <?php get_template_part('/inc/lightbox/close'); ?>
      </a>
      <a class="perfundo__next perfundo__control" href="#earth-img15">
        <?php get_template_part('/inc/lightbox/next'); ?>
      </a>
      <a class="perfundo__prev perfundo__control" href="#earth-img13">
        <?php get_template_part('/inc/lightbox/prev'); ?>
      </a>
    </div>
    </div>
  <?php endif;?>
  <?php if (get_field('earth_color_15')): ?>
    <div class="perfundo">
      <a class="perfundo__link" href="#earth-img15">
        <?php
        $imageID = get_field('earth_color_15')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
        ?>
      </a>
    <div id="earth-img15" class="perfundo__overlay fadeIn">
      <figure class="perfundo__content perfundo__figure">
        <?php
        $imageID = get_field('earth_color_15')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
        ?>
      </figure>
      <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
        <?php get_template_part('/inc/lightbox/close'); ?>
      </a>
      <a class="perfundo__next perfundo__control" href="#earth-img16">
        <?php get_template_part('/inc/lightbox/next'); ?>
      </a>
      <a class="perfundo__prev perfundo__control" href="#earth-img14">
        <?php get_template_part('/inc/lightbox/prev'); ?>
      </a>
    </div>
    </div>
  <?php endif;?>
  <?php if (get_field('earth_color_16')): ?>
    <div class="perfundo">
      <a class="perfundo__link" href="#earth-img16">
        <?php
        $imageID = get_field('earth_color_16')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
        ?>
      </a>
    <div id="earth-img16" class="perfundo__overlay fadeIn">
      <figure class="perfundo__content perfundo__figure">
        <?php
        $imageID = get_field('earth_color_16')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
        ?>
      </figure>
      <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
        <?php get_template_part('/inc/lightbox/close'); ?>
      </a>
      <a class="perfundo__next perfundo__control" href="#earth-img17">
        <?php get_template_part('/inc/lightbox/next'); ?>
      </a>
      <a class="perfundo__prev perfundo__control" href="#earth-img15">
        <?php get_template_part('/inc/lightbox/prev'); ?>
      </a>
    </div>
    </div>
  <?php endif;?>
  <?php if (get_field('earth_color_17')): ?>
    <div class="perfundo">
      <a class="perfundo__link" href="#earth-img17">
        <?php
        $imageID = get_field('earth_color_17')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
        ?>
      </a>
    <div id="earth-img17" class="perfundo__overlay fadeIn">
      <figure class="perfundo__content perfundo__figure">
        <?php
        $imageID = get_field('earth_color_17')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
        ?>
      </figure>
      <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
        <?php get_template_part('/inc/lightbox/close'); ?>
      </a>
      <a class="perfundo__next perfundo__control" href="#earth-img18">
        <?php get_template_part('/inc/lightbox/next'); ?>
      </a>
      <a class="perfundo__prev perfundo__control" href="#earth-img16">
        <?php get_template_part('/inc/lightbox/prev'); ?>
      </a>
    </div>
    </div>
  <?php endif;?>
  <?php if (get_field('earth_color_18')): ?>
    <div class="perfundo">
      <a class="perfundo__link" href="#earth-img18">
        <?php
        $imageID = get_field('earth_color_18')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
        ?>
      </a>
    <div id="earth-img18" class="perfundo__overlay fadeIn">
      <figure class="perfundo__content perfundo__figure">
        <?php
        $imageID = get_field('earth_color_18')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
        ?>
      </figure>
      <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
        <?php get_template_part('/inc/lightbox/close'); ?>
      </a>
      <a class="perfundo__next perfundo__control" href="#earth-img19">
        <?php get_template_part('/inc/lightbox/next'); ?>
      </a>
      <a class="perfundo__prev perfundo__control" href="#earth-img17">
        <?php get_template_part('/inc/lightbox/prev'); ?>
      </a>
    </div>
    </div>
  <?php endif;?>
  <?php if (get_field('earth_color_19')): ?>
    <div class="perfundo">
      <a class="perfundo__link" href="#earth-img11">
        <?php
        $imageID = get_field('earth_color_19')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
        ?>
      </a>
    <div id="earth-img19" class="perfundo__overlay fadeIn">
      <figure class="perfundo__content perfundo__figure">
        <?php
        $imageID = get_field('earth_color_19')['ID'];
        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
        ?>
      </figure>
      <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
        <?php get_template_part('/inc/lightbox/close'); ?>
      </a>
      <a class="perfundo__next perfundo__control" href="#earth-img20">
        <?php get_template_part('/inc/lightbox/next'); ?>
      </a>
      <a class="perfundo__prev perfundo__control" href="#earth-img18">
        <?php get_template_part('/inc/lightbox/prev'); ?>
      </a>
    </div>
    </div>
  <?php endif;?>
  <?php if (get_field('earth_color_20')): ?>
  <div class="perfundo">
  <a class="perfundo__link" href="#earth-img20">
    <?php
    $imageID = get_field('earth_color_20')['ID'];
    echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image perfundo__thumbnail', 'data-sizes' => 'auto' ) );
    ?>
  </a>
  <div id="earth-img20" class="perfundo__overlay fadeIn">
    <figure class="perfundo__content perfundo__figure">
      <?php
      $imageID = get_field('earth_color_20')['ID'];
      echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
      ?>
    </figure>
    <a href="#perfundo-untarget" class="perfundo__close perfundo__control">
      <?php get_template_part('/inc/lightbox/close'); ?>
    </a>
    <a class="perfundo__prev perfundo__control" href="#earth-img19">
      <?php get_template_part('/inc/lightbox/prev'); ?>
    </a>
  </div>
  </div>
  <?php endif;?>
  </div>
</div>
