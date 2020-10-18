</div>
<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jsedit.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/summernote/summernote.min.js"></script>
<script>
        $(document).ready(function(){

            $('.summernote').summernote();
            $('.edisienote').summernote();
            $('.edisi').summernote();

       });
        var edit = function() {
            $('.click2edit').summernote({focus: true});
        };
        var save = function() {
            var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
            $('.click2edit').destroy();
        };
    </script>
</body>
</html>
