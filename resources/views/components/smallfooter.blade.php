
</section>
    <footer class="bg-dark py-4 mt-5 tf-footer">
    <div class="container text-white">
        <div class="row">
          <div class="col-md-5">
            <div class="h2 mb-4">SMAC-e-DOC</div>
            <p class="mb-3">smacedoc.ensah@gmail.com</p>
            <p>+212 6 12432165</p>
          </div>
          <div class="col-md-4">
            <div class="h6 pb-2">Suivez-Nous</div>
            <ul>
              <li class="mb-1"><a class="da-social-link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i><span class="ml-2">Twitter</span></a></li>
              <li class="mb-1"><a class="da-social-link" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i><span class="ml-2">Facebook</span></a></li>
              <li class="mb-1"><a class="da-social-link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i><span class="ml-2">Instagram</span></a></li>
              <li class="mb-1"><a class="da-social-link" href="#"><i class="fab fa-youtube" aria-hidden="true"></i><span class="ml-2">Youtube</span></a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <div class="h6 pb-4">Copyright</div>
          </div>
        </div>
      </div>
    </footer>
    <script src="/js/scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="/js/scripts/parallax.min.js?ver=1.2.0"></script>
    <script src="/js/scripts/main.js?ver=1.2.0"></script>
 
    <script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('live_search.search') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>
<script src="tabledesign/jquery/jquery-3.2.1.min.js"></script>
	<script src="tabledesign/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
</html>