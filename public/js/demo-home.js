function updateDateTime() {
    var currentTime = new Date();
    var year = currentTime.getFullYear();
    var month = (currentTime.getMonth() + 1).toString().padStart(2, '0');
    var day = currentTime.getDate().toString().padStart(2, '0');
    var hours = currentTime.getHours().toString().padStart(2, '0');
    var minutes = currentTime.getMinutes().toString().padStart(2, '0');
    var seconds = currentTime.getSeconds().toString().padStart(2, '0');

    // Timezone offset in minutes
    var timezoneOffset = currentTime.getTimezoneOffset();
    var timezoneOffsetHours = Math.floor(Math.abs(timezoneOffset) / 60);
    var timezoneOffsetMinutes = Math.abs(timezoneOffset) % 60;
    var timezoneSymbol = (timezoneOffset < 0) ? '+' : '-';

    var formattedDateTime = "現在時間 " + year + '/' + month + '/' + day + '，' +
        hours + ':' + minutes + "（UTC" + timezoneSymbol + timezoneOffsetHours + ':' + timezoneOffsetMinutes + "）";

    document.getElementById("current-time").innerText = formattedDateTime;
}

// Initial call to display date and time
updateDateTime();

// Set interval to update date and time every second (1000 milliseconds)
setInterval(updateDateTime, 1000);


const options = {
    chart: {
        height: "200%",
        maxWidth: "100%",
        type: "area",
        dropShadow: {
            enabled: false,
        },
        toolbar: {
            show: false,
        },
    },
    tooltip: {
        enabled: true,
        x: {
            show: false,
        },
    },
    fill: {
        type: "gradient",
        gradient: {
            opacityFrom: 0.55,
            opacityTo: 0,
            shade: "#1C64F2",
            gradientToColors: ["#1C64F2"],
        },
    },
    dataLabels: {
        enabled: false,
    },
    stroke: {
        width: 2,
    },
    grid: {
        show: false,
        strokeDashArray: 4,
        padding: {
            left: 2,
            right: 2,
            top: 0
        },
    },
    series: [
        {
            name: "熱度",
            data: [87, 36, 51, 28, 70, 92, 67, 44, 73, 98],
            color: "#1A56DB",
        },
    ],
    xaxis: {
        show: true,
        categories: ['2/15', '2/16', '2/17', '2/18', '2/19', '2/20', '2/21', '2/22', '2/23', '2/24'],
        labels: {
            show: true,
            style: {
                fontFamily: "Inter, sans-serif",
                cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
            }
        },
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
    },
    yaxis: {
        show: false,
    },
}

if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("area-chart"), options);
    const chart1 = new ApexCharts(document.getElementById("area-chart1"), options);
    chart.render();
    chart1.render();
}

/**
 * 單純折線圖
 * @type {string[]}
 */
const labels = ['2/15', '2/16', '2/17', '2/18', '2/19'];
const data = {
    labels: labels,
    datasets: [
        {
            label: "負面聲量",
            backgroundColor: "#2A6495",
            borderColor: "#2A6495",
            data: [0, 10, 5, 2, 20, 30, 45],
        },
        {
            label: "正面聲量",
            backgroundColor: "#141E8C",
            borderColor: "#141E8C",
            data: [84, 76, 80, 90, 67, 79, 89],
        }
    ],
};

const configLineChart = {
    type: "line",
    data,
    options: {},
};

var chartLine = new Chart(
    document.getElementById("chartLine"),
    configLineChart
);
