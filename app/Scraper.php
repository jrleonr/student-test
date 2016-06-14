<?php

namespace App;

use Goutte\Client;

class Scraper
{
    /**
     * @var Client
     */
    private $client;
    /**
     * @var
     */
    private $urls;
    /**
     * @var
     */
    private $crawler;

    /**
     * Scraper constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param $url
     * @param string $method
     * @return $this
     */
    public function visit($url, $method = 'GET')
    {
        $this->crawler = $this->client->request($method, $url);

        return $this;
    }

    /**
     * @return $this
     */
    public function getAccommodationsLinks()
    {
        $this->urls = $this->crawler->filter('.contained-content > ul > li > h3 > a')->each(function ($node) {
            return $node->selectLink($node->text())->link()->getUri();
        });

        return $this;
    }

    /**
     * @return array
     */
    public function getAccommodationsData()
    {
        $data = [];

        foreach ($this->urls as $key => $url) {
        	
            $this->visit($url);

            $data[$key]['title'] = trim($this->crawler->filter('.gallery__content > h1')->text());
            $data[$key]['subtitle'] = trim($this->crawler->filter('.gallery__content > h4')->text());

            $data[$key]['images'] = $this->crawler->filter('.gallery__slider--primary > li')->each(function ($node) {
                preg_match('/\((.*)\)/', $node->attr('style'), $matches);

                return $matches[1];
            });

            $data[$key]['content'] = $this->crawler->filter('.intro_panel')->each(function ($node) {
                return $node->text();
            });

            $data[$key]['rooms'] = $this->crawler->filter('.rooms > div > ul > .rooms__list__menu__item')->each(function ($node) {

                $room = [];

                $room['title'] = trim($node->filter(' div > .top__panel > .tabs__tab__header > h3 > span')->first()->text());
                $room['description'] = trim($node->filter(' div > .top__panel > .bottom__panel > .bottom__panel__wrapper')->text());

                return $room;

            });
        }

        return $data;
    }
}
