<div class="container">
    
    <div class="row mb-5">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Volt</h5>
                    <div>
                        <canvas id="teganganStatis"></canvas>
                    </div>
                    <h5 class="text-center">Waktu</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Volt</h5>
                    <div>
                        <canvas id="myChart1"></canvas>
                    </div>
                    <h5 class="text-center">Waktu</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ampere</h5>
                    <div>
                        <canvas id="myChart4"></canvas>
                    </div>
                    <h5 class="text-center">Waktu</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ampere</h5>
                    <div>
                        <canvas id="myChart3"></canvas>
                    </div>
                    <h5 class="text-center">Waktu</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Watt</h5>
                    <div>
                        <canvas id="myChart5"></canvas>
                    </div>
                    <h5 class="text-center">Waktu</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Watt</h5>
                    <div>
                        <canvas id="myChart6"></canvas>
                    </div>
                    <h5 class="text-center">Waktu</h5>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            setInterval(() => Livewire.emit('updateData'), 5000);
            var chartData = JSON.parse('<?php echo $voltages; ?>');
            console.log(chartData);
            const ctx = document.getElementById('teganganStatis');
            const dynamicChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: chartData.label,
                    datasets: [{
                        label: 'Tegangan Dinamis',
                        data: chartData.data_dinamis,
                        borderWidth: 2,
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            Livewire.on('berhasilUpdate', event => {
                var chartData = JSON.parse(event.data);
                console.log(chartData);
                dynamicChart.data.labels = chartData.label;
                dynamicChart.data.datasets.forEach((dataset) => {
                    dataset.data = chartData.data_dinamis;
                });
                dynamicChart.update();
            })
        </script>

        <script>
            setInterval(() => Livewire.emit('updateData'), 5000);
            var chartData = JSON.parse('<?php echo $voltages; ?>');
            console.log(chartData);
            const ctx1 = document.getElementById('myChart1');
            const dynamicChart1 = new Chart(ctx1, {
                type: 'line',
                data: {
                    labels: chartData.label,
                    datasets: [{
                        label: 'Tegangan Statis',
                        data: chartData.data_statis,
                        borderWidth: 2,
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            Livewire.on('berhasilUpdate', event => {
                var chartData = JSON.parse(event.data);
                console.log(chartData);
                dynamicChart1.data.labels = chartData.label;
                dynamicChart1.data.datasets.forEach((dataset1) => {
                    dataset1.data = chartData.data_statis;
                });
                dynamicChart1.update();
            })
        </script>

        <script>
            setInterval(() => Livewire.emit('updateData'), 5000);
            var chartData = JSON.parse('<?php echo $voltages; ?>');
            console.log(chartData);
            const ctx4 = document.getElementById('myChart4');
            const dynamicChart4 = new Chart(ctx4, {
                type: 'line',
                data: {
                    labels: chartData.label,
                    datasets: [{
                        label: 'Arus Dinamis',
                        data: chartData.arus_dinamis,
                        borderWidth: 2,
                        borderColor: '#3692EB',
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            Livewire.on('berhasilUpdate', event => {
                var chartData = JSON.parse(event.data);
                console.log(chartData);
                dynamicChart4.data.labels = chartData.label;
                dynamicChart4.data.datasets.forEach((dataset4) => {
                    dataset4.data = chartData.arus_dinamis;
                });
                dynamicChart4.update();
            })
        </script>

        <script>
            setInterval(() => Livewire.emit('updateData'), 5000);
            var chartData = JSON.parse('<?php echo $voltages; ?>');
            console.log(chartData);
            const ctx3 = document.getElementById('myChart3');
            const dynamicChart3 = new Chart(ctx3, {
                type: 'line',
                data: {
                    labels: chartData.label,
                    datasets: [{
                        label: 'Arus Statis',
                        data: chartData.arus_statis,
                        borderWidth: 2,
                        borderColor: '#3692EB',
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            Livewire.on('berhasilUpdate', event => {
                var chartData = JSON.parse(event.data);
                console.log(chartData);
                dynamicChart3.data.labels = chartData.label;
                dynamicChart3.data.datasets.forEach((dataset3) => {
                    dataset3.data = chartData.arus_statis;
                });
                dynamicChart3.update();
            })
        </script>
        
        <script>
            setInterval(() => Livewire.emit('updateData'), 5000);
            var chartData = JSON.parse('<?php echo $voltages; ?>');
            console.log(chartData);
            const ctx5 = document.getElementById('myChart5');
            const dynamicChart5 = new Chart(ctx5, {
                type: 'line',
                data: {
                    labels: chartData.label,
                    datasets: [{
                        label: 'Daya Dinamis',
                        data: chartData.power_dinamis,
                        borderWidth: 2,
                        borderColor: 'red',
                        backgroundColor: '#AAE3E2',
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            Livewire.on('berhasilUpdate', event => {
                var chartData = JSON.parse(event.data);
                console.log(chartData);
                dynamicChart5.data.labels = chartData.label;
                dynamicChart5.data.datasets.forEach((dataset5) => {
                    dataset5.data = chartData.power_dinamis;
                });
                dynamicChart5.update();
            })
        </script>
        
        <script>
            setInterval(() => Livewire.emit('updateData'), 5000);
            var chartData = JSON.parse('<?php echo $voltages; ?>');
            console.log(chartData);
            const ctx6 = document.getElementById('myChart6');
            const dynamicChart6 = new Chart(ctx6, {
                type: 'line',
                data: {
                    labels: chartData.label,
                    datasets: [{
                        label: 'Daya Statis',
                        data: chartData.power_statis,
                        borderWidth: 1,
                        borderColor: 'red',
                        backgroundColor: '#AAE3E2',
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            Livewire.on('berhasilUpdate', event => {
                var chartData = JSON.parse(event.data);
                console.log(chartData);
                dynamicChart6.data.labels = chartData.label;
                dynamicChart6.data.datasets.forEach((dataset6) => {
                    dataset6.data = chartData.power_statis;
                });
                dynamicChart6.update();
            })
        </script>

        
    @endpush
</div>
