<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Property;

class PropertyCard extends Component
{
    public Property $property;

    public function __construct(Property $property)
    {
        $this->property = $property;
    }

    public function render()
    {
        return view('components.property-card');
    }
}

