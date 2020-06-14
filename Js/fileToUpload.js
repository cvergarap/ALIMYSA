<script type="text/javascript" >
$(document).ready(function() {             
            $('#cargararchivo').live('change', function()            { 
                       $("#preview").html('');
                $("#preview").html('<img src="loader.gif" alt="Cargando...."/>');
            $("#imageform").ajaxForm({
                        target: '#preview'
            }).submit();

            });
        }); 
</script>