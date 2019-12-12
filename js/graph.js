$(document).ready(function() {

    //récupère un élément cahcé sur la page sous forme de string
    var test = document.getElementById('notes').innerText;
    
    //enleve les crochets du tableau pour pouvoir ensuite séparer la chaine en fonction des virgules
    //pattern régulier date, note listenning, note reading, date, ...
    var tab = test.replace(/\[/g, "");
    tab = tab.replace(/\]/g, "");
    tab = tab.split(",");
    
    var date = [];
    var note = [];
    var compteur = 0;

    //transforme le string récupéré en tableau de données pour le graph
    for(i = 0; i< tab.length; i += 3){
        console.log("Nouvelle iteration");
        date[compteur] = tab[i];
        note[compteur++] = parseInt(tab[i+1]) + parseInt(tab[i+2]); //parseInt pour convertir les nombre sous forme de string en Int
    }


    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: date,
        datasets: [{
            label: 'Test',
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
                    suggestedMax: 990
                }
            }]
        }
    }
    });
});