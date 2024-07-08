<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpenseCategory extends Model
{
    protected $fillable = ['ExpenseCategoryName','ExpenseCategoryType'];

    public function expenses()
    {
        return $this->hasMany(Expense::class, 'expense_category_id');
    }
}
