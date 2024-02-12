<?php

namespace TWS\Charts\Livewire;

use Livewire\Component;
use TWS\Charts\Models\PieChartModel;

/**
 * Class LivewirePieChart
 * @package TWS\Charts\Livewire
 */
class LivewirePieChart extends Component
{
    public $pieCharts;

    public function mount(PieChartModel $pieCharts)
    {
        $this->pieCharts = $pieCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-pie-chart');
    }
}
