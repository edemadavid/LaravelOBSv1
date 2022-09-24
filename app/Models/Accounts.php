<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Accounts extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'account_no',
        'accounts_types_id',
        'currency_id',
        'account_balance',
        'card_type'
    ];


    public function getAccountsTypes() {
        return $this->hasMany(AccountsType::class, 'id', 'accounts_types_id');
    }

    public function getCurrency(){
        return $this->hasMany(Currency::class, 'id', 'accounts_types_id');
    }
}
