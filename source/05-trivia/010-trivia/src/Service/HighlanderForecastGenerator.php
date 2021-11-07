<?php // src/Service/HighlanderForecastGenerator
namespace App\Service;

class HighlanderForecastGenerator
{
    public function getForecast(): string
    {
        $forecasts = [
            "It's going to rain!",
            "It's going to snow!",
            "It's going to be a lovely sunny weather!",
            "It's going to be windy!",
        ];

        $index = array_rand($forecasts);
        $forecast = $forecasts[$index];

        return $forecast;
    }
}
