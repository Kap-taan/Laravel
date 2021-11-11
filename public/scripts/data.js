const ctx = document.querySelector('#myChart').getContext("2d");
let gradient = ctx.createLinearGradient(0, 0, 0, 400);
gradient.addColorStop(0, "rgba(58, 123, 213, 1)");
gradient.addColorStop(1, "rgba(0, 210, 255, 0.3");

let delayed;

const labels = [
  'J & K',
  'HP',
  'Pb',
  'Chandigarh', 
  'Uttaranchal', 
  'Haryana', 
  'Delhi', 
  'Rajasthan', 
  'Uttar Pradesh', 
  'Bihar',
  'Sikkim', 
  'Arunachal Pradesh', 
  'Nagaland', 
  'Manipur', 
  'Mizoram',
  'Tripura',
  'Meghalaya',
  'Assam',
  'West Bengal',
  'Jharkhand',
  'Orissa',
  'Chhattisgarh',
  'Madhya Pradesh',
  'Gujarat',
  'Daman & Diu',
  'Dadra & Nagar Haveli',
  'Maharashtra',
  'Andhra Pradesh',
  'Karnataka',
  'Goa',
  'Lakshadweep',
  'Kerala',
  'Tamil Nadu',
  'Pondicherry',
  'Andaman & Nicobar Islands'
];


const data = {
  labels,
  datasets: [{
    data: [53.7, 43.0, 67.4, 63.4, 76.5, 59.6, 55.7, 74.7, 43.9, 42.2, 33.1, 60.4, 43.5, 61.5, 60.5, 86.7, 64.9, 59.6, 54.6, 38.9, 38.9, 51.9, 50.3, 57.8, 65.6, 40.2, 67.0, 50.4, 56.9, 75.4, 80.5, 87.7, 64.4, 73.9, 75.2],
    label: "Literacy Rate",
    fill: true,
    backgroundColor: gradient,
    borderColor: '#fff',
    pointBackgroundColor: 'rgba(189, 195, 199)',
    // tension: 0.1,
  }],

}

const config = {
  type: "line",
  data: data,
  options: {
    animation: {
      onComplete: () => {
        delayed = true;
      },
      delay: (context) => {
        let delay = 0;
        if (context.type === 'data' && context.mode === 'default' && !delayed) {
          delay = context.dataIndex * 300 + context.datasetIndex * 100;
        }
        return delay;
      },
    },
    radius: 5,
    hitRadius: 30,
    hoverRadius: 10,
    response: true,
    scales: {
      y: {
        ticks: {
          callback: function (value) {
            return value + '%';
          }
        }
      }
    }
  },
}

const myChart = new Chart(ctx, config);