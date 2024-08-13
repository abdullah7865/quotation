<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Support\Facades\Response;

class CardController extends Controller
{
    public function exportCsv()
    {
        $cards = Card::all();
        $filename = "cards.csv";
        $handle = fopen($filename, 'w+');
        fputcsv($handle, ['Base URL', 'UUID', 'Description', 'Status']);

        foreach ($cards as $card) {
            $url = url('/quote/' . $card->uuid);
            $status = $card->status == '1' ? 'Active' : 'Inactive';
            fputcsv($handle, [$url, $card->uuid, $card->description, $status]);
        }

        fclose($handle);

        $headers = [
            'Content-Type' => 'text/csv',
        ];

        return Response::download($filename, $filename, $headers)->deleteFileAfterSend(true);
    }
}
