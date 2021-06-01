<?php
/**
 * Template Name: Page Template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package LGX_Event_Point
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main i">
            <?php if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content','page');
                endwhile;
            else :
                get_template_part( 'template-parts/content', 'none' );
            endif; ?>



<div class="container">        	
                    <div class="four columns" style="width: 1200px;">
					
					<div role="form" class="wpcf7" id="wpcf7-f2272-o1" lang="pl-PL" dir="ltr">
                        <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                            <form action="/#wpcf7-f2272-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="2272">
                                    <input type="hidden" name="_wpcf7_version" value="5.3.2">
                                    <input type="hidden" name="_wpcf7_locale" value="pl_PL">
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2272-o1">
                                    <input type="hidden" name="_wpcf7_container_post" value="0">
                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                    <input type="hidden" name="_wpcf7_recaptcha_response" value="">
                                </div>
                                <div style="width:25%; float:left; min-height:1px;">
                                </div>
                                <div style="width:50%; float:left; min-height:1px;">
                                <h3 style="color:#fff!important; text-align:center;">BĄDŹ NA BIEŻĄCO – zapisz się do newslettera
                                </h3>
                                <p><label>     <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Adres email"></span> </label></p>
                                <div style="max-height: 25px; width:100%; float:left; color:#fff; padding:0px 0 8px 0; font-size:11px; line-height:12px; text-align:justify; font-weight:300; font-family:Arial; margin-bottom:0"><span class="wpcf7-form-control-wrap acceptance-149"><span class="wpcf7-form-control wpcf7-acceptance"><span class="wpcf7-list-item"><input type="checkbox" name="acceptance-149" value="1" aria-invalid="false" checked="checked"></span></span></span> Wyrażam zgodę na informowanie o wydarzeniach organizowanych przez Innovative Group sp. z o.o.</div>
                                <div style="max-height: 25px; width:100%; float:left; color:#fff; padding:8px 0; font-size:11px; line-height:12px; text-align:justify; font-weight:300; font-family:Arial; margin-bottom:0"><span class="wpcf7-form-control-wrap acceptance-155"><span class="wpcf7-form-control wpcf7-acceptance"><span class="wpcf7-list-item"><input type="checkbox" name="acceptance-155" value="1" aria-invalid="false" checked="checked"></span></span></span> Oświadczam, że zapoznałem się z <a style="color:#fff;" target="_blank" href="/polityka-prywatnosci">polityką prywatności</a> i akceptuję jej treść.</div>
                                <div style="width:100%; float:left; color:#fff; padding:8px 0; font-size:11px; line-height:12px; text-align:justify; font-weight:300; font-family:Arial">Administratorem danych jest Innovative Group sp. z o.o. z siedzibą w Warszawie, ul. Ryżowa 49. Dane przetwarzane są w celu zgodnym z treścią udzielonej zgody, do czasu jej cofnięcia. Innovative Group sp. z o.o. ma prawo przetwarzać informacje o tym, że udzieliłaś/eś zgody oraz kiedy została cofnięta, przez okres przewidziany przepisami prawa, na potrzeby rozstrzygania ewentualnych sporów i dochodzenia roszczeń. Masz prawo cofnąć zgodę w każdym czasie, dostępu do danych, sprostowania, usunięcia lub ograniczenia przetwarzania. Masz prawo sprzeciwu, prawo wniesienia skargi do organu nadzorczego lub przeniesienia danych. Informacje handlowe (oferty oraz informacje o usługach) będą przesyłane przy użyciu telefonu lub poczty e-mail, do czasu cofnięcia zgody.<p></p>
                                </div>
                                <p><input type="submit" value="ZAPISUJĘ SIĘ" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span><span class="ajax-loader" style="display: none;"></span>
                                </p></div>
                                <div style="width:25%; float:left; min-height:1px;"></div>
                                <div class="wpcf7-response-output" aria-hidden="true"></div><input type="hidden" name="emQr-v" value="CYPg2T"><input type="hidden" name="ebNkiXHzIn" value="1BKXVQFMI6">
                            <input type="hidden" name="QO-pgscyrSafN" value="F450Z82SEnWKd"><input type="hidden" name="TsJSQgywUvi" value="r1g7G4Y8S_q"><input type="hidden" name="mIUwjAnZYFgL" value="mvjgO8k*Nhrc"><input type="hidden" name="VXbTtKFfqzdYokl" value="m_U9FSKYI8lfi]u"></form>
                        </div>
                    
                       


                    </div>
                   
                    <!-- Widget#1 -->
                    
     
                    <!-- Widget#1 -->
                </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer();
