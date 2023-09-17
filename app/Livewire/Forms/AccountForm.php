<?php

namespace App\Livewire\Forms;

use App\Models\Account;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Rule;
use Livewire\Form;

class AccountForm extends Form
{
    public ?Account $account;

    #[Locked]
    public $id = '';

    #[Rule('required|min:3')]
    public $name = '';

    #[Rule('nullable')]
    public $code = '';

    #[Rule('required|numeric')]
    public $opening_balance = '';

    #[Rule('nullable')]
    public $description = '';

    public function store()
    {
        $this->validate();

        Account::create($this->except(['id']));
    }

    public function setAccount($account)
    {
        $this->account = $account;
        $this->id = $account->id;
        $this->name = $account->name;
        $this->code = $account->code;
        $this->opening_balance = $account->opening_balance;
        $this->description = $account->description;
    }

    public function update()
    {
        $this->validate();

        $this->account->update($this->all());
    }
}
