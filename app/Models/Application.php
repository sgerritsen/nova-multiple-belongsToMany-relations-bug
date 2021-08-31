<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Application extends Model
{
    use HasFactory;

    public function partnerSchools(): BelongsToMany
    {
        return $this->belongsToMany(PartnerSchool::class, 'application_partner_schools')->withPivot('test');
    }

    public function selectedDestinations(): BelongsToMany
    {
        return $this->belongsToMany(PartnerSchool::class, 'selected_destinations')->withPivot('other');
    }
}
