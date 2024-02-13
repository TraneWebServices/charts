<?php

namespace T\Charts\Livewire;

use Livewire\Component;
use T\Charts\Models\PieChartModel;

/**
 * Class LivewirePieChart
 * @package T\Charts\Livewire
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
