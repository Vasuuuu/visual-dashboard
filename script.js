/*
async function fetchData(sector) {
    let url = 'api.php';
    if (sector) {
        url += `?sector=${sector}`;
    }

    const response = await fetch(url);
    const data = await response.json();
    return data;
}*/
var labels1, labels2, labels3, labels4;
var values1, values2, values3, values4;

async function fetchData(key) {
  const value = document.getElementById(key).value;

  let url = "api.php";
  if (key) {
    switch (key) {
      case "sector":
        url += `?sector=${value}`;
        break;
      case "end_year":
        url += `?end_year=${value}`;
        break;
      case "topic":
        url += `?topic=${value}`;
        break;
      case "region":
        url += `?region=${value}`;
        break;
      case "pestle":
        url += `?pestle=${value}`;
        break;
      case "source":
        url += `?source=${value}`;
        break;
      case "swot":
        url += `?swot=${value}`;
        break;
      case "country":
        url += `?country=${value}`;
        break;
    }
  }
  const response = await fetch(url);
  const data = await response.json();
  labels1 = await data.map((item) => item.sector);
  values1 = await data.map((item) => item.intensity);
  labels2 = await data.map((item) => item.topic);
  values2 = await data.map((item) => item.likelihood);
  labels3 = await data.map((item) => item.pestle);
  values3 = await data.map((item) => item.relevance);
  labels4 = await data.map((item) => item.swot);
  values4 = await data.map((item) => item.intensity);
  return data;
}

async function renderChart1(type, chartId, key) {
  var data = await fetchData(key);

  var ctx1 = document.getElementById(chartId).getContext("2d");

  if (window.ctx1) {
    window.ctx1.destroy();
  }
  window.ctx1 = new Chart(ctx1, {
    type: type,
    data: {
      labels: labels1,
      datasets: [
        {
          label: "Sector & Intensity",
          data: values1,
          backgroundColor: "rgba(102, 51, 153, 0.2)",
          borderColor: "rgba(90, 34, 139, 1)",
          borderWidth: 1,
        },
      ],
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
}

renderChart1("bar", "chartIntensity", "sector");

// Likelihood chart

async function renderChart2(type, chartId, key) {
  var data = await fetchData(key);

  const ctx2 = document.getElementById(chartId).getContext("2d");

  if (window.ctx2) {
    window.ctx2.destroy();
  }
  window.ctx2 = new Chart(ctx2, {
    type: type,
    data: {
      labels: labels2,
      datasets: [
        {
          label: "Topic & Likelihood",
          data: values2,
          backgroundColor: "rgba(102, 51, 153, 0.2)",
          borderColor: "rgba(90, 34, 139, 1)",
          borderWidth: 1,
        },
      ],
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
}
renderChart2("bar", "chartLikelihood", "topic");
//filterData('line','chartLikelihood',"topic", labels2, values2);

//Relevance graph

async function renderChart3(type, chartId, key) {
  var data = await fetchData(key);

  const ctx3 = document.getElementById(chartId).getContext("2d");

  if (window.ctx3) {
    window.ctx3.destroy();
  }
  window.ctx3 = new Chart(ctx3, {
    type: type,
    data: {
      labels: labels3,
      datasets: [
        {
          label: "Pestle & Relevance",
          data: values3,
          backgroundColor: "rgba(102, 51, 153, 0.2)",
          borderColor: "rgba(90, 34, 139, 1)",
          borderWidth: 1,
        },
      ],
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
}
renderChart3("line", "chartRelevance", "pestle");

// Swot Chart

async function renderChart4(type, chartId, key) {
  var data = await fetchData(key);

  const ctx4 = document.getElementById(chartId).getContext("2d");

  if (window.ctx4) {
    window.ctx4.destroy();
  }
  window.ctx4 = new Chart(ctx4, {
    type: type,
    data: {
      labels: labels4,
      datasets: [
        {
          label: "Swot & Intensity",
          data: values4,
          backgroundColor: "rgba(102, 51, 153, 0.2)",
          borderColor: "rgba(90, 34, 139, 1)",
          borderWidth: 1,
        },
      ],
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
}
renderChart4("bubble", "chartSwot", "swot");
