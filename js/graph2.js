$(document).ready(function() {

    //récupère un élément cahcé sur la page sous forme de string
    var test = document.getElementById('notes').innerText;
    
    //enleve les crochets du tableau pour pouvoir ensuite séparer la chaine en fonction des virgules
    //pattern régulier date, note listenning, note reading, date, ...
    

    var tab = test.replace(/\[/g, "");
    tab = tab.replace(/\]/g, "");
    tab = tab.replace(/\"/g, "");
    tab = tab.split(',');


    var date = [];
    var note = [];
    var compteur = 0;

    var max = 0;
    //transforme le string récupéré en tableau de données pour le graph
    for(i = 0; i< tab.length; i += 2){
        date[compteur] = tab[i];
        note[compteur++] = tab[i+1];
        if (tab[i+1] > max) {
            max = tab[i+1];
        }
    }

    if (max > 100) {
        max = 200;
    } else if (max > 54) {
        max = 100;
    } else if (max > 39) {
        max = 54;
    } else if (max > 30) {
        max = 39;
    } else if (max > 25) {
        max = 30;
    } else if (max > 16) {
        max = 25;
    } else if (max > 6) {
        max = 16;
    } else {
        max = 6;
    }


    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: date,
        datasets: [{
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: note            
        }]
    },


    // Configuration options go here
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    suggestedMin: 0,
                    suggestedMax: max
                }
            }]
        }
    }
    });
});