<?php
/**
 * The template for displaying Full Width pages.
 *
 * Template Name: Quote
 *
 * @package Professional
 */

get_header(); 

while ( have_posts() ) :
the_post();
?>
<style>
.err{color:#F00;} .inp_err{border: 1px solid #F00 !important;}
.btn, body:not(.touch) .btn:focus {border-radius:0 !important;padding:10px 26px !important;line-height:2 !important;}
</style>

    <!--//section-->
    <section class="" id="page-details" style="background-color: #f4f4f4;">
        <div class="space-medium">
            <div class="container-fulid">
                <div class="row">
                    <div class="col-xl-7 col-md-6  support_img" style=" background-image: url(<?php echo get_template_directory_uri(); ?>/images/medic.jpg);">
                        <div class="l-gradient-trans-bg"></div>
                    </div>
                    <!-- /.feature-sections -->
                    <div class="col-xl-4 col-md-5 mt30">
                        <form id="quote_form" class="quote_form" action="" method="POST">
                            <!-- service-form -->
                            <div class="service-form">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb10 ">
                                        <h3>Obtenez les meilleurs services abordables</h3>
                                        <div class="h-decor"></div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 " id="fname_holder">
                                        <div class="form-group service-form-group">
                                            <label class="control-label " for="name">Prénom</label>
                                            <input id="f_name" name="f_name" type="text" placeholder="" class="form-control required" minlength="3">
                                            <div class="form-icon"><i class="fa fa-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  " id="sname_holder">
                                        <div class="form-group service-form-group">
                                            <label class="control-label " for="name">Nom de famille</label>
                                            <input id="s_name" name="s_name"  type="text" placeholder="" class="form-control required">
                                            <div class="form-icon"><i class="fa fa-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " id="email_holder">
                                        <div class="form-group service-form-group">
                                            <label class="control-label " for="email">Adress email</label>
                                            <input id="email" name="email" type="text" placeholder="" class="form-control required">
                                            <div class="form-icon"><i class="fa fa-envelope"></i></div>
                                        </div>
										<div id="validEmail"></div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " id="tel_holder">
                                        <div class="form-group service-form-group">
                                            <label class="control-label " for="phone">Tel</label>
                                            <input id="tel" name="tel"  type="tel" placeholder="" class="form-control required">
                                            <div class="form-icon"><i class="fa fa-phone"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " id="address_holder">
                                        <div class="form-group service-form-group">
                                            <label class="control-label " for="website">Adresse</label>
                                            <input id="address" name="address"  type="text" placeholder="" class="form-control required">
                                            <div class="form-icon"><i class="fa fa-link"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " id="request_holder">
                                        <div class="form-group">
                                            <label class="control-label " for="textarea">Demande</label>
                                            <textarea class="form-control required" id="request" name="request" rows="3" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <button id="qbtn" type="submit" name="singlebutton" class="btn btn-primary btn-block mb10 mt-2">send message</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- /.service-form -->
                    </div><div
                </div>
            </div>
        </div>
    </section>

</div>

<?php endwhile; ?>
<?php get_footer(); ?>

