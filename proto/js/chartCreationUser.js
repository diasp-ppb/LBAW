$(document).ready(function() {
    console.log("teste");
    $.ajax({
        type: "post",
        url: "../../api/member/getChartsInfo.php",
        data: {}
    }).done(function(data) {

        console.log(data);
        var info = JSON.parse(data);

        var ctx = document.getElementById("accepted-answers").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: info[0],
                datasets: [{
                    backgroundColor: [
                        "#2ecc71",
                        "#3498db",
                        "#95a5a6",
                        "#9b59b6",
                        "#f1c40f",
                        "#e74c3c",
                        "#34495e"
                    ],
                    data: info[1]
                }]
            }
        });



        var ctx = document.getElementById("where-i-comment").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: info[2],
                datasets: [{
                    backgroundColor: [
                        "#2ecc71",
                        "#3498db",
                        "#95a5a6",
                        "#9b59b6",
                        "#f1c40f",
                        "#e74c3c",
                        "#34495e"
                    ],
                    data: info[3]
                }]
            }
        });



    });
});