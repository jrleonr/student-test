<?php

namespace App\Http\Controllers;

use App\Scraper;

/**
 * Class ScraperController
 * @package App\Http\Controllers
 */
class ScraperController extends Controller
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAccommodations(Scraper $scraper)
    {

        $data = $scraper->visit('http://www.unite-students.com/liverpool')
                ->getAccommodationsLinks()
                ->getAccommodationsData();

        return view('pages.accommodation', ['accommodation' => $data[0]]);
    }
}
