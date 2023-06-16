<?php

namespace Shops\Domain\Models;


use Shops\Contracts\DataTransferObjects\ShopDto;
use App\Helpers\DomainModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Query\Builder;
use Illuminate\Notifications\Notifiable;

class Shop extends DomainModel
{
    use HasFactory;
    use Notifiable;

    public function fillableRules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'url' => ['required', 'url'],
        ];
    }

    public function toDto(): mixed
    {
        return new ShopDto(
            id: $this->id,
            title: $this->title,
            url: $this->url,
            created_at: $this->created_at,
            updated_at: $this->updated_at
        );
    }

    protected $guarded = [
        'id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'title' => 'string'
    ];



    public function scopeMaybeSearch($query, ?string $q)
    {
        if ($q !== null and $q !== '') {
            $query->orWhere('title', 'like', "%{$q}%")
                ->orWhere('url', 'like', "%{$q}%");
        }
    }
}
