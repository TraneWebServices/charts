<?php

namespace TWS\Charts\Livewire;

use Livewire\Component;
use TWS\Charts\Models\LineChartModel;

/**
 * Class LivewireLineChart
 * @package TWS\Charts\Livewire
 */
class LivewireLineChart extends Component
{
    public $lineCharts;

    public function mount(LineChartModel $lineCharts)
    {
        $this->lineCharts = $lineCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-line-chart');
    }
}
