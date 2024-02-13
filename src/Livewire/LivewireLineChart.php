<?php

namespace T\Charts\Livewire;

use Livewire\Component;
use T\Charts\Models\LineChartModel;

/**
 * Class LivewireLineChart
 * @package T\Charts\Livewire
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
