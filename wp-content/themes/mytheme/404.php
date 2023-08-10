<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="notfound">
                <div class="notfound">
                    <div class="notfound-404">
                        <h3>Page not found</h3>
                        <h1><span>4</span><span>0</span><span>4</span></h1>
                    </div>
                    <h2>It looks like nothing was found at this location.</h2>
                    <button><a href="<?php echo home_url(); ?>">go back to homepage</a></button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>