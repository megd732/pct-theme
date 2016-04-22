<section class="sidebar">
   <a name="subscribe"></a>
   <div class="container">
     <div class="row">
       <div class="twelve columns">
<div id="widgetized-area">

   <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('widgetized-area')) : else : ?>

											   <div class="pre-widget">
											      <p><strong>Widgetized Area</strong></p>
											      <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
											   </div>

											   <?php endif; ?>

</div>
</div>

     </div>
   </div>
</section>