<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Http;

class FetchDummyJsonData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:dummyjson';



    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch and store data from dummyjson.com';

    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $response = Http::get('http://dummyjson.com/products');

        $response = Http::withOptions([
            'verify' => false,
        ])->get('https://dummyjson.com/products');
        $data = $response->json();

        foreach ($data['products'] as $item) {
            $category = Category::firstOrCreate(['name' => $item['category']]);

            Product::updateOrCreate(
                ['id' => $item['id']],
                [
                    'title' => $item['title'],
                    'description' => $item['description'],
                    'price' => $item['price'],
                    'discount_percentage' => $item['discountPercentage'],
                    'rating' => $item['rating'],
                    'stock' => $item['stock'],
                    'brand' => $item['brand'],
                    'category_id' => $category->id,
                    'thumbnail' => $item['thumbnail'],
                    'images' => json_encode($item['images']),
                ]
            );
        }

        $this->info('Data fetched and stored successfully.');
    }
}
