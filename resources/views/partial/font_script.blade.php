
  <!-- Integrated important scripts here -->
	<script src="{{asset('js/jquery.v1.12.4.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery-core-plugins.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
	<!-- Revolution Slider -->
	<script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/slider_v1.js')}}"></script>
	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
	<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

<script>
	$("#success").hide();
  $("#failed").hide();
	$('#getJSON').click(function(){
	$("#myModal").modal();		
$.post("contactmail",
  {
    _token: $('input[name=_token]').val(),
    name: $('input[name=name]').val(),
	phone: $('input[name=phone]').val(),
	email: $('input[name=email]').val(),
	body: $('textarea[name=body]').val(),
  },
  function(data, status){
$("#myModal").modal("hide");
if(status == "success")
  {
$("#success").show();
 }else{
$("#failed").show();
  }
  alert(status);
  //window.location.reload();
   });
}); 
</script>