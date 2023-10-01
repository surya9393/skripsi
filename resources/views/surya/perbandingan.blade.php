@extends('layouts.main')
@section('content')
<div class="ml-56 mr-56">
    <h1 class="text-center text-2xl">Perbandingan PLTS Statis & Dinamis</h1>
    <hr>
    <h5>Watt</h5>
    <div>
        <canvas id="myChart2"></canvas>
    </div>
    <h5 class="text-center">Waktu</h5>
    <div class="">
        <p id="data"></p>
    </div>

@endsection


@push('js')
    
<script>
    setInterval(() => Livewire.emit('updateData'), 5000);
    var chartData = JSON.parse('<?php echo $test; ?>');
    
    const ctx2 = document.getElementById('myChart2');
    const dynamicChart2 = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: chartData.label,
            datasets: [
            {
                label: 'Statis',
                data: chartData.data_statis,
                borderWidth: 2,
                tension: 0.3,
            },
            {
                label: 'Dinamis',
                data: chartData.data_dinamis,
                borderWidth: 2,
                tension: 0.3,
            },
        ]
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
        dynamicChart2.data.labels = chartData.label;
        dynamicChart2.data.datasets.forEach((dataset) => {
            dataset.data = chartData.data_dinamis;
            dataset.data = chartData.data_statis;
        });
        dynamicChart6.update();
    })
</script>
@endpush
</div>