<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function validateCodeForm()
    {
        return view('validate_code_form');
    }

    public function validateCode(Request $request)
    {
        $code = $request->input('code');
        $errors = $this->validateSyntax($code);
        return view('validate_code_result', ['errors' => $errors]);
    }

    private function validateSyntax($code)
    {
        $lines = explode("\n", $code);
        $stack = [];        $errors = [];
        foreach ($lines as $lineNumber => $line) {
            $line = trim($line);
            if (preg_match('/^\\s*MQ\\s*$/i', $line)) {
                $stack[] = 'MQ';
            } elseif (preg_match('/^\\s*Haga\\s*$/i', $line)) {
                // No es necesario hacer nada aquí
            } elseif (preg_match('/^\\s*FMQ\\s*;\\s*$/i', $line)) {
                if (empty($stack)) {
                    $errors[] = "FMQ sin correspondencia en la línea " . ($lineNumber + 1);
                } else {
                    array_pop($stack);
                }
            } elseif (preg_match('/^\\s*\\$[a-zA-Z_][a-zA-Z0-9_]*\\s*=\\s*\\d+\\s*;\\s*$/i', $line)) {
                // Asignación de variable numérica válida
            } elseif ($line !== '') {
                $errors[] = "Sintaxis incorrecta en la línea " . ($lineNumber + 1);
            }
        }
        if (!empty($stack)) {
            $errors[] = "MQ sin cerrar";
        }
        return $errors;
    }
}
