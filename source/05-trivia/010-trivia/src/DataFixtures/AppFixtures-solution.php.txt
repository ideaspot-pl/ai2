<?php

namespace App\DataFixtures;

use App\Entity\Location;
use App\Entity\Measurement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $szczecin = $this->createLocation('Szczecin', 'PL', 53.428543, 14.552812);
        $manager->persist($szczecin);

        foreach ([
            '2021-11-06' => 6,
            '2021-11-07' => 7,
            '2021-11-08' => 8,
            '2021-11-09' => 9,
            '2021-11-10' => 10,
                 ] as $date => $celsius) {
            $measurement = $this->createMeasurement($szczecin, new \DateTime($date), $celsius);
            $manager->persist($measurement);
        }

        $police = $this->createLocation('Police', 'PL', 53.55214, 14.57182);
        $manager->persist($police);

        foreach ([
                     '2021-11-06' => 6,
                     '2021-11-07' => 7,
                     '2021-11-08' => 8,
                     '2021-11-09' => 9,
                     '2021-11-10' => 10,
                 ] as $date => $celsius) {
            $measurement = $this->createMeasurement($police, new \DateTime($date), $celsius);
            $manager->persist($measurement);
        }

        $berlin = $this->createLocation('Berlin', 'DE', 52.520008, 13.404954);
        $manager->persist($berlin);

        foreach ([
                     '2021-11-06' => 6,
                     '2021-11-07' => 7,
                     '2021-11-08' => 8,
                     '2021-11-09' => 9,
                     '2021-11-10' => 10,
                 ] as $date => $celsius) {
            $measurement = $this->createMeasurement($berlin, new \DateTime($date), $celsius);
            $manager->persist($measurement);
        }

        $manager->flush();
    }

    private function createLocation($name, $country, $latitude, $longitude): Location
    {
        $location = new Location();
        $location
            ->setName($name)
            ->setCountry($country)
            ->setLatitude($latitude)
            ->setLongitude($longitude)
        ;

        return $location;
    }

    private function createMeasurement(Location $location, \DateTime $date, int $celsius): Measurement
    {
        $measurement = new Measurement();
        $measurement
            ->setLocation($location)
            ->setDate($date)
            ->setCelsius($celsius)
        ;
        return $measurement;
    }
}
