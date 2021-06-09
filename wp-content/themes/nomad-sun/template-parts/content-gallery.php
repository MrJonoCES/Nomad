<!-- this tag wraps around our gallery and contains it -->
<div class="container flex flex-wrap center ph4-l">
    <?php $images = get_sub_field('gallery'); ?>
    <?php foreach($images as $image) : ?>
        
        <!-- here we get an image by its id and tell it we want the full size and style it with tachyons -->
        <!-- here we have added an ACF  to our attachments (images) which adds a class name to control the display width -->
        <div class="gallery-image ph3 mb4 <?php the_field('image_width', $image['id']) ?>">
            <!-- here we get each image by its id -->
            <?php echo wp_get_attachment_image($image['id'], 'full'); ?>

            <!-- here we assign our caption to a variable called $caption -->
            <?php $caption = wp_get_attachment_caption($image['id']); ?>

            <!-- if caption is not empty we render it on to the page -->
            <?php if(!empty($caption)) : ?>
                <!-- archivo regular at 50% opacity -->
                <p class="caption archivo-regular f5 o-50 pt3 mv0">
                    <!-- grabbing the catpion by the image -->
                    <?php echo $caption; ?>
                </p>
            <?php endif; ?>
        </div>

    <?php endforeach; ?>
</div>