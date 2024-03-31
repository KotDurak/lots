<?php

namespace components;

use models\Lot;
use models\LotSearch;


class SiteParser
{
    private $siteLoader;
    public function __construct(SiteLoader $siteLoader)
    {
        $this->siteLoader = $siteLoader;
    }

    const BASE_URL = 'https://nistp.ru/';
    public function run(LotSearch $lotSearch)
    {
        return false;

        $query = http_build_query([
            'trade_number' => $lotSearch->autcion_number,
            'lot_number'  => $lotSearch->lot_number
        ]);

        $url = self::BASE_URL  .'?'. $query;
        //Видимо получил бан 403, пока что это временный
      //  $url = 'http://server/site.php';

        $document = $this->siteLoader->getDocument($url);
        /**
         * @var DOMNodeList $table
        */
        $tables = $document->query('//table[@class="data"]');

        if ($tables->count() === 0) {
            return false;
        }

        $table = $tables->item(0);
        $tr = $document->query('tbody/tr', $table)->item(0);
        $onClickAttribute = $tr->attributes->getNamedItem('onclick')->nodeValue;
        $itemUrl = $this->getMainUrl($onClickAttribute);

         $url = self::BASE_URL . 'bankrot/' . trim($itemUrl, '/');
        // $url = 'http://server/' . trim($itemUrl, '/');

        $pageDocument = $this->siteLoader->getDocument($url);
        $description = $this->getDescription($pageDocument);
        $price = $this->getStartPrice($pageDocument);
        $email = $this->getEmail($pageDocument);
        $phone = $this->getPhone($pageDocument);
        $inn = $this->getDebtorInn($pageDocument);
        $bankrotDeal = $this->getBankrotDealNumber($pageDocument);
        $date = $this->getDate($pageDocument);

        $lot = new Lot(
            $url,
            $description,
            $price,
            $email,
            $phone,
            $inn,
            $bankrotDeal,
            $date
        );

        $lot->save();

        return true;
    }

    private function getDescription(\DOMXPath $document):? string
    {
        $tbody = $document->query('//table[@id="table_lot_1"]/tbody')->item(0);
        $tr = $tbody->childNodes->item(2);
        return $tr->childNodes->item(1)->nodeValue;
    }

    private function getStartPrice(\DOMXPath $document):? string
    {
        $tbody = $document->query('//table[@id="table_lot_1"]/tbody')->item(0);
        $tr = $tbody->childNodes->item(4);
        return $tr->childNodes->item(1)->nodeValue;
    }

    private function getEmail(\DOMXPath $document): ?string
    {
        $tbody = $document->query('//table[@class="node_view"]/tbody')->item(0);
        $tr = $tbody->childNodes->item(3);

        return $tr->childNodes->item(3)->nodeValue;
    }

    private function getPhone(\DOMXPath $document):? string
    {
        $tbody = $document->query('//table[@class="node_view"]/tbody')->item(0);
        $tr = $tbody->childNodes->item(5);
        return $tr->childNodes->item(3)->nodeValue;
    }

    private function getDebtorInn(\DOMXPath $document):? string
    {
        $table = $document->query('//table[@class="node_view"]')->item(2);

        return $table->childNodes->item(5)->childNodes->item(1)->nodeValue;
    }

    private function getBankrotDealNumber(\DOMXPath $document):? string
    {
        $table = $document->query('//table[@class="node_view"]')->item(2);

        return $table->childNodes->item(10)->childNodes->item(1)->nodeValue;
    }

    private function getDate(\DOMXPath $document)
    {
        $table = $document->query('//table[@class="node_view"]')->item(1);

        return $table->childNodes->item(5)->childNodes->item(1)->nodeValue;
    }

    private function getMainUrl(string $onClickAttribute)
    {
        preg_match("{window.open\('(.*?)'}", $onClickAttribute, $matches);

        return $matches[1];
    }
}