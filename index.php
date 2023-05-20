<!DOCTYPE html>
<html>
<head>
    <title>Data Graph</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1> Welcome to my Dashboard</h1>
    
    <h4>Sector & Intensity</h4>
    <label for="sector">Filter by sector:</label>
    <select id="sector" onchange="renderChart1('bar','chartIntensity','sector')">
        <option value="">All</option>
        <option value="Information Technology">Information Technology</option>
        <option value="Healthcare">Healthcare</option>
        <option value="Pharmaceuticals">Pharmaceuticals</option>
        <option value="Automotive">Automotive</option>
        <option value="Energy">Energy</option>
        <option value="Manufacturing">Manufacturing</option>
        <option value="Media & entertainment">Media & entertainment</option>
        <option value="Environment">Environment</option>
        <option value="Government">Government</option>
        <option value="Manufacturing">Manufacturing</option>
        <option value="Tourism & hospitality">Tourism & hospitality</option>
        <option value="Financial services">Financial services</option>

        <!-- Add more options for your categories -->
    </select>
    <canvas id="chartIntensity" height="100px"></canvas>
<hr>
   <!-- -------------------------------------------------------------------------------------->
   <h4>Topic & Likelihood</h4>
    <label for="topic">Filter by Topic:</label>
    <select id="topic" onchange="renderChart2('bar', 'chartLikelihood','topic')">
        <option value="">All</option>
        <option value="artificial intelligence">artificial intelligence</option>
        <option value="internet of things">internet of things</option>
        <option value="power">power</option>
    
    </select>
    <canvas id="chartLikelihood" height="100px"></canvas> 
<hr>
    <!-- -------------------------------------------------------------------------------------->
 
    <h4>Pestle & Relevance</h4>
    <label for="pestle">Filter by pestle:</label>
    <select id="pestle" onchange="renderChart3('line', 'chartRelevance','pestle')">
        <option value="">All</option>
        <option value="Technological">Technological</option>
        <option value="Healthcare">Healthcare</option>
        <option value="Political">Political</option>
        <option value="Economic">Economic</option>
        <option value="Social">Social</option>
        <option value="Environmental">Environmental</option>
    </select>
    <canvas id="chartRelevance" height="100px"></canvas>
    <hr>
    <!-- -------------------------------------------------------------------------------------->

    <h4>SWOT & Intensity</h4>
    <label for="swot">Filter by swot:</label>
    <select id="swot" onchange="renderChart4('bubble', 'chartSwot','swot')">
        <option value="">All</option>
        <option value="Strength">Strength</option>
        <option value="Weakness">Weakness</option>
        <option value="Opportunity">Opportunity</option>
        <option value="Threat">Threat</option>
    </select>
    <canvas id="chartSwot" height="100px"></canvas>

    <canvas id="chartCountry" height="100px"></canvas>
    <canvas id="chartTopics" height="100px"></canvas>
    <canvas id="chartRegion" height="100px"></canvas>
    <canvas id="chartCity" height="100px"></canvas>

    <script src="script.js"></script>
<!--   <script>
        async function fetchData(sector) {
            let url = 'api.php';
            if (sector) {
                url += `?sector=${sector}`;
            }

            const response = await fetch(url);
            const data = await response.json();
            return data;
        }

        async function renderChart(sector) {
            const data = await fetchData(sector);

            const labels = data.map(item => item.sector);
            const values = data.map(item => item.intensity);

            const ctx = document.getElementById('chart').getContext('2d');

            if (window.ctx) {
                window.ctx.destroy();
            }
            window.ctx = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Data',
                        data: values,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        function filterData() {
            const select = document.getElementById('sector');
            const sector = select.value;
            renderChart(sector);
        }

        // Initial rendering of the chart
        renderChart();

    </script>
  -->
</body>
</html>
