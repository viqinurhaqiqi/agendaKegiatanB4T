<script>

    $(document).ready(function() {

        $('#calendar').fullCalendar({
            editable: true,
            eventLimit: true, // allow "more" link when too many events

        });
        
    });

    $(document).ready(function(){
        $('.data').DataTable();
    });

    $(document).ready(function(){
        $(".push_menu").click(function(){
             $(".wrapper").toggleClass("active");
        });
        
    });

    $(document).ready(function(){
        $(".menu li a").click(function(){
            //$(this).parent('li:has(ul)').find('ul').show();
            //$(this).parent('li:has(ul)').children('ul').toggle(300);
            
            $(this).parent().children('ul.parent').toggle(300);
        });
    });    


    $(document).on('click', '#close-preview', function(){ 
        $('.image-preview').popover('hide');
        // Hover befor close the preview
        $('.image-preview').hover(
            function () {
               $('.image-preview').popover('show');
            }, 
             function () {
               $('.image-preview').popover('hide');
            }
        );    
    });

    $(function() {
        $( "#tanggal" ).datepicker({
            dateFormat: 'yy-mm-dd'
        });

    });

    $(function() {
        $( "#tanggalAkhir" ).datepicker({
            dateFormat: 'yy-mm-dd'
        });

    });

    $(function() {
        // Create the close button
        var closebtn = $('<button/>', {
            type:"button",
            text: 'x',
            id: 'close-preview',
            style: 'font-size: initial;',
        });
        closebtn.attr("class","close pull-right");
        // Set the popover default content
        $('.image-preview').popover({
            trigger:'manual',
            html:true,
            title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
            content: "There's no image",
            placement:'bottom'
        });
        // Clear event
        $('.image-preview-clear').click(function(){
            $('.image-preview').attr("data-content","").popover('hide');
            $('.image-preview-filename').val("");
            $('.image-preview-clear').hide();
            $('.image-preview-input input:file').val("");
            $(".image-preview-input-title").text("Browse"); 
        }); 
        // Create the preview image
        $(".image-preview-input input:file").change(function (){     
            var img = $('<img/>', {
                id: 'dynamic',
                width:250,
                height:200
            });      
            var file = this.files[0];
            var reader = new FileReader();
            // Set preview image into the popover data-content
            reader.onload = function (e) {
                $(".image-preview-input-title").text("Change");
                $(".image-preview-clear").show();
                $(".image-preview-filename").val(file.name);            
                img.attr('src', e.target.result);
                $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
            }        
            reader.readAsDataURL(file);
        });  
    });

    window.onload = function() { jam(); }

     function jam() {
      var e = document.getElementById('jam'),
      d = new Date(), h, m, s;
      h = d.getHours();
      m = set(d.getMinutes());
      s = set(d.getSeconds());

      e.innerHTML = h +':'+ m +':'+ s;

      setTimeout('jam()', 1000);
     }

     function set(e) {
      e = e < 10 ? '0'+ e : e;
      return e;
     }
     
</script>

</body>

</html>