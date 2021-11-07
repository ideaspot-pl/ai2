<?php // src/Command/WeatherHighlanderSaysCommand
namespace App\Command;
use App\Service\HighlanderForecastGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class WeatherHighlanderSaysCommand extends Command
{
    /** @var HighlanderForecastGenerator */
    private $highlanderForecastGenerator;

    public function __construct(string $name = null,
                                HighlanderForecastGenerator $highlanderForecastGenerator)
    {
        $this->highlanderForecastGenerator = $highlanderForecastGenerator;

        parent::__construct($name);
    }

    protected function configure(): void
    {
        $this->setName('weather:highlander-says');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln($this->highlanderForecastGenerator->getForecast());
        return Command::SUCCESS;
    }
}
