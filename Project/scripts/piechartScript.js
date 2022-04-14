google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Soda', 'Products'],
        ['Coca-Cola',     1],
        ['Pepsi Max',     1],
        ['Fanta',		  1],
        ['Pepsi Lime',    1],
        ['Others',        1]
    ]);
    var options = {
        backgroundColor: 'transparent',
        legend: {textStyle: {color: 'white', fontsize: 20}},
        title: 'Your Soda Preferences',
        titleTextStyle: { color: 'white', fontsize: 20},
        colors: ['#b45760', '#ef895d', '#c59ea8', '#cabcae', '#f6c7b6'],
        is3D: true
    };
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
}
$(window).on("throttledresize", function (event) {
    var options = {
        width: 'auto',
        height: 'auto'
    };

    var data = google.visualization.arrayToDataTable([]);
    drawChart(data, options);
});