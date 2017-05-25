<html>
<body>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.min.js"></script>
<script type="text/javascript">
    //$(".success").click(function(){
        $.bootstrapGrowl('<?php printf($mensagem); ?>',{
            offset: {from: 'top', amount: 20},
            align: 'center', // ('left', 'right', or 'center')
            type: 'warning',
            delay: 20000,
        });
    //});
</script>
</body>
</html>