<div class="mkdf-row-grid-section-wrapper mkdf-parallax-row-holder mkdf-content-aligment-left"
     data-parallax-bg-image=""
     data-parallax-bg-speed="0"
     style="background-image: url(); background-position: 50% 0px;">
    <div class="mkdf-row-grid-section">
        <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex">
            <div class="wpb_column vc_col-xs-12">
                <ul class="events">
                    <?php foreach ($events['data'] as $event): ?>
                    <li class="event <?php echo $event['past'] ? 'past' : ''?>"
                    style="background-image:url('<?php echo $event['cover']['source']?>')">
                        <a target="_blank" href="<?php printf('https://www.facebook.com/events/%s',$event['id'])?>">
                        <div class="overlay">
                            <p>
                                <strong>
                                <span class="title"><?php echo $event['name'] ?></span>
                                <span class="start-time"><?php echo $event['start_formatted'] ?></span>
                                </strong>
                            </p>
                            <p class="description"><?php echo $event['description'] ?></p>
                        </div>
                        </a>
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
</div>

