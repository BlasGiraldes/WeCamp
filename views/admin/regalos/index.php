<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__grafica">
    <canvas id="regalos-grafica" width="400" height="400"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const grafica = document.querySelector('#regalos-grafica')

    if(grafica){


        obtenerDatos()
        async function obtenerDatos(){
            const url = '/api/regalos'
            const respuesta = await fetch(url)
            const resultado = await respuesta.json()


            const ctx = document.getElementById('regalos-grafica');

new Chart(ctx, {
 type: 'bar',

    data: {

    labels: resultado.map( regalo => regalo.nombre),
    datasets: [{
  label: '',
  data:  resultado.map( regalo => regalo.total),
  backgroundColor: [
        '#ea580c',
        '#84cc16',
        '#22d3ee',
         '#a855f7',
            '#ef4444',
         '#14b8a6',
         '#db2777',
         '#e11d48',
            '#7e22ce'
],
}]
},
options: {
scales: {
  y: {
    beginAtZero: true
  }
},
plugins: {
    legend: {
        display: false
    }
}
}
});
}

        }



</script>

