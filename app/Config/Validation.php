<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
    public $movies = [
        'title' => 'required|min_length[3]|max_length[100]',
        'category_id' => 'required',
        'description'=> 'required|min_length[3]|max_length[1000]',
    ];

    public $usuarios = [
        'usuario' => 'required|min_length[3]|max_length[10]|is_unique[usuarios.usuario]',
        'email' => 'required|min_length[3]|max_length[100]|is_unique[usuarios.email]',
        'contrasena' => 'required|min_length[3]|max_length[100]'
    ];
}
