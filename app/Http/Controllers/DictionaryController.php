<?php

namespace App\Http\Controllers;
use App\Interfaces\DictionaryRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    private DictionaryRepositoryInterface $dictionaryRepository;

    public function __construct(DictionaryRepositoryInterface $dictionaryRepository) 
    {
        $this->dictionaryRepository = $dictionaryRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->dictionaryRepository->getAllDictionaries()
        ], 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    } 
}
