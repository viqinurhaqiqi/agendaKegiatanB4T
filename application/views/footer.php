<footer class="footer-distributed">
	<div class="footer-left">
	 	<h3>BALAI BESAR BAHAN</h3><br>
	 	<h3>DAN BARANG TEKNIK</h3><br>
    </div>
    <div class="footer-center">
		<div>
			<span class="glyphicon glyphicon-map-marker" style="color: #A4C639;"></span> 
			<p>Jl. Sangukuriang No. 14 Bandung</p>
		</div><br>
		<div>
			<span class="glyphicon glyphicon-phone " style="color: #A4C639;"></span>
           	<p>+62 22 250 4088, +62 22 251 0682, +62 22 250 4828</p>
        </div><br>
        <div>
			<span class="glyphicon glyphicon-envelope" style="color: #A4C639;"></span>
           	<p>informasi@b4t.go.id, b4t@b4t.go.id </p>
        </div><br>
    </div>
    <div class="footer-right">
    	<p class="footer-company-about">
        <span>Media Sosial B4T</span>
        </p>
    	<div class="footer-icons">
            <a href="https://www.facebook.com/B4T.Kemenperin/" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/B4T_Bandung" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/b4t_/" target="_blank"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
</footer>

<script>
	$(function() {
		$( "#tgl" ).datepicker();
	});

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			eventLimit: true, // allow "more" link when too many events
		});
		
	});

$(document).ready(function() {
    $('#example').DataTable( {
        "scrollY": 200,
        "scrollX": true
    } );
} );
</script>

</body>
</html>
