<?php

namespace TWS\Charts\Console;

use TWS\Charts\Traits\WithModelStub;
use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;

class MakeChartCommand extends GeneratorCommand
{
    use WithModelStub;

    protected $chartTypes = [
        'Pie Chart' => 'PieChart',
        'Donut Chart' => 'DonutChart',
        'Radial Bar Chart' => 'RadialBarChart',
        'Polar Area Chart' => 'PolarAreaChart',
        'Line Chart' => 'LineChart',
        'Area Chart' => 'AreaChart',
        'Bar Chart' => 'BarChart',
        'Horizontal Bar Chart' => 'HorizontalBarChart',
        'Heatmap Chart' => 'HeatMapChart',
        'Radar Chart' => 'RadarChart',
    ];

    protected $selectedChart;

    protected function askChartType(): void
    {
        $option = $this->choice(
            'Select a chart type',
            array_keys($this->chartTypes),
        );
        $this->selectedChart = $this->chartTypes[$option];
    }

    public function handle(): ?bool
    {
        $this->askChartType();
        return parent::handle();
    }

    protected $name = 'make:charts';

    protected $description = 'Creates a chart class';

    protected $type = 'Chart class';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub(): string
    {
        $directory = 'Livewire';

        $stub = "{$directory}/{$this->selectedChart}.stub";

        return $this->resolveStubPath($stub);
    }

    /**
     * Replace the class name for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return string
     */
    protected function replaceClass($stub, $name): string
    {
        $stub = parent::replaceClass($stub, $name);

        $className = class_basename(str_replace('\\', '/', $name));

        return str_replace('{{ name }}', $className, $stub);
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . '\Charts';
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments(): array
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the chart class.'],
        ];
    }
}
