<?php
/*
Template Name: underscore_lauching_theme
*/
?>
<?php get_header(); ?>
<main>
    <?php
    $id=14;
    $date_release = get_post_meta($id, 'Date_Release')[0];
    $release_day = get_post_meta($id, 'Date_Release')[1];
    $header = get_post_meta($id, 'Header')[0];
    $text = get_post_meta($id, 'Text')[0];
    $release = new DateTime($date_release);
    $now = current_time('mysql');
    $date_now = new DateTime($now);
    $diff = $date_now->diff($release);

    ?>

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1><?php echo $header ?></h1>
            <h2 id="time"><?php echo $diff->format('%D Days/%h H/%i Min:%s Sec'); ?></h2>
            <!-- <h2><?php // echo $release_day ?></h2> -->
            <h2><?php echo $text ?></h2>

            <p>Codi - High quality Bootstrap HTML5 Coming Soon Landing Page Template <br /> Come with fully responsive layout, Cool feature, and Clean design.</p>

            <button type="button" class="btn notify" data-toggle="modal" data-target="#exampleModal">
                Notify me
            </button>
            <a href="http://codincamp.fr/promos/" type="input" class="btn about">
                About us
            </a>
            <div class="col-12 text-center">

            <a href="https://www.facebook.com/codincamp/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/codincamp?lang=fr"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/?hl=fr"><i class="fab fa-instagram"></i></a>
            <a href="https://plus.google.com/u/0/discover"><i class="fab fa-google-plus-g"></i></a>
            </div>
            <small>Template Handcrafted by <a href="http://codincamp.fr/">Codi'n Camp</a></small>
        </div>
    </div>
</div>
</main>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" id="recipient-name">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Send email</button>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
