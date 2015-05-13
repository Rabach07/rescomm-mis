<html>
	<head>
		<!-- jQueryUI -->
	    <link href="<?=base_url('public/plugins/jQueryUI/jquery-ui.min.css');?>" rel="stylesheet" type="text/css" />
	    <link href="<?=base_url('public/plugins/jQueryUI/jquery-ui.structure.min.css');?>" rel="stylesheet" type="text/css" />
	    <link href="<?=base_url('public/plugins/jQueryUI/jquery-ui.theme.min.css');?>" rel="stylesheet" type="text/css" />

		<!-- jQuery -->
	    <script src="<?=base_url('public/plugins/jQuery/jQuery-2.1.4.min.js');?>"></script>
	    <!-- jQueryUI -->
	    <script src="<?=base_url('public/plugins/jQueryUI/jquery-ui.min.js');?>" type="text/javascript"></script>

		<script type="text/javascript">
			$(function(){
			  	var csrf_token = '<?=$this->security->get_csrf_hash();?>';

				$("#tambah-pen").autocomplete({
				    /*source: function(request, response) {
				        $.ajax({
				            url: "<?=site_url('penelitian/getlist')?>",
				            data: { term: $("#tambah-pen").val(), csrf_test_name: csrf_token },
				            dataType: "json",
				            type: "POST",
				            success: function(data){
				              //if(data.response === 'true'){
				                var resp = $.map(data,function(obj){
				                  return obj.tag;
				                });

				                response(resp);
				              //}
				            }
				        });
				    },
				    minLength: 2*/
				    source: "<?=site_url('penelitian/getlist')?>"
				});
			});
		</script>
	</head>
	<body>
		<input type="text" id="tambah-pen" name="tambah-pen" />
	</body>
</html>