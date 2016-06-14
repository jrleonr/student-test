<?php

namespace App\Http\Controllers;

use App\Scraper;
use Goutte\Client;

/**
 * Class ScraperController
 * @package App\Http\Controllers
 */
class ScraperController extends Controller
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAccommodations()
    {

        $scraper = new Scraper(new Client);

        $data = $scraper->visit('http://www.unite-students.com/liverpool')
                ->getAccommodationsLinks()
                ->getAccommodationsData();
 

      	return response()->json($data);
    }
}
