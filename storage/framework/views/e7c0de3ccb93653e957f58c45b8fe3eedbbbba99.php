<?php $__env->startSection('content'); ?>
<section class="headinner" style="background: url(<?php echo e(asset('images/83.jpg')); ?>) 50% 0;">
    <div class="container">
        <h3>People</h3>
        <div class="breadcom">
            <a href="">Home</a><span> > </span> <a href="">Sign Up</a>
        </div>
    </div>
</section>

<section class="people padding">
    <div class="container">
        <div class="searchmem">
            <h3>Browse All Members</h3>

            <div class="row">
                
                <div class="col-lg-12 col-xs-12">
                    <div class="peoplephp row">
                                <div class="useradminpeople col-lg-2 col-sm-3 col-xs-12">
                                    <div class="imageset">
                                        
                                    </div>

                                    <div class="admintile">
                                        <a href="memberdetail.php?mem_id="></a><a
                                                href="membervideo.php?mem_id= " style="">Video</a>
                                    </div>
                                </div>

                        <ul class="pagination">

                        </ul>

                    </div>
                </div>


            </div>

        </div>
    </div>
</section>


<section>
    <div class="newesletter">

    </div>
</section>
<script type="text/javascript">
  $('#myCarousel').carousel({
    interval: false
  });
  $('#carousel-thumbs').carousel({
    interval: false
  });

  // handles the carousel thumbnails
  // https://stackoverflow.com/questions/25752187/bootstrap-carousel-with-thumbnails-multiple-carousel
  $('[id^=carousel-selector-]').click(function () {
    var id_selector = $(this).attr('id');
    var id = parseInt(id_selector.substr(id_selector.lastIndexOf('-') + 1));
    $('#myCarousel').carousel(id);
  });
  // when the carousel slides, auto update
  $('#myCarousel').on('slide.bs.carousel', function (e) {
    var id = parseInt($(e.relatedTarget).attr('data-slide-number'));
    $('[id^=carousel-selector-]').removeClass('selected');
    $('[id=carousel-selector-' + id + ']').addClass('selected');
  });
  // when user swipes, go next or previous
  $('#myCarousel').swipe({
    fallbackToMouseEvents: true,
    swipeLeft: function (e) {
      $('#myCarousel').carousel('next');
    },
    swipeRight: function (e) {
      $('#myCarousel').carousel('prev');
    },
    allowPageScroll: 'vertical',
    preventDefaultEvents: false,
    threshold: 75
  });
  /*
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });
  */

  $('#myCarousel .carousel-item img').on('click', function (e) {
    var src = $(e.target).attr('data-remote');
    if (src) $(this).ekkoLightbox();
  });
</script>
<?php echo $__env->make('include.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\harish\projects\germanshep\resources\views/people.blade.php ENDPATH**/ ?>