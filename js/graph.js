$(document).ready(function() {

    //recupere un element cache sur la page sous forme de string
    var test = document.getElementById('notes').innerText;
    
    //enleve les crochets du tableau pour pouvoir ensuite separer la chaine en fonction des virgules
    //pattern regulier date, note listenning, note reading, date, ...
    var tab = test.replace(/\[/g, "");
    tab = tab.replace(/\]/g, "");
    tab = tab.split(",");
    
    var date = [];
    var note = [];
    var compteur = 0;

    //transforme le string recupere en tableau de donnees pour le graph
    for(i = 0; i< tab.length; i += 3){
        date[compteur] = tab[i];
        note[compteur++] = parseInt(tab[i+1]) + parseInt(tab[i+2]); //parseInt pour convertir les nombres sous forme de string en Int
    }


    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
                                    // The type of chart we want to create
                                    type: 'bar',

                                    // The data for our dataset
                                    data: {
                                        labels: date,
                                        datasets: [{
                                            label: 'Score',
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