<script type="text/javascript">
 $("#enviar").click(function (e) {
        $("#nombre").html('');
        $("#emailErrors").html('');
        $("#subjectErrors").html('');
        $("#telefonoErrors").html('');
        $("#mensajeErrors").html('');
        $("#capchaErrors").html('');
        $("#mensajeRespuesta").html('');
        e.preventDefault();

         var response = grecaptcha.getResponse();
        if(response.length == 0){
            $("#capchaErrors").html('Check captcha');
         
            } else {
                    $("#nuevaCarga").removeAttr("style");
                    var data = $('#formEnvio').serialize();
                   $.ajax({
                             url:'{{ route('contacto') }}',
                                 type: 'POST',
                                 data:data,
                             success: function(data) {
                                 var html1=" <div class='alert bg-4'><span>your request was sent correctly, in a few moments we will communicate</span>"+
                                                "<i class='fa fa-times-circle-o'></i>"+
                                              "</div> ";
                                     $("#mensajeRespuesta").append(html1);
                                     $("#nuevaCarga").css("display", "none");
                            },
                             error:function(data){
                                var errors = data.responseJSON.errors;

                                    $("#nombre").html(errors.name);
                                    $("#emailErrors").html(errors.email);
                                    $("#subjectErrors").html(errors.subject);
                                    $("#telefonoErrors").html(errors.telefono);
                                    $("#mensajeErrors").html(errors.mensaje);
                                    $("#nuevaCarga").css("display", "none");
                                     var html1=" <div class='alert bg-5'><span>Check the data entered</span>"+
                                                "<i class='fa fa-times-circle-o'></i>"+
                                              "</div> ";
                                     $("#mensajeRespuesta").append(html1);
                                }
                                      
                        });
                }

       
    });
</script>