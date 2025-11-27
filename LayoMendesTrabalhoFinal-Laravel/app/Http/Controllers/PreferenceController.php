<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreferenceController extends Controller
{
    /**
     * Alterna modo de visualização (grid/list)
     * Utiliza cookies para armazenar preferência do usuário
     */
    public function toggleViewMode(Request $request)
    {
        $currentMode = $request->cookie('view_mode', 'grid');
        $newMode = $currentMode === 'grid' ? 'list' : 'grid';

        // Cookie válido por 30 dias
        return back()->cookie('view_mode', $newMode, 60 * 24 * 30);
    }
}
