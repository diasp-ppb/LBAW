$(document).ready(function() {
    console.log("teste");
    $.ajax({
        type: "post",
        url: "../../api/admin/getChartsInfo.php",
        data: {}
    }).done(function(data) {

        console.log(data);

        var info = JSON.parse(data);
        var ctx = document.getElementById("topics-by-tags").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: info[0],
                datasets: [{
                    label: "Tags",
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
                }],
            },
        });

        var ctx = document.getElementById("topics-by-course").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["M", "T", "W", "T", "F", "S", "S"],
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
                    data: [12, 19, 3, 17, 28, 24, 7]
                }]
            },

        });


    });
});