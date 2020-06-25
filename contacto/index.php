<?php
require_once('../include/header.php');
require_once('../include/navbar.php');
?>
<br>
<div class="text-center">
    <h1 class="main-title">#Contacto</h1>
</div>
<br>
<div class="container">
    <div>
        Te invitamos a completar nuestro formulario de contacto para hacernos llegar cualquier consulta o inquietud. Prometemos contestar a la brevedad.
        <div class="p-2"></div>
        <strong>¡Gracias por tu mensaje!.</strong>
    </div>
    <div class="p-2"></div>
    <div class="row">
        <div class="col-sm-6 mb-2 my-auto border border-secondary rounded p-4">
            <form id="sendmail" class="form" action="sendmail.php" method="POST" role="form">
                <div class="form-group">
                    <label class="form-label" for="name">Nombre y Apellido</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" tabindex="1" minlength="3" required>
                </div>                            
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" tabindex="2" minlength="3" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="phone">Teléfono</label>
                    <input type="number" step="1" min="0" class="form-control" id="phone" name="phone" placeholder="Teléfono" tabindex="3" title="Solo números." required>
                </div>                            
                <div class="form-group">
                    <label class="form-label" for="subject">Asunto</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Asunto" tabindex="4" minlength="3" required>
                </div>                            
                <div class="form-group">
                    <label class="form-label" for="message">Mensaje</label>
                    <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Mensaje..." tabindex="5" required></textarea>                                 
                </div>
                <div class="form-group">
                    <br>
                    <button type="submit" class="btn btn-outline-dark btn-block"><i class="far fa-paper-plane"></i> Enviar</button>
                </div>
            </form>
            <script>
				$(document).ready(function() {
					$("#sendmail").on('submit', function(event) {
						event.preventDefault(); 
						var formData = $(this).serialize();
						$.ajax({
							type: 'POST',
							url: 'sendmail.php',
							dataType: "json",
							data: formData,
							success: function(response) { 
								alert(response.success); 
							},
							error: function(xhr, status, error){
								console.log(xhr); 
							}
						});
					});
				});
		    </script>
        </div>
        <div class="col-sm-6 mb-2 p-4">
            <div class="w-75 mx-auto">
                <h5>Nuestros Datos:</h5>
                <strong><i class="far fa-envelope"></i> Email:</strong>
                <br>
                contacto@espaciorigel.com.ar
                <div class="p-2"></div>
                <strong><i class="fas fa-mobile-alt"></i> Teléfono:</strong>
                <br>
                (+54 9) 2229 46-4904
                <div class="p-2"></div>
                <strong><i class="fab fa-whatsapp"></i> Whatsapp:</strong>
                <br>
                (+54 9) 2229 46-4904
                <div class="p-4"></div>
                <h5>Nuestras Redes:</h5>
                <i class="fab fa-facebook-square fb"></i> /espaciorigel
                <br>
                <i class="fab fa-twitter-square tw"></i> /espaciorigel
                <br>
                <i class="fab fa-instagram-square ig"></i> /espaciorigel
            </div>
        </div>
    </div>
</div>
<?php
require_once('../include/footer.php');
?>