<?php

namespace App\Http\Controllers;

use App\Models\Amonia;
use App\Models\Dioksida;
use App\Models\Humidity;
use App\Models\Metana;
use App\Models\Temperature;
use Illuminate\Http\Request;

class ChartsController extends Controller
{
    public function index()
    {
        function getLatestData($id_alat)
        {
            return [
                'Dioksida' => Dioksida::where('id_alat', $id_alat)->limit(1)->latest()->get(),
                'Metana' => Metana::where('id_alat', $id_alat)->limit(1)->latest()->get(),
                'Humidity' => Humidity::where('id_alat', $id_alat)->limit(1)->latest()->get(),
                'Temperature' => Temperature::where('id_alat', $id_alat)->limit(1)->latest()->get(),
                'Amonia' => Amonia::where('id_alat', $id_alat)->limit(1)->latest()->get(),

            ];
        }

        $data1 = getLatestData(1);
        $data2 = getLatestData(2);
        $data3 = getLatestData(3);
        $data4 = getLatestData(4);

        $data = [
            'Dioksida1' => $data1['Dioksida'],
            'Metana1' => $data1['Metana'],
            'Humidity1' => $data1['Humidity'],
            'Temperature1' => $data1['Temperature'],
            'Amonia1' => $data1['Amonia'],

            'Dioksida2' => $data2['Dioksida'],
            'Metana2' => $data2['Metana'],
            'Humidity2' => $data2['Humidity'],
            'Temperature2' => $data2['Temperature'],
            'Amonia2' => $data2['Amonia'],

            'Dioksida3' => $data3['Dioksida'],
            'Metana3' => $data3['Metana'],
            'Humidity3' => $data3['Humidity'],
            'Temperature3' => $data3['Temperature'],
            'Amonia3' => $data3['Amonia'],

            'Dioksida4' => $data4['Dioksida'],
            'Metana4' => $data4['Metana'],
            'Humidity4' => $data4['Humidity'],
            'Temperature4' => $data4['Temperature'],
            'Amonia4' => $data4['Amonia'],
        ];

        return view('dashboard', $data);
    }

    public function detaildashboard(Request $request, $id)
    {
        return view('dashboard/detaildashboard');
    }

    public function chartamonia($id)
    {
        // Fetch data based on $id
        $data = Amonia::where('id_alat', $id)->latest()->take(30)->get()->sortBy('id_amonia');

        // Process the data to be used in the chart
        $labels = $data->pluck('created_at')->map(function ($date) {
            return $date->format('H:i');
        })->toArray();

        $amoniaValues = $data->pluck('nilai_amonia');

        // Get the latest data
        $latestData = $data->last();

        return response()->json([
            'labels' => $labels,
            'data' => $amoniaValues,
            'latest' => $latestData,
        ]);
    }

    public function chartdioksida($id)
    {
        // Fetch data based on $id
        $data = Dioksida::where('id_alat', $id)->latest()->take(30)->get()->sortBy('id_dioksida');

        // Process the data to be used in the chart
        $labels = $data->pluck('created_at')->map(function ($date) {
            return $date->format('H:i');
        })->toArray();

        $dioksidaValues = $data->pluck('nilai_dioksida');

        // Get the latest data
        $latestData = $data->last();

        return response()->json([
            'labels' => $labels,
            'data' => $dioksidaValues,
            'latest' => $latestData,
        ]);
    }

    public function chartmetana($id)
    {
        // Fetch data based on $id
        $data = Metana::where('id_alat', $id)->latest()->take(30)->get()->sortBy('id_metana');

        // Process the data to be used in the chart
        $labels = $data->pluck('created_at')->map(function ($date) {
            return $date->format('H:i');
        })->toArray();

        $metanaValues = $data->pluck('nilai_metana');

        // Get the latest data
        $latestData = $data->last();

        return response()->json([
            'labels' => $labels,
            'data' => $metanaValues,
            'latest' => $latestData,
        ]);
    }

    public function charttemperature($id)
    {
        // Fetch data based on $id
        $data = Temperature::where('id_alat', $id)->latest()->take(30)->get()->sortBy('id_temp');

        // Process the data to be used in the chart
        $labels = $data->pluck('created_at')->map(function ($date) {
            return $date->format('H:i');
        })->toArray();

        $temperatureValues = $data->pluck('nilai_suhu');

        // Get the latest data
        $latestData = $data->last();

        return response()->json([
            'labels' => $labels,
            'data' => $temperatureValues,
            'latest' => $latestData,
        ]);
    }

    public function charthumidity($id)
    {
        // Fetch data based on $id
        $data = Humidity::where('id_alat', $id)->latest()->take(30)->get()->sortBy('id_amonia');

        // Process the data to be used in the chart
        $labels = $data->pluck('created_at')->map(function ($date) {
            return $date->format('H:i');
        })->toArray();

        $humidityValues = $data->pluck('nilai_humidity');

        // Get the latest data
        $latestData = $data->last();

        return response()->json([
            'labels' => $labels,
            'data' => $humidityValues,
            'latest' => $latestData,
        ]);
    }
}
