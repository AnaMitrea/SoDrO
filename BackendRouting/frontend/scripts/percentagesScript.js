/* Save the category */
let saveFileTxt = () => {

    // Get the data from each element on the form.
    const category1 = document.getElementById('category-select1');
    const category2 = document.getElementById('category-select2');
    const category3 = document.getElementById('category-select3');

    // This variable stores all the data.
    let data =
        '\r ---Your Favorite Categories--- \r\n ' +
        'First Category: ' +category1.value + ' \r\n ' +
        'Second Category: ' + category2.value + ' \r\n ' +
        'Third Category: ' + category3.value + ' \r\n ';

    // Convert the text to BLOB.
    const textToBLOB = new Blob([data], { type: 'text/plain' });
    const sFileName = 'statistics.txt';	   // The file to save the data.

    let newLink = document.createElement("a");
    newLink.download = sFileName;

    if (window.webkitURL != null) {
        newLink.href = window.webkitURL.createObjectURL(textToBLOB);
    }
    else {
        newLink.href = window.URL.createObjectURL(textToBLOB);
        newLink.style.display = "none";
        document.body.appendChild(newLink);
    }
    newLink.click();
}

const plugin = {
    id: 'custom_canvas_background_color',
    beforeDraw: (chart) => {
        const ctx = chart.canvas.getContext('2d');
        ctx.save();
        ctx.globalCompositeOperation = 'destination-over';
        ctx.fillStyle = 'white';
        ctx.fillRect(0, 0, chart.width, chart.height);
        ctx.restore();
    }
};

const dataAllergens = {
    labels: [
        'Glucose',
        'Milk',
        'Nuts',
        'Soybeans',
        'Gluten',
        'Caffeine',
        'None',
    ],
    datasets: [{
        label: 'Allergens Products Distribution',
        backgroundColor: [
            'rgba(255, 99, 132, 0.7)',
            'rgba(255, 159, 64, 0.7)',
            'rgba(255, 205, 86, 0.7)',
            'rgba(102, 255, 102, 0.7)',
            'rgba(75, 192, 192, 0.7)',
            'rgba(54, 162, 235, 0.7)',
            'rgba(153, 102, 255, 0.7)'
        ],
        borderColor: 'rgb(180, 87, 96)',
        // De luat din baza de date
        data: [1, 10, 5, 2, 20, 30],
    }]
};

const dataNutriscore = {
    labels: [
        'NONE',
        'A',
        'B',
        'C',
        'D',
        'E'
    ],
    datasets: [{
        label: 'Nutriscore Products Distribution',
        backgroundColor: [
            'rgba(255, 99, 132, 0.7)',
            'rgba(255, 159, 64, 0.7)',
            'rgba(255, 205, 86, 0.7)',
            'rgba(102, 255, 102, 0.7)',
            'rgba(75, 192, 192, 0.7)',
            'rgba(153, 102, 255, 0.7)'
        ],
        borderColor: 'rgb(180, 87, 96)',
        // De luat din baza de date
        data: [78, 109, 134, 100, 122, 202],
    }]
};

const configAllergens = {
    type: 'bar',
    data: dataAllergens,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    },
    plugins: [plugin]
};

const configNutriscore = {
    type: 'bar',
    data: dataNutriscore,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        },
        indexAxis: 'y'
    },
    plugins: [plugin]
};


let chartAllergens = null;
renderChartAllergens();
function renderChartAllergens() {
    chartAllergens = new Chart(
        document.getElementById('chartAllergens'),
        configAllergens
    );
}

let chartNutriscore = null;
renderChartNutriscore();
function renderChartNutriscore() {
    chartNutriscore = new Chart(
        document.getElementById('chartNutriscore'),
        configNutriscore
    );
}

/* Change display to none as buttons are pressed */
const chartAllergensContent = document.getElementById("chartAllergens");
const chartNutriscoreContent = document.getElementById("chartNutriscore");

function changeDisplayAllergens() {
    chartAllergensContent.style.display = "block";
    chartNutriscoreContent.style.display = "none";
}

function changeDisplayNutriscore(){
    chartAllergensContent.style.display = "none";
    chartNutriscoreContent.style.display = "block";
}

/* Save buttons as Image, CSV, SVG */
const saveImgBtn =  document.getElementById('save-img');
function saveImg() {
    // save allergens barchart
    if(chartAllergensContent.style.display === 'block') {
        // Get the chart's base64 image string
        let image = chartAllergens.toBase64Image();

        // Trigger the download
        let a = document.createElement('a');
        a.href = chartAllergens.toBase64Image();
        a.download = 'allergens-distribution.png';
        a.click();
    }

    // save nutriscore barchart
    if(chartNutriscoreContent.style.display === "block") {
        // Get the chart's base64 image string
        let image = chartNutriscore.toBase64Image();

        // Trigger the download
        let a = document.createElement('a');
        a.href = chartNutriscore.toBase64Image();
        a.download = 'nutriscore-distribution.png';
        a.click();
    }
}


document.getElementById("save-csv").addEventListener("click",
    function() {
        // save allergens barchart
        if(chartAllergensContent.style.display === 'block') {
            downloadCSV({ filename: "chart-allergens.csv", chart: chartAllergens })
        }

        // save nutriscore barchart
        if(chartNutriscoreContent.style.display === "block") {
            downloadCSV({ filename: "chart-nutriscore.csv", chart: chartNutriscore })
        }
    }
);

function convertChartDataToCSV(args) {
    let result, key, value, columnDelimiter, lineDelimiter, data;

    data = args.data || null;
    if (data == null || !data.length) {
        return null;
    }

    columnDelimiter = ';';
    lineDelimiter = '\n';

    key = data[0];
    value = data[1];

    result = '';
    result += key;
    result += columnDelimiter;
    result += value;
    result += lineDelimiter;
    return result;
}

function downloadCSV(args) {

    let data, filename, link;
    let csv = "";

    console.log(args.chart.data.datasets[0].data);

    for(let i = 0; i < args.chart.data.datasets[0].data.length; i++){
        csv += convertChartDataToCSV({
            data: [ args.chart.data.labels[i], args.chart.data.datasets[0].data[i] ]
        });
    }
    if (csv == null) return;

    filename = args.filename || 'chart-allergens.csv';

    if (!csv.match(/^data:text\/csv/i)) {
        csv = 'data:text/csv;charset=utf-8,' + csv;
    }

    data = encodeURI(csv);
    link = document.createElement('a');
    link.setAttribute('href', data);
    link.setAttribute('download', filename);
    document.body.appendChild(link); // Required for FF
    link.click();
    document.body.removeChild(link);
}
