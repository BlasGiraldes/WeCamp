<main class="registro">
    <h2 class="registro__heading"><?php echo $titulo; ?></h2>
    <h2 class="registro__descripcion">Elige tu plan</h2>

    <div class="pases__grid">
        <div class="pase">
            <h3 class="pase__nombre">Pase Gratis</h3>
            <ul class="pase__lista">
                <li class="pase__elemento">Acceso Virtual a WeCamp</li>
            </ul>

            <p class="pase__precio">$0</p>

            <form action="/finalizar-registro/gratis" method="POST">

            <input type="submit" class="pases__submit" value="Inscripción Gratis">

            </form>
        </div>

        <div class="pase">
            <h3 class="pase__nombre">Pase Presencial</h3>
            *Incluye beneficios del Pase Virtual

            <ul class="pase__lista">
                <li class="pase__elemento">Acceso Presencial a WeCamp</li>
                <li class="pase__elemento">Pase por 2 días</li>
                <li class="pase__elemento">Acceso a eventos en Persona</li>
                <li class="pase__elemento">Posibilidad de interactuar con otros Asistentes y/o Expositores</li>
                <li class="pase__elemento">Acceso a zonas VIP o experiencias exclusivas</li>
                <li class="pase__elemento">Camisa del Evento</li>
                <li class="pase__elemento">Descuentos en Comida y Bebida</li>
            </ul>

            <p class="pase__precio">$20</p>
                <div id="smart-button-container">
                 <div style="text-align: center;">
            <div id="paypal-button-container"></div>
            </div>
</div>
        </div>

        <div class="pase">
            <h3 class="pase__nombre">Pase Virtual</h3>
            <ul class="pase__lista">
                <li class="pase__elemento">Acceso Eventos en Línea</li>
                <li class="pase__elemento">Pase por 2 días</li>
                <li class="pase__elemento">Flexibilidad para asistir desde cualquier lugar con conexión a internet</li>
                <li class="pase__elemento">Acceso a contenido en Línea después del Evento</li>
                <li class="pase__elemento">Posibilidad de interactuar con otros Asistentes de manera Virtual</li>

            </ul>

            <p class="pase__precio">$10</p>
            <div id="smart-button-container">
                 <div style="text-align: center;">
            <div id="paypal-button-container-virtual"></div>
          </div>

        </div>
    </div>


</main>





<script src="https://www.paypal.com/sdk/js?client-id=Adc6YGqAvfmtD_7WCDB9mf3AidMfM18ZQr49mGkIHEOF8XuFTW7aAMFuB09wVfMsKy54lOoFfpWqL3HS&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>

<script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'blue',
          layout: 'vertical',
          label: 'pay',
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"1","amount":{"currency_code":"USD","value":20}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
                const datos = new FormData();
                datos.append('paquete_id', orderData.purchase_units[0].description);
                datos.append('pago_id', orderData.purchase_units[0].payments.captures[0].id);

                fetch('/finalizar-registro/pagar', {
                    method: 'POST',
                    body: datos
                })
                .then( respuesta => respuesta.json())
                .then(resultado => {
                    if(resultado.resultado) {
                        actions.redirect('http://localhost:3000/finalizar-registro/conferencias');
                    }
                })
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');


      // Pase virtual
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'blue',
          layout: 'vertical',
          label: 'pay',
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"2","amount":{"currency_code":"USD","value":10}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {

                const datos = new FormData();
                datos.append('paquete_id', orderData.purchase_units[0].description);
                datos.append('pago_id', orderData.purchase_units[0].payments.captures[0].id);

                fetch('/finalizar-registro/pagar', {
                    method: 'POST',
                    body: datos
                })
                .then( respuesta => respuesta.json())
                .then(resultado => {
                    if(resultado.resultado) {
                        actions.redirect('http://localhost:3000/finalizar-registro/conferencias');
                    }
                })
                
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container-virtual');

    }
    initPayPalButton();
  </script>