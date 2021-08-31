<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PartnerSchool extends Model
{
    use HasFactory;

    public function partnerApplications(): BelongsToMany
    {
        return $this->belongsToMany(Application::class, 'application_partner_schools')
            ->withPivot('test');
    }

    public function selectedApplications(): BelongsToMany
    {
        return $this->belongsToMany(Application::class, 'selected_destinations')
            ->withPivot('other');
    }
}
